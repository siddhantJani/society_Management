<?php
session_start();
if(!isset($_SESSION['type']))
        {
          header("location:../login.php");
        }
?>

<!DOCTYPE html>
<html>
  <head> 

  <?php
    include('../includes/head.php');
  ?> 
  
  </head>
  <body>
    <!-- header start-->

  <?php
     $type=$_SESSION['type'];


      if($type=='Admin')
      { 
        include('../includes/header.php');
      }
      else
      {
        include('../includes/userheader.php');
      }
      //echo $_SERVER['REQUEST_URI'];
    
  ?>
    <!-- header end-->
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation start-->
     <?php
      
        include('../includes/sidebar.php');
     
      
      //echo $_SERVER['REQUEST_URI'];
     ?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
      </div>
        
       <!-- contennt start-->
       <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              
              <div class="col-md-3 col-sm-6">
                <a style="display:block" href="editcomplaint.php">
                  <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div>
                      <strong>Total Complaints</strong>
                    </div>
                    <div class="number dashtext-1"><?php include_once('../../model/m_addcomplain.php'); 
                    $ad=new Complain(); $ad->display_total_complaints();?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                  </div>
                </a>
              </div>

              
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>Upcoming Events</strong>
                    </div>
                    <div class="number dashtext-3">140</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </section>  
        

       <!-- contennt start--> 
        
        
     
        <?php
          include('../includes/footer.php'); 
        ?>
      </div>
    </div>
    <!-- JavaScript files-->

   <?php
      include('../includes/script.php'); 
   ?>

  </body>
</html>