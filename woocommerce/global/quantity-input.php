<?php

/**
 * Product quantity inputs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/quantity-input.php.
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
 *
 * @var bool   $readonly If the input should be set to readonly mode.
 * @var string $type     The input type attribute.
 */

defined('ABSPATH') || exit;

/* translators: %s: Quantity. */
$label = !empty($args['product_name']) ? sprintf(esc_html__('%s quantity', 'woocommerce'), wp_strip_all_tags($args['product_name'])) : esc_html__('Quantity', 'woocommerce');
?>
<div class="quantity">
	<?php
	/**
	 * Hook to output something before the quantity input field.
	 *
	 * @since 7.2.0
	 */
	do_action('woocommerce_before_quantity_input_field');
	?>

	<!-- Вывести выбранные параметры вариативного товара -->

	<!-- <?php 
	if (is_product()):
		 echo '<div class="productinfo__inner__right__parametrs">
		<div class="productinfo__inner__right__parametrs__height"><b>Высота</b><label class="productinfo__inner__right__parametrs__input" id="height"></label></div>
		<div class="productinfo__inner__right__parametrs__width"><b>Ширина</b><label class="productinfo__inner__right__parametrs__input" id="width"></label></div>
		<div class="productinfo__inner__right__parametrs__depth"><b>Глубина</b><label class="productinfo__inner__right__parametrs__input" id="depth"></label></div>
		</div>'; endif;
	?> -->
	

	<label class="screen-reader-text" for="<?php echo esc_attr($input_id); ?>"><?php echo esc_attr($label); ?></label>

	<!-- type="<?php echo esc_attr($type); ?>" -->

	 <?php
	if (is_product()):
		echo '<div class="productinfo__inner__right__dataprice">'; 
	else:
		echo '<div class="basket__inner__container__left__item__counter__digit" data-counter="replace">';
	endif; ?>


<?php
	if (is_product()):
		echo '<span class="productinfo__inner__right__dataprice__minus" data-operation="minus">-</span>'; 
	else:
		echo '<span class="basket__inner__container__left__item__counter__minus" data-operation="minus">-</span>';
	endif; ?>

		<input type="number" <?php echo $readonly ? 'readonly="readonly"' : ''; ?> 
		id="<?php echo esc_attr($input_id); ?>" 

		<?php if (is_product()):?>
		class="<?php echo esc_attr(join(' ', (array) $classes)); ?> productinfo__inner__right__dataprice__count" 
		<?php else:?>
		class="<?php echo esc_attr(join(' ', (array) $classes)); ?> basket__inner__container__left__item__counter__digit" 
		<?php endif; ?>

		name="<?php echo esc_attr($input_name); ?>" 
		value="<?php echo esc_attr($input_value); ?>" 
		title="<?php echo esc_attr_x('Qty', 'Product quantity input tooltip', 'woocommerce'); ?>" 
		size="4" 
		min="<?php echo esc_attr($min_value); ?>" 
		max="<?php echo esc_attr(0 < $max_value ? $max_value : ''); ?>" <?php if (!$readonly) : ?> 
			step="<?php echo esc_attr($step); ?>" placeholder="<?php echo esc_attr($placeholder); ?>" 
			inputmode="<?php echo esc_attr($inputmode); ?>" 
			autocomplete="<?php echo esc_attr(isset($autocomplete) ? $autocomplete : 'on'); ?>" <?php endif; ?> 
			data-count="digit__count"/>


			<?php
	if (is_product()):
		echo '<span class="productinfo__inner__right__dataprice__plus" data-operation="plus">+</span>'; 
	else:
		echo '<span class="basket__inner__container__left__item__counter__plus" data-operation="plus">+</span>';
	endif; ?>

		


		<div class="productinfo__inner__right__dataprice__price" id="current_price">
</div>
	</div>



	<?php
	/**
	 * Hook to output something after quantity input field
	 *
	 * @since 3.6.0
	 */
	do_action('woocommerce_after_quantity_input_field');
	?>
</div>
<?php
