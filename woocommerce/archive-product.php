<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
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
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
<div class="row">
	<div class="titlebarpub">

		<div class="col-12">

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 * @hooked WC_Structured_Data::generate_website_data() - 30
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

    <header class="woocommerce-products-header">

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>

		<?php endif; ?>

		<?php
			/**
			 * woocommerce_archive_description hook.
			 *
			 * @hooked woocommerce_taxonomy_archive_description - 10
			 * @hooked woocommerce_product_archive_description - 10
			 */
			do_action( 'woocommerce_archive_description' );
		?>

    </header>
	</div>

</div>
</div>
<div class=" row specialsell">
<div class="gift"> </i>

<?php
	$vizhelogo = ot_get_option( 'vizhelogo' , false );
	if ( $logo !== false ) { ?>
<img src="<?php echo $vizhelogo; ?>">
	<?php } ?>


</div>
<p>فروش ویژه</p>


</div>

<div class=" row ">
  <div class=" col-6 col-md-4 col-lg-3 ">
  <div class="specialp1">

<head>
	<?php
		$pic1 = ot_get_option( 'pic1' , false );
		$plink1 = ot_get_option( 'plink1' , false );
		if ( $sptitle !== false ) { ?>

	<a href="<?php echo $plink1; ?>"><img src="<?php echo $pic1; ?>"></a>

<?php } ?>
</head>
<section>
<h3><?php echo $npr1 = ot_get_option( 'npr1' ); ?></h3>
<h2><?php echo $pri1 = ot_get_option( 'pri1' ); ?></h2>
<h1><?php echo $prit1 = ot_get_option( 'prit1' ); ?></h1>
<a href="#"><div class="off"><?php echo $mt1 = ot_get_option( 'mt1' ); ?></div></a>
<a href="<?php echo $plink1; ?>" class="add-to-cart">
  <span>مشاهده کالا</span>
<i class="fa fa-shopping-cart" aria-hidden="true"><?php echo $sptitle; ?></i>
</a>
</section>

</div>
</div>

<div class=" col-6 col-md-4 col-lg-3 ">
<div class="specialp1">

<head>
<?php
	$pic2 = ot_get_option( 'pic2' , false );
	$plink2 = ot_get_option( 'plink2' , false );
	if ( $sptitle !== false ) { ?>

<a href="<?php echo $plink2; ?>"><img src="<?php echo $pic2; ?>"></a>

<?php } ?>
</head>
<section>
<h3><?php echo $npr2 = ot_get_option( 'npr2' ); ?></h3>
<h2><?php echo $pri2 = ot_get_option( 'pri2' ); ?></h2>
<h1><?php echo $prit2 = ot_get_option( 'prit2' ); ?></h1>
<a href="#"><div class="off"><?php echo $mt2 = ot_get_option( 'mt2' ); ?></div></a>
<a href="<?php echo $plink2; ?>" class="add-to-cart">
<span>مشاهده کالا</span>
<i class="fa fa-shopping-cart" aria-hidden="true"><?php echo $sptitle; ?></i>
</a>
</section>

</div>
</div>
<div class=" col-6 col-md-4 col-lg-3 ">
<div class="specialp1">

<head>
<?php
	$pic3 = ot_get_option( 'pic3' , false );
	$plink3 = ot_get_option( 'plink3' , false );
	if ( $sptitle !== false ) { ?>

<a href="<?php echo $plink3; ?>"><img src="<?php echo $pic3; ?>"></a>

<?php } ?>
</head>
<section>
<h3><?php echo $npr3 = ot_get_option( 'npr3' ); ?></h3>
<h2><?php echo $pri3 = ot_get_option( 'pri3' ); ?></h2>
<h1><?php echo $prit3 = ot_get_option( 'prit3' ); ?></h1>
<a href="#"><div class="off"><?php echo $mt3 = ot_get_option( 'mt3' ); ?></div></a>
<a href="<?php echo $plink3; ?>" class="add-to-cart">
<span>مشاهده کالا</span>
<i class="fa fa-shopping-cart" aria-hidden="true"><?php echo $sptitle; ?></i>
</a>
</section>

</div>
</div>
<div class=" col-6 col-md-4 col-lg-3 ">
<div class="specialp1">

<head>
<?php
	$pic4 = ot_get_option( 'pic4' , false );
	$plink4 = ot_get_option( 'plink4' , false );
	if ( $sptitle !== false ) { ?>

<a href="<?php echo $plink4; ?>"><img src="<?php echo $pic4; ?>"></a>

<?php } ?>
</head>
<section>
<h3><?php echo $npr4 = ot_get_option( 'npr4' ); ?></h3>
<h2><?php echo $pri4 = ot_get_option( 'pri4' ); ?></h2>
<h1><?php echo $prit4 = ot_get_option( 'prit4' ); ?></h1>
<a href="#"><div class="off"><?php echo $mt4 = ot_get_option( 'mt4' ); ?></div></a>
<a href="<?php echo $plink4; ?>" class="add-to-cart">
<span>مشاهده کالا</span>
<i class="fa fa-shopping-cart" aria-hidden="true"><?php echo $sptitle; ?></i>
</a>
</section>

</div>
</div></div>
<div class="col-12">

<div class="row">

<?php get_sidebar(); ?>
	<div class="col-12 col-md-12 col-lg-9 ">
		<?php if ( have_posts() ) : ?>
<div class="row">
	<div class="col-12">

			<?php
				/**
				 * woocommerce_before_shop_loop hook.
				 *
				 * @hooked wc_print_notices - 10
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>
</div></div>
			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/**
						 * woocommerce_shop_loop hook.
						 *
						 * @hooked WC_Structured_Data::generate_product_data() - 10
						 */
						do_action( 'woocommerce_shop_loop' );
					?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook.
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php
				/**
				 * woocommerce_no_products_found hook.
				 *
				 * @hooked wc_no_products_found - 10
				 */
				do_action( 'woocommerce_no_products_found' );
			?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
</div></div>
</div>
	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>
</div>
<?php get_footer( 'shop' ); ?>
