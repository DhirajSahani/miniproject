/**
 * Theme JS file.
 */
jQuery(function($) {
  "use strict";

  // Search focus handler
  function searchFocusHandler() {
    const searchFirstTab = $('.inner_searchbox input[type="search"]');
    const searchLastTab = $('button.search-close');

    $(".open-search").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $('body').addClass("search-focus");
      searchFirstTab.focus();
    });

    $("button.search-close").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      $('body').removeClass("search-focus");
      $(".open-search").focus();
    });

    // Redirect last tab to first input
    searchLastTab.on('keydown', function(e) {
      if ($('body').hasClass('search-focus') && e.which === 9 && !e.shiftKey) {
        e.preventDefault();
        searchFirstTab.focus();
      }
    });

    // Redirect first shift+tab to last input
    searchFirstTab.on('keydown', function(e) {
      if ($('body').hasClass('search-focus') && e.which === 9 && e.shiftKey) {
        e.preventDefault();
        searchLastTab.focus();
      }
    });

    // Allow escape key to close menu
    $('.inner_searchbox').on('keyup', function(e) {
      if ($('body').hasClass('search-focus') && e.keyCode === 27) {
        $('body').removeClass('search-focus');
        searchLastTab.focus();
      }
    });
  }

  // Call the search focus handler
  searchFocusHandler();

  // Preloader
  $(document).ready(function() {
    setTimeout(function() {
      $(".loader").fadeOut("slow");
    }, 1000);
  });

  // Scroll to top
  $(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() >= 50) {
        $('#return-to-top').fadeIn(200);
      } else {
        $('#return-to-top').fadeOut(200);
      }
    });
    $('#return-to-top').click(function() {
      $('body,html').animate({
        scrollTop: 0
      }, 500);
    });
  });

  // Slider
  $(document).ready(function() {
    $('#slider .owl-carousel').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      dots: false,
      rtl: false,
      items: 1,
      autoplay: false,
      autoplayTimeout: 3000,
      autoplayHoverPause: true,
    });
  });

});


// Define functions in the global scope
function real_estate_manager_menu_open_nav() {
  jQuery(".sidenav").addClass('open');
}

function real_estate_manager_menu_close_nav() {
  jQuery(".sidenav").removeClass('open');
}

// tabs
jQuery(document).ready(function($) {
    // Hide all tabs and show the first tab by default
    $('.tabcontent').hide().first().show();
    $('.tablinks').first().addClass('active');

    // Tab click event
    $('.tablinks').on('click', function(e) {
        e.preventDefault();

        // Remove active class and hide all tab contents
        $('.tablinks').removeClass('active');
        $('.tabcontent').hide();

        // Activate the clicked tab and show its content
        $(this).addClass('active');
        const tabId = $(this).data('tab');
        $('#' + tabId).show();
    });
});

