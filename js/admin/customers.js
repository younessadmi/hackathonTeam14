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

$(document).ready(function(){

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

            $('#datatable tbody tr').on('click', function(){
                $info = $(this).children();

                $('#infos-sidebar').html('<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>');

                $('#infos-sidebar').fadeOut( "slow", function() {
                    $('#infos-sidebar').html("");
                    $imgEnd = ('<span id="picture-info">'+$img.html()+'</span>')
                    $('#infos-sidebar').append($imgEnd);
                    $info.each( function(e){
                        if($(this).attr("name") != "Status")
                            $('#infos-sidebar').append('<p>'+$(this).attr("name")+':<b> '+ $(this).html()+'</b></p>');

                    });

                    $('#infos-sidebar').append('<p><a class="waves-effect waves-light btn btn-infos"><i class="fa fa-dollar left"></i>Factures</a></p>');
                    $('#infos-sidebar').append('<p><a class="waves-effect waves-light btn btn-infos"><i class="fa fa-calendar left"></i>Reservations</a></p>');
                    $('#infos-sidebar').append('<p><a class="waves-effect waves-light btn btn-infos"><i class="fa fa-bed left"></i>Chambre</a></p>');
                    $('#infos-sidebar').fadeIn("slow", function(){

                    });
                });

            });
        }
    });

    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );

    $imgEnd = ('<span id="picture-info">'+$img.html()+'</span>');
    $('#infos-sidebar').append($imgEnd);
    $('#datatable tbody tr').first().children().each( function(e){
        if($(this).attr("name") != "Status")
            $('#infos-sidebar').append('<p>'+$(this).attr("name")+':<b> '+ $(this).html()+'</b></p>');
    });
    $('#datatable tbody tr').first().css("border","solid 1px #38A7C6");
    $('#infos-sidebar').append('<p><a class="waves-effect waves-light btn btn-infos"><i class="fa fa-dollar left"></i>Factures</a></p>');
    $('#infos-sidebar').append('<p><a class="waves-effect waves-light btn btn-infos"><i class="fa fa-calendar left"></i>Reservations</a></p>');
    $('#infos-sidebar').append('<p><a class="waves-effect waves-light btn btn-infos"><i class="fa fa-bed left"></i>Chambre</a></p>');

});