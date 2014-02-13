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
        if(pag!=-1){
            $.ajax({
                data: {
                    action: "get_page_callback",
                    nombre:nombre,
                    tipo:tipo,
                    pagina: pag
                },
                url: "http://wp.mexico.html5cooks.com/wp-admin/admin-ajax.php",
                type: "POST",
                async:true,
                beforeSend: function(){
                    $("body").append('<div id="loading"></div>');
                },
                success:  function (response) {
                    $('#loading').remove();
                    console.log(response);
                    if(response!=''){
                        pag++;
                        var $boxes=$(response);
                        $container.append( $boxes ).masonry( 'appended', $boxes );
                    }else{
                        pag=-1;
                    }
                }
            });
        }
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
        var idCat=$(this).attr('data-category');

        $("#menu ul.l_tinynav1 li a").each(function(){
            console.log($(this).attr('data-category'));
            if($(this).attr('data-category')==idCat){
                $(this).parent().addClass("active-"+idCat);
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
    });

    $(window).scroll(function(){
        if ($('#masonry-index').length > 0 && $(window).scrollTop() >= $(document).height() - $(window).height()){
            if(tipo=='home')
                loadClick('scroll_home',nombre);
            else
                loadClick(tipo,nombre);
        }

        if($('#shareThis').length > 0){
            var posShare=$('#shareThis').offset();
            var posAutor=$('.autor').offset();
            var posFooter=$('footer').offset();

            if( posShare['top']<= ( posAutor['top'] + $('.autor').height())
                || (posShare['top'] + $('#shareThis').height() >= posFooter['top']) ){
                $('#shareThis').css('opacity','0');
            }else{
                $('#shareThis').css('opacity','1');
            }
        }

        /*menu estatico*/
        checkScroll(menu,menu_offset);
    });

    var menu = $('.menu-fixed');
    var menu_offset = menu.offset();

    if($('#masonry-index').length>0){
        $(".logo a").click();
    }

    /* menu estatico menu*/
    function checkScroll (menu, menu_offset) {

        if ($(window).scrollTop()>menu_offset.top) {
            menu.addClass('menu-fijo');
        }
        else {
            menu.removeClass('menu-fijo');
        }
    }
    $(window).bind('resize', function() {
        $(window).on('scroll',function(){
            checkScroll(menu,menu.offset());
        });
    });
});