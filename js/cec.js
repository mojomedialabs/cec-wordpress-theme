jQuery(function($){
	$("#home-page-slideshow").tabs().tabs("rotate", 6000);

	$("#home-footer .slide-out").hover(function(event) {
		$(this).stop().animate({ bottom: "0px" });
	}, function(event) {
		$(this).stop().animate({ bottom: "-124px" });
	});

	$(".portfolio-projects").tabs();

	$.easing["easeInBack"] = function(x, t, b, c, d, s) {
		if (s === undefined) {
			s = 1.70158;
		}

		return c * (t /= d) * t * ((s + 1) * t - s) + b;
	};

	$(".portfolio-projects-menu").jcarousel({
		animation: 500,
		easing: "easeInBack",
		scroll: 5,
		wrap: "circular"
	});

	$(".project-pictures").tabs();
});