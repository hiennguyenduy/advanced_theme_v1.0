<?php
/**
 * Add style + js files to header.
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-22
 */
function ltsbs_theme_styles()
{
	// theme default
	wp_enqueue_style(THEME_NAME.'-boss', get_stylesheet_uri(), false, THEME_VERSION, 'all');
	
	// other css files
	wp_enqueue_style(THEME_NAME.'-theme', ASSETS_URI.'/css/theme.css', false, THEME_VERSION, 'all');
}
add_action('wp_enqueue_scripts', 'ltsbs_theme_styles');