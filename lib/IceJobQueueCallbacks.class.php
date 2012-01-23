<?php

class IceJobQueueCallbacks
{
  /** @var GearmanJob */
  protected $job = null;

  /** @var iceModelJobRun */
  protected $job_run = null;

  /** @var null|array */
  protected $parameters = null;

  /** @var null|string */
  protected static $_jobs_path = null;

  /**
   *
   * @param  GearmanJob  $job
   * @param  string      $parameters
   */
  protected final function initialize(GearmanJob $job = null, $parameters = null)
  {
    // Force the use of the master MySQL server for the jobs
    Propel::setForceMasterConnection(true);

    $this->job = $job;

    if (is_string($parameters) && $parameters !== null)
    {
      $this->parameters = (array) json_decode($parameters);
    }
    else if ($job !== null && $job->workloadSize() > 0)
    {
      $this->parameters = (array) json_decode((string) $job->workload());
    }

    if ($job !== null)
    {
      $q = iceModelJobRunQuery::create()
         ->filterByJobHandle($job->handle())
         ->filterByFunctionName($job->functionName())
         ->orderBy('Id', 'DESC');

      if ($this->job_run = $q->findOne())
      {
        $this->job_run->setStatus('running');
        $this->job_run->save();
      }
    }
  }

  /**
   * @return array
   */
  public function getCallbacks()
  {
    $callbacks = array();

    // Loop through the methods of the class
    foreach (get_class_methods($this) as $method)
    {
      if (substr($method, 0, 4) == '_run')
      {
        $callbacks[] = str_replace('_run', '', $method);
      }
    }

    // Loop through the files in the "jobs/" directory
    foreach (sfFinder::type('file')->name('*Callback.php')->sort_by_name()->in(self::$_jobs_path) as $file)
    {
      $callbacks[] = str_replace('Callback.php', '', basename($file));
    }

    return $callbacks;
  }

  /**
   * @param  integer  $completed
   * @param  integer  $total
   *
   * @return void
   */
  protected function progress($completed, $total)
  {
    if ($this->job instanceof GearmanJob)
    {
      if ($this->job_run && $this->job_run->getIsBackground())
      {
        $this->job_run->setTotal($total);
        $this->job_run->setCompleted($completed);
        $this->job_run->save();
      }
      else
      {
        $this->job->sendStatus($completed, $total);
      }

      /**
       * Record the system load only if the number of total items to process ($total) is less than 100
       * or when $total > 100 if record every n'th record which is to quarantee no more than 100 system stats records
       */
      if ($total < 100 || ($total > 100 && ($completed % round($total / 100) == 0)))
      {
        $data = array(
          'system_stats' => array(
            'cpu' => IceSystemStats::getCpuLoad(), 
            'load_avg' => IceSystemStats::getLoadAvg(),
            'memory' => IceSystemStats::getMemory()
          )
        );

        if ($this->job_run && $this->job_run->getIsBackground())
        {
          $this->job_run->setSystemStats($data['system_stats']);
          $this->job_run->save();
        }
        else
        {
          $this->data($data);
        }
      }
    }
  }

  /**
   * @param  mixed  $v
   */
  protected function data($v)
  {
    if ($this->job instanceof GearmanJob)
    {
      $this->job->sendData(json_encode($v));
    }
  }

  /**
   * @return integer
   */
  protected function success()
  {
    if ($this->job_run && $this->job_run->getIsBackground())
    {
      $this->job_run->setStatus('completed');
      $this->job_run->save();
    }
  
    return GEARMAN_SUCCESS;
  }

  /**
   * @return integer
   */
  protected function fail()
  {
    if ($this->job instanceof GearmanJob)
    {
      if ($this->job_run && $this->job_run->getIsBackground())
      {
        $this->job_run->setStatus('failed');
        $this->job_run->save();
      }
      else
      {
        $this->job->sendFail();
      }
    }

    return GEARMAN_WORK_FAIL;
  }

  /**
   * @param  string  $message
   * @return boolean
   */
  protected function exception($message)
  {
    if ($this->job instanceof GearmanJob)
    {
      return $this->job->sendException($message);
    }

    return false;
  }

  /**
   * @param  mixed  $helpers
   */
  protected function loadHelpers($helpers)
  {
    /** @var $configuration sfApplicationConfiguration */
    $configuration = sfProjectConfiguration::getActive();
    $configuration->loadHelpers($helpers);
  }

  /**
   * Sometimes it makes sense to have a whole class handle the job,
   * so here we make sure we check for that
   *
   * @param  string  $name
   * @param  array   $arguments
   *
   * @return mixed
   */
  public function __call($name, $arguments)
  {
    $class = str_replace('_run', '', $name). 'Callback';

    if (file_exists(self::$_jobs_path .'/'. $class.'.php'))
    {
      include_once self::$_jobs_path .'/'. $class.'.php';

      $callback = new $class();
      if ($callback && method_exists($callback, 'run'))
      {
        return $callback->run($arguments[0], $arguments[1]);
      }
    }

    throw new sfException('No such job callback '. $name .' in class '. get_class($this));
  }
}
