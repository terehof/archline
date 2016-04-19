<?php
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
?>
<?
/***
 *  downloadable styles and scripts
 **/
function load_style_script () {
	wp_enqueue_script('bootstrap.min' , get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script('jquery.min' , get_template_directory_uri() . '/js/jquery.min.js');
	wp_enqueue_script('walkway.min' , get_template_directory_uri() . '/js/walkway.min.js');
	wp_enqueue_script('svg-animate' , get_template_directory_uri() . '/js/svg-animate.js');
	wp_enqueue_script('icon_menu_animate' , get_template_directory_uri() . '/js/icon_menu_animate.js');
	wp_enqueue_script('mapsApi' , 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCy7z6N7jtoxwmK-WOIXvGEHSeK_x2P-kk');
	wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js');
    wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-theme.min', get_template_directory_uri() . '/css/bootstrap-theme.min.css');
    wp_enqueue_style('icon_menu_animate', get_template_directory_uri() . '/css/icon_menu_animate.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
}
/***
 * load styles and scripts
 **/
add_action('wp_enqueue_scripts', 'load_style_script');


/***
 * slider
 **/
add_action('init', 'slider');
function slider() {
	add_theme_support( 'post-thumbnails' );
	register_post_type('projects', array(
		'public' => true,
		'supports' => array('title'),
		'labels' => array(
			'name' => 'Проекты',
			'all_items' => 'Все проекты',
			'singular_name' => 'проект',
			'add_new' => 'Добавить проект',
			'add_new_item' => 'Добавление нового проекта',
			'not_found' => 'Проекты не найдены.'
		),
		'menu_icon' => 'dashicons-format-gallery',
		'menu_position' => 21
	));
}





?>