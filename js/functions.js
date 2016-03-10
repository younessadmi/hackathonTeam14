$(document).ready(function(){
    $(".button-collapse").sideNav();

    $(window).scroll(function(){
        if ($(this).scrollTop() > 80) {
            $('.label-fixed').addClass('fixed');
        } else {
            $('.label-fixed').removeClass('fixed');
        }
    });
});