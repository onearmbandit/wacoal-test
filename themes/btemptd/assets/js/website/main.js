(function ($) {
  console.log('inside website main.js');
  $(document).on('click', '.more', function (event) {

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
      },
      success: function (html) {
        $("#offset").val(offset);

        $(".explore-see-more").append(html);
        var article_count= $(".explore-see-more .explore-blog--box").length;

        if(html == 0 || total == article_count){
          $(".more").attr("disabled","disabled");
          $(".more").addClass("disabled");
        }


      }
    });
  });

})(jQuery);
