$(function () {
    /* SLIDER */
    var $panel = $('.panel');
    var $sound = $('#sound');



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
    $('#agencia').on('click', function () {

        event.preventDefault();
        $('#la-agencia-pop').addClass('show');
    });
    $close.on('click',function(){
        var youtube = jQuery('iframe[src*="youtube"]');
        var src = youtube.attr('src');
        youtube.attr('src', '');
        youtube.attr('src', src);
        $(this).parents('.back-pop-up').removeClass('show');
    });
});