<?php
/**
 * Recommended plugins
 *
 * @package techbit
 */

if ( ! function_exists( 'techbit_recommended_plugins' ) ) :

    /**
     * Recommend plugins.
     *
     * @since 1.0.0
     */
    function techbit_recommended_plugins() {

        $plugins = array(
            array(
                'name'     => esc_html__( 'One Click Demo Import', 'techbit' ),
                'slug'     => 'one-click-demo-import',
                'required' => false,
            ),
			array(
                'name'     => esc_html__( 'Image Slider', 'techbit' ),
                'slug'     => 'image-slider-slideshow',
                'required' => false,
            )
        );
		 
		 
        tgmpa( $plugins );

    }

endif;

add_action( 'tgmpa_register', 'techbit_recommended_plugins' );