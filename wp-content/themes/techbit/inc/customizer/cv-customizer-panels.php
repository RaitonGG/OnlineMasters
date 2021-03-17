<?php
/**
 * techbit manage the Customizer panels.
 *
 * @subpackage techbit
 * @since 1.0 
 */

/**
 * General Settings Panel
 */
Kirki::add_panel( 'techbit_general_panel', array(
	'priority' => 10,
	'title'    => __( 'General Settings', 'techbit' ),
) );

/**
 * Header Settings Panel
 */
Kirki::add_panel( 'techbit_header_panel', array(
	'priority' => 15,
	'title'    => __( 'Header Options', 'techbit' ),
) );

/**
 * Frontpage Settings Panel
 */
Kirki::add_panel( 'techbit_frontpage_panel', array(
	'priority' => 20,
	'title'    => __( 'Techbit Front Page', 'techbit' ),
) );

/**
 * Design Settings Panel
 */
Kirki::add_panel( 'techbit_design_panel', array(
	'priority' => 25,
	'title'    => esc_html__( 'Design Settings', 'techbit' ),
) );