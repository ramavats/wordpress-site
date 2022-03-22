<?php 
/* 
* -------------------------------------------------------------------------------------
* @author: Your Name
* @author URI: https://doothemes.com/
* @copyright: (c) 2017 Doothemes. All rights reserved
* -------------------------------------------------------------------------------------
*
* @since 2.1.3
*
*/

// DooPlay child
function dooplay_child_theme_scripts_n_styles() {
	wp_register_style( 'child-style', get_stylesheet_uri(), '', DOO_VERSION);
	wp_enqueue_style('child-style');
}
add_action('wp_enqueue_scripts', 'dooplay_child_theme_scripts_n_styles', 99);

// Your custom functions here

