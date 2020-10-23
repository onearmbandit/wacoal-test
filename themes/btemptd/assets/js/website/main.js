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


        var article_count= $(".explore-see-more .explore-blog--box").length;
        console.log(article_count);
        if(html == 0 || total == article_count){

          $(".see-more-button").addClass("disabled");
          $(".see-more-button").hide();
        }


      }
    });
  });

})(jQuery);
