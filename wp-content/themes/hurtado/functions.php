<?php
function hunt_enqueue_styles()
{
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');
	wp_enqueue_style('main-asset-css', get_template_directory_uri() . '/assets/css/main.css');
	wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('font-awesome-new', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
	wp_enqueue_style('revolution-css', get_template_directory_uri() . '/assets/css/revolution-slider.css');
	wp_enqueue_style('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css');
	wp_enqueue_style('nice-select', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css');
	wp_enqueue_style('odometer', get_template_directory_uri() . '/assets/css/odometer.css');
	wp_enqueue_style('owl-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css');
	wp_enqueue_style('house-child-one', get_template_directory_uri() . '/assets/css/houseland-child-style.css');
	wp_enqueue_style('house-child-two', get_template_directory_uri() . '/assets/css/houseland-child-style-two.css');
	wp_enqueue_style('custom-theme', get_template_directory_uri() . '/assets/css/custom-theme.css');
	wp_enqueue_style('responsive-one', get_template_directory_uri() . '/assets/css/responsive-one.css');
	wp_enqueue_style('responsive-two', get_template_directory_uri() . '/assets/css/responsive-two.css');
	wp_enqueue_style('wc-custom-css', get_template_directory_uri() . '/assets/css/woocommerce-custom.css');
	wp_enqueue_style('elementor-post-css', get_template_directory_uri() . '/assets/css/elementor-post.css');
	wp_enqueue_style('elementor-global-css', get_template_directory_uri() . '/assets/css/elementor-global.css');
	wp_enqueue_style('revslider-two', get_template_directory_uri() . '/assets/css/revslider-two.css');
}
function hunt_enqueue_script() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap-min.js');
	wp_enqueue_script( 'tilt-jquery', get_template_directory_uri() . '/assets/js/tilt-jquery.min.js');
	wp_enqueue_script( 'mcustomscroll-min-js', get_template_directory_uri() . '/assets/js/mcustomscroll-min.js');
	wp_enqueue_script( 'revslider-min-js', get_template_directory_uri() . '/assets/js/revslider-min.js');
	wp_enqueue_script( 'revslider-rbtools-js', get_template_directory_uri() . '/assets/js/revslider-rbtools.js');
	wp_enqueue_script( 'fancybox-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js');
	wp_enqueue_script( 'slick-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js');
	wp_enqueue_script( 'owl-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
	wp_enqueue_script( 'wow-min-js', get_template_directory_uri() . '/assets/js/wow-min.js');
	wp_enqueue_script( 'easing-min-js', get_template_directory_uri() . '/assets/js/easing.min.js');
	wp_enqueue_script( 'jq-nice-select', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.js');
	wp_enqueue_script( 'image-uploader', get_template_directory_uri() . '/assets/js/image-uploader.js');
	wp_enqueue_script( 'odometer', 'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js');
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js');
	wp_enqueue_script( 'appear', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/0.4.1/jquery.appear.js');
	wp_enqueue_script( 'countdown-js', get_template_directory_uri() . '/assets/js/countdown.js');
	wp_enqueue_script( 'magnific-popup-js','https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js');
	wp_enqueue_script( 'mixkit-js','https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.js');	
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'script-new-js', get_template_directory_uri() . '/assets/js/script-new.js');
}
add_action('wp_enqueue_scripts', 'hunt_enqueue_styles');
add_action('wp_enqueue_scripts', 'hunt_enqueue_script');
?>