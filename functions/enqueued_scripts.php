<?php


/**
 * Enqueue scripts and styles. Use this to add js files/packages/other
 * @return void
 */
function scripts_to_enqueue() {
	
	// MAIN CSS
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime( get_stylesheet_directory() . '/assets/css/main.css' ) );

	// FONTS
	// wp_enqueue_style( 'google-fonts', 'URL', false );
	// wp_enqueue_style( 'fa-fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', false );
	
	// MAIN JS
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), null, true);
	
	wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.1.0.min.js', false, NULL, true );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '', true );

}
add_action( 'wp_enqueue_scripts', 'scripts_to_enqueue' );