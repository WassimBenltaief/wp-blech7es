<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package blech7es
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function blech7es_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'blech7es_jetpack_setup' );
