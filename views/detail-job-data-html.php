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
            $detailJobDataTable .= "</tr>";
        }
        $detailJobDataTable .= " </tbody></table></div></div>";
        return $detailJobDataTable;      
?>