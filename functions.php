<?php

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}


if (function_exists('acf_add_options_page')) {

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
add_filter('upload_mimes', 'svg_upload_allow');

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

	// WP 5.1 +
	if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
		$dosvg = in_array($real_mime, ['image/svg', 'image/svg+xml']);
	} else {
		$dosvg = ('.svg' === strtolower(substr($filename, -4)));
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if ($dosvg) {

		// разрешим
		if (current_user_can('manage_options')) {

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


	if (is_shop()) :
		wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.min.js', array(), '1.0.0', true);
	endif;

	if (is_product()) :
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.min.js', array(), '1.0.0', true);
	endif;
	if (is_cart()) :
		wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/basket.min.js', array(), '1.0.0', true);
	endif;
});


wp_deregister_style('woocommerce-general');
wp_deregister_style('woocommerce-layout');

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
add_theme_support('woocommerce');

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('wpcf7_form_elements', function ($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});


// function filter_woocommerce_product_single_add_to_cart_text( $text, $instance ) {
//     // Измените значение текста $text на кнопке
//     return $text;
// };
// add_filter( 'woocommerce_product_single_add_to_cart_text', 'filter_woocommerce_product_single_add_to_cart_text', 10, 2 );

add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single');
function woocommerce_add_to_cart_button_text_single()
{
	return __('Добавить в корзину', 'woocommerce');
}

// Change add to cart text on product archives page
add_filter('woocommerce_product_add_to_cart_text', 'woocommerce_add_to_cart_button_text_archives');
function woocommerce_add_to_cart_button_text_archives()
{
	return __('Добавить в корзину', 'woocommerce');
}

remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

//отключаем доставку
function delshipping_calc_in_cart($show_shipping)
{
	if (is_cart()) {
		return false;
	}
	return $show_shipping;
}
add_filter('woocommerce_cart_ready_to_calc_shipping', 'delshipping_calc_in_cart', 99);

/* Автоматическое обновление корзины в зависимости от изменения количества товара */
add_action('wp_footer', 'cart_update_qty_script');

function cart_update_qty_script()
{
	if (is_cart()) :
?>
		<script>
			jQuery('div.woocommerce').on('change', '.qty', function() {
				jQuery("[name='update_cart']").removeAttr('disabled');
				jQuery("[name='update_cart']").trigger("click");
			});
		</script>
	<?php

	endif;
}

add_filter('woocommerce_cart_needs_payment', '__return_false');

add_action('wp_footer', function () {

	?><script>
		jQuery(function($) {
			$('.single_variation_wrap').on('show_variation', function(event, variation) {
				//  console.log(variation.availability_html);
				$('#current_price').html(variation.price_html);
				$('#availibility').html(variation.availability_html);

				let textavailible = $('.in-stock').text();
				//Проверка на число, содержит ли т.е. либбо в наличии - количество штук, либо нет  в наличии. 
				function hasNumber(s) {
					return /\d/.test(s);
				}

				if (hasNumber(textavailible)) {
					$('#availibility').html('В наличии <span class="productinfo__inner__right__availibility__count">есть</span>');
				} else {
					$('#availibility').html('В наличии <span class="productinfo__inner__right__availibility__count">предзаказ</span>');
				}
				// console.log(hasNumber(textavailible));
			});
		});

		function splitTitle() {
			let basketTitles = document.querySelectorAll('#basket-title>a');
			if (basketTitles.length > 0 && basketTitles !== null)
				basketTitles.forEach(element => {
					let title = element.textContent;
					let arrTitle = title.split('-');
					element.textContent = arrTitle[0];
				});
			else {
				//console.log(basketTitles);
			}
		}
		splitTitle();

		function replaceCounter() {
			if (window.innerWidth <= 1000) {
				let counters = document.querySelectorAll('[data-counter="replace"]');

				counters.forEach(element => {
					let parrentdiv = element.closest('.basket__inner__container__left__item__wrapper ');
					// console.log(parrentdiv);

					let currentcounter = parrentdiv.querySelector('[data-counterCurrent]');
					// console.log(currentcounter);
					let quantity = document.createElement('div');
					quantity.classList.add('quantity');
					currentcounter.appendChild(quantity);
					quantity.appendChild(element);
				});
			}
		}

		replaceCounter();

		function changeNameButton() {
			let buttons = document.querySelectorAll('.tinvwl-txt');
			buttons.forEach(element => {
				let button = element;
				if (button.textContent !== 'null' && button.textContent === 'Add to Cart') {
					button.textContent = 'Добавить в корзину';
				}
				// if(button.textContent !== 'null' && button.textContent === 'Добавить в корзину'){
				// 	button.textContent = 'Выбрать вариацию';
				// }
			});

		}
		changeNameButton();

		function cancelDisabled() {
			let button = document.querySelector('[name="update_cart"]');
			let minuses = document.querySelectorAll('[data-operation="minus"]');
			let pluses = document.querySelectorAll('[data-operation="plus"]');

			minuses.forEach(element => {
				element.addEventListener('click', () => {
					button.removeAttribute('disabled');
					setTimeout(function() {
						button.click();
					}, 100)

				})
			});
			pluses.forEach(element => {
				element.addEventListener('click', () => {
					button.removeAttribute('disabled');
					setTimeout(function() {
						button.click();
					}, 100)

				})
			});
		}
		cancelDisabled();

		function mobileOrderTap(){
			if(window.innerWidth <= 1000 ){
				let button = document.querySelector('[data-check]');
				button.addEventListener('click', (event)=>{
					event.preventDefault();
					let hrefCheckout = document.querySelectorAll('[data-hrefcheckout]');
					hrefCheckout[1].click();
					console.log(hrefCheckout);
				})
			}
		}
		mobileOrderTap();

		jQuery(document.body).on('updated_cart_totals', function() {
			splitTitle();
			replaceCounter();
			cancelDisabled();
		});
		jQuery(document.body).on('remove', function() {
			changeNameButton();
		});
	</script><?php
			});
