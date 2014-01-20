<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<!-- </div>#main -->
    <footer>
        <div class="foot content">
            <div class="logoFoot">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logoFoot.png" alt="Journal Mexico" />
            </div>
            <div class="bottom">
                <div class="left">
                    <ul>
                        <li><a href="#" title="Contacto">Contacto</a></li>
                        <li><a href="#" title="Publicitate">Publicitate</a></li>
                        <li><a href="#" title="Terminos de privacidad">Terminos de privacidad</a></li>
                        <li><a href="#" title="Suscribete al boletin">Suscribete al boletin</a></li>
                    </ul>
                </div>
                <div class="right">
                    <?php
                    $arg=array(
                        'orderby'=> 'SLUG',
                        'order'=> 'ASC',
                        'hide_empty'=>'0'
                    );
                    $first=1;
                    $categories = get_categories($arg);
                    foreach($categories as $category) {
                        if(!$category->parent) {  ?>
                        <div class="section <?php echo $first==1?'first':''; $first++;?>">
                            <h3><a href="<?php  echo get_category_link( $category->term_id ) ?>" ><?php echo $category->name ?></a></h3>
                        </div>
                        <?php
                        }
                    }
                    ?>
                    <?
                    /*query_posts(array('post_type' => 'page','orderby' => 'menu_order', 'order' => 'ASC','posts_per_page'=>'99','post_parent' => 0 ));
                    $my_wp_query = new WP_Query();
                    $first=1;

                        while (have_posts()) { the_post();?>
                    <div class="section <?php echo $first==1?'first':''; $first++;?>">
                        <h3><a href="<?php  the_permalink() ?>" ><?php the_title() ?></a></h3>
                        <ul>
                            <?php

                            $all_wp_pages = $my_wp_query->query(array('post_type' => 'page','orderby' => 'menu_order', 'order' => 'ASC','posts_per_page'=>'99','post_parent' => get_the_ID() ));
                            $sub_pages=get_page_children(get_the_ID(),$all_wp_pages);
                            foreach ($sub_pages as $project):   ?>
                                <li><a href="<?php  echo get_permalink($project); ?>" ><?php echo $project->post_title; ?></a></li>
                            <?php endforeach;   ?>
                        </ul>
                    </div>
                    <?php
                        }
                    wp_reset_query();*/
                    ?>
                    <!--<div class="section first">
                        <h3><a href="#" title="Hoy">Hoy</a></h3>
                        <ul>
                            <li><a href="#" title="Estados">Estados</a></li>
                            <li><a href="#" title="Leyes Mexicanas">Leyes Mexicanas</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Cultura">Cultura</a></h3>
                        <ul>
                            <li><a href="#" title="Tecnologia">Tecnologia</a></li>
                            <li><a href="#" title="Nacionales">Nacionales</a></li>
                            <li><a href="#" title="Deportes">Deportes</a></li>
                            <li><a href="#" title="Turismo">Turismo</a></li>
                            <li><a href="#" title="Ecologia">Ecologia</a></li>
                            <li><a href="#" title="Entrevistas">Entrevistas</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Ciencia">Ciencia</a></h3>
                        <ul>
                            <li><a href="#" title="Personalidades">Personalidades</a></li>
                            <li><a href="#" title="Videos">Videos</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Deportes">Deportes</a></h3>
                        <ul>
                            <li><a href="#" title="Futbol">Futbol</a></li>
                            <li><a href="#" title="Ciclismo">Ciclismo</a></li>
                            <li><a href="#" title="Boxeo">Boxeo</a></li>
                            <li><a href="#" title="Beisbol">Beisbol</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Turismo">Turismo</a></h3>
                        <ul>
                            <li><a href="#" title="Cruceros">Cruceros</a></li>
                            <li><a href="#" title="Playas">Playas</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Tecnologia">Tecnologia</a></h3>
                        <ul>
                            <li><a href="#" title="UNAM">UNAM</a></li>
                            <li><a href="#" title="Mecatronica">Mecatronica</a></li>
                            <li><a href="#" title="Innovacion">Innovacion</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Ecologia">Ecologia</a></h3>
                        <ul>
                            <li><a href="#" title="Planeta verde">Planeta verde</a></li>
                            <li><a href="#" title="Bosques">Bosques</a></li>
                            <li><a href="#" title="Medio Ambiente">Medio Ambiente</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Nacionales">Nacionales</a></h3>
                        <ul>
                            <li><a href="#" title="Estados">Estados</a></li>
                            <li><a href="#" title="Leyes Mexicanas">Leyes Mexicanas</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Internacionales">Internacionales</a></h3>
                        <ul>
                            <li><a href="#" title="Estados">Estados</a></li>
                            <li><a href="#" title="Leyes Mexicanas">Leyes Mexicanas</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Colaboraciones">Colaboraciones</a></h3>
                        <ul>
                            <li><a href="#" title="Estados">Estados</a></li>
                            <li><a href="#" title="Leyes Mexicanas">Leyes Mexicanas</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <h3><a href="#" title="Entrevistas">Entrevistas</a></h3>
                        <ul>
                            <li><a href="#" title="Estados">Estados</a></li>
                            <li><a href="#" title="Leyes Mexicanas">Leyes Mexicanas</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>