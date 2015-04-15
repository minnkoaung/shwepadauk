<?php 
    $display_html = "
                    <div class='row'>
            <div class='table-responsive display_table'>
                <table class='table table-bordered table-hover' >
                    <thead>
                        <tr class='success'>
                            <th style='text-align:center;'>Sr.No</th>
                            <th style='text-align:center;'>File Name</th>
                            <th style='text-align:center;'>Detail View</th>
                            <th style='text-align:center;'>Edit</th>
                            <th style='text-align:center;'>Delete</th>                            
                        </tr>
                    </thead>
                    <tbody style='text-align:center;'>";
    $display_html .= "
                    <tr class='warning'>
                        <td>$allData</td>
                        <td>Simple File Name </td>
                        <td><a class='btn btn-default'>Click To View</a></td>
                        <td><a class='btn btn-success'>Click To Edit</a></td>
                        <td><a class='btn btn-danger'>Click To Delete</a></td>
                    </tr>
    ";
    /*return "
        <div class='row'>
          	<div class='table-responsive display_table'>
            	<table class='table table-bordered table-hover' >
					<thead>
                    	<tr class='success'>
                        	<th style='text-align:center;'>Sr.No</th>
                            <th style='text-align:center;'>File Name</th>
                            <th style='text-align:center;'>Detail View</th>
                            <th style='text-align:center;'>Edit</th>
                            <th style='text-align:center;'>Delete</th>                            
                        </tr>
                    </thead>
                    <tbody style='text-align:center;'>
                    	<tr class='warning'>
                        	<td>Simple No.</td>
                            <td>Simple File Name </td>
                            <td><a class='btn btn-default'>Click To View</a></td>
                            <td><a class='btn btn-success'>Click To Edit</a></td>
                            <td><a class='btn btn-danger'>Click To Delete</a></td>
                        </tr>
                    </tbody>
				</table>

            </div>
          </div>";*/


?>