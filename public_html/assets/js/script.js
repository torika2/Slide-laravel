// FAQ Slider
var mediationSlider = new Swiper('.faq-slider', {
    slidesPerView: 2.89,
    spaceBetween: 60,
    breakpoints: {
        300: {
            slidesPerView: 1.19,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 15,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        1366: {
            slidesPerView: 3,
        },
        1680: {
            slidesPerView: 2.98,
        },
        1900: {
            slidesPerView: 2.89,
        },

    }
});
