<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../image/crs-logo.png" alt="">
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        
        <li class="nav-item dropdown">
        <?php
              $sql = "SELECT * FROM  bookings WHERE notif_status='0' ORDER BY booking_id DESC";
              $res = mysqli_query($con, $sql);
          ?>
          <a  class="nav-link nav-icon" id="notification" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number"><?php echo mysqli_num_rows($res);?></span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
           
            <li class="dropdown-header">
            &nbsp;&nbsp;You have <span><?php echo mysqli_num_rows($res);?></span> notifications &nbsp;&nbsp;
            </li>
            <?php
                  if (mysqli_num_rows($res) > 0){
                      foreach($res as $item){
              ?>
            <li>
              <hr class="dropdown-divider">
            </li>
            
            <a href="booking-pending.php">
            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>New Booking</h4>
                <p>You have received a new booking request with the booking ID <?php echo $item["bookingID"];?></p>
                <p>30 min. ago</p>
              </div>
            </li>
            </a>

            <li>
              <hr class="dropdown-divider">
            </li>
            
            <li>
              <hr class="dropdown-divider">
            </li>
            <?php
                }
              }
            ?>
          </ul><!-- End Notification Dropdown Items -->
          
        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          
          <!-- TOP NAV USER ICON PICTURE -->
          <?php
          if(isset($_SESSION['auth_user']['user_id']))
              {  
                  $user_id = $_SESSION['auth_user']['user_id'];
                  $users = "SELECT * FROM users WHERE id='$user_id'";
                  $user_run = mysqli_query($con, $users);

                  if(mysqli_num_rows($user_run) > 0)
                  {
                      while($user = mysqli_fetch_assoc($user_run))
                      {
                      ?>
          <?php
            $image = $user['profileImage'];
            if (empty($image))
            $image = "../../uploads/user/Default_pfp.jpeg";
            
            echo '<img src="../uploads/user/'.$image.'" alt="Profile" class="rounded-circle">'
          ?>
          <?php
                      }
                    }
                }
          ?>

           <!-- TOP NAV USER ICON PICTURE -->

            <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['auth_user']['user_name']; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?= $_SESSION['auth_user']['user_name']; ?></h6>
              <span>
              <?php if(isset($_SESSION['auth_user'])) : 
                    if($_SESSION['auth_role'] == '0')
                    {
                    echo "Super Admin"; 
                    }
                    else
                    {
                    echo "Assistant Admin";
                    }
                    ?>
              <?php endif; ?>
              </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="user-profile.php?id=<?= $_SESSION['auth_user']['user_id'];?>">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
            <form action="../allcode.php" method="POST">
              <button type="submit" name="logout_btn" class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </button>
            </form>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->