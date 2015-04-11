<?php
    error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Data_Entry.class.php";

    $displayJobData= new Data_Entry($db);
    $diplayData = $displayJobData->displayJobData();
    $onerow = $diplayData->fetchAll();
    $test = print_r($onerow, true);
    return "<pre>$test</pre>";
  /*  $displayJobData = include_once "views/display-job-data-html.php";
	return $displayJobData ;*/

 ?>