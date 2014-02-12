/**
 * Created by Riter on 27/01/14.
 */

$(document).on("ready",function(){
    $("#shareThis").on("click",function(){
        $(".st_sharethis_large").click();
    });

    /* Init click*/
    var $container=$('#masonry-index');
    function iniMasonry(){
        $container.masonry({
            itemSelector:'.item-masonry',
            columnWidth: 5,
            isAnimated: true
            //isFitWidth: true,
            //gutter: 5
        });
    }

    function setMasonry(){
        if($('#masonry-index').length > 0){
            var elems = $container.masonry('getItemElements');
            $container.masonry( 'remove', elems );
        }else{
            $("#body").html($("<div id='masonry-index'></div>"));
            $container=$('#masonry-index');
        }
        iniMasonry();
    }

    function loadClick(tipo,nombre){
        $.ajax({
            data: {
                action: "get_page_callback",
                nombre:nombre,
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
    }

    var pag=1;
    var nombre='';
    var tipo="";

    $("#menu ul.l_tinynav1 li a, .foot .right .section a").on('click',function(event){
        event.preventDefault();

        $(".bx-wrapper").remove();
        setMasonry();

        nombre=$(this).html().trim();
        tipo='category';
        pag=1;

        loadClick(tipo,nombre);

        $("#menu ul.l_tinynav1 li").removeClass();
        var position=0;
        $("#menu ul.l_tinynav1 li a").each(function(){
            position++;
            if($(this).html().trim()==nombre){
                $(this).parent().addClass("active-"+position);
            }
        });
    });

    $(".boxTemasImportantes ul li a,.postTagRelacionados ul li a").on('click',function(event){
        event.preventDefault();
        $(".bx-wrapper").remove();
        setMasonry();

        nombre=$(this).html().trim();
        tipo='post_tag';
        pag=1;

        loadClick(tipo,nombre);
    });

    $(".boxSearch form").on('submit',function(event){

        event.preventDefault();
        $(".bx-wrapper").remove();
        setMasonry();

        nombre=$('input',this).val();
        tipo='search';
        pag=1;

        loadClick(tipo,nombre);
    });

    $(".logo a").on('click',function(event){

        event.preventDefault();
        $(".bx-wrapper").remove();
        setMasonry();

        nombre='';
        tipo='home';
        pag=1;

        loadClick(tipo,nombre);

        /*$('.slider').bxSlider({
            slideWidth: 780,
            controls:false,
            minSlides: 1,
            maxSlides: 1,
            slideMargin: 0
        });*/
    });

    $(window).scroll(function(){
        if ($(window).scrollTop() >= $(document).height() - $(window).height() -200){
            if(tipo=='home')
                loadClick('scroll_home',nombre);
            else
                loadClick(tipo,nombre);
        }
    });

    if($('#masonry-index').length>0){
        $(".logo a").click();
    }
});