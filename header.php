<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Let\'s_Rock
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Lets' Rock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="fonts/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="flexslider/flexslider.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'lets-rock'); ?></a>

    <body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'lets-rock'); ?></a>

        <!--<header class="header">
            <nav>
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-link">HOME</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">EVENTS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">GALLERY</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">NEWS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">ALBUMS</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">PAGES</a></li>
                </ul>
                <a class="logo-nav" href="#"><img src="images/logo.png" class="logo" alt="Logo"></a>
                <ul class="social-list">
                    <li class="social-item">
                        <a class="social" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> 32k</a>
                    </li>
                    <li class="social-item">
                        <a class="social" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> 55k</a>
                    </li>
                    <li class="social-item">
                        <a class="social" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i> 23k</a>
                    </li>
                    <li class="social-item">
                        <a class="purshcase-button" href="#">PURSHCASE TICKET</a>
                    </li>
                </ul>
            </nav>
        </header>-->

        <header id="masthead" class="site-header header">
            <div class="site-branding">

            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation ">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e('Primary Menu', 'lets-rock'); ?></button>

                <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class' ) );
                ?>

                 <?php
                the_custom_logo();
                ?>

            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content">
