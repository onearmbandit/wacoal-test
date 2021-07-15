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

  let featuredArticlesOne = new Swiper('.featured-articles-slider-one', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next-one',
      prevEl: '.swiper-button-prev-one',
    }
  });

  let featuredArticlesTwo = new Swiper('.featured-articles-slider-two', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next-two',
      prevEl: '.swiper-button-prev-two',
    }
  });

})(jQuery);
