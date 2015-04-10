<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$db_host="localhost";
	$db_user = "root";
	$db_pass="";
	$db_name="spd_system";
	$conn = @mysql_connect($db_host, $db_user, $db_pass) or exit("Cannot connect to ".$hostName."!");
	mysql_select_db($db_name, $conn);
 ?>