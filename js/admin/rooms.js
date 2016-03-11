$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
        var min = parseInt( $('#min').val(), 10 );
        var max = parseInt( $('#max').val(), 10 );
        var age = parseFloat( data[3] ) || 0; // use data for the age column

        if ( ( isNaN( min ) && isNaN( max ) ) ||
            ( isNaN( min ) && age <= max ) ||
            ( min <= age   && isNaN( max ) ) ||
            ( min <= age   && age <= max ) )
        {
            return true;
        }
        return false;
    }
);

function $_GET(param) {
    var vars = {};
    window.location.href.replace( location.hash, '' ).replace( 
        /[?&]+([^=&]+)=?([^&]*)?/gi, // regexp
        function( m, key, value ) { // callback
            vars[key] = value !== undefined ? value : '';
        }
    );

    if ( param ) {
        return vars[param] ? vars[param] : null;	
    }
    return vars;
}

$(document).ready(function(){

    $baseUrl = $('#base-url').html();
    $idUrl = 0;

    $('select').material_select();
    $('.caret').html("");

    $img = $("#picture-info-hidden");
    var table = $('#datatable').DataTable( {
        "drawCallback": function( settings ) {
            $('#datatable tbody tr').each(function(){
                $(this).css("border","none");
            });

            $('#datatable tbody tr').on('click', function(){
                $tr = $(this);
                $('#datatable tbody tr').each(function(){
                    $(this).css("border","none");
                });
                $tr.css("border","solid 1px #38A7C6");
            });


            if($_GET('customer') == null){

                $('#datatable tbody tr').on('click', function(){
                    $('#infos-sidebar').html("");
                    $info = $(this).children().last().children();
                    if($info.length > 0){


                        $('#infos-sidebar').html('<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>');

                        $('#infos-sidebar').fadeOut( "slow", function() {
                            $('#infos-sidebar').html("");

                            $imgEnd = ('<span id="picture-info">'+$img.html()+'</span>')
                            $('#infos-sidebar').append($imgEnd);

                            $info.each( function(e){
                                if($(this).attr("name") != "id")
                                    $('#infos-sidebar').append('<p>'+$(this).attr("name")+':<b> '+ $(this).html()+'</b></p>');
                                else
                                    $idUrl = $(this).html();

                            });

                            $('#infos-sidebar').append(
                                '<p><a href="'+$baseUrl+'admin/invoices?customer='+ $idUrl +'" class="waves-effect waves-light btn btn-infos" style="display:none"><i class="fa fa-dollar left"></i>Factures</a></p>'
                            );
                            $('#infos-sidebar').append(
                                '<p><a href="'+$baseUrl+'admin/booking?customer='+ $idUrl +'" class="waves-effect waves-light btn btn-infos" style="display:none"><i class="fa fa-calendar left"></i>Reservations</a></p>'
                            );
                            $('#infos-sidebar').append(
                                '<p><a href="'+$baseUrl+'admin/rooms?customer='+ $idUrl +'" class="waves-effect waves-light btn btn-infos" style="display:none"><i class="fa fa-bed left"></i>Chambres</a></p>'
                            );
                            $('#infos-sidebar').fadeIn("slow", function(){

                            });
                            $('.btn-infos').fadeIn("slow");

                        });
                    }else{
                        $('#infos-sidebar').append('<p>Aucunes Informations disponible</p>'); 
                        $('#infos-sidebar').fadeIn("slow");
                    }

                });
            }

        }
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );

    if($_GET('customer') == null){
        if($('#datatable tbody tr').first().children().last().children().length > 0){
            $imgEnd = ('<span id="picture-info">'+$img.html()+'</span>');
            $('#infos-sidebar').append($imgEnd);
            $('#datatable tbody tr').first().children().last().children().each( function(e){
                if($(this).attr("name") != "id")
                    $('#infos-sidebar').append('<p>'+$(this).attr("name")+':<b> '+ $(this).html()+'</b></p>');
                else
                    $idUrl = $(this).html();
            });
            $('#datatable tbody tr').first().css("border","solid 1px #38A7C6");
            $('#infos-sidebar').append(
                '<p><a href="'+$baseUrl+'admin/invoices?customer='+ $idUrl +'" class="waves-effect waves-light btn btn-infos" style="display:none"><i class="fa fa-dollar left"></i>Factures</a></p>'
            );
            $('#infos-sidebar').append(
                '<p><a href="'+$baseUrl+'admin/booking?customer='+ $idUrl +'" class="waves-effect waves-light btn btn-infos" style="display:none"><i class="fa fa-calendar left"></i>Reservations</a></p>'
            );
            $('#infos-sidebar').append(
                '<p><a href="'+$baseUrl+'admin/rooms?customer='+ $idUrl +'" class="waves-effect waves-light btn btn-infos" style="display:none"><i class="fa fa-bed left"></i>Chambres</a></p>'
            );
            $('#infos-sidebar').fadeIn("slow", function(){

            });
            $('.btn-infos').fadeIn("slow");
        }
    }

});