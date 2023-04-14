<?php
/**
 *
 *
 * @package WordPress
 * @subpackage HappyHunny
 * @since 1.0
 * @version 1.0
 */


function yourtheme_enqueue_styles() {
    wp_enqueue_style( 'yourtheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_styles' );




function HH_register_nav_menus() {
    register_nav_menus( array(
        'primary-menu' => __( 'Primary Menu', 'HappyHunny' ),
        'footer-menu' => __( 'Footer Menu', 'HappyHunny' ),
         'social-menu' => __( 'Social Menu', 'HappyHunny' ),
        'wc-menu' => __( 'WC Menu', 'HappyHunny' ),
    ) );
}

add_action( 'after_setup_theme', 'HH_register_nav_menus' );


function HH_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'HH_setup' );


/**
 * Declare WooCommerce support.
 */
function your_theme_name_add_woocommerce_support() {
  add_theme_support('woocommerce');

  // Declare support for WooCommerce pages.
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
}

add_action('after_setup_theme', 'your_theme_name_add_woocommerce_support');

/**
 * Declare support for WooCommerce pages.
 */
function your_theme_name_add_woocommerce_pages_support() {
  add_theme_support('woocommerce', array(
    'thumbnail_image_width' => 255,
    'single_image_width'    => 255,
    'product_grid'          => array(
      'default_rows'    => 3,
      'min_rows'        => 1,
      'max_rows'        => 6,
      'default_columns' => 4,
      'min_columns'     => 1,
      'max_columns'     => 4,
    ),
  ));

  // Declare support for WooCommerce pages.
  add_theme_support('woocommerce', array(
    'product_grid'          => array(
      'default_rows'    => 3,
      'min_rows'        => 1,
      'max_rows'        => 6,
      'default_columns' => 4,
      'min_columns'     => 1,
      'max_columns'     => 4,
    ),
    'gallery_thumbnail_image_width' => 255,
    'single_image_width'            => 600,
    'product_with_tabs'             => true,
    'related_products'              => array(
      'limit' => 4,
      'columns' => 4,
      'orderby' => 'rand',
    ),
    'up_sells'                       => array(
      'limit' => 3,
      'columns' => 3,
      'orderby' => 'rand',
    ),
    'cross_sells'                    => array(
      'limit' => 3,
      'columns' => 3,
      'orderby' => 'rand',
    ),
    'checkout'                       => array(
      'terms' => array(
        'terms_page' => null,
        'enable_privacy_policy' => true,
        'privacy_policy_page' => null,
      ),
    ),
    'myaccount'                      => array(
      'dashboard_endpoint'       => 'dashboard',
      'dashboard_title'          => __('Dashboard', 'woocommerce'),
      'orders_endpoint'          => 'orders',
      'orders_title'             => __('Orders', 'woocommerce'),
      'downloads_endpoint'       => 'downloads',
      'downloads_title'          => __('Downloads', 'woocommerce'),
      'edit_address_endpoint'    => 'edit-address',
      'edit_address_title'       => __('Addresses', 'woocommerce'),
      'payment_methods_endpoint' => 'payment-methods',
      'payment_methods_title'    => __('Payment Methods', 'woocommerce'),
      'customer_logout_endpoint' => 'customer-logout',
      'customer_logout_title'    => __('Logout', 'woocommerce'),
      'enable_register'          => true,
      'register_endpoint'        => 'register',
      'register_title'           => __('Register', 'woocommerce'),
    ),
  ));
}

add_action('after_setup_theme', 'your_theme_name_add_woocommerce_pages_support');


// Add custom 'Age Group' field to WC product general options 
add_action( 'woocommerce_product_options_general_product_data', 'add_age_group_field_to_product_general_options' );
function add_age_group_field_to_product_general_options() {
    woocommerce_wp_text_input(
        array(
            'id' => 'age_group',
            'label' => __( 'Age group', 'woocommerce' ),
            'description' => __( 'Enter the age group for this product', 'woocommerce' ),
            'desc_tip' => true,
            'placeholder' => __( 'e.g. Adults', 'woocommerce' ),
        )
    );
}

// Save custom field value
add_action( 'woocommerce_process_product_meta', 'save_age_group_field_value', 10, 2 );
function save_age_group_field_value( $post_id, $post ) {
    if ( isset( $_POST['age_group'] ) ) {
        $age_group = sanitize_text_field( $_POST['age_group'] );
        update_post_meta( $post_id, 'age_group', $age_group );
    }
}

// Retrieve custom field value and display it on the product page
add_action( 'woocommerce_single_product_summary', 'display_age_group_field_value', 25 );
function display_age_group_field_value() {
    global $product;

    $age_group = get_post_meta( $product->get_id(), 'age_group', true );

    if ( ! empty( $age_group ) ) {
        echo '<p><strong>Age group:</strong> ' . esc_html( $age_group ) . '</p>';
    }
}




