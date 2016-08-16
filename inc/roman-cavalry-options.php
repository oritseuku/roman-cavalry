<?php
/**
 * @package roman-cavalry
 */
 
if ( ! function_exists('roman_cavalry_option') ) {
	function roman_cavalry_option($id, $fallback = false, $param = false ) {
		global $roman_cavalry_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($roman_cavalry_options[$id]) && $roman_cavalry_options[$id] !== '' ) ? $roman_cavalry_options[$id] : $fallback;
		if ( !empty($roman_cavalry_options[$id]) && $param ) {
			$output = $roman_cavalry_options[$id][$param];
		}
		return $output;
	}
}