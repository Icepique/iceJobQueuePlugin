<?php

require 'plugins/iceJobQueuePlugin/lib/model/om/BaseiceModelJobRunPeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'job_run' table.
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model
 */
class iceModelJobRunPeer extends BaseiceModelJobRunPeer
{
  public static function getObjectForRoute($parameters)
  {
    return self::retrieveByPk($parameters['id']);
  }
}
