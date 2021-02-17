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
            <h2 class="h5 no-margin-bottom"></h2>
          
          </div>
        </div>
          

         <div class="container-fluid" >
            <ul class="breadcrumb" >
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Event List</li>
            </ul>
        </div> 
          
       <!-- contennt start-->
       
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
          
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Events</strong></div>
                  <div class="table-responsive"> 
                    <table class="table" border="1">
                      <thead>
                        
                        <tr>
                          <th>#</th>
                          <th>Organizer</th>
                          <th>Event Name</th>
                          <th>Event Type</th>
                          <th>DescriptionEvent Description</th>
                          <th>Event Starting Date</th>
                          <th>Event Ending Date</th>
                          <th colspan="2" >Actions</th>

                        </tr>
                        
                      </thead>
                      <tbody>
                        
                          <?php
                           include('../../model/m_addevent.php');
                            

                          $ob=new event();
                          $abcd=$ob->m_display_event();
                           
                          $email= $_SESSION['emai'];
                              
                          $qry="SELECT * FROM register WHERE r_email='$email'";
                          $rs=mysqli_query($conn,$qry);

                          $row1=mysqli_fetch_assoc($rs);
                          
                          while($row=$abcd->fetch_assoc())
                          { 
                            ?>
                             <tr>

                                <td><?php echo $row['ev_id']; ?> </td>
                                <td><?php echo $row['ev_admin']; ?> </td>
                                <td><?php echo $row['ev_name']; ?> </td>
                                <td><?php echo $row['ev_type'];?> </td>
                                <td><?php echo $row['ev_desc'];?> </td>
                                <td><?php echo $row['start_date']; ?> </td>
                                <td><?php echo $row['end_date']; ?> </td>

                                <td><a href="../../control/c_addevent.php?mod=dltevent&id=<?php
                                  echo $row['ev_id']; ?>">Delete</a></td>

                                <td><a href="eventeditlink.php?id=<?php echo $row['ev_id']; 
                                $_SESSION['evUpdateId']=$row['ev_id']; ?>">Edit</a></td>
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