<?php
//not required customer email fields in checkout page
add_filter( 'woocommerce_billing_fields', 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    $fields['billing_email']['required'] = false;
    return $fields;
}
