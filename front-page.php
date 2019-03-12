<?php

/*
 * Front page template
 * 
 * @package MaryDoesDev
 * @author Mary Weise
 * @link https://marydoesdev.com
 * @copyright Copyright (c) 2018, Mary Weise
 * @license GPL-2.0+
 */

add_action( 'genesis_meta', 'mdd_home_page_setup' );
// Remove default post loop so I can still take advantage of the content-sidebar structure
    remove_action('genesis_loop', 'genesis_do_loop');
    
    // Remove default sidebar so I can still take advantage of the content-sidebar structure
    remove_action( 'genesis_after_content', 'genesis_get_sidebar' );

function mdd_home_page_setup(){
    
    $home_sidebars = array(
        'home_slider'      => is_active_sidebar( 'home-slider' ),
        'home_about'    => is_active_sidebar( 'home-about' ),
        'home_services'    => is_active_sidebar( 'home-services' ),
        'service_categories'    => is_active_sidebar( 'service-categories' ),
        'cta_small'    => is_active_sidebar( 'cta-small' ),
        'home_blog'    => is_active_sidebar( 'home-blog' ),
        'testimonials'    => is_active_sidebar( 'testimonials' ),
        'cta_large'    => is_active_sidebar( 'cta-large' ),
    );
    // Return early if no sidebars are active
    if ( !in_array( true, $home_sidebars ) ) {
        return;
    }
    
    // Add slider area if "Home Slider" widget area is active
    if ( $home_sidebars['home_slider'] ) {
        add_action( 'genesis_loop', 'mdd_add_home_slider',11 );
    }
    
    // Add About section if "Home About" widget area is active
    if ( $home_sidebars['home_about'] ) {
        add_action( 'genesis_loop', 'mdd_add_home_about',11 );

    }
    // Add Services section if "Home Services" widget area is active
    if ( $home_sidebars['home_services'] ) {
        add_action( 'genesis_loop', 'mdd_add_home_services',12 );

    }
    // Add Service Categories section if "Service Categories" widget area is active
    if ( $home_sidebars['service_categories'] ) {
        add_action( 'genesis_loop', 'mdd_add_service_categories',13 );

    }
    // Add Small CTA section if "CTA Small" widget area is active
    if ( $home_sidebars['cta_small'] ) {
        add_action( 'genesis_loop', 'mdd_add_cta_small',14 );

    }
    // Add Blog section if "Home Blog" widget area is active
    if ( $home_sidebars['home_blog'] ) {
        add_action( 'genesis_loop', 'mdd_add_home_blog',15 );

    }
    // Add Testimonials section if "Testimonials" widget area is active
    if ( $home_sidebars['testimonials'] ) {
        add_action( 'genesis_loop', 'mdd_add_testimonials',16 );

    }
    // Add CTA Large section if "CTA Large" widget area is active
    if ( $home_sidebars['cta_large'] ) {
        add_action( 'genesis_loop', 'mdd_add_cta_large',17 );

    }
    
}
/*
 * Display content for the "Home Slider" section.
 * 
 * @since 1.0.0
 */
function mdd_add_home_slider() {
    genesis_widget_area( 'home-slider',
            array(
                'before' => '<div class="home-slider"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}

/*
 * Display content for the "Home About" section.
 * 
 * @since 1.0.0
 */
function mdd_add_home_about() {
    genesis_widget_area( 'home-about',
            array(
                'before' => '<div class="home-about"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}
/*
 * Display content for the "Home Services" section.
 * 
 * @since 1.0.0
 */
function mdd_add_home_services() {
    genesis_widget_area( 'home-services',
            array(
                'before' => '<div class="home-services"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}
/*
 * Display content for the "Service Categories" section.
 * 
 * @since 1.0.0
 */
function mdd_add_service_categories() {
    genesis_widget_area( 'service-categories',
            array(
                'before' => '<div class="service-categories"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}
/*
 * Display content for the "CTA Small" section.
 * 
 * @since 1.0.0
 */
function mdd_add_cta_small() {
    genesis_widget_area( 'cta-small',
            array(
                'before' => '<div class="cta-small"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}
/*
 * Display content for the "Home Blog" section.
 * 
 * @since 1.0.0
 */
function mdd_add_home_blog() {
    genesis_widget_area( 'home-blog',
            array(
                'before' => '<div class="home-blog"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}
/*
 * Display content for the "Testimonials" section.
 * 
 * @since 1.0.0
 */
function mdd_add_testimonials() {
    genesis_widget_area( 'testimonials',
            array(
                'before' => '<div class="testimonials"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}
/*
 * Display content for the "CTA Large" section.
 * 
 * @since 1.0.0
 */
function mdd_add_cta_large() {
    genesis_widget_area( 'cta-large',
            array(
                'before' => '<div class="cta-large"><div class="wrap">',
                'after' => '</div></div>',
            )
        );
}

genesis();