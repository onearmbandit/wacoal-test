(function ($) {

  acf.add_filter('wysiwyg_quicktags_settings', function (qtInit, id, $field) {

    if ($field[0].id == 'static_content' || $field[0].id == 'footer_content' ||
      $field[0].id == 'para_content') {
      qtInit.buttons = 'strong,em,del,link,ol,ul';
    }

    if ($field[0].id == 'static_content_block') {
      qtInit.buttons = 'strong,em,del,link,ol,ul,block';
    }

    return qtInit;

  });

})(jQuery);
