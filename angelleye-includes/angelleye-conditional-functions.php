<?php

defined('ABSPATH') || exit;

if (!function_exists('is_angelleye_ec_review_page')) {

    /**
     * is_angelleye_ec_review_page - Returns true when viewing the Express Checkout order review page.
     *
     * @return bool
     */
    function is_angelleye_ec_review_page() {
        if (!class_exists('WooCommerce') || WC()->session == null) {
            return false;
        }
        $paypal_express_checkout = WC()->session->get('paypal_express_checkout');
        if (isset($paypal_express_checkout['token']) && !empty($paypal_express_checkout['token']) && isset($paypal_express_checkout['payer_id']) && !empty($paypal_express_checkout['payer_id'])) {
            return true;
        } else {
            return false;
        }
    }

}

