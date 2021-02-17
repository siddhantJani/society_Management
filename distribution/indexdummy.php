<!DOCTYPE html>
<html>
  <head> 

  <?php
    include_once('../includes/head.php');
  ?> 
  
  </head>
  <body>
    <!-- header start-->

  <?php
    include_once('../includes/header.php');
  ?>
    <!-- header end-->
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     <?php
      include('../includes/sidebar.php');
     ?>

      <!-- Sidebar Navigation end-->
      <div class="page-content" >
        <div class="page-header" style="margin-bottom: 0px;">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom" >Dashboard</h2>
          
            </div>
          </div>
          

         <div class="container-fluid" >
          <ul class="breadcrumb" >
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active">Watch complaints</li>
          </ul>
        </div> 
          
       <!-- contennt start-->
       
         
       <!-- contennt end--> 
     
        <?php
          include('../includes/footer.php'); 
        ?>
    
    <!-- JavaScript files-->

   <?php
      include('../includes/script.php'); 
   ?>

  </body>
</html>