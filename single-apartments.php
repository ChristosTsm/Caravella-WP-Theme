<?php

/**
 * Single Apartment Template
 */

get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="apartment-header" style="background:url(<?php the_post_thumbnail_url(); ?>) no-repeat center">

            <div class="overlay"></div>

            <h1><?php the_title(); ?></h1>

        </section>

        <main>

            <div class="apartment-description">

                <?php the_field('basic_textarea'); ?>

            </div>

            <div class="swiper-container-apartment-single">

                <div class="swiper-wrapper">

                    <?php $images = get_field('slider_gallery') ?>

                    <?php foreach ($images as $image) : ?>

                        <div class="swiper-slide">

                            <img class="apartment-slider-image" src="<?php echo $image; ?>" alt="slider-image">

                        </div>

                    <?php endforeach; ?>

                </div>

                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>

                <div class="swiper-button-prev"></div>

            </div>

        </main>

        <section id="benefits" style="background-image: url(<?php esc_html_e(get_field('benefits_background_image'), 'caravella'); ?>);">

            <div>

                <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

                <h2 class="section-title"><?php pll_e('Bene<br>fits'); ?></h2>

                <div class="text-wrapper">

                    <?php if (have_rows('benefits')) : ?>

                        <ul class="benefits-ul">

                            <?php while (have_rows('benefits')) : the_row(); ?>

                                <li><?php pll_e(get_sub_field('benefit_title')); ?></li>

                            <?php endwhile;

                            wp_reset_postdata(); ?>

                        </ul>

                    <?php endif; ?>

                </div>

            </div>

        </section>

<?php endwhile;

    wp_reset_postdata();

endif;  ?>

<?php get_footer(); ?>