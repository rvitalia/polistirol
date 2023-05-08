<?php

/**
 * The Template for displaying wishlist if a current user is owner.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/ti-wishlist.php.
 *
 * @version             2.3.3
 * @package           TInvWishlist\Template
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}
wp_enqueue_script('tinvwl');
?>
<?php if (function_exists('wc_print_notices') && isset(WC()->session)) {
						wc_print_notices();
					} ?>
<main class="main">

	<section class="favourites">
		<div class="container container-main">
			<div class="favourites__inner">
				<div class="tinv-wishlist woocommerce tinv-wishlist-clear favourites_plugin_main">
					<span class="similar__inner__title"><?php do_action('tinvwl_before_wishlist', $wishlist); ?></span>


					

					<?php $form_url = tinv_url_wishlist($wishlist['share_key'], $wl_paged, true); ?>
					<form action="<?php echo esc_url($form_url); ?>" method="post" autocomplete="off" data-tinvwl_paged="<?php echo $wl_paged; ?>" data-tinvwl_per_page="<?php echo $wl_per_page; ?>" data-tinvwl_sharekey="<?php echo $wishlist['share_key'] ?>">
						<?php do_action('tinvwl_before_wishlist_table', $wishlist); ?>

						<div class="similar__inner__wrapper favourites__plugin">


							<?php do_action('tinvwl_wishlist_contents_before'); ?>

							<?php

							global $product, $post;
							// store global product data.
							$_product_tmp = $product;
							// store global post data.
							$_post_tmp = $post;

							foreach ($products as $wl_product) {

								if (empty($wl_product['data'])) {
									continue;
								}

								// override global product data.
								$product = apply_filters('tinvwl_wishlist_item', $wl_product['data']);
								// override global post data.
								$post = get_post($product->get_id());

								unset($wl_product['data']);
								if ($wl_product['quantity'] > 0 && apply_filters('tinvwl_wishlist_item_visible', true, $wl_product, $product)) {
									$product_url = apply_filters('tinvwl_wishlist_item_url', $product->get_permalink(), $wl_product, $product);
									do_action('tinvwl_wishlist_row_before', $wl_product, $product);
							?>

									<div class="similar__inner__wrapper__item favorites__inner__wrapper__item favourites__plugin__item">
										<div class="similar__inner__wrapper__item_background favourites__inner__wrapper__item__background">
											<?php
											$thumbnail = apply_filters('tinvwl_wishlist_item_thumbnail', $product->get_image(), $wl_product, $product);

											if (!$product->is_visible()) {
												echo $thumbnail; // WPCS: xss ok.
											} else {
												printf('<a href="%s">%s</a>', esc_url($product_url), $thumbnail); // WPCS: xss ok.
											}
											?>
										</div>
										<span class="similar__inner__wrapper__item__subtitle favourites__plugin__item_title">
											<?php
											if (!$product->is_visible()) {
												echo apply_filters('tinvwl_wishlist_item_name', is_callable(array(
													$product,
													'get_name'
												)) ? $product->get_name() : $product->get_title(), $wl_product, $product) . '&nbsp;'; // WPCS: xss ok.
											} else {
												echo apply_filters('tinvwl_wishlist_item_name', sprintf('<a href="%s">%s</a>', esc_url($product_url), is_callable(array(
													$product,
													'get_name'
												)) ? $product->get_name() : $product->get_title()), $wl_product, $product); // WPCS: xss ok.
											}

											echo apply_filters('tinvwl_wishlist_item_meta_data', tinv_wishlist_get_item_data($product, $wl_product), $wl_product, $product); // WPCS: xss ok.
											?>
										</span>

										<span class="similar__inner__wrapper__item__price favourites__plugin__item_price">
											<?php
											echo apply_filters('tinvwl_wishlist_item_price', $product->get_price_html(), $wl_product, $product); // WPCS: xss ok.
											?>
										</span>
										<div class="header__inner__widgets__favorites favourites__inner__item__icon product-remove">

											<button type="submit" name="tinvwl-remove" value="<?php echo esc_attr($wl_product['ID']); ?>" title="<?php _e('Remove', 'ti-woocommerce-wishlist') ?>"><i class="ftinvwl ftinvwl-times"></i>
											</button>
										</div>

										<?php
										if (apply_filters('tinvwl_wishlist_item_action_add_to_cart', $wishlist_table_row['add_to_cart'], $wl_product, $product)) {
										?>
											<button class="favourites__inner__item__button" name="tinvwl-add-to-cart" value="<?php echo esc_attr($wl_product['ID']); ?>" title="<?php echo esc_html(apply_filters('tinvwl_wishlist_item_add_to_cart', $wishlist_table_row['text_add_to_cart'], $wl_product, $product)); ?>">
												<i class="ftinvwl ftinvwl-shopping-cart favourites__plugin__item__button"></i><span class="tinvwl-txt"><?php echo wp_kses_post(apply_filters('tinvwl_wishlist_item_add_to_cart', $wishlist_table_row['text_add_to_cart'], $wl_product, $product)); ?></span>
											</button>
										<?php } elseif (apply_filters('tinvwl_wishlist_item_action_default_loop_button', $wishlist_table_row['add_to_cart'], $wl_product, $product)) { ?>
											<div class="favourites__plugin__item__button__disabled"><?php woocommerce_template_loop_add_to_cart(); ?></div>
											<?php
										} ?>

									</div>

							<?php
									do_action('tinvwl_wishlist_row_after', $wl_product, $product);
								} // End if().
							} // End foreach().
							// restore global product data.
							$product = $_product_tmp;
							// restore global post data.
							$post = $_post_tmp;
							?>
							<?php do_action('tinvwl_wishlist_contents_after'); ?>
						</div>
					</form>
					<?php do_action('tinvwl_after_wishlist', $wishlist); ?>
					<div class="tinv-lists-nav tinv-wishlist-clear">
						<?php do_action('tinvwl_pagenation_wishlist', $wishlist); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>