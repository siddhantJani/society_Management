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
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Dashboard</h1>
                  </div>
                  <p>Welcome to our society</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form action="../../control/c_reg_process.php?mode=insert" 
                  method="post" class="text-left form-validate">
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="registerUsername" required data-msg="Please enter your username" class="input-material">
                      <label for="register-username" class="label-material">name</label>
                    </div>
                    <div class="form-group-material">
                      <input id="register-email" type="email" name="registerEmail" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Email Address      
                      </label>
                    </div>
                    <div class="form-group-material">
                      
                      <label for="register-password" class="label-material">House no        
                      </label>
                      <select class="form-control" name="registerHouse">
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
                    <div class="form-group-material">
                      <input id="register-email" type="number" name="registerMobile" required data-msg="Please enter a valid email address" class="input-material">
                      <label for="register-email" class="label-material">Mobile No</label>
                    </div>


                    
                      
                    <div class="form-group-material">
                      <input id="register-password" type="password" name="registerPassword" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">Password</label>
                    </div>

                    <div class="form-group-material">
                      <label for="register-email" class="label-material">Select User 
                      </label>
                      <select class="form-control" name="registeType">
                        <option disabled selected>--</option>
                        <option>Admin</option>
                        <option>User</option>
                      </select>
                      
                    </div>
                    
                    <div class="form-group text-center">
                      <input id="register" type="submit" value="Register" class="btn btn-primary">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by<a href="register.php" class="external">Bootstrapious</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <?php
      include('../includes/script.php');
    ?>
  </body>
</html>