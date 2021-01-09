!(function ($) {
    "use strict";

    document.addEventListener('DOMContentLoaded', function () {
        $('.menu-toggle').on('click', function () {
            $('#sidenavbar').toggleClass('active');
        });
        $('.menu-toggle-close').on('click', function () {
            $('#sidenavbar').toggleClass('active');
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        $('#sidenavbar nav ul li.menu-item-has-children').on('click', function () {
            $('ul').toggleClass('visible');
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        $('.search-open').on('click', function () {
            $('#topnavbar form').fadeIn('slow');
            $('.search-open').fadeOut('slow');
            $('.search-close').fadeIn('slow');
        });

        $('.search-close').on('click', function () {
            $('#topnavbar form').fadeOut('slow');
            $('.search-open').fadeIn('slow');
            $('.search-close').fadeOut('slow');
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        if ($('#preloader').length) {
            $('#preloader').delay(100).fadeOut('slow', function () {
                $(this).remove();
            });
        }
    });


    document.addEventListener('DOMContentLoaded', function () {
        $('#topnavbar nav ul li').on('click', function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });
        $('#sidenavbar nav ul li').on('click', function () {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');
        });
    });


    //Second Pagination
    document.addEventListener('DOMContentLoaded', function () {
        var items = jQuery("#headerblogpost6 li.author-blogpost-list-item .card.style1");
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


    //Second Pagination
    document.addEventListener('DOMContentLoaded', function () {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out-back",
            once: true
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
        new Splide('#headercarousel .header-carousel', {
            perPage: 1,
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
                    perPage: 1,
                },
            }

        }).mount();

        new Splide('#headerblogpost3 .splide', {
            perPage: 3,
            type: 'loop',
            pauseOnHover: true,
            direction: 'ltr',
            focus: 'center',
            perMove: 1,
            pagination: true,
            autoplay: false,
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
                    perPage: 1,
                },
            }
        }).mount();



        new Splide('#headerblogpost2 .splide', {
            perPage: 1,
            loop: 'fade',
            pauseOnHover: true,
            direction: 'ltr',
            focus: 'center',
            perMove: 1,
            pagination: false,
            autoplay: false,
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
                    perPage: 1,
                },
            }
        }).mount();



        new Splide('#headerblogpost6 .splide', {
            perPage: 2,
            loop: 'fade',
            pauseOnHover: true,
            direction: 'ltr',
            focus: 'center',
            perMove: 1,
            pagination: false,
            autoplay: false,
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

        new Splide('.related-post .splide', {
            perPage: 3,
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


    document.addEventListener('DOMContentLoaded', function () {

        new Splide('.related-post .splide', {
            perPage: 2,
            loop: 'fade',
            pauseOnHover: true,
            direction: 'ltr',
            focus: 'center',
            perMove: 1,
            pagination: true,
            autoplay: false,
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

    jQuery(document).ready(function () {
        var owl = $("#owl-example");
        owl.owlCarousel({
            // Most important owl features
            items: 1,
            rewind: true,
            nav: true,
            dots: true,
            autoplay: false,
            mouseDrag: false,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                360: {
                    items: 1,
                },
                411: {
                    items: 1,
                },
                320: {
                    items: 1,
                },
                375: {
                    items: 1,
                },
                414: {
                    items: 1,
                },
                768: {
                    items: 1,
                },
                1024: {
                    items: 1,
                },
            }
        });
    });

})(jQuery);