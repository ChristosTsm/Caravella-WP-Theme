<?php

/**
 * Apartments Custom Post Type
 */


function caravella_custom_post_type()
{

    register_post_type(
        'apartments',
        array(
            'labels' => array(
                'name' => pll__('Apartments'),
                'singular_name' => pll__('Apartment')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'apartments'),
            'show_in_rest' => true,
            'menu_position' => 3,
            'menu_icon' => 'dashicons-admin-home',
            'supports' => array('thumbnail', 'title')
        )
    );

    register_post_type(
        'testimonials',
        array(
            'labels' => array(
                'name' => pll__('Testimonials'),
                'singular_name' => pll__('Testimonial')
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'testimonials'),
            'show_in_rest' => true,
            'menu_position' => 4,
            'menu_icon' => 'dashicons-groups',
            'supports' => array('thumbnail', 'title')
        )
    );
}

add_action('init', 'caravella_custom_post_type');
