<?php
/**
 * Enqueue scripts and styles.
 */
function roman_cavalry_scripts() {  
	wp_enqueue_style( 'roman-cavalry-style', get_stylesheet_uri() . '/style.min.css' );

	wp_enqueue_script( 'roman-cavalry-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'roman_cavalry_scripts' );