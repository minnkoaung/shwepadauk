<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Data_Entry.class.php";
    $displayCardData= new Data_Entry($db);
    $diplayData = $displayCardData->displayCardData();
	$displayCardData = include_once"views/dispaly-card-data-card-view-html.php";
	return $displayCardData;
 ?>