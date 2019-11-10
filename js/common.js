//////// MENU /////////

(function($){
			//cache nav
			var nav = $("#topNav");
			//add indicator and hovers to submenu parents
			nav.find("li").each(function() {
				if ($(this).find("ul").length > 0) {
					//show subnav on hover
					$(this).mouseenter(function() {
						$(this).find("ul").stop(true, true).slideDown();
					});
					//hide submenus on exit
					$(this).mouseleave(function() {
						$(this).find("ul").stop(true, true).slideUp();
					});
				}
			});
		})(jQuery);


//////// SCROLL TO TOP /////////
$(document).ready(function(){

	// hide #back-top first
	$(".back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 700) {
				$('.back-top').fadeIn();
			} else {
				$('.back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('.back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 1000);
			return false;
		});
	});

});

