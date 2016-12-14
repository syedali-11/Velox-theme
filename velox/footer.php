<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package velox
 */

?>

</div><!-- #content -->

<?php wp_footer(); ?>


<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">

        <div class="col-md-3 col-xs-12 widget-area" id="secondary" role="complementary">
            <?php dynamic_sidebar('ft-sidebar-1'); ?>
        </div>

        <div class="col-md-3 col-xs-12 widget-area" id="secondary" role="complementary">
            <?php dynamic_sidebar('ft-sidebar-2'); ?>
        </div>

        <div class="col-md-3 col-xs-12 widget-area" id="secondary" role="complementary">
            <?php dynamic_sidebar('ft-sidebar-3'); ?>
        </div>

        <div class="col-md-3 col-xs-12 widget-area" id="secondary" role="complementary">
            <?php dynamic_sidebar('ft-sidebar-4'); ?>
        </div>
    </div>

</footer><!-- #colophon -->

<div class="copyright">

    <div class="col-md-8 col-xs-12 copy-info widget-area" id="secondary" role="complementary">
        <?php dynamic_sidebar('cp-sidebar-1'); ?>
    </div>
    <div class="col-md-4 col-xs-12 social-links widget-area" id="secondary" role="complementary">
        <?php dynamic_sidebar('cp-sidebar-2'); ?>
    </div>

</div>



</body>
</html>
