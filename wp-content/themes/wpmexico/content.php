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
        <div class="<?php echo get_field("tipo_modulo")?>-masonry">
            <div style="border-top-color: <?php printf( "#%06X\n", mt_rand( 0, 0x222222 )); ?>;">
                <?php the_post_thumbnail();?>
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

<!--
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php twentyfourteen_post_thumbnail(); ?>

    <header class="entry-header">
        <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
            <div class="entry-meta">
                <span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
            </div>
        <?php
        endif;

        if ( is_single() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
        endif;
        ?>

        <div class="entry-meta">
            <?php
                if ( 'post' == get_post_type() )
                twentyfourteen_posted_on();

            if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
                ?>
                <span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>
            <?php
            endif;

            edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
            ?>
        </div>
    </header>

    <?php if ( is_search() ) : ?>
        <div class="entry-summary">
            <?php the_excerpt(); ?>
        </div>
    <?php else : ?>
        <div class="entry-content">
            <?php
            the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
            ) );
            ?>
        </div>
    <?php endif; ?>

    <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
