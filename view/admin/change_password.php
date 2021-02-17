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
  
  <script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
    currentPassword.focus();
    document.getElementById("currentPassword").innerHTML = "required";
    output = false;
}
else if(!newPassword.value) {
    newPassword.focus();
    document.getElementById("newPassword").innerHTML = "required";
    output = false;
}
else if(!confirmPassword.value) {
    confirmPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "required";
    output = false;
}
if(newPassword.value != confirmPassword.value) {
    newPassword.value="";
    confirmPassword.value="";
    newPassword.focus();
    document.getElementById("confirmPassword").innerHTML = "not same";
    output = false;
}   
return output;
}
</script>
  
  </head>
  <body>
    <!-- header start-->

  <?php
    include('../includes/userheader.php');
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
            <li class="breadcrumb-item active">Change Password</li>
          </ul>
        </div> 
          
       <!-- contennt start-->
       
         <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
            
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Change Password</strong></div>
                  <div class="block-body">
                    <form method="post" action="" 
                    class="form-horizontal">
                     <?php

$_SESSION['id'];
$conn = mysqli_connect("localhost", "root", "root", "society") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
    $result = mysqli_query($conn, "SELECT *from register WHERE r_id='" . $_SESSION["id"] . "'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["r_password"]) {
        mysqli_query($conn, "UPDATE register set r_password='" . $_POST["newPassword"] . "' WHERE r_id='" . $_SESSION["id"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>
                     
                
                      
                      <div class="line">
                        
                      </div>
                     
                      <div class="line"></div>
                      
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Current Password</label>
                        <div class="col-sm-9">
                          <input type="password"  class="form-control" 
                          name="currentPassword" id="currentPassword">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">New Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="newPassword" id="newPassword" class="form-control" >
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Confirm Password
                        </label>
                        <div class="col-sm-9">
                          <input type="password" name="confirmPassword" class="form-control">
                          <span id="confirmPassword" class="required"></span>
                        </div>
                        
                      </div>
                      
                      
                       
                    
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          
                          <button type="submit" class="btn btn-primary">Save changes</button>
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