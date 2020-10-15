(function ($) {

  $(document).on('click', '.more', function (event) {
    var input= $("#offset").val();
    var offset= parseInt(input)+3;
    var total= $("#total").val();

    $.ajax({
      url: wacoal_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'wacoal_load_more',
        offset:offset,
        nonce:wacoal_js_var.nonce,
      },
      success: function (html) {
        $("#offset").val(offset);
        $(html).insertAfter($(".more-blog").last());
        $(window).scrollTop($(".more-blog").last().offset().top-180);
        var article_count= $("article.blog-tile").length;
        if(html == 0 || total == article_count){
          $('.more').parent('div').addClass('disable');
        }


      }
    });
  });
})(jQuery);
