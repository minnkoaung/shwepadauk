<?php 
	return "
		 <div class='col-md-4 col-md-offset-4 loginwrap'>
          <form role='form' action='controllers/auth.php' method='get'>
            <div class='form-group'>
              <label for='user-name'>Enter User Name</label>
              <input type='text' name='user-name' class='form-control' placeholder='Enter User Name' required=''>
            </div>
            <div class='form-group'>
              <label for='password'>Password</label>
              <input type='password' name='password' class='form-control' placeholder='Enter Password' required=''>
            </div>
            <button type='submit'  class='btn btn-success'><span class='glyphicon glyphicon-log-in'></span>&nbsp Log In</button>
          </form>
        </div> <!-- loginwrap -->
	";

 ?>