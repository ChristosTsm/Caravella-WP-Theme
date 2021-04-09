<?php

/**
 * Template Name: Location Page
 */

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="page-header-image">

            <?php the_post_thumbnail(); ?>

        </section>

        <section class="accommodation-info">

            <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

            <h1 class="section-title"><?php pll_e('Lo<br>cation'); ?></h1>

            <p><?php pll_e(get_field('location_textearea')); ?></p>

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



        <section id="location" class="location-page-slider-container">

            <?php if (have_rows('location')) : ?>

                <?php while (have_rows('location')) : the_row(); ?>

                    <div class="tabs-section-wrapper">

                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/title-background.svg'); ?>

                        <h2 class="section-title"><?php pll_e('Palaio<br>chora'); ?></h2>

                        <?php $images = pll__(get_sub_field('location_gallery'), 'caravella'); ?>

                        <div>

                            <div class="swiper-container-locations">

                                <div class="swiper-wrapper">

                                    <?php if (pll__($images)) : ?>

                                        <?php foreach (pll__($images) as $image) : ?>

                                            <div class="swiper-slide">
                                                <img src="<?php pll_e($image, 'caravella'); ?>" alt="">
                                            </div>

                                        <?php endforeach; ?>

                                    <?php endif; ?>

                                </div>

                                <!-- Add Pagination -->
                                <div class="swiper-pagination-location"></div>
                            </div>

                        </div>

                        <div class="tabs">

                            <?php if (have_rows('location_tabs')) : ?>

                                <?php while (have_rows('location_tabs')) : the_row(); ?>

                                    <h3 data-tab-target="#tab-<?php echo get_row_index(); ?>" class="tab-title">
                                        <img src="<?php echo get_template_directory_uri() . '/assets/chevron-down.svg' ?>" alt="">
                                        <?php the_sub_field('location_tab_title'); ?>
                                    </h3>

                                    <div class="tab-content">

                                        <p id="tab-<?php echo get_row_index(); ?>" data-tab-content> <?php the_sub_field('location_tab_description'); ?> </p>

                                    </div>
                            <?php endwhile;
                            endif; ?>

                            <div class="cta-wrapper">

                                <a class="section-cta" href="#"><?php pll_e('Read More', 'caravella'); ?></a>

                            </div>
                        </div>

                    </div>

            <?php endwhile;
            endif;  ?>

        </section>

<?php endwhile;

    wp_reset_postdata();

endif; ?>

<?php get_footer(); ?>