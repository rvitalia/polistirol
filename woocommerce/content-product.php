<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
	return;
}
?>


<div <?php wc_product_class('swiper-slide swiper-slide-catalog', $product); ?>>
	<div class="swiper__slide__inner">
		<div class="header__inner__widgets__favorites swiper__slide__inner__favourites" data-heart>
			<!-- <use xlink:href="#favorites"></use> -->
			<?php echo do_shortcode("[ti_wishlists_addtowishlist loop=yes]"); ?>
		</div>
		<a href="<?php echo $product->get_permalink(); ?>">
			<div class="swiper__slide__inner__image"><?php echo $product->get_image(); ?></div>
		</a>
		<a href="<?php echo $product->get_permalink(); ?>">
			<h5 class="swiper__slide__inner__title"> <?php echo $product->get_title(); ?></h5>
		</a>
		<span class="swiper__slide__inner__price"><?php echo $product->get_price_html(); ?></span>


		<!-- Вывод атрибутов под карточкой каталога -->

		<?php
		if ($product->get_attributes()) {
			wc_display_product_attributes($product);
		} ?>

		<!-- Конец вывода атрибутов под карточкой каталога -->


		<a href="<?php echo $product->add_to_cart_url() ?>" class="swiper__slide__inner__addbasket" type="button"><?php echo $product->add_to_cart_text() ?></a>
	</div>
</div>


<!-- <img class="swiper__slide__inner__image" src="" alt="block"> -->