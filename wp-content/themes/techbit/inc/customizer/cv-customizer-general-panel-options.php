<?php
/**
 * techbit manage the Customizer options of general panel.
 *
 * @subpackage techbit
 * @since 1.0 
 */
Kirki::add_field(
	'techbit_config', array(
		'type'        => 'checkbox',
		'settings'    => 'techbit_home_posts',
		'label'       => esc_attr__( 'Checked to hide latest posts in homepage.', 'techbit' ),
		'section'     => 'static_front_page',
		'default'     => true,
	)
);

// Color Picker field for Primary Color
Kirki::add_field( 
	'techbit_config', array(
		'type'        => 'color',
		'settings'    => 'techbit_theme_color',
		'label'       => esc_html__( 'Primary Color', 'techbit' ),
		'section'     => 'colors',
		'default'     => '#00c1e4',
	)
);