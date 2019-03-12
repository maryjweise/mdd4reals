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
wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.7.2/css/all.css');
}
 
add_action( 'wp_enqueue_scripts', 'mdd_enqueue_scrips_styles' );

//Change copyright 
function scratch_footer_creds_text() {
    $copyright = '<div class="creds"><p><span class="cf">&copy; ' . date('Y') . ' <a href="https://marydoesdev" target="_blank">Mary Does Dev</a></span><span class="mdd">Designed &amp; Built By <a href="https://marydoesdev.com/" target="_blank">Mary Does Dev</a></span></p></div>';
    return $copyright;
    
}
add_filter('genesis_footer_creds_text' , 'scratch_footer_creds_text' );

// Add theme widget areas
  include_once( get_stylesheet_directory() . '/inc/widget-areas.php' );