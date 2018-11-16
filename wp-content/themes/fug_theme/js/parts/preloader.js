if (screen.width <= 1025){
	$(".hero-section").find('video').find('source').attr('src', '');
}


var bgv = $('#bgvid');

if (bgv.is(':visible')) {
  $('source', bgv).each(
    function() {
      var el = $(this);
      el.attr('src', el.data('src'));
    }
  );

  bgv[0].load();
}
