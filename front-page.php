<?php get_header(); ?>

<?php get_template_part('partials/home-slider'); ?>

<section id="about-us" class="grid-1-1">

    <?php if (have_rows('about_us')) : ?>

        <?php while (have_rows('about_us')) : the_row(); ?>

            <div>

                <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

                <h2 class="section-title"><?php pll_e('About<br>Us'); ?></h2>

                <p class="section-description"><?php pll_e(the_sub_field('about_us_textarea'), 'caravella'); ?></p>

                <a class="section-cta" href="#"><?php pll_e('Read More', 'caravella'); ?></a>

            </div>

            <div>

                <img class="section-image" src="<?php esc_html_e(get_sub_field('about_us_image'), 'caravella') ?>" alt="About Us">

            </div>

    <?php endwhile;
    endif; ?>

</section>

<?php if (have_rows('accomodation')) : ?>

    <?php while (have_rows('accomodation')) : the_row(); ?>

        <section id="accommodation" style="background-image: url(<?php esc_html_e(get_sub_field('accommodation_background_image'), 'caravella'); ?>);">

            <div>

                <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

                <h2 class="section-title"><?php pll_e('Acco<br>mmodation'); ?></h2>

                <div class="text-wrapper">

                    <p class="section-description"><?php the_sub_field('accommodation_textarea'); ?></p>

                    <a class="section-cta" href="#"><?php pll_e('Read More', 'caravella'); ?></a>

                    <div class="cta-background"></div>
                </div>

            </div>

        </section>

<?php endwhile;
endif; ?>

<?php if (have_rows('restaurant')) : ?>

    <?php while (have_rows('restaurant')) : the_row(); ?>

        <section id="restaurant" style="background: url(<?php esc_html_e(get_sub_field('restaurant_background_image'), 'caravella'); ?>) no-repeat;">

            <div>

                <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

                <h2 class="section-title"><?php pll_e('Res<br>Taurant'); ?></h2>

                <div class="text-wrapper">

                    <p class="section-description"><?php the_sub_field('restaurant_textarea'); ?></p>

                    <a class="section-cta" href="#"><?php pll_e('Read More', 'caravella'); ?></a>

                    <div class="cta-background"></div>

                </div>

            </div>

        </section>

<?php endwhile;
endif; ?>

<section id="location">

    <?php if (have_rows('location')) : ?>

        <?php while (have_rows('location')) : the_row(); ?>

            <div class="tabs-section-wrapper">

                <?php echo file_get_contents(get_template_directory_uri() . '/assets/title-background.svg'); ?>

                <h2 class="section-title"><?php pll_e('Lo<br>cation'); ?></h2>

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

<section id="testimonials">

    <h2 class="section-title"><?php pll_e('Testi<br>Monials'); ?></h2>
    <?php echo file_get_contents(get_template_directory_uri() . '/assets/title-background.svg'); ?>

    <?php get_template_part('template-parts/testimonials', 'content') ?>

</section>




<?php get_footer(); ?>