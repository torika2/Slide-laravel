$(document).ready(function () {

    $(".aboutHistory").click(function () {
        if(!$(this).hasClass("active")){
            $(".aboutHistory").removeClass("active");
            $(this).addClass("active");
            $(".aboutHistoryDescr").css("height","0px");
            $(this).children(".aboutHistoryDescr").css("height", $(this).find(".aboutHistoryDescrInner").height() + "px");
            console.log($(this).find(".aboutHistoryDescrInner").height())
        }else{
            $(".aboutHistory").removeClass("active");
            $(".aboutHistoryDescr").css("height","0px");
        }
    });

    var observerSl = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active-sl')
            }
        });
    }, { rootMargin: "0px 0px 0px 0px" });
    document.querySelectorAll('.companyHistorySl').forEach(img => { observerSl.observe(img) });

    $(".mobT").click(function () {
        if(window.innerWidth < 768){
            if(!$(this).hasClass("active")){
                $(".mobT").removeClass("active")
                $(".mobTOpener").css("height","0px");
                $(this).next(".mobTOpener").css("height", $(this).next(".mobTOpener").children().height() + 20 + "px");
            }else{
                $(".mobTOpener").css("height","0px");
            }

        }
    });

    $(".directInnerTabListContainer").css("height",$(".directInnerTabListInner").height() + 'px');
    $(window).resize(function () {
        if($("#searchContainer").hasClass("active")){
            $("#searchContainer").css("height",$(".searchInner").height() + "px")
        }

        $(".mainTag.active").click();
        $(".picturesContainer").css("height",$(".picturesInner").height() + 'px');
        $(".directInnerTabListContainer").css("height",$(".directInnerTabListInner").height() + 'px');

    });


    //company history start

    var historySlider = new Swiper('.companyHistorySlider', {
        slidesPerView: 'auto',
        spaceBetween: 30,
        freeMode: true,

    });
    var teamSlider = new Swiper('.teamSlider', {
        slidesPerView: 'auto',
        // spaceBetween: 30,
        freeMode: true,

    });

    //company history end


    // pictures tabs start

    $(".busTab").click(function () {
        let index = $(this).attr("data-index");
        if(!$(this).hasClass("active") && $(".directHeadContainer").hasClass("businessGallery") ){
            $(".busTab").removeClass("active");
            $(".picturesContainer").removeClass("animated");
            $(this).addClass("active");


            setTimeout(function () {
                $(".picturesMain").removeClass("active");
                $(".picturesInner").children("[data-index=" + index + "]").addClass("active");

            },650)

            setTimeout(function () {
                $(".picturesContainer").css("height",$(".picturesInner").height() + 'px');
                $(".picturesContainer").addClass("animated");
            },750)
        }
        if(!$(this).hasClass("active") && $(".directHeadContainer").hasClass("businessInner") ){
            $(".busTab").removeClass("active");
            $(".directInnerTabListContainer").removeClass("animate");
            $(this).addClass("active");


            setTimeout(function () {
                $(".directInnerTabList").removeClass("active");
                $(".directInnerTabListInner").children("[data-index=" + index + "]").addClass("active");

            },650)

            setTimeout(function () {
                $(".directInnerTabListContainer").css("height",$(".directInnerTabListInner").height() + 'px');
                $(".directInnerTabListContainer").addClass("animate");
            },750)
        }

    });

    // pictures tabs end

    $(".helpBtn").click(function () {
        if(!$(this).hasClass("active")){
            $(".helpBtn").addClass("active");
            $("body").addClass("help");
        }else{
            $(".helpBtn").removeClass("active");
            $("body").removeClass("help");
        }
    });
    $(".closeHelp").click(function () {
        $(".helpBtn").removeClass("active");
        $("body").removeClass("help");
    });
    $(".claimBtn").click(function () {
        $("#claimPopup").addClass("active");
    });
    $(".closeClaim").click(function () {
        $("#claimPopup").removeClass("active");
    })

    // footer mobile tabs start

    $(".mobT").click(function () {

        if(window.innerWidth < 768){
            if(!$(this).hasClass("active")){
                $(this).addClass("active")
            }else{
                $(this).removeClass("active");
            }

        }
    });

    // footer mobile tabs end




    function fixHeader(){
        if($(window).scrollTop() > window.innerHeight){
            document.querySelector('.fixedHead').classList.add('active')
        }else {
            if(!$(".fixedMenuContainer").hasClass("open")){
                document.querySelector('.fixedHead').classList.remove('active')
            }

        }
    }
    fixHeader();

    window.addEventListener('scroll',function(){
        fixHeader();
    });


    var searchOpener = function () {
        $(".closeFixMenu").click();
        if(!$("#searchContainer").hasClass("active")){
            $(".subMenuBtn.opened").click();
            $("html, body").animate({ scrollTop: 0 }, "slow");
            $(".searchBtn").addClass("active");
            $("#searchContainer").addClass("active");
            $("#searchContainer").css("height",$(".searchInner").height() + "px")
        }else{
            $("#searchContainer").css("height",0 + "px")
            $("#searchContainer").removeClass("active");
            $(".searchBtn").removeClass("active");
        }
    };



    $(".searchBtn").click(function () {
        searchOpener();
    });
    //fixed menu logic start

    var subMenuHeight = function(){
        $(".fixedMenuListContainer").css("height",$(".fixedMenuListContainer").children(".active").height() + "px");
    };
    setTimeout(function () {
        subMenuHeight()
    },500);

    $(".burger").click(function () {

            console.log("burger")
            $(".fixedMenuContainer").show();
            if(window.innerWidth < 1024){
                $(".fixedHead").addClass("mobile");
            }
            setTimeout(function () {
                subMenuHeight()
                $(".fixedMenuContainer").addClass("open");

            },100);
            setTimeout(function () {
                $(".fixedHead").addClass("active");
                $(".fixedMenuContainer").addClass("active");
                $("div.fxHead.active").click();
                // $(".fixedMenuListContainer").addClass("animate");

            },600);
            setTimeout(function () {
                $(".fixedMenuContainerInner").css("overflow","scroll");
                $("body").css("overflow","hidden").css("height","100vh");
            },1800)
    });

    $(".fixedMenuListLine  .ttl").click(function () {
        if(window.innerWidth < 768){
            if(!$(this).hasClass("active")){
                $(".fixedMenuListLine  .ttl").removeClass("active");
                $(this).addClass("active");

                setTimeout(function () {
                    subMenuHeight();
                },400)
            }else{
                $(".fixedMenuListLine  .ttl").removeClass("active");
            }
        }
    });

    $(".closeFixMenu").click(function () {
        $(".fixedMenuContainerInner").css("overflow","hidden");
        $("body").css("overflow","auto").css("height","auto");
        $(".fixedMenuContainer").removeClass("open");
        $(".fixedMenuContainerInner").css("overflow","hidden");
        if(window.innerWidth < 1024){
            $(".fixedHead").removeClass("mobile");
        }

        setTimeout(function () {
            $(".fixedMenuListContainer").removeClass("animate");
            $(".fixedMenuContainer").removeClass("active");
            $(".fxHead").parent().removeClass("active");
            if($(window).scrollTop() < window.innerHeight){
                $(".fixedHead").removeClass("active");
            }

        },100);
        setTimeout(function () {
            $(".fixedMenuContainer").hide();
        },1100);
    });
    $(".burgerClose").click(function () {
        $(".closeFixMenu").click()
    });

    $(".mainLinkInn.fxHead").click(function () {
        if(!$(this).parent().hasClass("active")){
            $(".mainLinkInn.fxHead").parent().removeClass("active");
            $(this).parent().addClass("active");
            var index = $(this).parent().attr("data-index");
            $(".fixedMenuListContainer").removeClass("animate");
            setTimeout(function () {
                $(".fixedMenuListInnerContainer").removeClass("active");
                $(".fixedMenuListContainer").children("[data-index=" + index + "]").addClass("active");
            },650);
            setTimeout(function () {
                $(".fixedMenuListContainer").addClass("animate");
            },700);
            setTimeout(function () {
                subMenuHeight()
            },800);
        }

    });


    $(".fixedMenuNavLink.hasSub").click(function () {
        if(!$(this).hasClass("active")){
            $(".fixedMenuNavLink.hasSub").removeClass("active");
            $(this).addClass("active");
            $(".fixedMenuSubContainerOuter").removeClass("active").css("height","0px");
            $(this).next(".fixedMenuSubContainerOuter").css("height",$(this).next(".fixedMenuSubContainerOuter").children(".fixedMenuSubContainer").height() + "px");
            $(".fixedMenuListContainer").css("height",$(".fixedMenuListContainer").children(".active").height() + $(this).next(".fixedMenuSubContainerOuter").children(".fixedMenuSubContainer").height() + "px");

            $(this).next(".fixedMenuSubContainerOuter").addClass("active");
        }else{
            $(".fixedMenuSubContainerOuter").removeClass("active").css("height","0px");
            $(this).removeClass("active");
            $(this).next(".fixedMenuSubContainerOuter").removeClass("active");
            setTimeout(function () {
                subMenuHeight()
            },600)
        }
    });

    //fixed menu logic end

    //firstFloor nav start

    $(".mainLinkInn.mainHead").click(function () {
        if(!$(this).parent().hasClass("active") && $(this).parent().is("div")){
            $(".subMenuBtn.opened").click();
            $(".mainLink").removeClass("active");
            $(this).parent().addClass("active");
            let thisIndex = $(this).parent().attr("data-index");
            $(".secondFloor .leftContainer.active").removeClass("animated");
            setTimeout(function () {
                $("header .secondFloor .leftContainer").removeClass("active");
                $("header .secondFloor").children("[data-index=" + thisIndex + "]").addClass("active");
            },850);
            setTimeout(function () {
                $("header .secondFloor").children("[data-index=" + thisIndex + "]").addClass("animated");
            },900);
            $(".secondFloor .leftContainer").removeClass("animated");
            console.log(thisIndex)
        }
    });

    //firstFloor nav end

    // sub menu logic start


    $(".subMenuBtn").click(function () {
        var subIndex = $(this).attr("data-sub");
        $(".subMenuBtn").css("pointer-events","none");
        if($(this).hasClass("opened")){
            console.log("noo")
            $(".subMenuBtn").removeClass("opened");
            $(".subMenu").removeClass("animate");
            setTimeout(function () {
                $(".subHeight").children().removeClass("active");
                $(".subMenu").css("height",0 + "px").css("opacity","0");
                $(".subMenuBtn").css("pointer-events","all");
            },850);
            return false
        }
        if(!$(this).hasClass("opened") && !$(".subMenuBtn").hasClass("opened")){
            $(".subMenuBtn").removeClass("opened");
            $(this).addClass("opened");
            $(".subHeight").children().removeClass("active");
            $(".subHeight").children("[data-sub=" + subIndex + "]").addClass("active");
            $(".subMenu").css("height",$(".subHeight").height() + "px").css("opacity","1");
            setTimeout(function () {
                $(".subMenu").addClass("animate");
                $(".subMenuBtn").css("pointer-events","all");
            },600)
        }
        if(!$(this).hasClass("opened") && $(".subMenuBtn").hasClass("opened")){

            $(".subMenuBtn").removeClass("opened");
            $(".subMenu").removeClass("animate");
            $(this).addClass("opened");
            setTimeout(function () {
                $(".subHeight").children().removeClass("active");
                $(".subHeight").children("[data-sub=" + subIndex + "]").addClass("active");
                $(".subMenu").css("height",$(".subHeight").height() + "px");

            },850);
            setTimeout(function () {
                $(".subMenuBtn").css("pointer-events","all");
                $(".subMenu").addClass("animate");
            },900)

        }




    });




    $(".mainTag.tag").click(function () {
        var thisBtn = $(this);
        var thisBtnLast = $(this);

        if(!$(this).hasClass("active")){
            $(".mainTag.active").click();
            $(".subMenuPicLinkContainer").addClass("animated");
            $(this).addClass("active").css("pointer-events","none");
            $(this).siblings(".subTag").css("display","flex");
            $(this).siblings(".closeSubMenu").css("display","flex");

            for(var i = 0;i < $(this).parent().children().length;i++){
                $(this).parent().children().eq(i).css("transition-delay",i / 10 + "s");
            }
            setTimeout(function () {
                thisBtn.parent().parent().css("height",thisBtn.parent().height() + 'px');
                $(".subMenu").css("height",$(".subHeight").height() + thisBtn.parent().height() + "px");
            },100);
            setTimeout(function () {
                thisBtn.parent().addClass("active");
            },600);
            var endOfTransition = (thisBtn.parent().children().length * 100) + 700;

            setTimeout(function () {
                thisBtn.css("pointer-events","all");
                $(".subTag").css("transition-delay",0 + "s");
            },endOfTransition)
        }else{
            for(var i = 0;i < $(this).parent().children().length;i++){
                $(this).parent().children().eq(i).css("transition-delay",i / 10 + "s");
            }
            $(".subMenuPicLinkContainer").removeClass("animated");
            var endOfTransition = (thisBtn.parent().children().length * 100) + 400;
            $(this).removeClass("active");

            thisBtn.css("pointer-events","none");
            thisBtn.parent().removeClass("active");
            setTimeout(function () {
                thisBtn.siblings(".subTag").hide();
                thisBtn.siblings(".closeSubMenu").hide();
                if(window.innerWidth > 1365){
                    thisBtn.parent().parent().css("height",50 + 'px');
                }else{
                    thisBtn.parent().parent().css("height",40 + 'px');
                }

                thisBtn.css("pointer-events","all");
                setTimeout(function () {
                    $(".subMenu").css("height",$(".subHeight").height() + "px");
                },600)

            },endOfTransition);
        }

        $(".closeSubMenu").click(function () {
            if($(this).siblings(".mainTag").hasClass("active")){
                $(this).siblings(".mainTag").click();
            }

        });

    });

    // sub menu logic end


});
