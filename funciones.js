const carouselInner = document.querySelector('.carousel-inner');
const carouselItems = carouselInner.querySelectorAll('.carousel-item');
const prevControl = document.querySelector('.carousel-control-prev');
const nextControl = document.querySelector('.carousel-control-next');
let index = 0;

function showImage() {
  for(let i = 0; i < carouselItems.length; i++) {
    carouselItems[i].classList.remove('active');
  }
  carouselItems[index].classList.add('active');
}

function nextImage() {
  index++;
  if(index > carouselItems.length - 1) {
    index = 0;
  }
  showImage();
}

function prevImage() {
  index--;
  if(index < 0) {
    index = carouselItems.length - 1;
  }
  showImage();
}

prevControl.addEventListener('click', prevImage);
nextControl.addEventListener('click', nextImage);

showImage();



/* nav bar */

const menuBtn = document.querySelector(".menu-btn");
const navList = document.querySelector("nav ul");

menuBtn.addEventListener("click", function() {
  menuBtn.classList.toggle("active");
  navList.classList.toggle("active");
});
