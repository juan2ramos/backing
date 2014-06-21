$(function () {
    /* SLIDER */
    var $panel = $('.panel'),
        $sound = $('#sound'),
        $link  = $('.link');



    $close = $('.close');
    if ($('.slider').length > 0) {
        $('.slider').flexslider({
            animation: "fade",
            slideshow: true,
            prevText: "",
            nextText: ""
        });
    }
    if ($('.slider-client').length > 0) {
        $('.slider-client').flexslider({
            animation: "slide",
            animationLoop: true,
            itemWidth: 225,
            itemMargin: 4
        });
    }

    $panel.hover(function () {
        $(this).addClass('flip');
    }, function () {
        $(this).removeClass('flip');
    });
    $sound.on('click',function(){

        var song = $('#mySound').get(0);
        if (song.paused) {
            song.play();
            $('.waves').removeClass("hidden");
        }
        else {
            song.pause();
            $('.waves').addClass("hidden");
        }
    });
    $panel.on('click', function () {
        var panel = $(this).data('panel');
        $('#' + panel).addClass('show');
    });
    $link.on('click', function () {
        event.preventDefault();
        var link = $(this).data('link');
        $('#' + link).addClass('show');
        var you = $('#' + link + '-video').find('iframe[src*="youtube"]');
        var src = you.attr('src');
        var srcArray = src.split("?");
        you.attr('src',srcArray[0]+'?rel=0&autoplay=1')


    });
    $close.on('click',function(){

        var youtube = $(this).siblings('.content-slider').find('iframe[src*="youtube"]');

        var src = youtube.attr('src');

        youtube.attr('src', '');
        youtube.attr('src', src);
        $(this).parents('.back-pop-up').removeClass('show');
        $(this).parents('.back-link').removeClass('show');
    });
});