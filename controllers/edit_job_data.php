<?php 
	/* include "models/Data_Entry.class.php";
	$deleteEntryData= new Data_Entry($db);
	$deleteEntrySubmitted = isset($_GET['id']);
	if($deleteEntrySubmitted){
		$id = $_GET['id'];
		$deleteEntryData->deleteJobData($id);
	}
	$deleteConfrim= include"views/deleteJobData-html.php";
	return $deleteConfrim;
	//$id = "<h1>This is the action for deleting data</h1>";
	//return $id;*/

	include "models/Data_Entry.class.php";
	$editEntryData = new Data_Entry($db);
	$editEntrySubmitted =  isset($_GET['id']);
	if($editEntrySubmitted){
		$id = $_GET['id'];
		$test = $editEntryData->editJobData($id);
	}
//	 while($row=$test->fetch()){
//			 $output =  $row['name'];
//			 return $output;
//		 }
//	
		$editOutputView = include "views/editJobData-html.php";
		return $editOutputView;
 ?>