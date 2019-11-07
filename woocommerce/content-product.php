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
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-6 col-md-4">
	<div class="contentbox">
		<header>
			<figure>
				<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'articlethumb' ); ?></a>
				<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			</figure>
		</header>
		<div class="pricebox">
<?php echo $product->get_price_html(); ?>
			</div>
			<a href="<?php echo $product->add_to_cart_url(); ?>" class="add-to-cart">
				<span>افزودن به سبد</span><i class="fa fa-shopping-cart" aria-hidden="true"></i>
	</a>
	</div>
</div>
