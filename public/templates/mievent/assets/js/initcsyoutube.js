/** *************Init JS*********************
	
    TABLE OF CONTENTS
	---------------------------
	Notify Me
	IE9 Pleaceholder Support
	Preloader
	Counter JS
	Youtube background
	Only play video on desktop devices
 ** ***************************************/
 "use strict"; 


/***********************************/
/*Ready function*/
/**********************************/
jQuery(document).ready(function() {
	
	/** Subscribe JS **/
	jQuery("#notifyMe").notifyMe(); // Activate notifyMe plugin on a '#notifyMe' element 
	
	/** Placeholder JS call **/
	jQuery('input[type=text], textarea').placeholder();	
	panel();
	
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
jQuery(function () {
  
  var austDay = new Date();
  //Set counter date
  austDay =  new Date(2015,11,12);
  jQuery('#defaultCountdown').countdown({
	until: austDay, padZeroes: true,format: 'DHMS'});
  jQuery('#year').text(austDay.getFullYear());

});

/***************************************/
/*only play video on desktop devices  */
/**************************************/
	var isMobile = {
	Android: function() {
	return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function() {
	return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function() {
	return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function() {
	return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function() {
	return navigator.userAgent.match(/IEMobile/i);
	},
	any: function() {
	return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

var trueMobile = isMobile.any()
if (trueMobile){
	    jQuery('#background-video').css('display','none');
		jQuery('#background').css('display','none');
		jQuery('#tubular-container').css('display','none');
		jQuery('#tubular-shield').css('display','none');
		
}

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