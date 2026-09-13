document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('.carousel').forEach(function (carousel) {
    var prev = carousel.parentElement.querySelector('.car-prev');
    var next = carousel.parentElement.querySelector('.car-next');

    if (!prev || !next) return;

    prev.addEventListener('click', function () {
      carousel.scrollBy({ left: -carousel.clientWidth, behavior: 'smooth' });
    });

    next.addEventListener('click', function () {
      carousel.scrollBy({ left: carousel.clientWidth, behavior: 'smooth' });
    });
  });
});