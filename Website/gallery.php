<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>Collection - VirtualShrine</title>
        <link rel="stylesheet" href="assets/css/gallery.css">
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
        <!-- <div class="header-jumplink-banner">
                <a href="#galleries" class="js-jump-link header-jumplink-banner button secondary-button">
                    Galleries
                </a>
                <a href="#vid-audio" class="js-jump-link header-jumplink-banner button secondary-button">
                    Videos, and Audio Guide
                </a>
                <a href="#exhibit" class="js-jump-link header-jumplink-banner button secondary-button">
                    Exhibits
                </a>
        </div> -->
    </div>
        <!-- [END] OF HEADER -->
    </section>


    <!-- [START] GALLERY INTRO CONTENT -->

    <section class="content-split content-admission">
    <div class="content-wrap">
        <div class="content-split-main rich-text">
            <p></p>
            <h4>Explore the 5 Galleries at the Casa Real Shrine</u></h4><br>
            <p class="split-main-indent">The VirtualShrine collection tells our nation's shared political history.</p>
            <div class="split-main-card" style="">
                The scope of objects in VirtualShrine's collection is staggering - relics from the First Philippine
                Republic, memorabilia of Gen. Emilio Aguinaldo, relics from the wealthy families of Malolos, exhibits, 
                a printing press of the Malolos Republic, and a display of the 21 Women of Malolos memorabilia.
            </div>
            <br>
        </div>
        <div class="content-split-side rich-text">
        <p></p>
            <p>
            <h4 id="message">hey</h4><br>
            <b>Address: </b>RRV6+PJC, Paseo del Congreso, Plaza Rizal, Malolos, 3000 Bulacan<br>
            <b>Hours: </b>8:00 AM - 4:00 PM<br>
            <b>Closed: </b>Monday
            </p>

            <!-- HTML !-->
            <a href="plan_visit.php"><button class="button-31" role="button">Plan Your Visit</button></a>
            <a href="consent-form.php"><button class="button-31" role="button">Schedule a Visit</button></a>

        </div>
    </div>
    </section>

    <hr>

    <!-- [END] GALLERY INTRO CONTENT -->

    <!-- [START] GALLERY COLLECTION CONTENTS -->

    <div class="gallery-rows" id="galleries">
        <h1 class="gallery-row-title">Start Exploring the Collections</h1><br>
        <p class="gallery-row-text">Witness the Political History of the Philippines through the VirtualShrine's Collection of relics, photographs 
            and artifacts. The Galleries tells the long history of the Philippines from pre-colonial times upto the events 
            under the rule of colonizers and the tenure of the past presidents of the Philippines
        </p>

</div>

    <!-- [END] GALLERY COLLECTION CONTENTS -->

    <!-- [TRY START] -->

    <section class="hero-section">
    <div class="card-grid">
    <?php                        
       $posts = "SELECT * FROM categories WHERE status='0' ";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
        <a class="card" href="gallery-collection.php?id=<?= $post['id']?>">
        <div class="card__background" style="background-image: url(../Admin/uploads/category/<?= $post['image'];?>)"></div>
        <div class="card__content">
            <p class="card__category">Gallery</p>
            <h3 class="card__heading"><?= $post['name']?></h3>
        </div>
        </a>
        <?php
            }
        }
            ?>

    </div>
    </section>

    <!-- [TRY END] -->


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