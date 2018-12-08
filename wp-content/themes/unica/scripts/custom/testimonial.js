jQuery(document).ready(function( $ ) {
 "use strict";
 
		$('.slideshow').owlCarousel({
			singleItem: true,
			autoPlay : testimonial.autoplay,
			theme: 'owl-unica',
			transitionStyle: 'UnicaAnim',
			navigationText: ['', '']
		});

});