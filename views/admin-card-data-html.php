<?php 
	include_once "models/Image_Upload.class.php";
	return"
		 <div class='container '>
		       <div class='row'>
 			<h3 style='color:orange;text-align:center;min-height:50px;'>Insert New Card</h3>	
		          <form class='form-horizontal job-data-form-container' role='form' action='admin.php?page=admin-card-data' name='saveData' method='post' enctype='multipart/form-data'>

		                <div class='form-group'>
		                  <label for='item_code' class='col-sm-2 control-label'>Item Code</label>
		                  <div class='col-sm-9'>
		                    <input type='text' class='form-control' name='item_code' placeholder='Insert Item Code' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='item_name' class='col-sm-2 control-label'>Item's name</label>
		                  <div class='col-sm-9'>
		                    <input type='text' class='form-control' name='item_name' placeholder='Insert Item Name' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='year' class='col-sm-2 control-label'>Year of Manufacture</label>
		                  <div class='col-sm-9'>
		                   <select class='form-control' name='year'>
		                        <option>2015</option>
		                        <option>2016</option>
		                        <option>2017</option>
		                        <option>2018</option>
		                        <option>2019</option>
		                        <option>2020</option>
		                        <option>2021</option>
		                        <option>2022</option>
		                  </select>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='product_no' class='col-sm-2 control-label'>Product No.</label>
		                  <div class='col-sm-9'>
		                    <input type='text' class='form-control' name='product_no' placeholder='Insert Product No.' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='product_of' class='col-sm-2 control-label'>Product of</label>
		                  <div class='col-sm-9'>
		                   <select class='form-control' name='product_of'>
		                        <option>Aung</option>
		                        <option>DKA</option>
		                        <option>Nay La</option>
		                        <option>Paper House</option>
		                        <option>Shwe Padauk</option>
		                        <option>Tun Naung</option>
		                        <option>Tun Oo</option>
		                        <option>Thandar Kyaw</option>
		                  </select>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='color' class='col-sm-2 control-label'>Color</label>
		                  <div class='col-sm-9'>
		                  	<!-- <input type='file' class='form-control' name='color' value='Insert File Url'> --> 
		                     <input type='text' class='form-control' name='color' placeholder='Insert Avilable Color' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='type' class='col-sm-2 control-label'>Categories</label>
		                  <div class='col-sm-9'>
		                   <select class='form-control' name='type'>
		                        <option>Economy</option>
		                       	<option>Superior</option>
		                       	<option>Handmade</option>
		                       	<option>Classic Handmade</option>
		                  </select>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='price_300' class='col-sm-2 control-label'>Price in 300 Stocks</label>
		                  <div class='col-sm-9'>
		                     <input type='text' class='form-control' name='price_300' placeholder='Insert Price in 300 Stocks' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='price_300_500' class='col-sm-2 control-label'>Price in 300-500 Stocks</label>
		                  <div class='col-sm-9'>
		                     <input type='text' class='form-control' name='price_300_500' placeholder='Insert Price in 300-500 Stocks' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='price_above_500' class='col-sm-2 control-label'>Price in 300-500 Stocks</label>
		                  <div class='col-sm-9'>
		                     <input type='text' class='form-control' name='price_above_500' placeholder='Insert Price above 500 Stocks' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='card_image' class='col-sm-2 control-label'>Upload Card Image</label>
		                  <div class='col-sm-9 '>
		                  	<input type='hidden' name='action' value='image' >
		                  	<input type='file' class='form-control imgupload-btn' name='card_image' required> 
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='contact' class='col-sm-2 control-label'>Contact</label>
		                  <div class='col-sm-9'>
		                  	<input type='text' class='form-control' name='contact' placeholder='Insert Delear Contact' required>
		                  </div>
		                </div>
		                
		                <div class='form-group'>
		                  <div class='col-sm-offset-2 col-sm-9'>
		                    <button type='submit' class='btn btn-danger submittJobData' name='saveCard'>Insert Card Info</button>
		                  </div>
		                </div>
		        </form>
   		 </div>";
 ?>