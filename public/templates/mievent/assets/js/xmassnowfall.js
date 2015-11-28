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
        // will first fade out the loading animation
	jQuery(".status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery(".preloader").delay(100).fadeOut("slow");
	jQuery("body").css('overflow-y','visible');
	initSnowEffect();
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
	
	/*** 3D Gallery *********/
	new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
	new CBPFWTabs( document.getElementById( 'tabs-ui' ) );
	
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
	
	/***************** Animation ******************/
	var wow = new WOW(
	{
	boxClass: 'wow', // animated element css class (default is wow)
	animateClass: 'animated', // animation css class (default is animated)
	offset: 0, // distance to the element when triggering the animation (default is 0)
	mobile: false, // trigger animations on mobile devices (default is true)
	live: true // act on asynchronously loaded content (default is true)
	}
	);
	
	wow.init();
		
		

	/** Registration Form **/
	$("#submit_btn").click(function() 
	{ 

		var filter = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		
		var e = document.getElementById("field_1");
		var user_type = e.options[e.selectedIndex].text;
		
	
		var person_name = document.getElementById("name").value;
		var user_email = document.getElementById("email1").value;
		
		var proceed = true;
		
		
		if(person_name == ""){ 
			var error1 = '<div class="enter-name col-lg-3 align-center"> Enter the name </div>';
			jQuery("#result").hide().html(error1).fadeIn(500);
			proceed = false;
			return false;
		}
		
		if(user_email== ""){
			var error2 = '<div class="enter-email col-lg-3 align-center"> Enter the email </div>';
			jQuery("#result").hide().html(error2).fadeIn(500);
			proceed = false;
			
		}
		else if(!filter.test(user_email)) {
			var invalid = '<div class="invalid-email col-lg-3 align-center"> Invalid Email </div>';
			jQuery("#result").hide().html(invalid).fadeIn(500);
			proceed = false;
			
		}
	
		if (proceed)
		{
			
			//data to be sent to server
			var post_data = {
				'userName': person_name,
				'userType': user_type,
				'userEmail': user_email,

			}
			
			//Ajax post data to server
			jQuery.post('contact_me.php', post_data, function(response) {
				//load json data from server and output message
				if (response.type == 'error') {
					var output = '<div class="error col-lg-3 align-center">' + response.text + '</div>';
				} else {
					var output = '<div class="success col-lg-3 align-center">' + response.text + '</div>';
					//reset values in all input fields
					
				}
				jQuery("#result").hide().html(output).fadeIn(500);
				
			}, 'json');
		}

		return false;
 
	});
		
	/** Subscribe JS **/
	$("#notifyMe").notifyMe(); // Activate notifyMe plugin on a '#notifyMe' element 


	/*** Overlay close*********/
	$('.md-overlay').click(function(e){
		$("#modal-10").removeClass("md-show");
		$("#modal-11").removeClass("md-show");
	});
		
	/**********Menu Close Logic***************/

	$('.navbar-collapse.in').niceScroll({cursorcolor:"#c8bd9f"});
		$('.nav li a').click(function(){
			$('.navbar-collapse.collapse').toggleClass('in');
	});	
	
	 /******* Nice Scroll *******/

	 $("html").niceScroll();
	 
	 /** Placeholder JS call **/
	$('input[type=text], textarea').placeholder();	
		
		
});

/*****Snow Fall JS***********************/
var SCREEN_WIDTH = window.innerWidth;
var SCREEN_HEIGHT = window.innerHeight;

var container;

var particle;

var camera;
var scene;
var renderer;

var mouseX = 0;
var mouseY = 0;

var windowHalfX = window.innerWidth / 2;
var windowHalfY = window.innerHeight / 2;

var particles = []; 
var particleImage = new Image();
particleImage.src = 'templates/mievent/assets/img/ParticleSmoke.png'; 



function initSnowEffect() {
	
	container = document.createElement('div');
	document.body.appendChild(container);
	
	camera = new THREE.PerspectiveCamera( 75, SCREEN_WIDTH / SCREEN_HEIGHT, 1, 10000 );
	camera.position.z = 1000;

	scene = new THREE.Scene();
	scene.add(camera);
		
	renderer = new THREE.CanvasRenderer();
	renderer.setSize(SCREEN_WIDTH, SCREEN_HEIGHT);
	var material = new THREE.ParticleBasicMaterial( { map: new THREE.Texture(particleImage) } );
		
	for (var i = 0; i < 500; i++) {

		particle = new Particle3D( material);
		particle.position.x = Math.random() * 2000 - 1000;
		particle.position.y = Math.random() * 2000 - 1000;
		particle.position.z = Math.random() * 2000 - 1000;
		particle.scale.x = particle.scale.y =  1;
		scene.add( particle );
		
		particles.push(particle); 
	}

	container.appendChild( renderer.domElement );

	var userAgent = navigator.userAgent || navigator.vendor || window.opera;

if( userAgent.match( /iPad/i ) || userAgent.match( /iPhone/i ) || userAgent.match( /iPod/i ) )
{
document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
	document.removeEventListener( 'touchstart', onDocumentTouchStart, false );
	document.removeEventListener( 'touchmove', onDocumentTouchMove, false );

}
else if( userAgent.match( /Android/i ) )
{

document.removeEventListener( 'mousemove', onDocumentMouseMove, false );
	document.removeEventListener( 'touchstart', onDocumentTouchStart, false );
	document.removeEventListener( 'touchmove', onDocumentTouchMove, false );
}
else
{
document.addEventListener( 'mousemove', onDocumentMouseMove, false );
	document.addEventListener( 'touchstart', onDocumentTouchStart, false );
	document.addEventListener( 'touchmove', onDocumentTouchMove, false );
}
	
	setInterval( loop, 1000 / 60 );

}

function onDocumentMouseMove( event ) {

	mouseX = event.clientX - windowHalfX;
	mouseY = event.clientY - windowHalfY;
}

function onDocumentTouchStart( event ) {

	if ( event.touches.length == 1 ) {

		event.preventDefault();

		mouseX = event.touches[ 0 ].pageX - windowHalfX;
		mouseY = event.touches[ 0 ].pageY - windowHalfY;
	}
}

function onDocumentTouchMove( event ) {

	if ( event.touches.length == 1 ) {

		event.preventDefault();

		mouseX = event.touches[ 0 ].pageX - windowHalfX;
		mouseY = event.touches[ 0 ].pageY - windowHalfY;
	}
}

//

function loop() {

	for(var i = 0; i<particles.length; i++)
	{

		var particle = particles[i]; 
		particle.updatePhysics(); 

		with(particle.position)
		{
			if(y<-1000) y+=2000; 
			if(x>1000) x-=2000; 
			else if(x<-1000) x+=2000; 
			if(z>1000) z-=2000; 
			else if(z<-1000) z+=2000; 
		}				
	}

	camera.position.x += ( mouseX - camera.position.x ) * 0.05;
	camera.position.y += ( - mouseY - camera.position.y ) * 0.05;
	camera.lookAt(scene.position); 

	renderer.render( scene, camera );

	
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