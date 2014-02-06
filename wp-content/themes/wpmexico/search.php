<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    <section id="content" class="content">
        <div id="body">
            <!--<div class="postDetalle">-->
            <div id="masonry-index">

			<?php if ( have_posts() ) : ?>

                <!--<h2 class="title"><?php //printf( __( 'Search Results for: %s', 'twentyfourteen' ), get_search_query() ); ?></h2>-->

				<?php
					// Start the Loop.
                    //$sw=-1;
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
                    <!--<div class="<?php echo $clase?>">
                        <?php //get_template_part( 'content', get_post_format() );?>
                    </div>-->
                        <?php get_template_part( 'content', get_post_format() );?>

                <?php

					endwhile;
					// Previous/next post navigation.
					//twentyfourteen_paging_nav();

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
			?>
                </div>
            <!--</div>-->
		</div>

        <?php
        get_sidebar( 'content' );
        get_sidebar();
        ?>
    </section><!-- #primary -->
<?php
get_footer();
