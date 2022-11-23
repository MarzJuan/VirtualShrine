<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>VirtualShrine - Homepage</title>
        <link rel="stylesheet" href="assets/css/gallery.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <section class="header">
        <nav>
            <a href="homePage.php"><image  class="logo" src="assets/Images/Logo.png" alt="Casa Real Shrine logo"></image></a>
            <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li class="menu-item"><a href="homepage.php">HOME</a></li>

                    <li class="menu-item">
                        <a href="#">VISIT <i class="fas fa-angle-down"></i></a>

                        <ul class="sub-menu">
                                   <li class="sub-item"><a href="plan_visit.php">Plan Your Visit</a></li>
                                   <li class="sub-item"><a href="consent-form.php">Book a Visit</a></li>
                                   <li class="sub-item"><a href="audio-guide.php">Audio Guide</a></li>
                                   <li class="sub-item"><a href="map.php">Museum Map</a></li>
                                   <li class="sub-item"><a href="group.php">Group Visits</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">EXPLORE<i class="fas fa-angle-down"></i></a>

                        <ul class="sub-menu">
                                   <li class="sub-item"><a href="Gallery.php">Collections</a></li>
                                   <li class="sub-item"><a href="VirtualTour.php">Virtual Tour</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item"><a href="about.php">BLOG</a></li>
                    <li class="menu-item"><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <!-- [END] NAVIGATION -->

        <!-- [START] HEADER -->
        <div class="text-box">
            <h1 class="gallery-title">The VirtualShrine Collection</h1>
            <h3>Learn the Political History of the Philippines by exploring the VirtualShrine's Collection.</h3>
        </div>
        <!-- [END] OF HEADER -->
    </section>


    <!-----------------------------------------[START] GALLERY CONTENTS----------------------------------------->

                                           <!-- Gallery Page Introduction -->
    <section class="content-split">
    <div class="content-wrap">
        <div class="content-split-main rich-text">
            <p></p>
            <h2 class="content-split-title component-title">Explore the 5 galleries at the Casa Real Shrine Museum.</h2>

            <p>The VirtualShrine's collections represent our nation's shared political history.</p>
            <p>The scope of objects in VirtualShrine's collections is staggering - relics from the First 
                Philippine Republic, memorabilia of Gen. Emilio Aguinaldo, relics from the wealthy families 
                of Malolos, exhibits, a printing press of the Malolos Republic, and a display of the 21 Women 
                of Malolos memorabilia.</p>
        </div>

        <div class="content-split-side">
        <br>
        <br>
        <p>
        <h3 id="message">hey</h3><br>
            <b>Address: </b>RRV6+PJC, Paseo del Congreso, Plaza Rizal, Malolos, 3000 Bulacan<br><br>
            <b>Hours: </b>8:00 AM - 4:00 PM<br><br>
            <b>Closed: </b>Monday
        </p><br>

        </div>
    </div>
        
    <hr>
    </section>
                                           <!-- Gallery Page - Introduction -->


                                           <!-- Gallery Page - Galleries/Room -->
    
    <a style="text-decoration: none;color: black;" href="GalleryInfo.php?id=<?= $post['id']?>">
    <section class="gallery-rooms rich-text">
    <div class="content-wrap">
        <h2 class="gallery-title">Museum Galleries</h2>
    </div>
    
        <div class="row">

        <?php                           
        $posts = "SELECT * FROM categories WHERE status='0' ";
        $posts_run = mysqli_query($con, $posts);
        $check = mysqli_num_rows($posts_run) > 0;

        if($check)
          {
                while($post = mysqli_fetch_assoc($posts_run))
                {
                ?>
            <div class="features-col">
                <div id="container">
                    <img id="image" src="../Admin/uploads/category/<?= $post['image'];?>" alt="">
                </div>
                    <h3><?= $post['name']?></h3>
            </div>
            <?php

                }
        }

?>

            

            <!-- <div class="features-col">
                <img src="assets/Images/homepage-features/image2.jpg" alt="">
                <h3>Virtual 360</h3>
                <p>Check out the virtual 360 tour of the Casa Real Shrine</p>
            </div>

            <div class="features-col">
                <img src="assets/Images/homepage-features/image3.jpg" alt="">
                <h3>Collections</h3>
                <p>Learn the political history of the Phillipines by visiting the collections of Casa Real Shrine</p>
            </div>

            <div class="features-col">
                <img src="assets/Images/homepage-features/image3.jpg" alt="">
                <h3>Collections</h3>
                <p>Learn the political history of the Phillipines by visiting the collections of Casa Real Shrine</p>
            </div> -->
        </div>
    <hr>
    </section>
    </a>
    
                                           <!-- Gallery Page - Galleries/Room -->

                                           <!-- Gallery Page - EXPLORE -->

   <div class="explore-rooms rich-text">
        <div class="content-wrap">
            <h2 class="explore-title">See Also</h2>
        </div>

        <div class="row">
            <div class="explore-col">
                <img src="assets/Images/homepage-features/image1.jpg" alt="">
                <p class="tag">VIRTUAL 360</p>
                <h3>Audio Guide</h3>
                <p>Explore Casa Real with an Audio Guide</p>
            </div>

            <div class="explore-col">
                <img src="assets/Images/homepage-features/image1.jpg" alt="">
                <p class="tag">VIDEO</p>
                <h3>Audio Guide</h3>
                <p>Explore Casa Real with an Audio Guide</p>
            </div>

            <div class="explore-col">
                <img src="assets/Images/homepage-features/image1.jpg" alt="">
                <p class="tag">VIRTUAL 360</p>
                <h3>Audio Guide</h3>
                <p>Explore Casa Real with an Audio Guide</p>
            </div>

        </div>


    </div>

                                           <!-- Gallery Page - EXPLORE -->
    <!-----------------------------------------[END] GALLERY CONTENTS----------------------------------------->


    <!-- [START] FOOTER -->

    <section id="footer">
    <div class="title-text">
        <!-- <h1>Visit Casa Real Today</h1> -->
        
    </div>
        <div class="footer-row">
            <div class="footer-left">
                <h1>Opening Hours</h1>
                <p><i class="fa fa-clock-o"></i>  Tuesday to Sunday - 8:00 AM to 4:00 PM</p>
            </div>

            <div class="footer-right">
                <h1>Contact Us</h1>
                <p>Paseo Del Congreso, Liang, City of Malolos, Bulacan  <i class="fa fa-map-marker"></i></p>
                <p>mpph@nhcp.gov.ph  <i class="fa fa-paper-plane"></i></p>
                <p>(044) 931-2508   <i class="fa fa-phone"></i></p>
            </div>
        </div>

        <div class="social-links">
        <img src="assets/Images/Logo.png" class="footer-img">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube-play"></i>
            <p>2022 <i class="fa-regular fa-copyright"></i> VirtualShrine</p>
        </div>
    </section>

    <!-- [END] FOOTER -->



    <!-- JAVASCRIPT FOR TOGGLE MENU -->
<script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>

   <!-- JAVASCRIPT FOR TIME CLOSE OR OPEN [LOCATION] -->
   <script>
    var today = new Date();
    var time = today.getHours();
    var currentDate = new Date();
    var dayOfWeek = currentDate.getDay();
    var greet;

    if (time < 8) {
    greet = 'Sorry, we are close!';
    } else if (time > 16) {
    greet = 'Sorry, we are close!';
    } else if (dayOfWeek === 1) {
    greet = 'Sorry, we are close!';
    } else {
    greet = 'Hi, we are open today!';
    }

    var show = document.getElementById('message');
    show.textContent = greet;
</script>


</body>
</html>