<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.4.0
 */

defined('ABSPATH') || exit;

?>


<main class="main">

	<section class="basket">
		<div class="container container-basket">
			<div class="basket__wrapper">

			<?php do_action('woocommerce_before_cart'); ?>

				<button class="productinfo__inner__back" onclick="history.back();">
					<img src="<?php bloginfo('template_directory'); ?>/assets/images/products/Arrow 3.svg" alt="arrow">Назад
				</button>
				<form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">

					<div class="basket__inner">
						<h2 class="basket__inner__title">Корзина</h2>
						<div class="basket__inner__container">
							<div class="basket__inner__container__left">
								<div class="basket__inner__container__left__items shop_table shop_table_responsive cart woocommerce-cart-form__contents">

									<!-- ===========================item====================================== -->

									<?php
									foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
										$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
										$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

										if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
											$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
									?>




											<div class="basket__inner__container__left__item__wrapper woocommerce-cart-form__cart-item <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">
												<div class="basket__inner__container__left__item">
													<div class="basket__inner__container__left__item__firstblock">

														<!--------------------remove button----------------------- -->


														<div class="basket__inner__container__left__item__delete product-remove">
															<?php echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
																'woocommerce_cart_item_remove_link',
																sprintf(
																	'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
																	esc_url(wc_get_cart_remove_url($cart_item_key)),
																	esc_html__('Remove this item', 'woocommerce'),
																	esc_attr($product_id),
																	esc_attr($_product->get_sku())
																),
																$cart_item_key
															); ?>

														</div>

														<!--------------------image----------------------- -->

														<div class="basket__inner__container__left__item__preview product-thumbnail">

															<?php
															$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

															if (!$product_permalink) {
																echo $thumbnail; // PHPCS: XSS ok.
															} else {
																printf('<a href="%s" class="basket__inner__container__left__item__preview ">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
															}
															?>
														</div>
														<!--------------------Название товара----------------------- -->

														<div class="basket__inner__container__left__item__description product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
															<?php
															if (!$product_permalink) {
																echo wp_kses_post(apply_filters('woocommerce_cart_item_name ', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
															} else {
																echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s" class="basket__inner__container__left__item__name"><span class="basket__inner__container__left__item__name">%s</span></a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
															}
															?>
														</div>
													</div>
													<!--------------------counter----------------------- -->

													<div class="basket__inner__container__left__item__counter product-quantity">
														<?php
														if ($_product->is_sold_individually()) {
															$min_quantity = 1;
															$max_quantity = 1;
														} else {
															$min_quantity = 0;
															$max_quantity = $_product->get_max_purchase_quantity();
														}

														$product_quantity = woocommerce_quantity_input(
															array(
																'input_name'   => "cart[{$cart_item_key}][qty]",
																'input_value'  => $cart_item['quantity'],
																'max_value'    => $max_quantity,
																'min_value'    => $min_quantity,
																'product_name' => $_product->get_name(),
															),
															$_product,
															false
														);

														echo $product_quantity;
														?>
													</div>

													<!--------------------price----------------------- -->

													<span class="basket__inner__container__left__item__price">

														<?php echo apply_filters(
															'woocommerce_cart_item_price',
															WC()->cart->get_product_price($_product),
															$cart_item,
															$cart_item_key
														); // PHPCS: XSS ok. 	
														?>
													</span>
												</div>
												<hr class="basket__inner__container__left__line__horisontal">


												<div class="basket__inner__container__left__item__mobile">
													<div class="basket__inner__container__left__item__mobiletop">

														<!--------------------mobile image----------------------- -->


														<div class="basket__inner__container__left__item__mobiletop__img product-thumbnail">
															<!-- <div class="basket__inner__container__left__item__preview"> -->
															<?php
															$thumbnail = apply_filters('woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key);

															if (!$product_permalink) {
																echo $thumbnail; // PHPCS: XSS ok.
															} else {
																printf('<a href="%s" class="basket__inner__container__left__item__mobiletop__img ">%s</a>', esc_url($product_permalink), $thumbnail); // PHPCS: XSS ok.
															}
															?>
															<!-- </div> -->
														</div>

														<!--------------------mobile price----------------------- -->


														<div class="basket__inner__container__left__item__mobiletop__info">
															<span class="basket__inner__container__left__item__price">
																<?php echo apply_filters(
																	'woocommerce_cart_item_price',
																	WC()->cart->get_product_price($_product),
																	$cart_item,
																	$cart_item_key
																); // PHPCS: XSS ok. 	
																?>
															</span>

															<!--------------------mobile name----------------------- -->


															<span class="basket__inner__container__left__item__name__mobile product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
																<?php
																if (!$product_permalink) {
																	echo wp_kses_post(apply_filters('woocommerce_cart_item_name ', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
																} else {
																	echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s" class="basket__inner__container__left__item__name"><span class="basket__inner__container__left__item__name">%s</span></a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
																}
																?>
															</span>
														</div>
													</div>
													<hr class="basket__inner__container__left__line__horisontal__mobile">
													<div class="basket__inner__container__left__item__mobilebottom">

														<!--------------------mobile counter----------------------- -->


														<div class="basket__inner__container__left__item__counter basket__inner__container__left__item__counter__mobile">
															<div class="basket__inner__container__left__item__counter__digit product-quantity" data-counterCurrent>

															</div>
														</div>
														<div class="basket__inner__container__left__item__mobilebottom__check">
															<?php echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
																'woocommerce_cart_item_remove_link',
																sprintf(
																	'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
																	esc_url(wc_get_cart_remove_url($cart_item_key)),
																	esc_html__('Remove this item', 'woocommerce'),
																	esc_attr($product_id),
																	esc_attr($_product->get_sku())
																),
																$cart_item_key
															); ?>
														</div>
													</div>
												</div>
											</div>

									<?php }
									} ?>
									<div class="update__cart__button">
										<button type="submit" class="button<?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?>" name="update_cart" value="<?php esc_attr_e('Update cart', 'woocommerce'); ?>"><?php esc_html_e('Update cart', 'woocommerce'); ?></button>
										<?php do_action('woocommerce_cart_actions'); ?>
										<?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
									</div>

									<?php do_action('woocommerce_after_cart_table'); ?>

								</div>
								<!-- <a href=""> -->
									<button class="basket__inner__container__right__result__checkout__mobile" data-check>К оформлению <span class="basket__inner__container__right__result__allprice basket__inner__container__right__result__allprice__mobile" data-result="result"><?php woocommerce_cart_totals(); ?></span></button>
								<!-- </a> -->

							</div>

							<div class="basket__inner__container__right">
								<hr class="basket__inner__container__right__line__vertical">
								<div class="basket__inner__container__right__column">

									<div class="basket__inner__container__right__title">
										<h3 class="basket__inner__container__right__text">Общая сумма</h3>
										<hr class="basket__inner__container__right__line">
									</div>
									<div class="basket__inner__container__right__items">

										<!-- ===========================item====================================== -->
										<?php
										foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
											$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
											$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

											if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
												$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
										?>

												<div class="basket__inner__container__right__items__wrapper">
													<dl class="basket__inner__container__right__items__item">
														<dt class="basket__inner__container__right__items__item__title" id="basket-title">
															<?php
															if (!$product_permalink) {
																echo wp_kses_post(apply_filters('woocommerce_cart_item_name ', $_product->get_name(), $cart_item, $cart_item_key) . '&nbsp;');
															} else {
																echo wp_kses_post(apply_filters('woocommerce_cart_item_name', sprintf('<a href="%s" class="">%s</a>', esc_url($product_permalink), $_product->get_name()), $cart_item, $cart_item_key));
															}
															?>
														</dt>
														<dd class="basket__inner__container__right__items__item__price"><?php
																														echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key); // PHPCS: XSS ok.
																														?></dd>
													</dl>
													<hr class="basket__inner__container__right__line__bottom">
												</div>

										<?php	}
										}	?>

										<!-- ===========================end item====================================== -->

									</div>
									<?php woocommerce_cart_totals(); ?>

								</div>
							</div>
				</form>
			</div>
		</div>
	</section>
</main>

<?php do_action('woocommerce_before_cart_collaterals'); ?>



<?php do_action('woocommerce_after_cart'); ?>