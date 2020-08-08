<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-22
 */
function ltsbs_theme_setup()
{
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(array(
		'main_menu' => __('Main Menu'),
		'footer_menu' => __('Footer Menu'),
	));

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://wordpress.org/support/article/post-formats/
	 */
	add_theme_support('post-formats', array(
		'aside',
		'gallery',
		'link'
	));
}
add_action('after_setup_theme', 'ltsbs_theme_setup');

/**
 * Register widget area.
 *
 * @author hien-tech (laptrinhsbs@gmail.com)
 * @since 2020-04-24
 */
function ltsbs_sidebar_register()
{
	// blog: #sidebar_right
	register_sidebar(array(
		'name' => __('Sidebar Right'),
		'id' => 'sidebar_right',
		'before_widget'	=> '<div class="block side-widget">',
		'after_widget' => '</div>',
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	));

	// homepage: #showcase
	register_sidebar(array(
		'name' => __('Showcase'),
		'id' => 'showcase',
		'before_widget'	=> '<div class="showcase">',
		'after_widget' => '</div>',
		'before_title'	=> '<h1>',
		'after_title'	=> '</h1>'
	));

	// title của các widget
	$shared_args = array(
		'before_title'	=> '<h3>',
		'after_title'	=> '</h3>'
	);
	// homepage: #box 1
	register_sidebar(array_merge(
		array(
			'name' => __('Box 1'),
			'id' => 'box1',
			'before_widget' => '<div class="box box1">',
			'after_widget' => '</div>',
		),
		$shared_args
	));
	// homepage: #box 2
	register_sidebar(array_merge(
		array(
			'name' => __('Box 2'),
			'id' => 'box2',
			'before_widget'	=> '<div class="box box2">',
			'after_widget' => '</div>',
		),
		$shared_args
	));
	// homepage: #box 3
	register_sidebar(array_merge(
		array(
			'name' => __('Box 3'),
			'id' => 'box3',
			'before_widget'	=> '<div class="box box3">',
			'after_widget' => '</div>',
		),
		$shared_args
	));
}
add_action('widgets_init', 'ltsbs_sidebar_register');