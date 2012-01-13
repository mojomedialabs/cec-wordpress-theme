jQuery(function($){
	$("#home-page-slideshow").tabs().tabs("rotate", 6000);

	$("#home-footer .slide-out").hover(function(event) {
		$(this).stop().animate({ bottom: "0px" });
	}, function(event) {
		$(this).stop().animate({ bottom: "-124px" });
	});

	var scrollPane, scrollContent, scrollMax;
	scrollPane = $('#tabs-slider');
	scrollContent = $('#tabs > span > ul');

	$('#tabs').tabs().children('div').each(function() {
		$('.imgs li img', this).click(function(e) {
  			$(this).parent().parent().parent().children('img').attr('src', this.src);
		}).first().click();
	});

	setTimeout(function() {
		var Max = scrollContent.height() - scrollContent.parent().height();
		if ( Max > 20 ) {
			scrollPane.slider({
				max: Max,
				step: scrollContent.parent().height(),
				slide: function( event, ui ) {
					scrollContent.css( "top", '-' + ui.value + 'px' );
				}
			}).addClass('javascript');
		}
	}, 15);
});
