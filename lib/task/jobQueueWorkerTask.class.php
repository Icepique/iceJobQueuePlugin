<?php

class jobQueueWorkerTask extends IceBaseTask
{
  protected function configure()
  {
    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name', 'frontend'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'propel'),
      new sfCommandOption('context', null, sfCommandOption::PARAMETER_REQUIRED, 'The job queue context name', 'global'),
      new sfCommandOption('deamonize', null, sfCommandOption::PARAMETER_REQUIRED, 'Whether to go to the background', 'yes'),
      new sfCommandOption('port', null, sfCommandOption::PARAMETER_OPTIONAL, 'The port to bind to', null)
    ));

    $this->namespace        = 'job-queue';
    $this->name             = 'worker';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [job-queue:worker|INFO] task to spawn a gearman PHP worker
Call it with:

  [php job-queue:worker|INFO]
EOF;
  }

  protected function execute($arguments = array(), $options = array())
  {
    if (!empty($options['port']))
    {
      $cmd = sprintf(
        "SYMFONY=%s CONTEXT=%s ENV=%s /www/bin/solo -port=%d -silent %s/iceJobQueuePlugin/data/bin/worker.sh > /dev/null %s",
        sfConfig::get('sf_root_dir'), $options['context'], $options['env'], $options['port'], sfConfig::get('sf_plugins_dir'), ($options['deamonize'] == 'yes') ? '&' : null
      );
    }
    else
    {
      $cmd = sprintf(
        "SYMFONY=%s CONTEXT=%s ENV=%s %s/iceJobQueuePlugin/data/bin/worker.sh > /dev/null %s",
        sfConfig::get('sf_root_dir'), $options['context'], $options['env'], sfConfig::get('sf_plugins_dir'), ($options['deamonize'] == 'yes') ? '&' : null
      );
    }

    exec($cmd);
  }
}
