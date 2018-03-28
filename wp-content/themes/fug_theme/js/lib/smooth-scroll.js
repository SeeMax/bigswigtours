if ($('main').hasClass('home-page')) {

  $(document).ready(function() {
     $('a[href*=\\#]').bind('click', function(e) {
    e.preventDefault(); //prevent the "normal" behaviour which would be a "hard" jump
         
    var target = $(this).attr("href"); //Get the target
        
    // perform animated scrolling by getting top-position of target-element and set it as scroll target
    $('html, body').stop().animate({ scrollTop: $(target).offset().top -70 }, 1000);

    // IF IT"S MOBILE CLOSE THE NAV
    if (screen.width <= 1025){
      closeNav();
    }

    return false;

    });
  });

}

// Close Nav On Link Click Function
function closeNav() {

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


    fullHam.removeClass("navOpen");
    tl.set($(".wrapper"), {height:"auto",overflow:"visible"})
      .to(fullMenu, .3, {x:"100%"}, "menuClose")
      .to(mainNavBack, .1, {x:"100%"}, "menuClose+=.2")
      .to(fullHam, .3, {rotationX:0, transformOrigin:"50% 50%"}, "menuClose")
      .staggerTo(links, .3, {opacity:0, x:"20%"}, .03, "menuClose")
      .to(ham1, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose")
      .to(ham2, uniTime2, {width:"100%", x:0, opacity:1}, "menuClose")
      .to(ham3, uniTime2, {width:"100%", rotation:0, y:0}, "menuClose")     

}