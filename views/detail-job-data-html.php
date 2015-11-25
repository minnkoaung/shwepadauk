<?php 
        $detailJobDataTable = "<div class='row'>
                                <div class='table-responsive display_table'>
                                    <table class='table table-bordered table-hover' >
                                        <thead>
                                            <tr class='success'>
                                                <th style='text-align:center;'>Sr.No</th>
                                                <th style='text-align:center;'>File Name</th>
                                                <th style='text-align:center;'>File Url</th>
                                                <th style='text-align:center;'>Created Date</th>
                                                <th style='text-align:center;'>Modified Date</th>
                                                <th style='text-align:center;'>Edit</th>
                                                <th style='text-align:center;'>Delete</th>   
                                            </tr>
                                        </thead>
                                        <tbody style='text-align:center;'>";
            while($row=$detailJob->fetch()){
            $detailJobDataTable .= "<tr class='warning'>";
            $detailJobDataTable .= "<td>".$row['id']."</td>";
            $detailJobDataTable .= "<td>".$row['name']."</td>";
            $detailJobDataTable .= "<td>".$row['file_url']."</td>";
            $detailJobDataTable .= "<td>".$row['created_date']."</td>";
            $detailJobDataTable .= "<td>".$row['modified_date']."</td>";
            $detailJobDataTable .= "<td><a href='index.php?page=edit_job_data&amp;id=".$row['id']."' class='btn btn-warning'>Click To Edit</a></td>";
            $detailJobDataTable .= "<td><a  class='btn btn-danger deleteJobData'  data-toggle='modal' data-target='#myModal'>Click To Delete</a></td>";
            $detailJobDataTable.= "<!-- Button trigger modal -->
                                                                <!-- Modal -->
                                                                <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
                                                                  <div class='modal-dialog' role='document'>
                                                                    <div class='modal-content'>
                                                                      <div class='modal-header'>
                                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                                        <h4 class='modal-title' id='myModalLabel'><span class='glyphicon glyphicon-trash'></span> Delete File </h4>
                                                                      </div>
                                                                      <div class='modal-body'>
                                                                        <h2 class='modal-title' style='color:red;text-align:center;'>Are you sure to delete ?</h2>
                                                                        <h1><span class='glyphicon glyphicon-trash' style='display:block;text-align:center;font-size:5em;color:red;'></span></h1>
                                                                        <h4 style='text-align:center;margin-top:20px;'> You are About To Deleting  </h4>
                                                                        <p style='color:red;text-align:center;'> Deleted Data will not recover agin.</p>
                                                                      </div>
                                                                      <div class='modal-footer'>
                                                                        <button type='button' class='btn btn-primary' data-dismiss='modal'>Cancel</button>
                                                                        <a href='admin.php?page=delete_job_data&amp;id=".$row['id']."' class='btn btn-danger'>Delete</a>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>";
            $detailJobDataTable .= "</tr>";
        }
        $detailJobDataTable .= " </tbody></table></div></div>";
        return $detailJobDataTable;      
?>