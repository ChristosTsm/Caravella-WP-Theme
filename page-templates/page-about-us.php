<?php

/**
 * Template Name: About Us
 */

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="page-header-image">

            <?php the_post_thumbnail(); ?>

        </section>

        <section class="accommodation-info">

            <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

            <h1 class="section-title"><?php pll_e('About<br>Us'); ?></h1>

            <p><?php pll_e(get_field('about_us_textarea')); ?></p>

        </section>

        <div class="swiper-container restaurant-slider">

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


        <section id="about">

            <div class="tabs-section-wrapper">

                <?php echo file_get_contents(get_template_directory_uri() . '/assets/title-background.svg'); ?>

                <h2 class="section-title"><?php pll_e('Minimal<br>Decoration'); ?></h2>

                <div>

                    <img class="tabs-image" src="<?php the_field('tabs_image') ?>" alt="About Us Image">

                </div>

                <div class="tabs">

                    <?php if (have_rows('tabs')) : ?>

                        <?php while (have_rows('tabs')) : the_row(); ?>

                            <h3 data-tab-target="#tab-<?php echo get_row_index(); ?>" class="tab-title">
                                <img src="<?php echo get_template_directory_uri() . '/assets/chevron-down.svg' ?>" alt="">
                                <?php the_sub_field('tab_title'); ?>
                            </h3>

                            <div class="tab-content">

                                <p id="tab-<?php echo get_row_index(); ?>" data-tab-content> <?php the_sub_field('tabs_description'); ?> </p>

                            </div>
                    <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>

                </div>

            </div>

        </section>

<?php endwhile;

    wp_reset_postdata();

endif; ?>

<?php get_footer(); ?>