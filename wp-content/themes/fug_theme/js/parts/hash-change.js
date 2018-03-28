$(window).on('hashchange', function () {
	if ($('main').hasClass('home-page')) {
    var top = $(window.location.hash).offset().top - 70;
    $(window).scrollTop(top);
  }
});

$(window).on('popstate', function(){
	if ($('main').hasClass('home-page')) {
		console.log("PopPopPop")
	}
});
