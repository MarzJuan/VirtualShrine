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

        <div class="stop-header__nav">
            <div class="stop-header-nav">
					<div class="stop-header-nav__text">
						<strong class="stop-header-nav__name">Kaginhawaan (Prosperity)</strong>
						<span class="stop-header-nav__signpost">
							<span class="stop-header-nav__signpost-label stop-header-nav__signpost-label--left">Stop </span><span class="stop-header-nav__signpost-marker">1</span><span class="stop-header-nav__signpost-label stop-header-nav__signpost-label--right"> of 22</span>
						</span>
					</div>
					
						<span class="stop-header-nav__link stop-header-nav__link--previous" aria-hidden="true">
							<span class="icon"><svg class="svg-inline--fa fa-arrow-left" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 256C448 264.8 440.6 272 431.4 272H54.11l140.7 149.3c6.157 6.531 5.655 16.66-1.118 22.59C190.5 446.6 186.5 448 182.5 448c-4.505 0-9.009-1.75-12.28-5.25l-165.9-176c-5.752-6.094-5.752-15.41 0-21.5l165.9-176c6.19-6.562 16.69-7 23.45-1.094c6.773 5.938 7.275 16.06 1.118 22.59L54.11 240h377.3C440.6 240 448 247.2 448 256z"></path></svg><!-- <i class="fal fa-arrow-left"></i> --></span>
							<span class="text-label">Prev</span>
						</span>
					
					
						<a class="stop-header-nav__link stop-header-nav__link--next" href="/visit/audio-tours/200-treasures/tour_stop/2/">
							<span class="text-label">Next</span>
							<span class="icon"><svg class="svg-inline--fa fa-arrow-right" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M443.7 266.8l-165.9 176C274.5 446.3 269.1 448 265.5 448c-3.986 0-7.988-1.375-11.16-4.156c-6.773-5.938-7.275-16.06-1.118-22.59L393.9 272H16.59c-9.171 0-16.59-7.155-16.59-15.1S7.421 240 16.59 240h377.3l-140.7-149.3c-6.157-6.531-5.655-16.66 1.118-22.59c6.789-5.906 17.27-5.469 23.45 1.094l165.9 176C449.4 251.3 449.4 260.7 443.7 266.8z"></path></svg><!-- <i class="fal fa-arrow-right"></i> --></span>
						</a>
				</div>
                </div>
                <hr>

        <div class="collection-title">
            <div class="audio-image">
                <img src="Images/HomePage1.jpg" alt="">
            </div>

        <!-- AUDIO PLAYER -->

        <script src="https://kit.fontawesome.com/7c33dff1d8.js" crossorigin="anonymous"></script>
        <div class="player" id="player">
            <div id="music-info">
            <div class="title"></div>
            <div class="author"></div>
            <div class="album"></div>
            <div class="bg"></div>
            </div>
            <div class="timestamp">
            <div id="bar"></div>
            <div id="current-time">
            </div>
            </div>
            <div class="buttons">
            <div class="button button-small"><i class="fas fa-random"></i></div>
            <div class="button button-medium"><i class="fas fa-step-backward"></i></div>
            <div class="button button-large" id="play"><i class="fas fa-play"></i></div>
            <div class="button button-medium"><i class="fas fa-step-forward"></i></div>
            <div class="button button-small" id="mute"><i class="fas fa-volume-up"></i></div>
            </div>
        </div>
        </div>

        <!-- AUDIO PLAYER -->

        <!-- ACCORDION -->

        <div class="transcript">
			<ul class="accordion">
				<li class="accordion__item">
					<a href="#" class="accordion__link">Audio Transcript</a>
					<ul class="sub-accordion">
						<li class="sub-accordion__item">Sample text here</li>
					</ul>
				</li>
        </div>
        
        <!-- ACCORDION -->

        
    </div><!-- END LEFT CLASS -->   

    <!-- RIGHT CLASS -->

    <div class="right">

    <div class="side-nav-top">
        <a href="homepage.php">
            <div class="logo">
                <image  class="logo" src="Images/Logo.png" alt="Casa Real Shrine logo"></image>
            </div>
        </a>

        <div class="back-buttons">

            <div class="audio-list" id="mySidebar">
                <button type="button" onclick="openList()" class="btn btn-demo" data-toggle="modal" data-target="#myModal"><a><i class="fa-solid fa-list"></i></a></button>
                <a class="nav-text" href="">List</a>
            </div>
        
            <div class="back-home">
                <a href="homepage.php"><i class="fa-solid fa-house-user"></i></a>
                <a class="nav-text" href="homepage.php">Back to Homepage</a>
            </div>

            <div class="exit-guide">
                <a href=""><i class="fa-solid fa-headphones"></i></a>
                <a class="nav-text" href="">Back to Tour Menu</a>
            </div>

            <div class="exit-guide">
                <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
                <a class="nav-text" href="">Exit Audio Guide</a>
            </div>


        </div>
    </div>

    <div class="playlist">
    <li class="stops-nav__item">
	<a class="stops-nav__link" href="/visit/audio-tours/200-treasures/tour_stop/1/">
		<div class="stops-nav__info">
			<span class="stops-nav__marker"><span class="sr-only">Stop</span>1</span>
			<h4 class="stops-nav__name">Name of Display</h4>
			
				<span class="stops-nav__description">Display description</span>
			
		</div>
		<div class="stops-nav__thumb" aria-hidden="true">
			<img class="img-size lazyloaded" data-srcset="
					https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-120x120.c7eac74.jpg 120w,
					https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-160x160.ae3436a.jpg 160w,
					https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-200x200.17e94e6.jpg 200w" data-src="https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-160x160.ae3436a.jpg" sizes="(min-width: 1200px) 180px, 80px" alt="Westpac Long Gallery" width="200" height="200" srcset="
					https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-120x120.c7eac74.jpg 120w,
					https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-160x160.ae3436a.jpg 160w,
					https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-200x200.17e94e6.jpg 200w" src="https://media.australian.museum/media/dd/images/Australian_Museum_2018_S53_7114.5b.2e16d0ba.fill-160x160.ae3436a.jpg">
		</div>
	</a>
    </li>
    </div>


    </div><!-- End right -->

    
    </div><!-- END CONTAINER -->

<script>
    let audioList = [
  {
    title:"Evolution",
    Gallery:"Bensound",
    author:"Benjamin Tissot",
    source:"https://www.bensound.com/bensound-music/bensound-evolution.mp3",
    type:"audio/mpeg"
    //https://www.bensound.com/bensound-img/epic.jpg
  },
  {
    title:"Epic",
    album:"Bensound",
    author:"Benjamin Tissot",
    source:"https://www.bensound.com/bensound-music/bensound-epic.mp3",
    type:"audio/mpeg"
  }
];
let bar = document.getElementById("bar");
let currentTime = document.getElementById("current-time");
let currentAudio;
let player = document.getElementById("player");
let play = document.getElementById("play");
let barPosition = player.offsetLeft;
let overlay = document.getElementById("overlay");
let mute = document.getElementById("mute");
let playing;
let musicInfo = document.getElementById("music-info");
let musicInfoChilds = [...musicInfo.children];

function loadAudio(audio){
  audio = audio || 0;
  if(currentAudio){
    currentAudio.pause();
    currentAudio.currentTime = 0;
  }
  musicInfoChilds[0].innerHTML = audioList[audio].title;
  musicInfoChilds[1].innerHTML = "Speaker: " + audioList[audio].author;
  musicInfoChilds[2].innerHTML = "Gallery: " + audioList[audio].album;
  currentAudio = new Audio(audioList[audio].source);
}

function pixelPerSecond(){
  return Number(window.getComputedStyle(bar).getPropertyValue("width").replace("px", "")) / currentAudio.duration;
}

function currentTimeUpdate(){
  if(!window.grabbing){
    currentTime.style.width = (currentAudio.currentTime * pixelPerSecond()) + "px";
  }
}

function currentGrabTimeUpdate(event){
  let eventPageX = event.pageX || event.touches[0].pageX;
  
  if((eventPageX - barPosition) > Number(window.getComputedStyle(bar).getPropertyValue("width").replace("px",""))){
    currentTime.style.width = window.getComputedStyle(bar).getPropertyValue("width");
  }else if((eventPageX - barPosition) < 0){
    currentTime.style.width = 0;
  }else{
    currentTime.style.width = (eventPageX - barPosition) + "px";
  }
}

function barStart(event){
  if(event.target == bar){
    let eventPageX = event.pageX || event.touches[0].pageX;
    window.grabbing = true;
    
    currentTime.style.width = (eventPageX - barPosition) + "px";
    overlay.style.display = "block";
    
    if(event.type == 'touchstart'){
      window.addEventListener("touchmove", currentGrabTimeUpdate);
    }else{
      window.addEventListener("mousemove", currentGrabTimeUpdate);
    }
    currentAudio.muted = true;
  }
}

function barEnd(event){
  if(window.grabbing === true){
    window.grabbing = false;
    currentAudio.muted = false;
    currentAudio.currentTime = Number(currentTime.style.width.replace("px","")) / pixelPerSecond();
    overlay.style.display = "none";
    
    if(event.type == 'touchstart'){
      window.removeEventListener("touchmove", currentGrabTimeUpdate);
    }else{
      window.removeEventListener("mousemove", currentGrabTimeUpdate);
    }
  }
}

play.addEventListener("click", function(){
  if(currentAudio.paused){
    play.innerHTML = '<i class="fas fa-pause"></i>';
    currentAudio.play();
  }else{
    play.innerHTML = '<i class="fas fa-play"></i>';
    currentAudio.pause();
  }
});

mute.addEventListener("click", function(){
  if(!currentAudio.muted){
    this.innerHTML = '<i class="fas fa-volume-mute"></i>';
    currentAudio.muted = true;
  }else{
    this.innerHTML = '<i class="fas fa-volume-up"></i>';
    currentAudio.muted = false;
  }
})

window.addEventListener("mousedown", barStart);
window.addEventListener("mouseup", barEnd);

window.addEventListener("touchstart", barStart);
window.addEventListener("touchend", barEnd);

(function load(){
  playing = setInterval(currentTimeUpdate, 1);
  loadAudio()
})();

currentAudio.addEventListener("ended", function(){
  play.innerHTML = '<i class="fas fa-play"></i>';
});
</script>


<!-- JAVA FOR ACCORDION -->
<script>
    function slide(link) {
  
  var down = function (callback, time) {
    var subMenu = link.nextElementSibling;
    var height = subMenu.clientHeight; 
    var part = height / 100;
    
    var paddingTop = parseInt(window.getComputedStyle(subMenu, null).getPropertyValue('padding-top'));
    var paddingBottom = parseInt(window.getComputedStyle(subMenu, null).getPropertyValue('padding-bottom'));
    var paddingTopPart = parseInt(paddingTop) / 50;
    var paddingBottomPart = parseInt(paddingBottom) / 30;
    
    (function innerFunc(i, t, b) {

      subMenu.style.height = i + 'px';
      
      i += part;
      
      if(t < paddingTop) {
      
        t += paddingTopPart;
        subMenu.style.paddingTop = t + 'px';
          
      } else if(b < paddingBottom) {

        b += paddingBottomPart;
        subMenu.style.paddingBottom = b + 'px';
      }
      
      if(i < height) { 
      
        setTimeout(function() {
            
            innerFunc(i, t, b);
            
        }, time / 9000000000);
          
      } else { 
          
        subMenu.removeAttribute('style');
        callback();
      }
        
    })(0, 0, 0);
  },
  
  up = function (callback, time) {
      
    var subMenu = link.nextElementSibling;
    var height = subMenu.clientHeight; 
    var part = subMenu.clientHeight / 100;
    var paddingTop = parseInt(window.getComputedStyle(subMenu).paddingTop);
    var paddingBottom = parseInt(window.getComputedStyle(subMenu).paddingBottom);
    var paddingTopPart = parseInt(paddingTop) / 30;
    var paddingBottomPart = parseInt(paddingBottom) / 50;

    (function innerFunc(i, t, b) {

      subMenu.style.height = i + 'px';
      
      i -= part;
      i = i.toFixed(2);

      if(b > 0) {
          
        b -= paddingBottomPart;
        b = b.toFixed(1);                
        subMenu.style.paddingBottom = b + 'px';
          
      } else if(t > 0) {
          
        t -= paddingTopPart;
        t = t.toFixed(1); 
        subMenu.style.paddingTop = t + 'px';
      }
      
      if(i > 0) { 
      
        setTimeout(function() {
            
            innerFunc(i, t, b);
            
        }, time / 100);
          
      } else {
          
        subMenu.removeAttribute('style');
        callback(); 
      }
        
    })(height, paddingTop, paddingBottom);
  }
      
  return {
    down: down,
    up: up
  }
} 
    
var accordion = (function() {

    var menu = document.querySelectorAll('.accordion');
    var activeClass = 'accordion__link_active';
    var arr = [];
    var timer = 100;
    
    for(let i = 0; i < menu.length; i++) {

        for(let p = 0; p < menu[i].children.length; p++) {

            var link = menu[i].children[p].firstElementChild;
            
            if(link.classList.contains(activeClass)) {
                arr[i] = link;
            }
        }
    }
       
    function accordionInner(i) {
            
      var clicked = false;
      
      menu[i].addEventListener('click', function(e) {

        if(e.target.tagName === 'A' && !clicked) {

          clicked = true;

          if(e.target.classList.contains(activeClass)) {
              
            slide(e.target).up(function() {
                
              clicked = false;
              
              e.target.classList.remove(activeClass);
              
              console.log('slide up of accordion ' + i + ' is done');
            
            }, timer);
              
          } else {

            if(arr.length > 0) {
                
              slide(arr[i-1]).up(function() {
                  
                arr[i-1].classList.remove(activeClass);
                
                arr[i-1] = e.target;
                
                console.log('slide up of accordion ' + i + ' is done');

              }, timer);
            }

            e.target.classList.add(activeClass);
            
            slide(e.target).down(function() {
              
              clicked = false;
              
              arr[i-1] = e.target;
              
              console.log('slide down of accordion ' + i + ' is done');
            
            }, timer);
          }
        }
      });
      
      i++;
      
      if(i < menu.length) { accordionInner(i); }
        
    } accordionInner(0);
})();
</script>


<!-- modal -->
<script>
     
</script>
</body>
</html>