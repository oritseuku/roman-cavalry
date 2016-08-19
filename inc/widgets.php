<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function roman_cavalry_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'roman-cavalry' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'roman-cavalry' ),
		'before_widget' => '<section id="%1$s" class="panel panel-default widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="panel-heading"><h3 class="panel-title widget-title">',
		'after_title'   => '</h3></div>',
	),  );
    
    register_sidebar( array(
		'name'          => __( 'Contact', 'bootstrapwp' ),
		'id'            => 'contact',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'roman_cavalry_widgets_init' );

