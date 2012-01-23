<?php

require 'plugins/iceJobQueuePlugin/lib/model/om/BaseiceModelJobRun.php';


/**
 * Skeleton subclass for representing a row from the 'job_run' table.
 *
 * @package    propel.generator.plugins.iceJobQueuePlugin.lib.model
 */
class iceModelJobRun extends BaseiceModelJobRun
{
  public function getCrontab(PropelPDO $con = null)
  {
    return iceModelCrontabPeer::retrieveByPk($this->getCrontabId());
  }

  public function getRuntime()
  {
    $created_at = $this->getCreatedAt('U');
    $updated_at = $this->getUpdatedAt('U');

    return $updated_at - $created_at;
  }

  public function setSystemStats($stats)
  {
    if (!is_array($stats)) return false;

    $this->setLoadavgStats($this->getLoadavgStats() . implode(',', $stats['load_avg']) . '|');
    $this->setCpuStats($this->getCpuStats() . implode(',', $stats['cpu']). '|');
    $this->setMemoryStats($this->getMemoryStats() . implode(',', $stats['memory']) . '|');

    return true;
  }
}
