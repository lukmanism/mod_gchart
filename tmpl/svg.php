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

?>
<div id="<?= $chart_id ?>" style="width:<?= $width ?>px; height:<?= $height ?>px;"></div>

<script type="text/javascript">
jQuery(document).ready(function($)    { 
  fire("<?= $chart_id ?>");
});

function fire(id){
  g2 = new Dygraph(
    document.getElementById(id),
    "<?= $csvpath ?>",
    {
      rollPeriod: <?= $rollPeriod ?>,
      showRoller: <?= $showRoller ?>,
      customBars: false,
      title: '<?= $title ?>',
      ylabel: '<?= $y_label ?>',
      legend: 'bottom',
      labelsDivStyles: { 'textAlign': 'right' },
      xAxisHeight: <?= $xAxisHeight ?>,
      showRangeSelector: <?= $showRangeSelector ?>,
      rangeSelectorHeight: <?= $rangeSelectorHeight ?>,
      rangeSelectorPlotStrokeColor: 'yellow',
      rangeSelectorPlotFillColor: 'lightyellow'
    }
  );
}  

</script>