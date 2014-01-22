<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0">

    <?php //wp_head(); ?>

    <!-- JQUERY -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Chivo' rel='stylesheet' type='text/css'>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css" />

    <!-- Masonry-->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wp/masonry.js"></script>

    <!-- MENU RESPONSIVO -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/wp/tinynav.js"></script>
    <style>
        /* styles for desktop */
        .tinynav { display: none; }
        #nav .selected a, #nav2 .selected a { color: red;}
        /* styles for mobile */
        @media screen and (max-width: 800px) {
            .tinynav {
                display: block;
                font-family: Chivo;
                text-align: center;
                width: 100%;
            }
            #menu nav ul { display: none }
        }
        .item { width: 25%; }
        .item.w2 { width: 50%; }
    </style>
    <script>
        $(function () {
            // TinyNav.js 1
            $('#menu nav ul').tinyNav({
                active: 'selected'
            });

        });

    </script>
</head>

<body <?php //body_class(); ?>>

    <!--<div id="page" class="hfeed site">-->

    <header class="content">
        <div class="head">
            <section class="logo">
                <a href="#" title="Journal Mexico">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Journal Mexico" />
                </a>
            </section>
            <section class="rightHead">
                <div class="bannerHead" id="super-banner">
                    <?php
                        if( function_exists('cyclone_slider') ){
                            cyclone_slider('superbanner');
                    ?>
                    <!--<img src="<?php echo $url ?>" alt="super_banner"/>-->
                    <?php } ?>
                </div>
                <div class="boxSearch">
                    <?php get_search_form(); ?>
                </div>
            </section>
        </div>
    </header>
    <div id="bottom">
        <div class="content">
            <section id="menu">
                <nav>
                    <ul>
                        <?php
                        $arg=array(
                            'orderby'=> 'SLUG',
                            'order'=> 'ASC',
                            'hide_empty'=>'0'
                        );
                        $categories = get_categories($arg);
                        foreach($categories as $category) {
                            if(!$category->parent && $category->term_id!=19) {  ?>
                                <li><a href="<?php  echo get_category_link( $category->term_id ) ?>" ><?php echo $category->name ?></a></li>
                        <?php
                            }
                        }
                        ?>
                        <!--
                        <li class="active"><a href="#" title="hoy">HOY</a></li>
                        <li><a href="#" title="cultura">CULTURA</a></li>
                        <li><a href="#" title="ciencia">CIENCIA</a></li>
                        <li><a href="#" title="deporte">DEPORTE</a></li>
                        <li><a href="#" title="turismo">TURISMO</a></li>
                        <li><a href="#" title="tecnologia">TECNOLOGIA</a></li>
                        <li><a href="#" title="ecologia">ECOLOGIA</a></li>
                        <li><a href="#" title="nacional">NACIONAL</a></li>
                        <li><a href="#" title="internacional">INTERNACIONAL</a></li>
                        <li><a href="#" title="colaboraciones">COLABORACIONES</a></li>
                        <li><a href="#" title="entrevistas">ENTREVISTAS</a></li>
                        -->
                    </ul>
                </nav>
            </section>
            <section class="networks">
                <a href="#" title="facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/btnFacebook.jpg" alt="Facebook" /></a>
                <a href="#" title="twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/btnTwitter.jpg" alt="Twitter" /></a>
                <a href="#" title="email"><img src="<?php echo get_template_directory_uri(); ?>/images/btnEmail.jpg" alt="Email" /></a>
            </section>
        </div>
    </div>
	<!--<div id="main" class="site-main">-->
