<?php
/**
 * techbit manage the Customizer sections.
 *
 * @subpackage techbit
 * @since 1.0 
 */

/**
 * Site Settings
 */
Kirki::add_section( 'techbit_section_site', array(
	'title'    => __( 'Site Settings', 'techbit' ),
	'panel'    => 'techbit_general_panel',
	'priority' => 40,
) );

/**
 * Hero Section
 */
Kirki::add_section( 'techbit_section_banner_content', array(
	'title'    => __( 'Home Hero Settings', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 5,
) );

 

/**
 * About Us Section
 */
Kirki::add_section( 'techbit_section_about_us', array(
	'title'    => __( 'Home About Setting', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 13,
) );

/**
 * Services Section
 */
Kirki::add_section( 'techbit_section_services', array(
	'title'    => __( 'Home Service Settings', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 12,
) );

/**
 * Features Section
 */
Kirki::add_section( 'techbit_section_features', array(
	'title'    => __( 'Home Features Settings', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 11,
) );

/**
 * Portfolio Section
 */
Kirki::add_section( 'techbit_section_portfolio', array(
	'title'    => __( 'Home Portfolio Settings', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 15,
) );


/**
 * Team Section
 */
Kirki::add_section( 'techbit_section_team', array(
	'title'    => __( 'Home Team Section', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 35,
) );

 
/**
 * Blog Section
 */
Kirki::add_section( 'techbit_section_blog', array(
	'title'    => __( 'Home Blog Setting', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 45,
) );
 

/**
 * Callout 2 Section
 */
Kirki::add_section( 'techbit_section_callout_content', array(
	'title'    => __( 'Home Callout Setting', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 70,
) );

/**
 * Testimonial Section
 */
Kirki::add_section( 'techbit_section_testimonial', array(
	'title'    => __( 'Home Testimonial Setting', 'techbit' ),
	'panel'    => 'techbit_frontpage_panel',
	'priority' => 18,
) );
/**
 * Footer Settings
 */
Kirki::add_section( 'techbit_footer_setting', array(
	'title'    => __( 'Footer Settings', 'techbit' ),
	'priority' => 40,
) );