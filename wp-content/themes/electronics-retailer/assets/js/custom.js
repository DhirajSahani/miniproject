// menus 
function electronics_retailer_menu_open_nav() {
    window.electronics_retailer_responsiveMenu=true;
    jQuery(".sidenav").addClass('show');
}
function electronics_retailer_menu_close_nav() {
    window.electronics_retailer_responsiveMenu=false;
    jQuery(".sidenav").removeClass('show');
}
jQuery(function($){
    "use strict";
    jQuery('.main-menu > ul').superfish({
        delay: 500,
        animation: {opacity:'show',height:'show'},
        speed: 'fast'
    });
});

jQuery(document).ready(function () {
    window.electronics_retailer_currentfocus=null;
    electronics_retailer_checkfocusdElement();
    var electronics_retailer_body = document.querySelector('body');
    electronics_retailer_body.addEventListener('keyup', electronics_retailer_check_tab_press);
    var electronics_retailer_gotoHome = false;
    var electronics_retailer_gotoClose = false;
    window.electronics_retailer_responsiveMenu=false;
    function electronics_retailer_checkfocusdElement(){
        if(window.electronics_retailer_currentfocus=document.activeElement.className){
            window.electronics_retailer_currentfocus=document.activeElement.className;
        }
    }
    function electronics_retailer_check_tab_press(e) {
        "use strict";
        // pick passed event or global event object if passed one is empty
        e = e || event;
        var activeElement;

        if(window.innerWidth < 999){
        if (e.keyCode == 9) {
            if(window.electronics_retailer_responsiveMenu){
            if (!e.shiftKey) {
                if(electronics_retailer_gotoHome) {
                    jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
                }
            }
            if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
                electronics_retailer_gotoHome = true;
            } else {
                electronics_retailer_gotoHome = false;
            }

        }else{

            if(window.electronics_retailer_currentfocus=="responsivetoggle"){
                jQuery( "" ).focus();
            }}}
        }
        if (e.shiftKey && e.keyCode == 9) {
        if(window.innerWidth < 999){
            if(window.electronics_retailer_currentfocus=="header-search"){
                jQuery(".responsivetoggle").focus();
            }else{
                if(window.electronics_retailer_responsiveMenu){
                if(electronics_retailer_gotoClose){
                    jQuery("a.closebtn.mobile-menu").focus();
                }
                if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
                    electronics_retailer_gotoClose = true;
                } else {
                    electronics_retailer_gotoClose = false;
                }

            }else{

            if(window.electronics_retailer_responsiveMenu){
            }}}}
        }
        electronics_retailer_checkfocusdElement();
    }
});

jQuery('document').ready(function($){
	// preloader
  setTimeout(function () {
		jQuery("#preloader").fadeOut("slow");
  },1000);

  // Sticky Header
  $(window).scroll(function(){
		var sticky = $('.header-sticky'),
			scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});
});

// Scroller
jQuery(document).ready(function () {
	jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.scrollup i').fadeIn();
    } else {
      jQuery('.scrollup i').fadeOut();
    }
	});
	jQuery('.scrollup i').click(function () {
    jQuery("html, body").animate({
      scrollTop: 0
    }, 600);
    return false;
	});
});

// ================= To hide the order tracking div after getting details Started
document.addEventListener('DOMContentLoaded', function () {
    const orderDetailsSection = document.querySelector('.woocommerce-order-details');

    if (orderDetailsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {

                    setTimeout(() => {
                        window.location.href = homePage.url;
                    }, 5000); 
                }
            });
        }, { threshold: 0.1 }); 

        observer.observe(orderDetailsSection);
    }
});

// product cat
jQuery(document).ready(function(){
    jQuery(".product-cat").hide();
jQuery("button.product-btn").click(function(){
    jQuery(".product-cat").toggle();
});
jQuery(document).click(function(event) {
    if (!jQuery(event.target).closest('.product-cat, .product-btn').length) {
        jQuery(".product-cat").hide();
    }
});
});

// Countdown
jQuery(document).ready(function($) {
$('.countdown-timer').each(function() {
    var $electronics_retailer_this = $(this);
    var saleEndDate = $electronics_retailer_this.data('sale-end');

    if (saleEndDate) {
        var countDownDate = new Date(saleEndDate * 1000).getTime();

        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var countdownHtml = `
                <div class="numbers">
                    <div class="count">${days}</div>
                    <div class="text">Day</div>
                </div>
                <div class="numbers">
                    <div class="count">${hours}</div>
                    <div class="text">Hrs</div>
                </div>
                <div class="numbers">
                    <div class="count">${minutes}</div>
                    <div class="text">Min</div>
                </div>
                <div class="numbers">
                    <div class="count">${seconds}</div>
                    <div class="text">Sec</div>
                </div>
            `;

            $electronics_retailer_this.find('#countdown').html(countdownHtml);

            if (distance < 0) {
                clearInterval(x);
                $electronics_retailer_this.find('#countdown').html("SALE ENDED");
            }
        }, 1000);
    }
});
});

// category slider
jQuery(document).ready(function ($) {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            },
            1200: {
                items: 6
            }
        }
    });
});
