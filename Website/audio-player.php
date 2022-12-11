<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <head>
        <title>Collection - VirtualShrine</title>
        <link rel="stylesheet" href="assets/css/audio-player.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

</head>
<body>

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

<!-----------------------------------------[START] COLLECTION DESCRIPTION----------------------------------------->

        <div class="langWrap">
            Select Language:
            <a href="#" id="eng_button" language='english' class="active" onClick="changeAudio();">English</a>
            <a href="#" id="fil_button" language='filipino' onClick="changeAudio();">Filipino</a>
        </div>
        
    <div class="container-wrap">
        <?php
    if(isset($_GET['post_id']))
    {
       $post_id = $_GET['post_id'];
       $posts = "SELECT * FROM posts WHERE status='0' AND post_id='$post_id'";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
    <div class="container">
        <!-- START OF LEFT CLASS -->

        <div class="left">
            <div class="collection-title">
                <h1 id="item-title" class="item-title">
                    <span class="item-title-text title"><?= $post['eng_name']?></span>
                </h1>
                <p>Speaker: </p>
            </div> <!--end of COLLECTION-TITLE class-->
        
        <!-- AUDIO PLAYER -->
        <div class="audio-style audio" id="eng_audio">
        <audio controls class="audio-style audio" id="audio_id">
          <source src="../Admin/uploads/audio/<?= $post['eng_audio']?>" type="audio/mpeg">
        </audio>
        </div>

        <div class="audio-style audio hidden" id="fil_audio">
        <audio controls class="audio-style audio" id="audio_id">
          <source src="../Admin/uploads/audio/<?= $post['fil_audio']?>" type="audio/mpeg">
        </audio>
        </div>

        <button class="accordion">Transcript</button>
        <div class="panel">

        <div class="playlist-cell">
        <div class="playlist">


        <li class="stops-nav__item">
            <div class="stops-nav__info transcript">
              <p class="stops-nav__name"><?= strip_tags($post['eng_description'])?></p>          
            </div>
          </a>
        </li>


</div>
</div>
        
        </div>

        </div> <!--end of LEFT class-->

        <!-- START OF RIGHT CLASS -->
        <div class="right">
        
        <div class="item-inset">

            <figure itemtype="http://schema.org/ImageObject" class="item-figure">
                <div class="image-wrapper">
                    <img id="myImg" class="item-image" src="../Admin/uploads/posts/<?= $post['image']?>" alt="">
                </div>

                <div class="controls">
                    <ul class="item-interactions">
                        <li class="item-interaction item-interactions-download">
                            <a href="../Admin/uploads/posts/16-Presidents.jpg" class="gtm__download__image" title="Download" download="">
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
    </div><!-- End of container-wrap -->

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
    <?php
            }
        }
    }
?>
<!-----------------------------------------[END] COLLECTION DESCRIPTION----------------------------------------->



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


 <!----------------------------------------------SCRIPT FOR TOGGLE MENU ----------------------------------------->
 <script>
    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>

 <!----------------------------------------------SCRIPT FOR SIDE NAV ----------------------------------------->

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
 <script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
 </script>

  <!----------------------------------------------SCRIPT FOR LANGUAGE----------------------------------------->
<script>
    const langEl = document.querySelector('.langWrap');
    const link = document.querySelectorAll('a');
    const titleEl = document.querySelector('.title');
    const transcriptEl = document.querySelector('.transcript');


    link.forEach(el => {
			el.addEventListener('click', () => {
				langEl.querySelector('.active').classList.remove('active');
				el.classList.add('active');

				const attr = el.getAttribute('language');

				titleEl.textContent = data[attr].title;
                transcriptEl.textContent = data[attr].transcript;
        });
    });
    <?php
    if(isset($_GET['post_id']))
    {
       $post_id = $_GET['post_id'];
       $posts = "SELECT * FROM posts WHERE status='0' AND post_id='$post_id' ";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
    var data = {
        "english":
        {
            "title": "<?= $post["eng_name"]?>",
            "transcript": "<?= strip_tags($post['eng_description'])?>"
        },
        "filipino":
        {
            "title": "<?= $post['fil_name']?>",
            "transcript": "<?= strip_tags($post['fil_description'])?>"
        }
    }
    <?php
            }
        }
    }
    ?>
</script>

<!-- AUDIO PLAYER -->
<script>
// temp js
var a = 1;
function changeAudio() {
  var audio = document.getElementById('audio');
  if (a==1) {
    audio.src = '<?= $post["eng_audio"]?>';
    a = 2;
  }
  else {
    audio.src = '<?= $post["fil_audio"]?>';
    a = 1;
  }
  document.getElementById('audio_id').load();
}

changeAudio();
</script>


<!-- JAVA FOR ACCORDION -->
<script>
 var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<script>
    document.getElementById('fil_button').addEventListener('click', function(){
    document.getElementById('eng_audio').classList.add('hidden');
    document.getElementById('fil_audio').classList.remove('hidden');
    });
</script>
<script>
    document.getElementById('eng_button').addEventListener('click', function(){
    document.getElementById('eng_audio').classList.remove('hidden');
    document.getElementById('fil_audio').classList.add('hidden');
    });
</script>
</body>
</html>
