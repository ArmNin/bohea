<?php

//add actions
/////////////
add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );//add to the header the related styles files
add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );//add to the very bottom of the html the related code files
add_action( 'after_setup_theme', 'woocommerce_support' );//add woocommerce support
//add_action( 'template_redirect', 'remove_woocommerce_styles_scripts', 999 );// remove all scripts from none woocommerce pages
//add_action( 'wp_head', 'gtm',20 );//add gtm tag

//add Filters
//////////////
//add_filter( 'woocommerce_checkout_fields' , 'custom_remove_woo_checkout_fields' );//remove fields from checkout

//add Functions
///////////////
function wpt_theme_styles() {// get the necesary files for the style of the theme

	//wp_enqueue_style( 'googlefont2_css', 'https://fonts.googleapis.com/css?family=Itim&text=Woof%26',20 );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', 'all' );
  wp_enqueue_style( 'slider_css', get_template_directory_uri() . '/assets/css/flexslider.css', 'all' );
  wp_enqueue_style( 'lightbox_css', get_template_directory_uri() . '/assets/css/lightbox.css', 'all' );
	
  /* Remove woocommerce styles from non Woocomemrce pages
  if ( function_exists( 'is_woocommerce' ) ) {
      if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
         wp_dequeue_style( 'wc-gateway-ppec-frontend-cart' );
       }
     }
     */
}


function wpt_theme_js() {// get the necesary code files for the theme to work 
	
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/code/general/code.js', array('jquery'), '', true );
	/* load custom code on page based on template name
  if(is_page()){ //Check if we are viewing a page
    global $wp_query;
   
          //Check which template is assigned to current page we are looking at
    $template_name = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
    if($template_name == 'page-templates/page-FoodDrDr.php'){
             //If page is draggable
       wp_enqueue_script('draggable', 'https://cdn.jsdelivr.net/npm/interactjs@1.3.4/dist/interact.min.js','', true);   
    }
  }*/

  
  $frontend_ajax_nonce = wp_create_nonce('frontend-ajax-nonce');
  $frontend_ajax_object = array('ajax_url' => admin_url('admin-ajax.php'), 'ajax_nonce' => $frontend_ajax_nonce);
  wp_localize_script('main_js', 'cart_ajax2', array('ajaxurl' => admin_url('admin-ajax.php')));
  wp_localize_script('main_js', 'frontend_js_params', $frontend_ajax_object);
  
}
function woocommerce_support() {// add support
    add_theme_support( 'woocommerce' );
    //add_theme_support( 'menus' );
    //add_theme_support( 'post-thumbnails' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}


// Update WooCommerce Flexslider options

add_filter( 'woocommerce_single_product_carousel_options', 'ud_update_woo_flexslider_options' );

function ud_update_woo_flexslider_options( $options ) {

    $options['directionNav'] = true;

    return $options;
}

function gtm(){ //add google tag mannager?>
      <!-- Google Tag Manager -->
      <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5MPFZLK');</script>
      <!-- End Google Tag Manager -->  
<?php }

/************************************************************
*********************WOOCOMMERCE*****************************
********help functions to start any soowommerce store*******
***********************************************************/

function remove_woocommerce_styles_scripts() {// remove all scripts from none woocommerce pages
    if ( function_exists( 'is_woocommerce' ) ) {
        if (  ! is_cart() && ! is_checkout() ) {
            remove_action('wp_enqueue_scripts', [WC_Frontend_Scripts::class, 'load_scripts']);
            remove_action('wp_print_scripts', [WC_Frontend_Scripts::class, 'localize_printed_scripts'], 5);
            remove_action('wp_print_footer_scripts', [WC_Frontend_Scripts::class, 'localize_printed_scripts'], 5);
        }
    }
}
function custom_remove_woo_checkout_fields( $fields ) {//remove fields from checkout
   if ( function_exists( 'is_woocommerce' ) ) {
      // remove billing fields
      //unset($fields['billing']['billing_first_name']);
      //unset($fields['billing']['billing_last_name']);
      //unset($fields['billing']['billing_company']);
      //unset($fields['billing']['billing_address_1']);
      //unset($fields['billing']['billing_address_2']);
      //unset($fields['billing']['billing_city']);
      //unset($fields['billing']['billing_postcode']);
      //unset($fields['billing']['billing_country']);
      //unset($fields['billing']['billing_state']);
      //unset($fields['billing']['billing_phone']);
      //unset($fields['billing']['billing_email']);
      
      
      // remove order comment fields
      unset($fields['order']['order_comments']);
      
      return $fields;
  }
}


// add opening and closing div to better display products on single product page 
add_action( 'woocommerce_before_single_product_summary', 'opening_div' );
add_action( 'woocommerce_after_single_product_summary', 'closing_div', 5 );

function opening_div() {

  echo "<div class='wrapp-product flex-normal'>";

}

function closing_div() {

  echo "</div>";

}

add_action('template_redirect', 'remove_shop_breadcrumbs' );
function remove_shop_breadcrumbs(){
 
  
        remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0);
 
}


//remove side bar on product page
function disable_woo_commerce_sidebar() {
  remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10); 
}
add_action('init', 'disable_woo_commerce_sidebar');


function prueba(){

    echo "hola";

}

add_action('woocommerce_before_shop_loop_item','test', 15);

function test(){

    echo "<div class='bg-product-img'>";

}


add_action('woocommerce_shop_loop_item_title','test2', 5);

function test2(){

    echo "<div class='bg-product-img-1' style='background: transparent url(".get_field('cir').") no-repeat center; background-size: 140% auto;'></div></div>";

}



add_action('woocommerce_shop_loop_item_title','test3', 5);

function test3(){

    global $post, $product;

    $cats = wc_get_product_category_list($product->get_id());

    global $product;

    $product_cats_ids = wc_get_product_term_ids( $product->get_id(), 'product_cat' );

    foreach( $product_cats_ids as $cat_id ) {
        $term = get_term_by( 'id', $cat_id, 'product_cat' );

        //echo $term->name;
    }

    echo "<div class='title-price-container flex-normal'>";

}


add_action('woocommerce_after_shop_loop_item_title','test4', 15);

function test4(){

    echo "</div>";

}

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash');




    

/*
*
*Add roles
*/
  
add_role( 'userLista2', __( 'userLista2' ), array(
  'read'            => true, // Allows a user to read
  'create_posts'    => true, // Allows user to create new posts
  'edit_posts'      => true // Allows user to edit their own posts 
));

add_role( 'userLista3', __( 'userLista3' ), array(
  'read'            => true, // Allows a user to read
  'create_posts'    => true, // Allows user to create new posts
  'edit_posts'      => true // Allows user to edit their own posts 
));

add_role( 'userLista4', __( 'userLista4' ), array(
  'read'            => true, // Allows a user to read
  'create_posts'    => true, // Allows user to create new posts
  'edit_posts'      => true // Allows user to edit their own posts 
));

add_role( 'userLista5', __( 'userLista5' ), array(
  'read'            => true, // Allows a user to read
  'create_posts'    => true, // Allows user to create new posts
  'edit_posts'      => true // Allows user to edit their own posts 
));
  

/**
 * @snippet       Disable Payment Gateway for a Specific User Role | WooCommerce
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @testedwith    WooCommerce 3.8
 * @donate $9     https://businessbloomer.com/bloomer-armada/
 */
  
add_filter( 'woocommerce_available_payment_gateways', 'bbloomer_paypal_disable_manager' );
  
function bbloomer_paypal_disable_manager( $available_gateways ) {

    $user = new WP_User(get_current_user_id());  

   if ( isset( $available_gateways['cheque'] ) && !in_array( 'userLista5', (array) $user->roles ) ) {
      unset( $available_gateways['cheque'] );
   } 

   if ( isset( $available_gateways['openpay_cards'] ) && in_array( 'userLista5', (array) $user->roles ) ) {
      unset( $available_gateways['openpay_cards'] );
   }

   if ( isset( $available_gateways['ppec_paypal'] ) && in_array( 'userLista5', (array) $user->roles ) ) {
      unset( $available_gateways['ppec_paypal'] );
   } 

   

   return $available_gateways;
}




/*
**
**
* Addnew role after customer purchased something
*/

add_action( 'woocommerce_order_status_completed', 'wpglorify_change_role_on_purchase' );

add_action( 'woocommerce_thankyou' , 'wpglorify_change_role_on_purchase' );

function wpglorify_change_role_on_purchase( $order_id ) {


//regarding adding users
    /*
        $user->add_role('power_member');
        $user->roles; // ["subscriber", "power_member"]
         
        $user->set_role('editor');
        $user->roles; // ["editor"]

        $user->remove_role( 'customer' ); 
    */

// get_user
    $user = new WP_User(get_current_user_id());        

//avaliable tiers
    $minimum_amount_l2 = 5000;
    $minimum_amount_l3 = 16000;
    $minimum_amount_l4 = 90000;

// get order object and items
    $order = new WC_Order( $order_id );

    //var_dump($order);
    //$items = $order->get_items();

    $order_total = $order->get_total();

    /*$product_id = 56; // that's a specific product ID

    foreach ( $items as $item ) {

        if( $product_id == $item['product_id'] && $order->user_id ) {
            $user = new WP_User( $order->user_id );

            // Remove old role
            $user->remove_role( 'customer' ); 

            // Add new role
            $user->add_role( 'editor' );
        }
    }*/


    if ( $order_total < $minimum_amount_l4 ) {

           if ( $order_total > $minimum_amount_l3 ) {
                
               

           }
           
           /*
           * Next tier
           */

           if ( $order_total < $minimum_amount_l3 ) {
                  
            

                  if ( $order_total > $minimum_amount_l2 ) {

                   

                }

                  /*
                  * Next tier
                  */

                  if ( $order_total < $minimum_amount_l2 ) {
                         
                         
                   } else {// if is equal or above the target >= $5,000

                        // Add new role
                          $user->add_role( 'userLista2' );
                          $user->remove_role( 'userLista3' );
                          $user->remove_role( 'userLista4' );
                          
                          //echo "pinguino tier 2";
                          var_dump( $user->roles );

                   }


            } else {// if is equal or above the target >= $16,000

                  // Add new role
                    $user->add_role( 'userLista3' );
                    $user->remove_role( 'userLista2' );
                    $user->remove_role( 'userLista4' );
                    var_dump( $user->roles );

            }

     } else {// if is equal or above the target >= $90,000

        // Add new role
            $user->add_role( 'userLista4' );
            $user->remove_role( 'userLista3' );
            $user->remove_role( 'userLista2' );
           var_dump( $user->roles );
     }

}

function add_coupon_notice_mini_cart($total) {


    // get_user
    //$user = new WP_User(get_current_user_id()); 

    /*
    * Lista2 -> Precio Publico -> MinCom = 0 / Desc = 0
    * Lista2 -> Medio mayoreo -> MinCom = $5,000 / Desc = 50%
    * Lista3 -> Mayoreo -> MinCom = $16,000 / Desc = 56.50%
    * Lista4 -> Distribuidor exclusivo -> MinCom = $90,000 / Desc = 66.60%
    */

        $cart_total = $total;
        $minimum_amount_l2 = 3000;
        $minimum_amount_l3 = 15000;
        $minimum_amount_l4 = 90000;
        $currency_code = get_woocommerce_currency();
        //wc_clear_notices();

    $message1 = "";    

    if ( $cart_total < $minimum_amount_l2 ) {


           WC()->cart->remove_coupon( '30% Desc' );

                
            $message1 = "<p>Obten un <span>30% de descuento</span> si agregas más de <span>$3,000</span> al carrito!</p>";


     } 

    if ( $cart_total >= $minimum_amount_l2 ) {


            WC()->cart->apply_coupon( '30% Desc' );

                 
             $message1 = "<p>¡Felicidades! <span> Ya tienes el 30% de descuento</span>  aplicadoo a tu carrito!</p>";


    } 

    

    return $message.$message1;

}

function secret_test($total){

    if( $total ){

        $message = $total;

    }

    return $message;

}

function increase_qty() {

    // Check for nonce security
        $nonce = sanitize_text_field( $_POST['_wpnonce'] );

        if ( ! wp_verify_nonce( $nonce, 'frontend-ajax-nonce' ) ) {
            die ( 'Busted!');
        }

    //$product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));    

    $cart_item_key = sanitize_text_field($_POST['item_key']);
    $quantity = sanitize_text_field($_POST['currentVal']);
    WC()->cart->set_quantity($cart_item_key, $quantity, $refresh_totals = true);
    WC()->cart->calculate_totals();
    WC()->cart->maybe_set_cart_cookies();
    $total_count = WC()->cart->get_cart_contents_count();

    //WC()->cart->apply_coupon( 'test' );

    $total_cart = WC()->cart->get_subtotal();

    //$message = secret_test($total_cart);
    $message = add_coupon_notice_mini_cart($total_cart);

    $total_price = WC()->cart->total;
    $sub_total_price = WC()->cart->get_cart_subtotal();//WC()->cart->get_subtotal();     
    $tax_calculate = wc_round_tax_total(WC()->cart->get_cart_contents_tax() + WC()->cart->get_shipping_tax() + WC()->cart->get_fee_tax());

   
    
    $coupons = [];
    
     foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
          
        <?php

            $amount = WC()->cart->get_coupon_discount_amount( $coupon->get_code(), WC()->cart->display_cart_ex_tax );
                $discount_amount_html = '-' . wc_price( $amount ); 

            $coupons[] = '<div class="total-wrap coupon-wrap flex-normal"><span class="coupon-label label-sub">'.wc_cart_totals_coupon_label( $coupon, false ).'</span>
           <div class="coupon-total price-sub">'.$discount_amount_html.'</div> </div>';?>   
                
     <?php endforeach;
     
     

    $response = array(
        'total_count' => $total_count,
        'total_price' => wc_price($total_price),
        'sub_total' => $sub_total_price,
        'tax_price' => $tax_calculate,
        'coupons' => $coupons,
        'message' => $message,
        //'id' => $product_id
    );

    echo json_encode($response);
    die();
}

add_action('wp_ajax_smcw_plus_action2', 'increase_qty');
add_action('wp_ajax_nopriv_smcw_plus_action2', 'increase_qty');

function decrease_qty() {

    /*
    $cart_item_key = sanitize_text_field($_POST['item_key']);
    $quantity = sanitize_text_field($_POST['currentVal']);
    WC()->cart->set_quantity($cart_item_key, $quantity, $refresh_totals = true);
    WC()->cart->calculate_totals();
    WC()->cart->maybe_set_cart_cookies();
    $total_count = WC()->cart->get_cart_contents_count();
    $total_price = WC()->cart->total;
    $sub_total_price = WC()->cart->get_subtotal();
    $tax_calculate = wc_round_tax_total(WC()->cart->get_cart_contents_tax() + WC()->cart->get_shipping_tax() + WC()->cart->get_fee_tax());

    $response = array(
        'total_count' => $total_count,
        'total_price' => $total_price,
        'sub_total' => $sub_total_price,
        'tax_price' => $tax_calculate
    );
    */

    // Check for nonce security
        $nonce = sanitize_text_field( $_POST['_wpnonce'] );

        if ( ! wp_verify_nonce( $nonce, 'frontend-ajax-nonce' ) ) {
            die ( 'Busted!');
        }

    $cart_item_key = sanitize_text_field($_POST['item_key']);
    $quantity = sanitize_text_field($_POST['currentVal']);
    WC()->cart->set_quantity($cart_item_key, $quantity, $refresh_totals = true);
    WC()->cart->calculate_totals();
    WC()->cart->maybe_set_cart_cookies();
    $total_count = WC()->cart->get_cart_contents_count();
    $total_price = WC()->cart->total;
    $sub_total_price = WC()->cart->get_cart_subtotal();//WC()->cart->get_subtotal();     
    $tax_calculate = wc_round_tax_total(WC()->cart->get_cart_contents_tax() + WC()->cart->get_shipping_tax() + WC()->cart->get_fee_tax());

   

    $coupon_name = [];
    $coupon_total = []; 

     foreach ( WC()->cart->get_coupons() as $code => $coupon ) : 
                
                $coupon_name = wc_cart_totals_coupon_label( $coupon ); 
                $coupon_total = wc_cart_totals_coupon_html( $coupon ); 
                
     endforeach;

    $response = array(
        'total_count' => $total_count,
        'total_price' => wc_price($total_price),
        'sub_total' => $sub_total_price,
        'tax_price' => $tax_calculate,
        'coupon_name' => $coupon_name,
        'coupon_total' => $coupon_total
    );
    

    echo json_encode($response);
    die();

}

add_action('wp_ajax_smcw_minus_action2', 'increase_qty');
add_action('wp_ajax_nopriv_smcw_minus_action2', 'increase_qty');


//add attribute to decide on parent
// Add the product name as data argument to Ajax add to cart buttons



add_filter( "woocommerce_loop_add_to_cart_args", "filter_wc_loop_add_to_cart_args", 20, 2 );


function filter_wc_loop_add_to_cart_args( $args, $product ) {

    //if(is_page_template('page-templates/page-kit.php')){

        /*if ( $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ) {
            $args['attributes']['data-kit'] = "kit";
        }*/

    if(is_page_template('page-templates/page-kit.php')){    

        $args['attributes']['data-kit'] = "kit";

    }

    //}
    return $args;
}

/**
 * Change number of related products output
 */ 

add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 3; // 4 related products
    $args['columns'] = 3; // arranged in 2 columns
    return $args;
}


/**
 * Remove product page tabs
 */
//add_filter( 'woocommerce_product_tabs', 'my_remove_all_product_tabs', 98 );
 
function my_remove_all_product_tabs( $tabs ) {
  unset( $tabs['description'] );        // Remove the description tab
  unset( $tabs['reviews'] );       // Remove the reviews tab
  unset( $tabs['additional_information'] );    // Remove the additional information tab
  return $tabs;
}

add_filter('gettext', 'change_rp_text', 10, 3);
add_filter('ngettext', 'change_rp_text', 10, 3);

function change_rp_text($translated, $text, $domain)
{
     if ($text === 'Related products' && $domain === 'woocommerce') {
         $translated = esc_html__('También te puede interesar', $domain);
     }
     return $translated;
}

add_action('woocommerce_after_single_product','gg');
//do_action('woocommerce_after_single_product_summary','gg');


function gg(){
   // echo "pinguino";
}

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);


//add_action('hook_secreto', 'woocommerce_output_product_data_tabs', 10);

add_action('hook_secreto2', 'woocommerce_output_related_products', 10);

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

    $tabs['description']['title'] = __( 'Beneficios' );       // Rename the description tab
    $tabs['reviews']['title'] = __( 'Modo de uso' );                // Rename the reviews tab
    $tabs['additional_information']['title'] = __( 'Ingredientes' );    // Rename the additional information tab

    return $tabs;

}

/*
add custom field to products when they are on kit page.
The filed will be used as a flag to send on the event when the product is added by ajax and then the field will be checked against a condition to group all the products that has that flog enabled
*/


//add_action('woocommerce_after_shop_loop_item','wdm_add_custom_fields');
/**
 * Adds custom field for Product
 * @return [type] [description]
 */
function wdm_add_custom_fields()
{

    global $product;

    ob_start();

    ?>
        
    value<input type="hidden" name="kit" value="kit">
       

    <?php

    $content = ob_get_contents();
    ob_end_flush();

    return $content;
}


add_action('wp_ajax_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');
add_action('wp_ajax_nopriv_woocommerce_ajax_add_to_cart', 'woocommerce_ajax_add_to_cart');

function woocommerce_ajax_add_to_cart(){

    $product_id = apply_filters('woocommerce_add_to_cart_product_id', absint($_POST['product_id']));

}

/*
Function that recieves the params of the product that is being addeded to the cart.
The info recieved will be used to put info in the order so the products can be shown
and grouped as products in a kit in the front end( cart, mini cart and check out) mail and orders 
*/

function build_kit(){

    // Check for nonce security
        $nonce = sanitize_text_field( $_POST['_wpnonce'] );

        if ( ! wp_verify_nonce( $nonce, 'frontend-ajax-nonce' ) ) {
            die ( 'Busted!');
        }

        $product_id = sanitize_text_field($_POST['productId']);

        $variation_id = sanitize_text_field($_POST['variationId']);

        $message = "El id que se mando fue: ".$product_id." con la variación ".$variation_id;

        $response = array(
            'message' => $message,
            //'id' => $product_id
        );

        echo json_encode($response);

        /*
        $cart = WC()->cart->cart_contents;

         foreach( $cart as $cart_item_id=>$cart_item ) {

            $cart_item['new_meta_data'] = 'Your stuff goes here';
            WC()->cart->cart_contents[$cart_item_id] = $cart_item;

         }

         WC()->cart->set_session();
         */
        
        /**
         * Add custom cart item data
         */

        
        
        
        

        die();

}



add_action('wp_ajax_notify_kit', 'build_kit');
add_action('wp_ajax_nopriv_notify_kit', 'build_kit');



add_filter('woocommerce_add_cart_item_data','wdm_add_item_data',10,3);

/**
 * Add custom data to Cart
 * @param  [type] $cart_item_data [description]
 * @param  [type] $product_id     [description]
 * @param  [type] $variation_id   [description]
 * @return [type]                 [description]
 */
function wdm_add_item_data($cart_item_data, $product_id, $variation_id)
{
    if(isset($_REQUEST['kit']))
    {
        $cart_item_data['kit'] = sanitize_text_field($_REQUEST['kit']);
    }

    return $cart_item_data;
}

/*

function plugin_republic_add_cart_item_data( $cart_item_data, $product_id, $variation_id ) {
         if( isset( $_POST['pr-field'] ) ) {
            //$cart_item_data['kit'] = sanitize_text_field( $_POST['pr-field'] );
            $cart_item_data['kit'] = "kit";
         }
         return $cart_item_data;
        }
        add_filter( 'woocommerce_add_cart_item_data', 'plugin_republic_add_cart_item_data', 10, 3 );

*/

/**
 * Display custom item data in the cart
 */
function plugin_republic_get_item_data( $item_data, $cart_item_data ) {
 if( isset( $cart_item_data['kit'] ) ) {
 $item_data[] = array(
    'key' => __( 'En tu kit', 'plugin-republic' ),
    'value' => wc_clean( $cart_item_data['kit'] )
 );
 }
 return $item_data;
}
add_filter( 'woocommerce_get_item_data', 'plugin_republic_get_item_data', 10, 2 );        

/**
 * Override loop template and show quantities next to add to cart buttons
 */
//add_filter( 'woocommerce_loop_add_to_cart_link', 'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );
function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {
    if ( $product && $product->is_type( 'variable' ) && $product->is_purchasable() && $product->is_in_stock() && ! $product->is_sold_individually() ) {
        $html = '<form action="' . esc_url( $product->add_to_cart_url() ) . '" class="cart" method="post" enctype="multipart/form-data">';
        $html .= woocommerce_quantity_input( array(), $product, false );
        $html .= '<button type="submit" class="button alt">' . esc_html( $product->add_to_cart_text() ) . '</button>';
        $html .= '</form>';
    }
    return $html;
}


if( function_exists('acf_add_options_page') ) {
  
  acf_add_options_page(array(
    'page_title'  => 'Información general',
    'menu_title'  => 'Info General',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Página Inicio',
    'menu_title'  => 'Pag. Inicio',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Pie de página',
    'menu_title'  => 'Pie de página',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Información de contacto',
    'menu_title'  => 'Info de contacto',
    'parent_slug' => 'theme-general-settings',
  ));

}

add_filter( 'woocommerce_add_to_cart_fragments', function($fragments) {

    ob_start();
    ?>

    <div class="cart-contents">
        <?php echo WC()->cart->get_cart_contents_count(); ?>
    </div>

    <?php $fragments['div.cart-contents'] = ob_get_clean();

    return $fragments;

} );

add_filter('gettext', 'translate_text');
function translate_text($translated) {
 $translated = str_ireplace('Detalles de facturación', 'Tus datos', $translated);
 return $translated;
}

add_filter('gettext', 'translate_text2');
function translate_text2($translated) {
 $translated = str_ireplace('Includes', 'Inlcuye', $translated);
 return $translated;
}

add_filter('woocommerce_cart_item_permalink','__return_false');


function change_product_name() {

    global $product;

    $product = wc_get_product( get_the_id() );

    if ( is_product() ){

        if ($product->get_type() == 'bundle') {

            add_filter('woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text',1);
            function woo_custom_cart_button_text() {
            return __('Comprar Kit', 'woocommerce');
            }

        }

    }


}

add_action( 'wp_head', 'change_product_name' );


//add_action('woocommerce_after_add_to_cart_form', 'extra_product_info');
add_action('woocommerce_single_product_summary', 'extra_product_info', 70);

function extra_product_info(){

    global $product;

    $product = wc_get_product( get_the_id() );

    if ($product->get_type() !== 'bundle') {

        echo '<div class="faq">

            <div class="item">

                <div class="visible flex-normal">
                    
                    <h4>Modo de uso</h4>

                    <div class="arrows">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="info">
                    
                    '.get_field("modo_de_uso").'

                </div>

            </div>

            <div class="item">

                <div class="visible flex-normal">
                    
                    <h4>Ingredientes</h4>

                    <div class="arrows">
                        <div></div>
                        <div></div>
                    </div>
                </div>

                <div class="info">
                    
                   <p>'.get_field("ingredientes").'</p>

                </div>

            </div>

        </div>';

    }    

}

/* Change Text Site Wide */

function wpfi_change_text( $translated_text ) {
    if ( $translated_text == 'each' ) {
        $translated_text = 'cada uno';
    }
    return $translated_text;
}
add_filter( 'gettext', 'wpfi_change_text', 20 );

?>