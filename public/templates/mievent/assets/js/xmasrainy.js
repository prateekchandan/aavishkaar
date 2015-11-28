/** *************Init JS*********************
	
   /**Preloader JS**/
	/**Counter JS**/
	/**Nice Scroll**/
	/**Placeholder JS call**/
	/**Subscribe JS**/
	/**Contact Us JS**/


/*************************************/

/*"use strict";*/

/*************************************/
/* Preloader */
/**************************************/
jQuery(window).load(function() {
    // will first fade out the loading animation
	jQuery(".status").fadeOut();
    // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(100).fadeOut("slow");
	jQuery("body").css('overflow-y','visible');
});


/***********************************/
/*Counter JS*/
/**********************************/	
var austDay = new Date();
//Set counter date
austDay =  new Date(2015,11,12);
jQuery('#defaultCountdown').countdown({
until: austDay, padZeroes: true,format: 'DHMS'});
jQuery('#year').text(austDay.getFullYear());


/*************************************/
/* Ready Function */
/**************************************/
	
jQuery( document ).ready(function( $ ) {
	$.noConflict();
	
	/*** Auto height function ***/
	var setElementHeight = function () {
		var height = $(window).height();
		$('.autoheight').css('min-height', (height));
		
	};

	$(window).on("resize", function () {
		setElementHeight();
	}).resize();
	
	/***********************************/
	/*Placeholder JS call*/
	/**********************************/	 
	$('input[type=text], textarea').placeholder();	

	/***********************************/
	/*Subscribe JS*/
	/**********************************/	

	$("#notifyMe").notifyMe(); // Activate notifyMe plugin on a '#notifyMe' element 

	panel();
});
function panel(){
	jQuery('.show-panel').click(function () {
		jQuery('.panel').slideToggle();
	});
}

jQuery(document).on('click','.navbar-nav a',function(e) {
	jQuery('#example-navbar-collapse').hide();
});

//parallax
if (jQuery().parallax) {
	jQuery('#swag').parallax("50%", 0.4);
	jQuery('.subscribe-overlay').parallax("50%", 1);
}

jQuery('.counter').countTo({
	speed: 4000,
	refreshInterval: 2
});