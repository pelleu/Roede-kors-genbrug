<?php

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'oceanwp-woo-mini-cart','font-awesome','simple-line-icons','oceanwp-style','oceanwp-hamburgers','oceanwp-collapse','fontawesome','oceanwp-woocommerce','oceanwp-woo-star-font','oceanwp-woo-quick-view' ) );
        
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );


add_action( 'woocommerce_after_shop_loop_item', 'add_loop_custom_button', 1000 );
function add_loop_custom_button() {
    global $product;
    
// Link til produkt
    $product_link = $product->get_permalink(); 

// Definer knap
    $custom_link = home_url( "/reservation/" ) ;


    echo '<div class="product_meta wcdp-preview-btn-div">
    <a class="button thickbox" href="' . esc_url( $custom_link ) .'">' . __( "Reserver" )  . '</a>
    </div>';
}

// END ENQUEUE PARENT ACTION
