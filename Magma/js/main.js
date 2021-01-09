!(function ($) {
    "use strict";

    jQuery(window).on('load', function () {
        jQuery('.search-open').on('click', function () {
            $('.topbar-search-form').fadeIn('slow');
            $('.search-close').show('slow');
            $('.search-open').hide('slow');
        });
    });

    jQuery(window).on('load', function () {
        jQuery('.search-close').on('click', function () {
            $('.topbar-search-form').fadeOut('slow');
            $('.search-open').show('slow');
            $('.search-close').hide('slow');
        });
    });

    jQuery(window).on('load', function () {
        jQuery('.menu-toggle').on('click', function () {
            $('#mySidenav').toggleClass('active');
        });
        jQuery('.menu-toggle-close').on('click', function () {
            $('#mySidenav').toggleClass('active');
        });
        jQuery('#mySidenav ul li.menu-item-has-children').on('click', function () {
            $('ul').toggleClass('visible');
        });
        jQuery('#mySidenav li').on('click', function () {
            $('#mySidenav li:hover>ul').show('slow');
        });
    });
	
    jQuery(window).on('load', function () {
        var items = jQuery(".first-block.col-md-4");
        var numItems = items.length;
        var perPage = 9;
        items.slice(perPage).hide();
        jQuery('.pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "Prev",
            nextText: "Next",
            cssStyle: 'dark-theme',
            onPageClick: function (pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
            }
        });
    });
  
	  // Preloader
  jQuery(window).on('load', function() {
    if ($('#preloader').length) {
      $('#preloader').delay(100).fadeOut('slow', function() {
        $(this).remove();
      });
    }
  });

    jQuery(window).on('load', function () {
        new Splide('#blog-carousel .splide', {
            perPage: 4,
            type: 'loop',
            pauseOnHover: true,
            direction: 'ltr',
            focus: 'center',
            perMove: 1,
            pagination: true,
            autoplay: true,
            arrows: true,
            rewind: true,
            classes: {
                arrows: 'my_arrows',
                arrow: 'my_arrow',
                prev: 'my_arrow_prev',
                next: 'my_arrow_next',
            },
            breakpoints: {
                280: {
                    perPage: 1,
                },
                320: {
                    perPage: 1,
                },
                375: {
                    perPage: 1,
                },
                411: {
                    perPage: 1,
                },
                540: {
                    perPage: 1,
                },
                768: {
                    perPage: 2,
                },
                1024: {
                    perPage: 3,
                },
            }
        }).mount();

        new Splide('#main-wrapper .splide.main-carousel', {
            perPage: 2,
            type: 'loop',
            pauseOnHover: true,
            direction: 'ltr',
            focus: 'center',
            perMove: 1,
            pagination: true,
            autoplay: true,
            arrows: true,
            rewind: true,
            classes: {
                arrows: 'my_arrows',
                arrow: 'my_arrow',
                prev: 'my_arrow_prev',
                next: 'my_arrow_next',
            },
            breakpoints: {
                280: {
                    perPage: 1,
                },
                320: {
                    perPage: 1,
                },
                375: {
                    perPage: 1,
                },
                411: {
                    perPage: 1,
                },
                540: {
                    perPage: 1,
                },
                768: {
                    perPage: 1,
                },
                1024: {
                    perPage: 1,
                },
            }
        }).mount();

    });

    document.addEventListener('DOMContentLoaded', function () {
        new Splide('.related-post .splide', {
            perPage: 2,
            loop: 'fade',
            pauseOnHover: true,
            direction: 'ltr',
            focus: 'center',
            perMove: 1,
            pagination: true,
            autoplay: true,
            arrows: true,
            rewind: true,
            classes: {
                arrows: 'my_arrows',
                arrow: 'my_arrow',
                prev: 'my_arrow_prev',
                next: 'my_arrow_next',
            },
            breakpoints: {
                360: {
                    perPage: 1,
                },
                411: {
                    perPage: 1,
                },
                320: {
                    perPage: 1,
                },
                375: {
                    perPage: 1,
                },
                414: {
                    perPage: 1,
                },
                768: {
                    perPage: 1,
                },
                1024: {
                    perPage: 2,
                },
            }
        }).mount();

    });

})(jQuery);