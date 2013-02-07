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

$script = '<script type="text/javascript" src="http://www.google.com/jsapi"></script>';

$doc =& JFactory::getDocument();
$doc->addCustomTag( $script );
?>  
<script type="text/javascript">
    google.load('visualization', '1', {packages: ['annotatedtimeline']});
jQuery(document).ready(function($)    {  
    window.row = Array();

    $.getJSON( "https://spreadsheets.google.com/feeds/list/<?= $keyid ?>/od6/public/values?alt=json-in-script&callback=?",
      function (data) {   
      $.each(data.feed.entry, function(i,entry) {  
        row.push([
            new Date(entry.gsx$<?= $tableval[0][0] ?>.$t)
            ,+entry.gsx$<?= $tableval[1][0] ?>.$t
            <? if($tableval[2][0]) echo ',+entry.gsx$'.$tableval[2][0].'.$t'; ?>
            <? if($tableval[3][0]) echo ',+entry.gsx$'.$tableval[3][0].'.$t'; ?>
            <? if($tableval[4][0]) echo ',+entry.gsx$'.$tableval[4][0].'.$t'; ?>
            ]); 
        // console.log(row);
      });
    });

    function drawVisualization() {
      var data = new google.visualization.DataTable();
      data.addColumn('date', '<?= $tableval[0][1] ?>');
      data.addColumn('number', '<?= $tableval[1][1] ?>');
      <? if($tableval[2][0]) echo "data.addColumn('number', '".$tableval[2][1]."');"; ?>
      <? if($tableval[3][0]) echo "data.addColumn('number', '".$tableval[3][1]."');"; ?>
      <? if($tableval[4][0]) echo "data.addColumn('number', '".$tableval[4][1]."');"; ?>
      data.addRows(row);
      var options = {
        'displayAnnotations'    : true,
        'legendPosition'        : 'newRow',
        'wmode'                 : 'transparent'
    }    
      var annotatedtimeline = new google.visualization.AnnotatedTimeLine(document.getElementById('<?= $chart_id ?>'));
      annotatedtimeline.draw(data, options);
    }    
    google.setOnLoadCallback(drawVisualization);
});
</script>
<h3><?= $title ?></h3>
<div id="<?= $chart_id ?>" style="width:<?= $width ?>px; height:<?= $height ?>px;"></div>