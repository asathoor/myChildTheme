<?php
add_action( 
	'wp_enqueue_scripts', 
	'petj_enqueue_styles' );

function petj_enqueue_styles() {
	
	// parent theme css
	wp_enqueue_style( 
		'petj-tt5-parent-style',  
		get_parent_theme_file_uri( 'style.css' ) );

	// child theme css
	wp_enqueue_style( 
		'petj_child_enqueue_style', 
		get_stylesheet_uri() );
}
