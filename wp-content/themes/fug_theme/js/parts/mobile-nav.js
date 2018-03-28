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
			uniTime2 = .15;

	if ($this.hasClass("navOpen")) {
		$this.removeClass("navOpen");
		tl
			// .set($(".wrapper"), {height:"auto",overflow:"visible"})
			.to(fullMenu, .3, {x:"100%"}, "menuClose")
			.to(mainNavBack, .1, {x:"100%"}, "menuClose+=.2")
			.to(fullHam, .3, {rotationX:0, transformOrigin:"50% 50%"}, "menuClose")
			.staggerTo(links, .3, {opacity:0, x:"20%"}, .03, "menuClose")
			.to(ham1, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose")
			.to(ham2, uniTime2, {width:"100%", x:0, opacity:1}, "menuClose")
			.to(ham3, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose")			

	} else {
		$this.addClass("navOpen");
		tl
			// .set($(".wrapper"), {height:"100%", overflow:"hidden"})
			.set(links, {opacity:0, x:"20%"})
			.to(fullMenu, .3, {x:"0%"}, "menuOpen")
			.to(mainNavBack, .1, {x:"0%"}, "menuOpen+=.2")
			.staggerTo(links, .07, {opacity:1, x:"0%"}, .03, "menuOpen+.03")
			.to(fullHam, .3, {rotationX:180, transformOrigin:"50% 50%"}, "menuOpen")
			.to(ham1, uniTime2, {rotation:227, y:4, width:"50%"}, "menuOpen")
			.to(ham2, uniTime2, {width:"70%", x:5, opacity:0}, "menuOpen")
			.to(ham3, uniTime2, {rotation:-227, y:-4, width:"50%"}, "menuOpen")
	}
});