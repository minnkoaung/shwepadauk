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
                          <label for='item_name'>Item Name</label>
                          <input type='text' class='form-control' name='item_name' value='".$row['item_name']."'>
                      </div>

                    ";
}
$editOutputView .= "
                         <input type='submit' class='btn btn-success' name='updateJobData' value='Update'>
                    </form>
                      ";
return $editOutputView;
?>