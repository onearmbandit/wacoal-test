require('jquery');

require('../js/website/main.js');
require('../css/website/main.css');

require('../scss/website/index.scss');

import Swiper from 'swiper';

(function ($) {
  console.log('inside website section');

  var swiper = new Swiper('.full-width-slider', {
    slidesPerView: 'auto',
    centeredSlides: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var swiper = new Swiper('.center-slide-slider', {
    slidesPerView: 1.6,
    spaceBetween: 70,
    centeredSlides: true,
    loop: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var swiper = new Swiper('.featured-article', {
    slidesPerView: 1.2,
    spaceBetween: 70,
    centeredSlides: true,
    loop: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
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
