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
      //$("body").append("<a id='backTop'>Back To Top</a>")
      //$('#backTop').backTop({
      //  'position' : 1600,
      //  'speed' : 500,
      //  'color' : 'red',
      //});

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
    }
  };
}(jQuery));