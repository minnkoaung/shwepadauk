<?php
    
    error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Data_Entry.class.php";
    $displayJobData= new Data_Entry($db);
    $diplayData = $displayJobData->displayJobData();
    $displayJobData = include_once "views/display-job-data-html.php";
	return $displayJobData ;
 ?>