<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package velox
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header header-wrapper" role="banner">


        <div class="contact-info">
            <div class="container">
                <div class="col-md-8 col-xs-12 info-right">

                    <ul class="list-inline">
                        <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">emailme@velox.com</a>
                        </li>
                        <li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span><a
                                href="tel:+(04) 3100 1660">(04) 3100 1660</a></li>
                    </ul>


                </div>

                <div class="col-md-4 col-xs-12 social-links">
                    <ul class="list-inline">
                        <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header-V1 clearfix">
            <div class="container">
                <div class="col-md-3 col-xs-12 logo">
<!--                    <h1>VELOX</h1>-->

                    <?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
                        <div class='site-logo'>
                            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
                        </div>
                    <?php else : ?>
                            <h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
                    <?php endif; ?>

                </div>


                <div class=" col-md-9 col-xs-12 velox-menu">
                    <nav class="main-navigation navbar navbar-default" role="navigation" >
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                            </div>

                            <?php
                            wp_nav_menu( array(
                                    'menu'              => 'primary',
                                    'theme_location'    => 'primary',
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse',
                                    'container_id'      => 'bs-example-navbar-collapse-1',
                                    'menu_class'        => 'main-navigation nav navbar-nav',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker())
                            );
                            ?>

                        </div>
                    </nav>
                </div>

            </div>
        </div>


</header><!-- #masthead -->

<div id="content" class="site-content container">
