var solutionF = function () {
    if (window.innerWidth < 1023) {
        $('.s_features_item').on('click', function () {
            $(this).find('.solution-hidden').slideToggle(500);

        })

    }
    else {
        $('.s_features_item').on('mouseenter', function () {
            $(this).find('.solution-hidden').slideDown(500);
            $(".s_features_item .item").css("padding-bottom", "31px");

        })
        $('.s_features_item').on('mouseleave', function () {
            $(this).find('.solution-hidden').slideUp(500);

        })
    }
}
solutionF();


$(window).resize(function () {
    setTimeout(() => {
        solutionF();
    }, 500);
});


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


function videoPopup() {
    if (document.querySelector('#solution-video-popup') != undefined) {
        document.querySelector('#playBtn').addEventListener('click', function (e) {
            e.preventDefault()
            document.querySelector('#solution-video-popup').classList.add('active')
        })
        document.querySelector('#close-video-popup').addEventListener('click', function () {
            document.querySelector('#solution-video-popup').classList.remove('active')
        })
    }
}
videoPopup()
