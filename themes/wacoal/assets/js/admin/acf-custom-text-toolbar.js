(function ($) {

  acf.add_filter('wysiwyg_quicktags_settings', function (qtInit, id, $field) {

    // if ($field[0].id == 'hed' || $field[0].id == 'promo_hed') {

    //   qtInit.buttons = 'strong,em,del';

    // }
    if ($field[0].id == 'paragraph_content' || $field[0].id == 'quote_text'
        || $field[0].id == 'description' || $field[0].id == 'list_description'
        || $field[0].id == 'answer_text' ) {
      qtInit.buttons = 'strong,em,del,link,ol,ul';
    }

    return qtInit;

  });


})(jQuery);
