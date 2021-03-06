<?php
/**
 * The template for displaying Tag pages
 *
 * Used to display archive-type pages for posts in a tag.
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

            <!--masonry -->
            <div id="masonry-index">

			<?php if ( have_posts() ) : ?>

                <!--<h2 class="title"><?php //printf( __( 'Tag Archives: %s', 'twentyfourteen' ), single_tag_title( '', false ) ); ?></h2>-->

				<?php
					// Show an optional term description.
					/*$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;*/

                    //$sw=-1;
					// Start the Loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
                        /*$sw=($sw+1) % 6;
                        if($sw>=2 && $sw<=3){
                            $clase="contendV-mansonry";
                        }else{
                            $clase="contendH-mansonry";
                        }*/
                        ?>
                        <?php //get_template_part( 'content', get_post_format() );?>

            <?php
					endwhile;
					// Previous/next page navigation.
					//twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
            </div>
            <!--</div>
            <p><button id="append-button">Append new items</button></p>-->
        </div><!-- #content -->

        <?php
        get_sidebar( 'content' );
        get_sidebar();
        ?>
    </section><!-- #primary -->
<?php
get_footer();