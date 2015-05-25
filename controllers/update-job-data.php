<?php
	include_once "models/Data_Entry.class.php";
	$entryData= new Data_Entry($db);
	$editorSubmitted = isset($_POST['updateJobData']);
	if($editorSubmitted){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$file_type = $_POST['file_type'];
		$file_description=$_POST['file_description'];
		$file_url=$_POST['file_url'];
		$entryData->updateJobData($name, $file_type, $file_description, $file_url);
	}
	$updateJobData= include_once "views/update-job-data-form-html.php";
	return $updateJobData;

	/*$text = "<h1 class='test'>Update Issue Wil fix soon<h1>"; 
	return $text;*/
 ?>


