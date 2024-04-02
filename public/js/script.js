// JavaScript can be used for interactive elements, 
// such as slider functionality or handling the signup/login processes.

// Example: Toggle mobile menu
const navLinks = document.querySelector('.nav-links');

document.querySelector('.logo').addEventListener('click', () => {
  navLinks.classList.toggle('active');
});

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function changeSlide(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

// Automatic sliding functionality
setInterval(function() {
    showSlides(slideIndex += 1);
  }, 5000); // Adjust the 5000 to change the interval time (5000ms = 5 seconds)
  

// You can add auto-slide functionality if needed.
// Uncomment the following code to add auto-sliding every 5 seconds:
/*
setInterval(function() {
  showSlides(slideIndex += 1);
}, 5000);
*/


