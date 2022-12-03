<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>Virtual Tour - VirtualShrine</title>
        <link rel="stylesheet" href="assets/css/virtual-tour.css">
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
       <video autoplay muted loop class="back-video">
            <source src="video/casareal.mp4" type="video/mp4">
        </video>

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

        <!-- [START] HEADER -->
        <div class="text-box">
            <h1 class="expressive">Explore the Casa Real Shrine</h1>
            <!-- <h3 class="jumplink-banner-description"><p>Explore the Political history of the Philippines with VirtualShrine.</p> -->
            <a class="virtual-btn" href="https://virtualshrine.online/VirtualTour/index.html">Go to Virtual 360</a>
        </div>
        <!-- [END] OF HEADER -->
    </section>

    <!-- VIRTUAL TOUR TIPS -->

    <section class="content-split content-admission">
    <div class="content-wrap">
        <div class="content-split-main rich-text">
            <p></p>
            <h4>Enjoy the Virtual360 Tour</u></h4><br>
            <div class="split-main-indent" style="">
            The VirtualShrine provides a virtual tour that allow visitors to enjoy self-guided, 
            room-by-room tours of certain exhibits and gallery inside the museum from their PC or mobile 
            device.
            </div>
            <br>
            <div class="split-main-card" style="">
                <p><b>Note: </b>This tour and these presentations have been thoroughly tested and should 
                    function on all commonly used devices and browsers (using a desktop computer with Windows, 
                    Mac, Linux or a mobile device such as an iPhone, iPad, or Android). Its functionality and 
                    design may change as it adjusts automatically to accommodate the greatest number of visitors.
                </p>
                </div>
            <br>
        </div>
        <div class="rich-text content-split-side">
            <ul id="accordion">
                <li>
                    <label for="first">Virtual tour tips <span>&#x3e;</span></label>
                    <input type="radio" name="accordion" id="first">
                    <div class="accordion_content">
                        <ul>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                                To navigate between galleries in the tour, click the thumbnail menu to display all galleries.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                                Click the gallery you want to explore, each gallery is shown in 360 view.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                                Click the arrow provided in order to go to the next gallery.
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <label for="second">Virtual 360 Functionalities <span>&#x3e;</span></label>
                    <input type="radio" name="accordion" id="second">
                    <div class="accordion_content">
                        <ul>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                                <b>Hotspots </b>- Click the hotspot to display further information regarding the display.
                                The hotspots can bee seen on every display.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                                <b>Arrows </b>- This virtual tour is designed for gradual movement that mimics walking. Clicking the arrow 
                                will let you jump around different locations at a moment's notice.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                                <b>Rotate and Zoom </b>- You can explore the 360-degree view by swiping the screen from left to right.
                            </li>
                        </ul>
                    </div>
                </li>

            <a href="plan_visit.php"><button class="button-31" role="button">Plan Your Visit</button></a>
            <a href="consent-form.php"><button class="button-31" role="button">Schedule a Visit</button></a>

            </div>

        </div>
    </div>
    </section>

    <hr>
    <!-- VIRTUAL TOUR TIPS -->

    <!-- OTHER CONTENT -->

    <section class="gallery-rows">
    <h4>You may also be interested in</u></h4><br>
    <div class="row">
        <a style="text-decoration: none;color: black;" href="">
            <div class="features-col">
                <div id="container">
                <img id="image" src="assets/css/image/gallery-collection.jpg" alt="">
                </div>
                <div class="featured-text-title">
                    <h3 class="featured-title">Collections</h3>
                    <p>Explore the 4 Galleries of Casa Real Shrine</p>
                </div>
            </div>
        </a>

        <a style="text-decoration: none;color: black;" href="">
            <div class="features-col">
                <div id="container">
                <img id="image" src="Images/VirtualTour/philippine_president.jpg" alt="">
                </div>
                <div class="featured-text-title">
                    <h3 class="featured-title">Philippine Presidents</h3>
                    <p>This Collection displays all the Presidents in the Philippines.</p>
                </div>
            </div>
        </a>
    </div>
    </section>

    <!-- OTHER CONTENT -->



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


    
    <!-- JAVASCRIPT FOR ACCORDION -->
<script>
    var allRadios = document.getElementsByName('accordion');
    var booRadio;
    var x = 0;
    for(x = 0; x < allRadios.length; x++){
    allRadios[x].onclick = function() {
        if(booRadio == this){
        this.checked = false;
        booRadio = null;
        } else {
        booRadio = this;
        }
    };
    }
</script>


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