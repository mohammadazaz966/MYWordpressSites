document.addEventListener('DOMContentLoaded', function () {
    new Splide('.splide.splide-carousel', {
        perPage: 1,
        loop: 'fade',
        pauseOnHover: true,
        direction: 'ltr',
        focus: 'center',
        perMove: 1,
        pagination: true,
        autoplay: true,
        arrows: true,
        rewind: true,
        padding: 0,
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

});