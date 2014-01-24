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
                        if(!$category->parent && $category->term_id!=19) {  ?>
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
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>
</body>
</html>