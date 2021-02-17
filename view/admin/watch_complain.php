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
     
        include('../includes/header.php');
     
      //echo $_SERVER['REQUEST_URI'];
  ?>
    <!-- header end-->
    <div class="d-flex align-items-stretch">
     
      <!-- Sidebar Navigation-->
    <?php 
        include('../includes/sidebar.php');
      
      
      //echo $_SERVER['REQUEST_URI'];
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
              <li class="breadcrumb-item active">Complaint List</li>
            </ul>
        </div> 
          
       <!-- contennt start-->
       
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
          
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Complaints</strong></div>
                  <div class="table-responsive"> 
                    <table class="table" border="1">
                      <thead>
                        
                        <tr>
                          <th>#</th>
                          <th>Email</th>
                          <th>department</th>
                          <th>Description</th>
                         
                        </tr>
                        
                      </thead>
                      <tbody>
                        
                          <?php
                           include('../../model/m_watch_complain.php');
                            

                          $ob=new m_watch_complain();
                          $abcd=$ob->m_watchcomplain();
                          
                          
                          while($row=$abcd->fetch_assoc())
                          {?>
                             <tr>
                                <th> <?php echo $row['com_id']; ?> </th>
                                <td> <?php echo $row['com_name'];?> </td>
                                <td> <?php echo $row['com_drpt'];?> </td>
                                <td> <?php echo $row['com_des']; ?> </td>
                               
                            </tr>
                            <?php
                          }
                          
                    

                          ?>                          
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
         
            </div>
          </div>
        </section>
        
      </div>
         
    </div>
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