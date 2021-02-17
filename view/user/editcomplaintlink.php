<?php
session_start();
if(!$_SESSION['type'])
{
  header('location:../login.php');
}
?>
<!DOCTYPE html>
<html>
  <head> 

  <?php
  $_SESSION['editUserComplaintId']=$_GET['id'];
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
            <li class="breadcrumb-item"><a href="uindex.php">Home</a></li>
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
                  <div class="title"><strong>Complaint Edit box</strong></div>
                  <div class="block-body">
                    <form method="post" action="../../control/c_edit_event.php"
                    class="form-horizontal">
                     
                      <?php
                            //include_once('../../control/displayupdate.php');

                            $in=array();
                            include_once('../../model/m_addcomplain.php');
                            //$dta=self::model();
                            $a=new Complain();
                            $id=$_SESSION['editUserComplaintId'];
                            //echo $id;
                            $in=$a->update_data_complaint($id);



                              //print_r($in);
                             foreach($in as $data)
                             {


                            ?>
                     
                
                      
                      <div class="line"></div>
                     
                      <div class="line"></div>
                        <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="Email"  value="<?php echo $_SESSION['email'];?>"  name="edit_email" class="form-control" readonly>
                          <input type="hidden" value="<?php echo $data->com_id;?>" name="edit_id_complain">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Complain department
                        </label>
                        <div class="col-sm-9">
                          <select name="edit_complain_type" class="form-control mb-3 mb-3">
                            <option  selected><?php echo $data->com_drpt; ?></option>
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
                         <textarea class="form-control" name="edit_description"><?php echo $data->com_des?></textarea>
                        </div>
                      </div>
                      
                       
                    
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="reset" class="btn btn-secondary">Cancel</button>
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