<?php

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('style-name', get_template_directory_uri() . '/assets/css/style.min.css');

	wp_enqueue_script('script-name', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true);
});

add_action('init', 'register_post_types');

function register_post_types()
{

	register_post_type('Documents & testing', [
		'label'  => null,
		'labels' => [
			'name'               => 'Документы', // основное название для типа записи
			'singular_name'      => 'Документ', // название для одной записи этого типа
			'add_new'            => 'Добавить документ', // для добавления новой записи
			'add_new_item'       => 'Добавление Документ', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Документа', // для редактирования типа записи
			'new_item'           => 'Новый Документ', // текст новой записи
			'view_item'          => 'Смотреть Документ', // для просмотра записи этого типа.
			'search_items'       => 'Искать Документы', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Документы и испытания(PDF - файлы)', // название меню
		],
		'description'            => 'Документы и тесты',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 4,
		'menu_icon'           => 'dashicons-admin-page',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail', 'author', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'  => array('category'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);

	register_post_type('D&T-video', [
		'label'  => null,
		'labels' => [
			'name'               => 'Видео', // основное название для типа записи
			'singular_name'      => 'Видео', // название для одной записи этого типа
			'add_new'            => 'Добавить Видео', // для добавления новой записи
			'add_new_item'       => 'Добавление Видео', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Видео', // для редактирования типа записи
			'new_item'           => 'Новое Видео', // текст новой записи
			'view_item'          => 'Смотреть Видео', // для просмотра записи этого типа.
			'search_items'       => 'Искать Видео', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Документы и испытания (Видео)', // название меню
		],
		'description'            => 'Документы и тесты (видео)',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-video',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail', 'author', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'  => array('category'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);

	register_post_type('advantages-video', [
		'label'  => null,
		'labels' => [
			'name'               => 'Видео', // основное название для типа записи
			'singular_name'      => 'Видео', // название для одной записи этого типа
			'add_new'            => 'Добавить Видео', // для добавления новой записи
			'add_new_item'       => 'Добавление Видео', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование Видео', // для редактирования типа записи
			'new_item'           => 'Новое Видео', // текст новой записи
			'view_item'          => 'Смотреть Видео', // для просмотра записи этого типа.
			'search_items'       => 'Искать Видео', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Достоинства блока (Видео)', // название меню
		],
		'description'            => 'Достоинства блока (видео)',
		'public'                 => true,
		'publicly_queryable'  => true, // зависит от public
		'exclude_from_search' => true, // зависит от public
		'show_ui'             => true, // зависит от public
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'           => true, // показывать ли в меню админки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'show_in_rest'        => true, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 6,
		'menu_icon'           => 'dashicons-format-video',
		'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => ['title', 'editor', 'custom-fields', 'thumbnail', 'author', 'excerpt', 'trackbacks', 'comments', 'revisions', 'page-attributes', 'post-formats'], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'  => array('category'),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	]);
}


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo'); 


// function abrosco__scripts() {
// 	if ( is_page(7) ) {
// 		// отменяем зарегистрированный jQuery
// 		wp_deregister_script( 'jquery' );
// 		wp_register_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js');

// 		wp_enqueue_script( 'jquery');
// 		wp_enqueue_script( 'scroll-magic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.8/ScrollMagic.min.js', null, true );
// 		// wp_enqueue_script( 'particleJS', 'http://www.jsdelivr.com/#!particles.js', null, true );
// 		wp_enqueue_script( 'app', get_template_directory_uri() .'/assets/js/app.js', array('jquery'), null, true );
// 	}
// 	if ( is_page(196) ) {
// 		wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array(), null, true );
// 	}
// 		if ( is_page(355) ) {
// 		wp_enqueue_script( 'project', get_template_directory_uri() .'/assets/js/project.js', array(), null, true );
// 	}
// 		if ( is_page(721) ) {
// 		wp_enqueue_script( 'news', get_template_directory_uri() .'/assets/js/news.js', array(), null, true );
// 	}
// }
