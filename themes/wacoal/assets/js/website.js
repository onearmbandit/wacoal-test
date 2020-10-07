require('jquery');

require('../scss/website/index.scss');

require('../js/website/main.js');

require('../js/website/wacoal-swiper.js');

  // var swiper = new Swiper('.featured-article', {
  //   slidesPerView: 1.2,
  //   spaceBetween: 70,
  //   centeredSlides: true,
  //   loop: true,
  //   // autoplay: {
  //   //   delay: 2500,
  //   //   disableOnInteraction: false,
  //   // },
  //   pagination: {
  //     el: '.swiper-pagination',
  //     clickable: true,
  //   },
  //   navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  //   },
  // });

  $(".mobile-nav").click(function(){
    $(".header-navigation-mobile").toggleClass("mobile-nav-open");
  });

	function find_page_number( element ) {
		element.find('span').remove();
		return parseInt( element.html() );
  }
  $(document).on( 'click', '.nav-links a', function( event ) {
		event.preventDefault();

    var page = find_page_number( $(this).clone() );
    $('.nav-links a').removeClass('active');

    $(this).addClass('active');
		$.ajax({
			url: wacoal_js_var.ajaxurl,
			type: 'post',
			data: {
				action: 'wacoal_ajax_pagination',
				query_vars: wacoal_js_var.query_vars,
				page: page
			},
			success: function( html ) {
				$('#post-listing').find( 'div.category-posts' ).html('');
				//$('#post-listing .pagination').remove();
				$('#post-listing').find( 'div.category-posts' ).html( html );
			}
		})
  });
  $(document).on( 'click', '.next a', function( event ) {
    event.preventDefault();
    var page = find_page_number($('.nav-links .active').clone());
    page = page+1;
    //$('.nav-links a').removeClass('active');
    var next=$('.nav-links .active').parent().next('.nav-links').children('a');

    console.log(next.html());
    if(next.html() !== undefined){
      $('.nav-links a').removeClass('active');
      next.addClass("active");
      $.ajax({
        url: wacoal_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'wacoal_ajax_pagination',
          query_vars: wacoal_js_var.query_vars,
          page: page
        },
        success: function( html ) {
          $('#post-listing').find( 'div.category-posts' ).html('');
          //$('#post-listing .pagination').remove();
          $('#post-listing').find( 'div.category-posts' ).html( html );
        }
      });
    }

  });
  $(document).on( 'click', '.prev a', function( event ) {
    event.preventDefault();
    var page = find_page_number($('.nav-links .active').clone());
    page = page-1;
    var prev=$('.nav-links .active').parent().prev('.nav-links').children('a');

     if(page < 1){
       page = 1;
     }else{
      $('.nav-links a').removeClass('active');
      prev.addClass("active");
     }
    if(page >= 1){
      $(this).addClass('active');
      $.ajax({
        url: wacoal_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'wacoal_ajax_pagination',
          query_vars: wacoal_js_var.query_vars,
          page: page
        },
        success: function( html ) {
          $('#post-listing').find( 'div.category-posts' ).html('');

          $('#post-listing').find( 'div.category-posts' ).html( html );
        }
      });
    }

  });

(function ($) {
})(jQuery);
