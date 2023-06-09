<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

?>


<main class="main">
	<section <?php wc_product_class('productinfo', $product); ?>>

		<?php do_action('woocommerce_before_single_product'); ?>

		<div class="container container-product">

			<div class="productinfo__wrapper">
				<button class="productinfo__inner__back" onclick="history.back();">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/products/Arrow 3.svg" alt="arrow">Назад
				</button>
				<div class="productinfo__inner">
					<div class="productinfo__inner__left">
						<h2 class="productinfo__inner__right__title productinfo__inner__right__title__mobile"><?php the_title(); ?></h2>

						<!-- Начало галереи							 -->

						<?php
						// $product_image_id = $product->get_image_id();
						$product_gallery_ids = $product->get_gallery_image_ids();;
						?>

						<div id="main-carousel" class="splide splide-main" aria-label="My Awesome Gallery">
							<div class="splide__track">
								<ul class="splide__list splide__list__main">

									<!-- цикл для больших картинок							 -->

									<?php foreach ($product_gallery_ids as $product_gallery_id) :  ?>

										<li class="splide__slide splide__slide__main">
											<div class="splide__slide__main__wrapper">
												<div class="header__inner__widgets__favorites productinfo__inner__right__buttons__favourites splide_favourite --mobile">
													<!-- <?php echo do_shortcode("[ti_wishlists_addtowishlist loop=yes]"); ?> -->
												</div>
												<?php echo wp_get_attachment_image($product_gallery_id, 'full'); ?>
											</div>
										</li>

									<?php endforeach; ?>

								</ul>
							</div>
						</div>

						<ul id="thumbnails" class="thumbnails">
							<!-- цикл для миниатюр							 -->

							<?php foreach ($product_gallery_ids as $product_gallery_id) :  ?>

								<li class="thumbnail thumbnail__main">

									<?php echo wp_get_attachment_image($product_gallery_id, 'woocommerce_gallery_thumbnail'); ?>
									<!-- woocommerce_gallery_thumbnail - выводит миниатюры 100*100 -->
									<!-- <img src="./assets/images/products/blocksmall1.png" alt=""> -->
								</li>
							<?php endforeach; ?>

						</ul>

						<!-- Конец галереи							 -->



						<div class="content__loaded" data-insert>

						</div>

						<!-- Вывод атрибутов под галереей -->

						<h5 class="productinfo__inner__left__title">Технические особенности</h5>
						<?php
						if ($product->get_attributes()) {
							wc_display_product_attributes($product);
						} ?>

						<!-- Конец вывода атрибутов под галереей -->


					</div>

					<div class="productinfo__inner__right" data-content>
						<h2 class="productinfo__inner__right__title"><?php the_title(); ?></h2>
						<span class="productinfo__inner__right__data"><?php echo $product->get_description(); ?></span>

						<!-- Есть ли товар в наличии. Если есть то  есть, если нет - то предзаказ -->

						<!-- <?php if ($product->is_in_stock()) {
									echo ' <div class="productinfo__inner__right__availibility">
                                    В наличии <span class="productinfo__inner__right__availibility__count"> есть</span>
                                </div>';
								} else {
									echo '<a class="productinfo__inner__right__availibility productinfo__inner__right__noneavailibility"
                                    href=""> Предзаказ</a>';
								} ?> -->

						<!-- Конец выбора  -->

								

						<!-- Вывести выбранные параметры вариативного товара -->
						<!-- Выбор вариативного товара -->
						<!-- Счетчик товара -->
						<!-- Добавление в корзину -->

						<?php woocommerce_template_single_add_to_cart(); ?>
						<h5 class="productinfo__inner__left__title">Дополнительная информация</h5>
						<?php
						if ($product->get_attributes()) {
							wc_display_product_attributes($product);
						} ?>

					</div>
				</div>
			</div>

		</div>
	</section>

	<section class="similar">
		<div class="container  container-product">
			<div class="similar__inner">
				<h1 class="similar__inner__title similar__inner__title--center">Похожие товары</h1>
				<div class="similar__inner__wrapper">

					<?php
					$related_products = array(); // array(5,10,35)
					$upsells = $product->get_upsell_ids();
					if ($upsells) {
						//если заданы апсейлы ту выводим их
						$related_products = $upsells;
					} else {
						//если не заданы апсейлы то выводим стандартную вукомерс функуию и указываем количество выводимых значений
						$related_products = wc_get_related_products($product->get_id(), 5);
					}
					?>

					<?php
					woocommerce_product_loop_start();

					foreach ($related_products as $related_product) : ?>

						<?php
						$post_object = get_post($related_product);

						setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found


						wc_get_template_part('content', 'product');

						?>

					<?php endforeach;

					woocommerce_product_loop_end();
					?>

				</div>
			</div>
	</section>
</main>