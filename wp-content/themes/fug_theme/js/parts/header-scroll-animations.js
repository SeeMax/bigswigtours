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
      })

      var aboutLinkScene = new ScrollMagic.Scene({
  			triggerElement: "#about",
  			reverse:true
  		}).on('enter', function () {
          aboutIn();
      }).on('leave', function () {
          tourIn();
      })

      var homeLinkScene = new ScrollMagic.Scene({
  			triggerElement: "#home",
  			reverse:true
  		}).on('enter', function () {
          homeIn();
      })

  		// ADD THE SCENES ABOVE TO THE SCROLLMAGIC CONTROLLER
  		controller.addScene([tourLinkScene, aboutLinkScene, homeLinkScene]);
  	

  	function homeIn() {
        history.pushState(null, null, '#home');
        menuItems.addClass("inactive-menu");
        menuItems.removeClass("active-menu");
        homeLink.removeClass("inactive-menu");
        homeLink.addClass("active-menu");
     };

  	function tourIn() {
        history.pushState(null, null, '#tours');
        menuItems.addClass("inactive-menu");
        menuItems.removeClass("active-menu");
        tourLink.removeClass("inactive-menu");
        tourLink.addClass("active-menu");
     };

     function aboutIn() {
        history.pushState(null, null, '#about');
        menuItems.addClass("inactive-menu");
        menuItems.removeClass("active-menu");
        aboutLink.removeClass("inactive-menu");
        aboutLink.addClass("active-menu");
     };
  }
});
