<?php
	//getting login info from form data
	
    
	$dbInfo = "mysql:host=localhost;dbname=spd_system";
	$dbUser="root";
	$dbPassword="";
	$db = new PDO($dbInfo, $dbUser, $dbPassword);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    //fecthing database info form db
	include_once "../models/Data_Entry.class.php";
    $authObj= new Data_Entry($db);
    $displayAuth = $authObj->auth();
    
    while($row=$displayAuth->fetch()){
    	$displayAuthName = $row['name'];
    	$displayAuthPassword = $row['password'];
    }
   	
   	$name = $_GET['user-name'];
	$password = $_GET['password'];

   	
    //checking login info and database info

    if($displayAuthName==$name&&$displayAuthPassword==$password){
    	$displayAuthData = header("location:../admin.php?page=admin-job-data");
    }else{
    	$displayAuthData = "<h1>Login Fail</h1><a class='btn btn-default' href='../index.php'>Go Back</a>";
    }
	
	echo $displayAuthData;
	
 ?>