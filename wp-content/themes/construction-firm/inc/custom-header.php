<?php
/**
 * Custom header implementation
 */

function construction_firm_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'construction_firm_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1200,
		'height'                 => 150,
		'wp-head-callback'       => 'construction_firm_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'construction_firm_custom_header_setup' );

if ( ! function_exists( 'construction_firm_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see construction_firm_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'construction_firm_header_style' );
function construction_firm_header_style() {
	if ( get_header_image() ) :
	$custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'construction-firm-style', $custom_css );
	endif;
}
endif;