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

<section id="content" class="content">
    <div id="body">
        <div class="postDetalle">
            <h2 class="title">Dos a&ntilde;os de trabajo y un resultado invisible</h2>
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
                <ul>
                    <li>
                        <a href="#" title="thumb" class="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb-1.jpg" alt="thumb" /></a>
                        <h4>
                            <a href="#" title="Mandela, la historia del padre de la Sudafrica moderna">
                                Mandela, la historia del padre de la Sudafrica moderna
                            </a>
                        </h4>
                    </li>
                    <li>
                        <a href="#" title="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb-1.jpg" alt="thumb" /></a>
                        <h4>
                            <a href="#" title="Mandela, la historia del padre de la Sudafrica moderna">
                                Mandela, la historia del padre de la Sudafrica moderna
                            </a>
                        </h4>
                    </li>
                    <li>
                        <a href="#" title="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb-1.jpg" alt="thumb" /></a>
                        <h4>
                            <a href="#" title="Mandela, la historia del padre de la Sudafrica moderna">
                                Mandela, la historia del padre de la Sudafrica moderna
                            </a>
                        </h4>
                    </li>
                    <li class="last">
                        <a href="#" title="thumb"><img src="<?php echo get_template_directory_uri(); ?>/images/thumb-1.jpg" alt="thumb" /></a>
                        <h4>
                            <a href="#" title="Mandela, la historia del padre de la Sudafrica moderna">
                                Mandela, la historia del padre de la Sudafrica moderna
                            </a>
                        </h4>
                    </li>
                </ul>
            </div>
            <div class="boxComentarios">
                <img src="<?php echo get_template_directory_uri(); ?>/images/comentarios.jpg" alt="comentarios" />
            </div>
        </div>
    </div>

	<?php get_sidebar( 'content' ); ?>


<?php
get_sidebar();
get_footer();
