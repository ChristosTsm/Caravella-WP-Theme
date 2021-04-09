<?php

/**
 * Home Header Slider
 */
?>

<?php if (have_rows('header_slider')) : ?>

    <section id="header-slider">

        <div class="swiper-container-header">

            <div class="swiper-wrapper">

                <?php while (have_rows('header_slider')) : the_row(); ?>

                    <div class="swiper-slide" style="background-image: url(<?php echo get_sub_field('slider_image'); ?>;">

                        <h2><?php the_sub_field('slider_title'); ?></h2>

                    </div>

                <?php endwhile; ?>

            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>

        </div>

    </section>

<?php endif; ?>