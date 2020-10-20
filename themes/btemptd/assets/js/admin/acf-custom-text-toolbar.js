(function ($) {

  acf.add_filter('wysiwyg_quicktags_settings', function (qtInit, id, $field) {

    if ($field[0].id == 'static_content') {
      qtInit.buttons = 'strong,em,del,link,ol,ul';
    }

    return qtInit;

  });


})(jQuery);
