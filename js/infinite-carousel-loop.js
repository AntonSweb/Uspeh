(function ($) {
  Drupal.behaviors.infinitecarouselloop = {
    attach: function (context, settings) {
      // Infinite carousel (loop) multi-Item http://bootsnipp.com/snippets/featured/infinite-carousel-loop
      //$('.view-display-id-carousel .carousel').carousel({
      //  interval: 40000
      //});

      $('.view-display-id-carousel .carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {
          next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
        }
        else {
          $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
      });

	$('.view-id-clients .carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
          next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {
          next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
        }
        else {
          $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
      });
	  
    }
  }
}(jQuery));