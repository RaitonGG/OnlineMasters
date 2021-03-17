<?php
/**
 * Displays footer site info
 *
 * @subpackage Construction Firm
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info py-4 text-center">
	<p><?php
		echo esc_html( get_theme_mod( 'construction_firm_footer_text' ) );
		printf(
			/* translators: %s: Construction WordPress Theme. */
			esc_html__( ' %s ', 'construction-firm' ),
			'<a href="' . esc_attr__( 'https://www.ovationthemes.com/wordpress/free-construction-wordpress-theme/', 'construction-firm' ) . '"> Construction WordPress Theme</a>'
		);
	?></p>
</div>