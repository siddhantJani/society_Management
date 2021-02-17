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
  $_SESSION['evUpdateId']=$_GET['id'];
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
                      <?php
                            //include_once('../../control/displayupdate.php');

                            $ini=array();
                            include_once('../../model/m_addevent.php');
                            //$dta=self::model();
                            $id=$_SESSION['evUpdateId'];
                            echo $id;
                            $a=new event();
                            $ini=$a->select_event($id);



                              print_r($ini);
                             foreach($ini as $data)
                             {

                            ?>
                           <form action="../../control/c_addevent.php?m=editevent" method="post" class="form-horizontal">
                            
                            <div class="line"></div>
                           
                            <div class="line"></div>
                            <div class="form-group row">
                             
                              <div class="col-sm-9">
                                <input type="hidden" name="UpdateEventId" value="<?php echo $data->ev_id?>" class="form-control" readonly>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Name of organizer</label>
                              <div class="col-sm-9">
                                <input type="text" name="UpdateadminName" value="<?php echo $_SESSION['name']?>" class="form-control" readonly>
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="UpdateEventName" class="form-control" value="<?php echo $data->ev_name?>">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Type</label>
                              <div class="col-sm-9">
                                <select name="UpdateEventType" class="form-control mb-3 mb-3">
                                  <option  selected ><?php echo $data->ev_type?></option>
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
                                
                                <textarea name="UpdateEventDescription" class="form-control"><?php echo $data->ev_desc?>
                                </textarea>
                              </div>
                            </div>
                              <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Starting Date</label>
                              <div class="col-sm-9">
                                <input type="Date" min="<?= date('Y-m-d'); ?>" 
                                name="UpdateStartDate" class="form-control"  value="<?php echo $data->start_date?>">
                              </div>

                            </div>
                            <div class="form-group row">
                              <label class="col-sm-3 form-control-label">Event Ending Date</label>
                              <div class="col-sm-9">
                                <input type="Date" min="<?= date('Y-m-d'); ?>" 
                                name="UpdateEndDate" class="form-control" value="<?php echo $data->end_date?>" >
                              </div>
                            </div>


                            
                       
                            <div class="form-group row">
                              <div class="col-sm-9 ml-auto">
                                <button type="reset" class="btn btn-secondary">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </div>
                          </form>

                          <?php
                           }
                          ?> 
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