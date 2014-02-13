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

    $listCat=get_the_category(get_the_ID());
    foreach($listCat as $cat){
        $cat=get_object_vars($cat);
        if($cat['term_id'] != 22 && $cat['term_id']!=19){ //id diferente de id recomienda y destacado
          $color=  $cat['term_id'];
            break;
        }
    }

    if(get_field("tipo_modulo")){
        $color_modulo_texto=get_field("tipo_modulo")=="modulo1"?"class='color-". $color."'":"";
    ?>
        <div class="<?php echo get_field("tipo_modulo")?>-masonry item-masonry">
            <div class="color-<?php echo $color; ?>">
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
