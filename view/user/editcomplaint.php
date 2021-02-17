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
    include('../includes/head.php');
  ?> 
  
  </head>
  <body>
    <!-- header start-->

 <?php
     
        include('../includes/header.php');
     
      //echo $_SERVER['REQUEST_URI'];
  ?>
    <!-- header end-->
    <div class="d-flex align-items-stretch">
     
      <!-- Sidebar Navigation-->
    <?php 
        include('../includes/sidebar.php');
      
      
      //echo $_SERVER['REQUEST_URI'];
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
              <li class="breadcrumb-item active">Complaint List</li>
            </ul>
        </div> 
          
       <!-- contennt start-->
       
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
          
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Complaints</strong></div>
                  <div class="table-responsive"> 
                    <table class="table" >
                      <thead>
                        
                        <tr>
                          <th>Id</th>
                          
                          <th>department</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        
                      </thead>
                      <tbody>
                        
                          <?php
                           include('../../model/conn.php');
                           $nm=$_SESSION['email'];
                          
                            $sql="SELECT * FROM complain WHERE com_name='$nm'";
                            $con= new connection();
                            $c=$con->connectdb();

                            $select=$c->query($sql);
                           //print_r($select);

                         /* $ob=new m_watch_complain();
                          
                          $abcd=$ob->m_watchcomplain_user();*/
                          
                          
                          while($row=$select->fetch_assoc())
                          {
                            ?>
                             <tr>
                                <th> <?php echo $row['com_id']; ?> </th>
                                
                                <td> <?php echo $row['com_drpt'];?> </td>
                                <td> <?php echo $row['com_des']; ?> </td>
                                <td><a href="editcomplaintlink.php?m=update&id=<?php 
                              echo $row['com_id']?>">Edit</a></td>
                            </tr>
                            <?php
                          }
                          
                    

                          ?>                          
                      
                      </tbody>
                    </table>
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