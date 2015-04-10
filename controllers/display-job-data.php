<?php
    error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Page_Data.class.php";
    $displayJobData= new Data_Entry($db);
    $diplayData = $displayJobData->displayJobData();
    $onerow = $diplayData->fetchObject();
    $test = print_r
    
  /*  $displayJobData = include_once "views/display-job-data-html.php";
	return $displayJobData ;*/

 ?>