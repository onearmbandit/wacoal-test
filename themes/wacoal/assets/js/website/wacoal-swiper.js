import Swiper from 'swiper';
require('../../scss/website/wacoal-swiper.scss');

(function ($) {

  let fullWidthSwiper = new Swiper('.full-width-slider', {
    slidesPerView: 'auto',
    centeredSlides: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  let centerSlideSwiper = new Swiper('.center-slide-slider', {
    slidesPerView: 1.6,
    spaceBetween: 70,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  let featuredSwiper = new Swiper('.featured-article', {
    slidesPerView: 1.2,
    spaceBetween: 70,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

})(jQuery);
