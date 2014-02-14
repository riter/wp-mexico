<?php
/**
 * Template Name: Scribete Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

    get_header();
    save_suscriptor();
    ?>
    <section id="content" class="content">
        <div id="body">
            <div class="boletin">
                <h2>Boletín</h2>
                <p>Suscríbete a nuestro boletín y recibe directamente nuestros artículos a tu correo electrónico. </p>
                <form action="#" method="post">
                    <ul>
                        <li><label for="nombre">Nombre</label><input id="nombre" name="nombre" type="text" required="true"></li>
                        <li><label for="email">Email</label><input id="email" name="email" type="email" required="true"></li>
                        <li><input type="radio" name="group" value="Quincenal" id="quincenal" checked><label for="quincenal">Recibir noticias quincenalmente</label></li>
                        <li><input type="radio" name="group" value="Semanal" id="semanal" ><label for="semanal">Recibir noticias Semanalmente</label></li>
                        <li><input type="radio" name="group" value="Mensual" id="mensual" ><label for="mensual">Recibir noticias Mensualmente</label></li>
                        <li class="last"><input type="submit" value="Suscribirme"></li>
                    </ul>
                </form>

            </div>
        </div>
        <?php get_sidebar( 'content' );
        get_sidebar();
        ?>

    </section>
<?php
get_footer();