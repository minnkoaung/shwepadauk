<?php 
        include_once "controllers/admin-card-data.php";
        $dispalyTableData = "
                            <div class='container'>
                                <a href='index.php?page=display-card-data-card-view'><span class='glyphicon glyphicon-th' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                                <a href='index.php?page=display-card-data'><span class='glyphicon glyphicon-th-list' style='display:inline-block;width:50px;height:50px;font-size:2em;text-decoration:none !important;background:#fff;text-align:center;line-height:1.6em;margin-bottom:25px;'></span></a>
                            </div>
                            <div class='container'>
                             <div class='row'>
                                <ul style='margin:0px;padding:0px;list-style:none;'>";
        while($row=$diplayData->fetch()){
        $dispalyTableData .=  "<li class='col-md-2 col-sm-3 col-xs-6 card-card-view'>
                                <a href='admin.php?page=detail_card_data&amp;id=".$row['id']."' style='text-decoration:none;'>";
        $dispalyTableData .=  "<h4>".$row['item_name']."<h4>";
        $dispalyTableData .=  "<img src='images/card_images/".$row['card_image']."' class='img-responsive' alt=''>";
        $dispalyTableData .=  "<a href='admin.php?page=detail_card_data&amp;id=".$row['id']."' class='btn btn-success'>Click to View More</a></a>
                                  </li>";
    }

           
        $dispalyTableData .= " 

        						
                                </ul>
                          </div></div> <!-- row end -->";
       /* $dispalyTableData = "<h1 style='color:red'>Fucking Page</h1>";*/
        return $dispalyTableData;      
?>