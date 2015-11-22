<?php 
    return "
       </head>
        <body>
          <div class='container-fluid fullwrapper'>
              <div class='container innerwrapper'>
                <div class='row'>
                  <a href='index.php' class='businessName'>
                    <div class='col-md-2 logowrap'>
                        <img src='images/logo.png'>
                    </div><!--logowrap-->
                    
                    <div class='col-md-10'>
                      <h1 class='mytitle'>Shwe Padauk</h1>
                      <h4 class='mysubtitle'>Wedding Card & General Printing</h4>
                    </div>
                 
                  </a>
                </div>
                $pageData->nav
              </div><!-- innerwrapper -->
          </div><!-- fullwrapper end-->
          <!-- middlewrapper start-->
          <div class='container-fluid fullwrapper middlewrapper'>
              <div class='container adm-job-data-form'>
                <div class='row'>
                  $pageData->content
                </div>
              </div>
          </div>
          <!-- middlewrapper stop-->
    ";
 ?>