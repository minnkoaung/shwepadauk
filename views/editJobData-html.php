<?php 
  $editOutputView = "
                      <div class='container'>
                             <h1 style='color:orange;'>Form for Update Job Data</h1>
                            <form role='form'>
                                <input type='hidden' value='id'>
                                <div class='form-group'>
                                  <label for='filename'>File Name</label>
                    ";
  $editOutputView .= "
                      <input type='filename' class='form-control' name='name' value=' ";
  $editOutputView .= $row['name'];
  $editOutputView .= "'></div>";                    
  return $editOutputView;
  /*
	return "
		<div class='container'>
           <h1 style='color:orange;'>Form for Update Job Data</h1>
          <form role='form'>
              <input type='hidden' value='id'>
              <div class='form-group'>
                <label for='filename'>File Name</label>
                <input type='filename' class='form-control' name='name' value='Active Value by PHP'>
              </div>
              <div class='form-group'>
		                  <label for='filetype'>File Type</label>
		                   <select class='form-control' name='file_type'>
		                        <option>Active Value by PHP</option>
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
		                        <option>Active Value by PHP</option>
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
                <input type= 'fileUrl' class='form-control' name='file_url' value='Active Value By PHP'>
              </div>
              <button type='submit' class='btn btn-success'>Update</button>
        </form>
        
         </div>
		
	";
  */
?>