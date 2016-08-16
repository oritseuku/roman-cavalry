<?php
/**
 * Enqueue scripts and styles.
 */
function roman_cavalry_scripts() {  
	wp_enqueue_style( 'roman-cavalry-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 'google-heading', '//fonts.googleapis.com/css?family=Montserrat:400,700');
    
    wp_enqueue_style( 'google-body', '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic');

    wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '2.6.2', false );
    
	wp_enqueue_script( 'roman-cavalry-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), '1.0.0', true );
    
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'roman-cavalry-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'roman_cavalry_scripts' );