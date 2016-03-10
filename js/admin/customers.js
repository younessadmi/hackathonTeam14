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

    var table = $('#datatable').DataTable();
     
    // Event listener to the two range filtering inputs to redraw on input
    $('#min, #max').keyup( function() {
        table.draw();
    } );
    
    $(window).scroll(function(){
        if ($(this).scrollTop() > 80) {
            $('.label-fixed').addClass('fixed');
        } else {
            $('.label-fixed').removeClass('fixed');
        }
    });

    $('#datatable tbody tr').on('click', function(){

        $img = $("#picture-info-hidden");
        $info = $(this).children();

        $('#infos-sidebar').html('<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>');

        $('#infos-sidebar').fadeOut( "slow", function() {
            $('#infos-sidebar').html("");
            $imgEnd = ('<span id="picture-info">'+$img.html()+'</span>')
            $('#infos-sidebar').append($imgEnd);
            $info.each( function(e){

                if($(this).attr("name") != "status")
                    $('#infos-sidebar').append('<p>'+$(this).attr("name")+':<b> '+ $(this).html()+'</b></p>');
                else
                    $('#infos-sidebar').append('<p>'+ $(this).html()+'</p>');
            });
            $('#infos-sidebar').fadeIn("slow", function(){

            });
        });

    });

    $(".sidebar-nav li")
        .filter(function () {
        var val = false;
        var actual = location.href;
        console.log(actual);
        actual = actual.split("/");
        console.log(actual);
        catName = actual[3].split("?");
        if (location.href == this.href || this.href == window.location.protocol + '//' + actual[2] + '/' + catName[0]) {
            val = true;
        }
        console.log(val);
        return val;

    })
        .addClass("active");
});