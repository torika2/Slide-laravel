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


// Provider Clinic Tabs

$(document).ready(function () {
    $('.tab-link').click(function () {
        var tab_id = $(this).attr('data-tab');
        $('.tab-link').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })
})


// Provider Clinics Slider
var clinicsSlider1 = new Swiper('.individual', {
    slidesPerView: 4,
    spaceBetween: 60,
    breakpoints: {
        300: {
            slidesPerView: 1.19,
            spaceBetween: 15,
        },
        768: {
            spaceBetween: 15,
        },
        1024: {
            spaceBetween: 30,
        },
        1366: {
            spaceBetween: 60,
        },
        1680: {
            spaceBetween: 60,
        },
        1900: {
            slidesPerView: 4,
        },

    }
});


$('#tabCorporate').click(function () {
    setTimeout(function () {
        var clinicsSlider2 = new Swiper('.corporate', {
            slidesPerView: 4,
            spaceBetween: 60,
            breakpoints: {
                300: {
                    slidesPerView: 1.19,
                    spaceBetween: 15,
                },
                768: {
                    spaceBetween: 15,
                },
                1024: {
                    spaceBetween: 30,
                },
                1366: {
                    spaceBetween: 60,
                },
                1680: {
                    spaceBetween: 60,
                },
                1900: {
                    slidesPerView: 4,
                },

            }
        });
    }, 100);
});

// Service scheme Tabs
$(document).ready(function () {
    $('.tab-button').click(function () {
        var tab_id = $(this).attr('data-tab');
        $('.tab-button').removeClass('current');
        $('.service-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    })
})


// Services Slide Toggle
function serviceF() {
    $('.service-box').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('.service-box').find('.service-description').slideUp(500);
            $(this).find('.service-description').slideDown(500)
            $('.service-box').removeClass('active')
            $(this).addClass('active')
            return
        } else {
            $(this).find('.service-description').slideUp(500)
            $(this).removeClass('active')
        }
    });
}
serviceF();


