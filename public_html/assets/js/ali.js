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



 	/*inputs script*/
 	const input = document.querySelectorAll(".placeholder-wrap");
 	input.forEach(function(item){
	    item.childNodes[1].onkeyup = function (){
	      if(item.childNodes[1].value != ''){
	        item.childNodes[3].style.opacity = "0";
	        // item.parentElement.classList.add("input-success");
	        item.parentElement.classList.remove("error");
	      }else{
	        item.childNodes[3].style.opacity = "1";
	        // item.parentElement.classList.remove("input-success");
	      }
	    }
	})

	function ValidateEmail(mail) {
	   if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail.value)){
	      mail.parentElement.parentElement.classList.remove("error");
	      return true;
	    }else{
	      mail.parentElement.parentElement.classList.add("error");
	      return false;
	    }
	  }

	  function ValidateEmpty(input) {
	   if ( input.value != ''){
	      input.parentElement.parentElement.classList.remove("error");
	      return true;
	    }else{
	      input.parentElement.parentElement.classList.add("error");
	      return false;
	    }
	  }


	  const contactBtn = document.getElementById("contact-btn");
	  const area = contactBtn.parentElement.parentElement;
	  let checker = arr => arr.every(Boolean);
	  contactBtn.onclick = function (){
	  	let errorArr = [];

	  	const vEmpty = area.querySelectorAll(".v-empty")
	  	vEmpty.forEach(function(item){
	  	    ValidateEmpty(item);
	  		errorArr.push(ValidateEmpty(item));
	  	})
	  	const vMail = area.querySelectorAll(".v-mail")
	  	vMail.forEach(function(item){
	  		ValidateEmail(item);
	  		errorArr.push(ValidateEmail(item));
	  	})
	  	if(checker(errorArr)){
	  		contactBtn.parentElement.parentElement.classList.add("success");
	  	}
	  }

	   const newMsgBtn = document.getElementById("new-msg");
	   newMsgBtn.onclick = function(){
	   		contactBtn.parentElement.parentElement.classList.remove("success");
	   		const input = contactBtn.parentElement.parentElement.querySelectorAll("input");
	   		const textarea = contactBtn.parentElement.parentElement.querySelectorAll("textarea");
	   		input.forEach(function(item){
	   			item.value = '';
	   			item.nextSibling.nextSibling.style.opacity = '1';
	   		})
	   		textarea.forEach(function(item){
	   			item.value = '';
	   			item.nextSibling.nextSibling.style.opacity = '1';
	   		})
	   }


})