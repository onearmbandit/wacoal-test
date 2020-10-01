require('jquery');

require('../scss/website/index.scss');

require('../js/website/main.js');

require('../js/website/wacoal-swiper.js');

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

	function find_page_number( element ) {
		element.find('span').remove();
		return parseInt( element.html() );
  }
  $(document).on( 'click', '.nav-links a', function( event ) {
		event.preventDefault();

		var page = find_page_number( $(this).clone() );

		$.ajax({
			url: wacoal_js_var.ajaxurl,
			type: 'post',
			data: {
				action: 'wacoal_ajax_pagination',
				query_vars: wacoal_js_var.query_vars,
				page: page
			},
			success: function( html ) {
				$('#main').find( 'section' ).remove();
				$('#main nav').remove();
				$('#main').append( html );
			}
		})
	});

(function ($) {
})(jQuery);
