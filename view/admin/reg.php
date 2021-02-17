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
    
  ?>
    <!-- header end-->
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation start-->
     <?php
     
        include('../includes/sidebar.php');
     
     ?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"></h2>
          </div>
        </div>
        
       <!-- contennt start-->
        <section class="no-padding-top">
            <div class="container-fluid">
              <div class="row">
            
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="block">
                    <div class="title"><strong>Add User</strong></div>
                    <div class="block-body">
                         <form ction="../../control/c_reg_process.php?mode=insert" 
                  method="post" class="form-horizontal">
                            
                            <div class="line"></div>
                           
                            <div class="line"></div> 
                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="registerUsername" class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Email Address</label>
                              <div class="col-sm-9">
                                <input type="text" name="email" class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">House no</label>
                              <div class="col-sm-9">
                                <select name="registerHouse" class="form-control mb-3 mb-3">
                                  <option disabled selected>--</option>
                                  <option>101</option>
                                  <option>102</option>
                                  <option>103</option>
                                  <option>104</option>
                                  <option>105</option>
                                  <option>106</option>
                                  <option>107</option>
                                  <option>108</option>
                                  <option>109</option>
                                  <option>110</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Mobile No</label>
                              <div class="col-sm-9">
                                <input type="number" name="registerMobile" class="form-control">
                              </div>
                            </div>

                             
                              <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Password</label>
                              <div class="col-sm-9">
                                <input type="password" name="registerPassword" class="form-control">
                              </div>

                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">House no</label>
                              <div class="col-sm-9">
                                <select name="registerHouse" class="form-control mb-3 mb-3">
                                  <option disabled selected>Select User</option>
                                  <option>Admin</option>
                                  <option>User</option>
                                  
                                </select>
                              </div>
                            </div>



                            <div class="form-group row">
                              <div class="col-sm-9 ml-auto">
                                <button type="submit" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Register</button>
                              </div>
                            </div>
                          </form>

                    </div>


                          
                  </div>
                </div>
              </div>
            </div>
        </section>
        </div>
        
        

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