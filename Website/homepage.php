<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>VirtualShrine - Homepage</title>
        <link rel="stylesheet" href="assets/css/homepage.css">
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
                                   <li class="sub-item"><a href="map.php">Museum Map</a></li>
                                   <li class="sub-item"><a href="group.php">Group Visits</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">EXPLORE<i class="fas fa-angle-down"></i></a>

                        <ul class="sub-menu">
                                   <li class="sub-item"><a href="gallery-collection.php">Collections</a></li>
                                   <li class="sub-item"><a href="VirtualTour.php">Virtual Tour</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item"><a href="about.php">BLOG</a></li>
                    <li class="menu-item"><a href="about.php">ABOUT</a></li>
                </ul>
            </div>
            <div id="main"></div>
                <i class="fa fa-bars" onclick="openNav()"></i>
            </div>
        </nav>
        <!-- [END] NAVIGATION -->

        <!-- [START] HEADER -->
        <div class="text-box">
            <h1>WELCOME TO THE VIRTUALSHRINE</h1>
            <p>Free Entry - Operation time : 8:00AM - 4:00PM</p>
            <a class="book-btn" href="consent-form.php">Book a Visit Now</a>
        </div>
        <!-- [END] OF HEADER -->
    </section>


    <!-- [START] HOMEPAGE CONTENTS -->

    <section class="home-content">

        <h1>Explore Our Galleries</h1>
        <p>Tour the 5 galleries of Casa Real Shrine</p>

        <div class="row">

            <a href="GalleryInfo.php">
            <div class="gallery-col">
                <img src="Images/homepage-gallery/ginhawa.jpg" alt="kaginhawaan">
                <div class="layer">
                    <h3>KAGINHAWAAN</h3>
                </div>
            </div>
            </a>

            <a href="GalleryInfo.php">
            <div class="gallery-col">
                    <img src="Images/homepage-gallery/paniil.jpg" alt="kaginhawaan">
                    <div class="layer">
                        <h3>PANINIIL</h3>
                    </div>
                </div>
            </a>

            <a href="GalleryInfo.php">
            <div class="gallery-col">
                    <img src="Images/homepage-gallery/bago-puri.jpg" alt="kaginhawaan">
                    <div class="layer">
                        <h3>PAGBABAGONG-PURI</h3>
                    </div>
                </div>
            </a>

            <a href="GalleryInfo.php">
            <div class="gallery-col">
                    <img src="Images/homepage-gallery/buo.jpg" alt="kaginhawaan">
                    <div class="layer">
                        <h3>PAGBUBUO NG BAYAN</h3>
                    </div>
                </div>
            </a>
        </div>

    </section>
    <!-- [END] OF HOMEPAGE CONTENTS -->

    <!-- [START] VIRTUALSHRINE NEXT TO YOU -->

    <section class="vs-features">
        <h1>VIRTUALSHRINE NEXT TO YOU</h1>
        <p>Explore our virtual tours and experience the Casa Real wherever you are</p>

        <div class="row">
            <div class="features-col">
                <img src="Images/homepage-features/image1.jpg" alt="">
                <h3>Audio Guide</h3>
                <p>Explore Casa Real with an Audio Guide</p>
            </div>

            <div class="features-col">
                <img src="Images/homepage-features/image2.JPG" alt="">
                <h3>Virtual 360</h3>
                <p>Check out the virtual 360 tour of the Casa Real Shrine</p>
            </div>

            <div class="features-col">
                <img src="Images/homepage-features/image3.jpg" alt="">
                <h3>Collections</h3>
                <p>Learn the political history of the Phillipines by visiting the collections of Casa Real Shrine</p>
            </div>
        </div>
    </section>

    <!-- [END] OF VIRTUALSHRINE NEXT TO YOU-->

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
        <img src="Images/Logo.png" class="footer-img">
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
    // var navLinks = document.getElementById("navLinks");
    // function showMenu(){
    //     navLinks.style.right = "0";
    // }
    // function hideMenu(){
    //     navLinks.style.right = "-200px";
    // }

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