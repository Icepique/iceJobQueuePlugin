<br clear="all">
<center>
<img src="<?php echo url_for(sprintf('@ice_job_run_chart?id=%d&type=cpu', $job_run->getId())); ?>" width="400" height="200" alt="CPU Stats"/>
&nbsp;
<img src="<?php echo url_for(sprintf('@ice_job_run_chart?id=%d&type=load', $job_run->getId())); ?>" width="400" height="200" alt="Load Stats"/>
&nbsp;
<img src="<?php echo url_for(sprintf('@ice_job_run_chart?id=%d&type=memory', $job_run->getId())); ?>" width="400" height="200" alt="Memory Stats"/>
</center>