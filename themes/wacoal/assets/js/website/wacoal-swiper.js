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
    slidesPerView: 1,
    spaceBetween: 30,
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

    breakpoints: {
      768: {
        slidesPerView: 1.75,
        spaceBetween: 70
      }
    }
  });

  let featuredSwiper = new Swiper('.featured-article', {
    slidesPerView: 1,
    spaceBetween: 83,
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

    breakpoints: {
      768: {
        slidesPerView: 1.25,
        spaceBetween: 42
      },
      1025: {
        slidesPerView: 1.25,
        spaceBetween: 55
      },
      1281: {
        slidesPerView: 1.25,
        spaceBetween: 83
      }
    }
  });

  let articleDetailsSlider = new Swiper('.article-details-slider', {
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

})(jQuery);
