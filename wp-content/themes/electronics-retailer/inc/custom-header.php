<?php
/**
 * @package Electronics Retailer 
 * Setup the WordPress core custom header feature.
 *
 * @uses electronics_retailer_header_style()
*/
function electronics_retailer_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'electronics_retailer_custom_header_args', array(
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 70,
		'flex-width'    		 => true,
		'flex-height'    		 => true,
		'wp-head-callback'       => 'electronics_retailer_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'electronics_retailer_custom_header_setup' );

if ( ! function_exists( 'electronics_retailer_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see electronics_retailer_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'electronics_retailer_header_style' );

function electronics_retailer_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        .woo-topbar{
			background-image:url('".esc_url(get_header_image())."') !important;
			background-position: center top;
		    background-size: cover;
		}";
	   	wp_add_inline_style( 'electronics-retailer-basic-style', $custom_css );
	endif;
}
endif;