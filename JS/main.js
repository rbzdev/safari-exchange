var sliders = document.querySelectorAll('.slider');
var currentIndex = 0;



function showSlider() {
  sliders[currentIndex].classList.remove('active');
  currentIndex = (currentIndex + 1) % sliders.length;
  sliders[currentIndex].classList.add('active');
}

// Affiche le premier slider
sliders[currentIndex].classList.add('active');

// Déclenche l'animation toutes les 7 secondes
setInterval(showSlider, 7000);


document.addEventListener("DOMContentLoaded", function() {
  


});