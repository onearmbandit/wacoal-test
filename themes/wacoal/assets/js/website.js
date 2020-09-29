require('jquery');

require('../js/website/main.js');
require('../css/website/main.css');

require('../scss/website/index.scss');

import Swiper from 'swiper';

(function ($) {
  console.log('inside website section');

  var swiper = new Swiper('.swiper-container', {
    spaceBetween: 30,
    slidesPerView: 'auto',
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
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
