var mobileDetect = !!navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i); mobileDetect || function () { var e, t, o, n, r = { frameRate: 150, animationTime: 400, stepSize: 100, pulseAlgorithm: !0, pulseScale: 4, pulseNormalize: 1, accelerationDelta: 50, accelerationMax: 3, keyboardSupport: !0, arrowScroll: 50, fixedBackground: !0, excluded: "" }, a = r, i = !1, l = !1, c = { x: 0, y: 0 }, s = !1, u = document.documentElement, d = [], m = /^Mac/.test(navigator.platform), f = { left: 37, up: 38, right: 39, down: 40, spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36 }, h = { 37: 1, 38: 1, 39: 1, 40: 1 }; function w() { if (!s && document.body) { s = !0; var n = document.body, r = document.documentElement, c = window.innerHeight, d = n.scrollHeight; if (u = 0 <= document.compatMode.indexOf("CSS") ? r : n, e = n, a.keyboardSupport && P("keydown", S), top != self) l = !0; else if (Q && c < d && (n.offsetHeight <= c || r.offsetHeight <= c)) { var m, f = document.createElement("div"); if (f.style.cssText = "position:absolute; z-index:-10000; top:0; left:0; right:0; height:" + u.scrollHeight + "px", document.body.appendChild(f), o = function () { m || (m = setTimeout(function () { i || (f.style.height = "0", f.style.height = u.scrollHeight + "px", m = null) }, 500)) }, setTimeout(o, 10), P("resize", o), (t = new R(o)).observe(n, { attributes: !0, childList: !0, characterData: !1 }), u.offsetHeight <= c) { var h = document.createElement("div"); h.style.clear = "both", n.appendChild(h) } } a.fixedBackground || i || (n.style.backgroundAttachment = "scroll", r.style.backgroundAttachment = "scroll") } } var p = [], v = !1, y = Date.now(); function b(e, t, o) { var n, r; if (n = 0 < (n = t) ? 1 : -1, r = 0 < (r = o) ? 1 : -1, (c.x !== n || c.y !== r) && (c.x = n, c.y = r, p = [], y = 0), 1 != a.accelerationMax) { var i = Date.now() - y; if (i < a.accelerationDelta) { var l = (1 + 50 / i) / 2; 1 < l && (l = Math.min(l, a.accelerationMax), t *= l, o *= l) } y = Date.now() } if (p.push({ x: t, y: o, lastX: t < 0 ? .99 : -.99, lastY: o < 0 ? .99 : -.99, start: Date.now() }), !v) { var s = q(), u = e === s || e === document.body; null == e.$scrollBehavior && function (e) { var t = M(e); if (null == T[t]) { var o = getComputedStyle(e, "")["scroll-behavior"]; T[t] = "smooth" == o } return T[t] }(e) && (e.$scrollBehavior = e.style.scrollBehavior, e.style.scrollBehavior = "auto"); var d = function (n) { for (var r = Date.now(), i = 0, l = 0, c = 0; c < p.length; c++) { var s = p[c], m = r - s.start, f = m >= a.animationTime, h = f ? 1 : m / a.animationTime; a.pulseAlgorithm && (h = V(h)); var w = s.x * h - s.lastX >> 0, y = s.y * h - s.lastY >> 0; i += w, l += y, s.lastX += w, s.lastY += y, f && (p.splice(c, 1), c--) } u ? window.scrollBy(i, l) : (i && (e.scrollLeft += i), l && (e.scrollTop += l)), t || o || (p = []), p.length ? j(d, e, 1e3 / a.frameRate + 1) : (v = !1, null != e.$scrollBehavior && (e.style.scrollBehavior = e.$scrollBehavior, e.$scrollBehavior = null)) }; j(d, e, 0), v = !0 } } function g(t) { s || w(); var o = t.target; if (t.defaultPrevented || t.ctrlKey) return !0; if (Y(e, "embed") || Y(o, "embed") && /\.pdf/i.test(o.src) || Y(e, "object") || o.shadowRoot) return !0; var r = -t.wheelDeltaX || t.deltaX || 0, i = -t.wheelDeltaY || t.deltaY || 0; m && (t.wheelDeltaX && N(t.wheelDeltaX, 120) && (r = t.wheelDeltaX / Math.abs(t.wheelDeltaX) * -120), t.wheelDeltaY && N(t.wheelDeltaY, 120) && (i = t.wheelDeltaY / Math.abs(t.wheelDeltaY) * -120)), r || i || (i = -t.wheelDelta || 0), 1 === t.deltaMode && (r *= 40, i *= 40); var c = z(o); return c ? !!function (e) { if (e) { d.length || (d = [e, e, e]), e = Math.abs(e), d.push(e), d.shift(), clearTimeout(n), n = setTimeout(function () { try { localStorage.SS_deltaBuffer = d.join(",") } catch (e) { } }, 1e3); var t = 120 < e && K(e); return !K(120) && !K(100) && !t } }(i) || (1.2 < Math.abs(r) && (r *= a.stepSize / 120), 1.2 < Math.abs(i) && (i *= a.stepSize / 120), b(c, r, i), t.preventDefault(), void C()) : !l || !W || (Object.defineProperty(t, "target", { value: window.frameElement }), parent.wheel(t)) } function S(t) { var o = t.target, n = t.ctrlKey || t.altKey || t.metaKey || t.shiftKey && t.keyCode !== f.spacebar; document.body.contains(e) || (e = document.activeElement); var r = /^(button|submit|radio|checkbox|file|color|image)$/i; if (t.defaultPrevented || /^(textarea|select|embed|object)$/i.test(o.nodeName) || Y(o, "input") && !r.test(o.type) || Y(e, "video") || function (e) { var t = e.target, o = !1; if (-1 != document.URL.indexOf("www.youtube.com/watch")) do { if (o = t.classList && t.classList.contains("html5-video-controls")) break } while (t = t.parentNode); return o }(t) || o.isContentEditable || n) return !0; if ((Y(o, "button") || Y(o, "input") && r.test(o.type)) && t.keyCode === f.spacebar) return !0; if (Y(o, "input") && "radio" == o.type && h[t.keyCode]) return !0; var i = 0, c = 0, s = z(e); if (!s) return !l || !W || parent.keydown(t); var u = s.clientHeight; switch (s == document.body && (u = window.innerHeight), t.keyCode) { case f.up: c = -a.arrowScroll; break; case f.down: c = a.arrowScroll; break; case f.spacebar: c = -(t.shiftKey ? 1 : -1) * u * .9; break; case f.pageup: c = .9 * -u; break; case f.pagedown: c = .9 * u; break; case f.home: s == document.body && document.scrollingElement && (s = document.scrollingElement), c = -s.scrollTop; break; case f.end: var d = s.scrollHeight - s.scrollTop - u; c = 0 < d ? d + 10 : 0; break; case f.left: i = -a.arrowScroll; break; case f.right: i = a.arrowScroll; break; default: return !0 }b(s, i, c), t.preventDefault(), C() } function x(t) { e = t.target } var k, D, M = (k = 0, function (e) { return e.uniqueID || (e.uniqueID = k++) }), E = {}, B = {}, T = {}; function C() { clearTimeout(D), D = setInterval(function () { E = B = T = {} }, 1e3) } function H(e, t, o) { for (var n = o ? E : B, r = e.length; r--;)n[M(e[r])] = t; return t } function z(e) { var t = [], o = document.body, n = u.scrollHeight; do { var r = B[M(e)]; if (r) return H(t, r); if (t.push(e), n === e.scrollHeight) { var a = A(u) && A(o) || L(u); if (l && O(u) || !l && a) return H(t, q()) } else if (O(e) && L(e)) return H(t, e) } while (e = e.parentElement) } function O(e) { return e.clientHeight + 10 < e.scrollHeight } function A(e) { return "hidden" !== getComputedStyle(e, "").getPropertyValue("overflow-y") } function L(e) { var t = getComputedStyle(e, "").getPropertyValue("overflow-y"); return "scroll" === t || "auto" === t } function P(e, t, o) { window.addEventListener(e, t, o || !1) } function X(e, t, o) { window.removeEventListener(e, t, o || !1) } function Y(e, t) { return e && (e.nodeName || "").toLowerCase() === t.toLowerCase() } if (window.localStorage && localStorage.SS_deltaBuffer) try { d = localStorage.SS_deltaBuffer.split(",") } catch (g) { } function N(e, t) { return Math.floor(e / t) == e / t } function K(e) { return N(d[0], e) && N(d[1], e) && N(d[2], e) } var $, j = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (e, t, o) { window.setTimeout(e, o || 1e3 / 60) }, R = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver, q = ($ = document.scrollingElement, function () { if (!$) { var e = document.createElement("div"); e.style.cssText = "height:10000px;width:1px;", document.body.appendChild(e); var t = document.body.scrollTop; document.documentElement.scrollTop, window.scrollBy(0, 3), $ = document.body.scrollTop != t ? document.body : document.documentElement, window.scrollBy(0, -3), document.body.removeChild(e) } return $ }); function I(e) { var t; return ((e *= a.pulseScale) < 1 ? e - (1 - Math.exp(-e)) : (e -= 1, (t = Math.exp(-1)) + (1 - Math.exp(-e)) * (1 - t))) * a.pulseNormalize } function V(e) { return 1 <= e ? 1 : e <= 0 ? 0 : (1 == a.pulseNormalize && (a.pulseNormalize /= I(1)), I(e)) } var F = window.navigator.userAgent, _ = /Edge/.test(F), W = /chrome/i.test(F) && !_, U = /safari/i.test(F) && !_, G = /mobile/i.test(F), J = /Windows NT 6.1/i.test(F) && /rv:11/i.test(F), Q = U && (/Version\/8/i.test(F) || /Version\/9/i.test(F)), Z = (W || U || J) && !G, ee = !1; try { window.addEventListener("test", null, Object.defineProperty({}, "passive", { get: function () { ee = !0 } })) } catch (g) { } var te = !!ee && { passive: !1 }, oe = "onwheel" in document.createElement("div") ? "wheel" : "mousewheel"; function ne(e) { for (var t in e) r.hasOwnProperty(t) && (a[t] = e[t]) } oe && Z && (P(oe, g, te), P("mousedown", x), P("load", w)), ne.destroy = function () { t && t.disconnect(), X(oe, g), X("mousedown", x), X("keydown", S), X("resize", o), X("load", w) }, window.SmoothScrollOptions && ne(window.SmoothScrollOptions), "function" == typeof define && define.amd ? define(function () { return ne }) : "object" == typeof exports ? module.exports = ne : window.SmoothScroll = ne }();
window.onload = function () {

    document.querySelector('#loader-fragment').style.opacity = '0'

    document.body.classList.add('animate');
    setTimeout(function () {
        $("header .secondFloor .leftContainer.active").addClass("animated")
    }, 300)


    setTimeout(function () {
        document.body.classList.add('noTransition');
    }, 2500);


    if (mobileDetect) {
        document.body.classList.add('mobile')
    }

    // lightGallery(document.getElementById('video-gallery'));
    if ($(".lg_gallery").length != 0) {
        for (var i = 0; i < $(".lg_gallery").length; i++) {
            $(".lg_gallery")
                .eq(i)
                .lightGallery({
                    selector: ".lg",
                    thumbnail: true,
                    autoplayFirstVideo: true,
                    youtubePlayerParams: {
                        modestbranding: 0,
                        showinfo: 0,
                        controls: 1,
                        rel: 0,
                        autoplay: 1
                    }
                });
        }
    }

    var mySwiper = new Swiper('.about-container .swiper-container', {
        speed: 1000,
        spaceBetween: 60,
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next_',
            prevEl: '.swiper-button-prev_',
        }
    });

    var observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active-kfn')
            }
        });
    }, { rootMargin: "100px 0px 0px 0px" });
    document.querySelectorAll('.kfn_anim').forEach(img => { observer.observe(img) });

    function ecoistSlider() {
        var elems = document.querySelectorAll('#ecoist-slider .slider-container .item'),
            active = 0,
            prev,
            prevTwo,
            prevThree,
            next,
            nextTwo,
            nextThree,
            nextStyleOne = "transform: translate(0%,0) scale(1); transform-origin: left; opacity: 1",
            nextStyleTwo = "transform: translate(-100%,0) scale(0.55); transform-origin: right; opacity: 0.5",
            nextStyleThree = "transform: translate(0%,0) scale(0.3); transform-origin: center; opacity: 0",
            nextStyleFour = "transform: translate(100%,0) scale(0.55); transform-origin: left; opacity: 0.5",
            prevStyleOne = "transform: translate(0%,0) scale(1); transform-origin: right; opacity: 1",
            prevStyleTwo = "transform: translate(100%,0) scale(0.55); transform-origin: left; opacity: 0.5",
            prevStyleThree = "transform: translate(0%,0) scale(0.3); transform-origin: center; opacity: 0",
            prevStyleFour = "transform: translate(-100%,0) scale(0.55); transform-origin: right; opacity: 0.5";
        document.querySelectorAll('#ecoist-popup .popup .close-svg').forEach(function (el) {
            el.addEventListener('click', function () {
                document.querySelector('#ecoist-popup').classList.remove('active')
                document.querySelector('#ecoist-popup .popup').classList.remove('active')
            })
        })
        elems.forEach(function (el) {
            el.style.cssText = 'transform: translate(0,0) scale(0); opacity: 0';
            el.addEventListener('mousemove', function (e) {
                if (this.getBoundingClientRect().left > window.innerWidth / 2) {
                    document.querySelector('#cursor').classList = '';
                    document.querySelector('#cursor').classList.add('next-btn');
                } else {
                    document.querySelector('#cursor').classList = '';
                    document.querySelector('#cursor').classList.add('prev-btn');
                }
                if (this.classList.contains('active')) {
                    document.querySelector('#cursor').classList = '';
                    document.querySelector('#cursor').classList.add('play-btn');
                }
            })
            el.addEventListener('mouseover', function () {
                this.classList.add('hovered')
            })
            el.addEventListener('mouseleave', function () {
                this.classList.remove('hovered')
            })
            el.addEventListener('click', function (e) {
                if (this.classList.contains('active')) {
                    document.querySelector('#ecoist-popup').classList.add('active')
                    document.querySelector('#ecoist-popup .popup[data-id="' + this.dataset.item + '"]').classList.add('active')
                }
                document.querySelector('#ecoist-popup').addEventListener('click', function (e) {
                    this.classList.remove('active')
                    document.querySelectorAll('#ecoist-popup .popup').forEach(function (el) {
                        el.classList.remove('active')
                    })
                })
                document.querySelectorAll('#ecoist-popup .popup video').forEach(function (el) {
                    el.addEventListener('click', function (e) {
                        e.stopPropagation()
                    })
                })
                document.querySelector('#cursor .content').classList.add('focused')
                setTimeout(function () {
                    document.querySelector('#cursor .content').classList.remove('focused')
                }, 300);
                this.classList.remove('hovered')
                if (!this.classList.contains('active')) {
                    document.querySelector('#ecoist-slider .slider-container').style.pointerEvents = 'none';
                    setTimeout(function () {
                        document.querySelector('#ecoist-slider .slider-container').style.pointerEvents = 'all';
                    }, 700);
                    if (this.getBoundingClientRect().left > window.innerWidth / 2) {
                        // ტექსტის ანიმაცია
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.remove('active')
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('not-active')

                        this.style.cssText = nextStyleOne;
                        elems[active].classList.remove('active')
                        active = Number(this.dataset.item)
                        this.classList.add('active')
                        if (active === 0) {
                            prev = elems[elems.length - 1].style.cssText = nextStyleTwo;
                            prevTwo = elems[elems.length - 2].style.cssText = nextStyleThree;
                            prevThree = elems[active + 1].style.cssText = nextStyleFour;
                        }
                        if (active === 1) {
                            prev = elems[active - 1].style.cssText = nextStyleTwo;
                            prevTwo = elems[elems.length - 1].style.cssText = nextStyleThree;
                            prevThree = elems[active + 1].style.cssText = nextStyleFour;
                        }
                        if (active >= 2) {
                            prev = elems[active - 1].style.cssText = nextStyleTwo;
                            prevTwo = elems[active - 2].style.cssText = nextStyleThree;
                        }
                        if (active >= 2 && active < elems.length - 1) {
                            prevThree = elems[active + 1].style.cssText = nextStyleFour;
                        }
                        if (active >= 2 && active === elems.length - 1) {
                            prevThree = elems[0].style.cssText = nextStyleFour;
                        }
                        // ტექსტის ანიმაცია
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.remove('not-active')
                        setTimeout(function () {
                            document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('active')
                            $('#ecoist-slider .text-container .text-item.active').slideDown(1)
                            $('#ecoist-slider .text-container .text-item.not-active').slideUp(1)
                        }, 700);
                    } else {
                        // ტექსტის ანიმაცია
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.remove('active')
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('not-active')

                        this.style.cssText = nextStyleOne;
                        elems[active].classList.remove('active')
                        active = Number(this.dataset.item)
                        this.classList.add('active')
                        if (active === elems.length - 1) {
                            next = elems[0].style.cssText = prevStyleTwo;
                            nextTwo = elems[1].style.cssText = prevStyleThree;
                            nextThree = elems[active - 1].style.cssText = prevStyleFour;
                        }
                        if (active === 1) {
                            next = elems[active + 1].style.cssText = prevStyleTwo;
                            nextTwo = elems[active + 2].style.cssText = prevStyleThree;
                            nextThree = elems[0].style.cssText = prevStyleFour;
                        }
                        if (elems.length - active - 1 >= 2 && active !== 0) {
                            next = elems[active + 1].style.cssText = prevStyleTwo;
                            nextTwo = elems[active + 2].style.cssText = prevStyleThree;
                            nextThree = elems[active - 1].style.cssText = prevStyleFour;
                        }
                        if (elems.length - active - 1 === 1) {
                            next = elems[active + 1].style.cssText = prevStyleTwo;
                            nextTwo = elems[0].style.cssText = prevStyleThree;
                            nextThree = elems[active - 1].style.cssText = prevStyleFour;
                        }
                        if (active === 0) {
                            next = elems[active + 1].style.cssText = prevStyleTwo;
                            nextTwo = elems[active + 2].style.cssText = prevStyleThree;
                            nextThree = elems[elems.length - 1].style.cssText = prevStyleFour;
                        }
                        // ტექსტის ანიმაცია
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.remove('not-active')
                        setTimeout(function () {
                            document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('active')
                            $('#ecoist-slider .text-container .text-item.active').slideDown(1)
                            $('#ecoist-slider .text-container .text-item.not-active').slideUp(1)
                        }, 700);
                    }
                }
            })
        })
        elems[active].classList.add('active')
        elems[active].style.opacity = '1';
        elems[active].style.transform = 'translate(0,0) scale(1)';
        elems[active + 1].style.transform = 'translate(100%,0) scale(0.55)';
        elems[active + 1].style.transformOrigin = 'left';
        elems[active + 1].style.opacity = '0.5'
        elems[elems.length - 1].style.transform = 'translate(-100%,0) scale(0.55)';
        elems[elems.length - 1].style.transformOrigin = 'right';
        elems[elems.length - 1].style.opacity = '0.5'
    }
    if (document.querySelector('#ecoist-slider') != undefined) {
        ecoistSlider();
    }

    function ecoistSliderCursor() {

        var elem = document.querySelector('#cursor'),
            target = {
                x: 0,
                y: 0
            },

            position = {
                x: 0,
                y: 0
            },

            ease = 0.2;

        elem.style.display = 'none'
        setTimeout(function () {
            elem.style.display = 'block';
        }, 100);

        document.querySelector('#ecoist-slider .slider-container').addEventListener('mousemove', function (e) {
            target.x = e.pageX,
                target.y = e.pageY;
            elem.classList.add('active')
            e.stopPropagation()
        })
        document.querySelector('#ecoist-slider .slider-container').addEventListener('mouseover', function (e) {
            elem.classList.add('active')
            e.stopPropagation()
        })
        document.addEventListener('mousemove', function (e) {
            elem.classList.remove('active')
        })


        function update() {
            elem.style.transform = 'translate(' + (position.x - 35) + 'px,' + (position.y - 35) + 'px)';
            position.x = position.x + (target.x - position.x) * ease;
            position.y = position.y + (target.y - position.y) * ease;

            requestAnimationFrame(update)

        }
        update();

    }
    if (document.querySelector('#ecoist-slider') != undefined) {
        ecoistSliderCursor()
    }

    if (document.querySelector('form .input') != undefined) {
        document.querySelector('.agree .checkbox').addEventListener('click',function(){
            this.classList.toggle('active')
        })
        var inputs = document.querySelectorAll('input');
        inputs.forEach(function(el){
            el.addEventListener('change',function(){
                this.parentNode.classList.remove('errored')
                if (this.parentNode.parentNode != undefined) {
                    this.parentNode.parentNode.classList.remove('errored')
                }
            })
        })
        document.querySelector('#file-input').addEventListener('change',function(){
            if (this.value == '') {
                document.querySelector('form .input .content .file-name').style.display = 'none'
                document.querySelector('form .input .content h2').style.display = 'flex'
            }else {
                document.querySelector('form .input .content .file-name').style.display = 'flex'
                document.querySelector('form .input .content h2').style.display = 'none'
                document.querySelector('form .input .content .file-name h3').innerHTML = this.value.replace(/C:\\fakepath\\/i, '');
            }
        })
        document.querySelector('form .input .content .file-name img').addEventListener('click',function(){
            document.querySelector('#file-input').value = '';
            document.querySelector('form .input .content .file-name').style.display = 'none'
            document.querySelector('form .input .content h2').style.display = 'flex'
        })
        document.querySelector('#form').addEventListener('submit',function(e){
            if (document.querySelector('#name').value === '') {
                document.querySelector('#name').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#name').parentNode.classList.remove('errored')
            }
            if (document.querySelector('#surname').value === '') {
                document.querySelector('#surname').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#surname').parentNode.classList.remove('errored')
            }
            if (document.querySelector('#city').value === '') {
                document.querySelector('#city').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#city').parentNode.classList.remove('errored')
            }
            if (document.querySelector('#country').value === '') {
                document.querySelector('#country').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#country').parentNode.classList.remove('errored')
            }
            if (document.querySelector('#last').value === '') {
                document.querySelector('#last').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#last').parentNode.classList.remove('errored')
            }
            if (document.querySelector('#mobile').value === '') {
                document.querySelector('#mobile').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#mobile').parentNode.classList.remove('errored')
            }
            if (document.querySelector('#mobile').value === '') {
                document.querySelector('#mobile').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#mobile').parentNode.classList.remove('errored')
            }
            if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.querySelector('#email').value)) {
                document.querySelector('#email').parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#email').parentNode.classList.remove('errored')
            }
            if (document.querySelector('#file-input').value === '') {
                document.querySelector('#file-input').parentNode.parentNode.classList.add('errored')
                e.preventDefault()
            }else {
                document.querySelector('#file-input').parentNode.parentNode.classList.remove('errored')
            }
        })
    }

    if (document.querySelector('.partners-slider-container') != undefined) {
        var partnersSlider = new Swiper('.partners-slider-container .swiper-container', {
            speed: 400,
            spaceBetween: 0,
            slidesPerView: 5,
            watchOverflow: true,
            breakpoints: {
              320: {
                slidesPerView: 1.5
              },
              768: {
                slidesPerView: 3
              },
              1024: {
                slidesPerView: 5
              }
            }
        });
    }

    if (document.querySelector('#video-container-popup') != undefined) {
        document.querySelector('.kfn-video-container .wrapper #open-video').addEventListener('click',function(){
            document.querySelector('#video-container-popup').classList.add('active')
            document.querySelector('#video-container-popup video').play()
        })
        document.querySelector('#video-container-popup').addEventListener('click',function(){
            this.classList.remove('active')
        })
        document.querySelector('#video-container-popup .video').addEventListener('click',function(e){
            e.stopPropagation()
        })
        document.querySelector('#close-video-container').addEventListener('click',function(){
            document.querySelector('#video-container-popup').classList.remove('active')
            document.querySelector('#video-container-popup video').pause()
        })
    }

    var smartBox = {
        init : function(){
            // სმარტ ბოქსის სლაიდერებ
            this.smartBoxSliders()
            // კონტეინერის სიმაღლის გაგება
            this.containerHeight()
            // სლაიდერის შეცვლა
            this.changeSliders()
            window.addEventListener('resize',function(){
                setTimeout(function() {
                    smartBox.containerHeight()
                }, 200);
            })
        },
        activeHeight : document.querySelector('.smart-box-container .left-side .smart-box .slider-container .sliders .slider.active'),
        slideDots : document.querySelectorAll('.smart-box-container .left-side .smart-box .heading .tabs-container ul li'),
        sliders : document.querySelectorAll('.smart-box-container .left-side .smart-box .slider-container .sliders .slider'),
        changeSliders : function(){
            smartBox.slideDots.forEach(function(el){
                el.addEventListener('click',function(){
                    index = this.dataset.slide;
                    console.log(index)
                    document.querySelector('.smart-box-container .left-side .smart-box .slider-container .sliders .slider.active').classList.remove('active')
                    document.querySelector('.smart-box-container .left-side .smart-box .slider-container .sliders [data-slide="' + index + '"]').classList.add('active')
                    document.querySelector('.smart-box-container .left-side .smart-box .heading .tabs-container ul li.active').classList.remove('active')
                    this.classList.add('active')
                    smartBox.activeHeight = document.querySelector('.smart-box-container .left-side .smart-box .slider-container .sliders .slider.active')
                    smartBox.containerHeight()
                })
            })
        },
        smartBoxSliders : function(){
            var one = new Swiper('.smart-box-container .swiper-container.buy-slider', {
                speed: 400,
                spaceBetween: 70,
                slidesPerView: 4,
                navigation: {
                    nextEl: '.swiper-button-next-btn',
                    prevEl: '.swiper-button-prev-btn',
                }
            });
            var two = new Swiper('.smart-box-container .swiper-container.remuneration-slider', {
                speed: 400,
                spaceBetween: 70,
                slidesPerView: 4,
                navigation: {
                    nextEl: '.swiper-button-next-btn',
                    prevEl: '.swiper-button-prev-btn',
                }
            });
            var three = new Swiper('.smart-box-container .swiper-container.pay-slider', {
                speed: 400,
                spaceBetween: 70,
                slidesPerView: 4,
                navigation: {
                    nextEl: '.swiper-button-next-btn',
                    prevEl: '.swiper-button-prev-btn',
                }
            });
        },
        containerHeight : function(){
            document.querySelector('.smart-box-container .left-side .smart-box .slider-container').style.height = smartBox.activeHeight.clientHeight + 'px';
            console.log(smartBox.activeHeight)
        },
    }
    if (document.body.classList.contains('page-home')) {
        smartBox.init()
    }

    if (document.querySelector('#awards-popup') != undefined) {
        var links = document.querySelectorAll('.awards-container .main-content .row .side a');
        links.forEach(function(el){
            el.addEventListener('click',function(e){
                e.preventDefault()
                document.querySelector('#awards-popup').classList.add('active')
            })
        })
        document.querySelector('#awards-popup').addEventListener('click',function(e){
            this.classList.remove('active')
        })
        document.querySelector('#close-awards').addEventListener('click',function(e){
            document.querySelector('#awards-popup').classList.remove('active')
        })
        document.querySelector('#awards-popup .content').addEventListener('click',function(e){
            e.stopPropagation()
        })
    }


}
