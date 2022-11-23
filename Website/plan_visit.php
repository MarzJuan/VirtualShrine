<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>VirtualShrine - Plan Your Visit</title>
        <link rel="stylesheet" href="assets/css/plan_visit.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- :) -->
    <section class="sub-header">
        <nav>
            <a href="homePage.php"><image  class="logo" src="Images/Logo.png" alt="Casa Real Shrine logo"></image></a>
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
        <h1>Plan Your Visit</h1>
        <div class="jump-links">
            <a href="#GeneralAdmission" class="jumplink-banner__link button secondary-button">General Admission</a>
            <a href="#HealthAndSafety" class="jumplink-banner__link button secondary-button">Visitor Guidelines</a>
            <a href="#Location" class="jumplink-banner__link button secondary-button">Location</a>
        </div>
    </section>
    <!-- [START] GENERAL ADMISSION -->
    <section class="content-split content-admission" id="GeneralAdmission">
    <h2 class="content-split-title component-title">General Admission</h2>
    <div class="content-wrap">
        <div class="content-split-main rich-text">
            <p></p>
            <h4>The Admission is <u>Free</u></h4><br>
            <p>You are advised to book a scheduled slot in advance to guarantee entry and help control the number of 
                individuals who can visit. Walk-in visits are available each day for those who arrive at the Museum 
                without booking in advance. But walk-in entry cannot be guaranteed because catering number of visitors 
                depends on the capacity. Please speak to a staff upon your arrival to inquire about availability.</p>
            <div style="background-color: #f2f2f2; padding: 12px; border-radius: 4px;margin-right:90px;">
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
            <h5>Booking Online</h5><br>
            <p>Booking an admission online is advised. Just show the confirmation email of your booking at the entrance.</p><br>
        </div>
    </div>
    </section>
    
    <!-- [END] GENERAL ADMISSION -->
    <!-- [START] VISITOR GUIDELINES -->
    <section class="content-split content-location" id="HealthAndSafety">
    <h2 class="content-split-title component-title">Visitor Guidelines</h2>
    <div class="content-wrap">
        <div class="rich-text content-split-main">
            <p>We look forward to welcoming you to Casa Real Shrine! Please review our visitor guidelines 
                outlined below prior to your visit. By visiting in person, you agree to abide by 
                these policies, and Casa Real Shrine reserves the right to ask visitors who do not follow 
                these guidelines to leave the Museum's premises.</p>
            <h4>Health And Safety</h4><br>
            <p>The safety of our staffs and visitors are at the top of our priority. The Museum has 
                updated its visitor guidelines and regulations to help keep you safe. Please be 
                assured that the Casa Real Shrine is following guidelines issued by Department of 
                Tourism (DOT) for increased health and safety procedures.</p>
            
            <ul>
                <li>Masks are recommended</li>
                <li>If you are unable to visit us in person, please see below for more information on the 
                    wide range of virtual resources that you can enjoy from home. 
                    We will be here to welcome you when you are able to return.</li>
                <li>An inherent risk of exposure to COVID-19 exists in any public space where people are present. 
                    We cannot guarantee that you will not be exposed to COVID-19 during your visit to The Met. 
                    Those visiting The Casa Real Shrine do so at their own risk of such exposure.</li>
            </ul><br>
            <h4>Staff at Your Service</h4><br>
            <p><b>The Casa Real Shrine's expert team of dedicated staff is here to help if you have any questions or concerns during your 
                visit. So they can provide you with great service, remember that:</b></p>
            <ul>
                <li>The principles of diversity, inclusion, and equal access apply to all aspects of The Met's operations, across all categories of individuals.</li>
                <li>Verbally abusive, harassing, discriminatory, or threatening statements or behavior toward Met staff or other visitors is prohibited.</li>
                <li><b>Please follow the instructions of security officers.</b></li>
            </ul><br>
            <p><b>The Casa Real Shrine reserves the right to refuse or revoke the admission of any visitor whose conduct violates these guidelines.</b></p>
        </div>
        <div class="rich-text content-split-side">
            <ul id="accordion">
                <li>
                    <label for="second">Getting to the Casa Real Shrine <span>&#x3e;</span></label>
                    <input type="radio" name="accordion" id="second">
                    <div class="accordion_content">
                        <ul>
                            <li>Limited public parking is available.</li>
                        </ul>
                    </div>
                </li>
                <li>
                    <label for="third">Entering the Building <span>&#x3e;</span></label>
                    <input type="radio" name="accordion" id="third">
                    <div class="accordion_content">
                        <ul>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;"><strong>
                            All visitors must pass through a security check. Please anticipate lines at the entrances.
                            </strong></li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Visitors may bring small backpacks into the galleries if they are worn on your front or side.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Visitors may bring water in plastic and secure bottles into the Museum.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Smoking, including electronic cigarettes, is not allowed in the Museum or near the entrances.
                            </li>
                            <br>
                            <strong>The Museum reserves the right to refuse entry to any visitor carrying the following prohibited items:</strong>
                            <br>
                            <br>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Large bags, luggage, and musical instruments
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Glass containers, jars, aerosol cans, and liquids other than water
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Any large objects, such as flags, banners, frames, artwork, shopping carts, sporting goods, and recreational equipment
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Dogs or others pets (Service animals are welcome.)
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Weapons and hazardous materials
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <label for="fourth">While in the Museum <span>&#x3e;</span></label>
                    <input type="radio" name="accordion" id="fourth">
                    <div class="accordion_content">
                        <p><b>We are committed to offering the best possible environment for our visitors. In order to achieve this, 
                            we require your cooperation with the following:<br></b></p>
                
                        <ul>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Children twelve and under must be accompanied by an adult at all times.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Stream select audio content in the galleries on your mobile device for free.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            The displays are here for you to study, admire, and explore.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Unless otherwise indicated, you may take photographs for personal use.
                            </li>
                        </ul>
                        <br>
                        <p><b>We ask that visitors refrain from disorderly or disruptive conduct that interferes with or distracts 
                            from other visitors' enjoyment of the Museum<br></b></p>
                        <ul>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Keep voices low and be mindful of others.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Cellphones should be set on vibrate or silent.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Keep doorways and hallways accessible to other visitors.
                            </li>
                        </ul>
                        <br>
                        <p><b>The Museum prohibits the following:<br></b></p>
                        <ul>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Conduct that poses any risk to other visitors or to the Museum's staff or collections.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            The unauthorized playing of music and video, unauthorized theater performances, and sound amplification and 
                            noisemakers (except for assistive-listening devices).
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Charitable solicitations, leafleting, signature gathering, picketing, and press conferences by visitors.
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Solicitation of business and unauthorized for-profit activity.
                            </li>
                            <li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                            Refund, resale, exchange, or transferal of Museum tickets or Membership benefits
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <label for="fifth">Gallery Photography and Video Policy <span>&#x3e;</span></label>
                    <input type="radio" name="accordion" id="fifth">
                    <div class="accordion_content">
                        <p>The Met permits photography and video for private, non-commercial use only at The Met Fifth Avenue and The Met Cloisters.</p>
                        <br>
                        <p><b>Hand-Held Cameras and video on personal cellular devices</b> may be used, without a flash, to photograph and film the galleries unless 
                        otherwise designated.</p>
                        <br>
                        <p>Photographs and video cannot be published, sold, reproduced, transferred, distributed, or 
                        otherwise commercially exploited in any manner whatsoever.</p>
                    </div>
                </li>
            </ul>
            <br><br>
            
            <h4>VirtualShrine</h4><br>
            <p>Can't visit The Casa Real Shrine in person? Be sure to explore our website for groundbreaking resources that connect 
                you with current exhibitions, VirtualShrine collection, and more. Resources include:</p><br>
                <ul>
                    <a href=""><li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                    VirtualShrine Collection
                    </li></a>
                    <a href=""><li style="list-style: disc outside none;display: list-item;margin-left: 1em;">
                    VirtualShrine 360
                    </li></a>
                </ul>
        </div>
    </div>
    </section>
    <!-- [END] VISITOR GUIDELINES -->
    <!-- [START] LOCATION-->
    <section class="content-split content-location" id="Location">
    <h2 class="content-split-title component-title">Location and Hours</h2>
    <div class="content-wrap">
        <div class="content-split-main rich-text">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.660196653396!2d120.80931511476206!3d14.84431718964763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396522cdc858be5%3A0x41d2d36937bc0e93!2sMuseo%20ng%20Kasaysayang%20Pampulitika%20ng%20Pilipinas%20-%20Casa%20Real%20Shrine!5e0!3m2!1sen!2sph!4v1668867710223!5m2!1sen!2sph" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="content-split-side rich-text">
        <p></p>
            <p>
            <h4 id="message">hey</h4><br><br>
            <b>Address: </b>RRV6+PJC, Paseo del Congreso, Plaza Rizal, Malolos, 3000 Bulacan<br><br>
            <b>Hours: </b>8:00 AM - 4:00 PM<br><br>
            <b>Closed: </b>Monday
            </p><br>
            
            
        </div>
    </div>
    </section>
    <!-- [END] LOCATION-->
    <!-- [START] FOOTER -->
    <section class="footer">
        <h4>About Us</h4>
        <p>The Museum thus traces the evolution of the Filipino nation-state and the emergence of its system of government <br> and democratic traditions amid the backdrop of long struggles for independence.</p>
    
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
        <p>2022 <i class="fa-regular fa-copyright"></i> VirtualShrine</p>
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
