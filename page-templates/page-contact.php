<?php

/**
 * Template Name: Contact Page
 */

get_header();

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="page-header-image">

            <?php the_post_thumbnail(); ?>

        </section>

        <section class="contact-page-title">

            <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

            <h1 class="section-title"><?php pll_e('Co<br>Ntact'); ?></h1>

        </section>

        <main>

            <section class="contact-info">

                <div class="contact-info__single">

                    <h3 class="section-title"><?php pll_e('Apart<br>Ments'); ?></h3>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/location.svg' ?>" alt="Location">

                        <h4><?php the_field('address', 'option'); ?></h4>

                    </div>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/tel.svg' ?>" alt="Location">

                        <h4><?php pll_e('Tel.', 'caravella'); ?> <?php the_field('tel', 'option'); ?> / <?php the_field('mobile', 'option'); ?></h4>

                    </div>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/email.svg' ?>" alt="Location">

                        <h4><?php the_field('email', 'option'); ?></h4>

                    </div>

                </div>

                <div class="contact-info__single">

                    <h3 class="section-title"><?php pll_e('Res<br>Taurant'); ?></h3>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/location.svg' ?>" alt="Location">

                        <h4><?php the_field('address', 'option'); ?></h4>

                    </div>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/tel.svg' ?>" alt="Location">

                        <h4><?php _e('Tel.', 'caravella'); ?> <?php the_field('tel', 'option'); ?> / <?php the_field('mobile', 'option'); ?></h4>

                    </div>

                </div>

                <div class="contact-info__single">

                    <h3 class="section-title"><?php pll_e('Social<br>Media'); ?></h3>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/instagram.svg' ?>" alt="Location">

                        <h4><a href="<?php esc_html__(the_field('instagram_link', 'option'), 'caravella'); ?>">INSTAGRAM</a></h4>

                    </div>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/facebook.svg' ?>" alt="Location">

                        <h4><a href="<?php esc_html__(the_field('facebook_link', 'option'), 'caravella'); ?>">FACEBOOK</a></h4>

                    </div>


                </div>

            </section>

            <section class="form">

                <?php echo do_shortcode('[wpforms id="224"]') ?>

            </section>

            <section class="map">

                <img src="<?php the_field('map_image') ?>" alt="Map">

            </section>

        </main>

<?php endwhile;

    wp_reset_postdata();

endif; ?>

<?php get_footer(); ?>