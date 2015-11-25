<?php 
        $dispalyTableData = "<div class='row'><div class='container'>
                            <a href='index.php?page=display-job-data-card-view'><span class='glyphicon glyphicon-th' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                            <a href='index.php?page=display-job-data'><span class='glyphicon glyphicon-th-list' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                                <div class='table-responsive display_table'>
                                    <table class='table table-bordered table-hover' >
                                        <thead>
                                            <tr class='success'>
                                                <!-- <th style='text-align:center;'>Sr.No</th> -->
                                                <th style='text-align:center;'>File Name</th>
                                                <th style='text-align:center;'>File Url</th>
                                                <th style='text-align:center;'>Detail View</th>
                                                                         
                                            </tr>
                                        </thead>
                                        <tbody style='text-align:center;'>";
            while($row=$diplayData->fetch()){
            $dispalyTableData .= "<tr class='warning'>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= "<td>".$row['name']."</td>";
            $dispalyTableData .= "<td>".$row['file_url']."</td>";
            $dispalyTableData .= "<td><a href='admin.php?page=detail_job_data&amp;id=".$row['id']."' class='btn btn-success'>Click To View</a></td>";
            $dispalyTableData .= "</tr>";
            
        }
        $dispalyTableData .= " </tbody></table></div></div></div>";
        return $dispalyTableData;      
?>