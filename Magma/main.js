/* Set the width of the side navigation to 250px */
// Init AOS
function aos_init() {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out-back",
        once: true
    });
}

$(window).on('load', function () {
    aos_init();
    Pagination_init();
    Pagination_init_2();
    myCarousel();

});

// Preloader

// Preloader
$(window).on('load', function () {
    if ($('#preloader').length) {
        $('#preloader').delay(100).fadeOut('slow', function () {
            $(this).remove();
        });
    }
});

function openNav() {
    document.getElementById("mySidenav").classList.toggle('active');
}

function closeNav() {
    document.getElementById("mySidenav").classList.remove('active');
}

/* Set Splide Blog Carousel */

new Splide('.blog-carousel-splide-m-1', {
    perPage: 4,
    direction: 'ltr',
    focus: 'center',
    perMove: 1,
    pagination: false,
    autoplay: true,
    arrows: true,
    classes: {
        arrows: 'my_arrows',
        arrow: 'my_arrow',
        prev: 'my_arrow_prev',
        next: 'my_arrow_next',
    },
    breakpoints: {
        280: {
            perPage: 1,
            cover: true,
            focus: 'center',
        },
        320: {
            perPage: 1,
            cover: true,
            focus: 'center',
        },
        375: {
            perPage: 1,
            focus: 'center',
            cover: true,
        },
        411: {
            perPage: 1,
            focus: 'center',
            cover: true,
        },
        540: {
            perPage: 1,
            cover: true,
        },
        768: {
            perPage: 2,
            cover: true,
        },
        1024: {
            perPage: 3,
            gap: 35,
            cover: true,
        },
    }
}).mount();

new Splide('.blog-carousel-splide-m-2', {
    perPage: 2,
    direction: 'ltr',
    focus: 'center',
    perMove: 1,
    pagination: false,
    autoplay: true,
    arrows: true,
    classes: {
        arrows: 'my_arrows',
        arrow: 'my_arrow',
        prev: 'my_arrow_prev',
        next: 'my_arrow_next',
    },
}).mount();

function myCarousel() {
    new Splide('.splide.splide-carousel', {
        type: 'fade',
        cover: true,
        perPage: 1,
        direction: 'ltr',
        focus: 'center',
        perMove: 1,
        pagination: true,
        autoplay: true,
        arrows: true,
        classes: {
            arrows: 'my_arrows',
            arrow: 'my_arrow',
            prev: 'my_arrow_prev',
            next: 'my_arrow_next',
        },
    }).mount();
}

//Second Pagination 
function Pagination_init() {
    var items = $("#main-wrapper .main-blog-post-mb-5-a .main-blog-post-mb-5-a-card");
    var numItems = items.length;
    var perPage = 3;
    items.slice(perPage).hide();
    $('.pagination-container').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "Prev",
        nextText: "Next",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });
}

function Pagination_init_2() {
    var items = $("#main-row .archive-main-wrapper .archive-main-blog-post-mb-5-a .archive-main-blog-post-mb-5-a-card");
    var numItems = items.length;
    var perPage = 10;
    items.slice(perPage).hide();
    $('.pagination-container-2').pagination({
        items: numItems,
        itemsOnPage: perPage,
        prevText: "Prev",
        nextText: "Next",
        onPageClick: function (pageNumber) {
            var showFrom = perPage * (pageNumber - 1);
            var showTo = showFrom + perPage;
            items.hide().slice(showFrom, showTo).show();
        }
    });
}

// Back to top button
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
});

$('.back-to-top').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
});

//Highlight the active menu item
$('.nav-menu li a').on('click', function () {
    $('.nav-menu .active').removeClass('active');
    $(this).toggleClass('active');
})