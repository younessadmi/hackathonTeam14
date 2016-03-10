$(document).ready(function(){
    $('.modal-trigger').leanModal();
    $('select').material_select();

    $('.modal-footer a.buy').click(function(){
        console.info('click');
        var product = $(this).parent().parent().attr('id');
        var idclient = $('input#idclient').val();
        var qte = $('#'+product+' select').val();
        var thisObject = $(this);
        $(this).html('<i class="fa fa-circle-o-notch fa-spin"></i>');
        $(this).prev('.cancel').hide('fast');
        $.ajax({
            url: '<?php echo BASE_URL;?>extra/orderProduct',
            method: 'POST',
            data: { product: product, idclient: idclient, qte: qte },
            dataType: 'JSON'
        }).done(function(data, textStatus, jqXHR){
            if(typeof data.error == 'undefined'){
                $(thisObject).html('<i class="fa fa-check"></i>');
                setTimeout(function(){
                    $(thisObject).fadeOut('fast', function(){
                        $(thisObject).html('<i class="fa fa-cart-plus"></i>');
                        $(thisObject).fadeIn('fast', function(){
                            $('#'+product).closeModal({
                                complete: function(){
                                    $(thisObject).prev('.cancel').show('slow');
                                }
                            });
                        });
                    });
                }, 1000);
            }else{
                $(thisObject).html('<i class="fa fa-exclamation-triangle"></i>');
                console.error(data.error);
            }
            console.log(data);
        }).fail(function(jqXHR, textStatus, errorThrown){
            console.error(jqXHR);
        });
    });
});