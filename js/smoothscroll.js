jQuery(document).ready(function($) {
// http://css-tricks.com/snippets/jquery/smooth-scrolling/
// page scroll to an anchor on the same page.
	$('a[href*=#]:not([href=#]):not([href=#views-bootstrap-carousel-1])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: target.offset().top
			}, 1000);
			return false;
		  }
		}
	});
});