<!DOCTYPE html>
<html>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <head>
        <title>VirtualShrine - Audio Guide</title>
        <link rel="stylesheet" href="assets/css/audio-guide-player.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="icon" type="image/png" href="assets/img/crs-logo.png">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" charset="utf-8"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
<!-- push -->
<div class="container">
    <!-- left class -->
    <div class="left">

            <a href="homepage.php">
                <div class="logo">
                    <image  class="logo" src="Images/Logo.png" alt="Casa Real Shrine logo"></image>
                </div>
            </a>

        <div class="collection-title">
            <h1 id="item-title" class="item-title">
                <span class="item-title-text">Kaginhawaan (Prosperity)</span>
            </h1>
        </div>

        <section class="design">
            
<img src="https://i.pinimg.com/originals/83/82/06/83820619a50bc4676d642561a9fe7355.gif" alt="Smiley face" width=400 >
</section> 
<section class="implementation">
  <div class="now-playing-board" id="now-playing-board-id">
    <div class="now-playing-details">
      <h4>Radio GaGa</h4>
      <h6 style="color:rgb(71,71,71);">Queen</h6>
      <div class="slidecontainer-one">
        <input type="range" min="1" max="100" value="1" class="slider" id="range">
        <div id="completionBar"></div>
      </div>
    </div>
  </div>
  <div class="now-playing-board-bottom-bar" id="now-playing-board-bottom-bar-id">
  </div>
  <div class="play-controls">
    <img src="https://pngimg.com/uploads/vinyl/vinyl_PNG21.png" width=100 height=100 id="vynl-id" class="vynl"/>
    <div class="play-buttons">
            <i class='fas fa-step-backward' style='font-size:20px'></i>
            <div class='play-circle' id="playpause" onclick="play(this)"></div>
            <i class='fas fa-step-forward' style='font-size:20px'></i>
    </div>	
    
    <div class="volume-button">
      <i class='fas fa-volume-up' style='font-size:15px'></i>
    </div>
  </div>
  <audio id="audioSrc">
  <source src="http://rajanlabs.000webhostapp.com/assets/Radio%20Ga%20Ga.mp3" type="audio/mp3">
</audio>
</section>

    </div>   
</div>

    

</body>
</html>