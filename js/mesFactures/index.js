$(document).ready(function () {
    $('.collapsible').collapsible({
        accordion : false
    });

    $('button.btn-cta-pdf').click(function(){
        
        //        $.ajax({
        //            url: '<?php echo BASE_URL;?>mesFactures/exportPDF',
        //            method: 'POST',
        //            data: {  },
        //            dataType: 'JSON'
        //        }).done(function(data, textStatus, jqXHR){
        //            console.log(data);
        //        }).fail(function(jqXHR, textStatus, errorThrown){
        //            console.error(jqXHR);
        //        });
    });
})