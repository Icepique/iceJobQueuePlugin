<?php

if ($crontab_id = $iceModelJobRun->getCrontabId())
{
  $c = new Criteria();
  $c->addAsColumn('average', sprintf('ROUND(AVG(UNIX_TIMESTAMP(%s) - UNIX_TIMESTAMP(%s)))', iceModelJobRunPeer::UPDATED_AT, iceModelJobRunPeer::CREATED_AT));
  $c->add(iceModelJobRunPeer::CRONTAB_ID, $crontab_id);

  $stmt = iceModelJobRunPeer::doSelectStmt($c);
  $average = $stmt->fetchColumn(0);

  echo sprintf('%d seconds', $average);
}
else
{
  echo '-';
}
