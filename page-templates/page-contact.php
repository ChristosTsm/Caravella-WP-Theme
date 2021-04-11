<?php

/**
 * Template Name: Contact Page
 */

get_header();

?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section data-aos="fade-in" class="page-header-image">

            <?php the_post_thumbnail(); ?>

        </section>

        <section class="contact-page-title" data-aos="fade-up" data-aos-delay="300">

            <img  class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

            <h1  class="section-title"><?php pll_e('Co<br>Ntact'); ?></h1>

        </section>

        <main>

            <section class="contact-info">

                <div data-aos="fade-right" data-aos-delay="300" class="contact-info__single">

                    <h3 class="section-title"><?php pll_e('Apart<br>Ments'); ?></h3>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/location.svg' ?>" alt="Location">

						<h4><a target="_blank" href="http://maps.google.com/?q=<?php the_field('address','option'); ?>" ><?php the_field('address', 'option'); ?></a></h4>

                    </div>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/tel.svg' ?>" alt="Location">

                        <h4><?php pll_e('Tel.', 'caravella'); ?><a href="tel:<?php the_field('tel','option'); ?>"><?php the_field('tel', 'option'); ?></a> / <a href="tel:<?php the_field('mobile','option'); ?>"><?php the_field('mobile', 'option'); ?></a></h4>

                    </div>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/email.svg' ?>" alt="Location">

                        <h4><a href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email', 'option'); ?></a></h4>

                    </div>

                </div>

                <div data-aos="fade-up" data-aos-delay="600" class="contact-info__single">

                    <h3 class="section-title"><?php pll_e('Res<br>Taurant'); ?></h3>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/location.svg' ?>" alt="Location">

                        <h4><a target="_blank" href="http://maps.google.com/?q=<?php the_field('address','option'); ?>" ><?php the_field('address', 'option'); ?></a></h4>

                    </div>

                    <div class="contact-info__single-details">

                        <img src="<?php echo get_template_directory_uri() . '/assets/tel.svg' ?>" alt="Location">

                        <h4><?php pll_e('Tel.', 'caravella'); ?><a href="tel:<?php the_field('tel','option'); ?>"><?php the_field('tel', 'option'); ?></a> / <a href="tel:<?php the_field('mobile','option'); ?>"><?php the_field('mobile', 'option'); ?></a></h4>

                    </div>

                </div>

                <div data-aos="fade-left" data-aos-delay="900" class="contact-info__single">

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

            <section class="form" data-aos="fade-up" data-aos-delay="600">

                <?php echo do_shortcode('[wpforms id="224"]') ?>

            </section>

            <section class="map" data-aos="fade-up">

                <img src="<?php the_field('map_image') ?>" alt="Map">

            </section>

        </main>

<?php endwhile;

    wp_reset_postdata();

endif; ?>

<?php get_footer(); ?>