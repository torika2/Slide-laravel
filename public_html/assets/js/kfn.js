window.onload = function () {
    if ($('.selectpickers').length > 0) {
        $('.selectpickers').niceSelect();
    }

    function wowAnimation() {
        new WOW({
            offset: 100,
            mobile: true
        }).init()
    }
    wowAnimation()

    function listStyle() {
        if (document.querySelector('.list--style') != undefined) {
            var el = document.querySelectorAll('.list--style');
            el.forEach(function (elem) {
                elem.addEventListener('click', function (e) {
                    el.forEach(function (elem) {
                        elem.classList.remove('active');
                    })
                    this.classList.add('active')
                    if (this.classList.contains('list-style')) {
                        document.querySelector('.shop-list-container').classList.add('active')
                    } else {
                        document.querySelector('.shop-list-container').classList.remove('active')
                    }
                })
            })
        }
    }
    listStyle();

    function videoPopup() {
        if (document.querySelector('#video-popup') != undefined) {
            document.querySelector('#watch-video').addEventListener('click', function (e) {
                e.preventDefault()
                document.querySelector('#video-popup').classList.add('active')
            })
            document.querySelector('#close-video-popup').addEventListener('click', function () {
                document.querySelector('#video-popup').classList.remove('active')
            })
        }
    }
    videoPopup()

    function signIn() {
        document.querySelector('#sign-in-btn').addEventListener('click', function () {
            document.querySelector('.sign-in-block').classList.toggle('active')
        })
        document.querySelector('.sign-in-block').addEventListener('click', function (e) {
            e.stopPropagation()
        })
        document.addEventListener('click', function () {
            document.querySelector('.sign-in-block').classList.remove('active')
        })
    }
    signIn()

    function fixedHeader() {
        var scrollTop = document.documentElement.scrollTop || window.pageXOffset;
        if (scrollTop > 0) {
            document.body.classList.add('scrolled')
        } else {
            document.body.classList.remove('scrolled')
        }
    }
    fixedHeader()

    window.addEventListener('scroll', function () {
        fixedHeader()
    })

    function mailValidation() {
        if (document.querySelector('#subscribe form') != undefined) {
            document.querySelector('#subscribe form').addEventListener('submit', function (e) {
                e.preventDefault()
                if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.querySelector('#subscribe form input').value))) {
                    document.querySelector('#subscribe form').classList.add('error')
                } else {
                    // აჯაქსია გასაგზავნი
                }
            })
        }

    }
    mailValidation();

}
