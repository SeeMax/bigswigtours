$(window).on('load', function() {


	if (screen.width >= 1025){

		var setupTL = new TimelineMax(),
				headerTL = new TimelineMax(),
				quoteTL = new TimelineMax(),
				aboutTL = new TimelineMax(),
				contactTL = new TimelineMax(),
				footerTL = new TimelineMax(),
				// Header Variable
				headerLogo = $(".logo-mark"),
				headerWords = $(".logo-words"),
				// Tour Variables
				singleTourContainer = $(".singleTourContainer"),
				// Contact Variables
				contactLine = $(".contactLine line"),
				contactDuration = $(".contact-section").height() * 2,
	      // Footer Variable
	      footerLink = $(".footer-link"),
	      footerDuration = $(".footer-social").height() * 1.5,
	      // Universal Variables
	      uniTime1 = 1,
	      uniTime2 = .3,
	      uniEase1 = Power4.easeOut,
	      uniEase2 = Power4.easeIn,
	      uniBackOut = Back.easeOut.config(1),
	      uniBackIn = Back.easeIn.config(1.7);

    setupTL.set(headerLogo, {transformOrigin:"center center"})
    				.set(contactLine, {drawSVG:"100% 0%"})
    				.set(singleTourContainer, {y:60, opacity:0})
						.set($(".quote-section h3"), {opacity:0, y:-30})
						.set($(".quote-section h4"), {opacity:0, y:-10}) 
						.set($(".quote-section img"), {opacity:0, y:30})
						.set($(".footer-social li:nth-of-type(1)"), {x:-50})	
						.set($(".footer-social li:nth-of-type(2)"), {x:-30})	
						.set($(".footer-social li:nth-of-type(3)"), {x:30})	
						.set($(".footer-social li:nth-of-type(4)"), {x:50})	

		headerTL.to(headerLogo, .3, {width:0, transformOrigin:"center center"}, "rollIn")
						.to(headerWords, .3, {scale:.8, transformOrigin:"center center"}, "rollIn")
						.to($('.header'), .3, {height:70}, "rollIn")
						.to($('.tripadvisor-logo'), .3, {rotationY:-90, transformOrigin:"right top", transformPerspective:1800}, "rollIn")


		quoteTL.to($(".quote-section h3"), .5, {opacity:1, y:0, ease: uniBackOut},"quoteIn")
						.to($(".quote-section h4"), .5, {opacity:1, y:0, ease: uniBackOut},"quoteIn")
						.to($(".quote-section img"), .5, {opacity:1, y:0, ease: uniBackOut},"quoteIn")

		aboutTL.to($(".about-section h3"), .35, {scale:1.01, y:-5})
						.to($(".about-section h3"), .15, {scale:1, y:0})

						
		contactTL.to(contactLine, 1, {drawSVG:"0% 0%"})
						 .set(contactLine, {drawSVG:"100% 100%"})
						 .to(contactLine, 1, {drawSVG:"0% 100%"})

		footerTL.to($(".footer-social li"), .3, {x:0})				 

		var controller = new ScrollMagic.Controller();	
		// Build Scene

		$(singleTourContainer).each(function(){
		    var currentTour = this,
		    		tourTL = new TimelineMax();

		    tourTL.to(currentTour, .4, {y:0, opacity:1, ease: uniBackOut});
	    
				var tourScene = new ScrollMagic.Scene({
					triggerElement: currentTour,
					triggerHook: 'onEnter',
					offset:100
				}).setTween(tourTL).addTo(controller);
		});

		var headerScene = new ScrollMagic.Scene({
			triggerElement: "main",
			triggerHook: 'onLeave',
			duration: 300,
			reverse: true,
			offset: 10
		}).setTween(headerTL)

		var quoteScene = new ScrollMagic.Scene({
			triggerElement: ".quote-section",
			triggerHook: 'onCenter',
			offset:100
		}).setTween(quoteTL)

		var aboutScene = new ScrollMagic.Scene({
			triggerElement: ".about-section h3",
			triggerHook: 'onEnter',
			offset:200
		}).setTween(aboutTL)

		var contactScene = new ScrollMagic.Scene({
			triggerElement: ".contact-section",
			triggerHook: 'onEnter',
			duration: contactDuration,
			reverse: true,
			offset: 200
		}).setTween(contactTL)

		var footerScene = new ScrollMagic.Scene({
			triggerElement: ".footer-social",
			triggerHook: 'onEnter',
			duration: footerDuration,
			reverse: true,
		}).setTween(footerTL)

		var Pinscene= new ScrollMagic.Scene({
			
		}).setPin('.header');

		// ADD THE SCENES ABOVE TO THE SCROLLMAGIC CONTROLLER
		controller.addScene([headerScene, contactScene, quoteScene, aboutScene, footerScene]);
	}	
});


var bounceArrowTL = new TimelineMax({repeat:-1, yoyo:true});

bounceArrowTL.to($(".down-arrow"), 1, {y:8});