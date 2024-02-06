<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );


function chic_gfonts_scripts() {
    wp_dequeue_style( 'ashe-playfair-font', ashe_playfair_font_url(), array(), '1.0.0' );
    wp_dequeue_style( 'ashe-opensans-font', ashe_opensans_font_url(), array(), '1.0.0' );

    if ( ashe_options( 'typography_logo_family' ) == 'Kalam' || ashe_options( 'typography_nav_family' ) == 'Kalam' ) {
    	wp_dequeue_style( 'ashe-kalam-font', ashe_kalam_font_url(), array(), '1.0.0' );
    }

    if ( ashe_options( 'typography_logo_family' ) == 'Rokkitt' || ashe_options( 'typography_nav_family' ) == 'Rokkitt' ) {
    	wp_dequeue_style( 'ashe-rokkitt-font', ashe_rokkitt_font_url(), array(), '1.0.0' );
    }
}
add_action( 'wp_enqueue_scripts', 'chic_gfonts_scripts', 100 );

remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10 );
add_action('woocommerce_shop_loop_item_title', 'abChangeProductsTitle', 10 );
function abChangeProductsTitle() {
echo '<h3 class="woocommerce-loop-product__title">' . get_the_title() . '</h3>';
}

add_filter( 'woocommerce_product_add_to_cart_description', 'woocommerce_custom_add_to_cart_description' );  
function woocommerce_custom_add_to_cart_description() {
    return __( 'Ajouter au panier', 'woocommerce' );
}