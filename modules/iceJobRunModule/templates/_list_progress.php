<?php

$total = $iceModelJobRun->getTotal();
$completed = $iceModelJobRun->getCompleted();

$percentage = 100;

if ($total > 0)
{
  $percentage = round(($completed / $total) * 100);
}

if ($iceModelJobRun->getStatus() == 'pending')
{
  echo '-';
}
else
{
  echo sprintf('%d%%&nbsp;<span style="color:grey;">(%d/%d)</span>', $percentage, $completed, $total);
}
