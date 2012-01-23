<?php

$created_at = $iceModelJobRun->getCreatedAt('U');
$updated_at = $iceModelJobRun->getUpdatedAt('U');

echo distance_of_time_in_words($created_at, $updated_at, true);
