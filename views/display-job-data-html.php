<?php 
        $dispalyTableData = "<div class='row'>
                                <div class='table-responsive display_table'>
                                    <table class='table table-bordered table-hover' >
                                        <thead>
                                            <tr class='success'>
                                                <!-- <th style='text-align:center;'>Sr.No</th> -->
                                                <th style='text-align:center;'>File Name</th>
                                                <th style='text-align:center;'>File Url</th>
                                                <th style='text-align:center;'>Detail View</th>
                                                <th style='text-align:center;'>Edit</th>
                                                <th style='text-align:center;'>Delete</th>                            
                                            </tr>
                                        </thead>
                                        <tbody style='text-align:center;'>";
            while($row=$diplayData->fetch()){
            $dispalyTableData .= "<tr class='warning'>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= "<td>".$row['name']."</td>";
            $dispalyTableData .= "<td>".$row['file_url']."</td>";
            $dispalyTableData .= "<td><a href='index.php?page=detail_job_data&amp;id=".$row['id']."' class='btn btn-success'>Click To View</a></td>";
            $dispalyTableData .= "<td><a href='index.php?page=edit_job_data&amp;id=".$row['id']."' class='btn btn-warning'>Click To Edit</a></td>";
            $dispalyTableData .= "<td><a  class='btn btn-danger deleteJobData'  data-toggle='modal' data-target='#myModal'>Click To Delete</a></td>";
            $dispalyTableData .= "</tr>";
            $dispalyTableData.= "<!-- Button trigger modal -->
                                                                <!-- Modal -->
                                                                <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
                                                                  <div class='modal-dialog' role='document'>
                                                                    <div class='modal-content'>
                                                                      <div class='modal-header'>
                                                                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                                                                        <h4 class='modal-title' id='myModalLabel'>Are You sure to Delete?</h4>
                                                                      </div>
                                                                      <div class='modal-body'>
                                                                        <h4> You are About To Deleting <span style='color:red'>".$row['name']."</span> </h4>
                                                                        <p style='color:red;'> Deleted Data will not recover agin.</p>
                                                                      </div>
                                                                      <div class='modal-footer'>
                                                                        <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                                                                        <a href='admin.php?page=delete_job_data&amp;id=".$row['id']."' class='btn btn-danger'>Delete</a>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                                </div>";
        }
        $dispalyTableData .= " </tbody></table></div></div>";
        return $dispalyTableData;      
?>