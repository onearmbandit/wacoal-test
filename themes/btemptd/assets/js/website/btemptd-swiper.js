import Swiper from 'swiper/swiper-bundle';

require('../../scss/website/btemptd-swiper.scss');

(function ($) {

  var featuredArticles = new Swiper('.featured-articles-slider', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  $(".pause-btn").on("click", function (e) {
    $(".featured-articles-slider").toggleClass("pause");
  });

  $(".pause-btn").on("click", function () {
    if ($(".featured-articles-slider").hasClass("pause")) {
      $(".pause-btn").attr("aria-label", "Start automatic slideshow");
      featuredArticles.autoplay.stop();
      $(".play-pause").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/play-button.png"
      );
    } else {
      $(".pause-btn").attr("aria-label", "Stop Automatic Slide Show");
      featuredArticles.autoplay.start();
      $(".play-pause").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/pause-button.png"
      );
    }
  });

  var featuredBlogArticles = new Swiper('.featured-articles-slider-blog', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }
  });

  $(".pause-btn-blog").on("click", function (e) {
    $(".featured-articles-slider-blog").toggleClass("pause");
  });

  $(".pause-btn-blog").on("click", function () {
    if ($(".featured-articles-slider-blog").hasClass("pause")) {
      $(".pause-btn-blog").attr("aria-label", "Start automatic slideshow");
      featuredBlogArticles.autoplay.stop();
      $(".play-pause-blog").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/play-button.png"
      );
    } else {
      $(".pause-btn-blog").attr("aria-label", "Stop Automatic Slide Show");
      featuredBlogArticles.autoplay.start();
      $(".play-pause-blog").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/pause-button.png"
      );
    }
  });

  var featuredArticlesOne = new Swiper('.featured-articles-slider-one', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next-one',
      prevEl: '.swiper-button-prev-one',
    }
  });

  $(".pause-btn-blog-mobile").on("click", function (e) {
    $(".featured-articles-slider-one").toggleClass("pause");
  });

  $(".pause-btn-blog-mobile").on("click", function () {
    if ($(".featured-articles-slider-one").hasClass("pause")) {
      $(".pause-btn-blog-mobile").attr("aria-label", "Start automatic slideshow");
      featuredArticlesOne.autoplay.stop();
      $(".play-pause-blog-mobile").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/play-button.png"
      );
    } else {
      $(".pause-btn-blog-mobile").attr("aria-label", "Stop Automatic Slide Show");
      featuredArticlesOne.autoplay.start();
      $(".play-pause-blog-mobile").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/pause-button.png"
      );
    }
  });

  var featuredArticlesTwo = new Swiper('.featured-articles-slider-two', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next-two',
      prevEl: '.swiper-button-prev-two',
    }
  });

  $(".pause-btn-mobile").on("click", function (e) {
    $(".featured-articles-slider-two").toggleClass("pause");
  });

  $(".pause-btn-mobile").on("click", function () {
    if ($(".featured-articles-slider-two").hasClass("pause")) {
      $(".pause-btn-mobile").attr("aria-label", "Start automatic slideshow");
      featuredArticlesTwo.autoplay.stop();
      $(".play-pause-mobile").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/play-button.png"
      );
    } else {
      $(".pause-btn-mobile").attr("aria-label", "Stop Automatic Slide Show");
      featuredArticlesTwo.autoplay.start();
      $(".play-pause-mobile").attr(
        "src",
        "wp-content/themes/btemptd/assets/images/pause-button.png"
      );
    }
  });

})(jQuery);
