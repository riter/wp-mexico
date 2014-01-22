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

    <style>
        .masonry {
            background: #EEE;
            max-width: 640px;
        }

        .masonry .item {
            width:  60px;
            height: 60px;
            float: left;
            background: #D26;
            border: 2px solid #333;
            border-color: hsla(0, 0%, 0%, 0.5);
            border-radius: 5px;
        }

        .item.w2 { width:  120px; }
        .item.w3 { width:  180px; }
        .item.w4 { width:  240px; }

        .item.h2 { height: 100px; }
        .item.h3 { height: 130px; }
        .item.h4 { height: 180px; }

    </style>

<section id="content" class="content">
    <div id="body">
        <div class="postDetalle">
            <h2 class='title'>Masonry - columnWidth</h2>
            <div class="masonry js-masonry"  data-masonry-options='{ "columnWidth": 60 }'>
                <div class="item"></div>
                <div class="item w2 h2"></div>
                <div class="item h3"></div>
                <div class="item h2"></div>
                <div class="item w3"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item h2"></div>
                <div class="item w2 h3"></div>
                <div class="item"></div>
                <div class="item h2"></div>
                <div class="item"></div>
                <div class="item w2 h2"></div>
                <div class="item w2"></div>
                <div class="item"></div>
                <div class="item h2"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item h3"></div>
                <div class="item h2"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item h2"></div>
            </div>
        </div>
    </div>
	<?php get_sidebar( 'content' );
        get_sidebar();
    ?>

</section>

<?php
    get_footer();
