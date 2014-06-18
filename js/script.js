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

        $('#mySound').pause();
    });
    $panel.on('click', function () {
        var panel = $(this).data('panel');
        $('#' + panel).addClass('show');
    });
    $close.on('click',function(){
        $(this).parents('.back-pop-up').removeClass('show');
    });
});