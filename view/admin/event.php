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
            <h2 class="h5 no-margin-bottom">Create Event</h2>
          </div>
        </div>
        
       <!-- contennt start-->
        <section class="no-padding-top">
            <div class="container-fluid">
              <div class="row">
            
                <!-- Form Elements -->
                <div class="col-lg-12">
                  <div class="block">
                    <div class="title"><strong>Add Event Details</strong></div>
                    <div class="block-body">
                          <form action="../../control/c_addevent.php?mode=insertevent" method="post" class="form-horizontal">
                            
                            <div class="line"></div>
                           
                            <div class="line"></div>
                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Name of organizer</label>
                              <div class="col-sm-9">
                                <input type="text" name="adminName" value="<?php echo $_SESSION['name']?>" class="form-control" readonly>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="eventName" class="form-control">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Type</label>
                              <div class="col-sm-9">
                                <select name="eventtype" class="form-control mb-3 mb-3">
                                  <option disabled selected>Select</option>
                                  <option>Festival</option>
                                  <option>party</option>
                                  <option>society meeting</option>
                                  <option>others</option>
                                </select>
                              </div>
                            </div>
                              <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Description
                              </label>
                              <div class="col-sm-9">
                                
                                <textarea name="eventDescription" class="form-control"></textarea>
                              </div>
                            </div>
                              <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Starting Date</label>
                              <div class="col-sm-9">
                                <input type="Date" min="<?= date('Y-m-d'); ?>" 
                                name="startDate" class="form-control">
                              </div>

                            </div>
                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Ending Date</label>
                              <div class="col-sm-9">
                                <input type="Date" min="<?= date('Y-m-d'); ?>" 
                                name="endDate" class="form-control">
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