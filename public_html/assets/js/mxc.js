$(document).ready(function () {
    // $("body").addClass("animate");
    // setTimeout(function () {
    //     $("header .secondFloor .leftContainer.active").addClass("animated")
    // },300)


    // setTimeout(function () {
    //     $("body").addClass("noTransition");
    // },2500);

    // sub menu logic start

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
            },100);
            setTimeout(function () {
                thisBtn.parent().addClass("active");

            },600);
            var endOfTransition = (thisBtn.parent().children().length * 100) + 700;

            setTimeout(function () {
                thisBtn.css("pointer-events","all");
            },endOfTransition)
        }else{
            $(".subMenuPicLinkContainer").removeClass("animated");
            var endOfTransition = (thisBtn.parent().children().length * 100) + 600;
            $(this).removeClass("active");
            thisBtn.css("pointer-events","none");
            thisBtn.parent().removeClass("active");
            setTimeout(function () {
                thisBtn.siblings(".subTag").hide();
                thisBtn.siblings(".closeSubMenu").hide();
                thisBtn.parent().parent().css("height",50 + 'px');
                thisBtn.css("pointer-events","all");

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
