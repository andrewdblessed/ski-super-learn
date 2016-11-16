<!-- BEGIN POSITIONING HTML BEFORE FADE -->
jQuery("html").addClass('bonfire-html-onload');
<!-- END POSITIONING HTML BEFORE FADE -->

<!-- BEGIN DISABLE BROWSER SCROLL -->
/* disable browser scroll on touch devices */
jQuery(document.body).on("touchmove", function(e) {
    e.preventDefault();
});


<!-- BEGIN LOADER FADE-OUT AND HTML SLIDE-DOWN -->
jQuery(window).load(function() {	

	/* fade out the loading icon */
	jQuery(".bonfire-pageloader-icon").addClass('bonfire-pageloader-icon-hide');

	/* after 250ms delay, restore browser scroll + fade out loader background + slide down page */
	setTimeout(function(){

	

		/* fade out loader */
		jQuery("#bonfire-pageloader").addClass('bonfire-pageloader-fade');

		/* slide down html */
		jQuery("html").removeClass('bonfire-html-onload');

	},250);	
	
	/* after 1000ms delay, hide (not fade out) loader*/
	setTimeout(function(){

	/* hide loader after fading out*/
		jQuery("#bonfire-pageloader").addClass('bonfire-pageloader-hide');

	},1000);
	
});
<!-- END LOADER FADE-OUT AND HTML SLIDE-DOWN -->