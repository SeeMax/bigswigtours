(function headerLogo() {
	var logoLink = $('.menu-item:contains(Logo)')
	var bookBtn = $('.menu-item:contains(Book Now)')
	var imageMarkSRC = $(".logo-mark").attr("src");
	var imageWordsSRC = $(".logo-words").attr("src");
	logoLink.html("").addClass('header-logo').prepend("<a class='c-block-fill' href='/'></a><img class='logo-mark' src="+ imageMarkSRC +" ><img class='logo-words' src="+ imageWordsSRC +" >")
	bookBtn.addClass('book-now-btn');
}());


