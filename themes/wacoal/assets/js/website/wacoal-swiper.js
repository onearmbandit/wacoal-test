//import Swiper from 'swiper';
import Swiper from "swiper/swiper-bundle";

require("../../scss/website/wacoal-swiper.scss");

(function ($) {
  let fullWidthSwiper = new Swiper(".full-width-slider", {
    slidesPerView: "auto",
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var centerSlideSwiper = new Swiper(".center-slide-slider", {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      // delay: 2500,
      delay: 500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  $(".pause-btn").on("click", function (e) {
    $(".center-slide-slider").toggleClass("pause");
  });

  $(".pause-btn").on("click", function () {
    if ($(".center-slide-slider").hasClass("pause")) {
      $(".pause-btn").attr("aria-label", "Start automatic slideshow");
      centerSlideSwiper.autoplay.stop();
      $(".play-pause").attr(
        "src",
        "wp-content/themes/wacoal/assets/images/play-button.png"
      );
    } else {
      $(".pause-btn").attr("aria-label", "Stop Automatic Slide Show");
      centerSlideSwiper.autoplay.start();
      $(".play-pause").attr(
        "src",
        "wp-content/themes/wacoal/assets/images/pause-button.png"
      );
    }
  });

  var centerSlideSwiperMobile = new Swiper(".center-slide-slider-mobile", {
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  $(".pause-btn-mobile").on("click", function (e) {
    $(".center-slide-slider-mobile").toggleClass("pause");
  });

  $(".pause-btn-mobile").on("click", function () {
    if ($(".center-slide-slider-mobile").hasClass("pause")) {
      centerSlideSwiperMobile.autoplay.stop();
      $(".play-pause-mobile").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/play-button.png"
      );
    } else {
      centerSlideSwiperMobile.autoplay.start();
      $(".play-pause-mobile").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/pause-button.png"
      );
    }
  });

  let featuredSwiper = new Swiper(".featured-article", {
    slidesPerView: 1,
    spaceBetween: 83,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints: {
      768: {
        slidesPerView: 1.25,
        spaceBetween: 42,
      },
      1025: {
        slidesPerView: 1.25,
        spaceBetween: 55,
      },
      1281: {
        slidesPerView: 1.25,
        spaceBetween: 83,
      },
    },
  });

  let articleDetailsSlider = new Swiper(".article-details-slider", {
    slidesPerView: "auto",
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
})(jQuery);
