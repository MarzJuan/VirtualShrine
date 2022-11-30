<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>Object - VirtualShrine</title>
        <link rel="stylesheet" href="assets/css/gallery-collection.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
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
    </section>


    
<!------------------------------------ /* [START] COLLECTION OBJECT LIST */ ------------------------------------>

    <section class="gallery-object-body">
    <?php
       if(isset($_GET['id']))
       {              
              $category_id = $_GET['id'];
              $posts = "SELECT * FROM categories WHERE status='0' AND id = '$category_id'";
              $posts_run = mysqli_query($con, $posts);
              $check = mysqli_num_rows($posts_run) > 0;
                      
              if($check)
              {
                     while($post = mysqli_fetch_assoc($posts_run))
                     {
                     ?>
        <div class="page-title">
        <h1>
            <span class="gallery-title"><?= $post['name']?> / </span>
            <span class="collection-text">Collections </span><span class="gallery-title">/ </span>
            <span class="collection-text"><?= $check ?> Record </span>
        </h1>
        </div>

        <div class="exhibition-objects-grid__header-container">
            <span class="exhibition-objects-grid__title ng-binding"><?= $check ?> Objects</span>
            <?php

            }
        }
    }
?>

            <div class="button-list-view">
                <button onclick="listView()"><i class="fa fa-bars"></i></button>
                <button onclick="gridView()"><i class="fa fa-th-large"></i></button>
            </div>
        </div>

        <div class="band">

<?php
    if(isset($_GET['id']))
    {                        
       $posts = "SELECT * FROM posts WHERE status='0' AND category_id='$category_id' ";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
        <div class="item-1">
            <a href="collection-object.php?post_id=<?= $post['post_id']?>" class="card">
            <div class="thumb" style="background-image: url(../Admin/uploads/posts/<?= $post['image'];?>);"></div>
            <article>
                <h1><?= $post['name']?></h1>
                <span><?= $post['object_type']?></span>
            </article>
            </a>
            <?php
            }
        }
    }
    ?>
</div>


    </section>


<!------------------------------------ /* [ END ] COLLECTION OBJECT LIST */ ------------------------------------> 

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
