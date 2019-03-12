<?php

/*
 * Theme Customization
 * 
 * @package Scratch
 * @author Mary Weise
 * @link https://marydoesdev.com
 * @copyright Copyright (c) 2018, Mary Weise
 * @license GPL-2.0+
 */

//* Register front page widget areas
    genesis_register_sidebar( array(
            'id'            => 'home-slider',
            'name'          => __( 'Home Slider', 'mdd' ),
            'description'   => __( 'Display a Slider on the front page', 'mdd' ),
    ) );
    genesis_register_sidebar( array(
            'id'            => 'home-about',
            'name'          => __( 'Home About', 'mdd' ),
            'description'   => __( 'Display short about section on front page', 'mdd' ),
    ) );
    genesis_register_sidebar( array(
            'id'            => 'home-services',
            'name'          => __( 'Home Services', 'mdd' ),
            'description'   => __( 'Display 3 Services on front page', 'mdd' ),
    ) );
    genesis_register_sidebar( array(
            'id'            => 'service-categories',
            'name'          => __( 'Service Categories', 'mdd' ),
            'description'   => __( 'Display service category comparison', 'mdd' ),
    ) );
    genesis_register_sidebar( array(
            'id'            => 'cta-small',
            'name'          => __( 'Call to Action - small', 'mdd' ),
            'description'   => __( 'Small call to action', 'mdd' ),
    ) );
    genesis_register_sidebar( array(
            'id'            => 'home-blog',
            'name'          => __( 'Home Blog', 'mdd' ),
            'description'   => __( 'Display most recent blog post on front page with RSS widget', 'mdd' ),
    ) );    
    genesis_register_sidebar( array(
            'id'            => 'testimonials',
            'name'          => __( 'Testimonials', 'mdd' ),
            'description'   => __( 'Display slider of testimonials', 'mdd' ),
    ) );
    genesis_register_sidebar( array(
            'id'            => 'cta-large',
            'name'          => __( 'Call to Action - large', 'mdd' ),
            'description'   => __( 'Large call to action', 'mdd' ),
    ) );