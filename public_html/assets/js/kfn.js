window.onload = function(){


    function ecoistSlider(){
        var elems = document.querySelectorAll('#ecoist-slider .slider-container .item');
            active = 0;
        elems.forEach(function(el){
            el.style.opacity = '0'
            el.style.transform = 'translate(0,0) scale(0)';
            el.addEventListener('mousemove',function(e){
                if (this.getBoundingClientRect().left > window.innerWidth / 2) {
                    document.querySelector('#cursor').classList = '';
                    document.querySelector('#cursor').classList.add('next-btn');

                }else {
                    document.querySelector('#cursor').classList = '';
                    document.querySelector('#cursor').classList.add('prev-btn');                    
                }
                if (this.classList.contains('active')) {
                    document.querySelector('#cursor').classList = '';
                    document.querySelector('#cursor').classList.add('play-btn');
                }
            })
            el.addEventListener('click',function(e){
                document.querySelector('#cursor .content').classList.add('focused')
                setTimeout(function() {
                    document.querySelector('#cursor .content').classList.remove('focused')
                }, 300);
                if (!this.classList.contains('active')) {
                    if (this.getBoundingClientRect().left > window.innerWidth / 2) {
                        document.querySelector('#ecoist-slider .slider-container .item.active').style.transform = 'translate(-100%,0) scale(0.5)';
                        document.querySelector('#ecoist-slider .slider-container .item.active').style.transformOrigin = 'right';
                        document.querySelector('#ecoist-slider .slider-container .item.active').style.opacity = '0.5';
                        this.style.transform = 'translate(0,0) scale(1)';
                        this.style.transformOrigin = 'left';
                        this.style.opacity = '1';
                        // ტექსტის ანიმაცია
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.remove('active')
                        document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('not-active')
                        if (active === 0 ) {
                            elems[elems.length - 1].style.transform = 'translate(0,0) scale(0.3)';
                            elems[elems.length - 1].style.transformOrigin = 'center';
                            elems[elems.length - 1].style.opacity = '0';
                            elems[active + 2].style.transform = 'translate(100%,0) scale(0.5)';
                            elems[active + 2].style.transformOrigin = 'left';
                            elems[active + 2].style.opacity = '0.5';
                            elems[active].classList.remove('active')
                            this.classList.add('active')
                            active++;
                            // ტექსტის ანიმაცია
                            document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.remove('not-active')
                            setTimeout(function() {
                                document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('active')
                                $('#ecoist-slider .text-container .text-item.active').slideDown(1)
                                $('#ecoist-slider .text-container .text-item.not-active').slideUp(1)
                            }, 1000);
                        }else {
                            elems[active - 1].style.transform = 'translate(0,0) scale(0.3)';
                            elems[active - 1].style.transformOrigin = 'center';
                            elems[active - 1].style.opacity = '0';
                            if (active + 2 === elems.length) {
                                elems[0].style.transform = 'translate(100%,0) scale(0.5)';
                                elems[0].style.transformOrigin = 'left';
                                elems[0].style.opacity = '0.5';
                            }
                            if (active + 2 != elems.length && elems[active + 2] != undefined) {
                                elems[active + 2].style.transform = 'translate(100%,0) scale(0.5)';
                                elems[active + 2].style.transformOrigin = 'left';
                                elems[active + 2].style.opacity = '0.5';
                            }
                            if (active + 1 === elems.length) {
                                elems[1].style.transform = 'translate(100%,0) scale(0.5)';
                                elems[1].style.transformOrigin = 'left';
                                elems[1].style.opacity = '0.5';
                            }
                            elems[active].classList.remove('active')
                            this.classList.add('active')
                            active++;
                            if (active === elems.length) {
                                active = 0;
                            }
                            // ტექსტის ანიმაცია
                            document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.remove('not-active')
                            setTimeout(function() {
                                document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('active')
                                $('#ecoist-slider .text-container .text-item.active').slideDown(1)
                                $('#ecoist-slider .text-container .text-item.not-active').slideUp(1)
                            }, 1000);
                        }
                    }else {
                        document.querySelector('#ecoist-slider .slider-container .item.active').style.transform = 'translate(100%,0) scale(0.5)';
                        document.querySelector('#ecoist-slider .slider-container .item.active').style.transformOrigin = 'left';
                        document.querySelector('#ecoist-slider .slider-container .item.active').style.opacity = '0.5';
                        this.style.transform = 'translate(0,0) scale(1)';
                        this.style.transformOrigin = 'right';
                        this.style.opacity = '1';
                        if (active === 0) {
                            elems[active + 1].style.transform = 'translate(0,0) scale(0.3)';
                            elems[active + 1].style.transformOrigin = 'center';
                            elems[active + 1].style.opacity = '0';
                            elems[active + 2].style.transform = 'translate(-100%,0) scale(0.5)';
                            elems[active + 2].style.transformOrigin = 'right';
                            elems[active + 2].style.opacity = '0.5';
                            elems[active].classList.remove('active')
                            this.classList.add('active')
                            active = elems.length - 1;
                        }else {

                        }
                    }
                }
            })
        })
        elems[active].classList.add('active')
        elems[active].style.opacity = '1';
        elems[active].style.transform = 'translate(0,0) scale(1)';
        elems[active + 1].style.transform = 'translate(100%,0) scale(0.5)';
        elems[active + 1].style.transformOrigin = 'left';
        elems[active + 1].style.opacity = '0.5'
        elems[elems.length - 1].style.transform = 'translate(-100%,0) scale(0.5)';
        elems[elems.length - 1].style.transformOrigin = 'right';
        elems[elems.length - 1].style.opacity = '0.5'
    }
    ecoistSlider();

    function ecoistSliderCursor(){

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


        document.querySelector('#ecoist-slider .slider-container').addEventListener('mousemove', function(e) {
            target.x = e.pageX,
            target.y = e.pageY;
            elem.classList.add('active')
            e.stopPropagation()
        })
        document.querySelector('#ecoist-slider .slider-container').addEventListener('mouseover', function(e) {
            elem.classList.add('active')
            e.stopPropagation()
        })
        document.addEventListener('mousemove', function(e) {
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
    ecoistSliderCursor()



}