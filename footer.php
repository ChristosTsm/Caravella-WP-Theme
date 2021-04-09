<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Caravella
 */

?>

<footer id="colophon" class="site-footer">

	<div class="footer-col-1">

		<?php if (has_custom_logo()) : ?>

			<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php the_custom_logo() ?></a>

		<?php else : ?>

			<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>

		<?php endif; ?>

		<div class="awards-wrapper">

			<img src="<?php echo get_template_directory_uri() . '/assets/tripadvisor.png' ?>" alt="Trip Advisor">

			<img src="<?php echo get_template_directory_uri() . '/assets/tawards.png' ?>" alt="Tourism Awards">

		</div>

		<p class="copyrights">2020 Copyright. Caravella Apts.</p>


	</div>

	<div class="footer-col-2">

		<div class="footer-col-2-details">

			<div class="title-wrapper">

				<h3><?php pll_e('Apart<br>Ments'); ?></h3>

			</div>

			<div class="footer-col-2-details__fields">

				<div class="footer-col-2-details">

					<img src="<?php echo get_template_directory_uri() . '/assets/location.svg' ?>" alt="Location">

					<h4><?php the_field('address', 'option'); ?></h4>

				</div>

				<div class="footer-col-2-details">

					<img src="<?php echo get_template_directory_uri() . '/assets/tel.svg' ?>" alt="Location">

					<h4><?php pll_e('Tel.', 'caravella'); ?> <?php the_field('tel', 'option'); ?> / <?php the_field('mobile', 'option'); ?></h4>

				</div>

				<div class="footer-col-2-details">

					<img src="<?php echo get_template_directory_uri() . '/assets/email.svg' ?>" alt="Location">

					<h4><?php the_field('email', 'option'); ?></h4>

				</div>

			</div>

		</div>
		<div class="footer-col-2-details">
			<!-- wrapper - flex -->

			<div class="title-wrapper">

				<h3><?php pll_e('Res<br>Taurant') ?></h3>

			</div>

			<div class="footer-col-2-details__fields">

				<div class="footer-col-2-details">

					<img src="<?php echo get_template_directory_uri() . '/assets/location.svg' ?>" alt="Location">

					<h4><?php the_field('address', 'option'); ?></h4>

				</div>

				<div class="footer-col-2-details">

					<img src="<?php echo get_template_directory_uri() . '/assets/tel.svg' ?>" alt="Location">

					<h4><?php _e('Tel.', 'caravella'); ?> <?php the_field('tel', 'option'); ?> / <?php the_field('mobile', 'option'); ?></h4>

				</div>

			</div>

		</div>
		<div class="footer-col-2-details">

			<div class="title-wrapper">

				<h3><?php pll_e('Social<br>Media') ?></h3>

			</div>

			<div class="footer-col-2-details__fields">

				<div class="footer-col-2-details">

					<img src="<?php echo get_template_directory_uri() . '/assets/instagram.svg' ?>" alt="Location">

					<h4><a href="<?php esc_html__(the_field('instagram_link', 'option'), 'caravella'); ?>">INSTAGRAM</a></h4>

				</div>

				<div class="footer-col-2-details">

					<img src="<?php echo get_template_directory_uri() . '/assets/facebook.svg' ?>" alt="Location">

					<h4><a href="<?php esc_html__(the_field('facebook_link', 'option'), 'caravella'); ?>">FACEBOOK</a></h4>

				</div>

			</div>

		</div>

	</div>

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>