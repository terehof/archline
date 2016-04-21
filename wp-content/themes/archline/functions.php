<?php
if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}
?>
<?php
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


add_action('customize_register', function($customizer){
	$customizer->add_section(
		'example_section_one',
		array(
			'title' => 'Страница контакты',
			'priority' => 11,
		)
	);
	$customizer->add_setting(
		'work_hours',
		array('default' => '')
	);
	$customizer->add_control(
		'work_hours',
		array(
			'label' => 'Рабочие часы',
			'section' => 'example_section_one',
			'type' => 'textarea',
		)
	);

	$customizer->add_setting(
		'contacts',
		array('default' => '')
	);
	$customizer->add_control(
		'contacts',
		array(
			'label' => 'Контакты',
			'section' => 'example_section_one',
			'type' => 'textarea',
		)
	);

	$customizer->add_setting(
		'address',
		array('default' => '')
	);
	$customizer->add_control(
		'address',
		array(
			'label' => 'Адрес',
			'section' => 'example_section_one',
			'type' => 'textarea',
		)
	);



	$customizer->add_section(
		'footer',
		array(
			'title' => 'Футер',
			'priority' => 11,
		)
	);
	$customizer->add_setting(
		'copyright',
		array('default' => '')
	);
	$customizer->add_control(
		'copyright',
		array(
			'label' => 'Текст копирайта',
			'section' => 'footer',
			'type' => 'textarea',
		)
	);
	$customizer->add_setting(
		'footer_contacts',
		array('default' => '')
	);
	$customizer->add_control(
		'footer_contacts',
		array(
			'label' => 'Контакты в футере',
			'section' => 'footer',
			'type' => 'textarea',
		)
	);
});



//add_action('init', 'projects');
//function projects() {
//	add_theme_support( 'post-thumbnails' );
//	register_post_type('projects', array(
//		'public' => true,
//		'supports' => array('title'),
//		'labels' => array(
//			'name' => 'Проекты',
//			'all_items' => 'Все проекты',
//			'singular_name' => 'проект',
//			'add_new' => 'Добавить проект',
//			'add_new_item' => 'Добавление нового проекта',
//			'not_found' => 'Проекты не найдены.'
//		),
//		'menu_icon' => 'dashicons-format-gallery',
//		'menu_position' => 21
//	));
//}

/****
 **  категории
 ****/
//add_action('init', 'create_category_taxonomy');
//function create_category_taxonomy(){
//	// заголовки
//	$labels = array(
//		'name'              => 'Категории',
//		'singular_name'     => 'категория',
//		'search_items'      => 'Поиск категорий',
//		'all_items'         => 'Все категории',
//		'edit_item'         => 'Редактирование категории',
//		'add_new_item'      => 'Добавить категорию',
//		'menu_name'         => 'Категории',
//	);
//	// параметры
//	$args = array(
//		'labels'                => $labels,
//		'public'                => true,
//		'show_in_nav_menus'     => true, // равен аргументу public
//		'show_ui'               => true, // равен аргументу public
//		'show_tagcloud'         => false, // равен аргументу show_ui
//		'hierarchical'          => true,
//		'rewrite'               => true,
//		//'query_var'             => $taxonomy, // название параметра запроса
//		'capabilities'          => array(),
//		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
//		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
//		'_builtin'              => false,
//		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
//	);
//	register_taxonomy('category', array('projects'), $args );
//}




?>