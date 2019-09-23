<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'gatestone2017_style' );
				function gatestone2017_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/custom-style.css', array('parent-style') );
				}
				
add_action( 'wp_enqueue_scripts', 'gatestone2017_script' );

				function gatestone2017_script() {
					wp_register_script('custom-script',get_stylesheet_directory_uri(). '/assets/js/custom-script.js', array('jquery'),NULL,true);
					wp_enqueue_script('custom-script');
				}

/**
 * Your code goes below.
 */

