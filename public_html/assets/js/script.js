// FAQ Slider
var faqSlider = new Swiper('.faq-slider', {
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
            slidesPerView: 1.3,
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

// service tab stick function
var navigationStick = function () {
    var navLinks = document.querySelectorAll('.tab-button'),
        nav = document.querySelector('.services-tabs'),
        stick = document.querySelector('.services-tabs .stick'),
        result,
        activeElem;

    navLinks.forEach(function (elem) {
        if (elem.classList.contains('current')) {
            result = elem.getBoundingClientRect().left - nav.getBoundingClientRect().left;
            stick.style.width = elem.clientWidth + 'px';
            stick.style.transform = 'translate(' + result + 'px,0)';
            activeElem = elem;
        }
        elem.addEventListener('click', function () {
            result = this.getBoundingClientRect().left - nav.getBoundingClientRect().left;
            stick.style.width = this.clientWidth + 'px';
            stick.style.transform = 'translate(' + result + 'px,0)';
        })
    })
}
navigationStick();

$(window).resize(function () {
    setTimeout(function () {
        navigationStick();
    }, 500);
});



// Services Slide Toggle
function serviceF() {
    $('.service-box').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('.service-box').find('.service-description').slideUp(500);
            $(this).find('.service-description').slideDown(500);
            $('.service-box').removeClass('active');
            $(this).addClass('active');
            return
        } else {
            $(this).find('.service-description').slideUp(500);
            $(this).removeClass('active');
        }
    });
}
serviceF();


// Package compare hover
var compare = function () {
    $('.compare-box').hover(function () {
        if (window.innerWidth > 1024) {
            $(this).closest('.package-box').find('.package-info').css('transform', 'translateY(-45px)');
        }
    })

    $('.compare-box').mouseleave(function () {
        if (window.innerWidth > 1024) {
            $(this).closest('.package-box').find('.package-info').css('transform', 'translateY(0px)');
        }
    })
}
compare();

// package box width
if ($('.package-box').length === 1) {
    $('.packages').css('width', 'max-content');
}


// choosePolicy Slide toggle
function choosePolicy() {
    $('.policy-list-item').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('.policy-list-item').find('.item-hidden').slideUp(500);
            $(this).find('.item-hidden').slideDown(500);
            $(this).css('padding-bottom', '41px');
            $('.policy-list-item').removeClass('active');
            $(this).addClass('active');
            return
        } else {
            $(this).find('.item-hidden').slideUp(500);
            $(this).removeClass('active');
            $(this).css('padding-bottom', '23px');
        }
    });
}
choosePolicy();


// parallax
var kufuna_parallax = function () {
    if ($(window).innerWidth() > 1024) {
        var a = $('.imgg');
        var b = $(window).innerHeight();
        var c = $(window).scrollTop();
        var e = $('.imgg img');
        a.each(function (i) {
            var c = $(window).scrollTop();
            if ($(a[i]).offset().top - b < c) {
                $(a[i]).find('img').css({ transform: 'translateY(' + ((c - ($(a[i]).offset().top - b)) / 6) + 'px)' })
            }
        })
    } else {
        $('.img').find('img').css({ transform: 'translateY(0)' })
    }
}
kufuna_parallax();
$(window).resize(kufuna_parallax);
$(window).scroll(kufuna_parallax);









