/** *************Init JS*********************
	
    TABLE OF CONTENTS
	---------------------------
	Notify Me
	IE9 Pleaceholder Support
	Preloader
	Counter JS
	
 ** ***************************************/
 "use strict"; 


/***********************************/
/*Ready function*/
/**********************************/
$(document).ready(function() {
	
	/** Subscribe JS **/
	$("#notifyMe").notifyMe(); // Activate notifyMe plugin on a '#notifyMe' element 
	
	
});

/***********************************/
/*Preloader */
/**********************************/
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
$(function () {
  
  var austDay = new Date();
  //Set counter date
  austDay =  new Date(2015,11,12);
  jQuery('#defaultCountdown').countdown({
	until: austDay, padZeroes: true,format: 'DHMS'});
  jQuery('#year').text(austDay.getFullYear());

});


function panel(){

	$('.show-panel').click(function () {
    $('.panel').slideToggle();
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