<?php
/**
 *
 *
 * @package   mod_timeline
 * copyright Lukman Hussein
 * @license GPL3
 */

// no direct access
defined('_JEXEC') or die;

//Collect Parameters

$url = JURI::base();

$title      = $params->get('title');
$keyid      = $params->get('keyid');
$width      = $params->get('width');
$height     = $params->get('height');
$chart_id   = $params->get('chart_id');
$column1    = $params->get('column1');
$column2    = $params->get('column2');
$column3    = $params->get('column3');
$column4    = $params->get('column4');
$column5    = $params->get('column5');

if(!empty($column1)||$column1!=" "){ $tableval[] = explode(",",$column1); }
if(!empty($column2)||$column2!=" "){ $tableval[] = explode(",",$column2); }
if(!empty($column3)||$column3!=" "){ $tableval[] = explode(",",$column3); }
if(!empty($column4)||$column4!=" "){ $tableval[] = explode(",",$column4); }
if(!empty($column5)||$column4!=" "){ $tableval[] = explode(",",$column5); }

echo $script = '<script type="text/javascript" src="modules/mod_gchart/js/dygraph-dev.js"></script>';
// echo $script .= '<script type="text/javascript" src="modules/mod_timeline/js/SOF.csv"></script>';



// $doc =& JFactory::getDocument();
// $doc->addCustomTag( $scripts );
?>

<h3><?= $title ?></h3>
<div id="<?= $chart_id ?>" style="width:<?= $width ?>px; height:<?= $height ?>px;"></div>

<script type="text/javascript">
jQuery(document).ready(function($)    {  
  fire();

});

function fire(){
  // console.log(data_temp1);

  g2 = new Dygraph(
    document.getElementById("<?= $chart_id ?>"),
    "modules/mod_gcharte/sample/SOF.csv",
    {
      rollPeriod: 14,
      showRoller: true,
      customBars: false,
      title: '<?= $title ?>',
      ylabel: '<?= $y_label ?>',
      legend: 'bottom',
      labelsDivStyles: { 'textAlign': 'right' },
      xAxisHeight: 14,
      showRangeSelector: true,
      rangeSelectorHeight: 30,
      rangeSelectorPlotStrokeColor: 'yellow',
      rangeSelectorPlotFillColor: 'lightyellow'
    }
  );
}

  

</script>