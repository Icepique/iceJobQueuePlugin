<?php

require_once dirname(__FILE__).'/iceJobRunModuleGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/iceJobRunModuleGeneratorHelper.class.php';

/**
 * BaseIceJobRunModule actions.
 *
 * @subpackage iceJobRunModule
 * @author     Icepique Inc.
 */
class BaseIceJobRunModuleActions extends autoIceJobRunModuleActions
{
  public function executeDetails(sfWebRequest $request)
  {
    /**
     * @var $job_run iceModelJobRun
     */
    $this->job_run = $this->getRoute()->getObject();

    return sfView::SUCCESS;
  }

  public function executeRun()
  {
    $this->getUser()->setFlash('success', 'The job was queued');

    return $this->redirect('@ice_job_run');
  }

  public function executeChart(sfWebRequest $request)
  {
    /**
     * @var $job_run iceModelJobRun
     */
    $job_run = $this->getRoute()->getObject();

    $url = 'http://chart.apis.google.com/chart';
    $chd = 't:';

    // Add data, chart type, chart size, and scale to params.
    $chart = array(
      'cht'  => 'lc',
      'chxt' => 'x,x,y',
      'chs'  => $request->getParameter('size', '400x200'),
      'chco' => 'FF0000,00FF00,0000FF,007000',
      'chxl' => '0:',
      'chxp' => '1,50'
    );

    // We add 0.01 to the $runtime just to make sure it is not 0
    $runtime = $job_run->getRuntime() + 0.01;

    for ($i = 0; $i < $runtime; $i += ceil($runtime / 5))
    {
      $chart['chxl'] .= '|'. $i;
    }
    $chart['chxl'] .= '|'. $runtime;
    $chart['chxl'] .= '|1:|Run Time (seconds)';

    $chart['chxl'] .= '|2:|';
    switch ($request->getParameter('type'))
    {
      case 'cpu':
        $chart['chtt'] = 'CPU Usage';
        $chart['chdl'] = 'user|nice|system';

        $user = $nice = $system = $idle = array();
        $cpu_stats = explode('|', $job_run->getCpuStats());
        foreach ($cpu_stats as $stat)
        {
          @list($user[], $nice[], $system[], $idle[]) = explode(',', $stat);
        }

        $user   = array_filter($user);
        $nice   = array_filter($nice);
        $system = array_filter($system);

        $y = array(0, min($user), min($nice), min($system), max($user), max($nice), max($system));
        sort($y, SORT_NUMERIC);

        $chart['chxl'] .= implode('|', $y);
        $chart['chds'] = min(array(min($user), min($nice), min($system))) .','. max(array(max($user), max($nice), max($system)));
        $chart['chd'] = 't:'. implode(',', $user) .'|'. implode(',', $nice) .'|'. implode(',', $system);        

        break;
      case 'load':
        $chart['chtt'] = 'Load Average';
        $chart['chdl'] = '1 minute|5 minute|15 minute';

        $one = $five = $fifteen = array();
        $load_stats = explode('|', $job_run->getLoadavgStats());
        foreach ($load_stats as $stat)
        {
          @list($one[], $five[], $fifteen[]) = explode(',', $stat);
        }

        $one     = array_filter($one);
        $five    = array_filter($five);
        $fifteen = array_filter($fifteen);

        $y = array(0, min($one), min($five), min($fifteen), max($one), max($five), max($fifteen));
        sort($y, SORT_NUMERIC);

        $chart['chxl'] .= implode('|', $y);
        $chart['chds'] = min(array(min($one), min($five), min($fifteen))) .','. max(array(max($one), max($five), max($fifteen)));
        $chart['chd'] = 't:'. implode(',', $one) .'|'. implode(',', $five) .'|'. implode(',', $fifteen);

        break;
      case 'memory':
        $chart['chtt'] = 'Memory Usage';
        $chart['chdl'] = 'current|peak';

        $current = $peak = array();
        $memory_stats = explode('|', $job_run->getMemoryStats());
        foreach ($memory_stats as $stat)
        {
          @list($current[], $peak[]) = explode(',', $stat);
        }

        $current = array_filter($current);
        $peak = array_filter($peak);

        $y = array(0, min($current), min($peak), max($current), max($peak));
        sort($y, SORT_NUMERIC);

        foreach ($y as $k => $v)
        {
          $unit = array('b','kb','mb','gb','tb','pb');
          $y[$k] = @round($v/pow(1024,($i=floor(log($v,1024)))), 2) .' '. $unit[$i];
        }

        $chart['chxl'] .= implode('|', $y);
        $chart['chds'] = min(array(min($current), min($peak))) .','. max(array(max($current), max($peak)));
        $chart['chd'] = 't:'. implode(',', $current) .'|'. implode(',', $peak);

        break;
    }

    $this->getResponse()->setHttpHeader('Content-Type', 'image/png', TRUE);
    $this->getResponse()->sendHttpHeaders();

    // Send the request, and print out the returned bytes.
    $context = stream_context_create(
      array('http' => array('method' => 'POST', 'header' => 'Content-Type: image/png', 'content' => http_build_query($chart)))
    );
    fpassthru(fopen($url, 'r', false, $context));

    return sfView::NONE;
  }
}
