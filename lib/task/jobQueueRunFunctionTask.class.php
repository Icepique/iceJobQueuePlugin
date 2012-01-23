<?php

class jobQueueRunFunctionTask extends IceBaseTask
{
  protected function configure()
  {
    $this->addArguments(array(
      new sfCommandArgument('function', sfCommandArgument::REQUIRED, 'The function to run'),
    ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name', 'frontend'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'propel'),
      new sfCommandOption('context', null, sfCommandOption::PARAMETER_REQUIRED, 'The job queue context name', 'global'),
      new sfCommandOption('parameters', null, sfCommandOption::PARAMETER_OPTIONAL, 'The parameters for the job (json_encoded())', null)
    ));

    $this->namespace        = 'job-queue';
    $this->name             = 'run-function';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [job-queue:run-function|INFO] task runs a job queue function on the console.
Call it with:

  [php job-queue:run-function|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    ini_set('memory_limit', '512M');

    // initialize the database connection
    $databaseManager = new sfDatabaseManager($this->configuration);
    $databaseManager->getDatabase($options['connection'])->getConnection();

    sfContext::createInstance($this->configuration);

    $class  = ucwords(strtolower($options['context'])) .'JobQueueCallbacks';
    $object = new $class();

    call_user_func_array(array($object, '_run'. sfInflector::camelize($arguments['function'])), array(null, $options['parameters']));
  }
}
