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

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<?php 

	// Get Product ID
  	if( "123" == $product->get_id()){ ?>

  		<style>
  			
  			.details-pro-bg,
  			.tab-slid,
  			.related{
  				display: none;
  			}

  		</style>

  	<?php } ?>	

	<?php if( "181" == $product->get_id()){ ?>

		<style>
			
			.woocommerce-product-gallery,
			.entry-summary,
			.details-pro-bg,
			.tab-slid{
				display: none;
			}

		</style>

		<header class="store">

		    <div class="bg">
		        <img class="img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-main.webp" alt="">
		    </div>
		    
		    <div class="columns columns--triple flex-normal">
		        
		        <!--
		        <div class="item left">
		            
		            <div class="img"></div>

		            <div class="plant plant--up"></div>

		        </div>
		        -->

		        <div class="item middle">
		            
		            <div class="slider">

		                <h1 class="special">Crea tu marca</h1>

		                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident nobis quisquam quia, aut distinctio excepturi. </p>

		                  <div class="m-btn m-btn--main">Crear ahora</div>

		              </br>

		                  <div class="m-btn m-btn--secondary">¿Como funciona?</div>

		            </div>

		            

		        </div>

		        <div class="item right">
		            
		            <!--
		            <h6>Arma tu kit</h6>

		            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
		            -->

		            <div class="plant plant--up-rotate">
		                <div class="img"></div>
		            </div>

		            <div class="btn-info flex-normal">
		                
		                

		                <div class="img special"></div>

		            </div>

		            

		        </div>

		    </div>

		</header>

	<?php }

?>


<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
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
	</div>

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

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'details-pro', $product ); ?>>

	<!--
	<div class="details-pro-bg"></div>

	<div class="tab-slid flex-normal">
		
		<?php do_action( 'hook_secreto' ); ?>

		<div class="img"></div>

	</div>
	-->

</div>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'details-pro', $product ); ?>>
	
	<?php do_action( 'hook_secreto2' ); ?>

</div>

<?php if( "181" == $product->get_id()){ ?>

	<div class="showcase">

		<h3 class="title">Trabajos realizados</h3>
		
		<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vv.jpg" alt="">

	</div>

<?php } ?>

<!--
<div class="product-more">
	
	<div class="img"></div>

	<div class="info">

		<h6 class="title">Conoce más</h6>

		<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Corporis voluptatum deserunt minima nostrum tenetur debitis.</p>

	</div>

</div>
-->



<?php do_action( 'woocommerce_after_single_product' ); ?>