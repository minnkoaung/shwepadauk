<?php 
	return"
		 <div class='container '>
		       <div class='row'>
 			<h3 style='color:orange;text-align:center;min-height:50px;'>Insert New Job</h3>	
		          <form class='form-horizontal job-data-form-container' role='form' action='admin.php?page=admin-job-data' name='saveData' method='post'>

		                <div class='form-group'>
		                  <label for='name' class='col-sm-2 control-label'>Name</label>
		                  <div class='col-sm-9'>
		                    <input type='text' class='form-control' name='name' placeholder='Insert Job Name' required>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='filetype' class='col-sm-2 control-label'>File Type</label>
		                  <div class='col-sm-9'>
		                   <select class='form-control' name='file_type'>
		                        <option>psd</option>
		                        <option>ai</option>
		                        <option>indd</option>
		                        <option>jpeg</option>
		                        <option>eps</option>
		                        <option>pmd</option>
		                        <option>docx</option>
		                        <option>other</option>
		                  </select>
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <label for='file_description' class='col-sm-2 control-label'>File Description</label>
		                  <div class='col-sm-9'>
		                     <select class='form-control' name='file_description' >
		                        <option>Business Card</option>
		                        <option>Calender</option>
		                        <option>Flyer/Pamphlat</option>
		                        <option>Knife Frame</option>
		                        <option>Other Small Print Design</option>
		                        <option>Packing Box</option>
				 <option>Shopping Bag</option>
				 <option>Vinyl</option>
		                        <option>Wedding Card Components</option>
		                        <option>Wedding Card Cover</option>
		                        <option>Wedding Card Inside</option>
		                        
		                  </select>
		                  </div>
		                </div>
		                 <div class='form-group'>
		                  <label for='file_url' class='col-sm-2 control-label'>File Url</label>
		                  <div class='col-sm-9'>
		                  	<input type='file' class='form-control' name='file_url' value='Insert File Url'> 
		                     <!-- <input type='text' class='form-control' name='file_url' placeholder='Insert File Url'> -->
		                  </div>
		                </div>
		                <div class='form-group'>
		                  <div class='col-sm-offset-2 col-sm-9'>
		                    <button type='submit' class='btn btn-danger submittJobData' name='saveJob'>Insert Job</button>
		                  </div>
		                </div>
		        </form>
   		 </div>";
 ?>