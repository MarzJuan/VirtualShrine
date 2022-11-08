<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>

<title>Our Organization - VirtualShrine</title>
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <head>
    <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
       <link rel="stylesheet" href="assets/css/homepage.css">
       <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
    <!-- START OF NAVIGATION BAR -->
       <div class="container nav-background audio-guide-header">
       <div class="nav-wrapper">
                 <a href="homePage.php"><image  class="logo" src="Images/Logo.png" alt="manage"></image></a>
                 <button class="mobile-nav-toggle noprint" aria-controls="primary-navigation" aria-expanded="false">
                        <img class="icon-hambuger" src="Images/menu.svg" alt="" aria-hidden="true"></img>
                        <img class="icon-close" src="Images/backburger.svg" alt="" aria-hidden="true" ></img>
                        <span class="visually-hidden">Menu</span>
                 </button>
           <div class="navigation">
                   <div class="menu">
                   <nav class="primary-navigation fs-button"  id="primary-navigation">
                        <ul araial-label="Primary" role="list" class="nav-list fs-button" >
                        <li class="menu-item"><a href="homePage.php">Home</a></li>
   
                        <li class="menu-item">
                               <a class="sub-btn" href="#">Visit<i class="fas fa-angle-down"></i></a> <!--Plan your Visit, Book a visit, Audio Guide-->
                               <ul class="sub-menu">
                                      <li class="sub-item"><a href="Plan.php">Plan Your Visit</a></li>
                                      <li class="sub-item"><a href="consent-form.php">Book a Visit</a></li>
                               </ul>
                        </li>
   
                        <li class="menu-item"> <!--All the Galleries-->
                               <a class="sub-btn" href="#">Explore<i class="fas fa-angle-down"></i></a>
                               <ul class="sub-menu">
                                      <li class="sub-item"><a href="Gallery.php">Galleries</a></li>
                                      <li class="sub-item"><a href="Audio.php">Audio Guide</a></li>
                                      <li class="sub-item"><a href="VirtualTour.php">Virtual Tour</a></li>
                               </ul>
                        </li> <!--All the Galleries-->
                        
                        <li class="menu-item"><a href="#">About</a></li>
                   </div>
               </div>
          </div>
          </div>
   
       <section>
<!-- END OF NAVIGATION BAR -->

<!-- START OF PAGE CONTENT -->

<div class="about-container">
    <div class="about-title">
        <b>OUR ORGANIZATION</b>
    </div><br>

    <section>
        <video id="slider" autoplay muted loop>
            <source src="video/casareal.mp4" type="video/mp4">
        </video>
        <ul class="about-navigation">
            <li onclick="videoUrl('video/casareal.mp4')"><img src="Images/about/thumb1.jpg"('></li>
            <li onclick="videoUrl('video/casareal2.mp4')"><img src="Images/about/thumb2.jpg"('></li>
            <li onclick="videoUrl('video/casareal3.mp4')"><img src="Images/about/thumb1.jpg"('></li>
            <li onclick="videoUrl('video/casareal4.mp4')"><img src="Images/about/thumb1.jpg"('></li>
        </ul>
    </section>

    <div class="crs-about">
        <p>The <i>Museo ng Kasaysayang Pampulitika ng Pilipinas</i> (Museum of Philippine Political History) was inaugurated in 1995 and re-conceptualized two years later with the theme “The Filipino Struggle for Freedom.” The Museum thus traces the evolution of the Filipino nation-state and the emergence of its system of government and democratic traditions amid the backdrop of long struggles for independence. Miniature dioramas, theatrical backdrops, interactive terminals, and original artifacts recreate these periods, from the earliest communities to the Spanish and American colonial periods, through the Second World War until the present. Major events and figures in the country's political history are highlighted in the process.</p>
    </div>
</div>

<!-- END OF PAGE CONTENT -->




<!-- START OF FOOTER -->
       <footer class="primary-footer padding-inline-auto padding-block-500 color-neutral-100 bg-color noprint">
        <div class="container">
               <div class="primary-footer-wrapper">
                      <div class="primary-footer-nav">
                           <nav class="footer-nav fs-500">
                                  <ul class="flow" style="--flow-spacer: 1em " arial-label="footer " role="list">
                                         <li><a href="#">About Us</a></li>
                                         <li><a href="consent-form.php">Book a Tour</a></li>
                                         <li><a href="Gallery.php">Collections</a></li>
                                         <li><a href="VirtualTour.php">Virtual Tour</a></li>
                                  </ul>
                           </nav>  
                      </div>
                      <div class="primary-footer-logo-social">
                                    <div class="center-text-footer fs-700">Follow Us</div>
                                    <div class="social-list"><svg  class="social-icon fb" viewBox="0 0 24 24">
                                                  <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                                              </svg>
                                              <svg class="social-icon twitter"  viewBox="0 0 24 24">
                                                         <path d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
                                                     </svg>
                                                     <svg class="social-icon instagram"  viewBox="0 0 24 24">
                                                                <path d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                                            </svg>
                                                            <svg class="social-icon youtube"  viewBox="0 0 24 24">
                                                                       <path fill="currentColor" d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z" />
                                                                   </svg></div>
                                    <img class="footer-logo" src="Images/Logo.png" alt="">
                      </div>
                      <div class="primary-footer-info">
                                    <h1 class="Contact-info fs-650 fw-semi-bold">Contact Information</h1>
                                    <div class="Details">
                                    <div>Paseo Del Congreso, Liang, City of Malolos,<br> Bulacan</div>
                                    <div>Museum Curactor: Ms. Ma. Antonia T. Jimenez        
                                    </div>
                                    <h4>@CasaRealMalolos</h4>
                                    <div>Telephone Number:(044) 931-2508</div>
                                    <div>Cellphone Number:09667089376</div>
                                    <div>mpph@nhcp.gov.ph</div>  
                             </div>  
                      </div>
               </div>
        </div>
   </footer>

   <script type="text/javascript">
        function videoUrl(hmmmmmm){
            document.getElementById("slider").src = hmmmmmm;
        }
    </script>

       </body>
</html>