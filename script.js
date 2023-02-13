const hamburger = document.querySelector('.hamburger');
const headBottom = document.querySelector('.head-bottom');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle("active");
  headBottom.classList.toggle("active");
});