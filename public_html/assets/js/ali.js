$(document).ready(function () {

    function subMenuSlider() {
        var mySwiper = new Swiper('.swiper-subMenu', {
            speed: 1000,
            slidesPerView: 3,
            spaceBetween: 60,
            watchOverflow: true,
            breakpoints: {
                320: {
                    spaceBetween: 15,
                    slidesPerView: 1.145
                },
                768: {
                    spaceBetween: 15,
                    slidesPerView: 3
                },
                1024: {
                    spaceBetween: 33,
                    slidesPerView: 3
                },
                1366: {
                    spaceBetween: 60,
                    slidesPerView: 3
                },
                1599: {
                    spaceBetween: 60,
                    slidesPerView: 3
                },
                1900: {
                    spaceBetween: 60,
                    slidesPerView: 3
                }
            }
        });
    }

    function brandPlatformSlider() {
        var mySwiper = new Swiper('.brand-platform-slider', {
            speed: 1000,
            slidesPerView: 3,
            spaceBetween: 31,
            watchOverflow: true,
            breakpoints: {
                320: {
                    spaceBetween: 15,
                    slidesPerView: 1.145
                },
                768: {
                    spaceBetween: 15,
                    slidesPerView: 2.145
                },
                1024: {
                    spaceBetween: 31,
                    slidesPerView: 3
                },
                1366: {
                    spaceBetween: 31,
                    slidesPerView: 3
                },
                1599: {
                    spaceBetween: 31,
                    slidesPerView: 3
                },
                1900: {
                    spaceBetween: 31,
                    slidesPerView: 3
                }
            }
        });
    }

    function storiesSlider() {
        var mySwiper = new Swiper('.stories-slider', {
            speed: 1000,
            slidesPerView: 3,
            spaceBetween: 60,
            watchOverflow: true,
            breakpoints: {
                320: {
                    spaceBetween: 15,
                    slidesPerView: 1
                },
                768: {
                    spaceBetween: 15,
                    slidesPerView: 3
                },
                1024: {
                    spaceBetween: 30,
                    slidesPerView: 3
                },
                1366: {
                    spaceBetween: 60,
                    slidesPerView: 3
                },
                1599: {
                    spaceBetween: 60,
                    slidesPerView: 3
                },
                1900: {
                    spaceBetween: 60,
                    slidesPerView: 3
                }
            }
        });
    }


    function newsOuterSlider() {
        var mySwiper = new Swiper('.newsOuter-slider', {
            speed: 1000,
            slidesPerView: 2,
            spaceBetween: 60,
            breakpoints: {
                320: {
                    spaceBetween: 15,
                    slidesPerView: 1.15,
                    touchRatio: 1
                },
                768: {
                    spaceBetween: 15,
                    slidesPerView: 1.3325,
                    touchRatio: 1
                },
                1024: {
                    spaceBetween: 30,
                    slidesPerView: 2,
                    touchRatio: 0
                },
                1366: {
                    spaceBetween: 60,
                    slidesPerView: 2,
                    touchRatio: 0
                },
                1599: {
                    spaceBetween: 60,
                    slidesPerView: 2,
                    touchRatio: 0
                },
                1900: {
                    spaceBetween: 60,
                    slidesPerView: 2,
                    touchRatio: 0
                }
            }
        });
    }


    function directionSlider() {
        var mySwiper = new Swiper('.direction-slider', {
            speed: 1000,
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                768: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                1366: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                1599: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                1900: {
                    slidesPerView: 1,
                    spaceBetween: 30
                }
            }
        });
    }

    function bonusSlider() {
        var mySwiper = new Swiper('.bonus-slider', {
            speed: 1000,
            slidesPerView: 4,
            spaceBetween: 60,
            watchOverflow: true,
            breakpoints: {
                320: {
                    slidesPerView: 1.15,
                    spaceBetween: 15
                },
                768: {
                    slidesPerView: 2.15,
                    spaceBetween: 30
                },
                1024: {
                    spaceBetween: 30,
                    slidesPerView: 4
                },
                1366: {
                    spaceBetween: 60,
                    slidesPerView: 4
                },
                1599: {
                    spaceBetween: 60,
                    slidesPerView: 4
                },
                1900: {
                    spaceBetween: 60,
                    slidesPerView: 4
                }
            }
        });
    }

    function packagesSlider() {
        var mySwiper = new Swiper('.packages-slider', {
            speed: 1000,
            slidesPerView: "auto",
            spaceBetween: 0,
            navigation: {
                prevEl: '.swiper-button-prev-compare',
                nextEl: '.swiper-button-next-compare',
            },
            watchOverflow: true,
            breakpoints: {
                320: {
                    slidesPerView: 1.09,
                    spaceBetween: 10,
                },
                768: {
                    // slidesPerView: "auto",
                    // spaceBetween: 0,
                },
                1024: {
                    // slidesPerView: "auto",
                    // spaceBetween: 0,
                },
                1366: {
                    // slidesPerView: "auto",
                    // spaceBetween: 0,
                },
                1599: {
                    // slidesPerView: "auto",
                    // spaceBetween: 0,
                },
                1900: {
                    // slidesPerView: "auto",
                    // spaceBetween: 0,
                }
            }

        });
    }

    packagesSlider();
    bonusSlider();
    directionSlider();
    newsOuterSlider();
    storiesSlider();
    brandPlatformSlider();
    subMenuSlider();

    // $(window).resize(function () {
    //      setTimeout(function () {
    //         directionSlider();
    //     }, 100);
    //      directionSlider();
    // });
    $(window).resize(function () {
         setTimeout(function () {
            packagesSlider();
        }, 100);
    });
    $(window).resize(function () {
         setTimeout(function () {
            bonusSlider();
        }, 100);
    });
     $(window).resize(function () {
         setTimeout(function () {
            directionSlider();
        }, 100);
    });
     $(window).resize(function () {
         setTimeout(function () {
            newsOuterSlider();
        }, 100);
    });

      $(window).resize(function () {
         setTimeout(function () {
            storiesSlider();
        }, 100);
    });
       $(window).resize(function () {
         setTimeout(function () {
            brandPlatformSlider();
        }, 100);
    });
        $(window).resize(function () {
         setTimeout(function () {
            subMenuSlider();
        }, 100);
    });
    
    
    
    
    
    

    // const detailsBtn = document.querySelectorAll(".details-btn");
    // detailsBtn.forEach(function (btn) {
    //     btn.onclick = function () {
    //         packagesSlider();
    //     }
    // })
    $('.btn-container').click(function () {
        setTimeout(function () {
            packagesSlider();
        }, 200)
    })

    /*date select*/
    $("#rangeDate").flatpickr({
        mode: 'range',
        dateFormat: "Y-m-d"
    });



    /*set transition delay to menu item  and svg, translate to span*/
    const menuList = document.querySelectorAll(".menu-list-inner");
    const subMenuSlide = document.querySelectorAll(".subMenuSlide");
    subMenuSlide.forEach(function (item) {
        item.addEventListener("mouseenter", function () {
            setTimeout(() => item.classList.add("hovered"), 1000);
        })
        item.addEventListener("mouseleave", function () {
            item.classList.remove("hovered");

        })
    })

    // menuList.forEach(function(item){
    //  for(let i=1; i < item.children.length; i++){
    //     item.children[i].children[2].style.transitionDelay =  (item.children.length - i)/20 + 0.3 + "s";
    //     item.children[i].children[2].style.transform = "translateX("+ (item.children.length - i + 20) +"px)";
    //     item.children[i].children[0].style.transitionDelay =  (item.children.length - i)/20 + 0.3 + "s";
    //  }

    // })



    /*inputs script*/
    let input = document.querySelectorAll(".placeholder-wrap");

    input.forEach(function (item) {
        item.childNodes[1].onkeyup = function () {
            if (item.childNodes[1].value != '') {
                item.childNodes[3].style.opacity = "0";
                // item.parentElement.classList.add("input-success");
                item.parentElement.classList.remove("error");
            } else {
                item.childNodes[3].style.opacity = "1";
                // item.parentElement.classList.remove("input-success");
            }
        }
    })

    function ValidateEmail(mail) {
        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value)) {
            mail.parentElement.parentElement.classList.remove("error");
            return true;
        } else {
            mail.parentElement.parentElement.classList.add("error");
            return false;
        }
    }

    function ValidateEmpty(input) {
        if (input.value != '') {
            input.parentElement.parentElement.classList.remove("error");
            return true;
        } else {
            input.parentElement.parentElement.classList.add("error");
            return false;
        }
    }

    if (document.querySelector('body').classList.contains('page-contact')) {

        const contactBtn = document.getElementById("contact-btn");
        const area = contactBtn.parentElement.parentElement;
        let checker = arr => arr.every(Boolean);
        contactBtn.onclick = function () {
            let errorArr = [];

            const vEmpty = area.querySelectorAll(".v-empty")
            vEmpty.forEach(function (item) {
                ValidateEmpty(item);
                errorArr.push(ValidateEmpty(item));
            })
            const vMail = area.querySelectorAll(".v-mail")
            vMail.forEach(function (item) {
                ValidateEmail(item);
                errorArr.push(ValidateEmail(item));
            })
            if (checker(errorArr)) {
                contactBtn.parentElement.parentElement.classList.add("success");
            }
        }

        const newMsgBtn = document.getElementById("new-msg");
        newMsgBtn.onclick = function () {
            contactBtn.parentElement.parentElement.classList.remove("success");
            const input = contactBtn.parentElement.parentElement.querySelectorAll("input");
            const textarea = contactBtn.parentElement.parentElement.querySelectorAll("textarea");
            input.forEach(function (item) {
                item.value = '';
                item.nextSibling.nextSibling.style.opacity = '1';
            })
            textarea.forEach(function (item) {
                item.value = '';
                item.nextSibling.nextSibling.style.opacity = '1';
            })
        }

    }

    /*contact tabs scripts*/

    const tabCont = document.querySelectorAll(".tabs");
    const branchesWrap = document.getElementById("branches-grid-wrap");

    tabCont.forEach(function (item) {
        for (let i = 0; i < item.children.length; i++) {
            item.children[i].onclick = function () {
                for (let j = 0; j < item.children.length; j++) {
                    item.children[j].classList.remove("active");
                }
                item.children[i].classList.add("active");
                for (let k = 0; k < branchesWrap.children.length; k++) {
                    $("#branches-grid-wrap").children().eq(k).removeClass("active");
                }
                let branchId = item.children[i].getAttribute("data-branch");
                // setTimeout(() => $('#' + branchId).slideDown(), 600);
                $('#' + branchId).addClass("active");
                item.classList.toggle("right");
            }
        }
    })


    /*policy compare*/

    /**hovers**/
    const compareItem = document.querySelectorAll(".compare-item");

    compareItem.forEach(function (item) {
        item.addEventListener("mouseenter", function () {
            let attribute = item.getAttribute("data-hover");
            let itemWithSameAttr = document.querySelectorAll("[data-hover='" + attribute + "']");
            itemWithSameAttr.forEach(function (item2) {
                item2.classList.add("hovered");
            })
        })
        item.addEventListener("mouseleave", function () {
            let attribute = item.getAttribute("data-hover");
            let itemWithSameAttr = document.querySelectorAll("[data-hover='" + attribute + "']");
            itemWithSameAttr.forEach(function (item2) {
                item2.classList.remove("hovered");
            })
        })
    })




    /*start of head slider*/


    if (document.querySelector('body').classList.contains('page-business')) {
        var allowChange = true,
            dots = document.querySelectorAll('.slide-btn');

        dots.forEach(function (el) {
            el.addEventListener("click", function (e) {
                e.stopPropagation();
            })
            el.addEventListener('click', function (e) {
                e.stopPropagation();
                if (allowChange) {
                    const mouseEnter = function () {
                        dots.forEach(function (el) {
                            el.classList.remove("hovered");

                        })
                        el.classList.add("hovered");
                        let id = el.getAttribute('data-slide');
                        let parent = el.parentElement.parentElement;
                        let slides = parent.querySelectorAll(".slide");
                        let slidesArr = Array.from(slides);
                        let slideIn = slides.item(id);
                        let slideOut = slidesArr.find(function (item) {
                            if (item.classList.contains("slide-in")) {
                                return true;
                            }
                        })
                        let slideOutId;
                        if (slideOut != undefined) {
                            slideOutId = slideOut.getAttribute('data-slide');
                        }

                        const deleteSlideIn = function () {
                            slides.forEach(function (slide) {
                                slide.classList.remove("slide-in");
                            })
                        }

                        const deleteSlideOut = function () {
                            slides.forEach(function (slide) {
                                slide.classList.remove("slide-out");
                            })
                        }

                        if (slideOut === undefined) {
                            slides[0].classList.add("slide-out");
                            // setTimeout(() => slides[0].classList.remove("slide-out"), 1000);
                            setTimeout(() => deleteSlideOut(), 1000);
                        } else if (slideOutId != id) {
                            // slideOut.classList.remove("slide-in");
                            deleteSlideIn();
                            slideOut.classList.add("slide-out");
                            // setTimeout(() => slideOut.classList.remove("slide-out"), 1000);
                            setTimeout(() => deleteSlideOut(), 1000);
                        }

                        slideIn.classList.add("slide-in");
                    }
                    mouseEnter();
                    allowChange = false;
                    this.style.pointerEvents = 'all';
                    // dots.forEach(function(elem){
                    // 	elem.style.pointerEvents = 'none';
                    // })
                    setTimeout(function () {
                        allowChange = true;
                        dots.forEach(function (elem) {
                            elem.style.pointerEvents = 'all';
                        })
                    }, 1000)
                }
            })
        })


        let body = document.body;
        body.onclick = function () {
            if (allowChange) {
                const mouseLeave = function () {
                    dots.forEach(function (el) {
                        el.classList.remove("hovered");
                    })
                    let slideOut = document.querySelector(".slide-in");
                    let slides = document.querySelectorAll(".slide");

                    if (!slides[0].classList.contains("slide-in") && slideOut != undefined) {
                        slideOut.classList.remove("slide-in");
                        slideOut.classList.add("slide-out");
                        setTimeout(() => slideOut.classList.remove("slide-out"), 1000);

                        slides[0].classList.add("slide-in")
                    }
                }
                mouseLeave();
                allowChange = false;
                setTimeout(() => allowChange = true, 1000);
            }
        }
    }






    /*start of direction with hover*/

    const direction = document.querySelectorAll(".direction");
    let timeout;

    function directionWithHover() {
        direction.forEach(function (item) {
            const text = item.querySelector(".text");
            const txt = item.querySelector(".txt");
            const hover = item.querySelector(".hover");

            const hoverHeight = hover.offsetHeight;
            const textHeight = text.offsetHeight;


            txt.style.height = textHeight + 'px';


            item.addEventListener("mouseenter", function () {
                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    setTimeout(() => txt.style.height = hoverHeight + 'px', 0);
                    setTimeout(() => text.classList.add("hide"), 0);
                    txt.classList.add("hovered");
                }, 0);
            })

            item.addEventListener("mouseleave", function () {
                clearTimeout(timeout);
                timeout = setTimeout(function () {
                    setTimeout(() => txt.style.height = textHeight + 'px', 0);
                    setTimeout(() => text.classList.remove("hide"), 0);
                    txt.classList.remove("hovered");
                }, 200);
            })


        })
    }
    directionWithHover();
    $(window).resize(function () {
        directionWithHover();
    });

    /*start of checkbox star rate */

    let checkboxStar = document.querySelectorAll(".checkbox-star");

    checkboxStar.forEach(function (checkbox) {
        checkbox.onclick = function () {
            let star = checkbox.getAttribute("data-star");
            let parent = checkbox.parentElement.parentElement.parentElement.className = star;
            let checkboxInput = checkbox.parentElement.parentElement.parentElement.parentElement.querySelector(".checkbox-input");
            checkboxInput.value = star;
        }
    })


    /*agent popup*/

    let connectAgentBtn = document.querySelectorAll(".connect-agent");
    let closeAgentBtn = document.querySelectorAll(".close-agent");
    let messagePopup = document.querySelectorAll(".massage-form");


    closeAgentBtn.forEach(function (btn) {
        btn.onclick = function () {
            document.body.classList.remove("agent-popup");
        }
    })

    messagePopup.forEach(function (popup) {
        popup.addEventListener('click', function (e) {
            e.stopPropagation();
        })
    })


    document.addEventListener("click", function () {
        if (document.body.classList.contains("agent-popup")) {
            document.body.classList.remove("agent-popup");
        }
    })

    connectAgentBtn.forEach(function (btn) {
        console.log(btn);
        btn.onclick = function (e) {
            e.stopPropagation()
            document.body.classList.add("agent-popup");
        }
    })

})
