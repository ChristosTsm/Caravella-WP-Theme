<?php

$args = array('post_type' => 'testimonials', 'posts_per_page' => 6);

$the_query = new WP_Query($args);

?>

<div class="swiper-container">

    <?php if ($the_query->have_posts()) : ?>

        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <h3  data-aos="fade-up" class="testimonial-title"><?php the_field('testimonial_title'); ?></h3>

                    <h4 class="testimonial-description" data-aos="fade-up" data-aos-delay="300" ><?php the_field('testimonial_description'); ?></h4>

                    <h5 class="testimonial-name" data-aos="fade-up" data-aos-delay="600" ><?php the_field('testimonial_name'); ?></h5>

                </div>

            </div>

        <?php endwhile; ?>

    <?php endif; ?>

    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>

</div>