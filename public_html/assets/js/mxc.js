$(document).ready(function () {
    // $("body").addClass("animate");
    // setTimeout(function () {
    //     $("header .secondFloor .leftContainer.active").addClass("animated")
    // },300)


    // setTimeout(function () {
    //     $("body").addClass("noTransition");
    // },2500);
    function fixHeader(){
        if($(window).scrollTop() > window.innerHeight){
            document.querySelector('.fixedHead').classList.add('active')
        }else {
            document.querySelector('.fixedHead').classList.remove('active')
        }
    }
    fixHeader();

    window.addEventListener('scroll',function(){
        fixHeader();
    })
    //firstFloor nav start

    $(".mainLinkInn").click(function () {
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
