<?php 
	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	error_reporting(E_ALL);
	include_once "models/Data_Entry.class.php";

	// we first include the upload class, as we will need it here to deal with the uploaded file
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
		$entryData->saveCardData($item_code, $item_name, $year, $product_no, $color, $type, $price_300, $price_300_500, $price_above_500, $card_image, $contact);
	}

	// set variables
	$dir_dest = (isset($_GET['dir']) ? $_GET['dir'] : 'tmp');
	$dir_pics = (isset($_GET['pics']) ? $_GET['pics'] : $dir_dest);
 if ((isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : '')) == 'image') {

    // ---------- IMAGE UPLOAD ----------

    // we create an instance of the class, giving as argument the PHP object
    // corresponding to the file field from the form
    // All the uploads are accessible from the PHP object $_FILES
    $handle = new Upload($_FILES['card_image']);

    // then we check if the file has been uploaded properly
    // in its *temporary* location in the server (often, it is /tmp)
    if ($handle->uploaded) {

        // yes, the file is on the server
        // below are some example settings which can be used if the uploaded file is an image.
        $handle->image_resize            = true;
        $handle->image_ratio_y           = true;
        $handle->image_x                 = 300;

        // now, we start the upload 'process'. That is, to copy the uploaded file
        // from its temporary location to the wanted location
        // It could be something like $handle->Process('/home/www/my_uploads/');
        
        //$handle->Process($dir_dest); /*tem deleted by me*/
        $handle->Process('../views/');

    }

}
	//$x = $card_image=$_FILES['card_image']['tmp_name'];
	$x =  include_once "views/admin-card-data-html.php";
	return $x;

 ?>