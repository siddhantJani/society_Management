<!DOCTYPE html>
<html>
  <head> 

  <?php
    include('includes/head.php');
  ?> 
  
  </head>
  <body>
    <!-- header start-->

  <?php
    include('includes/header.php');
  ?>
    <!-- header end-->
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     <?php
      include('includes/sidebar.php');
     ?>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
      </div>
        
       <!-- contennt start-->
       
         <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
          
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>All form elements</strong></div>
                  <div class="block-body">
                    <form action="../control/c_addmember.php" class="form-horizontal">
                      
                      <div class="line"></div>
                     
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Name</label>
                        <div class="col-sm-9">
                          <input type="password" name="name" class="form-control">
                        </div>
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="password" name="Email" class="form-control">
                        </div>
                      </div>
            
                      </div>
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">House no.</label>
                        <div class="col-sm-9">
                          <input type="password" name="house" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Mobile No.</label>
                        <div class="col-sm-9">
                          <input type="password" name="mobile" class="form-control">
                        </div>
                      </div>
                       <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Gender</label>
                        <div class="col-sm-9">
                          <select name="account" class="form-control mb-3 mb-3">
                            <option disabled selected>Select</option>
                            <option>Male</option>
                            <option>Female</option>
                            
                          </select>
                        </div>
                        
                      </div>
                    <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Password</label>
                        <div class="col-sm-9">
                          <input type="password" name="password" class="form-control">
                        </div>
      
                      </div>
                 
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary">Cancel</button>
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

       <!-- contennt start--> 
        
        
     
        <?php
          include('includes/footer.php'); 
        ?>
      </div>
    </div>
    <!-- JavaScript files-->

   <?php
      include('includes/script.php'); 
   ?>

  </body>
</html>