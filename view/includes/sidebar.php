<?php
session_start();

if($_SESSION['type']=='Admin')
{

?>
    <!--admin-->

       <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          
          <div class="avatar"><img src="<?php echo $_SESSION['image']; ?>" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Admin</h1>
            <p><?php echo $_SESSION['name'];?></p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus-->
        <span class="heading">Main</span>
        <ul class="list-unstyled">
         
         <?php

              if($_SERVER['REQUEST_URI']=="/mvc2/view/admin/index.php") 
              {
                ?>
          
                 <li class="active">
                  <a href="index.php"><i class="icon-home"></i>Home </a></li> 

            <?php
              }
                else
                {
            ?>
              <li>
                  <a href="index.php"><i class="icon-home"></i>Home </a></li> 
            <?php
                }
            ?>

            <?php
              if($_SERVER['REQUEST_URI']=="/mvc2/view/admin/watch_complain.php") 
              {
              
            ?>
            
             <li class="active">
              <a href="watch_complain.php"><i class="icon-grid"></i>Watch Complain</a></li>
              
            <?php
                }
                else
                {
            ?>
              <li>
              <a href="watch_complain.php"><i class="icon-grid"></i>Watch Complain</a></li>
            <?php
                }
            ?>

          
          <li><a href="register.php"> <i class="icon-padnote"></i>Add Members</a></li>


          <?php
              if($_SERVER['REQUEST_URI']=="/mvc2/view/admin/event.php") 
              {
              
            ?>
          <li class="active">
            <a href="event.php"> <i class="fa fa-bar-chart"></i>Add Event</a></li>

          <?php
              }
              else
              {  
          ?>
          <li>
            <a href="event.php"> <i class="fa fa-bar-chart"></i>Add Event</a></li>

          <?php
              }
          ?>



          <?php
              if($_SERVER['REQUEST_URI']=="/mvc2/view/admin/listuser.php") 
              {
              
            ?>
          <li class="active">
            <a href="listuser.php"> <i class="icon-padnote"></i>User List</a></li>

          <?php
              }
              else
              {  
          ?>
          <li>
            <a href="listuser.php"> <i class="icon-padnote"></i>User List</a></li>

          <?php
              }
          ?>


          <?php
              if($_SERVER['REQUEST_URI']=="/mvc2/view/admin/change_password.php") 
              {
              
            ?>
          <li class="active">
            <a href="change_password.php"> <i class="icon-padnote"></i>Change Password</a></li>

          <?php
              }
              else
              {  
          ?>
          <li>
            <a href="change_password.php"> <i class="icon-padnote"></i>Change Password</a></li>

          <?php
              }
          ?>



          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Events</a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="eventactions.php">Event Actions</a></li>
              
            </ul>
          </li>


         
        </ul>
       
      </nav>

      <!--admin end-->

<?php
}

elseif ($_SESSION['type']=="User") 
{
?>


<!--user-->


   <nav id="sidebar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
             <div class="avatar"><img src="<?php echo $_SESSION['image']; ?>" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h5">User</h1>
              <p><?php echo $_SESSION['name'];?></p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus-->
          <span class="heading">Main</span>
          <ul class="list-unstyled">
           
             <?php
              if($_SERVER['REQUEST_URI']=="/mvc2/view/user/uindex.php") 
              {
                ?>
                 <li class="active"><a href="uindex.php"> <i class="icon-home"></i>Home </a></li> 
            <?php
              }
              
                else
                {
            ?>
            <li><a href="uindex.php"> <i class="icon-home"></i>Home </a></li> 
            <?php  
                }
            ?>

            <?php
             if ($_SERVER['REQUEST_URI']=="/mvc2/view/user/addcomplain.php")
             {  
            ?> 
             <li class="active"><a href="addcomplain.php"><i class="icon-grid"></i>User Complain</a></li>
            <?php 
              } 
              else 
              {
            ?>
            <li><a href="addcomplain.php"><i class="icon-grid"></i>User Complain</a></li>
             <?php 
              }
              ?>

            <?php
             if ($_SERVER['REQUEST_URI']=="/mvc2/view/user/display_event.php")
             {  
            ?>
            <li class="active"><a href="display_event.php"><i class="fa fa-bar-chart"></i>Events</a></li>
            <?php
              }
              else
              {
            ?>
            <li><a href="display_event.php"><i class="fa fa-bar-chart"></i>Events</a></li>
            <?php
              }
            ?>



            <?php
             if ($_SERVER['REQUEST_URI']=="/mvc2/view/user/changepassword.php")
             {  
            ?>
            <li class="active"><a href="changepassword.php"><i class="icon-padnote"></i>Change Password</a></li>
            <?php
              }
              else
              {
            ?>
            <li><a href="changepassword.php"><i class="icon-padnote"></i>change Password</a></li>
            <?php
              }
            ?>

            

            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Complaints Actions</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="editcomplaint.php">Edit Complaint</a></li>
                <li><a href="deletecomplaint.php">Delete Complaint</a></li>
                
              </ul>
           
          </ul>
         
        </nav>

<!--user end-->




<?php
}
?>




      









