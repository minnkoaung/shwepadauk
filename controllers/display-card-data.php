<?php 
	//without pagination working codes
	/*error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Data_Entry.class.php";
    $displayCardData= new Data_Entry($db);
    $diplayData = $displayCardData->displayCardData();
	$displayCardData = include_once"views/display-card-data-html.php";
	return $displayCardData;*/

	// with pagination 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Pdo_pagination.php";
	$pagination = new PDO_Pagination( $db );
	$pagination->setSQL( "SELECT * FROM data_keep ORDER BY id DESC" );
	$pagination->setPaginator( 'displayCard' );
	$pagination->setLimitPerPage( 2 );

	$results = $db->query( $pagination->getSQL() );

	//$pagination = new PDO_Pagination( $connection );
	//$displayJobData= new Data_Entry($db);
	//$diplayData = $displayJobData->displayJobData();
	$displayCardData = include_once"views/display-card-data-html.php";
	return $displayCardData;
 ?>