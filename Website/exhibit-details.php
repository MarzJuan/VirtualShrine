<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
    <?php
    if(isset($_GET['exhibit_id']))
    {
        $exhibit_id = $_GET['exhibit_id'];    
       $posts = "SELECT * FROM exhibit WHERE status='0' AND exhibit_id='$exhibit_id'";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
        <title><?= $post['name'];?> - VirtualShrine</title>
        <?php
            }
        }
    }
            ?>
        <link rel="stylesheet" href="assets/css/exhibit-details.css">
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
            <a href="homepage.php"><image  class="logo" src="assets/img/crs-logo.png" alt="Casa Real Shrine logo"></image></a>
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

        <!-- [START] HEADER -->
    <?php
       if(isset($_GET['exhibit_id']))
       {              
              $exhibit_id = $_GET['exhibit_id'];
              $posts = "SELECT * FROM exhibit WHERE status='0' AND exhibit_id = '$exhibit_id'";
              $posts_run = mysqli_query($con, $posts);
              $check = mysqli_num_rows($posts_run) > 0;
                      
              if($check)
              {
                     while($post = mysqli_fetch_assoc($posts_run))
                     {
                     ?>
    <section class="content-split">
    <div class="content-wrap">
        <div class="content-split-main rich-text">
            <div class="header-img">
                <img src="../Admin/uploads/exhibit/<?= $post['image'];?>" alt="">
            </div>
        </div>
        <div class="content-split-side rich-text">
        <div class="box-title">
            <div class="head-img">
                <img src="Images/Logo.png">
            </div>
            <h1 class="article-title">
                <?= $post['name'];?>
            </h1>
            <p class="sub-title">
            <?= $post['meta_description'];?>
            </p>

            <p class="longform-banner__byline">
            <?php $startdate = strtotime($post['start_date']);?>
            <?php $enddate = strtotime($post['end_date']);?>
            <li class="date"><?php echo date('F d, Y', $startdate)." &#8212; ".date('F d, Y', $enddate);?></li>
            </p>
        </div>
            
        </div>
    </div>
    </section>
    
    <!-- [END] HEADER -->

    <!-- [START] BODY BLOG -->

    <section class="blog-body">
    <div class="tabs">

    <input type="radio" id="tab1" name="tab-control" checked>
    <input type="radio" id="tab2" name="tab-control">
    <input type="radio" id="tab3" name="tab-control">
    <input type="radio" id="tab4" name="tab-control">
    <ul>
        <li title="Features"><label for="tab1" role="button">
            <br><span>Overview</span></label></li>
        <li title="Delivery Contents"><label for="tab2" role="button">
            <br><span>Exhibition Objects</span></label></li>
    </ul>

    <div class="slider">
        <div class="indicator"></div>
    </div>
    <div class="content">
        <section>
        <?= $post['description'];?>
        </section>

        <section>
        <div class="band">
        <?php
        if(isset($_GET['exhibit_id']))
        $exhibit_id = $_GET['exhibit_id'];  
        $posts = "SELECT * FROM exhibit_display WHERE status='0' AND exhibit_id = '$exhibit_id'";
        $posts_run = mysqli_query($con, $posts);
        $check = mysqli_num_rows($posts_run) > 0;

            if($check)
            {
                while($post = mysqli_fetch_assoc($posts_run))
                {
                ?>
            <div class="item-1">
                <a href="exhibit-object.php?display_id=<?= $post['display_id']?>" class="card">
                <div class="thumb" style="background-image: url(../Admin/uploads/exhibit/image/<?= $post['image'];?>);"></div>
                <article>
                    <h1><?= $post['name']?></h1>
                    <span><?= $post['object_type']?></span>
                </article>
                </a>
            </div>
            <?php
                }
            }
                ?>

        </div>
        
        </section>
    </div>
    </div>
    
    <?php

        }
    }
}

?>
</section>


    <!-- [END] BODY BLOG -->


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
            <a href="https://www.facebook.com/CasaRealMalolos"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/nhcpofficial/"><i class="fa fa-instagram"></i></a>
            <a href="https://twitter.com/NHCPOfficial"><i class="fa fa-twitter"></i></a>
            <a href="https://www.youtube.com/@NHCPOfficial"><i class="fa fa-youtube-play"></i></a>
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

<script type="text/javascript">
(function() {

var img = document.getElementById('header-img').firstChild;
img.onload = function() {
    if(img.height > img.width) {
        img.height = '50%';
        img.width = 'auto';
    }
};

}());
</script>
</body>
</html>