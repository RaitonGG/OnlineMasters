<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class techbit_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once( trailingslashit( get_template_directory() ) . '/inc/custom-addition/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'techbit_Customize_Section_Pro' );

		// doc sections.
		$manager->add_section(
			new techbit_Customize_Section_Pro(
				$manager,
				'techbit',
				array(
					'title'    => esc_html__( 'Theme Doc', 'techbit' ),
					'pro_text' => esc_html__( 'Click Here', 'techbit' ),
					'pro_url'  => 'http://testerwp.com/docs/techbit-theme-doc/',
					'priority'  => 1
				)
			)
		);
		// upgrade sections.
		$manager->add_section(
			new techbit_Customize_Section_Pro(
				$manager,
				'upgrade-pro',
				array(
					'title'    => esc_html__( 'Theme Demo', 'techbit'),
					'pro_text' => esc_html__( 'Click Here', 'techbit' ),
					'pro_url'  => 'https://testerwp.com/template/techbit/',
					'priority'  => 2
				)
			)
		);
	}
	public function enqueue_control_scripts() {
		wp_enqueue_script( 'bizblack-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/custom-addition/customize-controls.js', array( 'customize-controls' ) );
		wp_enqueue_style( 'bizblack-customize-controls', trailingslashit( get_template_directory_uri() ) . '/inc/custom-addition/customize-controls.css' );
	}
}
techbit_Customize::get_instance();