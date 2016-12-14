<?php
/*
    Template Name: Right Sidebar
*/
?>




<?php get_header(); ?>

    <!--     Left Content     -->
        <div class="col-md-9 col-xs-12 containt-wrapper clearfix">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                <h1><?php the_title();?> </h1>
                <p><?php the_content();?></p>


            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>

        </div>

        <!--     Left Sidebar   -->

        <div class="col-md-3 col-xs-12 sidebar-wrapper clearfix">

            <?php get_sidebar(); ?>

        </div>






<?php get_footer(); ?>