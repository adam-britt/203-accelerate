<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles for parent theme + child theme
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Custom post types function
function create_custom_post_types() {
	// create a case study custom post type
	register_post_type('case_studies',
		array (
			'labels' => array(
				'name' => __( 'Case Studies' ),
				'singular_name' => __( 'Case Study' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array( 'slug' => 'case-studies' ),
		),
	);
}
// Hook custom post types function into theme
add_action( 'init', 'create_custom_post_types' );

// Enable social media icons
add_filter( 'storm_social_icons_size', create_function( '', 'return "normal";' ) );