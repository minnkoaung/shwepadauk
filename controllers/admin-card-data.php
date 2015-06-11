<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	include_once "models/Data_Entry.class.php";
	include('models/Image_Upload.class.php');	
	$entryData= new Data_Entry($db);
	$editorSubmitted = isset($_POST['saveCard']);
	if($editorSubmitted){
		$item_code = $_POST['item_code'];
		$item_name = $_POST['item_name'];
		$year=$_POST['year'];
		$product_no=$_POST['product_no'];
		$product_of=$_POST['product_of'];
		$color=$_POST['color'];
		$type=$_POST['type'];
		$price_300=$_POST['price_300'];
		$price_300_500=$_POST['price_300_500'];
		$price_above_500=$_POST['price_above_500'];
		//$card_image=$_POST['card_image'];
		$card_image=$_FILES['card_image']['name'];
		$contact=$_POST['contact'];
		$entryData->saveCardData($item_code, $item_name, $year, $product_no, $product_of, $color, $type, $price_300, $price_300_500, $price_above_500, $card_image, $contact);
	}
//dertermined var name from image.upload.class	
	$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : 'tmp');
	$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
 	if ((isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '')) == 'image') {
	    $handle = new Upload($_FILES['card_image']);
	    if ($handle->uploaded) {
	        $handle->image_resize            = true;
	        $handle->image_ratio_y           = true;
	        $handle->image_x                 = 300;
	        $handle->Process('images/card_images');

	    }
	}
	//$x = $card_image=$_FILES['card_image']['tmp_name'];
	$x =  include_once "views/admin-card-data-html.php";
	return $x;

 ?>