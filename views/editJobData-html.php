<?php 
  $editOutputView = "	<div class='container'>
                          <h1 style='color:orange;'>Form for Update Job Data</h1>";                
  while($row=$test->fetch()){
   $editOutputView .= "<form role='form' action='admin.php?page=update-job-data' name='updateJobData' method='post'>
                        <input type='hidden' name='id' value='".$row['id']."' >";
  $editOutputView  .="
                       <div class='form-group'>
                          <label for='filename'>File Name</label>
                          <input type='filename' class='form-control' name='name' value='".$row['name']."'>
                      </div>
                      <div class='form-group'>
		                  <label for='filetype'>File Type</label>
		                   <select class='form-control' name='file_type'>
		                        <option>".$row['file_type']."</option>
		                        <option>ai</option>
		                        <option>indd</option>
		                        <option>jpeg</option>
		                        <option>eps</option>
		                        <option>pmd</option>
		                        <option>docx</option>
		                        <option>other</option>
		                  </select>
		                 </div><!--form group end -->
                     <div class='form-group'>
		                  <label for='filetype'>File Description</label>
		                   <select class='form-control' name='file_description'>
		                         <option>".$row['file_description']."</option>
		                        <option>ai</option>
		                        <option>indd</option>
		                        <option>jpeg</option>
		                        <option>eps</option>
		                        <option>pmd</option>
		                        <option>docx</option>
		                        <option>other</option>
		                  </select>
		               </div><!--form group end -->
                   <div class='form-group'>
                      <label for = 'fileUrl'>File Path</label>
                      <input type= 'fileUrl' class='form-control' name='file_url' value='".$row['file_url']."'>
                  </div>
                    ";
  }
  $editOutputView .= "
                         <input type='submit' class='btn btn-success' name='updateJobData' value='Update'>
                    </form>
                      ";
  return $editOutputView;
?>