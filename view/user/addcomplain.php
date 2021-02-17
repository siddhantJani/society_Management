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
            <h2 class="h5 no-margin-bottom" >Dashboard</h2>
          
            </div>
          </div>
          

         <div class="container-fluid" >
          <ul class="breadcrumb" >
            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            <li class="breadcrumb-item active">Complaint Box</li>
          </ul>
        </div> 
          
       <!-- contennt start-->
       
         <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
            
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>complaint box</strong></div>
                  <div class="block-body">
                    <form method="post" action="../../control/c_addcomplain.php"
                    class="form-horizontal">
                     
                     
                
                      
                      <div class="line"></div>
                     
                      <div class="line"></div>
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="Email"  value="<?php echo $_SESSION['email'];?>"  name="com_email" class="form-control" readonly>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Complain department
                        </label>
                        <div class="col-sm-9">
                          <select name="select_complain" class="form-control mb-3 mb-3">
                            <option disabled selected>Select</option>
                            <option>cleaning</option>
                            <option>security</option>
                            <option>club house</option>
                            <option>water</option>
                            <option>Other</option>
                          
                          </select>
                        </div>
                        
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Description</label>
                        <div class="col-sm-9">
                         <textarea class="form-control" name="com_description"></textarea>
                        </div>
                      </div>
                      
                       
                    
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="reset" class="btn btn-secondary">Cancel</button>
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