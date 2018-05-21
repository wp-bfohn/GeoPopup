<?php
/*
Plugin Name: Geopopup Plugin
Description: Just here to break stuff
Version: 1.1
License: ;P
*/


function geotarget_js_example() {
	$country_code = getenv('HTTP_GEOIP_COUNTRY_CODE');
	wp_enqueue_script( 'geotargetJsExample', plugin_dir_url(__FILE__) . 'geotargetJsExample.js' );
	wp_localize_script( 'geotargetJsExample', 'geotarget', array(
		'countryCode' => $country_code,
	));
}

add_action('the_content', 'geotarget_js_example');
?>
