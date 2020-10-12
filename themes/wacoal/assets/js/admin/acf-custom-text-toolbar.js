(function ($) {

  acf.add_filter('wysiwyg_quicktags_settings', function (qtInit, id, $field) {

    // if ($field[0].id == 'hed' || $field[0].id == 'promo_hed') {

    //   qtInit.buttons = 'strong,em,del';

    // }
    if ($field[0].id == 'paragraph_content' || $field[0].id == 'image_caption'
        || $field[0].id == 'video_cap' || $field[0].id == 'question_text'
        || $field[0].id == 'answer_text' || $field[0].id == 'quotes_content'
        || $field[0].id == 'list_content' ) {
      qtInit.buttons = 'strong,em,del,link,ol,ul';
    }

    return qtInit;

  });


})(jQuery);
