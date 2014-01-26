<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


    <aside>
        <div class="banner-1 boxAside banner">
            <?php
                if( function_exists('cyclone_slider') )
                    cyclone_slider('box-banner');
            ?>
            <!--<img src="<?php echo get_template_directory_uri(); ?>/images/boxBanner.png" alt=""/>-->
        </div>
        <div class="boxAside boxMantenteInformado">
            <h3>Mantente informado</h3>
            <?php suscribe_form();

            ?>
            <!--<div class="formSub">
                <div class="input"><input type="text" placeholder="Escribe aquí tu correo electrónico"/></div>
                <div class="grupo-radio">
                    <div><input type="radio" name="group1" value="Semanal"><label>Semanal</label></div>
                    <div><input type="radio" name="group1" value="Quincenal"><label>Quincenal</label></div>
                    <div><input type="radio" name="group1" value="Mensual"><label>Mensual</label></div>
                </div>
                <div class="send"><button type="submit">Suscribirme</button></div>
            </div>
            <div>

            </div>-->
        </div>
        <div class="boxAside boxTemasImportantes">
            <?php if ( is_active_sidebar('sidebar-importantes') ) {
                dynamic_sidebar('sidebar-importantes');
            } ?>

            <!--<h3>Temas importantes</h3>
            <ul>
                <li><a href="#" title="">Educación en México</a></li>
                <li><a href="#" title="">Innovación</a></li>
                <li><a href="#" title="">Personaje de la semana</a></li>
                <li><a href="#" title="">Fútbol mexicano</a></li>
                <li><a href="#" title="">Turismo</a></li>
                <li><a href="#" title="">Medio ambiente</a></li>
                <li><a href="#" title="">Opiniones</a></li>
                <li><a href="#" title="">Reforma energética</a></li>
                <li><a href="#" title="">Peña Nieto</a></li>
                <li><a href="#" title="">Leyes mexicanas</a></li>
                <li><a href="#" title="">Sexo y estrés</a></li>
                <li><a href="#" title="">Compras de fin de año</a></li>
                <li><a href="#" title="">Entrevistas</a></li>
                <li><a href="#" title="">Teléfonos inteligentes</a></li>
            </ul>-->
        </div>
        <div class="boxAside boxJournalRecomienda">
            <h3>Journal Recomienda</h3>
            <section>
                <div class="thumb">
                    <?php
                    $postsincat = get_posts(array("cat" => 19, "showposts" => 1));
                    $idoflatestpostincategory = $postsincat[0]->ID;
                    //print_r($postsincat[0]);
                    ?>
                    <!--<img src="<?php echo get_template_directory_uri(); ?>/images/recomienda.png" alt=""/>-->

                    <?php echo get_the_post_thumbnail($postsincat[0]->ID) ?>
                </div>
                <!--<h4><a href="#" title="Ensalada César de la mano de Enrique Olvera">Ensalada César de la mano de Enrique Olvera</a></h4>-->
                <h4><a href="#" title="<?php echo $postsincat[0]->post_title?>"><?php echo $postsincat[0]->post_title?></a></h4>
            </section>
        </div>
        <div class="banner-2 boxAside banner">
            <?php
            if( function_exists('cyclone_slider') )
                cyclone_slider('half-page');
            ?>
            <!--<img src="<?php echo get_template_directory_uri(); ?>/images/half_header.png" alt="banner"/>-->
        </div>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </aside>

