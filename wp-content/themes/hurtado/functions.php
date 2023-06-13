<?php
function hunt_enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');
	wp_enqueue_style('main-asset-css', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
}
add_action('wp_enqueue_scripts', 'hunt_enqueue_styles');
?>