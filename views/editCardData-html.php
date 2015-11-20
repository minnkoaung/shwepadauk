<?php
$editOutputView = "	<div class='container'>
                          <h1 style='color:orange;'>Form for Update Card Data</h1>";
while($row=$test->fetch()){
    $editOutputView .= "<form role='form' action='admin.php?page=update-card-data' name='updateCardData' method='post'>
                        <input type='hidden' name='id' value='".$row['id']."' >";
    $editOutputView  .="
                       <div class='form-group'>
                          <label for='item_code'>Item Code</label>
                          <input type='text' class='form-control' name='item_code' value='".$row['item_code']."'>
                      </div>
                      <div class='form-group'>
                          <label for='item_name'>Item Name</label>
                          <input type='text' class='form-control' name='item_name' value='".$row['item_name']."'>
                      </div>
                      <div class='form-group'>
                          <label for='year'>Year of Manufacture</label>
                          <select class='form-control' name='year'>
		                        <option>".$row['year']."</option>
		                        <option>2014</option>
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
                       <div class='form-group'>
                          <label for='product_no'>Product No</label>
                          <input type='text' class='form-control' name='product_no' value='".$row['product_no']."'>
                      </div>
                      <div class='form-group'>
		                  <label for='product_of' >Product of</label>
		                   <select class='form-control' name='product_of'>
		                        <option>".$row['product_of']."</option>
		                        <option>DKA</option>
		                        <option>Nay La</option>
		                        <option>Paper House</option>
		                        <option>Shwe Padauk</option>
		                        <option>Tun Naung</option>
		                        <option>Tun Oo</option>
		                        <option>Thandar Kyaw</option>
		                  </select>
		                </div>

                      ";
}
$editOutputView .= "
                         <input type='submit' class='btn btn-success' name='updateJobData' value='Update'>
                    </form>
                      ";
return $editOutputView;
?>