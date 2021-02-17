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
            <h2 class="h5 no-margin-bottom" ></h2>
          
            </div>
          </div>
          

         <div class="container-fluid" >
          <ul class="breadcrumb" >
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">User's List</li>
          </ul>
        </div> 
          
       <!-- contennt start-->
       <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Users</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>USer Name</th>
                          <!-- <th>Email</th> -->
                          <th>Type</th>
                          <th>Delete</th>
                          <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          include('../../control/c_reg_process.php');
                          $data=$c_obj->c_listuser();
                          $c= 0;
                          foreach($data as $d)
                          {
                        ?>
                            <tr>
                              <th scope="row"><?php echo ++$c; ?></th>
                              <td><?php echo $d["r_name"]; ?></td>
                              <!-- <td><?php //echo $d["r_email"]; ?></td> -->
                              <td><?php echo $d['r_type']; ?></td>
                              <td><a href="../../control/c_reg_process.php?mod=delete&id=<?php 
                               echo $d['r_id']; ?>">delete</a></td>

                              <td><a href="updatemodel.php?m=update&id=<?php 
                              echo $d['r_id']?>">Edit</a></td>

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