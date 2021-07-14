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
          var article_count_load_more= ($(".cat-post-listing .explore-blog--box").length - 6 ) / 2;
          var article_count = article_count_load_more + 6;
          console.log('article_count_load_more ... ',article_count_load_more);
          console.log('article_count ... ',article_count);
          console.log('total ... ',total);
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
