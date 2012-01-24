jQuery(function($){
	$("#home-page-slideshow").tabs({ fx: [{ opacity: "toggle", duration: "slow" }, { opacity: "toggle", duration: "slow" }] }).tabs("rotate", 8000);

	//THIS IS A CHEAP HACK. I HATE THIS BUT I'VE WASTED TOO MUCH TIME TRYING TO FIGURE OUT HOW TO DO IT RIGHT.
	if ($.browser.mozilla) {
		$(".slide-title").css("top", "154px");
		$(".always-on").css("top", "302px");
	}

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