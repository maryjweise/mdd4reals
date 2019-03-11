<?php

function mdd_enqueue_scrips_styles() {
 
wp_enqueue_style( 
        'wpb-google-fonts', 
        'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i', false 
        ); 

wp_enqueue_script(
		'mdd-custom-scripts',
		get_stylesheet_directory_uri() . "/js/mdd-custom.js",
		array( 'jquery' ),
		CHILD_THEME_VERSION,
		true
	);
}
 
add_action( 'wp_enqueue_scripts', 'mdd_enqueue_scrips_styles' );
