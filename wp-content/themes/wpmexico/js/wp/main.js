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

    var test_masonry=$('#masonry-index');
        test_masonry.masonry({
            columnWidth: 190,
            isAnimated: true,
            isFitWidth: true,
            gutter: 3
        });

});
