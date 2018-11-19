(function ($, root, undefined) {$(function () {
'use strict';
$('.brandCarousel').slick({
	autoplay:true,
	arrows:false,
	fade:true,
	pauseOnHover:false
});

$(window).on('hashchange', function () {
	if ($('main').hasClass('home-page')) {
    var top = $(window.location.hash).offset().top - 70;
    $(window).scrollTop(top);
  }
});

// $(window).on('popstate', function(){
// 	if ($('main').hasClass('home-page')) {
//
// 	}
// });

(function headerLogo() {
	var logoLink = $('.menu-item:contains(Logo)');
	var bookBtn = $('.menu-item:contains(Book Now)');
	var imageMarkSRC = $(".logo-mark").attr("src");
	var imageWordsSRC = $(".logo-words").attr("src");
	logoLink.html("").addClass('header-logo').prepend("<a class='c-block-fill' href='/'></a><img class='logo-mark' src="+ imageMarkSRC +" ><img class='logo-words' src="+ imageWordsSRC +" >");
	bookBtn.addClass('book-now-btn');
}());

(function headerPadding() {
  var tl = new TimelineMax();
  var headerHeight = $('.header').height();

    tl.set($('main'), {paddingTop:headerHeight});
}());

$(window).on('load', function() {
  if ($('main').hasClass('home-page')) {

  		var tlOne = new TimelineMax(),
  				menuItems = $(".main-nav li"),
  				tourLink = $('a[href="#tours"]').parent('li'),
  				aboutLink = $('a[href="#about"]').parent('li'),
  				homeLink = $( "a:contains('Home')").parent('li');

  		var controller = new ScrollMagic.Controller();
  		// Build Scene

  		var tourLinkScene = new ScrollMagic.Scene({
  			triggerElement: "#tours",
  			reverse:true
  		}).on('enter', function () {
          tourIn();
      }).on('leave', function () {
          homeIn();
      });

      var aboutLinkScene = new ScrollMagic.Scene({
  			triggerElement: "#about",
  			reverse:true
  		}).on('enter', function () {
          aboutIn();
      }).on('leave', function () {
          tourIn();
      });

      var homeLinkScene = new ScrollMagic.Scene({
  			triggerElement: "#home",
  			reverse:true
  		}).on('enter', function () {
          homeIn();
      });

  		// ADD THE SCENES ABOVE TO THE SCROLLMAGIC CONTROLLER
  		controller.addScene([tourLinkScene, aboutLinkScene, homeLinkScene]);


  	function homeIn() {
        history.pushState(null, null, '#home');
        menuItems.addClass("inactive-menu");
        menuItems.removeClass("active-menu");
        homeLink.removeClass("inactive-menu");
        homeLink.addClass("active-menu");
     }

  	function tourIn() {
        history.pushState(null, null, '#tours');
        menuItems.addClass("inactive-menu");
        menuItems.removeClass("active-menu");
        tourLink.removeClass("inactive-menu");
        tourLink.addClass("active-menu");
     }

     function aboutIn() {
        history.pushState(null, null, '#about');
        menuItems.addClass("inactive-menu");
        menuItems.removeClass("active-menu");
        aboutLink.removeClass("inactive-menu");
        aboutLink.addClass("active-menu");
     }
  }
});

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
	      footerDuration = $(".footer-social").height() * 10.5,
	      // Universal Variables
	      uniTime1 = 1,
	      uniTime2 = 0.3,
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
						.set($(".footer-social li:nth-of-type(4)"), {x:50});

		headerTL.to(headerLogo, 0.3, {width:0, transformOrigin:"center center"}, "rollIn")
						.to(headerWords, 0.3, {scale:0.8, transformOrigin:"center center"}, "rollIn")
						.to($('.header'), 0.3, {height:70}, "rollIn")
						.to($('.tripadvisor-logos'), 0.3, {rotationY:-90, transformOrigin:"right top", transformPerspective:1800}, "rollIn");


		quoteTL.to($(".quote-section h3"), 0.5, {opacity:1, y:0, ease: uniBackOut},"quoteIn")
						.to($(".quote-section h4"), 0.5, {opacity:1, y:0, ease: uniBackOut},"quoteIn")
						.to($(".quote-section img"), 0.5, {opacity:1, y:0, ease: uniBackOut},"quoteIn");

		aboutTL.to($(".about-section h3"), 0.35, {scale:1.01, y:-5})
						.to($(".about-section h3"), 0.15, {scale:1, y:0});


		contactTL.to(contactLine, 1, {drawSVG:"0% 0%"})
						 .set(contactLine, {drawSVG:"100% 100%"})
						 .to(contactLine, 1, {drawSVG:"0% 100%"});

		footerTL.to($(".footer-social li"), 0.3, {x:0});

		var controller = new ScrollMagic.Controller();
		// Build Scene

		$(singleTourContainer).each(function(){
		    var currentTour = this,
		    		tourTL = new TimelineMax();

		    tourTL.to(currentTour, 0.4, {y:0, opacity:1, ease: uniBackOut});

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
		}).setTween(headerTL);

		var quoteScene = new ScrollMagic.Scene({
			triggerElement: ".quote-section",
			triggerHook: 'onCenter',
			offset:100
		}).setTween(quoteTL);

		var aboutScene = new ScrollMagic.Scene({
			triggerElement: ".about-section h3",
			triggerHook: 'onEnter',
			offset:200
		}).setTween(aboutTL);

		var contactScene = new ScrollMagic.Scene({
			triggerElement: ".contact-section",
			triggerHook: 'onEnter',
			duration: contactDuration,
			reverse: true,
			offset: 200
		}).setTween(contactTL);

		var footerScene = new ScrollMagic.Scene({
			triggerElement: ".footer-social",
			triggerHook: 'onEnter',
			duration: footerDuration,
			reverse: true,
		}).setTween(footerTL);

		var Pinscene= new ScrollMagic.Scene({

		}).setPin('.header');

		// ADD THE SCENES ABOVE TO THE SCROLLMAGIC CONTROLLER
		controller.addScene([headerScene, contactScene, quoteScene, aboutScene, footerScene]);
	}
});


var bounceArrowTL = new TimelineMax({repeat:-1, yoyo:true});

bounceArrowTL.to($(".down-arrow"), 1, {y:8});

$(".mobileToggle").on('click', function() {

	console.log('CLICKED')
	var tl = new TimelineMax(),
			$this = $(this),
			fullHam = $(".mobileToggle"),
			fullMenu = $(".main-nav"),
			mainNavBack = $(".mainNavBack"),
			links = $(".main-nav li"),
			ham1 = $(".hamTop"),
			ham2 = $(".hamMid"),
			ham3 = $(".hamBot"),
			uniTime2 = 0.15;

	if ($this.hasClass("navOpen")) {
		$this.removeClass("navOpen");
		tl.to(fullMenu, 0.3, {x:"100%"}, "menuClose")
			.to(mainNavBack, 0.1, {x:"100%"}, "menuClose+=.2")
			.to(fullHam, 0.3, {rotationX:0, transformOrigin:"50% 50%"}, "menuClose")
			.staggerTo(links, 0.3, {opacity:0, x:"20%"}, 0.03, "menuClose")
			.to(ham1, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose")
			.to(ham2, uniTime2, {width:"100%", x:0, opacity:1}, "menuClose")
			.to(ham3, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose");

	} else {
		$this.addClass("navOpen");
		tl
			// .set($(".wrapper"), {height:"100%", overflow:"hidden"})
			.set(links, {opacity:0, x:"20%"})
			.to(fullMenu, 0.3, {x:"0%"}, "menuOpen")
			.to(mainNavBack, 0.1, {x:"0%"}, "menuOpen+=.2")
			.staggerTo(links, 0.07, {opacity:1, x:"0%"}, 0.03, "menuOpen+.03")
			.to(fullHam, 0.3, {rotationX:180, transformOrigin:"50% 50%"}, "menuOpen")
			.to(ham1, uniTime2, {rotation:227, y:4, width:"50%"}, "menuOpen")
			.to(ham2, uniTime2, {width:"70%", x:5, opacity:0}, "menuOpen")
			.to(ham3, uniTime2, {rotation:-227, y:-4, width:"50%"}, "menuOpen");
	}
});

// if (screen.width <= 1025){
// 	$(".hero-section").find('video').find('source').attr('src', '');
// }
//
//
// var bgv = $('#bgvid');
//
// if (bgv.is(':visible')) {
//   $('source', bgv).each(
//     function() {
//       var el = $(this);
//       el.attr('src', el.data('src'));
//     }
//   );
//
//   bgv[0].load();
// }

});})(jQuery, this);
