<?php

/**
 * Change Excerpt Length
 * @return Int This return value is hard set to 20.
 */
function custom_excerpt_length() {
	return 10;
}
add_filter('excerpt_length', 'custom_excerpt_length');


/**
 * Change Excerpt Ending
 * @return string This is hard set to '...'
 */
function custom_excerpt_more() {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');