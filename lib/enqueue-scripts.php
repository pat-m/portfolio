<?php
/**
 * Enqueue scripts and styles.
 */
function portfolio_scripts() {
    wp_enqueue_style( 'portfolio-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'portfolio_scripts' );