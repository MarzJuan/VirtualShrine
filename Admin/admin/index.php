<?php
include('authentication.php');
include('includes/header.php');
?>

  <main id="main" class="main">
  <?php include('message.php'); ?>
<div class="pagetitle">
  <h1>Dashboard</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section dashboard">
  <div class="row">

    <!-- Left side columns -->
    <div class="col-lg-8">
      <div class="row">

        <!-- BOOKINGS CARD -->
        <a href="booking-approved.php">
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card sales-card">

            <div class="card-body">
              <h5 class="card-title">Total Booking</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-journal-bookmark-fill"></i>
                </div>
                <div class="ps-3">
                  <?php
                    $dash_bookings_query = "SELECT * FROM bookings";
                    $dash_bookings_query_run = mysqli_query($con, $dash_bookings_query);

                    if($bookings_total = mysqli_num_rows($dash_bookings_query_run))
                    {
                    echo '<h6>'.$bookings_total.'</h6>';
                    }
                    else
                    {
                      echo '<h6>'."0".'</h6>';
                    }
                  ?>
                </div>
                
              </div>
              <!-- <hr style="margin-bottom: 1px;"> -->
            </div>
            <!-- <a href="booking-approved.php"><span style="margin-left:5rem;">view more</span></a> -->
          </div>
          </a>
        </div><!-- End BOOKINGS CARD -->
        

        <!-- WEBSITE VISITS CARD -->
        <div class="col-xxl-4 col-md-6">
          <div class="card info-card revenue-card">

            <div class="card-body">
              <h5 class="card-title">Blog Post</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-newspaper"></i>
                </div>
                <div class="ps-3" class="count" id="result-visits">
                <?php
                    $dash_blog_query = "SELECT * FROM blog WHERE status='0'";
                    $dash_blog_query_run = mysqli_query($con, $dash_blog_query);

                    if($blog_total = mysqli_num_rows($dash_blog_query_run))
                    {
                    echo '<h6>'.$blog_total.'</h6>';
                    }
                    else
                    {
                      echo '<h6>'."0".'</h6>';
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- WEBSITE VISITS CARD -->

        <!-- Customers Card -->
        <div class="col-xxl-4 col-xl-12">

          <div class="card info-card customers-card">

            <div class="card-body">
              <h5 class="card-title">Admins</h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3" class="count" id="active-visitor">
                <?php
                    $dash_user_query = "SELECT * FROM users WHERE status='0'";
                    $dash_user_query_run = mysqli_query($con, $dash_user_query);

                    if($user_total = mysqli_num_rows($dash_user_query_run))
                    {
                    echo '<h6>'.$user_total.'</h6>';
                    }
                    else
                    {
                      echo '<h6>'."0".'</h6>';
                    }
                  ?>
                  <h6>
                  </h6>

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

        <!-- Recent Bookings -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">Recent Bookings <a href="booking-pending.php"><span>| See More</span></a></h5>

              <table class="table table-borderless datatable">

     
                <thead>
                  <tr>
                    <th scope="col">Booking ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of Visit</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>

        <?php
          $bookings = "SELECT * FROM bookings WHERE status='0' OR status='3'";
          $bookings_run = mysqli_query($con, $bookings);
          $check = mysqli_num_rows($bookings_run) > 0;

        if($check)
            {
                while($act = mysqli_fetch_assoc($bookings_run))
                {
                ?>

                  <tr>
                    <th scope="row"><a href="#"><?= $act['bookingID'] ?></a></th>
                    <td><?= $act['fname'].' '.$act['lname'] ?></td>
                    <td><?= $act['date_visit'] ?></td>
                    <td>
                    <?php

                    if($act['status'] ==0)
                    {
                        echo '<span class="badge bg-warning">Pending</span>';
                    }
                    if($act['status'] ==1)
                    {
                        echo '<span class="badge bg-success">Approved</span>';
                    }
                    if($act['status'] ==3)
                    {
                        echo '<span class="badge bg-info">Reschedule</span>';
                    }
                    ?>
                    </td>
                  </tr>
                  <?php
                }
              }
              ?>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Bookings -->

        <!-- USER ADMINS -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <h5 class="card-title">User Admins <a href="booking-pending.php"><span>| See More</span></a></h5>

              <table class="table table-borderless datatable">

              <thead>
                  <tr>
                    <th scope="col"></th>
                    <th scope="col"><center>Name</center></th>
                    <th scope="col"><center>Username</center></th>
                    <th scope="col"><center>Role</center></th>
                    <th scope="col"><center>Status</center></th>
                  </tr>
                </thead>
      <tbody>

        <?php
          $users = "SELECT * FROM users WHERE status='0' AND role_as='1'";
          $users_run = mysqli_query($con, $users);
          $check = mysqli_num_rows($users_run) > 0;

        if($check)
            {
                while($act = mysqli_fetch_assoc($users_run))
                {
                ?>

                  <tr>
                    <td><center><div style="margin-top:1rem;margin-left:1rem;">
                    <?php
                      $image = $act['profileImage'];
                      if (empty($image))
                      $image = "../../uploads/user/Default_pfp.jpeg";
                      
                      echo '<img src="../uploads/user/'.$image.'" alt="Profile" class="rounded-circle" style="width:50px;height:50px;border-radius:50px;">'
                    ?>
                    </center></th></td>
                    <td><center><div style="margin-top:1.5rem;"><?= $act['fname'].' '.$act['lname'] ?></div></center></td>
                    <td><center><div style="margin-top:1.5rem;"><?= $act['username']?></div></center></td>
                    <td><center><div style="margin-top:1.5rem;">
                    <?php 
                    if($act['role_as'] == 0)
                    {
                      echo '<span>Head Admin</span>';
                    }
                    if($act['role_as'] == 1)
                    {
                      echo '<span>Assistant Admin</span>';
                    }
                    ?></div></center></td>

                    <td><center><div style="margin-top:1.5rem;">
                    <?php

                    if($act['status'] ==0)
                    {
                        echo '<span class="badge bg-warning">Active</span>';
                    }
                    if($act['status'] ==1)
                    {
                        echo '<span class="badge bg-success">Inactive</span>';
                    }
                    if($act['status'] ==3)
                    {
                        echo '<span class="badge bg-info">Archived</span>';
                    }
                    ?>
                    </div></center></td>
                  </tr>
                  <?php
                }
              }
              ?>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End USER ADMINS -->



      </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->
    <div class="col-lg-4">

      <!-- Recent Activity -->
      <?php if($_SESSION['auth_role'] == '0') : ?>
      <div class="card">

        <div class="card-body">
          <h5 class="card-title">User Activity <a href="report.php"><span> | See More<span></a></h5>

          <div class="activity">
        <?php
        $activity_query = "SELECT * FROM auditlog WHERE created_at > DATE_SUB( NOW(), INTERVAL 24 HOUR) ORDER BY created_at DESC LIMIT 5 ";
        $activity_run = mysqli_query($con, $activity_query);
        $check = mysqli_num_rows($activity_run) > 0;

        if($check)
            {
                while($act = mysqli_fetch_assoc($activity_run))
                {
                ?>

            <div class="activity-item d-flex">
              <div class="activite-label"><?= $act['time']?></div>
              <i class='bi bi-circle-fill activity-badge text-muted align-self-start'></i>
              <div class="activity-content">
              <span class="fw-bold text-dark"><?= $act['username']?></span> <?= $act['action']?>
              </div>
            </div><!-- End activity item-->

            <?php
                }
            }
            ?>
            <!-- End activity item-->

          </div>

        </div>
      </div>
      <?php endif; ?>
      <!-- End Recent Activity -->

      <!-- News & Updates Traffic -->

        <div class="card-body pb-0">
          <h5 class="card-title">Blogs <a href="blog-view.php"><span> | See More<span></a></h5>

        <?php
          $activity_query = "SELECT * FROM blog WHERE status='0' ORDER BY created_at DESC LIMIT 5 ";
          $activity_run = mysqli_query($con, $activity_query);
          $check = mysqli_num_rows($activity_run) > 0;

          if($check)
              {
                  while($act = mysqli_fetch_assoc($activity_run))
                  {
                  ?>

          <div class="news">
            <div class="post-item clearfix">
              <img src="../uploads/blog/<?= $act['image']?>" alt="">
              <h4><a href="https://virtualshrine.online/Website/blog-article.php?blog_id=<?=$act['blog_id']?>"><?= $act['name']?></a></h4>
              <p><?= $act['meta_description']?></p>
            </div>
          </div>
          <?php
                }
            }
            ?>
          <!-- End sidebar recent posts-->

        </div>
      </div>
      <!-- End News & Updates -->

    </div><!-- End Right side columns -->

  </div>
</section>

</main><!-- End #main -->



<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<?php
include('includes/footer.php');
include('includes/script.php');
?>