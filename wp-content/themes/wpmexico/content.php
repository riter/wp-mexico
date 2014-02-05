<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */


    if(get_field("tipo_modulo")){
        $color_modulo_texto=get_field("tipo_modulo")=="modulo1"?"style='border-top-color:#". strtoupper(dechex(rand(0,10000000)))."'":"";
    ?>
        <div class="<?php echo get_field("tipo_modulo")?>-masonry item-masonry">
            <div style="border-top-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>;">
                <a href=" <?php  echo esc_url( get_permalink() ) ?>" rel="bookmark">
                    <?php the_post_thumbnail();?>
                </a>
            </div>
            <?php
            if ( is_single() ) :
                the_title( '<div>', '</div>' );
            else :
                the_title( '<div '.$color_modulo_texto.'><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></div>' );
            endif;
            ?>
        </div>
<?php } ?>
