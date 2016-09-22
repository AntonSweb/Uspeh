(function ($) {
  Drupal.behaviors.start = {
    attach: function (context, settings) {

      /**
       * jQuery page scroll Speed
       * https://github.com/nathco/jQuery.scrollSpeed
       */
        // jQuery.scrollSpeed(50, 1400);

      /**
       * Parallax
       */
      //$('#').parallax({imageSrc: '/sites/all/themes/.../.jpg'});

      /**
       * back to Top
       * http://www.jqueryscript.net/animation/Customizable-Back-To-Top-Button-with-jQuery-backTop.html
       */
      $("body").append("<a id='backTop'></a>")
      $('#backTop').backTop({
        'position' : 1600,
        'speed' : 500,
        'color' : 'red',
      });

      /**
       * Add mobile event support for bootstrap slider
       * http://lazcreative.com/blog/adding-swipe-support-to-bootstrap-carousel-3-0/
       */
        //$("#views-bootstrap-carousel-1").swiperight(function() {
        //  $(this).carousel('prev');
        //});
        //$("#views-bootstrap-carousel-1").swipeleft(function() {
        //  $(this).carousel('next');
        //});

      /**
       * Add span with Description in gallery
       */
      var Description;
      $('.view-training-gallery .views-row').each(function() {
        Description = $(this).find('.views-field-title .field-content').html();
        if(Description != 'undefined'){
          $(this).find('.views-field-field-img .field-content a').append('<span>' + Description + '</span>');
        };
      });

      $('.node-type-training-gallery .field-name-field-img .field-item ').each(function() {
        Description = $(this).find('img').attr('title');
        if(Description != 'undefined'){
          $(this).find('a').append('<span>' + Description + '</span>');
        };
      });
      
      // Collapse text fix  
      $(".collapse-text-fieldset legend a").removeAttr("href").css("cursor","pointer");
      
      $( "fieldset.collapse-text-fieldset" ).click(function() {
        $( this ).toggleClass( "collapsed" );
        $("body").toggleClass( "open" );
      });


      // Add class to body when scroll to bottom.
      // Needed for about.html page
      $(window).scroll(function() {
        var scroll = $(window).scrollTop(),
            collapse = $("body.top").hasClass("open");

        if (scroll >= 100) {
          $("body").addClass("top");
        } else {
          $("body").removeClass("top");
        }

        if ((scroll >= 1320 && collapse == false) || (collapse == true && scroll >= 2180)) {
          $("body").addClass("bottom");
        } else {
          $("body").removeClass("bottom");
        }

      });

    }
  };
}(jQuery));






