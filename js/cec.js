jQuery(function($){
	$("#home-page-slideshow").tabs({ fx: [{ opacity: "toggle", duration: "slow" }, { opacity: "toggle", duration: "slow" }] }).tabs("rotate", 8000);

	//THIS IS A CHEAP HACK. I HATE THIS BUT I'VE WASTED TOO MUCH TIME TRYING TO FIGURE OUT HOW TO DO IT RIGHT.
	if ($.browser.mozilla) {
		if (navigator.platform.indexOf("Mac") !== -1) {
			//$(".slide-title").css("top", "154px");
			$(".slide-title").css("top", "145px");
			$(".always-on").css("top", "302px");
		}

		if (navigator.platform.indexOf("Linux") !== -1) {
			$(".slide-title").css("top", "125px");
			$(".always-on").css("top", "265px");
		}
	}

	//this needs to be moved to a conditional stylesheet or something.
	if (!$.browser.msie) {
		$("html").css("height", "100%");
	}

	$("#home-footer .slide-out").hover(function(event) {
		$(this).stop().animate({ bottom: "0px" });
	}, function(event) {
		$(this).stop().animate({ bottom: "-30px" });
	});

	$(".portfolio-projects").tabs();

	$(".jcarousel").jcarousel({
		animation: 500,
		easing: "easeInBack",
		scroll: 5,
		wrap: "circular"
	});

	$(".project-pictures").tabs({
		fx: { opacity: "toggle", duration: "slow" },
		select: function(event, ui) {
			$(this).css("height", $(this).height());
			$(this).css("overflow", "hidden");
		},
		show: function(event, ui) {
			$(this).css("height", "auto");
			$(this).css("overflow", "visible");
		}
	 });

	$(".current-picture a").fancybox();
});