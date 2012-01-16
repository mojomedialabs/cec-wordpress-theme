jQuery(function($){
	$("#home-page-slideshow").tabs().tabs("rotate", 6000);

	$("#home-footer .slide-out").hover(function(event) {
		$(this).stop().animate({ bottom: "0px" });
	}, function(event) {
		$(this).stop().animate({ bottom: "-124px" });
	});

	$(".portfolio-projects").tabs();

	$(".jcarousel").jcarousel({
		animation: 500,
		easing: "easeInBack",
		scroll: 5,
		wrap: "circular"
	});

	$(".project-pictures").tabs({ fx: { opacity: "toggle", duration: "slow" } });

	$(".current-picture a").fancybox();
});