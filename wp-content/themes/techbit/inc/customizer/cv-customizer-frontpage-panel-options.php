<?php
/**
 * techbit manage the Customizer options of frontpage panel.
 *
 * @subpackage techbit
 * @since 1.0 
 */

// Toggle field for Enable/Disable banner content
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_banner_section',
		'label'    => __( 'Enable Home Hero Settings', 'techbit' ),
		'section'  => 'techbit_section_banner_content',
		'default'  => '1',
		'priority' => 5,
	)
);
 

// Text field for banner title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_banner_title',
		'label'    => __( 'Banner Title', 'techbit' ),
		'section'  => 'techbit_section_banner_content',
        'default'  => '',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Textarea field for banner content
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'textarea',
		'settings' => 'techbit_banner_content',
		'label'    => __( 'Banner Text', 'techbit' ),
		'section'  => 'techbit_section_banner_content',
        'default'  => '',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for banner content button label
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_banner_button_label1',
		'label'    => __( 'Banner Button Text', 'techbit' ),
		'section'  => 'techbit_section_banner_content',
		'default'  => '',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Link field for banner content button link
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_banner_button_link1',
		'label'    => __( 'Banner Button URL', 'techbit' ),
		'section'  => 'techbit_section_banner_content',
		'default'  => '',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_banner_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);
 
// Toggle field for Enable/Disable Service Section
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_service_section',
		'label'    => __( 'Enable Home Service Area', 'techbit' ),
		'section'  => 'techbit_section_services',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for Service section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_service_title',
		'label'    => __( 'Service Title', 'techbit' ),
		'section'  => 'techbit_section_services',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_service_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Service section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_service_subtitle',
		'label'    => __( 'Service Sub Title', 'techbit' ),
		'section'  => 'techbit_section_services',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_service_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($i=1;$i<=6;$i++){
	Kirki::add_field(
	'techbit_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'techbit_service_page '.$i,
		'label'       => 'Select Service Page '.$i,
		'section'     => 'techbit_section_services',
		'default'     => 0,
		'priority'    => '7',
		
	)
);

	Kirki::add_field(
	'techbit_config', array(
		'type'        => 'text',
		'settings'    => 'techbit_service_icon '.$i,
		'label'       => 'Select Service Icon '.$i,
		'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Click Here</a> for select icon','techbit'),
		'section'     => 'techbit_section_services',
		'default'     => 'fa fa-user',
		'priority'    => '7',
		
	)
);
}

// Toggle field for Enable/Disable Features Section
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_features_section',
		'label'    => __( 'Enable Home Features Area', 'techbit' ),
		'section'  => 'techbit_section_features',
		'default'  => '0',
		'priority' => 4,
	)
);

for($i=1;$i<=4;$i++){
	Kirki::add_field(
	'techbit_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'techbit_features_page '.$i,
		'label'       => 'Select Features Page '.$i,
		'section'     => 'techbit_section_features',
		'default'     => 0,
		'priority'    => '7',
		
	)
);

	Kirki::add_field(
	'techbit_config', array(
		'type'        => 'text',
		'settings'    => 'techbit_features_icon '.$i,
		'label'       => 'Select Features Icon '.$i,
		'description' =>  __('Select font awesome icons <a target="_blank" href="https://fontawesome.com/v4.7.0/icons/">Click Here</a> for select icon','techbit'),
		'section'     => 'techbit_section_features',
		'default'     => 'fa fa-user',
		'priority'    => '7',
		
	)
);
}

// Toggle field for Enable/Disable Portfolio Section
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_portfolio_section',
		'label'    => __( 'Enable Home Portfolio Area', 'techbit' ),
		'section'  => 'techbit_section_portfolio',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for Service section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_portfolio_title',
		'label'    => __( 'Portfolio Title', 'techbit' ),
		'section'  => 'techbit_section_portfolio',
		'default'  =>'',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_portfolio_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Service section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_portfolio_subtitle',
		'label'    => __( 'Portfolio Sub Title', 'techbit' ),
		'section'  => 'techbit_section_portfolio',
		'default'  => '',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_portfolio_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($k=1;$k<=6;$k++){
	Kirki::add_field(
	'techbit_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'techbit_portfolio_page'.$k,
		'label'       =>  'Select Portfolio Page'.$k,
		'section'     => 'techbit_section_portfolio',
		'default'     => 0,
		'priority'    => 5,
		
	)
);
}

// Toggle field for Enable/Disable Team Section
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_team_section',
		'label'    => __( 'Enable Home Team Area', 'techbit' ),
		'section'  => 'techbit_section_team',
		'default'  => '0',
		'priority' => 6,
	)
);


// Text field for Team section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_team_title',
		'label'    => __( 'Team Title', 'techbit' ),
		'section'  => 'techbit_section_team',
		'default'  => '',	
		'priority' => 6,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_team_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Team section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_team_subtitle',
		'label'    => __( 'Team Sub Title', 'techbit' ),
		'section'  => 'techbit_section_team',
		'default'  => '',	
		'priority' => 6,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_team_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

for($k=1;$k<=4;$k++){
	Kirki::add_field(
	'techbit_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'techbit_team_page'.$k,
		'label'       => 'Select Team Page'.$k,
		'section'     => 'techbit_section_team',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}

Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_blog_section',
		'label'    => __( 'Enable Home Blog Area', 'techbit' ),
		'section'  => 'techbit_section_blog',
		'default'  => '1',
		'priority' => 5,
	)
);


Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_blog_section',
		'label'    => __( 'Enable Home Blog Area', 'techbit' ),
		'section'  => 'techbit_section_blog',
		'default'  => '1',
		'priority' => 5,
	)
);

// Text field for blog section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_blog_title',
		'label'    => __( 'Top Title', 'techbit' ),
		'section'  => 'techbit_section_blog',
		'default'  => '',	
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_blog_subtitle',
		'label'    => __( 'Sub Title', 'techbit' ),
		'section'  => 'techbit_section_blog',
		'default'  => '',	
		'priority' => 10,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Select field for blog section categories.
Kirki::add_field(
	'techbit_config', array(
		'type'        => 'select',
		'settings'    => 'techbit_blog_cat',
		'label'       => esc_attr__( 'Select Category', 'techbit' ),
		'section'     => 'techbit_section_blog',
		'default'     => 'Uncategorized',
		'priority'    => 15,
		'choices'     => techbit_select_categories_list(),
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for Blog button label
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_rm_button_label',
		'label'    => __( 'Read More Text', 'techbit' ),
		'default'  => '',
		'section'  => 'techbit_section_blog',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_blog_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable callout content second
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_callout_section',
		'label'    => __( 'Enable Home Page Callout', 'techbit' ),
		'section'  => 'techbit_section_callout_content',
		'default'  => '0',
		'priority' => 5,
	)
);
 
// Text field for callout title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_callout_title',
		'label'    => __( 'Callout Title', 'techbit' ),
		'section'  => 'techbit_section_callout_content',
        'default'  => '',
		'priority' => 15,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Textarea field for callout content
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'textarea',
		'settings' => 'techbit_callout_content',
		'label'    => __( 'Callout Text', 'techbit' ),
		'section'  => 'techbit_section_callout_content',
        'default'  => '',
		'priority' => 20,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Text field for callout content button label
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_callout_button_label1',
		'label'    => __( 'Callout Button Text', 'techbit' ),
		'default'  => '',
		'section'  => 'techbit_section_callout_content',
		'priority' => 25,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Link field for callout content button link
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_callout_button_link1',
		'label'    => __( 'Callout Button URL', 'techbit' ),
		'default'  => '',
		'section'  => 'techbit_section_callout_content',
		'priority' => 30,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_callout_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);

// Toggle field for Enable/Disable Tesimonial Section
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'toggle',
		'settings' => 'techbit_enable_testimonial_section',
		'label'    => __( 'Enable Home Tesimonial', 'techbit' ),
		'section'  => 'techbit_section_testimonial',
		'default'  => '0',
		'priority' => 5,
	)
);

// Text field for Tesimonial section title
Kirki::add_field(
	'techbit_config', array(
		'type'     => 'text',
		'settings' => 'techbit_testimonial_title',
		'label'    => __( 'Tesimonial Title', 'techbit' ),
		'section'  => 'techbit_section_testimonial',
		'default'  =>'',	
		'priority' => 5,
		'active_callback' => array(
			array(
				'setting'  => 'techbit_enable_testimonial_section',
				'value'    => true,
				'operator' => 'in',
			),
		)
	)
);
 

for($k=1;$k<=6;$k++){
	Kirki::add_field(
	'techbit_config', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'techbit_testimonial_page'.$k,
		'label'       =>  'Select Tesimonial Page'.$k,
		'section'     => 'techbit_section_testimonial',
		'default'     => 0,
		'priority'    => 11,
		
	)
);
}