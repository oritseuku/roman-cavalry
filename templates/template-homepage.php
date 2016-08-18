<?php
/**
 * @package WordPress
 * @subpackage Roman_Cavalry
 * Template Name: Home Page
 */
?>
 
<?php get_header(); ?>
 
	<?php
	// Loop through homepage modules and get their corresponding files
	// See your theme's includes folder for editing these modules
    global $roman_cavalry_options;
    $homepage_modules = $roman_cavalry_options['homepage-layout']['enabled'];
    if ($homepage_modules):
		// Loop through each module
    	foreach ($homepage_modules as $key=>$value) :
 
			$value = preg_replace('/\s*/', '', $value); // remove white spaces
			$value = strtolower($value); // lowercase
    		get_template_part('/inc/modules/home', $value); // get correct file for each module
   		endforeach;
	endif; ?>
 
<?php get_footer(); ?>