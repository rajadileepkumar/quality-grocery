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
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

			<div class="col-md-6">
	<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
	?>
			</div>
			<div class="col-md-6">
				<div class="shop-detail-right klb-product-right">
				<?php 
					$product = new WC_Product(get_the_ID());
					$id = get_the_ID();
					$badge = '';
					if( $product->is_on_sale() ) {
						$badge .= '<span class="badge badge-success">';			
						$badge .= ceil(100 - ($product->get_sale_price() / $product->get_regular_price()) * 100);			
						$badge .= '% '.esc_html__('OFF','groci').'</span>';			
					}
					
					echo groci_sanitize_data($badge);
				?>
		<?php
			/**
			 * Hook: woocommerce_single_product_summary.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			do_action( 'woocommerce_single_product_summary' );
		?>
		
					<?php $singlefeaturedbox = ot_get_option( 'groci_single_product_featured_box' ); ?>
					<?php if ($singlefeaturedbox) { ?>
					<h6 class="mb-3 mt-4"><?php echo esc_html(ot_get_option('groci_featured_box_title')); ?></h6>
					<div class="row">
					<?php foreach($singlefeaturedbox as $key => $value) { ?>
						<div class="col-md-6">
							<div class="feature-box">
								<i class="mdi mdi-<?php echo esc_attr($value['groci_featued_icon']); ?>"></i>
								<h6 class="text-info"><?php echo esc_html($value['title']); ?></h6>
								<p><?php echo esc_html($value['groci_featured_subtitle']); ?></p>
							</div>
						</div>
					<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div>
			<div class="col-md-12">
				

	<?php
		/**
		 * Hook: woocommerce_after_single_product_summary.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
			</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
