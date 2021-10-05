(function ($) {

  $(document).on('click', '.see-more-button', function (event) {

    var input = $("#offset").val();
    var offset= parseInt(input)+3;
    var total = $("#total").val();
    $.ajax({
      url: btemptd_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'btemptd_load_more',
        cat_id:$("#cat_id").val(),
        offset:offset,
        nonce:btemptd_js_var.nonce,
        post_id:$("#hidden_post").val(),
      },
      success: function (html) {
        $("#offset").val(offset);
        $(html).insertAfter( $( ".explore-see-more" ).last() );
        $(window).scrollTop($(".explore-see-more").last().offset().top-180);

        var article_count= $(".explore-see-more .explore-blog--box").length;
        console.log(article_count);
        if(html == 0 || total == article_count){

          $(".see-more-button").addClass("disabled");
          $(".see-more-button").hide();
        }

      }
    });
  });

  $(document).on('click', '.see-more-home-button', function (event) {

    var input = $("#home_offset").val();
    var offset= parseInt(input)+3;
    var exclude_post = $("#exclude").val();
    var total_posts = $("#total").val();
    var total= total_posts - exclude_post;

    $.ajax({
      url: btemptd_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'btemptd_home_load_more',
        offset:offset,
        nonce:btemptd_js_var.nonce,
      },
      success: function (html) {
        $("#home_offset").val(offset);
        $(html).insertAfter( $( ".explore-see-more" ).last() );
        $(window).scrollTop($(".explore-see-more").last().offset().top-180);

        var article_count= $(".explore-see-more .explore-blog--box").length;
        console.log('total-->',total);
        console.log('article_count-->',article_count);
        if(html == 0 || total == article_count){

          $(".see-more-home-button").addClass("disabled");
          $(".see-more-home-button").hide();
        }

      }
    });
  });

  $(document).on('click', '.search-more', function (event) {

    var input = $("#search_offset").val();
    var offset= parseInt(input)+3;
    var total = $("#total").val();
    $.ajax({
      url: btemptd_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'btemptd_search_load_more',
        cat_id:$("#cat_id").val(),
        offset:offset,
        nonce:btemptd_js_var.nonce,
        post_id:$("#hidden_post").val(),
      },
      success: function (html) {
        $("#search_offset").val(offset);
        $(html).insertAfter( $( ".explore-see-more" ).last() );
        $(window).scrollTop($(".explore-see-more").last().offset().top-180);

        var article_count= $(".explore-see-more .explore-blog--box").length;
        console.log(article_count);
        if(html == 0 || total == article_count){

          $(".search-more").addClass("disabled");
          $(".search-more").hide();
        }

      }
    });
  });

  $(document).on('click', '.cat-see-more-button', function (event) {

    var input = $("#cat_offset").val();
    var offset= parseInt(input)+6;
    var total = $("#cat_total").val();
    $.ajax({
      url: btemptd_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'btemptd_cat_posts_load_more',
        cat_id:$("#cate_id").val(),
        offset:offset,
        nonce:btemptd_js_var.nonce,
      },
      success: function (html) {
        $("#cat_offset").val(offset);
        $(html).insertAfter( $( ".cat-post-listing" ).last() );
        $(window).scrollTop($(".cat-post-listing").last().offset().top-180);

        setTimeout(() => {
          var article_count= ($(".cat-post-listing .explore-blog--box").length) / 2;
          if(html == 0 || article_count == total){
            $(".cat-see-more-button").addClass("disabled");
            $(".cat-see-more-button").hide();
          }
        } , 500);

      }
    });
  });

  $(document).ready(function () {

    $('.js-search-form').submit(function () {
      if ($(this).find('.js-search-input').val() == '') {
        return false;
      }
    });

  });

})(jQuery);
