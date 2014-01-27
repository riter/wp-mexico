<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    <style>

    </style>

<section id="content" class="content">
    <div id="body">
        <div class="postDetalle">
            <!--<h2 class='title'>No se encontro nada</h2>-->
            <div class="boxDetalle masonry js-masonry"  data-masonry-options='{ "columnWidth": 60 }'>
                <?php
                if ( have_posts() ) :
                    $sw=-1;
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        $sw=($sw+1) % 6;
                        if($sw>=2 && $sw<=3){
                            $clase="contendV-mansonry";
                        }else{
                            $clase="contendH-mansonry";
                        }
                        ?>
                        <div class="<?php echo $clase?>">
                            <?php
                            get_template_part( 'content', get_post_format() );
                            ?>
                        </div>

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
        </div>
    </div>
	<?php get_sidebar( 'content' );
        get_sidebar();
    ?>

</section>

<?php
    get_footer();
