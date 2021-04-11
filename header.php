<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caravella
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'caravella'); ?></a>

		<header id="masthead" class="site-header">

			<div class="burger">

				<div id="burger-menu">
					<?php echo file_get_contents( get_template_directory_uri() . '/assets/burger-menu.svg' ); ?>
				</div>
				
			</div>

			<div id="navigation-container">

				<nav id="site-navigation" class="main-navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>

				</nav><!-- #site-navigation -->

				<img src="<?php esc_html__(the_field('menu_image', 'option'), 'caravella');  ?>" alt="Menu Decorative Image">

			</div>

			<div class="site-branding">

				<?php if (has_custom_logo()) : ?>

					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php the_custom_logo() ?></a>

				<?php else : ?>

					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>

				<?php endif; ?>

			</div><!-- .site-branding -->


			<div class="site-info">

				<ul class="language-switcher"><?php pll_the_languages(array('dropdown' => 1, 'raw' => $raw)); ?></ul>

				<a href="tel:<?php the_field('mobile', 'option') ?>" ><?php echo file_get_contents(get_template_directory_uri() . '/assets/phone.svg') ?></a>

				<a class="btn-reserve-now" href="#">
					<?php pll_e('Reserve Now', 'caravella'); ?>
				</a>

			</div>

		</header><!-- #masthead -->