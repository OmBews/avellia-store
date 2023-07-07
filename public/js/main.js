// $(document).ready(function() {
//     $('.nav-hover').hover(function() {
//       $('.nav-link').addClass('show');
//       $('.nav-link').attr('aria-expanded', 'true');
//       $('.dropdown-menu').addClass('show');
//       $('.dropdown-menu').attr('data-bs-popper', 'static');
//     });
//   });

$(document).ready(function() {

  const swiper = new Swiper('.mySwiper', {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      loop: true,
      autoplay: {
          delay: 3000,
          disableOnInteraction: false,
      },
      coverflowEffect: {
          rotate: 50,
          stretch: 0,
          // depth: 100,
          modifier: 0.9,
          slideShadows: true,
      },
      pagination: {
          el: ".swiper-pagination",
      },
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },

  });
});