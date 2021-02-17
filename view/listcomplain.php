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
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Basic Table</strong></div>
                  <div class="table-responsive"> 
                    <table class="table">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>House no.</th>
                          <th>Mobile no.</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>sdfs</td>
                          <td>32</td>
                        </tr>
                       
                      </tbody>
                    </table>
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