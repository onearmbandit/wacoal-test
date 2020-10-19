import Swiper from 'swiper';
require('../../scss/website/btemptd-swiper.scss');

(function ($) {

  let featuredArticles = new Swiper('.featured-articles-slider', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    // breakpoints: {
    //   768: {
    //     slidesPerView: 3.8,
    //     spaceBetween: 27
    //   }
    // }
  });


})(jQuery);
