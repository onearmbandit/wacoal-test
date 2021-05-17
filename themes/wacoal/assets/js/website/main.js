(function ($) {
  console.log('inside website main.js');

  $.fn.mathSpace = function() {
    return $(this).each(function(){
      $(this).children('span').each(function() {
        var el = $(this);
        var text = el.text();
        el.text(
          text.split(' ').join('\u205f')
        );
      });
    });
  }
  $('.js-bg-text').mathSpace();

})(jQuery);
