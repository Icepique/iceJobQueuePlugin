#!/bin/bash

cd $SYMFONY

OUTPUT=$( { nice ./symfony job-queue:process --context=$CONTEXT --env=$ENV; } 2>&1 )
ERR=$?

## Possibilities
# 255   - PHP fatal error in the job
# 98    - planned restart
# 99    - planned stop, exit.
# 0     - unplanned restart (as returned by "exit;")
#       - anything else is also unplanned paused/restart

if [ $ERR -eq 98 ]
then
  # a planned restart - instantly
  echo "98: PLANNED_RESTART";
  exec $0 $@;
fi

if [ $ERR -eq 99 ]
then
  # planned complete exit
  echo "99: PLANNED_SHUTDOWN";
  exit 0;
fi

if [ $ERR -eq 255 ]
then
  # PHP fatal error
  echo $OUTPUT >&2;
  echo "255: PHP_FATAL_ERROR" >&2;

  exit 255;
fi

# unplanned exit, pause, and restart
echo "unplanned restart: err:" $ERR;
echo "sleeping for 5 sec"
sleep 5

exec $0 $@
