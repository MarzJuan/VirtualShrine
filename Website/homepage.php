<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>Homepage - VirtualShrine</title>
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

        <!-- [START] HEADER -->
        <div class="text-box">
            <h1>WELCOME TO THE VIRTUALSHRINE</h1>
            <p>Free Entry - Operation time : 8:00AM - 4:00PM</p>
            <a class="book-btn" href="consent-form.php">Book a Visit Now</a>
        </div>
        <!-- [END] OF HEADER -->
    </section>

    <!-- [START] STARTING PAGE -->

    <section class="content-split">
        <h1>ABOUT CASA REAL SHRINE</h1>

        <div class="content-wrap">
            <div class="content-split-side rich-text">
        <div class="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="Images/about/history-of-casa-real-shrine.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="Images/about/women-of-malolos.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="Images/about/crs-printing-press.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="Images/about/thumb2.jpg" alt="">
                </div>
            </div>
            <div class="carousel-controls">
                <span class="prev"></span>
                <span class="next"></span>
            </div>
            <div class="carousel-indicators"></div>
        </div>
        </div>

            <div class="content-split-main rich-text">
                <p class="about-desc">Located at Paseo del Congreso, Plaza Rizal Malolos Bulacan, Casa Real Shrine served as the 
                    National Museum and the National Printing Press during the First Philippine Republic. It 
                    is a government museum consisting of relics from the First Philippine Republic. 
                    Memorabilia's of Gen. Emilio Aguinaldo are also found here. First class families of Malolos, 
                    their furnitures, old books, stamps, paper money and coin are also displayed in the Shrine.</p>
                <p class="about-desc-2">Casa Real is also one of Malolos oldest structure. The building contains 
                    exhibits, printing press of the Malolos Republic and a display of the 21 Women of Malolos 
                    memorabilia. Also presented here are the photographs of the 100 Filipino women. Each of them has 
                    distinct characteristics in their fields.</p>

                    <a href="about-crs.php"><button class="button-31" role="button">Learn More</button></a>
            </div>
        </div>
    </section>
    <!-- [END] STARTING PAGE -->


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
            <a href="audio-guide.php">
            <div id="container">
                <img id="image" src="Images/homepage-features/image1.jpg" alt="">
            </div>
            </a>
            <div class="card-title">
                <h3>Audio Guide</h3>
                <p>Explore Casa Real with an Audio Guide</p>
            </div>
            </div>

            <div class="features-col">
            <a href="virtual-tour.php">
            <div id="container">
                <img id="image" src="Images/homepage-features/image2.JPG" alt="">
            </div>
            </a>
                <div class="card-title">
                <h3>Virtual 360</h3>
                <p>Check out the virtual 360 tour of the Casa Real Shrine</p>
                </div>
            </div>

            <div class="features-col">
            <a href="gallery.php">
            <div id="container">
                <img id="image" src="Images/homepage-features/image3.jpg" alt="">
            </div>
            </a>
            <div class="card-title">
                <h3>Collections</h3>
                <p>Learn the political history of the Phillipines by visiting the collections of Casa Real Shrine</p>
            </div>
            </div></div>
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
                <span style="margin-right:30px;"><a href="plan_visit.php">Plan Your Visit</a></span><a href="consent-form.php">Book a Visit</a><br>
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

<script src="assets/js/swiper-script.js"></script>

</body>
</html>