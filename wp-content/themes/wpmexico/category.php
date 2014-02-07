<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="content" class="content">
		<div id="body" >
            <!--<div class="postDetalle">-->

            <div id="masonry-index">

			<?php if ( have_posts() ) : ?>

            <!--<h2 class="title"><?php //printf( __( 'Category Archives: %s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h2>-->

            <?php
                // Show an optional term description.
                /*$term_description = term_description();
                if ( ! empty( $term_description ) ) :
                    printf( '<div class="taxonomy-description">%s</div>', $term_description );
                endif;*/

                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                    /*
                     * Include the post format-specific template for the content. If you want to
                     * use this in a child theme, then include a file called called content-___.php
                     * (where ___ is the post format) and that will be used instead.
                     */
                        ?>

                        <?php //get_template_part( 'content', get_post_format() );?>
            <?php
                    endwhile;
                    // Previous/next page navigation.
				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;

			    ?>
                </div>
            <!--</div>-->
            <p><button id="append-button">Append new items</button></p>
            <?php //twentyfourteen_paging_nav();?>
        </div>
        <?php
            get_sidebar( 'content' );
            get_sidebar();
        ?>
    </section><!-- #primary -->
<?php
get_footer();