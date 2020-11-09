import Swiper from 'swiper';

require('../../scss/website/btemptd-swiper.scss');

(function ($) {

  let featuredArticles = new Swiper('.featured-articles-slider', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  let featuredArticlesMo = new Swiper('.featured-articles-slider-mo', {
    slidesPerView: 1,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

})(jQuery);
