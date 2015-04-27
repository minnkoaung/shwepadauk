<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Page_Data.class.php";
	$pageData = new Page_Data();
	$pageData->title = "Shwe Padauk Data Control System";
	$pageData->addCSS('css/bootstrap.min.css');
	$pageData->addCSS('css/mystyle.css');
	$pageData->nav=include_once"views/navigation.php";
	
	$dbInfo = "mysql:host=localhost;dbname=spd_system";
	$dbUser="root";
	$dbPassword="";
	$db = new PDO($dbInfo, $dbUser, $dbPassword);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$navigationIsClicked = isset($_GET['page']);
	if($navigationIsClicked){
		$pageToLoad = $_GET['page'];
	}else{
		$pageToLoad='display-job-data';
	}
	$pageData->content = include_once"controllers/$pageToLoad.php";
	$page = include_once "views/page.php";
	echo $page;
 ?>