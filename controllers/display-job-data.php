<?php
    error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Data_Entry.class.php";
    $displayJobData= new Data_Entry($db);
    $diplayData = $displayJobData->displayJobData();
    //$onerow = $diplayData->fetch();
    while($row=$diplayData->fetch()){
        $test= "<li class='btn btn-default'>".$row['name']."</li>";
        return $test;
    }
   


    //$test = $onerow[0]['name']; 
    //$test = print_r($onerow, true);
    
  /*  $displayJobData = include_once "views/display-job-data-html.php";
	return $displayJobData ;*/

 ?>