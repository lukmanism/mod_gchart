<?php
/**
 *
 *
 * @package   mod_timeline
 * copyright Blackdale.com/Bob Galway
 * @license GPL3
 */

// no direct access
defined('_JEXEC') or die;
$script = "<script type='text/javascript' src='".$url."modules/mod_gchart/js/dygraph-dev.js'></script>";
$doc =& JFactory::getDocument();
$doc->addCustomTag($script);