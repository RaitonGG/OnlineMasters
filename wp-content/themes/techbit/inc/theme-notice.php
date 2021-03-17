<?php
/**
 * Welcome Screen Class
 */
class techbit_screen {

	/**
	 * Constructor for the Notice
	 */
	public function __construct() {

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'techbit_activation_admin_notice' ) );

	}
	
	public function techbit_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) ) {
			add_action( 'admin_notices', array( $this, 'techbit_admin_notice' ), 99 );
		}
	}

	
	public function techbit_admin_notice() {
		?>			
		<div class="updated notice is-dismissible bizzmo-note">
			<h1><?php
			$theme_info = wp_get_theme();
			printf( esc_html__('Thanks for installing  %1$s ', 'techbit'), esc_html( $theme_info->Name ), esc_html( $theme_info->Version ) ); ?>
			</h1>
			<p><?php echo  esc_html__("Welcome! Thank you for choosing Techup WordPress theme. To take full advantage of the features this theme Please Install Our Demo", "techbit"); ?></p>
			<p class="note1"><a href="?page=techbit-info.php" class="button button-blue-secondary button_info" style="text-decoration: none;" target="_blank"><?php echo esc_html__('Theme Detail','techbit'); ?></a> <a href="https://testerwp.com/docs/techbit-theme-doc/" target="_blank" class="button button-blue-secondary button_info" style="text-decoration: none;"><?php echo esc_html__('Documentation','techbit'); ?></a></p>
		</div>
		<?php
	}
	
}

$GLOBALS['techbit_screen'] = new techbit_screen();