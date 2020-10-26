require('jquery');

require('../scss/website/index.scss');

require('../js/website/main.js');
require('../js/website/btemptd-swiper.js');
require('../js/website/btemptd-pagination.js');

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

})(jQuery);
