<?php
/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 5.2.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_mini_cart' ); ?>

<?php if ( ! WC()->cart->is_empty() ) : ?>
	
	<div class="container-mini-cart-pos flex-normal">

		

		<div class="info-mini-cart-top">

			<h5>Resumen de tu pedido</h5>

			<ul class="woocommerce-mini-cart cart_list product_list_widget <?php echo esc_attr( $args['list_class'] ); ?>">
				<?php
				do_action( 'woocommerce_before_mini_cart_contents' );

				foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
					$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
					$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

					if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
						$product_name      = apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key );
						$thumbnail         = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
						$product_price     = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
						$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
						?>
						<li class="woocommerce-mini-cart-item <?php echo esc_attr( apply_filters( 'woocommerce_mini_cart_item_class', 'mini_cart_item', $cart_item, $cart_item_key ) ); ?>">

							<div class="product-inner-wrap" data-item-key="<?php echo esc_attr($cart_item_key); ?>" data-product-key="<?php echo esc_attr($product_id); ?>" <?php
												            if ($_product->is_type('variation')) {
												                $variation_id = $cart_item['variation_id'];
												                ?>
												                     data-item-variation="<?php echo esc_attr($variation_id); ?>"
												                 <?php }
										                 ?>>

								<div class="product-name-mini-cart">
									
									<?php echo wp_kses_post( $product_name ); ?>

								</div>	

								<div class="product-details flex-normal">	                 

									<?php
									echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
										'woocommerce_cart_item_remove_link',
										sprintf(
											'<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">&times;</a>',
											esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
											esc_attr__( 'Remove this item', 'woocommerce' ),
											esc_attr( $product_id ),
											esc_attr( $cart_item_key ),
											esc_attr( $_product->get_sku() )
										),
										$cart_item_key
									);
									?>
									<?php if ( empty( $product_permalink ) ) : ?>
										<?php 
											echo $thumbnail; 
											//$thumbnail . wp_kses_post( $product_name );
											// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
										?>
									<?php else : ?>
										<a href="<?php echo esc_url( $product_permalink ); ?>">
											<?php 
												echo $thumbnail;
												//$thumbnail . wp_kses_post( $product_name ); 
												// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
											?>
										</a>
									<?php endif; ?>
									<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

									<div class="quantity-price-wrapper flex-normal">

										<?php //echo apply_filters( 'woocommerce_widget_cart_item_quantity', '<span class="quantity" id="qty-prod">' . sprintf( '%s &times; %s', $cart_item['quantity'], $product_price ) . '</span>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

										<div class="smcw-item-quty">
										    <span class="quantity">
										        <?php echo esc_attr($cart_item['quantity']); ?>
										    </span>
										    <span class="times">&times;</span>
										    <?php echo $product_price; ?>
										</div>


														<?php /*
														
										                */
										                ?>


						                <div class="smcw-quantity">

						                    <div class="smcw-minus-button">-</div>
						                    <div class="smcw-input">
						                        <!--
						                        <input type="number" step="1" class="smcw-quantity-inputs qty-new-input" value="<?php
						                        echo esc_attr($cart_item['quantity']);
						                        ?>" />
						                    	-->

						                    	<?php  


		                    						if ($_product->is_sold_individually()) {
		                    			                 $product_quantity = sprintf('<input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key);
		                    			             } else {
		                    										  $input_args = array(
		                    			                    //'input_name' => "cart[{$cart_item_key}][qty]",
		                    			                    'input_value' => $cart_item['quantity'],
		                    			                    'max_value' => $_product->backorders_allowed() ? '' : $_product->get_stock_quantity(),
		                    			                    'min_value' => '1',
		                    			                    'step' => '1',
		                    			                    'classes'      => apply_filters( 'woocommerce_quantity_input_classes', array( 'input-text', 'qty', 'text', 'smcw-quantity-inputs', 'qty-new-input' ), $product ),
		                    		                );
		                    		                                            
		                    		                $product_quantity = woocommerce_quantity_input($input_args, $_product, false);
		                    		                }
		                    		                echo apply_filters('woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item);

						                    	?>

						                    </div>
						                    <div class="smcw-plus-button increase-qty">+</div>
						                    <div class="smcw-hiden-wrap smcw-nonactive">
						                        <?php esc_html_e('La cantidad minima es 1', SMCW_TD); ?>
						                    </div>
						                </div>

					                </div>

					            </div>    

							</div>					



						</li>
						<?php
					}
				}

				do_action( 'woocommerce_mini_cart_contents' );
				?>
			</ul>

		</div>	

		<div class="info-mini-cart-bottom">

			<div class="triangle"></div>

			<div class="messages-mini-cart">

				<?php  

					$total_cart = WC()->cart->get_subtotal();

					//$message = secret_test($total_cart);
					$message = add_coupon_notice_mini_cart($total_cart);

					echo '<p>'.$message.'</p>'; 

				?>

			</div>
		
			<div class="total-mini-cart">


				<p class="woocommerce-mini-cart__total total flex-normal">
					<?php
					/**
					 * Hook: woocommerce_widget_shopping_cart_total.
					 *
					 * @hooked woocommerce_widget_shopping_cart_subtotal - 10
					 */
					do_action( 'woocommerce_widget_shopping_cart_total' );
					?>
				</p>

				<div class="total-wrap subtotal-wrap flex-normal">
				    
				    <span class="subtotal-label label-sub">
				        <?php
				        esc_html_e('Subtotal', SMCW_TD);
				        ?>
				    </span>

				    <div class="items-subtotal-price price-sub">
				        <?php
				        echo WC()->cart->get_cart_subtotal();
				        ?>
				    </div>

				</div>

				<div class="copupons-wrapper">

					<?php  
						foreach ( WC()->cart->get_coupons() as $code => $coupon ) : 
					?>

						<div class="total-wrap coupon-wrap flex-normal">
							
							<span class="coupon-label label-sub">  <?php wc_cart_totals_coupon_label( $coupon ) ?></span>

							<div class="coupon-total price-sub">
							    <?php
							    	
							    	$amount = WC()->cart->get_coupon_discount_amount( $coupon->get_code(), WC()->cart->display_cart_ex_tax );
							    	    
							    	$discount_amount_html = '-' . wc_price( $amount );

							    	echo $discount_amount_html;

							    ?>
							</div>  

						</div>	    
						           
					<?php	
						endforeach;
					?>

				</div>	

				<div class="total-wrap total-price-container flex-normal">

				    <span class="total-label label-sub">
				        <?php esc_html_e('Total', SMCW_TD); ?>
				    </span>

				    <div class="total-price-wrap price-sub">
				        <?php
				        $total = WC()->cart->total;
				        //echo $total;
				        echo wc_price($total);
				        ?>
				    </div>

				</div>

			</div>

			<?php do_action( 'woocommerce_widget_shopping_cart_before_buttons' ); ?>

			<p class="woocommerce-mini-cart__buttons buttons flex-normal"><?php do_action( 'woocommerce_widget_shopping_cart_buttons' ); ?></p>

			<?php do_action( 'woocommerce_widget_shopping_cart_after_buttons' ); ?>

		</div>

	</div>

<?php else : ?>

	<p class="woocommerce-mini-cart__empty-message"><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></p>

<?php endif; ?>

<?php do_action( 'woocommerce_after_mini_cart' ); ?>