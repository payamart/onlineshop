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
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$product= wc_get_product(get_the_id());
?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>

<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="col-12">

		<div class="singlecontainp">
							<div class="row">
								<div class="col-12">

										<article class="">


											<div class="imggalery" >
											<?php woocommerce_show_product_images(); ?>
	</div>
	<div class="information">
										<p>
<?php echo $product->get_short_description(); ?>
								</p>

									<div class="col-8 ">
								<div class="pricebox1">
						<?php echo $product->get_price_html(); ?>
									</div></div>
								<span class="instockst"><?php echo ($product->get_stock_status() == 'instock') ? 'موجود در انبار' : 'ناموجود'; ?></span>

												<?php woocommerce_template_single_add_to_cart(); ?>


								</div>


										</article>

									</div>

								</div>
							</div>

														<div class=" row rahnama col-12">
														</i>

														<?php
															$logopaini = ot_get_option( 'logopaini' , false );
															if ( $logo !== false ) { ?>
														<img src="<?php echo $logopaini; ?>">
															<?php } ?>






														</div>

<div class="d-none d-lg-block row rahnama">

<img src="images/foot.png" alt="">
</div>
<div class="singlecntentt">

<ul class="nav nav-tabs" id="myTab" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">توضیحات محصول</a>
</li>
<li class="nav-item">
<a class="nav-link "id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">دیدگاه ها</a>
</li>

</ul>
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<?php echo $product->get_description(); ?>


</div>
<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">



			<div class="col-12">

				<?php comments_template(); ?>



			</div>
</div>
</div>

</div>



<div class="col-12 d-none d-md-block ">
	<div class="titlearea">
		<h3>مطالب مرتبط</h3>
	</div>
</div>

<div class=" row col-12">

<?php $args = array(
'post_type' => 'product',
'posts_per_page' =>4,
      'tax_query' => array(
            array(
							  'tag__in' => $tag_ids,
                'taxonomy' => 'product_visibility',
                'field'    => 'name',
                'terms'         => 'outofstock',
                'operator'      => 'NOT IN',
            ),
        ),
      );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
      while ( $loop->have_posts() ) : $loop->the_post(); ?>

			<div class="col-6 col-md-3">
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

<?php
      endwhile;
    } else {
          echo __( 'مطلب مرتبطی یافت نشد' );
        }
          wp_reset_postdata();
    ?>

</div>

	</div>

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>
