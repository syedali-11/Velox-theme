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
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail col-md-4 col-xs-12">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <!-- post-image -->

        <?php if (has_post_thumbnail()) : ?>
            <div class="col-md-8 col-xs-12 post-content">
                <header class="entry-header">
                    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                    <?php if ('post' === get_post_type()) : ?>
                        <!--                    <div class="entry-meta">-->
                        <!--                        --><?php //velox_posted_on(); ?>
                        <!--                    </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header>
                <!-- .entry-header -->

                <div class="entry-content">
                    <!--                --><?php
                    //                the_content(sprintf(
                    //                /* translators: %s: Name of current post. */
                    //                    wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'velox'), array('span' => array('class' => array()))),
                    //                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                    //                ));
                    //
                    ?>
                    <?php the_excerpt(); ?>
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'velox'),
                        'after' => '</div>',
                    ));
                    ?>
                </div>
                <!-- .entry-content -->
            </div><!-- post-content -->

        <?php else : ?>
            <div class="col-md-12 col-xs-12 post-content">
                <header class="entry-header">
                    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                    <?php if ('post' === get_post_type()) : ?>
                        <!--                    <div class="entry-meta">-->
                        <!--                        --><?php //velox_posted_on(); ?>
                        <!--                    </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header>
                <!-- .entry-header -->

                <div class="entry-content">
                    <!--                --><?php
                    //                the_content(sprintf(
                    //                /* translators: %s: Name of current post. */
                    //                    wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'velox'), array('span' => array('class' => array()))),
                    //                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                    //                ));
                    //
                    ?>
                    <?php the_excerpt(); ?>
                    <?php
                    wp_link_pages(array(
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'velox'),
                        'after' => '</div>',
                    ));
                    ?>
                </div>
                <!-- .entry-content -->
            </div><!-- post-content -->



        <?php endif; ?>

        <div class="post-meta-wrapper col-xs-12"><!-- post-meta -->

            <footer class="entry-footer">
                <div class="post-meta col-md-8 col-xs-8">
                    <ul class="list-inline">
                        <li class="author"> By <?php the_author_posts_link(); ?> </li>
                        <li class="date"> | <?php echo get_the_date(); ?>  </li>
                        <li class="cat"> | <?php the_category(', '); ?> </li>
                        <li class="cmnt"> | <?php comments_number(); ?> </li>

                    </ul>
                </div>

                <!--                --><?php //velox_entry_footer(); ?>

                <div class="col-md-4 col-xs-4 read-more">
                    <a href="<?php the_permalink(); ?>" class="alignright"> KEEP READING ... </a>
                </div>
            </footer>
            <!-- .entry-footer -->
        </div>
        <!-- post-meta -->

    </div>
    <!-- post-wrapper -->
</article><!-- #post-## -->
