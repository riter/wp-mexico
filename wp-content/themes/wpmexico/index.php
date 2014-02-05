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

get_header();

    ?>
<section id="content" class="content">
    <div id="body">
        <!--<div class="postDetalle">-->
            <!--<h2 class='title'>No se encontro nada</h2>-->

                <?php
                if ( have_posts() ) :
                    $destacados=array();

                    global $post;
                    $args = array( 'cat' => '22','order'=> 'DESC','posts_per_page'=>3);
                    $myposts = get_posts( $args );

                    echo "<div class='contend_slider slider'>";

                    foreach( $myposts as $post ) :  setup_postdata($post); $destacados[]= get_the_ID()?>
                        <div>
                            <div class="img-slider">
                                <a href="<?php  echo esc_url( get_permalink() );?>">
                                    <?php the_post_thumbnail()?>
                                </a>
                            </div>
                            <div class="descripcion-slider">
                                <?php the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="">', '</a></h2>' );?>
                                <span><?php the_excerpt();?></span>
                            </div>
                        </div>
                <?php
                    endforeach;
                    echo "</div>";
                    ?>
            <!--masonry -->
            <div id="masonry-index">
                <?php

                    //$sw=-1;
                    //query_posts(array('order'=> 'DESC','posts_per_page'=>1));

                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        if (! in_array(get_the_ID(), $destacados)) {
                            get_template_part( 'content', get_post_format() );
                        }
                    endwhile;
                    /*for($i=0; $i<3;$i++){
                        mostrar($destacados);
                    }*/
                    // Previous/next post navigation.
                    //twentyfourteen_paging_nav();

                else :
                    // If no content, include the "No posts found" template.
                    get_template_part( 'content', 'none' );

                endif;
                ?>
            </div>
        <!--<div style="border: 1px solid red;">
            <p><button id="append-button">Append new items</button></p>
            <?php //twentyfourteen_paging_nav(); ?>
        </div>-->

    </div>
	<?php get_sidebar( 'content' );
        get_sidebar();
    ?>

</section>
<?php
    get_footer();