<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

    <section id="content" class="content">
        <div id="body">
            <div class="postDetalle">
                <?php
                // Start the Loop.
                while ( have_posts() ) : the_post();
                    ?>
                    <h2 class='title'><?php the_title();?></h2>
                    <div class="boxDetalle">
                        <div class="left">
                            <div class="autor">
                                <img src="<?php echo get_cimyFieldValue(get_the_author_ID(), 'AVATAR'); ?>" alt="autor" />
                                <?php// echo get_avatar( get_the_author_meta( get_the_author_ID()) , 93 ); ?>
                            </div>
                            <div class="shareThis" id="shareThis"><img src="<?php echo get_template_directory_uri(); ?>/images/share.png" alt="autor" /></div>
                        </div>
                        <div class="right">
                            <div class="data">
                                <div class="hTop">
                                    <span class="name">@<?php the_author();?></span>
                                    <div class="redes">
                                        <!--<a href="#" title="Rss"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.jpg" alt="Rss" /></a>
                                        <a href="#" title="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook" /></a>
                                        <a href="#" title="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" alt="twitter" /></a>-->

                                        <?php
                                              $rss=get_cimyFieldValue(get_the_author_ID(), 'RSS');
                                              $facebook=get_cimyFieldValue(get_the_author_ID(), 'FACEBOOK');
                                              $twitter=get_cimyFieldValue(get_the_author_ID(), 'TWITTER');

                                              if($rss!=null && $rss!=""){ ?>
                                                <a href="<?php echo $rss; ?>" title="Rss"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.jpg" alt="Rss" /></a>
                                        <?php }
                                            if($facebook!=null && $facebook!=""){ ?>
                                                <a href="<?php echo $facebook; ?>" title="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook" /></a>
                                        <?php }
                                            if($twitter!=null && $twitter!=""){  ?>
                                                <a href="<?php echo $twitter; ?>" title="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" alt="twitter" /></a>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!--<span class="date">Lunes 3, Diciembre.</span>-->
                                <span class="date"><?php the_date('l j, F')?>.</span>
                            </div>
                            <div class="text">
                                <?php the_content()?>
                            </div>
                        </div>
                    </div>
                    <div class="postRelacionados">
                        <?php wp_related_posts()?>
                    </div>

                    <?php
                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                endwhile;
                ?>
            </div>
        </div>
        <?php
        get_sidebar( 'content' );
        get_sidebar();
        ?>
    </section>
<?php
get_footer();
