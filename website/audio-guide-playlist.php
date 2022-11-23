<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>VirtualShrine - Homepage</title>
        <link rel="stylesheet" href="assets/css/audio-guide-playlist.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nunito:300,400'>

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
                                   <li class="sub-item"><a href="Gallery.php">Galleries</a></li>
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
    </section>


    <!-- [START] AUDIO PLAYER -->
<div class="audio-stop-header">
    <a href="audio-guide.php">
    <svg width="41" height="45" viewBox="0 0 41 45" fill="none" xmlns="http://www.w3.org/2000/svg">
        <title>Audio Guide</title>
        <path d="M6.52221 0.612718L10.5219 11.063H8.30931L7.37321 8.54402H3.4416L2.52253 11.063H0.360992L4.36068 0.612718H6.52221ZM4.1224 6.70586H6.69242L5.41592 3.23379L4.1224 6.70586Z" fill="black"></path>
        <path d="M18.2522 11.063H16.1587V10.4162C15.9431 10.6545 15.6594 10.8531 15.3077 11.0119C14.956 11.1594 14.5588 11.2332 14.1163 11.2332C13.2653 11.2332 12.6072 10.9779 12.142 10.4673C11.6768 9.95667 11.4442 9.27587 11.4442 8.42488V3.45505H13.5546V7.99938C13.5546 8.39651 13.6511 8.72556 13.844 8.98654C14.0482 9.23616 14.3603 9.36097 14.7801 9.36097C15.1091 9.36097 15.3985 9.27587 15.6481 9.10567C15.8977 8.92413 16.0623 8.66883 16.1417 8.33978V3.45505H18.2522V11.063Z" fill="black"></path>
        <path d="M24.9738 10.4332C24.8036 10.6375 24.5427 10.8247 24.1909 10.9949C23.8505 11.1537 23.4761 11.2332 23.0676 11.2332C22.523 11.2332 22.0351 11.131 21.6039 10.9268C21.1727 10.7112 20.8096 10.4276 20.5146 10.0758C20.2196 9.71272 19.9927 9.29289 19.8338 8.81633C19.6863 8.32843 19.6126 7.81216 19.6126 7.26752C19.6126 6.72288 19.6863 6.21228 19.8338 5.73572C19.9927 5.24782 20.2196 4.82232 20.5146 4.45923C20.8096 4.09614 21.1727 3.81247 21.6039 3.60823C22.0351 3.39264 22.523 3.28485 23.0676 3.28485C23.4761 3.28485 23.8505 3.36995 24.1909 3.54015C24.5427 3.699 24.8036 3.88622 24.9738 4.10181V0H27.0843V11.063H24.9738V10.4332ZM24.9738 6.00804C24.849 5.74707 24.6561 5.53716 24.3952 5.3783C24.1342 5.20811 23.8505 5.12301 23.5442 5.12301C22.9655 5.12301 22.5173 5.32725 22.1996 5.73572C21.8819 6.1442 21.723 6.6548 21.723 7.26752C21.723 7.88024 21.8819 8.39084 22.1996 8.79932C22.5173 9.19645 22.9655 9.39501 23.5442 9.39501C23.8619 9.39501 24.1455 9.31559 24.3952 9.15673C24.6561 8.98654 24.849 8.77095 24.9738 8.50998V6.00804Z" fill="black"></path>
        <path d="M31.0254 11.063H28.9149V3.45505H31.0254V11.063ZM31.1445 1.25948C31.1445 1.62257 31.0367 1.91191 30.8211 2.12749C30.6055 2.33173 30.3219 2.43385 29.9701 2.43385C29.6184 2.43385 29.329 2.33173 29.1021 2.12749C28.8865 1.91191 28.7787 1.62257 28.7787 1.25948C28.7787 0.907731 28.8865 0.624065 29.1021 0.408479C29.329 0.192893 29.6184 0.0850996 29.9701 0.0850996C30.3219 0.0850996 30.6055 0.192893 30.8211 0.408479C31.0367 0.624065 31.1445 0.907731 31.1445 1.25948Z" fill="black"></path>
        <path d="M39.8323 7.26752C39.8323 7.8462 39.7415 8.37949 39.5599 8.86739C39.3784 9.3553 39.1231 9.77513 38.794 10.1269C38.465 10.4786 38.0735 10.7509 37.6197 10.9438C37.1658 11.1367 36.6609 11.2332 36.1049 11.2332C35.5489 11.2332 35.044 11.1367 34.5901 10.9438C34.1362 10.7509 33.7448 10.4786 33.4157 10.1269C33.0867 9.77513 32.8314 9.3553 32.6498 8.86739C32.4683 8.37949 32.3775 7.8462 32.3775 7.26752C32.3775 6.67749 32.4683 6.13853 32.6498 5.65062C32.8314 5.16272 33.0867 4.74289 33.4157 4.39115C33.7448 4.0394 34.1362 3.76708 34.5901 3.57419C35.044 3.3813 35.5489 3.28485 36.1049 3.28485C36.6609 3.28485 37.1658 3.3813 37.6197 3.57419C38.0735 3.76708 38.465 4.0394 38.794 4.39115C39.1231 4.74289 39.3784 5.16272 39.5599 5.65062C39.7415 6.13853 39.8323 6.67749 39.8323 7.26752ZM37.7388 7.26752C37.7388 6.62076 37.597 6.09314 37.3133 5.68466C37.041 5.27618 36.6382 5.07195 36.1049 5.07195C35.5716 5.07195 35.1631 5.27618 34.8795 5.68466C34.6071 6.09314 34.471 6.62076 34.471 7.26752C34.471 7.90293 34.6071 8.43055 34.8795 8.85038C35.1631 9.25885 35.5716 9.46309 36.1049 9.46309C36.6382 9.46309 37.041 9.25885 37.3133 8.85038C37.597 8.43055 37.7388 7.90293 37.7388 7.26752Z" fill="black"></path>
        <path d="M6.42215 41.0854V39.3494H10.541V40.2685C10.541 40.9947 10.4332 41.6528 10.2176 42.2428C10.002 42.8215 9.68998 43.315 9.2815 43.7235C8.88436 44.132 8.40213 44.4497 7.8348 44.6766C7.27882 44.8922 6.65475 45 5.96261 45C5.22507 45 4.54995 44.8695 3.93723 44.6086C3.32451 44.3476 2.7969 43.9788 2.35438 43.5023C1.91186 43.0257 1.56579 42.4584 1.31616 41.8003C1.07788 41.1422 0.95874 40.4103 0.95874 39.6047C0.95874 38.8104 1.07788 38.0842 1.31616 37.4261C1.55444 36.7567 1.89484 36.1837 2.33736 35.7071C2.77988 35.2306 3.30749 34.8618 3.92021 34.6008C4.54428 34.3399 5.23075 34.2094 5.97963 34.2094C7.18237 34.2094 8.15818 34.4987 8.90706 35.0774C9.65594 35.6561 10.1155 36.4276 10.2857 37.3921L8.1752 37.7665C8.05039 37.2673 7.81211 36.8758 7.46036 36.5922C7.10862 36.2971 6.59234 36.1496 5.91155 36.1496C5.46903 36.1496 5.0719 36.2347 4.72015 36.4049C4.37975 36.5751 4.09041 36.8134 3.85213 37.1198C3.6252 37.4261 3.44933 37.7949 3.32451 38.2261C3.21105 38.6459 3.15431 39.1054 3.15431 39.6047C3.15431 40.1153 3.21672 40.5862 3.34153 41.0173C3.46635 41.4372 3.64789 41.8003 3.88617 42.1066C4.1358 42.4016 4.44216 42.6342 4.80525 42.8044C5.16834 42.9746 5.58249 43.0597 6.04771 43.0597C7.432 43.0597 8.22059 42.4016 8.41348 41.0854H6.42215Z" fill="black"></path>
        <path d="M18.6781 44.8298H16.5847V44.1831C16.3691 44.4213 16.0854 44.6199 15.7337 44.7788C15.3819 44.9263 14.9848 45 14.5423 45C13.6913 45 13.0332 44.7447 12.5679 44.2341C12.1027 43.7235 11.8701 43.0427 11.8701 42.1917V37.2219H13.9806V41.7662C13.9806 42.1634 14.077 42.4924 14.2699 42.7534C14.4742 43.003 14.7862 43.1278 15.206 43.1278C15.5351 43.1278 15.8244 43.0427 16.0741 42.8725C16.3237 42.691 16.4882 42.4357 16.5676 42.1066V37.2219H18.6781V44.8298Z" fill="black"></path>
        <path d="M22.6255 44.8298H20.5151V37.2219H22.6255V44.8298ZM22.7447 35.0263C22.7447 35.3894 22.6369 35.6788 22.4213 35.8943C22.2057 36.0986 21.922 36.2007 21.5703 36.2007C21.2186 36.2007 20.9292 36.0986 20.7023 35.8943C20.4867 35.6788 20.3789 35.3894 20.3789 35.0263C20.3789 34.6746 20.4867 34.3909 20.7023 34.1753C20.9292 33.9597 21.2186 33.8519 21.5703 33.8519C21.922 33.8519 22.2057 33.9597 22.4213 34.1753C22.6369 34.3909 22.7447 34.6746 22.7447 35.0263Z" fill="black"></path>
        <path d="M29.339 44.2001C29.1688 44.4043 28.9078 44.5915 28.5561 44.7617C28.2157 44.9206 27.8412 45 27.4327 45C26.8881 45 26.4002 44.8979 25.969 44.6937C25.5379 44.4781 25.1748 44.1944 24.8798 43.8427C24.5847 43.4796 24.3578 43.0597 24.199 42.5832C24.0514 42.0953 23.9777 41.579 23.9777 41.0344C23.9777 40.4897 24.0514 39.9791 24.199 39.5026C24.3578 39.0147 24.5847 38.5892 24.8798 38.2261C25.1748 37.863 25.5379 37.5793 25.969 37.3751C26.4002 37.1595 26.8881 37.0517 27.4327 37.0517C27.8412 37.0517 28.2157 37.1368 28.5561 37.307C28.9078 37.4658 29.1688 37.6531 29.339 37.8687V33.7668H31.4495V44.8298H29.339V44.2001ZM29.339 39.7749C29.2142 39.5139 29.0213 39.304 28.7603 39.1452C28.4993 38.975 28.2157 38.8899 27.9093 38.8899C27.3306 38.8899 26.8824 39.0941 26.5647 39.5026C26.247 39.911 26.0882 40.4216 26.0882 41.0344C26.0882 41.6471 26.247 42.1577 26.5647 42.5662C26.8824 42.9633 27.3306 43.1619 27.9093 43.1619C28.227 43.1619 28.5107 43.0824 28.7603 42.9236C29.0213 42.7534 29.2142 42.5378 29.339 42.2768V39.7749Z" fill="black"></path>
        <path d="M39.8838 42.6853C39.7022 43.4001 39.3164 43.9675 38.7264 44.3873C38.1364 44.7958 37.3989 45 36.5138 45C35.9578 45 35.4472 44.9036 34.982 44.7107C34.5282 44.5178 34.1367 44.2511 33.8076 43.9107C33.4899 43.559 33.2403 43.1392 33.0588 42.6513C32.8886 42.1634 32.8035 41.6244 32.8035 41.0344C32.8035 40.4557 32.8942 39.9281 33.0758 39.4515C33.2573 38.9636 33.507 38.5438 33.8247 38.192C34.1537 37.8289 34.5395 37.5509 34.982 37.3581C35.4359 37.1538 35.9295 37.0517 36.4628 37.0517C37.0187 37.0517 37.5123 37.1481 37.9435 37.341C38.3747 37.5226 38.7321 37.7779 39.0158 38.1069C39.3108 38.436 39.532 38.8331 39.6795 39.2983C39.8384 39.7635 39.9178 40.2741 39.9178 40.8301V41.4769H34.8459C34.8686 42.0556 35.0274 42.5038 35.3224 42.8215C35.6288 43.1392 36.0259 43.298 36.5138 43.298C36.8656 43.298 37.1776 43.2243 37.4499 43.0768C37.7336 42.9179 37.9151 42.674 37.9946 42.3449L39.8838 42.6853ZM36.4798 38.7537C36.0713 38.7537 35.7252 38.8785 35.4416 39.1281C35.1692 39.3664 34.9877 39.7238 34.8969 40.2004H37.8584C37.8357 39.8033 37.7109 39.4629 37.484 39.1792C37.257 38.8955 36.9223 38.7537 36.4798 38.7537Z" fill="black"></path>
        <path d="M0 17.2094C4.56451 17.2094 4.18071 27.6832 8.07357 27.6832C11.9664 27.6832 12.1857 17.2094 16.1471 17.2094C20.1085 17.2094 20.1908 27.6832 24.2207 27.6832C28.2506 27.6832 28.0724 17.2094 32.2943 17.2094C36.6395 17.2094 36.2008 27.6832 40.3678 27.6832" stroke="black" stroke-width="2"></path>
    </svg>
</a>

</div>

    <section class="content-split">

    <h1 class="content-split-title component-title">Audio Title</h1>

    <div class="content-wrap">
        <div class="content-split-side rich-text">

            <audio id="myAudio" ontimeupdate="onTimeUpdate()">
                <!-- <source src="audio.ogg" type="audio/ogg"> -->
                <source id="source-audio" src="" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>

            <div class="player-ctn">
            <div class="infos-ctn">
                <div class="timer">00:00</div>
                <div class="title"></div>
                <div class="duration">00:00</div>
            </div>
            <div id="myProgress">
                <div id="myBar"></div>
            </div>
            <div class="btn-ctn">
                <div class="btn-action first-btn" onclick="previous()">
                    <div id="btn-faws-back">
                    <i class='fas fa-step-backward'></i>
                    </div>
                </div>
                <div class="btn-action" onclick="rewind()">
                    <div id="btn-faws-rewind">
                    <i class='fas fa-backward'></i>
                    </div>
                </div>
                <div class="btn-action" onclick="toggleAudio()">
                    <div id="btn-faws-play-pause">
                    <i class='fas fa-play' id="icon-play"></i>
                    <i class='fas fa-pause' id="icon-pause" style="display: none"></i>
                    </div>
                </div>
                <div class="btn-play" onclick="forward()">
                    <div id="btn-faws-forward">
                    <i class='fas fa-forward'></i>
                    </div>
                </div>
                <div class="btn-action" onclick="next()">
                    <div id="btn-faws-next">
                    <i class='fas fa-step-forward'></i>
                    </div>
                </div>
                <div class="btn-mute" id="toggleMute" onclick="toggleMute()">
                    <div id="btn-faws-volume">
                    <i id="icon-vol-up" class='fas fa-volume-up'></i>
                    <i id="icon-vol-mute" class='fas fa-volume-mute' style="display: none"></i>
                    </div>
                </div>
            </div>
            <div class="playlist-ctn"></div>
            </div>

        </div>

        <div class="content-split-main rich-text">

        <div class="picture-display">
        <img src="assets/Images/Audio-description_1.png" class="display-picture" alt="">
        </div>

        </div>
    </div>
    </section>
    
    <!-- [END] AUDIO PLAYER -->

    
    <!-- [START] FOOTER -->

    <section class="footer">
        <h4>About Us</h4>
        <p>The Museum thus traces the evolution of the Filipino nation-state and the emergence of its system of government and democratic traditions amid the backdrop of long struggles for independence.</p>
    
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-youtube"></i>
        </div>
        <p>2022 <i class="fa-regular fa-copyright"></i> VirtualShrine</p>
    </section>

    <!-- [END] FOOTER -->

<!-- playlist JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.0/vue.min.js'></script><script  src="assets/js/audio-guide-playlist.js"></script>


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

<script src=audio-guide-playlist.js></script>

</body>
</html>