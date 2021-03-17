<?php
/**
 * The header for our theme
 *
 * @subpackage Construction Firm
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'construction-firm' ); ?></a>
	
	<div id="page" class="site">
		<div id="header" class="mb-5">
			<div class="wrap_figure">
				<div class="top_bar py-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-7">
								<p class="mb-0 text-center text-lg-left text-md-left"><?php echo esc_html(get_theme_mod('construction_firm_top_content','')); ?></p>
							</div>
							<div class="col-lg-5 col-md-5">
								<div class="links text-center text-lg-right text-md-right">
									<?php if( get_theme_mod('construction_firm_facebook') != '' || get_theme_mod('construction_firm_twitter') != '' || get_theme_mod('construction_firm_youtube') != '' || get_theme_mod('construction_firm_instagram') != ''){ ?>
										<span><?php esc_html_e('Stay Connected - ','construction-firm'); ?></span>
									<?php }?>
									<?php if( get_theme_mod('construction_firm_facebook') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('construction_firm_facebook','')); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
									<?php }?>
									<?php if( get_theme_mod('construction_firm_twitter') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('construction_firm_twitter','')); ?>"><i class="fab fa-twitter mr-3"></i></a>
									<?php }?>
									<?php if( get_theme_mod('construction_firm_youtube') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('construction_firm_youtube','')); ?>"><i class="fab fa-youtube mr-3"></i></a>
									<?php }?>
									<?php if( get_theme_mod('construction_firm_instagram') != ''){ ?>
										<a href="<?php echo esc_url(get_theme_mod('construction_firm_instagram','')); ?>"><i class="fab fa-instagram mr-3"></i></a>
									<?php }?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="top_header py-3">
					<div class="container">
						<div class="row mx-0 mx-lg-5 mx-md-0">
							<div class="col-lg-5 col-md-4">
								<?php if( get_theme_mod('construction_firm_timing_text') != '' || get_theme_mod('construction_firm_timing') != ''){ ?>
									<div class="info-box mb-lg-0 mb-md-0 mb-3">
										<div class="row">
											<div class="col-lg-2 col-md-3 col-3">
												<i class="fas fa-phone p-3 text-center"></i>
											</div>
											<div class="col-lg-10 col-md-9 col-9">
												<strong><?php echo esc_html(get_theme_mod('construction_firm_timing_text','')); ?></strong>
												<p class="mb-0"><?php echo esc_html(get_theme_mod('construction_firm_timing','')); ?></p>
											</div>
										</div>
									</div>
								<?php }?>
							</div>
							<div class="col-lg-3 col-md-4">
								<?php if( get_theme_mod('construction_firm_call_text') != '' || get_theme_mod('construction_firm_call') != ''){ ?>
									<div class="info-box mb-lg-0 mb-md-0 mb-3">
										<div class="row">
											<div class="col-lg-3 col-md-3 col-3">
												<i class="fas fa-phone p-3 text-center"></i>
											</div>
											<div class="col-lg-9 col-md-9 col-9">
												<strong><?php echo esc_html(get_theme_mod('construction_firm_call_text','')); ?></strong>
												<p class="mb-0"><?php echo esc_html(get_theme_mod('construction_firm_call','')); ?></p>
											</div>
										</div>
									</div>
								<?php }?>
							</div>
							<div class="col-lg-4 col-md-4">
								<?php if( get_theme_mod('construction_firm_email_text') != '' || get_theme_mod('construction_firm_email') != ''){ ?>
									<div class="info-box mb-lg-0 mb-md-0 mb-3">
										<div class="row">
											<div class="col-lg-2 col-md-3 col-3">
												<i class="fas fa-envelope p-3 text-center"></i>
											</div>
											<div class="col-lg-10 col-md-9 col-9">
												<strong><?php echo esc_html(get_theme_mod('construction_firm_email_text','')); ?></strong>
												<p class="mb-0"><?php echo esc_html(get_theme_mod('construction_firm_email','')); ?></p>
											</div>
										</div>
									</div>
								<?php }?>
							</div>
						</div>
					</div>
				</div>
				<div class="menu_header">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-8">
								<div class="logo px-3 py-1">
							        <?php if ( has_custom_logo() ) : ?>
					            		<?php the_custom_logo(); ?>
						            <?php endif; ?>
					              	<?php $blog_info = get_bloginfo( 'name' ); ?>
						                <?php if ( ! empty( $blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						                  	<?php else : ?>
					                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					                  		<?php endif; ?>
						                <?php endif; ?>
						                <?php
					                  		$description = get_bloginfo( 'description', 'display' );
						                  	if ( $description || is_customize_preview() ) :
						                ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($description); ?>
					                  	</p>
					              	<?php endif; ?>
							    </div>
							</div>
							<div class="col-lg-8 col-md-8 col-3">
								<?php if(has_nav_menu('primary')){?>
									<div class="toggle-menu gb_menu text-right">
										<button onclick="construction_firm_gb_Menu_open()" class="gb_toggle p-2 px-4 mb-2 my-3"><i class="fas fa-ellipsis-h"></i><p class="mb-0"><?php esc_html_e('Menu','construction-firm'); ?></p></button>
									</div>
								<?php }?>
				   				<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>