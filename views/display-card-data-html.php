<?php 
        $dispalyTableData = "<div class='row'>
                                <div class='table-responsive display_table'>
                                    <table class='table table-bordered table-hover' >
                                        <thead>
                                            <tr class='success'>
                                                <th style='text-align:center;'>Item Code</th>
                                                <th style='text-align:center;'>Item Name</th>
                                                <th style='text-align:center;'>Product No.</th> 
                                                <th style='text-align:center;'>Price in 300</th>
                                                <th style='text-align:center;'>Detail View</th>
                                            </tr>
                                        </thead>
                                        <tbody style='text-align:center;'>";
            while($row=$diplayData->fetch()){
            $dispalyTableData .= "<tr class='warning'>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= "<td>".$row['item_code']."</td>";
            $dispalyTableData .= "<td>".$row['item_name']."</td>";
           //$dispalyTableData .= "<td>".$row['product_of']."</td>";
            $dispalyTableData .= "<td>".$row['product_no']."</td>";
           // $dispalyTableData .= "<td>".$row['year']."</td>";
           // $dispalyTableData .= "<td>".$row['color']."</td>";
           // $dispalyTableData .= "<td>".$row['type']."</td>";
            $dispalyTableData .= "<td>".$row['price_300']."</td>";
           //  $dispalyTableData .= "<td>".$row['price_300_500']."</td>";
           //   $dispalyTableData .= "<td>".$row['price_above_500']."</td>";
            $dispalyTableData .= "<td><a href='index.php?page=detail_card_data&amp;id=".$row['id']."' class='btn btn-success deleteJobData'>Click To View Detail</a></td>";
            $dispalyTableData .= "</tr>";
        }
        $dispalyTableData .= " 

        						</tbody></table></div></div>";
        return $dispalyTableData;      
?>