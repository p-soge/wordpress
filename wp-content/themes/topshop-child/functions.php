<?php

// echo get_template_directory_uri();
// echo get_stylesheet_directory_uri();

//add_filter( 'woocommerce_enqueue_styles', '__return_false' );

// Queue parent style followed by child/customized style

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', PHP_INT_MAX);
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'parent-style' ) );
}


/*Code to change add to cart button  */


add_filter( 'add_to_cart_text', 'woo_custom_cart_button_text' );
//For Single Product Page.
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );
//For Archives Product Page.
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_custom_cart_button_text' );
function woo_custom_cart_button_text()
{
    return __( 'Buy Now', 'woocommerce' );
}




register_sidebar( array(
        'name'          => __( 'Product slider Sidebar', 'topshop' ),
        'id'            => 'slider-sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>'
    ) );
    


//Additional tabs 

add_filter( 'woocommerce_product_tabs', 'woo_new_product_tab', 30 );
function woo_new_product_tab( $tabs ) {
    
    // Adds the new tab
    
    $tabs['test_tab'] = array(
        'title'     => __( 'Additional Information ', 'woocommerce' ),
        'priority'  => 50,
        'callback'  => 'woo_new_product_tab_content'
    );

    return $tabs;

}
function woo_new_product_tab_content() {

    // The new tab content

    echo '<h2>Additional Information</h2>';
    echo '<p>Here is your new product tab.</p>';
    
}

// Hook in
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     //$fields['order']['order_comments']['placeholder'] = 'My new placeholder';
     $fields['billing']['billing_first_name']['label'] = 'Name First';
     return $fields;
}



//remove paypal icon 



 ?>