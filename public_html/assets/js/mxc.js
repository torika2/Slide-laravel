$(document).ready(function () {
    /*-------------------------------------------------------------------------------
develor tab js
-------------------------------------------------------------------------------*/
    if ($('.develor_tab li a').length > 0) {
        $(".develor_tab li a").click(function () {
            var tab_id = $(this).attr("data-tab");
            $(".tab_img").removeClass("active");
            $("#" + tab_id).addClass("active");
        });
    }

    /*-------------------------------------------------------------------------------*/
    function pr_slider() {
        var pr_image = $('.pr_image');
        var bigimage = $('.pr_image');
        var syncedSecondary = true;
        var thumbs = $("#thumbsProduct");
        if (pr_image.length) {
            pr_image.owlCarousel({
                loop: true,
                items: 1,
                autoplay: true,
                dots: false,
                thumbs: true,
                thumbImage: true,
                nav: true,
            }).on("changed.owl.carousel", syncPosition);

            thumbs
                .on("initialized.owl.carousel", function() {
                    thumbs
                        .find(".owl-item")
                        .eq(0)
                        .addClass("current");
                })
                .owlCarousel({
                    items: 4,
                    dots: false,
                    nav: true,
                    navText: [
                        '<i aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="15.207" height="13.414" viewBox="0 0 15.207 13.414">' +
                        '  <g id="Group_804" data-name="Group 804" transform="translate(0.707 0.707)">' +
                        '    <line id="Line_21" data-name="Line 21" x1="13" transform="translate(1 6)" fill="none" stroke="#adadb8" stroke-linecap="round" stroke-width="1"/>' +
                        '    <line id="Line_22" data-name="Line 22" x1="6" y2="6" fill="none" stroke="#adadb8" stroke-linecap="round" stroke-width="1"/>' +
                        '    <line id="Line_23" data-name="Line 23" x1="6" y1="6" transform="translate(0 6)" fill="none" stroke="#adadb8" stroke-linecap="round" stroke-width="1"/>' +
                        '  </g>' +
                        '</svg></i>',
                        '<i aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="15.207" height="13.414" viewBox="0 0 15.207 13.414">' +
                        '  <g id="Group_803" data-name="Group 803" transform="translate(-1325 -2275.793)">' +
                        '    <line id="Line_21" data-name="Line 21" x2="13" transform="translate(1325.5 2282.5)" fill="none" stroke="#adadb8" stroke-linecap="round" stroke-width="1"/>' +
                        '    <line id="Line_22" data-name="Line 22" x2="6" y2="6" transform="translate(1333.5 2276.5)" fill="none" stroke="#adadb8" stroke-linecap="round" stroke-width="1"/>' +
                        '    <line id="Line_23" data-name="Line 23" y1="6" x2="6" transform="translate(1333.5 2282.5)" fill="none" stroke="#adadb8" stroke-linecap="round" stroke-width="1"/>' +
                        '  </g>' +
                        '</svg></i>'
                    ],
                    smartSpeed: 200,
                    margin:20,
                    slideSpeed: 500,
                    slideBy: 4,
                    responsiveRefreshRate: 100
                }).on("changed.owl.carousel", syncPosition2);

            function syncPosition(el) {
                //if loop is set to false, then you have to uncomment the next line
                //var current = el.item.index;

                //to disable loop, comment this block
                var count = el.item.count - 1;
                var current = Math.round(el.item.index - el.item.count / 2 - 0.5);

                if (current < 0) {
                    current = count;
                }
                if (current > count) {
                    current = 0;
                }
                //to this
                thumbs
                    .find(".owl-item")
                    .removeClass("current")
                    .eq(current)
                    .addClass("current");
                var onscreen = thumbs.find(".owl-item.active").length - 1;
                var start = thumbs
                    .find(".owl-item.active")
                    .first()
                    .index();
                var end = thumbs
                    .find(".owl-item.active")
                    .last()
                    .index();

                if (current > end) {
                    thumbs.data("owl.carousel").to(current, 100, true);
                }
                if (current < start) {
                    thumbs.data("owl.carousel").to(current - onscreen, 100, true);
                }
            }

            function syncPosition2(el) {
                if (syncedSecondary) {
                    var number = el.item.index;
                    bigimage.data("owl.carousel").to(number, 100, true);
                }
            }

            thumbs.on("click", ".owl-item", function(e) {
                e.preventDefault();
                var number = $(this).index();
                bigimage.data("owl.carousel").to(number, 300, true);
            });
        }
    };
    pr_slider();

    $(".softTabsContainer div").click(function () {
        $(".softTabsContainer div").removeClass("active");
        $(this).addClass("active");
        if($(this).hasClass("annBtn")){
            $(".annBil").show();
            $(".monBil").hide();
        }else{
            $(".annBil").hide();
            $(".monBil").show();
        }
    });
});
