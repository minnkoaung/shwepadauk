<?php 
       /* $dispalyTableData = "<div class='row'>
                            <div class='container'>
                                 <a href='index.php?page=display-job-data-card-view'><span class='glyphicon glyphicon-th' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                            <a href='index.php?page=display-job-data'><span class='glyphicon glyphicon-th-list' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                            </div>
        ";
            while($row=$diplayData->fetch()){
            $dispalyTableData .= "<div class='col-md-2 col-sm-3 col-xs-6' style='background:#fff;margin:10px 0 10px 0;border-right:1px solid #888; padding:10px 5px 10px 5px;'>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= " <p style='text-align:center;height:20px; overflow:none;'>".$row['name']."</p>";
             $dispalyTableData .= "<h3 style='text-align:center; font-size:5em;'><span class='glyphicon glyphicon-file'></span></h3>";
            
            $dispalyTableData .= "<a href='index.php?page=detail_job_data&amp;id=".$row['id']."' class='col-md-12 col-xs-12 btn btn-success' >Click To View</a>";
           
            $dispalyTableData .= "</div>";
            
        }
        $dispalyTableData .= "</div></div>";
        return $dispalyTableData;    */  

        $dispalyTableData = "<div class='container'>
                            <div class='container' style='margin:0px;padding:0px;'>
                                <a href='index.php?page=display-job-data-card-view'><span class='glyphicon glyphicon-th' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                                <a href='index.php?page=display-job-data'><span class='glyphicon glyphicon-th-list' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                            </div>";
            if( $pagination->getTotalOfResults() > 0    ) {
                foreach( $results as $r ) {

            $dispalyTableData .= "<div class='col-md-2 col-sm-3 col-xs-6' style='background:#fff;margin:10px 0 10px 0;border-right:1px solid #888; padding:10px 5px 10px 5px;'>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= " <p style='text-align:center;height:20px; overflow:none;'>".$r['name']."</p>";
             $dispalyTableData .= "<h3 style='text-align:center; font-size:5em;'><span class='glyphicon glyphicon-file'></span></h3>";
            
            $dispalyTableData .= "<a href='index.php?page=detail_job_data&amp;id=".$r['id']."' class='col-md-12 col-xs-12 btn btn-success' >Click To View</a>";
           
            $dispalyTableData .= "</div>";

                       /*$dispalyTableData .= "<tr class='warning'>";
                        $dispalyTableData .= "<td>".$r['name']."</td>";
                        $dispalyTableData .= "<td>".$r['file_url']."</td>";
                        $dispalyTableData.="<td><a href='index.php?page=detail_job_data&amp;id=".$r['id']."' class='col-md-12 col-xs-12 btn btn-success' >Click To View</a></td>";*/
                }
            }
           /* while($row=$diplayData->fetch()){
            $dispalyTableData .= "<tr class='warning'>";
            //$dispalyTableData .= "<td>".$row['id']."</td>";
            $dispalyTableData .= "<td>".$row['name']."</td>";
            $dispalyTableData .= "<td>".$row['file_url']."</td>";
            $dispalyTableData.="<td><a href='index.php?page=detail_job_data&amp;id=".$row['id']."' class='col-md-12 col-xs-12 btn btn-success' >Click To View</a></td>";
        }*/
        $dispalyTableData .= "</div> ". $pagination->printNavigationBar()."</div>";
        $dispalyTableData .= "<div class=\"conatiner\" style=\"color:#fff;\">".$pagination->printResultBar()."</div>";
        return $dispalyTableData;
?>