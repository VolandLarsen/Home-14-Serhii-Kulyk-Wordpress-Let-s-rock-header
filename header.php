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
        <header id="masthead" class="site-header">
        <div class="header">
            <nav id="site-navigation" class="main-navigation header">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><?php esc_html_e('Primary Menu', 'lets-rock'); ?></button>
                <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu',
                    'container_class' => 'custom-menu-class' ) );
                ?>
                 <?php
                the_custom_logo();
                ?>
                <?php wp_nav_menu( array( 'theme_location' => 'my-custom-menu-social',
                    'container_class' => 'custom-menu-class-social' ) );
                ?>
            </nav><!-- #site-navigation -->
        </div>
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="promo">
                            <div class="main-heading" style=' padding: 100px; background: url("<?php echo get_theme_mod('img_slide') ?>") center center/cover ;'>
                            <img src="<?php echo the_post_thumbnail_url(); ?>">
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="promo-secondslide">
                            <div class="main-heading">

                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="promo-thirdslide">
                            <div class="main-heading">

                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </header><!-- #masthead -->

        <div id="content" class="site-content">
