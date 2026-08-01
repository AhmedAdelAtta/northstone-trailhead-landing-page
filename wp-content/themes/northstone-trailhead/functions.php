<?php

/**
 * Northstone Trailhead functions and definitions
 *
 * @package Northstone_Trailhead
 */

if (! defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

/**
 * Theme setup
 */
function northstone_trailhead_setup()
{

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support(
		'html5',
		array(
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'northstone_trailhead_setup');

/**
 * Enqueue styles
 */
function northstone_trailhead_scripts()
{

	wp_enqueue_style(

		'northstone-style',
		get_template_directory_uri() . '/assets/css/styles.css',
		array(),
		filemtime(get_template_directory() . '/assets/css/styles.css')
	);

	wp_enqueue_script(
		'gallery-js',
		get_template_directory_uri() . '/assets/js/scripts.js',
		array(),
		filemtime(
			get_template_directory() . '/assets/js/scripts.js'
		),
		true
	);
}
add_action('wp_enqueue_scripts', 'northstone_trailhead_scripts');
