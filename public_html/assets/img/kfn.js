window.onload = function(){


	function ecoistSlider(){
		var elems = document.querySelectorAll('#ecoist-slider .slider-container .item'),
			active = 0,
			prev,
			prevTwo,
			prevThree,
			next,
			nextTwo,
			nextThree,
			nextStyleOne = "transform: translate(0%,0) scale(1); transform-origin: left; opacity: 1",
			nextStyleTwo = "transform: translate(-100%,0) scale(0.5); transform-origin: right; opacity: 0.5",
			nextStyleThree = "transform: translate(0%,0) scale(0.3); transform-origin: center; opacity: 0",
			nextStyleFour = "transform: translate(100%,0) scale(0.5); transform-origin: left; opacity: 0.5",
			prevStyleOne = "transform: translate(0%,0) scale(1); transform-origin: right; opacity: 1",
			prevStyleTwo = "transform: translate(100%,0) scale(0.5); transform-origin: left; opacity: 0.5",
			prevStyleThree = "transform: translate(0%,0) scale(0.3); transform-origin: center; opacity: 0",
			prevStyleFour = "transform: translate(-100%,0) scale(0.5); transform-origin: right; opacity: 0.5";
		elems.forEach(function(el){
			el.style.cssText = 'transform: translate(0,0) scale(0); opacity: 0';
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
			el.addEventListener('mouseover',function(){
				this.classList.add('hovered')
			})
			el.addEventListener('mouseleave',function(){
				this.classList.remove('hovered')
			})
			el.addEventListener('click',function(e){
				document.querySelector('#cursor .content').classList.add('focused')
				setTimeout(function() {
					document.querySelector('#cursor .content').classList.remove('focused')
				}, 300);
				this.classList.remove('hovered')
				if (!this.classList.contains('active')) {
					document.querySelector('#ecoist-slider .slider-container').style.pointerEvents = 'none';
					setTimeout(function() {
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
						setTimeout(function() {
							document.querySelectorAll('#ecoist-slider .text-container .text-item')[active].classList.add('active')
							$('#ecoist-slider .text-container .text-item.active').slideDown(1)
							$('#ecoist-slider .text-container .text-item.not-active').slideUp(1)
						}, 700);
					}else {
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
						setTimeout(function() {
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