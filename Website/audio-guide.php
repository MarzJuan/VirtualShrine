<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>Audio Guide - VirtualShrine</title>
        <link rel="stylesheet" href="assets/css/audio-guide.css">
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
    <section class="audio-guide-main">
    <div class="header-content">
        <h1 class="expressive">Audio Guide</h1>
        <h3 class="jumplink-banner-description"><p>Let Casa Real Shrine speak to you.</p>

            <div class="simple-acs-search">
                <form action="audio-player.php" name="id" class="simple-acs-search__form js-simple-acs-search__form" method="POST">
                    <input placeholder="Enter Audio Stop Number" name="search" type="text" class="simple-acs-search__input js-simple-acs-search__input" value="">
                    <input name="submit" class="search-button" type="submit" value="Go">
                </form>
            </div> 

            <!-- 
            <?php
        //     if (isset($_GET['submit'])) {
        //         $search = $_GET['search'];
                
        //         $sql = "SELECT * FROM 'posts' WHERE stop_number = '$search'";
        //         $result = mysqli_query($con, $sql);
        //         if (mysqli_num_rows($result) > 0) {
        //             header('Location: audio-player.php?post_id=' . $result);

        //     } else {
        //         header('Location: audio-guide.php');
        //         echo 'Invalid id!';
        //     }
        // }
        ?> -->
    </div>
    </section>
        <!-- [END] OF HEADER -->


<!-- [START] FOOTER -->

<section id="footer">
    

    <div class="footer-row">
        
        <div class="footer-details">
            <div class="col">
                <h1>Opening Hours</h1>
                
                <p><span style="margin-left:25%;"><i class="fa fa-clock-o"></i>  Tuesday to Sunday</span></p>
                <p>&emsp;<span style="margin-left:25%;"><i class="fa-regular fa-calendar"></i>&emsp;8:00 AM to 4:00 PM</span></p>
                
            </div>
        </div>

        <div class="footer-details">
            <div class="col">
            <h1>Contact Us</h1>
                <p>&nbsp;<i class="fa fa-map-marker"></i>   Paseo Del Congreso, Liang, City of Malolos, Bulacan</p>
                <p><i class="fa fa-paper-plane"></i>  mpph@nhcp.gov.ph</p>
                <p><i class="fa fa-phone"></i>  (044) 931-2508</p>
            </div>
        </div>

        <div class="footer-details">
            <div class="col">
                <h1>Quicklinks</h1>
                <div class="quicklinks_col">
                    <div class="quicklinks">
                    <p></p><a href="homepage.php">Homepage</a></p>
                    <p></p><a href="plan_visit.php">Plan Your Visit</a></p>
                    <p></p><a href="crs-about.php">About Us</a></p>
                    <p></p><a href="consent-form.php">Book a Visit</a></p>
                    <p></p><a href="">About</a></p>
                    </div>
                    <div class="quicklinks">
                    <p></p><a href="audio-guide.php">Audio Guide</a></p>
                    <p></p><a href="exhibits.php">Exhibit</a></p>
                    <p></p><a href="gallery.php">Collection</a></p>
                    <p></p><a href="virtual-tour.php">Virtual Tour</a></p>
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



    <!-- JAVASCRIPT FOR TOGGLE MENU -->
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