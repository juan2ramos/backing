$(function  () {
	 /* SLIDER */
        if ($('.slider').length > 0) {
                $('.slider').flexslider({
                animation: "none",
                slideshow: true,
                prevText: "<",
                nextText: ">" 
              });
        }
    $('#la-agencia li').hover(function(){
        $(this).addClass('flip');
    },function(){
        $(this).removeClass('flip');
    });
});