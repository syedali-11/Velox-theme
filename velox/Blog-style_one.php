


<?php
/**
 * Template Name: BLOG STYLE ONE
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package velox
 */

get_header(); ?>
<div class="col-md-9 col-xs-12 ">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php $loop = new WP_Query( array( 'post_type' => 'post') ); ?>

            <?php if (  $loop->have_posts() ) : ?>

                <?php if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif; ?>

                <?php while ( $loop->have_posts() ) :  $loop->the_post(); ?>

                    <?php

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content-style1', get_post_format() );
                    ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div>


<div class="col-md-3 col-xs-12 sidebar-wrapper">

    <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
