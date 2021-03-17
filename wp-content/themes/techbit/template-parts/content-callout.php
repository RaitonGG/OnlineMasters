<?php
$techbit_enable_callout_section = get_theme_mod( 'techbit_enable_callout_section', true );

if($techbit_enable_callout_section == true ) {
   
$techbit_callout_title = get_theme_mod( 'techbit_callout_title');
$techbit_callout_content = get_theme_mod( 'techbit_callout_content');
$techbit_callout_button_label1 = get_theme_mod( 'techbit_callout_button_label1');
$techbit_callout_button_link1 = get_theme_mod( 'techbit_callout_button_link1');
?>
<section class="cta-6">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2><?php echo esc_html($techbit_callout_title); ?></h2>
				<p class="c-white mb-0"><?php echo esc_html($techbit_callout_content); ?></p>
				<?php if(!empty($techbit_callout_button_label1 && $techbit_callout_button_link1)): ?>
					<a href="<?php echo esc_url($techbit_callout_button_link1); ?>" class="btn-2"><?php echo esc_html($techbit_callout_button_label1); ?></a>
				<?php endif; ?>	
			</div>
		</div>
	</div>
</section>

<?php } ?>