<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package velox
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="col-xs-12 post-wrapper"><!-- post-wrapper -->
        <?php if ( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail st-3 col-xs-12">
                <a href="<?php the_permalink(); ?>">   <?php the_post_thumbnail('medium'); ?></a>
            </div>
        <?php endif ; ?>
        <!-- post-image -->

        <div class="col-xs-12 post-content">
            <header class="entry-header">
                <?php 
				the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <!--		<div class="entry-meta">-->
                <!--			--><?php //velox_posted_on(); ?>
                <!--		</div><!-- .entry-meta -->
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_excerpt(); ?>
                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'velox' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div><!-- .entry-content -->

        </div><!-- post-content -->

        <div class="post-meta-wrapper col-xs-12"><!-- post-meta -->

            <footer class="entry-footer">
                <div class="post-meta col-md-9 col-xs-8">
                    <ul class="list-inline">
                        <li class="author">  By <?php the_author_posts_link();  ?> </li>
                        <li class="date"> | <?php echo get_the_date(); ?>  </li>
                        <li class="cat"> | <?php  the_category( ', ' ); ?> </li>
                        <li class="cmnt"> | <?php comments_number(); ?> </li>

                    </ul>
                </div>

                <!--                --><?php //velox_entry_footer(); ?>

                <div class="col-md-3 col-xs-4 read-more">
                    <a href="<?php the_permalink(); ?>" class="alignright"> KEEP READING ...  </a>
                </div>
            </footer>
            <!-- .entry-footer -->
        </div> <!-- post-meta -->

    </div>
    <!-- post-wrapper -->
</article><!-- #post-## -->
