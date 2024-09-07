<?php
/*
Plugin Name: Custom Redirect to Checkout with Single Product
Description: Clears the cart, adds a single product, and redirects to checkout.
Version: 1.0
Author: Divyansh Srivastava
*/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('template_redirect', 'clear_cart_and_redirect_to_checkout');

function clear_cart_and_redirect_to_checkout() {

    if (isset($_GET['add-to-cart'])) {
        
        if (function_exists('WC')) {
            
            WC()->cart->empty_cart();
            
            $product_id = intval($_GET['add-to-cart']);
            
            WC()->cart->add_to_cart($product_id);
            
            wp_safe_redirect(wc_get_checkout_url());
            exit;
        }
    }
}
