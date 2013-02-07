<?php
/**
 *
 *
 * @package   mod_timeline
 * copyright Bob Galway
 * @license GPL3
 */

// no direct access
defined('_JEXEC') or die;


//Collect Parameters

$url = JURI::base();

$title      			= $params->get('title');
$rollPeriod      		= $params->get('rollPeriod');
$showRoller      		= $params->get('showRoller');
$y_label      			= $params->get('Y_LABEL');
$csvpath      			= $url.$params->get('CSVPATH');
$xAxisHeight      		= $params->get('xAxisHeight');
$showRangeSelector      = $params->get('showRangeSelector');
$rangeSelectorHeight    = $params->get('rangeSelectorHeight');
$keyid      			= $params->get('keyid');
$width      			= $params->get('width');
$height     			= $params->get('height');
$chart_id   			= $params->get('chart_id');

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require JModuleHelper::getLayoutPath('mod_gchart', $params->get('layout', 'default'));

