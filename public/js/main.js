// $(document).ready(function() {
//     $('.nav-hover').hover(function() {
//       $('.nav-link').addClass('show');
//       $('.nav-link').attr('aria-expanded', 'true');
//       $('.dropdown-menu').addClass('show');
//       $('.dropdown-menu').attr('data-bs-popper', 'static');
//     });
//   });

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    slidesPerView: 1,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });