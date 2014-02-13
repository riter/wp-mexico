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
                    foreach($categories as $category) : setup_postdata($category);
                        if(!$category->parent && $category->term_id!=19) {  ?>
                        <div class="section <?php echo $first==1?'first':''; $first++;?>">
                            <h3><a href="<?php  echo get_category_link( $category->term_id ); ?>" data-category="<?php echo $category->term_id;?>"><?php echo $category->name ?></a></h3>
                        </div>
                        <?php
                        }
                    endforeach;

                    ?>
                </div>
            </div>
        </div>
    </footer>
	<?php wp_footer(); ?>

</body>
</html>