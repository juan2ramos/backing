$(function () {
    /* SLIDER */
    var $panel = $('.panel')
    $close = $('.close');
    if ($('.slider').length > 0) {
        $('.slider').flexslider({
            animation: "fade",
            slideshow: true,
            prevText: "",
            nextText: ""
        });
    }
    $panel.hover(function () {
        $(this).addClass('flip');
    }, function () {
        $(this).removeClass('flip');
    });

    $panel.on('click', function () {
        var panel = $(this).data('panel');
        $('#' + panel).addClass('show');
    });
    $close.on('click',function(){
        $(this).parents('.back-pop-up').removeClass('show');
    });
});