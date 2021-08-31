	
(function ($) {
    "use strict";
	
		$(document).ready(function($) {
			"use strict";
			$(window).on('load', function() {
				$('.preloader').delay(2000).fadeOut('slow');
				setTimeout(function() {
					//After 2s, the no-scroll class of the body will be removed
					$('body').removeClass('no-scroll');
				}, 2000); //Here you can change preloader time
			});
			
			$(".fn-bubble-border").each(function () {
				var $this = $(this);
				$this.prepend("<i></i><i></i><i></i><i></i><i></i>");
			});

			$("#fn-content .fn-bubble-border, #fn-footer .fn-bubble-border").each(function () {
				var $this = $(this);
				$this.isInViewport(function(status) {
					if (status === "entered") {
						$this.addClass("in");
					}
					else if (status === "leaved") {
						$this.removeClass("in");
					}
				});
			});
			
		$("body").imagesLoaded( function() {
			$(".fn-bubble-border").each(function(){
            var $this = $(this);
            var $active = $(this).find(".active");

            $this.width( $this.find(".active").outerWidth() );
            $this.height( $this.find(".active").outerHeight() );

            setTimeout(function(){
                $(".fn-bubble-border").addClass("in");
                setInterval(function(){
                    $this.find(".active").addClass("out");
                    setTimeout(function(){
                        $this.find(".active").removeClass("active out");
                        if( $active.next().length ) {
                            $active.next().addClass("active");
                            $active = $active.next();
                        }
                        else {
                            $active = $this.find(".fn-title-rotate span:first");
                            $active.addClass("active");
                        }
                        $this.width( $this.find(".active").outerWidth() );
                        $this.height( $this.find(".active").outerHeight() );

                    }, 800);
                }, 3000);
            }, 500);

        });


    });
	
	$(".progress").each(function(){
        var $this = $(this);
        $this.find(".fn-progress-value").text( $this.attr("data-progress-width") );
        $this.isInViewport(function(status) {
            if (status === "entered") {
                $this.find(".progress-bar").width( $this.attr("data-progress-width") );
                $this.find(".fn-progress-value").css("left", $this.attr("data-progress-width"));
            }
        });
    });
	

	$(".fn-scroll").on("click", function(event) {
		if (
			location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '')
			&&
			location.hostname === this.hostname
		) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				event.preventDefault();
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000, function() {
					var $target = $(target);
					$target.focus();
					if ($target.is(":focus")) {
						return false;
					} else {
						$target.attr('tabindex','-1');
						$target.focus();
					}
				});
			}
		}
	});
	
		
	if ($('#back-to-top').length) {
		
		var scrollTrigger = 100, 
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
					if (scrollTop > scrollTrigger) {
						$('#back-to-top').addClass('show');
				} else {
					$('#back-to-top').removeClass('show');
				}
			};
			backToTop();
			$(window).on('scroll', function () {
				backToTop();
			});
			$('#back-to-top').on('click', function (e) {
				e.preventDefault();
				$('html,body').animate({
					scrollTop: 0
				}, 1000);
		});
	}

	
	$('#sendMail').on('shown.bs.modal', function () {
		$('.fn__control').focus();
	})

	});

})(jQuery);