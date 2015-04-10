<?php 
	include_once "models/Data_Entry.class.php";
	$entryData= new Data_Entry($db);
	$editorSubmitted = isset($_POST['saveJob']);
	if($editorSubmitted){
		$name = $_POST['name'];
		$file_type = $_POST['file_type'];
		$file_description=$_POST['file_description'];
		$file_url=$_POST['file_url'];
		$entryData->saveData($name, $file_type, $file_description, $file_url);
	}
	$adminJobDataForm= include_once "views/admin-job-data-form-html.php";
	return $adminJobDataForm;

 ?>