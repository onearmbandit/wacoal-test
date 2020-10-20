(function ($) {
  console.log('inside website folder main.js');
  $(document).on('click', '.more', function (event) {
    console.log("hey");
    var input= $("#offset").val();
    var offset= parseInt(input)+3;
    $.ajax({
      url: btemptd_js_var.ajaxurl,
      type: 'post',
      data: {
        action: 'btemptd_load_more',

        offset:offset,
        nonce:btemptd_js_var.nonce,
      },
      success: function (html) {
        $("#offset").val(offset);
        console.log(html);
        $(".explore-blog--bg").append(html);

        if(html == 0){
          $(".more").attr("disabled","disabled");
        }


      }
    });
  });

})(jQuery);
