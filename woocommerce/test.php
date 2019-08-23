<?
// Replacing add-to-cart button in shop pages and archives pages
add_filter( 'woocommerce_loop_add_to_cart_link',
'quantity_inputs_for_woocommerce_loop_add_to_cart_link', 10, 2 );

function quantity_inputs_for_woocommerce_loop_add_to_cart_link( $html, $product ) {

    // WooCommerce compatibility
    if ( method_exists( $product, 'get_id' ) ) {
        $product_id = $product->get_id();
    } else {
        $product_id = $product->id;
    }

    if ( has_term( 'categ1', 'product_cat', $product_id ) && $product->is_type( 'simple') ) {
        // Set HERE your button link
        $link = get_permalink($product_id);
        $html = '<a href="'.$link.'" class="button alt add_to_cart_button">'.__("Read More", "woocommerce").'</a>';
    }
    return $html;
}

// Outputing a custom button in Single product pages (you need to set the button link)
function single_product_custom_button( ) {

    global $product;

    // WooCommerce compatibility
    if ( method_exists( $product, 'get_id' ) ) {
        $product_id = $product->get_id();
    } else {
        $product_id = $product->id;
    }

    if ( has_term( 'categ1', 'product_cat', $product_id ) ) {
        // Set HERE your button link
        $link = '#';
        echo '<a href="'.$link.'" class="button alt add_to_cart_button">'.__("Read More", "woocommerce").'</a>';
    }
}

// Replacing add-to-cart button in Single product pages
add_action( 'woocommerce_single_product_summary', 'removing_addtocart_buttons', 1 );
function removing_addtocart_buttons()
{
    global $product;

    // WooCommerce compatibility
    if ( method_exists( $product, 'get_id' ) ) {
        $product_id = $product->get_id();
    } else {
        $product_id = $product->id;
    }

    if ( has_term( 'categ1', 'product_cat', $product_id ) )
    {
        #### Removing the add-to-cart button ####

        ## Simple products
        remove_action( 'woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30 );

        ## Other products types
        // remove_action( 'woocommerce_grouped_add_to_cart', 'woocommerce_grouped_add_to_cart', 30 );
        // remove_action( 'woocommerce_variable_add_to_cart', 'woocommerce_variable_add_to_cart', 30 );
        // remove_action( 'woocommerce_external_add_to_cart', 'woocommerce_external_add_to_cart', 30 );
        // remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
        // remove_action( 'woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20 );


        #### Adding a custom replacement button ####

        ## Simple products
        add_action( 'woocommerce_simple_add_to_cart', 'single_product_custom_button', 30 );

        ## Other products types
        // add_action( 'woocommerce_grouped_add_to_cart', 'single_product_custom_button', 30 );
        // add_action( 'woocommerce_variable_add_to_cart', 'single_product_custom_button', 30 );
        // add_action( 'woocommerce_external_add_to_cart', 'single_product_custom_button', 30 );
        // add_action( 'woocommerce_single_product_summary', 'single_product_custom_button', 30 );
        // add_action( 'woocommerce_single_variation', 'single_product_custom_button', 20 );
    }
}