<?php

/**
 * Template Name: Accommodation Page
 */

get_header();

?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <section class="page-header-image">

            <?php the_post_thumbnail(); ?>

        </section>

        <section class="accommodation-info">

            <img class="section-title-background" src="<?php esc_html_e(get_template_directory_uri() . '/assets/title-background.svg', 'caravella'); ?>">

            <h1 class="section-title"><?php pll_e('Acco<br>mmodation'); ?></h1>

            <p><?php pll_e(get_field('accommodation_textarea')); ?></p>

        </section>

        <?php

        $args = array('post_type' => 'apartments', 'posts_per_page' => -1);

        $the_query = new WP_Query($args);

        ?>

        <?php if ($the_query->have_posts()) : ?>

            <main class="appartments-wrapper">

                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                    <div class="apartment-single" style="background:url( <?php echo the_post_thumbnail_url(); ?> ) no-repeat center;">

                        <h2 class="apartment-single__title">

                            <a href="<?php echo the_permalink(); ?>">

                                <?php the_title(); ?>

                            </a>

                        </h2>

                    </div>
                <?php endwhile;

                wp_reset_postdata(); ?>

            </main>

        <?php else :  ?>

            <p class="not-found"><?php _e('Sorry, no posts matched your criteria.'); ?></p>

        <?php endif; ?>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>