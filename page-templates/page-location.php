<?php

/**
 * Template Name: Location Page
 */

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section data-aos="fade-in" class="page-header-image">

            <?php the_post_thumbnail(); ?>

        </section>

        <section class="accommodation-info">

            <img data-aos="fade-in" class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

            <h1 data-aos="fade-right" data-aos-delay="300" class="section-title"><?php pll_e('Lo<br>cation'); ?></h1>

            <p data-aos="fade-left" data-aos-delay="600"><?php pll_e(get_field('location_textearea')); ?></p>

        </section>

		<section class="caravella-page-slider-wrapper">

			<div  data-aos="fade-in" class="swiper-container restaurant-slider">

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

		</section>


        <section id="location" class="location-page-slider-container">

            <?php if (have_rows('location')) : ?>

                <?php while (have_rows('location')) : the_row(); ?>

                    <div class="tabs-section-wrapper">

                        <?php echo file_get_contents(get_template_directory_uri() . '/assets/title-background.svg'); ?>

                        <h2  data-aos="fade-up" data-aos-delay="300" class="section-title"><?php pll_e('Palaio<br>chora'); ?></h2>

                        <?php $images = pll__(get_sub_field('location_gallery'), 'caravella'); ?>

                        <div  data-aos="fade-right" data-aos-delay="600">

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

                                    <h3 data-aos="fade-up" data-aos-delay="<?php echo get_row_index() ?>00" data-tab-target="#tab-<?php echo get_row_index(); ?>" class="tab-title">
                                        <img  src="<?php echo get_template_directory_uri() . '/assets/chevron-down.svg' ?>" alt="">
                                        <?php the_sub_field('location_tab_title'); ?>
                                    </h3>

                                    <div data-aos="fade-up" data-aos-delay="<?php echo get_row_index() ?>00" class="tab-content">

                                        <p id="tab-<?php echo get_row_index(); ?>" data-tab-content> <?php the_sub_field('location_tab_description'); ?> </p>

                                    </div>
                            <?php endwhile;
                            endif; ?>

                            <div data-aos="fade-up" data-aos-delay="<?php echo get_row_index() ?>00" class="cta-wrapper">

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