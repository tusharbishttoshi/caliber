<?php
function hunt_enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('main-asset-css', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'hunt_enqueue_styles');
?>