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
		<svg class="header__inner__widgets__favorites swiper__slide__inner__favourites" data-heart>
			<use xlink:href="#favorites"></use>
		</svg>
		<a href="<?php echo $product->get_permalink(); ?>"><div class="swiper__slide__inner__image"><?php echo $product->get_image(); ?></div></a>
		<a href="<?php echo $product->get_permalink(); ?>">
			<h5 class="swiper__slide__inner__title"> <?php echo $product->get_title(); ?></h5>
		</a>
		<span class="swiper__slide__inner__price"><?php echo $product->get_price_html(); ?></span>
		<span class="swiper__slide__inner__info">ГОСТ 33929-2016</span>


		<div class="swiper__slide__inner__list"><b>Назначение:</b> специализируется на производстве
			и продаже</div>
		<div class="swiper__slide__inner__list"><b>Размер:</b> 125х55х102</div>
		<div class="swiper__slide__inner__list swiper__slide__inner__list-last"><b>Плотность:</b>
			D500</div>

		<a href="<?php echo $product->add_to_cart_url() ?>" class="swiper__slide__inner__addbasket" type="button"><?php echo $product->add_to_cart_text() ?></a>
	</div>
</div>


<!-- <img class="swiper__slide__inner__image" src="" alt="block"> -->