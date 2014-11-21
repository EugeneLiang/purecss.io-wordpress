<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package purecss.io
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function purecss_io_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'purecss_io_jetpack_setup' );
