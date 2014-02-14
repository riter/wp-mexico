<?php
/**
 * Template Name: Contact Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

    get_header();

    ?>
    <section id="content" class="content">
        <div id="body">
            <div class="contacto">
                <h2>Contacto</h2>
                <div class="box-contacto">
                    <form action="#">
                        <?php
                        /*$page_data = get_page( get_the_ID() );
                        $page_data->post_content;
                        */
                          echo do_shortcode('[contact-form-7 id="432" title="Formulario de contacto 1"]');
                        ?>
                        <!--<ul>
                            <li><label for="nombre">Nombre</label><input id="nombre" type="text"></li>
                            <li><label for="email">Email</label><input id="email" type="text"></li>
                            <li><label for="telefono">Teléfono</label><input id="telefono" type="text"></li>
                            <li><label for="mensaje">Mensaje</label><textarea name="mensaje" id="mensaje"></textarea></li>
                            <li><input type="radio" name="enviar_copia" value="enviar_copia" id="enviar_copia" ><label for="enviar_copia">Enviarme una copia</label></li>
                            <li class="last"><input type="submit" value="Enviar"></li>
                        </ul>-->
                    </form>
                    <ul>
                        <li><span><a class="fb" href="#">/JournalMexico</a></span></li>
                        <li><span><a class="tw" href="#">@JournalMexico</a></span></li>
                        <li><span>Pedro antonio de los Santos 9611850 México, D. F.</span></li>
                        <li><span>01 55 4445 8325</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php get_sidebar( 'content' );
        get_sidebar();
        ?>

    </section>
<?php
get_footer();