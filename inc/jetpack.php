<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package underscores_blueprint
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function underscores_blueprint_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'underscores_blueprint_jetpack_setup' );
