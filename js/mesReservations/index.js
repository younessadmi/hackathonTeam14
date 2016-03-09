$(document).ready(function(){
    var viewDisplayed = '#en-cours';
    var viewDisplaying = '#en-cours';


    $('#button-list button').click(function(){
        viewDisplayed = viewDisplaying;
        viewDisplaying = $(this).attr('href');
        if(viewDisplayed != viewDisplaying){
            $('section'+viewDisplayed).slideToggle('fast', function(){
                $('section'+viewDisplaying).slideToggle('fast');
            });
        }
//        console.log(viewDisplayed+' > '+viewDisplaying);
    });
});