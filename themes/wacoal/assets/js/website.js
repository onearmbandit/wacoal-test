require('jquery');

require('../scss/website/index.scss');

require('../js/website/main.js');
require('../js/website/wacoal-swiper.js');

if($('body').hasClass('home') || $('body').hasClass('search')){
  require('../js/website/home-page.js');
}

if($('body').hasClass('archive')){
  require('../js/website/archive.js');
}


import 'lazysizes';
window.lazySizesConfig = window.lazySizesConfig || {};
window.lazySizesConfig.loadMode = 1;

(function ($) {
  $(".mobile-nav").click(function () {
    $(".header-navigation-mobile").toggleClass("mobile-nav-open");
  });
  if($(window).width() <= 767){
    $('.footer-links--title').click(function() {
      $(this).parent().toggleClass('open');
    });
  }

  $(document).ready(function () {

    $('.js-search-form').submit(function () {
      if ($(this).find('.js-search-input').val() == '') {
        return false;
      }
    });

  });

})(jQuery);
