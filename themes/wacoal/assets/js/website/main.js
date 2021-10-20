(function ($) {
  console.log('inside website main.js');

  function setSubscriptionEmailCookie(
    emailAddr) {
    setCookie("subscriptionEmail",
      emailAddr);
  }

  // $.fn.mathSpace = function() {
  //   return $(this).each(function(){
  //     $(this).children('span').each(function() {
  //       var el = $(this);
  //       var text = el.text();
  //       el.text(
  //         text.split(' ').join('\u205f')
  //       );
  //     });
  //   });
  // }
  // $('.js-bg-text').mathSpace();


  // $.fn.mathSpace = function() {
  //   return $(this).each(function(){
  //     $(this).children('span').each(function() {
  //       var el = $(this);
  //       var text = el.text();
  //       el.text(
  //         text.split(' ').join('\u205f'),
  //         console.log('Text entered sdfsf')
  //       );
  //     });
  //   });
  // }

  // $('.js-bg-text').mathSpace();


})(jQuery);
