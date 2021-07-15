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
      url: wacoal_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'wacoal_ajax_pagination',
        query_vars: wacoal_js_var.query_vars,
        page: page,
        nonce:wacoal_js_var.nonce,
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

    console.log(next.html());
    if (next.html() !== undefined) {
      $('.nav-links a').removeClass('active');
      next.addClass("active");
      $.ajax({
        url: wacoal_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'wacoal_ajax_pagination',
          query_vars: wacoal_js_var.query_vars,
          page: page,
          nonce:wacoal_js_var.nonce,
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
        url: wacoal_js_var.ajaxurl,
        type: 'post',
        data: {
          action: 'wacoal_ajax_pagination',
          query_vars: wacoal_js_var.query_vars,
          page: page,
          nonce:wacoal_js_var.nonce,
        },
        success: function (html) {
          $('#post-listing').find('div.category-posts').html('');

          $('#post-listing').find('div.category-posts').html(html);
        }
      });
    }

  });
  $(document).on('click', '.more-blog', function (event) {

    var input = $("#offset").val();
    var offset= parseInt(input)+3;
    var total = $("#total").val();
    $.ajax({
      url: wacoal_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'wacoal_cat_load_more',
        cat_id:$("#cat_id").val(),
        offset:offset,
        nonce:wacoal_js_var.nonce,
        post_id:$("#hidden_post").val(),
      },
      success: function (html) {
        $("#offset").val(offset);
        $(html).insertAfter( $( ".more-from-blog" ).last() );
        $(window).scrollTop($(".more-from-blog").last().offset().top-180);

        var article_count= $(".more-from-blog .blog-tile").length;
        console.log(article_count);
        if(html == 0 || total == article_count){

          $('.more-blog').parent('div').addClass('disable');
        }

      }
    });
  });

})(jQuery);
