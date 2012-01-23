<?php

class jobQueueProcessTask extends IceBaseTask
{
  protected function configure()
  {
    $this->addArguments(array(
      new sfCommandArgument('function', sfCommandArgument::OPTIONAL, null),
    ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name', 'frontend'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'propel'),
      new sfCommandOption('context', null, sfCommandOption::PARAMETER_REQUIRED, 'The job queue context name', 'global')
    ));

    $this->namespace        = 'job-queue';
    $this->name             = 'process';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [job-queue:process|INFO] task processes the job queue.
Call it with:

  [php symfony job-queue:process|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    ini_set('memory_limit', '512M');

    $svn = file(sfConfig::get('sf_root_dir') .'/.svn/entries');
    $start_revision = (int) $svn[3];

    if ($start_revision <= 0)
    {
      $this->logSection('error', 'Could not determine the start (svn) revision!');

      exit(99);
    }

    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $databaseManager->getDatabase($options['connection'])->getConnection();

    sfContext::createInstance($this->configuration);

    // Get a GearmanWorker
    $worker = IceJobQueue::getGearmanWorker();

    $class  = ucwords(strtolower($options['context'])) .'JobQueueCallbacks';
    $object = new $class();

    // We assume there is no work to do
    $has_work = false;

    if (!empty($arguments['function']))
    {
      $has_work = true;

      $worker->addFunction(
        $arguments['function'],
        array($object, '_run'. sfInflector::camelize($arguments['function'])),
        $options['context']
      );

      $this->logSection('info', 'Processing jobs for function: '. $arguments['function']);
    }
    else if (method_exists($object, 'getCallbacks'))
    {
      foreach ($object->getCallbacks() as $callback)
      {
        $has_work = true;

        $function = sfInflector::underscore($callback);
        $worker->addFunction($function, array($object, '_run'. $callback), $options['context']);

        $this->logSection('info', 'Processing jobs for function: '. $function);
      }
    }

    ($has_work == false) ? $this->log('No work to do...') : $this->log("Waiting for job...");

    while ($worker->work())
    {
      if ($worker->returnCode() != GEARMAN_SUCCESS)
      {
        $this->logSection('error', $worker->error());
      }
      else
      {
        $this->logSection('success', 'Finished job @ '. date('Y-m-d H:i:s'));
      }

      $unit = array('b','kb','mb','gb','tb','pb');
      $memory = @round(memory_get_usage()/pow(1024,($i=floor(log(memory_get_usage(),1024)))), 2) .' '. $unit[$i];
      $this->logSection('notice', 'Current memory usage: '. $memory);

      if (file_exists(sfConfig::get('sf_root_dir') .'/REVISION'))
      {
        $current_revision = (int) file_get_contents(sfConfig::get('sf_root_dir') .'/REVISION');
      }
      else
      {
        $svn = file(sfConfig::get('sf_root_dir') .'/.svn/entries');
        $current_revision = (int) $svn[3];
      }

      // Exit the loop and the script if the memory usage goes out of limits
      // or the files were updated and PHP needs to reload them
      if (memory_get_usage() > 268435456 || $start_revision != $current_revision)
      {
        exit(98);
      }

      // Free some variables
      unset($memory, $current_revision, $svn);

      // Sleep for 5 seconds
      sleep(5);
    }
  }
}
