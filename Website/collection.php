<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>VirtualShrine - Collection</title>
        <link rel="stylesheet" href="assets/css/collection.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

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

<!-----------------------------------------[START] COLLECTION DESCRIPTION----------------------------------------->

    <div class="container">
        
        <!-- START OF LEFT CLASS -->

        <div class="left">
            <div class="collection-title">
                <h1 id="item-title" class="item-title">
                    <span class="item-title-text">Face jug</span>
                </h1>
                    <p class="item-date">ca. 1850-80</p>
            </div> <!--end of COLLECTION-TITLE class-->

            <p class="item-location">
                <span class="location-onview"><svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" viewBox="0 0 12 18" class="icon"><path d="M11.267 9.184h.027L6.353 18h-.706L.706 9.184h.027A6.383 6.383 0 010 6.25C0 2.798 2.686 0 6 0s6 2.798 6 6.25a6.383 6.383 0 01-.733 2.934zM6 2.994a3.006 3.006 0 00-3.012 3.001A3.006 3.006 0 006 8.996a3.006 3.006 0 003.012-3.001A3.006 3.006 0 006 2.994z" class="cls-1"></path></svg>
                    <span class="item-location-message">On view at Casa Real Shrine in</span> 
                    <span class="item-location-gallery"><a href="">Gallery 955</a></span>
                </span>
            </p>

            <div class="item-intro-desc" itemprop="description">
                <p>This rare face vessel, one of only a handful by this skilled, unidentified potter, is one of the most 
                    recognizable and iconic examples of this enigmatic form. Technically and aesthetically, it is distinct 
                    among the large group of 19th-century Edgefield-made face jugs. Harvest jugs—so called for the horizontal 
                    handle atop the vessel—are uncommon, and at over ten inches in height, this one is quite large. Notably, the 
                    hand-modeled features are quite different than those on the majority of known face vessels, which are typically depicted with exaggerated features in a grotesque or menacing manner. The applied elements on this example are delicately modeled in high relief, with particular attention to the facial anatomy, proportions, and symmetry. The features are sensitively rendered with acute detail, such as the eyebrows with incised lines for hair and the delicate lips revealing small, kaolin teeth. The beautiful mottled-green alkaline glaze flecked with areas of iron spotting is in contrast to the dark brown alkaline glazes on most face vessels. This rare jug is also significant for its likeness to the face vessel in J. A. Palmer’s 1882 stereopticon photograph "The Aesthetic Darkey," a satirical image inspired by a famous period cartoon of Oscar Wilde depicted as a monkey admiring a lily and sunflower. From Palmer’s "Aiken and Vicinity" series, this challenging image is the earliest visual document of an Edgefield face vessel.
                </p>
                <p class="read-more"><a href="#" class="button">Read More...</a></p>
            </div>

        </div> <!--end of LEFT class-->

        <!-- START OF RIGHT CLASS -->
        <div class="right">
        
        <div class="item-inset">

            <figure itemtype="http://schema.org/ImageObject" class="item-figure">
                <div class="image-wrapper">
                    <img id="myImg" class="item-image" src="assets/Images/HomePage1.jpg" alt="">
                </div>

                <div class="controls">
                    <ul class="item-interactions">
                        <li class="item-interaction item-interactions-download">
                            <a href="assets/Images/HomePage1.jpg" class="gtm__download__image" title="Download" download="">
                                <svg class="icon icon-download" viewBox="0 0 13 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.088.01L5.48 0v14.344L1.067 9.93l-.041.042-.071.07-.004.004v.001l-.003.003-.948.94 5.37 5.37-.005.005 1.063 1.063 6.438-6.438-.947-.94-.001-.001-.007-.006a10.756 10.756 0 01-.07-.07l-.042-.042-4.514 4.513V.01h-.197zM.073 18.503L.065 19.76H13v-1.412H.073a20.492 20.492 0 000 .15v.005z"></path></svg>
                                <span class="download-text">Download image</span>
                            </a>
                        </li>

                        <li class="item-interaction item-interaction-enlarge">
                            <button id="myImg" class="item-image" class="gtm-enlarge-image enlarge-image-button js-enlarge-image-button" title="Enlarge image" aria-label="Enlarge image">
                                <svg class="icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.526 2.526h6.316V0H0v8.842h2.526V2.526zM15.158 0v2.526h6.316v6.316H24V0h-8.842zM8.842 21.474V24H0v-8.842h2.526v6.316h6.316zm12.632 0h-6.316V24H24v-8.842h-2.526v6.316z" fill="#333"></path></svg>
                                <span class="enlarge-text">Enlarge image</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </figure>
        </div>
  

        </div> <!--end of RIGHT class-->
    </div> <!--end of container class-->

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>


    

    <br>
    <br>
    <hr>
    <br>
<!-----------------------------------------[END] COLLECTION DESCRIPTION----------------------------------------->

<!-------------------------------------------[START] OTHER COLLECTION ------------------------------------------>

<section class="other-items">
    <div class="section-inset section-carousel">
        <h2 class="other-items-title">Other Display from <span><i>Gallery Name</i></span></h2>
    </div>

    <div class="carousel-wrapper">
        <div class="carousel-display carousel-display-offset carousel-display-no-scrollbar"></div>
            <button class="carousel-display-left"></button>
            <button class="carousel-display-right"></button>
    </div>

        <div class="carousel-wrapper carousel-has-right-button">
            <div class="carousel-display carousel-display-offset carousel-display-no-scrollbar rurated-related-work">
                
                <div class="related-display">
                    <figure class="related-display-image-wrapper card-standard-image">
                        <a class="related-display-image-link gtm-relateddisplay gtm-relateddisplay-has-image" href="" tabindex="-1">
                            <img src="assets/Images/Img2.jpg" alt="Face jug" class="related-display-image" loading="lazy">
                        </a>
                    </figure>
                    <h3 class="related-display-title card-title">
                        <a class="gtm-relateddisplay gtm-relateddisplay-has-image" href="">Face jug</a>
                    </h3>
                    <div class="related-display-meta">
                            <div class="related-display-gallery">Unrecorded  Edgefield District potter (American)</div>
                            <div class="related-display-date">ca. 1867-85</div>
                    </div>
                </div>

                <div class="related-display">
                    <figure class="related-display-image-wrapper card-standard-image">
                        <a class="related-display-image-link gtm-relateddisplay gtm-relateddisplay-has-image" href="" tabindex="-1">
                            <img src="assets/Images/Img2.jpg" alt="Face jug" class="related-display-image" loading="lazy">
                        </a>
                    </figure>
                    <h3 class="related-display-title card-title">
                        <a class="gtm-relateddisplay gtm-relateddisplay-has-image" href="">Face jug</a>
                    </h3>
                    <div class="related-display-meta">
                            <div class="related-display-gallery">Unrecorded  Edgefield District potter (American)</div>
                            <div class="related-display-date">ca. 1867-85</div>
                    </div>
                </div>

                <div class="related-display">
                    <figure class="related-display-image-wrapper card-standard-image">
                        <a class="related-display-image-link gtm-relateddisplay gtm-relateddisplay-has-image" href="" tabindex="-1">
                            <img src="assets/Images/Img2.jpg" alt="Face jug" class="related-display-image" loading="lazy">
                        </a>
                    </figure>
                    <h3 class="related-display-title card-title">
                        <a class="gtm-relateddisplay gtm-relateddisplay-has-image" href="">Face jug</a>
                    </h3>
                    <div class="related-display-meta">
                            <div class="related-display-gallery">Unrecorded  Edgefield District potter (American)</div>
                            <div class="related-display-date">ca. 1867-85</div>
                    </div>
                </div>

                <div class="related-display">
                    <figure class="related-display-image-wrapper card-standard-image">
                        <a class="related-display-image-link gtm-relateddisplay gtm-relateddisplay-has-image" href="" tabindex="-1">
                            <img src="assets/Images/Img2.jpg" alt="Face jug" class="related-display-image" loading="lazy">
                        </a>
                    </figure>
                    <h3 class="related-display-title card-title">
                        <a class="gtm-relateddisplay gtm-relateddisplay-has-image" href="">Face jug</a>
                    </h3>
                    <div class="related-display-meta">
                            <div class="related-display-gallery">Unrecorded  Edgefield District potter (American)</div>
                            <div class="related-display-date">ca. 1867-85</div>
                    </div>
                </div>

                <div class="related-display">
                    <figure class="related-display-image-wrapper card-standard-image">
                        <a class="related-display-image-link gtm-relateddisplay gtm-relateddisplay-has-image" href="" tabindex="-1">
                            <img src="assets/Images/Img2.jpg" alt="Face jug" class="related-display-image" loading="lazy">
                        </a>
                    </figure>
                    <h3 class="related-display-title card-title">
                        <a class="gtm-relateddisplay gtm-relateddisplay-has-image" href="">Face jug</a>
                    </h3>
                    <div class="related-display-meta">
                            <div class="related-display-gallery">Unrecorded  Edgefield District potter (American)</div>
                            <div class="related-display-date">ca. 1867-85</div>
                    </div>
                </div>

                <div class="related-display">
                    <figure class="related-display-image-wrapper card-standard-image">
                        <a class="related-display-image-link gtm-relateddisplay gtm-relateddisplay-has-image" href="" tabindex="-1">
                            <img src="assets/Images/Img2.jpg" alt="Face jug" class="related-display-image" loading="lazy">
                        </a>
                    </figure>
                    <h3 class="related-display-title card-title">
                        <a class="gtm-relateddisplay gtm-relateddisplay-has-image" href="">Face jug</a>
                    </h3>
                    <div class="related-display-meta">
                            <div class="related-display-gallery">Unrecorded  Edgefield District potter (American)</div>
                            <div class="related-display-date">ca. 1867-85</div>
                    </div>
                </div>

                <div class="related-display">
                    <figure class="related-display-image-wrapper card-standard-image">
                        <a class="related-display-image-link gtm-relateddisplay gtm-relateddisplay-has-image" href="" tabindex="-1">
                            <img src="assets/Images/Img2.jpg" alt="Face jug" class="related-display-image" loading="lazy">
                        </a>
                    </figure>
                    <h3 class="related-display-title card-title">
                        <a class="gtm-relateddisplay gtm-relateddisplay-has-image" href="">Face jug</a>
                    </h3>
                    <div class="related-display-meta">
                            <div class="related-display-gallery">Unrecorded  Edgefield District potter (American)</div>
                            <div class="related-display-date">ca. 1867-85</div>
                    </div>
                </div>
            </div>
                <button class="carousel-display-left"></button>
                <button class="carousel-display-right"></button>
            </div>
        </div>
</section>


<!--------------------------------------------[END] OTHER COLLECTION ------------------------------------------->


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

<!-- READ MORE JQUERY -->
<script>
    var $el, $ps, $up, totalHeight;

$(".item-intro-desc .button").click(function() {
      
  totalHeight = 0

  $el = $(this);
  $p  = $el.parent();
  $up = $p.parent();
  $ps = $up.find("p:not('.read-more')");
  
  // measure how tall inside should be by adding together heights of all inside paragraphs (except read-more paragraph)
  $ps.each(function() {
    totalHeight += $(this).outerHeight();
  });
        
  $up
    .css({
      // Set height to prevent instant jumpdown when max height is removed
      "height": $up.height(),
      "max-height": 9999
    })
    .animate({
      "height": totalHeight
    });
  
  // fade out read-more
  $p.fadeOut();
  
  // prevent jump-down
  return false;
    
});
</script>

 <!----------------------------------------------SCRIPT FOR IMAGE MODAL----------------------------------------->

<script>
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    }
</script>
 </script>
 <!----------------------------------------------SCRIPT FOR IMAGE MODAL----------------------------------------->

</body>
</html>
