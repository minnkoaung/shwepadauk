<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once "controllers/admin-card-data.php";
$detailCardDataTable = "  <div class='container display_card_data_view_container'>
                            <div class='row display_card_data_view'>      
                              <div class='col-md-9'>";
            while($row=$detailCard->fetch()){
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Item Code</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['item_code']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
           
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Item Name</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['item_name']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
            
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Year of Manufacture</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['year']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
            
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Product No.</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['product_no']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
            
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Product of</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['product_of']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
           
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Avilable Color</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['color']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
           
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Card Type</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['type']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
            
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Price in 300 Stocks</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['price_300']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
           
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Price for 300Pcs to 500Pcs</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['price_300_500']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";
           
            
            $detailCardDataTable .=   "<div class='row card-detail-view-row'>";
            $detailCardDataTable .=     "<div class='col-md-4 default'>Price above 500Pcs</div>";
            $detailCardDataTable .=     "<div class='col-md-8 card_data_value success'>".$row['price_above_500']."</div>";
            $detailCardDataTable .=   "</div><!-- card-detail-view-row end -->";

            $detailCardDataTable .=   "<div class='row'>
                <a class='col-md-2 btn btn-danger mybutton' href='admin.php?page=delete_card_data&amp;id=".$row['id']."'><span class='glyphicon glyphicon-remove'></span>&nbspDelete Card</a>
                <a class='col-md-2 btn btn-success mybutton' href='admin.php?page=edit_card_data&amp;id=".$row['id']."'><span class='glyphicon glyphicon-refresh'></span>&nbspEdit Card</a>
              </div>";
        
        
        $detailCardDataTable .= "</div><!-- col-md-9 end -->";
        $detailCardDataTable .= "<div class='col-md-3 card_pic'>
                                  <div class='container'>";
        
        $detailCardDataTable .=  "<img src='images/card_images/".$row['card_image']."' class='detailCardImage' >";
        //$detailCardDataTable .=  '  <img src="'.$handle->file_src_pathname.'/' . $handle->file_dst_name . '" />';
        //$detailCardDataTable .=   $file_dst_pathname."/". $file_dst_name. "/>";
        //$row['card_image'];

        $detailCardDataTable .= " </div> 
            </div>
         </div><!-- Demo data for display_card_data_view --> 

        </div><!-- Demo data for display_card_data_view_container -->";
        
        }

        return $detailCardDataTable; 

 ?>