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

                /*
                 * Include the post format-specific template for the content. If you want to
                 * use this in a child theme, then include a file called called content-___.php
                 * (where ___ is the post format) and that will be used instead.
                 */
            ?>
            <h2 class='title'><?php the_title()?></h2>;
            <div class="boxDetalle">
                <div class="left">
                    <div class="autor"><img src="<?php echo get_template_directory_uri(); ?>/images/autor.png" alt="autor" /></div>
                    <div class="shareThis"><img src="<?php echo get_template_directory_uri(); ?>/images/share.png" alt="autor" /></div>
                </div>
                <div class="right">
                    <div class="data">
                        <div class="hTop">
                            <span class="name">@<?php the_author();?></span>
                            <div class="redes">
                                <a href="#" title="Rss"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.jpg" alt="Rss" /></a>
                                <a href="#" title="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook" /></a>
                                <a href="#" title="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" alt="twitter" /></a>
                            </div>
                        </div>
                        <!--<span class="date">Lunes 3, Diciembre.</span>-->
                        <span class="date"><?php the_date('l j, F')?>.</span>
                    </div>
                    <div class="text">
                        <!--<p>
                            Nos falta, seguramente, intervenir menos para generar mas. Por suerte, esa tendencia a pasar de puntillas sobre un rincon determinado de la geografia urbana y recuperarlo sin fanfarria ni orquesta aun late de vez en cuando lo suficiente para que uno no sea del todo pesimistas. El caso de la recuperacion del Turo de la Rovira, en Barcelona, es uno de esos pr oyectos que reconfortan. Mucho. Se trata de un cerro que se alza en plena ciudad a 260 metros sobre el nivel del mar, un espectacular mirador panoramico con vistas a 360 grados y que, por fortuna para los vecinos, siempre ha quedado apartado de las rutas turisticas barcelonesas.
                        </p>
                        <p><img src="<?php echo get_template_directory_uri(); ?>/images/img-1.jpg" alt="img" /></p>
                        <p>
                            Nos falta, seguramente, intervenir menos para generar mas. Por suerte, esa tendencia a pasar de puntillas sobre un rincon determinado de la geografia urbana y recuperarlo sin fanfarria ni orquesta aun late de vez en cuando lo suficiente para que uno no sea del todo pesimistas. El caso de la recuperacion del Turo de la Rovira, en Barcelona, es uno de esos pr oyectos que reconfortan. Mucho. Se trata de un cerro que se alza en plena ciudad a 260 metros sobre el nivel del mar, un espectacular mirador panoramico con vistas a 360 grados y que, por fortuna para los vecinos, siempre ha quedado apartado de las rutas turisticas barcelonesas.
                        </p>
                        <p>
                            Nos falta, seguramente, intervenir menos para generar mas. Por suerte, esa tendencia a pasar de puntillas sobre un rincon determinado de la geografia urbana y recuperarlo sin fanfarria ni orquesta aun late de vez en cuando lo suficiente para que uno no sea del todo pesimistas. El caso de la recuperacion del Turo de la Rovira, en Barcelona, es uno de esos pr oyectos que reconfortan. Mucho. Se trata de un cerro que se alza en plena ciudad a 260 metros sobre el nivel del mar, un espectacular mirador panoramico con vistas a 360 grados y que, por fortuna para los vecinos, siempre ha quedado apartado de las rutas turisticas barcelonesas.
                        </p>-->
                        <?php the_content()?>
                    </div>
                </div>
            </div>
            <div class="postRelacionados">
                <?php wp_related_posts()?>
            </div>
            <?php
                //get_template_part( 'content', get_post_format() );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

            endwhile;
            ?>
        </div>
    </div>

    <!--<h2 class="title">Dos a&ntilde;os de trabajo y un resultado invisible</h2>
    <div class="boxDetalle">
        <div class="left">
            <div class="autor"><img src="<?php echo get_template_directory_uri(); ?>/images/autor.png" alt="autor" /></div>
            <div class="shareThis"><img src="<?php echo get_template_directory_uri(); ?>/images/share.png" alt="autor" /></div>
        </div>
        <div class="right">
            <div class="data">
                <div class="hTop">
                    <span class="name">@nombredeautor</span>
                    <div class="redes">
                        <a href="#" title="Rss"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.jpg" alt="Rss" /></a>
                        <a href="#" title="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.jpg" alt="Facebook" /></a>
                        <a href="#" title="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.jpg" alt="twitter" /></a>
                    </div>
                </div>
                <span class="date">Lunes 3, Diciembre.</span>
            </div>

            <div class="text">
                <p>
                    Nos falta, seguramente, intervenir menos para generar mas. Por suerte, esa tendencia a pasar de puntillas sobre un rincon determinado de la geografia urbana y recuperarlo sin fanfarria ni orquesta aun late de vez en cuando lo suficiente para que uno no sea del todo pesimistas. El caso de la recuperacion del Turo de la Rovira, en Barcelona, es uno de esos pr oyectos que reconfortan. Mucho. Se trata de un cerro que se alza en plena ciudad a 260 metros sobre el nivel del mar, un espectacular mirador panoramico con vistas a 360 grados y que, por fortuna para los vecinos, siempre ha quedado apartado de las rutas turisticas barcelonesas.
                </p>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/img-1.jpg" alt="img" /></p>
                <p>
                    Nos falta, seguramente, intervenir menos para generar mas. Por suerte, esa tendencia a pasar de puntillas sobre un rincon determinado de la geografia urbana y recuperarlo sin fanfarria ni orquesta aun late de vez en cuando lo suficiente para que uno no sea del todo pesimistas. El caso de la recuperacion del Turo de la Rovira, en Barcelona, es uno de esos pr oyectos que reconfortan. Mucho. Se trata de un cerro que se alza en plena ciudad a 260 metros sobre el nivel del mar, un espectacular mirador panoramico con vistas a 360 grados y que, por fortuna para los vecinos, siempre ha quedado apartado de las rutas turisticas barcelonesas.
                </p>
                <p>
                    Nos falta, seguramente, intervenir menos para generar mas. Por suerte, esa tendencia a pasar de puntillas sobre un rincon determinado de la geografia urbana y recuperarlo sin fanfarria ni orquesta aun late de vez en cuando lo suficiente para que uno no sea del todo pesimistas. El caso de la recuperacion del Turo de la Rovira, en Barcelona, es uno de esos pr oyectos que reconfortan. Mucho. Se trata de un cerro que se alza en plena ciudad a 260 metros sobre el nivel del mar, un espectacular mirador panoramico con vistas a 360 grados y que, por fortuna para los vecinos, siempre ha quedado apartado de las rutas turisticas barcelonesas.
                </p>
            </div>
        </div>
    </div>
    <div class="postRelacionados">

        <?php wp_related_posts()?>

    </div>
    <div class="boxComentarios">
        <img src="<?php echo get_template_directory_uri(); ?>/images/comentarios.jpg" alt="comentarios" />
    </div>

    <!--<div id="body" class="">
		<div id="content" class="postDetalle" role="main">
		</div> #content -->
    <!--</div> #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
?>
</section>
<?php
get_footer();
