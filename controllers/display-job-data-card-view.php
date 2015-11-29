<?php
    
    /*error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Data_Entry.class.php";
    $displayJobData= new Data_Entry($db);
    $diplayData = $displayJobData->displayJobData();
    $displayJobData = include_once "views/display-job-data-card-view-html.php";
	return $displayJobData ;*/
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Pdo_pagination.php";
	$pagination = new PDO_Pagination( $db );
	$pagination->setSQL( "SELECT * FROM job_data ORDER BY id DESC" );
	$pagination->setPaginator( 'displayJob' );
	$pagination->setLimitPerPage( 10 );

	$results = $db->query( $pagination->getSQL() );

	//$pagination = new PDO_Pagination( $connection );
	//$displayJobData= new Data_Entry($db);
	//$diplayData = $displayJobData->displayJobData();
	$displayJobData = include_once "views/display-job-data-card-view-html.php";
	return $displayJobData ;
 ?>