<?php
include('config/dbcon.php');
?>

<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>Exhibits - VirtualShrine</title>
        <link rel="stylesheet" href="assets/css/blog.css">
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
                                   <li class="sub-item"><a href="map.php">Museum Map</a></li>
                                   <li class="sub-item"><a href="group.php">Group Visits</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="#">EXPLORE<i class="fas fa-angle-down"></i></a>

                        <ul class="sub-menu">
                                   <li class="sub-item"><a href="gallery-collection.php">Collections</a></li>
                                   <li class="sub-item"><a href="virtual-tour.php">Virtual Tour</a></li>
                        </ul>
                    </li>
                    
                    <li class="menu-item"><a href="about.php">BLOG</a></li>
                    <li class="menu-item"><a href="about-crs.php">ABOUT</a></li>
                </ul>
            </div>
            <div id="main"></div>
                <i class="fa fa-bars" onclick="openNav()"></i>
            </div>
        </nav>
        <!-- [END] NAVIGATION -->
    </section>

<!-- [START] BLOG CONTENT -->

    <section class="blog-content">

        <h1 class="blog-title">
            Blog
        </h1>
        <p class="blog-sub">Enjoy the latest news and stories from the Casa Real Shrine.</p>
        <hr>
        
    </section>

<!-- [START] BLOG CARD -->
<section class="card-blog">
    <div class="container-fluid">
    <?php                        
       $posts = "SELECT * FROM blog WHERE status='0' ORDER BY created_at DESC LIMIT 3";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
    <section class="dark">
	<div class="container py-4">
		<article class="postcard dark blue">
			<a class="postcard__img_link" href="blog-article.php?blog_id=<?= $post['blog_id']?>">
				<img class="postcard__img" src="../Admin/uploads/blog/<?= $post['image'];?>" alt="<?= $post['slug'];?>" />
			</a>
			<div class="postcard__text">
				<h1 class="postcard__title blue"><a href="blog-article.php?blog_id=<?= $post['blog_id']?>"><?= $post['name'];?></a></h1>
				<div class="postcard__subtitle small">
					<time datetime="2020-05-25 12:00:00">Author: 
                    <?= $post['author'];?>
					</time>
				</div>
				<div class="postcard__bar"></div>
				<div class="postcard__preview-txt"><?= $post['meta_description'];?></div>
				<ul class="postcard__tagbox">
					<li class="tag__item play blue">
						<a href="blog-article.php?blog_id=<?= $post['blog_id']?>"><i class="fas fa-play mr-2"></i> Read More</a>
					</li>
				</ul>
			</div>
		</article>
    </div>
    </section>
    <?php
            }
        }
            ?>
</section>

<hr>

<!-- [START] OTHER BLOGS -->


<section class="gallery-rows" id="galleries">
<?php                        
       $posts = "SELECT * FROM blog WHERE created_at >= DATEADD(M, -1, GETDATE())";
       $posts_run = mysqli_query($con, $posts);
       $check = mysqli_num_rows($posts_run) > 0;

        if($check)
        {
            while($post = mysqli_fetch_assoc($posts_run))
            {
            ?>
    <div class="row">
    <a style="text-decoration: none;color: black;" href="">
        <div class="features-col">
            <div id="container">
                <img id="image" src="../Admin/uploads/blog/<?= $post['image'];?>" alt="">
            </div>
            <h3><?= $post['name'];?></h3>
            <p class="meta-description"><?= $post['meta_description'];?></p>
            <p class="author-name"><?= $post['author'];?></p>
        </div>
    </a>
    </div>
    <?php
            }
        }
            ?>
</section>

<!-- [END] OTHER BLOGS -->

<!-- [START] BLOG CARD -->

<!-- [END] BLOG CONTENT -->

    
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