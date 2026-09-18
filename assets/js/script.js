document.addEventListener('DOMContentLoaded', function () {

  // Carousel arrows (existing)
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

  // Mobile menu toggle
  var menuBtn = document.getElementById('mobile-menu-btn');
  var mobileMenu = document.getElementById('mobile-menu');

  if (menuBtn && mobileMenu) {
    menuBtn.addEventListener('click', function () {
      var isOpen = mobileMenu.classList.toggle('hidden');
      menuBtn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
    });
  }
});