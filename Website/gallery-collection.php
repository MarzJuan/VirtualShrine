<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>VirtualShrine - Audio Guide</title>
        <link rel="stylesheet" href="assets/css/gallery-collection.css">
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
            <a href="homePage.php"><image  class="logo" src="Images/Logo.png" alt="Casa Real Shrine logo"></image></a>
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
                                   <li class="sub-item"><a href="collection.php">Collections</a></li>
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
        <div class="header-content">
        <h1 class="expressive">Collections</h1>
        <h3 class="jumplink-banner-description"><p>Explore the Political history of the Philippines with VirtualShrine.</p>


        <!-- SEARCHBAR
            <div class="simple-acs-search">
                <form name="simple-acs-search__form" class="simple-acs-search__form js-simple-acs-search__form" method="post">
                    <input placeholder="Search the collection" type="text" class="simple-acs-search__input js-simple-acs-search__input"><input type="submit" value="Go">
                </form>
            </div> 
        -->

<p>&nbsp;</p></h3>
        <div class="header-jumplink-banner">
                <a href="#galleries" class="js-jump-link jumplink-banner__link button secondary-button">
                    Galleries
                </a>
                <a href="#vid-audio" class="js-jump-link jumplink-banner__link button secondary-button">
                    Videos, and Audio Guide
                </a>
                <a href="#exhibit" class="js-jump-link jumplink-banner__link button secondary-button">
                    Exhibits
                </a>
        </div>
    </div>
        <!-- [END] OF HEADER -->
    </section>


    <!-- [START] GALLERY COLLECTION CONTENTS -->

    <section class="content-split content-admission" id="GeneralAdmission">
    <h2 class="content-split-title component-title">General Admission</h2>
    <div class="content-wrap">
        <div class="content-split-main rich-text">
            <p></p>
            <h4>Explore the 5 Galleries at the Casa Real Shrine</u></h4><br>
            <p class="split-main-indent">You are advised to book a scheduled slot in advance to guarantee entry and help control the number of 
                individuals who can visit. Walk-in visits are available each day for those who arrive at the Museum 
                without booking in advance. But walk-in entry cannot be guaranteed because catering number of visitors 
                depends on the capacity. Please speak to a staff upon your arrival to inquire about availability.</p>
            <div class="split-main-card" style="">
                Upon entry to the museum, make sure to prepare a copy or a screenshot of the booking confirmation sent to your email,
                and a valid ID to show the guard in order to confirm your scheduled visit.
            </div>
            <br>
        </div>
        <div class="content-split-side rich-text">
            <p></p>
            <h5>Museum Operation Details</h5><br>
            <p>The museum is open every <b>Tuesday - Sunday</b> from <b>8:00 am to 4:00 pm</b>. Make sure to follow the rules and 
            regulation being implemented inside the museum.</p><br>
            <hr>
            <br>
            <h5>Booking Online</h5><br>
            <p>Booking an admission online is advised. Just show the confirmation email of your booking at the entrance.</p><br>
        </div>
    </div>
    </section>
    

    <!-- [END] GALLERY COLLECTION CONTENTS -->



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