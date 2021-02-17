<?php
session_start();


?>




<!--user-->


   <nav id="sidebar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h5">User Stephen</h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
           
             <?php
              if($_SERVER['REQUEST_URI']=="/mvc2/view/index.php") 
              {
                ?>
                 <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li> 
            <?php
              }
              
                else
                {
            ?>
            <li><a href="../index.php"> <i class="icon-home"></i>Home </a></li> 
            <?php
                  
                }
/*
                $url=$_SERVER['REQUEST_URI'];
                echo $url;*/
             if ($_SERVER['REQUEST_URI']=="/mvc2/view/user/addcomplain.php")
             {  
            ?> 
             <li class="active"><a href="addcomplain.php"><i class="icon-grid"></i>User Complain</a></li>
              <?php } else {?>
            <li><a href="../view/user/addcomplain.php"><i class="icon-grid"></i>User Complain</a></li> <?php }?>

            
            <li><a href="../view/user/display_event.php"> <i class="fa fa-bar-chart"></i>Events</a></li>
            <li><a href="forms.php"> <i class="icon-padnote"></i>Forms </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Example dropdown </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="login.php"> <i class="icon-logout"></i>Login page </a></li>
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
          </ul>
        </nav>

<!--user end-->
