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
  $_SESSION['editId']=$_GET['id'];
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
            <h2 class="h5 no-margin-bottom">Update Member Details </h2>
          </div>
        </div>
        
       <!-- contennt start-->
        <section class="no-padding-top">
            <div class="container-fluid">
              <div class="row">
            
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="block">
                    <div class="title"><strong>Update Memeber Details</strong></div>
                    <div class="block-body">
                          <form action="../../control/editmember.php" method="post" class="form-horizontal">

                          <?php
                            //include_once('../../control/displayupdate.php');

                            $ini=array();
                            include_once('../../model/reg_process.php');
                            //$dta=self::model();
                            $id=$_SESSION['editId'];
                            //echo $id;
                            $ini=$a->update_data($id);



                              print_r($ini);
                             foreach($ini as $data)
                             {


                            ?>
                            
                            <div class="line"></div>
                           
                            <div class="line"></div>
                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">img</label>
                              <div class="col-sm-9">
                                <img src="<?php echo $data->r_img; ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Name</label>
                              <div class="col-sm-9">
                                <input type="text" value="<?php echo $data->r_name; ?>" name="updateName" 
                                class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              
                              <div class="col-sm-9">
                                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="uid" 
                                class="form-control">
                              </div>
                            </div>


                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Email</label>
                              <div class="col-sm-9">
                                <input type="Email" value="<?php echo $data->r_email; ?>" name="updateEmail" class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">House No
                              </label>
                              <div class="col-sm-9">
                                <select name="updateHouseNo" class="form-control mb-3 mb-3">
                                  <option  selected><?php echo $data->r_house_no; ?></option>
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
                                <input type="number"  name="updateMobile" 
                                value="<?php echo $data->r_mobile_no; ?>" class="form-control">
                              </div>
                            </div>

                              <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Password</label>
                              <div class="col-sm-9">
                                <input type="Password"  name="updatePassword" value="<?php echo $data->r_password; ?>" class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Select Type
                              </label>
                              <div class="col-sm-9">
                                <select name="updateType" class="form-control mb-3 mb-3">
                                  <option selected ><?php echo $data->r_type; ?></option>
                                  <option>Admin</option>
                                  <option>User</option>
                                  
                                
                                </select>
                              </div>
                        
                      </div>


                             

                            
                       
                            <div class="form-group row">
                              <div class="col-sm-9 ml-auto">
                                <a href="listuser.php"><button type="reset" class="btn btn-secondary">Cancel</button></a>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>

                            <?php
                              }
                            ?>
                          </form>


                    </div>


                          
                  </div>
                </div>
              </div>
            </div>
        </section>




       <!-- contennt end-->  
        </div>
        
        

       
        
        
     
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