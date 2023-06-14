<?php
function hunt_enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');
	wp_enqueue_style('main-asset-css', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css');
	wp_enqueue_style('flat-two-css', get_template_directory_uri() . '/assets/css/flaticons_two.css');
	wp_enqueue_style('flat-three-css', get_template_directory_uri() . '/assets/css/flaticons_three.css');
	wp_enqueue_style('revolution-css', get_template_directory_uri() . '/assets/css/revolution-slider.css');
	wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
	wp_enqueue_style('nice-select', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css');
	wp_enqueue_style('odometer', get_template_directory_uri() . '/assets/css/odometer.css');
	wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css');
}
add_action('wp_enqueue_scripts', 'hunt_enqueue_styles');
?>