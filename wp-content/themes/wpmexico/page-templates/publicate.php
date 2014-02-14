<?php
/**
 * Template Name: Publicate Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

    get_header();

    ?>
    <section id="content" class="content">
        <div id="body">
            <div class="publicidad">
                <h2>Publicidad</h2>
                <p>Descubre dónde y qué anuncios se pueden correr en Journal y las especificaciones para los diferentes formatos. <br>Dale click al formato que necesitas para saber las especificaciones.</p>

                <ul class="formatos">
                    <li><a href="#">Halfpage</a></li>
                    <li><a href="#">Box Banner</a></li>
                    <li><a href="#">Skyscraper</a></li>
                    <li><a href="#">Formato Especial</a></li>
                </ul>

                <p>Para más información contacta nuestra área de ventas: <br>
                    <span>01 55 4445 8325 </span>
                </p>
            </div>
        </div>
        <?php get_sidebar( 'content' );
        get_sidebar();
        ?>

    </section>
<?php
get_footer();