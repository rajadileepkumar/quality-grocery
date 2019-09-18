/*
Template Name: Osahan Grocery - Bootstrap4 Responsive Grocery Light Template
Author: Askbootstrap
Author URI: https://themeforest.net/user/askbootstrap
Version: 1.1
*/

jQuery.noConflict();
(function ($) {
  "use strict";
  
$(document).ready(function() {

    // ===========Featured Owl Carousel============
    var objowlcarousel = $(".owl-carousel-featured");
    if (objowlcarousel.length > 0) {
        objowlcarousel.owlCarousel({
            items: 5,
            lazyLoad: true,
            pagination: false,
			 loop: true,
            autoPlay: false,
            navigation: true,
            stopOnHover: true,
			navigationText: ["<i class='mdi mdi-chevron-left'></i>", "<i class='mdi mdi-chevron-right'></i>"]
        });
    }
	
	// ===========Category Owl Carousel============
    var objowlcarousel = $(".owl-carousel-category");
    if (objowlcarousel.length > 0) {
        objowlcarousel.owlCarousel({
            items: 8,
            lazyLoad: true,
            pagination: false,
			 loop: true,
            autoPlay: 2000,
            navigation: true,
            stopOnHover: true,
			navigationText: ["<i class='mdi mdi-chevron-left'></i>", "<i class='mdi mdi-chevron-right'></i>"]
        });
    }

	// ===========Right Sidebar============
	$('[data-toggle="offcanvas"]').on('click', function () {
        $('body').toggleClass('toggled');
	});  
	
    // ===========Slider============
    var mainslider = $(".owl-carousel-slider");
    if (mainslider.length > 0) {
        mainslider.owlCarousel({
            items: 1,
            lazyLoad: true,
            pagination: true,
            autoPlay: 4000,
			 loop: true,
			singleItem: true,
            navigation: true,
            stopOnHover: true,
			navigationText: ["<i class='mdi mdi-chevron-left'></i>", "<i class='mdi mdi-chevron-right'></i>"]
        });
    }

    // ===========Select2============
    $('select').select2();

    // ===========Tooltip============
    $('[data-toggle="tooltip"]').tooltip()

    // ===========Single Items Slider============	
    var sync1 = $("#sync1");
    var sync2 = $(".flex-control-nav");
    sync1.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        pagination: false,
        navigation: true,
       autoPlay: 2500,
	   navigationText: ["<i class='mdi mdi-chevron-left'></i>", "<i class='mdi mdi-chevron-right'></i>"],
        afterAction: syncPosition,
        responsiveRefreshRate: 200,
    });
    sync2.owlCarousel({
        items: 5,
        navigation: true,
        itemsDesktop: [1199, 10],
        itemsDesktopSmall: [979, 4],
        itemsTablet: [768, 4],
        itemsMobile: [479, 4],
        pagination: false,
		navigationText: ["<i class='mdi mdi-chevron-left'></i>", "<i class='mdi mdi-chevron-right'></i>"],
        responsiveRefreshRate: 100,
        afterInit: function(el) {
            el.find(".owl-item").eq(0).addClass("synced");
        }
    });
    function syncPosition(el) {
        var current = this.currentItem;
        $("#sync2")
            .find(".owl-item")
            .removeClass("synced")
            .eq(current)
            .addClass("synced")
        if ($("#sync2").data("owlCarousel") !== undefined) {
            center(current)
        }
    }
    $("#sync2").on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).data("owlItem");
        sync1.trigger("owl.goTo", number);
    });
	
    function center(number) {
        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
        var num = number;
        var found = false;
        for (var i in sync2visible) {
            if (num === sync2visible[i]) {
                var found = true;
            }
        }
        if (found === false) {
            if (num > sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", num - sync2visible.length + 2)
            } else {
                if (num - 1 === -1) {
                    num = 0;
                }
                sync2.trigger("owl.goTo", num);
            }
        } else if (num === sync2visible[sync2visible.length - 1]) {
            sync2.trigger("owl.goTo", sync2visible[1])
        } else if (num === sync2visible[0]) {
            sync2.trigger("owl.goTo", num - 1)
        }
    }
	
	init_klbclass();

});

	/*===================================*
	 Klb Class
	*===================================*/
	function init_klbclass() {
		$("form.wpcf7-form").addClass( "contact-form" );
		$("form.wpcf7-form input[type='text'], form.wpcf7-form textarea, form.wpcf7-form input[type='email']").addClass( "form-control" );
		$("form.wpcf7-form input[name='your-name'], form.wpcf7-form input[type='email']" ).closest('p').wrapAll( "<div class='row'></div>" );
		$("form.wpcf7-form input[name='your-name'], form.wpcf7-form input[type='email']" ).closest('p').wrap( "<div class='col-md-6'><div class='form-group'></div></div>" );
		$("form.wpcf7-form input[name='your-subject']" ).closest('p').wrap( "<div class='form-group '></div>" );
		$("form.wpcf7-form textarea" ).closest('p').wrap( "<div class='form-group'></div>" );
		$("form.wpcf7-form input[type='submit']").addClass( "btn btn-success" );


		$(".comment-form input[type='text'], .comment-form textarea, .comment-form input[type='email']").addClass( "form-control" );
		$(".comment-form input[type='submit']").addClass( "btn btn-secondary" );
		
		$("input[type='password']").addClass( "form-control" );
		$(".post-password-form input[type='submit']").addClass( "btn btn-secondary" );
		
		$(".page img.alignleft[width='160']").closest("p").addClass( "klbclear" );
		
		
		$(".lwa input[type='text']").addClass( "form-control" );
		$(".lwa input[type='submit']").addClass( "btn btn-secondary" );
		$('a.lwa-links-register').on('click', function() {
		  $('#bd-example-modal').modal('hide');
		});

		$('a.dropdown-toggle').on('touchstart', function(e) {
		  e.stopPropagation();
		});

	}
	
})(jQuery);