<?php

require 'plugins/iceJobQueuePlugin/lib/model/om/BaseiceModelJobQueuePeer.php';


/**
 * Skeleton subclass for performing query and update operations on the 'job_queue' table.
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model
 */
class iceModelJobQueuePeer extends BaseiceModelJobQueuePeer
{
  public static function retireveByUniqueKey($unique_key)
  {
    $c = new Criteria();
    $c->add(self::UNIQUE_KEY, $unique_key);

    return self::doSelectOne($c);
  }
}
