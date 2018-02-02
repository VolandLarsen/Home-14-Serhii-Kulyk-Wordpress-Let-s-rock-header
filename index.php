<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Let\'s_Rock
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main"
            <div class="founders">
                <div class="container">
                    <div class="founders-content">
                        <div class="founders-heading">
                            <h2 class="founders-head"><?php echo get_theme_mod('founders_header') ?></h2>
                            <p class="founder-subhead">
                                <?php echo get_theme_mod('founders_year') ?>
                                <a href="<?php echo get_theme_mod('founders_link_url') ?>" class="founder-cantus">
                                    <?php echo get_theme_mod('founders_link_content') ?>
                                </a>
                                <?php echo get_theme_mod('founders_content') ?>
                            </p>
                            <div class="learn-more-container">
                                <a href="<?php echo get_theme_mod('founders_button_url') ?>" class="learn-more-button">
                                    <?php echo get_theme_mod('founders_button_content') ?>
                                </a>
                            </div>
                        </div>

                        <img src="<?php echo get_theme_mod('founders_image') ?>" class="founder-img" alt="Founder image">
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
