<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package velox
 */

get_header(); ?>

<div class="col-md-9 col-xs-12 contant-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="col-xs-12 clearfix">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

<!--			--><?php
//				// If comments are open or we have at least one comment, load up the comment template.
//				if ( comments_open() || get_comments_number() ) :
//					comments_template();
//				endif;
//			?>

		<?php endwhile; // End of the loop. ?>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->
    </div>

<div class="col-md-3 col-xs-12 sidebar-wrapper">

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
