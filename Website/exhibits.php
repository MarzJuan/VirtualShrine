<?php
include('config/dbcon.php');
?>


<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>Exhibits - VirtualShrine</title>
        <link rel="stylesheet" href="assets/css/exhibits.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
<!-- push -->
    <section class="header">
        <nav>
            <a href="homepage.php"><image  class="logo" src="Images/Logo.png" alt="Casa Real Shrine logo"></image></a>
            <div class="nav-links" id="mySidebar">
            <i class="fa fa-times" onclick="closeNav()"></i>
                <ul>
                    <li class="menu-item"><a href="homepage.php">HOME</a></li>

                    <li class="menu-item">
                        <a href="#">VISIT <i class="fas fa-angle-down"></i></a>

                        <ul class="sub-menu">
                                   <li class="sub-item"><a href="plan_visit.php">Plan Your Visit</a></li>
                                   <li class="sub-item"><a href="consent-form.php">Book a Visit</a></li>
                                   <li class="sub-item"><a href="audio-guide.php">Audio Guide</a></li>
                                   <li class="sub-item"><a href="exhibits.php">Exhibits</a></li>
                                   <li class="sub-item"><a href="map.php">Museum Map</a></li>

                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">EXPLORE<i class="fas fa-angle-down"></i></a>

                        <ul class="sub-menu">
                                   <li class="sub-item"><a href="gallery.php">Collections</a></li>
                                   <li class="sub-item"><a href="virtual-tour.php">Virtual Tour</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item"><a href="blog.php">BLOG</a></li>
                    <li class="menu-item"><a href="about-crs.php">ABOUT</a></li>
                </ul>
            </div>
            <div id="main"></div>
                <i class="fa fa-bars" onclick="openNav()"></i>
            </div>
        </nav>
        <!-- [END] NAVIGATION -->
    </section>


<!-- [START] EXHIBIT CONTENTS -->

<section class="exhibit-body">

<h1 class="exhibit-title">
    Exhibitions
</h1>
<div class="tabset">
  <!-- Tab 1 -->
  <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
  <label for="tab1">Current</label>
  <!-- Tab 2 -->
  <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
  <label for="tab2">Upcoming</label>
  <!-- Tab 3 -->
  <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
  <label for="tab3">Past</label>
  
  <!-- CURRENT EXHIBITS -->
  <div class="tab-panels">
    <section id="marzen" class="tab-panel">
    <!-- cards -->
    <?php            
      $startDate = 'start_date';
      $endDate = 'end_date';            
       $posts = "SELECT * FROM exhibit WHERE status='0' AND CURDATE() between start_date and end_date";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(../Admin/uploads/exhibit/<?= $post['image'];?>)"></div>
      <ul class="details">
        <?php $date = strtotime($post['start_date']);?>
        <?php $enddate = strtotime($post['end_date']);?>
        <li class="date"><?php echo date('M d', $date)." to ".date('M d', $enddate);?></li>
        <li class="tags">
          <ul>
            <li><a href="#"><?= $post['name'];?></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1><?= $post['name'];?></h1>
      <h2>Slogan for Exhibit</h2>
      <p><?= $post['meta_description'];?></p>
      <p class="read-more">
        <a href="exhibit-details.php?exhibit_id=<?=$exhibit['exhibit_id']?>">Read More</a>
      </p>
    </div>
  </div>
  <?php
            }
        }
  ?>
  <!-- cards -->
    </section>

    <!-- UPCOMING EXHIBITS -->
    <section id="rauchbier" class="tab-panel">
    <!-- cards -->
    <?php            
      $startDate = 'start_date';
      $endDate = 'end_date';            
       $posts = "SELECT * FROM exhibit WHERE status='0' AND CURDATE() < start_date";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(../Admin/uploads/exhibit/<?= $post['image'];?>)"></div>
      <ul class="details">
      <?php $date = strtotime($post['start_date']);?>
        <?php $enddate = strtotime($post['end_date']);?>
        <li class="date"><?php echo date('M d ', $date)." to ".date('M d Y', $enddate);?></li>
        <li class="tags">
          <ul>
            <li><a href="#"><?= $post['name'];?></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1><?= $post['name'];?></h1>
      <h2>Slogan for Exhibit</h2>
      <p><?= $post['meta_description'];?></p>
      <p class="read-more">
        <a href="exhibit-details.php?exhibit_id=<?=$exhibit['exhibit_id']?>">Read More</a>
      </p>
    </div>
  </div>
  <?php
            }
        }
  ?>
    <!-- cards -->
    </section>

    <!-- PAST EXHIBITS -->
    <section id="dunkles" class="tab-panel">
      <!-- cards -->
      <?php            
      $startDate = 'start_date';
      $endDate = 'end_date';            
       $posts = "SELECT * FROM exhibit WHERE status='0' AND CURDATE() > end_date";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
    <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(../Admin/uploads/exhibit/<?= $post['image'];?>)"></div>
      <ul class="details">
        <?php $date = strtotime($post['start_date']);?>
        <?php $enddate = strtotime($post['end_date']);?>
        <li class="date"><?php echo date('M d ', $date)." to ".date('M d Y', $enddate);?></li>
        <li class="tags">
          <ul>
            <li><a href="#"><?= $post['name'];?></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1><?= $post['name'];?></h1>
      <h2>Slogan for Exhibit</h2>
      <p><?= $post['meta_description'];?></p>
      <p class="read-more">
        <a href="exhibit-details.php?exhibit_id=<?=$exhibit['exhibit_id']?>">Read More</a>
      </p>
    </div>
  </div>
  <?php
            }
        }
  ?>
    <!-- cards -->
    </section>

  </div>
  
</div>

</section>
<!-- [END] EXHIBIT CONTENTS -->





<!-- [START] FOOTER -->

<section id="footer">
    <div class="title-text">
        <!-- <h1>Visit Casa Real Today</h1> -->
        
    </div>
        <div class="footer-row">
            <div class="footer-left">
            <div>
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>  Tuesday to Sunday - 8:00 AM to 4:00 PM</p>
            </div>
            <br>
            <div>
            <h1>Contact Us</h1>
                <p><i class="fa fa-map-marker"></i>   Paseo Del Congreso, Liang, City of Malolos, Bulacan</p>
                <p><i class="fa fa-paper-plane"></i>  mpph@nhcp.gov.ph</p>
                <p><i class="fa fa-phone"></i>  (044) 931-2508</p>
            </div>
            </div>

            <div class="footer-right">
            <div>
                <h1>Quicklinks</h1>
                <div class="quicklinks">
                <span style="margin-right:50px;"><a href="homepage.php">Homepage</a></span><a href="crs-about.php">About Us</a><br>
                <span style="margin-right:30px;"><a href="plan-visit.php">Plan Your Visit</a></span><a href="consent-form.php">Book a Visit</a><br>
                <span style="margin-right:70px;"><a href="audio-guide.php">Audio Guide</a></span><a href="exhibits.php">Exhibit</a><br>
                <span style="margin-right:30px;"><a href="gallery.php">Collection</a></span><a href="virtual-tour.php">Virtual Tour</a><br>
                <span><a href="">About</a></span>
                </div>


            </div>
            </div>
        </div>

        <div class="social-links">
        <img src="Images/Logo.png" class="footer-img">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>2022 <i class="fa-regular fa-copyright"></i> VirtualShrine</p>
        </div>
    </section>

    <!-- [END] FOOTER -->

    <script>
    /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    }
    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    }
</script>
</body>
</html>