
      <!-- user -->
        <header class="header">   
              <nav class="navbar navbar-expand-lg">
                  <div class="search-panel">
                    <div class="search-inner d-flex align-items-center justify-content-center">
                      <div class="close-btn">Close <i class="fa fa-close"></i></div>
                      <form id="searchForm" action="#">
                        <div class="form-group">
                          <input type="search" name="search" placeholder="What are you searching for...">
                          <button type="submit" class="submit">Search</button>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="container-fluid d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                      <!-- Navbar Header--><a href="index.php" class="navbar-brand">
                        <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Society</strong><strong>Management</strong></div>
                        <div class="brand-text brand-sm"><strong class="text-primary">S</strong><strong>M</strong></div></a>
                      <!-- Sidebar Toggle Btn-->
                     
                    </div>
                    <div class="right-menu list-inline no-margin-bottom">  

                          <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>
                          


                          

                          <!-- Tasks-->

                          

                          <!-- Tasks end-->

                          <!-- Megamenu-->
                          
                          <!-- Megamenu end     -->
                          <!-- Languages dropdown    -->
                          <div class="list-inline-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><span class="d-none d-sm-inline-block"><?php echo $_SESSION['email']?></span></a>
                            <div aria-labelledby="languages" class="dropdown-menu"><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>logout</span></a></div>
                          </div>
                          <!-- Log out  -->
                          <div class="list-inline-item logout">
                            <a id="logout" href="../logout.php" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i></a></div>
                    </div>
                  </div>
              </nav>
            </header>

        <!-- user end -->
