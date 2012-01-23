<?php

$status = $iceModelJobRun->getStatus();

if ($status == 'completed')
{
  echo '<span style="color: green">', $status, '</span>';
}
else if ($status == 'failed')
{
  echo '<span style="color: red">', $status, '</span>';
}
else
{
  echo $status;
}

