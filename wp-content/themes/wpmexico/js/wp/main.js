/**
 * Created by Riter on 27/01/14.
 */

$(document).on("ready",function(){
    $("#shareThis").on("click",function(){
        $(".st_sharethis_large").click();
    });

    $('.slider').bxSlider({
        slideWidth: 780,
        controls:false,
        minSlides: 1,
        maxSlides: 1,
        slideMargin: 0
    });

    var $container=$('#masonry-index');
    $container.masonry({
            itemSelector:'.item-masonry',
            columnWidth: 190,
            isAnimated: true,
            //isFitWidth: true,
            gutter: 5
        });


    var pag=1;

    $('#append-button').click(function(){

        var tipo = $("#scroller").attr("data-tipo");
        var id_tipo=$("#scroller").attr("data-id");

        $.ajax({
            data: {
                action: "page_callback",
                id:id_tipo,
                tipo:tipo,
                pagina: pag
            },
            url: "http://wp.mexico.html5cooks.com/wp-admin/admin-ajax.php",
            type: "POST",
            async:false,

            beforeSend: function(){
                //$("body").append('<div id="fancybox-loading"><div></div></div>');
            },
            success:  function (response) {
                console.log(response);
                if(response!=''){
                    pag++;
                    var $boxes=$(response);
                    $container.append( $boxes ).masonry( 'appended', $boxes );
                }
            }
        });
        return false;

    });
    $('#append-button').click();

});