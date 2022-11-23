
//responsive navbar
const primaryHeader = document.querySelector(".primary-header");

const navToggle = document.querySelector(".mobile-nav-toggle");
const primaryNav = document.querySelector(".primary-navigation");

navToggle.addEventListener("click", () => {
  primaryNav.hasAttribute("data-visible")
    ? navToggle.setAttribute("aria-expanded", false)
    : navToggle.setAttribute("aria-expanded", true);
  primaryNav.toggleAttribute("data-visible");
  primaryHeader.toggleAttribute("data-overlay");
});


const dotsNav = document.querySelector(".carousel-nav");
const dots = Array.from(dotsNav.children);
/* 
//carousel
const track = document.querySelector(".carousel-track");
const slides = Array.from(track.children);
const nextButton = document.querySelector(".carousel-button-right");
const prevButton = document.querySelector(".carousel-button-left");


const slideWidth = slides[0].getBoundingClientRect().width;

//slides[0].style.left = 0;
//slides[1].style.left = '800px';
//slides[2].style.left = '1600px';

//arange the slides next to one another
const setSlidePosition = (slide, index) => {
  slide.style.left = slideWidth * index + 'px';
};
slides.forEach(setSlidePosition);


const moveToSlide = (track, currentSlide, targetSlide) => {

  track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
  currentSlide.classList.remove('current-slide');
  targetSlide.classList.add('current-slide');

};

//when i click left move slide to the left
prevButton.addEventListener('click', e => {
  const currentSlide = track.querySelector('.current-slide');
  const prevSlide = currentSlide.nextElementSibling;

  moveToSlide(track, currentSlide, prevSlide);
});

//when i click right move slide to the right
nextButton.addEventListener('click' , e =>{
  const currentSlide = track.querySelector('.current-slide');
  const nextSlide = currentSlide.nextElementSibling;

  moveToSlide(track, currentSlide, nextSlide);
});

//when i click the nav indicator, moves to that side

dotsNav.addEventListener ('click', e => {

  const targetDot = e.target.closest('button');
  if(!targetDot) return;
  
  const currentSlide = track.querySelector('.current-slide');
  const currentDot = dotsNav.querySelector('.current-slide');
  const targetIndex = dots.findIndex(dot => dot === targetDot);
  const targetSlide =  slide[targetIndex];
  
  moveToSlide(track, currentSlide, targetSlide);
});*/
//carousel 2.0

const buttons = document.querySelectorAll("[data-carousel-button]");

buttons.forEach(button => {
        button.addEventListener("click", () =>{
            const offset = button.dataset.carouselButton === "next" ? 1 : -1
            const slides = button.closest("[data-carousel]").querySelector('[data-slides]')

            const activeSlides =  slides.querySelector('[data-active]')
            let newIndex = [...slides.children].indexOf(activeSlides) + offset
            if(newIndex < 0 ) newIndex = slides.children.length - 1 
            if(newIndex >= slides.children.length) newIndex= 0 

            slides.children[newIndex].dataset.active= true
            delete activeSlides.dataset.active
    })
})
