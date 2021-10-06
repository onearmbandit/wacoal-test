(function ($) {
  function find_page_number(element) {
    element.find('span').remove();
    return parseInt(element.html());
  };
  $(document).on('click', '.nav-links a', function (event) {
    event.preventDefault();

    var page = find_page_number($(this).clone());
    $('.nav-links a').removeClass('active');

    $(this).addClass('active');
    $.ajax({
      url: btemptd_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'btemptd_ajax_pagination',
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
  $(document).on('click', '.next a', function (event) {
    event.preventDefault();
    var page = find_page_number($('.nav-links .active').clone());
    page = page + 1;

    var next = $('.nav-links .active').parent().next('.nav-links').children('a');

    if (next.html() !== undefined) {
      $('.nav-links a').removeClass('active');
      next.addClass("active");
      $.ajax({
        url: btemptd_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'btemptd_ajax_pagination',
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
  $(document).on('click', '.prev a', function (event) {
    event.preventDefault();
    var page = find_page_number($('.nav-links .active').clone());
    page = page - 1;
    var prev = $('.nav-links .active').parent().prev('.nav-links').children('a');

    if (page < 1) {
      page = 1;
    } else {
      $('.nav-links a').removeClass('active');
      prev.addClass("active");
    }
    if (page >= 1) {
      $(this).addClass('active');
      $.ajax({
        url: btemptd_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'btemptd_ajax_pagination',
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
