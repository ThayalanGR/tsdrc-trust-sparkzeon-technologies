<aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="joinwithus.php"><img src="assets/img/logonav.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['adminlogin'];?></h5>              	  	

                  <li class="sub-menu">
                      <a href="joinwithus.php" >
                          <i class="fa fa-users"></i>
                          <span>Join with us</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="leavemessage.php">
                          <i class="fa fa-line-chart"></i>
                          <span>Leave message</span>
                      </a>
                  </li>

                <li class="sub-menu">
                <a   id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"  href="addgames.php">
                   <i class="fa fa-play"></i> <span>NEWS-FEED</span>
                    </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="./allnews.php">All NEWS-FEED </a>
                <a class="dropdown-item" href="./addnews.php">Add NEWS-FEED</a>
              </div>
              </li>

            <li class="sub-menu">
                <a href="addimage.php">
                    <i class="fa fa-trophy"></i>
                    <span>Gallery</span>
                </a>
            </li>

            <li class="sub-menu">
                <a href="change-password.php">
                    <i class="fa fa-power-off"></i>
                    <span>Change Password</span>
                </a>
            </li>

              </ul>
          </div>
      </aside>