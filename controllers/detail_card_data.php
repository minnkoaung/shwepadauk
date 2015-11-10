<?php 
	include_once "models/Data_Entry.class.php";
	include_once "models/Image_Upload.class.php";
	$detailCardData= new Data_Entry($db);
	$id = isset($_GET['id']);
	$detailCard=$detailCardData->detailCardData($id);
	$detailCardDataTable = include_once "views/detail-card-data-html.php";
	return $detailCardDataTable;

	/*while($row=$detailJob->fetch()){
		$x = "<p>".$row['name']."</p>";
	}
	return $x;*/
 ?>