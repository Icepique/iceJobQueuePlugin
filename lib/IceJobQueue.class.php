<?php

class IceJobQueue
{
  const SERVERS = 'ice-gearmand:4730';

  const PRIORITY_HIGH = 0;
  const PRIORITY_NORMAL = 1;
  const PRIORITY_LOW = 2;

  /**
   * Get an instance of the GearmanClient class specific for our setup
   *
   * @param  boolean  $callbacks  Should we register the callback functions
   * @param  string   $servers  A comma-separated list of servers, each server specified in the format 'host:port'
   *
   * @see http://bg.php.net/manual/en/gearmanclient.construct.php
   * @see http://bg.php.net/manual/en/gearmanclient.addservers.php
   *
   * @return GearmanClient
   */
  public static function getGearmanClient($callbacks = false, $servers = self::SERVERS)
  {
    if (!class_exists('GearmanClient'))
    {
      throw new LogicException('You need to enable the Gearman extension!');
    }

    $client = new GearmanClient();
    $client->addServers($servers);

    if ($callbacks === true)
    {
      $client->setCreatedCallback(array('IceJobQueue', 'createdCallback'));
      $client->setDataCallback(array('IceJobQueue', 'dataCallback'));
      $client->setStatusCallback(array('IceJobQueue', 'statusCallback'));
      $client->setCompleteCallback(array('IceJobQueue', 'completeCallback'));
      $client->setFailCallback(array('IceJobQueue', 'failCallback'));
      $client->setExceptionCallback(array('IceJobQueue', 'exceptionCallback'));
    }

    return $client;
  }

  /**
   * Get an instance of the GearmanWorker class specific for our setup
   *
   * @param  string  $servers  A comma-separated list of servers, each server specified in the format 'host:port'
   *
   * @see http://bg.php.net/manual/en/gearmanworker.construct.php
   * @see http://bg.php.net/manual/en/gearmanworker.addservers.php
   *
   * @return GearmanWorker
   */
  public static function getGearmanWorker($servers = self::SERVERS)
  {
    if (!class_exists('GearmanWorker'))
    {
      throw new LogicException('You need to enable the Gearman extension!');
    }

    $worker = new GearmanWorker();
    $worker->addServers($servers);

    return $worker;
  }

  /**
   * Add a job to Gearman
   *
   * @param  string   $function_name
   * @param  string   $workload
   * @param  string   $context
   * @param  integer  $priority
   * @param  string   $unique
   * 
   * @return boolean
   */
  public static function queue($function_name, $workload, $context = 'global', $priority = IceJobQueue::PRIORITY_NORMAL, $unique = null)
  {
    $unique = ($unique === null) ? self::uuid() : $unique;

    $job_run = new iceModelJobRun();
    $job_run->setContext($context);
    $job_run->setCrontabId(null);
    $job_run->setUniqueKey($unique);
    $job_run->setFunctionName($function_name);
    $job_run->setStatus('queued');
    $job_run->setPriority($priority);
    $job_run->setIsBackground(true);

    try
    {
      $job_run->save();

      // Create a GearmanClient without any callbacks
      $client = self::getGearmanClient(false);

      switch ($priority)
      {
        case IceJobQueue::PRIORITY_HIGH:
          $method = 'addTaskHighBackground';
          break;
        case IceJobQueue::PRIORITY_LOW:
          $method = 'addTaskLowBackground';
          break;
        case IceJobQueue::PRIORITY_NORMAL:
        default:
          $method = 'addTaskBackground';
          break;
      }

      // Queue the task
      $task = call_user_func_array(
        array($client, $method),
        array($function_name, $workload, $context, $unique)
      );

      if ($task instanceof GearmanTask)
      {
        return $client->runTasks();
      }
      else
      {
        $job_run->delete();
      }
    }
    catch (Exception $e) {};

    return false;
  }

  /**
   * @param  GearmanTask  $task
   */
  public static function createdCallback($task)
  {
    if ($job_run = self::_getJobRun($task))
    {
      $job_run->setJobHandle($task->jobHandle());
      $job_run->setStatus('queued');
      $job_run->save();
    }
  }

  /**
   * @param  GearmanTask  $task
   */
  public static function dataCallback($task)
  {
    if ($job_run = self::_getJobRun($task))
    {
      $data = @unserialize($task->data());

      if (isset($data['system_stats']))
      {
        $job_run->setSystemStats($data['system_stats']);
        $job_run->save();
      }
    }
  }

  /**
   * @param  GearmanTask  $task
   */
  public static function statusCallback($task)
  {
    if ($job_run = self::_getJobRun($task))
    {
      $job_run->setTotal($task->taskDenominator());
      $job_run->setCompleted($task->taskNumerator());
      $job_run->save();
    }
  }

  /**
   * @param  GearmanTask  $task
   */
  public static function completeCallback($task)
  {
    if ($job_run = self::_getJobRun($task))
    {
      $status = ($task->data() == GEARMAN_WORK_FAIL) ? 'failed' : 'completed';

      $job_run->setStatus($status);
      $job_run->save();
    }
  }

  /**
   * @param  GearmanTask  $task
   */
  public static function failCallback($task)
  {
    if ($job_run = self::_getJobRun($task))
    {
      $job_run->setStatus('failed');
      $job_run->save();
    }
  }

  /**
   * @param  GearmanTask  $task
   */
  public static function exceptionCallback($task)
  {
    if ($job_run = self::_getJobRun($task))
    {
      $job_run->setStatus('failed');
      $job_run->save();
    }
  }

  /**
   * @static
   * @return string
   */
  public static function uuid()
  {
    return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
      // 32 bits for "time_low"
      mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

      // 16 bits for "time_mid"
      mt_rand( 0, 0xffff ),

      // 16 bits for "time_hi_and_version",
      // four most significant bits holds version number 4
      mt_rand( 0, 0x0fff ) | 0x4000,

      // 16 bits, 8 bits for "clk_seq_hi_res",
      // 8 bits for "clk_seq_low",
      // two most significant bits holds zero and one for variant DCE1.1
      mt_rand( 0, 0x3fff ) | 0x8000,

      // 48 bits for "node"
      mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
  }

  /**
   * @static
   * 
   * @param  GearmanTask  $task
   * @return iceModelJobRun
   */
  private static function _getJobRun($task)
  {
    $c = new Criteria();
    $c->add(iceModelJobRunPeer::UNIQUE_KEY, $task->unique());

    return iceModelJobRunPeer::doSelectOne($c);
  }
}
