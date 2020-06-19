$(document).ready(function () {

	var mySwiper = new Swiper ('.swiper-subMenu', {
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

	var mySwiper = new Swiper ('.stories-slider', {
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

var mySwiper = new Swiper('.direction-slider', {
  speed: 1000,
  slidesPerView: 1,
  spaceBetween: 30,
  watchOverflow: true,
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
    	spaceBetween: 30
    },
    1366: {
    	spaceBetween: 60,
    },
    1599: {
    	spaceBetween: 60
    },
    1900: {
    	spaceBetween: 60
    }
  }
});

var mySwiper = new Swiper('.packages-slider', {
  speed: 1000,
  slidesPerView: "auto",
  navigation: {
	 nextEl: '.swiper-button-next',
	 prevEl: '.swiper-button-prev',
  },
  watchOverflow: true,
  breakpoints: {
    320: {
    	spaceBetween: 10,
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

/*date select*/
$("#rangeDate").flatpickr({
    mode: 'range',
    dateFormat: "Y-m-d"
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

 // menuList.forEach(function(item){  
 //  for(let i=1; i < item.children.length; i++){
 //     item.children[i].children[2].style.transitionDelay =  (item.children.length - i)/20 + 0.3 + "s";
 //     item.children[i].children[2].style.transform = "translateX("+ (item.children.length - i + 20) +"px)";
 //     item.children[i].children[0].style.transitionDelay =  (item.children.length - i)/20 + 0.3 + "s";
 //  }

 // })



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

	 if (document.querySelector('body').classList.contains('page-contact')){

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

		}

	   /*contact tabs scripts*/

	   const tabCont = document.querySelectorAll(".tabs");
	   const branchesWrap = document.getElementById("branches-grid-wrap");

	   tabCont.forEach(function(item){
		   	for(let i =0; i < item.children.length; i++){
		   		item.children[i].onclick = function(){
		   			for(let j =0; j < item.children.length; j++){
		   				item.children[j].classList.remove("active");
		   			}
		   			item.children[i].classList.add("active");
		   			for(let k = 0; k < branchesWrap.children.length; k++){
		   				$("#branches-grid-wrap").children().eq(k).slideUp();
		   			}
		   			let branchId =item.children[i].getAttribute("data-branch");
		   			setTimeout(() => $('#' + branchId).slideDown(), 600);
		   		}
		   	}
	   })


	   /*policy compare*/

	   /**hovers**/
	   const compareItem = document.querySelectorAll(".compare-item");
	   
	   compareItem.forEach(function(item){
	   	item.addEventListener("mouseenter", function(){
	   		let attribute = item.getAttribute("data-hover");
	   		let itemWithSameAttr = document.querySelectorAll("[data-hover='" + attribute + "']");
	   		itemWithSameAttr.forEach(function(item2){
	   			item2.classList.add("hovered");
	   		})
		  })
		  item.addEventListener("mouseleave", function(){
		    let attribute = item.getAttribute("data-hover");
	   		let itemWithSameAttr = document.querySelectorAll("[data-hover='" + attribute + "']");
	   		itemWithSameAttr.forEach(function(item2){
	   			item2.classList.remove("hovered");
	   		})
		  })
	   })




   /*start of head slider*/


 	const slideBtn = document.querySelectorAll(".slide-btn");
 	const body = document.getElementsByTagName("BODY")[0];
 // 	let allowToChange;
 // 	allowToChange = false;
	// setTimeout(() => allowToChange = true, 1200);
 	var timeout;

	slideBtn.forEach(function(item){

			item.addEventListener("mouseenter", function(e){
				const mouseEnter = function(){

					/*სლაიდს ვცვლით თუ 2 მილიწამი გააჩერა მაუსი*/
					clearTimeout(timeout);	
					timeout = setTimeout(function(){


				    	let attribute = item.getAttribute("data-slide");
				    	const parent = item.parentElement.parentElement;

				    	const slides = parent.querySelectorAll(".slide");
				    	const slide = parent.querySelector("[data-slide='" + attribute + "']");

				    	/*ღილაკის ჰოვერი*/
				    	item.classList.add("hovered");

				    	let checkFirstHover = false; /*პირველ ჰოვერზე რადგან slide in კლასი არაა რომ დავადოთ slide out, ვიგებთ ამას და პირველ სლაიდს ვადებთ slkide-in კლასს*/
				    	
				    	slides.forEach(function(slide){
				    		if(slide.classList.contains("slide-in")){
				    			checkFirstHover = true;
				    		}
				    	})

				    	/*პირველ ცდაზე slide out კლასს ვადებთ 1 სურათს*/
				    	if(checkFirstHover === false){
				    		slides[0].classList.add("slide-out");
				    		setTimeout(() => slides[0].classList.remove("slide-out"), 1000);

				    		body.classList.add("disable");
				    		setTimeout(() => body.classList.remove("disable"), 1000);
				    	}else/*ვადებთ slide out კლასს იმ სურათს რომელიც არის გამოტანილი, რომ ავიდეს ზევით*/
				    	{ 
					    	slides.forEach(function(slide){
					    		if(slide.classList.contains("slide-in")){
					    			slide.classList.add("slide-out")
					    			slide.classList.remove("slide-in")
					    			setTimeout(() => slide.classList.remove("slide-out"), 1000);

					    			body.classList.add("disable");
				    				setTimeout(() => body.classList.remove("disable"), 1000);
					    		}
					    	})
					    }
				    	slide.classList.add("slide-in");

				    },500);
			    	
			    }
			    mouseEnter();
			})
			item.addEventListener("mouseleave", function(e){
				const mouseLeave = function(){
					/*ღილაკის ჰოვერი*/
					slideBtn.forEach(function(item){
						item.classList.remove("hovered");
					})

					clearTimeout(timeout);	
					timeout = setTimeout(function(){

						const parent = item.parentElement.parentElement;
						const slides = parent.querySelectorAll(".slide");

						/*ანჰოვერზე გაგვაქვს სლაიდი და შემოგვაქვს პირველი სუღათი*/
						slides.forEach(function(slide){
				    		if(slide.classList.contains("slide-in")){
				    			slide.classList.add("slide-out")
				    			slide.classList.remove("slide-in")
				    			setTimeout(() => slide.classList.remove("slide-out"), 1000);

				    			body.classList.add("disable");
				    			setTimeout(() => body.classList.remove("disable"), 1000);
				    		}
				    	})
						slides[0].classList.add("slide-in");

				    },500);
				}
				mouseLeave();
			 })

	})

 	


	/*start of direction with hover*/

	const direction = document.querySelectorAll(".direction");

	direction.forEach(function(item){
		const text = item.querySelector(".text");
		const txt = item.querySelector(".txt");
		const hover = item.querySelector(".hover");

		const hoverHeight = hover.offsetHeight;
		const textHeight = text.offsetHeight;


		txt.style.height = textHeight + 'px';

		
		item.addEventListener("mouseenter", function(){
			clearTimeout(timeout);	
			timeout = setTimeout(function(){
				setTimeout(() => txt.style.height = hoverHeight + 'px', 0);
				setTimeout(() => text.classList.add("hide"), 600);
				txt.classList.add("hovered");
			},200);
		})

		item.addEventListener("mouseleave", function(){
			clearTimeout(timeout);	
			timeout = setTimeout(function(){
				setTimeout(() => txt.style.height = textHeight + 'px', 0);
				setTimeout(() => text.classList.remove("hide"), 600);
				txt.classList.remove("hovered");
			},200);
		})


	})


})