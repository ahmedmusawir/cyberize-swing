<?php
/**
 *
 * WOOCOM FUCTIONS FOR CYFI
 *
 */

add_action( 'woocommerce_single_product_summary', 'removing_addtocart_buttons', 1 );


function removing_addtocart_buttons() {


    ## Simple products
    remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );

    // Outputing a custom button in Single product pages (you need to set the button link)
    function single_product_custom_button( ) {

        global $product;

        // WooCommerce compatibility
        if ( method_exists( $product, 'get_id' ) ) {
            $product_id = $product->get_id();
        } else {
            $product_id = $product->id;
        }

        if ( $product_id ) {
        // if ( has_term( 'categ1', 'product_cat', $product_id ) ) {
            // Set HERE your button link
            $link = '/contact-us/';
            echo '<a href="'.$link.'" class="button alt add_to_cart_button">'.__("Find Out More", "woocommerce").'</a>';
        }
    }    

}

#### Adding a custom replacement button ####

## Simple products
add_action( 'woocommerce_simple_add_to_cart', 'single_product_custom_button', 30 );

/**
 *
 * REPLACING ADD TO CART WITH VIEW PRODUCT BUTTON ON PRODUCT ARCHIVE
 *
 */
// Replace add to cart button by a linked button to the product in Shop and archives pages
add_filter( 'woocommerce_loop_add_to_cart_link', 'replace_loop_add_to_cart_button', 10, 2 );
function replace_loop_add_to_cart_button( $button, $product  ) {
    // Not needed for variable products
    if( $product->is_type( 'variable' ) ) return $button;

    // Button text here
    $button_text = __( "View product", "woocommerce" );

    return '<a class="button" href="' . $product->get_permalink() . '">' . $button_text . '</a>';
}

/**
 *
 * Removing All Labels from Checkout Page
 *
 */

// WooCommerce Checkout Fields Hook
// Our hooked in function - $fields is passed via the filter!
// Action: remove label from $fields

function custom_wc_checkout_fields_no_label($fields) {
    // loop by category
    foreach ($fields as $category => $value) {
        // loop by fields
        foreach ($fields[$category] as $field => $property) {
            // remove label property
            unset($fields[$category][$field]['label']);
        }
    }
     return $fields;
}

add_filter('woocommerce_checkout_fields','custom_wc_checkout_fields_no_label');

/**
 *
 * Adding Placeholder Text to All
 *
 */

function wpt_custom_billing_fields ( $fields = array() ) {

	// echo '<pre>';
	// var_export( $fields );
	// echo '</pre>';
    
     $fields['billing_first_name']['placeholder'] = 'First Name';
     // $fields['billing_first_name']['label'] = 'My new label';	
     $fields['billing_last_name']['placeholder'] = 'Last Name';
     $fields['billing_company']['placeholder'] = 'Company Name';
     unset($fields['billing_company']);
     $fields['billing_address_1']['placeholder'] = 'Address 1'; // DOESN'T WORK
     $fields['billing_address_2']['placeholder'] = 'Address 2'; // DOESN'T WORK
     unset($fields['billing_address_2']);
     $fields['billing_city']['placeholder'] = 'City';
     $fields['billing_postcode']['placeholder'] = 'Zip Code';
     $fields['billing_country']['placeholder'] = 'Country';
     // unset($fields['billing_country']);
     $fields['billing_state']['placeholder'] = 'State';
     $fields['billing_email']['placeholder'] = 'Email';
     $fields['billing_phone']['placeholder'] = 'Phone (Optional)';
     $fields['billing_phone']['required'] = false;
               
	return $fields;
}

add_filter('woocommerce_billing_fields','wpt_custom_billing_fields');

/**
 *
 * Redirect to Custom Thank You Page
 *
 */

function woo_custom_redirect_after_purchase() {
    global $wp;
    if ( is_checkout() && !empty( $wp->query_vars['order-received'] ) ) {
        wp_redirect( '/thank-you/' );
        exit;
    }
}

add_action( 'template_redirect', 'woo_custom_redirect_after_purchase' );



/**
 *
 * ADD PRODUCT TO CART AUTOMAGICALLY
 *
 */
/**
 * Add items to cart on loading checkout page.
 */
// function auto_add_to_cart() {
//     if ( ! is_page( 'checkout' ) ) {
//         return;
//     }

//     // if ( ! WC()->cart->is_empty() ) {
//     //     return;
//     // }

//     WC()->cart->add_to_cart( 5680, 1 );
//     // WC()->cart->add_to_cart( 22, 2 );
// }

// add_action( 'wp', 'auto_add_to_cart' );


/**
 *
 * REMOVE COUPON FROM CHECKOUT PAGE
 *
 */
remove_action( 'woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 ); 


/**
 *
 * CHANGE DEFAULT COUNTRY AND STATE CODE
 *
 */

/**
 * Change the default state and country on the checkout page
 */
add_filter( 'default_checkout_billing_country', 'change_default_checkout_country' );
// add_filter( 'default_checkout_billing_state', 'change_default_checkout_state' );

function change_default_checkout_country() {
  return 'US'; // country code
}







