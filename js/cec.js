/**!
 * @preserve Shadow animation jQuery-plugin 1.7
 * http://www.bitstorm.org/jquery/shadow-animation/
 * Copyright 2011 Edwin Martin <edwin@bitstorm.org>
 * Contributors: Mark Carver, Xavier Lepretre
 * Released under the MIT and GPL licenses.
 */

jQuery(function($, undefined) {
	/**
	 * Check whether the browser supports RGBA color mode.
	 *
	 * Author Mehdi Kabab <http://pioupioum.fr>
	 * @return {boolean} True if the browser support RGBA. False otherwise.
	 */
	function isRGBACapable() {
		var $script = $('script:first'),
				color = $script.css('color'),
				result = false;
		if (/^rgba/.test(color)) {
			result = true;
		} else {
			try {
				result = ( color != $script.css('color', 'rgba(0, 0, 0, 0.5)').css('color') );
				$script.css('color', color);
			} catch (e) {
			}
		}

		return result;
	}

	$.extend(true, $, {
		support: {
			'rgba': isRGBACapable()
		}
	});

	/*************************************/

	// First define which property to use
	var boxShadowProperty;
	$.each(['boxShadow', 'MozBoxShadow', 'WebkitBoxShadow'], function(i, property) {
		var val = $('html').css(property);
		if (typeof val == 'string' && val != '') {
			boxShadowProperty = property;
			return false;
		}
	});

	// Extend the animate-function
	if (boxShadowProperty) {
		$.fx.step['boxShadow'] = function(fx) {
			if (!fx.init) {
				fx.begin = parseShadow($(fx.elem).get(0).style[boxShadowProperty] || $(fx.elem).css(boxShadowProperty));
				fx.end = $.extend({}, fx.begin, parseShadow(fx.end));
				if (fx.begin.color == undefined) {
					fx.begin.color = fx.end.color || [0, 0, 0];
				}
				fx.init = true;
			}
			fx.elem.style[boxShadowProperty] = calculateShadow(fx.begin, fx.end, fx.pos);
		}
	}

	// Calculate an in-between shadow.
	function calculateShadow(begin, end, pos) {
		var parts = [];
		if (begin.inset) {
			parts.push('inset');
		}
		if (typeof end.left != 'undefined') {
			parts.push(parseInt(begin.left + pos * (end.left - begin.left), 10) + 'px '
					+ parseInt(begin.top + pos * (end.top - begin.top), 10) + 'px');
		}
		if (typeof end.blur != 'undefined') {
			parts.push(parseInt(begin.blur + pos * (end.blur - begin.blur), 10) + 'px');
		}
		if (typeof end.spread != 'undefined') {
			parts.push(parseInt(begin.spread + pos * (end.spread - begin.spread), 10) + 'px');
		}
		if (typeof end.color != 'undefined') {
			var color = 'rgb' + ($.support['rgba'] ? 'a' : '') + '('
					+ parseInt((begin.color[0] + pos * (end.color[0] - begin.color[0])), 10) + ','
					+ parseInt((begin.color[1] + pos * (end.color[1] - begin.color[1])), 10) + ','
					+ parseInt((begin.color[2] + pos * (end.color[2] - begin.color[2])), 10);
			if ($.support['rgba']) {
				color += ',' + parseFloat(begin.color[3] + pos * (end.color[3] - begin.color[3]));
			}
			color += ')';
			parts.push(color);
		}
		return parts.join(' ');
	}

	// Parse the shadow value and extract the values.
	function parseShadow(shadow) {
		var match, color, parsedShadow = {};

		// Parse an CSS-syntax color. Outputs an array [r, g, b]
		// Match #aabbcc
		if (match = /#([0-9a-fA-F]{2})([0-9a-fA-F]{2})([0-9a-fA-F]{2})/.exec(shadow)) {
			color = [parseInt(match[1], 16), parseInt(match[2], 16), parseInt(match[3], 16), 1];

			// Match #abc
		} else if (match = /#([0-9a-fA-F])([0-9a-fA-F])([0-9a-fA-F])/.exec(shadow)) {
			color = [parseInt(match[1], 16) * 17, parseInt(match[2], 16) * 17, parseInt(match[3], 16) * 17, 1];

			// Match rgb(n, n, n)
		} else if (match = /rgb\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*\)/.exec(shadow)) {
			color = [parseInt(match[1], 10), parseInt(match[2], 10), parseInt(match[3], 10), 1];

			// Match rgba(n, n, n, n)
		} else if (match = /rgba\(\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9]{1,3})\s*,\s*([0-9\.]*)\s*\)/.exec(shadow)) {
			color = [parseInt(match[1], 10), parseInt(match[2], 10), parseInt(match[3], 10),parseFloat(match[4])];

			// No browser returns rgb(n%, n%, n%), so little reason to support this format.
        }

		// Parse offset, blur and radius
		if (match = /(-?[0-9]+)(?:px)?\s+(-?[0-9]+)(?:px)?(?:\s+(-?[0-9]+)(?:px)?)?(?:\s+(-?[0-9]+)(?:px)?)?/.exec(shadow)) {
			parsedShadow = {left: parseInt(match[1], 10), top: parseInt(match[2], 10), blur: match[3] ? parseInt(match[3], 10) : 0, spread: match[4] ? parseInt(match[4], 10) : 0};
		} else {
			parsedShadow = {left: 0, top: 0, blur: 0, spread: 0};
		}

		// Inset or not
		parsedShadow.inset = /inset/.test(shadow);

		parsedShadow.color = color;

		return parsedShadow;
	}
});

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
	if ($.browser.msie) {
		//$("html").css("height", "");

		//$("body").css("background", "url(wp-content/themes/cec/images/background-1.png) repeat-x");
	}

	$(".home-call-to-action").hover(function(event) {
		// So apparently in IE setting the opacity of an element to 1.0 makes it go away. OMGWTF Microsoft.
		if ($.browser.msie) {
			$(this).stop().animate({
				opacity: 0.99,
				boxShadow: "0 0 20px #444444"
			});
		} else {
			$(this).stop().animate({
				opacity: 1.0,
				boxShadow: "0 0 20px #444444"
			});
		}
	}, function(event) {
		$(this).stop().animate({
			opacity: 0.6,
			boxShadow: "0"
		});
	});


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