jQuery(document).ready(function($) {
      var scroll_start = 0;
      var startchange = $('#startchange');
      var offset = startchange.offset();
      if (startchange.length) {
          $(document).scroll(function() {
              scroll_start = $(this).scrollTop();
              if (scroll_start > offset.top) {
                  $("nav.navbar-default.navbar-fixed-top").css('background-color', 'white', '!important');
              } else {
                  $('nav.navbar-default.navbar-fixed-top').css('background-color', 'transparent', '!important');
              }
          });
      }
  },
  $(window).scroll( function(){
      /* Check the location of each desired element */
      $('.container-fluid').each( function(i){
          var bottom_of_object = $(this).position().top + $(this).outerHeight();
          var bottom_of_window = $(window).scrollTop() + $(window).height();
          /* If the object is completely visible in the window, fade it it */
          if( bottom_of_window > bottom_of_object ){
              $(this).animate({'opacity':'1'},1500);

          }

      })

  })
);
