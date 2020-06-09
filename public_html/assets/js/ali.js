$(document).ready(function () {

	const subMenuSliderStart = function(){
		const subMenuSlider = document.querySelectorAll(".swiper-subMenu");
		subMenuSlider.forEach(function(item){
			if(item.childNodes[1].children.length <= 3){
				var mySwiper = new Swiper ('.swiper-subMenu', {
				    speed: 400,
				    slidesPerView: 3,
				    spaceBetween: 60,
				    breakpoints: {
				      320: {
				        spaceBetween: 15,
				        slidesPerView: 1.145,
				        touchRatio: 1
				      },
				      768: {
				        spaceBetween: 15,
				        touchRatio: 0
				      },
				      1024: {
				        spaceBetween: 33,
				        touchRatio: 0
				      },
				      1366: {
				        spaceBetween: 60,
				        touchRatio: 0
				      },
				      1599: {
				        spaceBetween: 60,
				        touchRatio: 0
				      },
				      1900: {
				        spaceBetween: 60,
				        touchRatio: 0
				      }
				    }
				  });
			}else{
				var mySwiper = new Swiper ('.swiper-subMenu', {
				    speed: 400,
				    slidesPerView: 3,
				    spaceBetween: 60,
				    breakpoints: {
				      320: {
				        spaceBetween: 15,
				        slidesPerView: 1.145
				      },
				      768: {
				        spaceBetween: 15
				      },
				      1024: {
				        spaceBetween: 33
				      },
				      1366: {
				        spaceBetween: 60
				      },
				      1599: {
				        spaceBetween: 60
				      },
				      1900: {
				        spaceBetween: 60
				      }
				    }
				  });
			}
		})
	}
	const storiesSliderStart = function(){
		const storiesSlider = document.querySelectorAll(".stories-slider");
		storiesSlider.forEach(function(item){
			if(item.childNodes[1].children.length <= 3){
				var mySwiper = new Swiper ('.stories-slider', {
				    speed: 400,
				    slidesPerView: 3,
				    spaceBetween: 60,
				    breakpoints: {
				      320: {
				        spaceBetween: 15,
				        slidesPerView: 1.145,
				        touchRatio: 1
				      },
				      768: {
				        spaceBetween: 15,
				        touchRatio: 0
				      },
				      1024: {
				        spaceBetween: 30,
				        touchRatio: 0
				      },
				      1366: {
				        spaceBetween: 60,
				        touchRatio: 0
				      },
				      1599: {
				        spaceBetween: 60,
				        touchRatio: 0
				      },
				      1900: {
				        spaceBetween: 60,
				        touchRatio: 0
				      }
				    }
				  });
			}else{
				var mySwiper = new Swiper ('.stories-slider', {
				    speed: 400,
				    slidesPerView: 3,
				    spaceBetween: 60,
				    breakpoints: {
				      320: {
				        spaceBetween: 15,
				        slidesPerView: 1.145
				      },
				      768: {
				        spaceBetween: 15
				      },
				      1024: {
				        spaceBetween: 30
				      },
				      1366: {
				        spaceBetween: 60
				      },
				      1599: {
				        spaceBetween: 60
				      },
				      1900: {
				        spaceBetween: 60
				      }
				    }
				  });
			}
		})
	}
	subMenuSliderStart();
	storiesSliderStart();
  $(window).resize(function(){
  	setTimeout(subMenuSliderStart, 500)
  	setTimeout(storiesSliderStart, 500)
  });

  var mySwiper = new Swiper('.newsOuter-slider', {
  speed: 400,
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

var mySwiper = new Swiper('.direction-slider', {
  speed: 400,
  slidesPerView: 1,
  spaceBetween: 30,
  pagination: {
  	el: '.swiper-pagination',
  },
  navigation: {
	 nextEl: '.swiper-button-next',
	 prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    320: {
    },
    768: {
    },
    1024: {
    },
    1366: {
    },
    1599: {
    },
    1900: {

    }
  }
});



/*set transition delay to menu item  and svg, translate to span*/
 const menuList = document.querySelectorAll(".menu-list-inner");
 const subMenuSlide = document.querySelectorAll(".subMenuSlide");
 subMenuSlide.forEach(function(item){
  item.addEventListener("mouseenter", function(){
    setTimeout(() => item.classList.add("hovered"), 1000);
  })
  item.addEventListener("mouseleave", function(){
    item.classList.remove("hovered");

  })
 })
 menuList.forEach(function(item){  
  for(let i=1; i < item.children.length; i++){
     item.children[i].children[2].style.transitionDelay =  (item.children.length - i)/20 + 0.3 + "s";
     item.children[i].children[2].style.transform = "translateX("+ (item.children.length - i + 20) +"px)";
     item.children[i].children[0].style.transitionDelay =  (item.children.length - i)/20 + 0.3 + "s";
  }

 })

})