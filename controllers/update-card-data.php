<?php
	include_once "models/Data_Entry.class.php";
	$entryData= new Data_Entry($db);
	$editorSubmitted = isset($_POST['updateCardData']);
	if($editorSubmitted){
		$id = $_POST['id'];
		$item_code = $_POST['item_code'];
		$item_name = $_POST['item_name'];
		$year = $_POST['year'];
		$product_no=$_POST['product_no'];
		$product_of=$_POST['product_of'];
		$color=$_POST['color'];
		$type=$_POST['type'];
		$price_300=$_POST['price_300'];
		$price_300_500=$_POST['price_300_500'];
		$price_above_500=$_POST['price_above_500'];
		$card_image=$_POST['card_image'];
		$contact=$_POST['contact'];
		$entryData->updateCardData($item_code, $item_name, $year, $product_no, $product_of, $color, $type, $price_300, $price_300_500, $price_above_500, $card_image, $contact);
	}
	$updateCardData= include_once "views/update-card-data-form-html.php";
	return $updateCardData;

	/*$text = "<h1 class='test'>Update Issue Wil fix soon<h1>"; 
	return $text;*/
 ?>