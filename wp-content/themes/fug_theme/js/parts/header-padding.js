(function headerPadding() {
  var tl = new TimelineMax();
  var headerHeight = $('.header').height();

    tl.set($('main'), {paddingTop:headerHeight});
}());
