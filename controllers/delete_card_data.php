<?php 
	include "models/Data_Entry.class.php";
	$deleteEntryData= new Data_Entry($db);
	$deleteEntrySubmitted = isset($_GET['id']);
	if($deleteEntrySubmitted){
		$id = $_GET['id'];
		$deleteEntryData->deleteCardData($id);
	}
	$deleteConfrim= include"views/deleteCardData-html.php";
	return $deleteConfrim;
	//$id = "<h1>This is the action for deleting data</h1>";
	//return $id;
 ?>