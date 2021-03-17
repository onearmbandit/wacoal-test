(function ($) {
  function find_page_number(element) {
    element.find('span').remove();
    return parseInt(element.html());
  };
  $(document).on('click', '.search-nav-links a', function (event) {
    event.preventDefault();

    var page = find_page_number($(this).clone());
    $('.search-nav-links a').removeClass('active');

    $(this).addClass('active');
    $.ajax({
      url: btemptd_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'btemptd_search_ajax_pagination',
        query_vars: btemptd_js_var.query_vars,
        page: page,
        nonce:btemptd_js_var.nonce,
      },
      success: function (html) {
        $('#post-listing').find('div.category-posts').html('');

        $('#post-listing').find('div.category-posts').html(html);
      }
    })
  });
  $(document).on('click', '.snext a', function (event) {
    event.preventDefault();

    var page = find_page_number($('.search-nav-links .active').clone());
    page = page + 1;

    var next = $('.search-nav-links .active').parent().next('.search-nav-links').children('a');

    if (next.html() !== undefined) {
      $('.search-nav-links a').removeClass('active');
      next.addClass("active");
      $.ajax({
        url: btemptd_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'btemptd_search_ajax_pagination',
          query_vars: btemptd_js_var.query_vars,
          page: page,
          nonce:btemptd_js_var.nonce,
        },
        success: function (html) {
          $('#post-listing').find('div.category-posts').html('');

          $('#post-listing').find('div.category-posts').html(html);
        }
      });
    }

  });
  $(document).on('click', '.sprev a', function (event) {
    event.preventDefault();
    var page = find_page_number($('.search-nav-links .active').clone());
    page = page - 1;
    var prev = $('.search-nav-links .active').parent().prev('.search-nav-links').children('a');

    if (page < 1) {
      page = 1;
    } else {
      $('.search-nav-links a').removeClass('active');
      prev.addClass("active");
    }
    if (page >= 1) {
      $(this).addClass('active');
      $.ajax({
        url: btemptd_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'btemptd_search_ajax_pagination',
          query_vars: btemptd_js_var.query_vars,
          page: page,
          nonce:btemptd_js_var.nonce,
        },
        success: function (html) {
          $('#post-listing').find('div.category-posts').html('');

          $('#post-listing').find('div.category-posts').html(html);
        }
      });
    }

  });
})(jQuery);
