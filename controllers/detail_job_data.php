<?php 
	include_once "models/Data_Entry.class.php";
	$detailJobData= new Data_Entry($db);
	$id = isset($_GET['id']);
	$detailJob=$detailJobData->detailJobData($id);
	$detailJobDataTable = include_once "views/detail-job-data-html.php";
	return $detailJobDataTable;

	/*while($row=$detailJob->fetch()){
		$x = "<p>".$row['name']."</p>";
	}
	return $x;*/
 ?>
