<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'roman_cavalry_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function roman_cavalry_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'roman_cavalry_';
    
        // Banners
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'banner',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Title Banner', 'your-prefix' ),

		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'post', 'page', 'portfolio' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',

		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			
			// TEXTAREA
			array(
				'name' => esc_html__( 'Banner Text', 'your-prefix' ),
				'desc' => esc_html__( 'This is the text that will display in the banner', 'your-prefix' ),
				'id'   => "{$prefix}banner_text",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
            
 			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Banner Background Image', 'your-prefix' ),
				'id'               => "{$prefix}banner_image",
				'type'             => 'image_advanced',
				'max_file_uploads' => 1,
			),
		),
	);
    
        // Portfolio
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'detail',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Details', 'your-prefix' ),

		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'portfolio' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',

		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			
			// TEXTAREA
			array(
				'name' => esc_html__( 'Details', 'your-prefix' ),
				'desc' => esc_html__( 'This is the text that will display next to the main content', 'your-prefix' ),
				'id'   => "{$prefix}side_details",
				'type' => 'textarea',
				'cols' => 20,
				'rows' => 3,
			),
            
 			// IMAGE ADVANCED (WP 3.5+)
			array(
				'name'             => esc_html__( 'Slider Images', 'your-prefix' ),
				'id'               => "{$prefix}sliders_image",
				'type'             => 'image_advanced',
				'max_file_uploads' => 10,
                'desc' => esc_html__( 'Recommend uploading the same sized images.', 'your-prefix' ),
			),
		),
	);
    
        // Service
	$meta_boxes[] = array(
		// Meta box id, UNIQUE per meta box. Optional since 4.1.5
		'id'         => 'service',

		// Meta box title - Will appear at the drag and drop handle bar. Required.
		'title'      => esc_html__( 'Icon', 'your-prefix' ),

		// Post types, accept custom post types as well - DEFAULT is 'post'. Can be array (multiple post types) or string (1 post type). Optional.
		'post_types' => array( 'service' ),

		// Where the meta box appear: normal (default), advanced, side. Optional.
		'context'    => 'normal',

		// Order of meta box: high (default), low. Optional.
		'priority'   => 'high',

		// Auto save: true, false (default). Optional.
		'autosave'   => true,

		// List of meta fields
		'fields'     => array(
			
			// TEXTAREA
			array(
				'name' => esc_html__( 'Icon', 'your-prefix' ),
				'desc' => esc_html__( 'Pick the icon for this service. Choose from <a href="http://fontawesome.io/icons/" target="_blank">Font Awesome</a>', 'your-prefix' ),
				'id'   => "{$prefix}service_icon",
				'type' => 'text',
			),

		),
	);
    

	return $meta_boxes;
}