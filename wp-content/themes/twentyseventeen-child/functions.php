<?php

add_action('wp_enqueue_scripts', 'tsc_wp_enqueue_scripts');


/**loading up the parent style sheet here
//look at how stylesheet is being loaded
 * check over to the parent function.php and see what the enqueue style was called, in this case the twentyseventeen_style
 *
 */
function tsc_wp_enqueue_scripts() {
    wp_enqueue_style( 'twentyseventeen-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'twentyseventeen-child-style', get_stylesheet_directory_uri() . '/style.css');
}

