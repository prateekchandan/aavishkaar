/** *************Init JS*********************
	
    TABLE OF CONTENTS
	---------------------------
	1. Preloader
	2. Ready Function
	   a) Auto height for the home page
	   b) Smooth Scroll
	   c) 3d gallery
	   d) Vimeo Video
	   e) Schedule Accordian
	   f) Speaker Slider
	   g) Animation
	   h) Registration Form
	   i) Subscribe
	   j) Nice Scroll
	   h) Placeholder for ie9


/*************************************/

/*"use strict";*/

/*************************************/
/* Preloader */
/**************************************/
jQuery(window).load(function() {
	jQuery(".status").fadeOut();
	jQuery(".preloader").delay(100).fadeOut("slow");
	jQuery("body").css('overflow-y','visible');
	setTimeout(function(){jQuery('#myModal').modal('show') }, 2000);
});

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
	
	/*******Smooth scroll***********/
	var height=$(".navbar.navbar-default").height();
	var scroll = $(window).scrollTop();
	if (scroll > height) {
		$(".header-hide").addClass("scroll-header");
	}
	
	smoothScroll.init({
		speed: 1000,
		easing: 'easeInOutCubic',
		offset: height,
		updateURL: false,
		callbackBefore: function ( toggle, anchor ) {},
		callbackAfter: function ( toggle, anchor ) {},
	});
	
	$(window).scroll(function() {
		var height = $(window).height();
		var scroll = $(window).scrollTop();
		if (scroll) {
			$(".header-hide").addClass("scroll-header");
		} else {
			 $(".header-hide").removeClass("scroll-header");
		}
	
	});
	
	
	/********Vimeo Video*****************/
	$('.venobox').venobox({
		numeratio: true,
		infinigall: true,
		border: '20px'
	});
	$('.venoboxvid').venobox({
		bgcolor: '#000'
	});
	$('.venoboxframe').venobox({
		border: '6px'
	});
	$('.venoboxinline').venobox({
		framewidth: '300px',
		frameheight: '250px',
		border: '6px',
		bgcolor: '#f46f00'
	});
	$('.venoboxajax').venobox({
		border: '30px;',
		frameheight: '220px'
	});	
		
		
	/*******Schedule Accordion *************/
	
	$('.accordion .item .heading').click(function() {		
	var a = $(this).closest('.item');
	var b = $(a).hasClass('open');
	var c = $(a).closest('.accordion').find('.open');
		
	if(b != true) {
		$(c).find('.content').slideUp(500);
		$(c).removeClass('open');
	}

	$(a).toggleClass('open');
	$(a).find('.content').slideToggle(500);

	});

	$('.nav_slide_button').click(function() {
	$('.pull').slideToggle();
	});	
		
	/******* Speakers Slider *************/
		
	$('#portfolioSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: false,
		pauseOnHover: true,

	});

	$('#portfolioSlider1').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: false,
		pauseOnHover: true,

	});

	$('#portfolioSlider2').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: false,
		pauseOnHover: true,

	});

	$('#servicesSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,

	});

	$('#teamSlider').flexslider({
		animation: "slide",
		directionNav: false,
		controlNav: true,
		touch: true,
		pauseOnHover: true,

	});
	
	/* Overlay */
	if (Modernizr.touch) {
	// show the close overlay button
	$(".close-overlay").removeClass("hidden");
	// handle the adding of hover class when clicked
	$(".img").click(function(e){
		if (!$(this).hasClass("hover")) {
			$(this).addClass("hover");
		}
	});
	// handle the closing of the overlay
	$(".close-overlay").click(function(e){
		e.preventDefault();
		e.stopPropagation();
		if ($(this).closest(".img").hasClass("hover")) {
			$(this).closest(".img").removeClass("hover");
		}
	});
	} else {
		// handle the mouseenter functionality
		$(".img").mouseenter(function(){
			$(this).addClass("hover");
		})
		// handle the mouseleave functionality
		.mouseleave(function(){
			$(this).removeClass("hover");
		});
	}
	
	

	/**********Menu Close Logic***************/

	$('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
		$('.nav li a').click(function(){
			$('.navbar-collapse.collapse').toggleClass('in');
	});	
	
	/******* Nice Scroll *******/
	$("html").niceScroll();
	
	/** Placeholder JS call **/
	$('input[type=text], textarea').placeholder();	
	/******* triangle effect *******/	 
	$("body").append('<div class="animate-canvas"><canvas id="demo-canvas"></canvas></div>');
	/******* triangle effect *******/	
		
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