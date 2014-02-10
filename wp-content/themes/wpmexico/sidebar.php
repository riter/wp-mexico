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
                //if( function_exists('cyclone_slider') )
                  //  cyclone_slider('box-banner');
                echo get_Banner('box');
            ?>

            <!--<img src="<?php echo get_template_directory_uri(); ?>/images/boxBanner.png" alt=""/>-->
        </div>
        <div class="boxAside boxMantenteInformado">
            <h3>Mantente informado</h3>
            <?php suscribe_form();
            ?>
        </div>
        <div class="boxAside boxTemasImportantes">
            <?php if ( is_active_sidebar('sidebar-importantes') ) {
                dynamic_sidebar('sidebar-importantes');
            } ?>
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
                <h4><a href="<?php echo $postsincat[0]->guid ?>" title="<?php echo $postsincat[0]->post_title?>"><?php echo $postsincat[0]->post_title?></a></h4>
            </section>
        </div>
        <div class="banner-2 boxAside banner">
            <?php
            //if( function_exists('cyclone_slider') )
               // cyclone_slider('half-page');
            echo get_Banner('half');
            ?>
            <!--<img src="<?php echo get_template_directory_uri(); ?>/images/half_header.png" alt="banner"/>-->
        </div>

        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </aside>

