<?php 
	include "models/Data_Entry.class.php";
	$editEntryData = new Data_Entry($db);
	$editEntrySubmitted =  isset($_GET['id']);
	if($editEntrySubmitted){
		$id = $_GET['id'];
		$test = $editEntryData->editJobData($id);
	}
	$editOutputView = include "views/editJobData-html.php";
	return $editOutputView;
 ?>