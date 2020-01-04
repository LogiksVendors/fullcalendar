<?php
if(!defined('ROOT')) exit('No direct script access allowed');

$webPath=dirname(getWebPath(__FILE__))."/";

echo '<link rel="stylesheet" href="'.$webPath.'fullcalendar/fullcalendar.min.css" />';
echo '<link rel="stylesheet" href="'.$webPath.'fullcalendar/fullcalendar.print.min.css" media="print" />';
echo '<script src="'.$webPath.'fullcalendar/moment.min.js"></script>';
echo '<script src="'.$webPath.'fullcalendar/fullcalendar.min.js"></script>';
?>
