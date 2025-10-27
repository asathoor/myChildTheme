<?php
// parent styles
add_action( 'wp_enqueue_scripts', 'petj_barnet_enqueue_styles' );

function petj_barnet_enqueue_styles() {
	// forældretemaets css
	wp_enqueue_style( 'petj-tt5-parent-style',  get_parent_theme_file_uri( 'style.css' ) );

	// barnetemaets css
	wp_enqueue_style( 'petj_barnet_enqueue_styles', get_stylesheet_uri() );

}
