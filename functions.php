<?php

if( function_exists('acf_add_options_page') ) {
    
	acf_add_options_page();
	
}


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title'    => 'Theme General Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-general-settings',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
	
	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Header Settings',
		'menu_title'    => 'Header',
		'parent_slug'   => 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title'    => 'Theme Footer Settings',
		'menu_title'    => 'Footer',
		'parent_slug'   => 'theme-general-settings',
	));
	
}

//добавляем возможность загрузки svg
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}


// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style('style-name', get_template_directory_uri() . '/assets/css/style.min.css');

	wp_enqueue_script('script-name', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true);
});


wp_deregister_style('woocommerce-general');
wp_deregister_style('woocommerce-layout');

add_action('init', 'register_post_types');

// add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// function theme_register_nav_menu() {
// 	register_nav_menu( 'Top', 'Меню в шапке справа' );
// }


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
add_theme_support('woocommerce'); 

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

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

