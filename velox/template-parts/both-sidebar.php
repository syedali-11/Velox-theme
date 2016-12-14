<?php
/*
    Template Name: Both Sidebar
*/
?>




<?php get_header(); ?>

    <!--     Sidebar one                      -->

    <div class="col-md-3  col-xs-12 sidebar-wrapper clearfix">

        <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
            <ul id="sidebar">
                <?php dynamic_sidebar( 'sidebar-left' ); ?>
            </ul>
        <?php endif; ?>

    </div>

    <!--     Left Content                      -->

    <div class="col-md-6 col-xs-12 containt-wrapper clearfix">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


            <h1><?php the_title();?> </h1>
            <p><?php the_content();?></p>


        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </div>

    <!--     Sidebar two                   -->

    <div class="col-md-3  col-xs-12 sidebar-wrapper clearfix">

        <?php get_sidebar( ); ?>

    </div>


<?php get_footer(); ?>