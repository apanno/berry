<?php

/**
 * Seed Configurations
 *
 * SEED_LAYOUT -> full-width, boxed
 * SEED_HEADER -> fixed, standard, (auto-show)
 * SEED_MENU -> off-canvas, (dropdown), (push)
 * SEED_BLOG_LAYOUT -> full-width, leftbar, rightbar
 * SEED_BLOG_COLUMNS -> 1, 2, 3, 4, 5, 6
 * SEED_SHOP_LAYOUT -> full-width, leftbar, rightbar
 * SEED_SHOP_MAINPAGE -> default, page-builder
 */


define('SEED_LAYOUT', 'full-width');
define('SEED_HEADER', 'standard');
define('SEED_MENU', 'off-canvas');
define('SEED_BLOG_LAYOUT', 'full-width');
define('SEED_BLOG_COLUMNS', '1');
define('SEED_SHOP_LAYOUT', 'leftbar');
define('SEED_SHOP_MAINPAGE', 'default');

/**
 * Enqueue scripts and styles.
 */
function berry_scripts() {

	wp_dequeue_style( 'seed-style');
	wp_enqueue_style( 'berry-style', get_stylesheet_uri() );
	wp_enqueue_script( 'berry-main', get_stylesheet_directory_uri() . '/js/main.js', array(), '2016-1', true );

}
add_action( 'wp_enqueue_scripts', 'berry_scripts' , 20 );

