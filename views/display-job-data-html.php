<?php 
        $dispalyTableData = "<div class='row'>
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
            while($row=$diplayData->fetch()){
            $dispalyTableData .= "<tr class='warning'>";
            $dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= "<td style='text-align: left;'>".$row['name']."</td>";
            $dispalyTableData .= "<td><a href='#'>Click To View</a></td>";
            $dispalyTableData .= "<td><a href='#'>Click To Edit</a></td>";
            $dispalyTableData .= "<td><a href='#'>Click To Delete</a></td>";
            $dispalyTableData .= "</tr>";
        }
        $dispalyTableData .= " </tbody></table></div></div>";
        return $dispalyTableData;      
?>