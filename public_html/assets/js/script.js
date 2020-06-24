
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
// var providerSlider = function () {
//     var clinicsSlider = new Swiper('.provider-clinics-slider', {
//         slidesPerView: 4,
//         spaceBetween: 60,
//         breakpoints: {
//             300: {
//                 slidesPerView: 1.3,
//                 spaceBetween: 15,
//             },
//             768: {
//                 spaceBetween: 15,
//             },
//             1024: {
//                 spaceBetween: 30,
//             },
//             1366: {
//                 spaceBetween: 60,
//             },
//             1680: {
//                 spaceBetween: 60,
//             },
//             1900: {
//                 slidesPerView: 4,
//             },

//         }
//     });
// }
// providerSlider();

// $(window).resize(function () {
//     setTimeout(function () {
//         providerSlider();
//     }, 100);
// });

var clinicsSwiper = undefined;
function clinicsSlider() {
    var screenWidth = $(window).width();
    if (screenWidth < 767 && clinicsSwiper == undefined) {
        clinicsSwiper = new Swiper('.provider-clinics-slider', {
            slidesPerView: 1.3,
            spaceBetween: 15,
            freeMode: true
        });
    } else if (screenWidth > 766 && clinicsSwiper != undefined) {
        clinicsSwiper.destroy();
        clinicsSwiper = undefined;
        jQuery('.swiper-wrapper').removeAttr('style');
        jQuery('.swiper-slide').removeAttr('style');
    }
}


//Swiper plugin initialization on window resize
$(window).on('resize', function () {
    setTimeout(function () {
        clinicsSlider();
    }, 100);
});
//Swiper plugin initialization
clinicsSlider();




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
var tabSwitch = function () {
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
tabSwitch();

$(window).resize(function () {
    setTimeout(function () {
        tabSwitch();
    }, 500);
});



// Services Slide Toggle
function serviceF() {
    $('.service-box').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('.service-box').find('.service-description').slideUp(350);
            $(this).find('.service-description').slideDown(350);
            $('.service-box').removeClass('active');
            $(this).addClass('active');
            return
        } else {
            $(this).find('.service-description').slideUp(350);
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


var details = function () {
    $('.info-icon').hover(function () {
        if (window.innerWidth > 1024) {
            $(this).closest('.package-box').find('.package-info').css('transform', 'translateY(-45px)');
        }
    })

    $('.info-icon').mouseleave(function () {
        if (window.innerWidth > 1024) {
            $(this).closest('.package-box').find('.package-info').css('transform', 'translateY(0px)');
        }
    })
}
details();


// package box width
if ($('.package-box').length === 1) {
    $('.packages').css('width', 'max-content');
}


// choosePolicy Slide toggle
function choosePolicy() {
    $('.policy-list-item').on('click', function () {
        if (!$(this).hasClass('active')) {
            $('.policy-list-item').find('.item-hidden').slideUp(350);
            $(this).find('.item-hidden').slideDown(350);
            $('.policy-list-item').removeClass('active');
            $(this).addClass('active');
            return
        } else {
            $(this).find('.item-hidden').slideUp(350);
            $(this).removeClass('active');
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

$(window).resize(function () {
    setTimeout(function () {
        kufuna_parallax();
    }, 100);
});

$(window).scroll(kufuna_parallax);






// currency switch
var currencySwitch = function () {
    var navLinks = document.querySelectorAll('.currency-tab'),
        nav = document.querySelector('.currency-box.box-1'),
        stick = document.querySelector('.currency-box.box-1 .currency-stick'),
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
            $(this).addClass('current');
            $(this).siblings().removeClass('current');
        })
    })
}
currencySwitch();

$(window).resize(function () {
    setTimeout(function () {
        currencySwitch();
    }, 500);
});

var curSwitch = function () {
    var navLinks = document.querySelectorAll('.cur-tab'),
        nav = document.querySelector('.currency-box.box-2'),
        stick = document.querySelector('.currency-box.box-2 .currency-stick'),
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
            $(this).addClass('current');
            $(this).siblings().removeClass('current');
        })
    })
}
curSwitch();

$(window).resize(function () {
    setTimeout(function () {
        curSwitch();
    }, 500);
});



/*script for select*/

var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    if (selElmnt.options[selElmnt.selectedIndex].hasAttribute('value')) {
        a.setAttribute('data-value', selElmnt.options[selElmnt.selectedIndex].getAttribute('value'));
    }
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < selElmnt.length; j++) {
        /*for each option in the original select element,
        create a new DIV that will act as an option item:*/
        c = document.createElement("DIV");
        c.setAttribute('data-value', selElmnt.options[j].getAttribute('value'));
        c.innerHTML = selElmnt.options[j].innerHTML;
        c.addEventListener("click", function (e) {
            const customSelect = c.parentElement.parentElement;
            customSelect.classList.remove("select-error");
            customSelect.classList.add("select-success");
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            h = this.parentNode.previousSibling;
            for (i = 0; i < s.length; i++) {
                if (s.options[i].innerHTML == this.innerHTML) {
                    s.selectedIndex = i;
                    if (this.hasAttribute('data-value')) {
                        h.setAttribute('data-value', this.getAttribute('data-value'))
                    }
                    h.innerHTML = this.innerHTML;
                    y = this.parentNode.getElementsByClassName("same-as-selected");
                    for (k = 0; k < y.length; k++) {
                        y[k].removeAttribute("class");
                    }
                    this.setAttribute("class", "same-as-selected");
                    break;
                }
            }
            h.click();
        });
        b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function (e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        if (this.hasAttribute('data-value')) {
            $(this).siblings('input').val(this.getAttribute('data-value'));
            if ($(this).siblings('input').attr('data-textvalue')) {
                $(this).siblings('input').attr('data-text', this.innerText);

            }

        } else {
            $(this).siblings('input').val(this.innerText);
        }
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");

    });
}
function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
        if (elmnt == y[i]) {
            arrNo.push(i)
        } else {
            y[i].classList.remove("select-arrow-active");
        }
    }
    for (i = 0; i < x.length; i++) {
        if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
        }
    }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);





// packages slide down on click

// $(document).ready(function () {
var packagesSlideDown = function () {
    $('.details-btn').click(function () {
        if (!$(this).hasClass("active")) {
            $(this).addClass("active");
        } else {
            $(this).removeClass("active");
        }
        $(this).siblings('.packagesBox').find(".package-cont").slideToggle(600);
    });
}
packagesSlideDown();



// show calculator result
$('#calculator1btn').click(function () {
    $(this).css({ "opacity": "0", "pointer-events": "none" });
    $(this).siblings('#calculated1').css({ "opacity": "1", "visibility": "visible", "pointer-events": "all", "transform": "translate(-50%, 0)" });
})

var compare = function () {
    $('.compare-box').hover(function () {
        if (window.innerWidth > 1024) {
            $(this).closest('.package-box').find('.package-info').css('transform', 'translateY(-45px)');
        }
    })
};


// Faq List Slider
var mySwiper = undefined;
function initSwiper() {
    var screenWidth = $(window).width();
    if (screenWidth < 767 && mySwiper == undefined) {
        mySwiper = new Swiper('.faq-list', {
            slidesPerView: 'auto',
            spaceBetween: 50,
            freeMode: true
        });
    } else if (screenWidth > 766 && mySwiper != undefined) {
        mySwiper.destroy();
        mySwiper = undefined;
        jQuery('.swiper-wrapper').removeAttr('style');
        jQuery('.swiper-slide').removeAttr('style');
    }
}

//Swiper plugin initialization
initSwiper();

//Swiper plugin initialization on window resize
$(window).on('resize', function () {
    initSwiper();
});



// Insurance Tabs

// $(document).ready(function () {
//     $('.tab-link').click(function () {
//         var tab_id = $(this).attr('data-tab');
//         $('.tab-link').removeClass('current');
//         $('.tab-content').removeClass('current');

//         $(this).addClass('current');
//         $("#" + tab_id).addClass('current');
//     })
// })


// Provider Clinics Slider
var clinicsSlider1 = new Swiper('.individual', {
    slidesPerView: 3,
    spaceBetween: 60,
    breakpoints: {
        300: {
            slidesPerView: 1.19,
            spaceBetween: 15,
        },
        768: {
            slidesPerView: 2,
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
            slidesPerView: 3,
        },

    }
});


$('#tabCorporate').click(function () {
    setTimeout(function () {
        var clinicsSlider2 = new Swiper('.corporate', {
            slidesPerView: 3,
            spaceBetween: 60,
            breakpoints: {
                300: {
                    slidesPerView: 1.19,
                    spaceBetween: 15,
                },
                768: {
                    spaceBetween: 15,
                    slidesPerView: 2,
                },
                1024: {
                    spaceBetween: 30,
                    slidesPerView: 3,
                },
                1366: {
                    spaceBetween: 60,
                    slidesPerView: 3,
                },
                1680: {
                    spaceBetween: 60,
                    slidesPerView: 3,
                },
                1900: {
                    slidesPerView: 3,
                },

            }
        });
    }, 100);
});


// service tab stick function
var insuranceSwitch = function () {
    var navLinks = document.querySelectorAll('.tab-link'),
        nav = document.querySelector('.insurance-tabs'),
        stick = document.querySelector('.insurance-tabs .stick'),
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
insuranceSwitch();

$(window).resize(function () {
    setTimeout(function () {
        insuranceSwitch();
    }, 500);
});
