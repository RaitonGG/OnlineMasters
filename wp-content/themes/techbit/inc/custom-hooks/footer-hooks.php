<?php
/**
 * Managed the custom functions and hooks for footer section of the theme.
 *
 * @subpackage techbit
 * @since 1.0 
 */


if( ! function_exists( 'techbit_footer_start' ) ):
	function techbit_footer_start(){
		$footer_sticky = get_theme_mod( 'techbit_footer_sticky_opt', true ); ?>
		
		    <footer class="footer footer-one" id="foot-wdgt">

<?php }
endif; 
if( ! function_exists( 'techbit_footer_sidebar' ) ):
	function techbit_footer_sidebar(){ ?>
	    <div class="foot-top">
            <div class="container">
                <div class="row clearfix">
                	<?php if( is_active_sidebar( 'footer-widget-area' ) ){ ?>
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
	<?php }
endif; 
if( ! function_exists( 'techbit_footer_site_info' ) ):
	function techbit_footer_site_info(){ ?>
		<div class="foot-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php bloginfo( 'name' ); ?> 						
						<span class="sep"> | </span>
						<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'techbit' ) ); ?>" class="imprint">
						<?php
							/* translators: %s: WordPress */
						printf( __( 'Proudly powered by %s', 'techbit' ), 'WordPress' );
						?>
                    </div>
                </div>
            </div>
        </div>
<?php }
endif; 


/*----------------------------------------------------------------------------------------------------------------------*/

if( ! function_exists( 'techbit_footer_end' ) ):
	function techbit_footer_end(){ ?>
				
		</footer> 
		</div>
<?php }
endif; 
add_action( 'techbit_footer', 'techbit_footer_start', 5  );
add_action( 'techbit_footer', 'techbit_footer_sidebar', 10  );
add_action( 'techbit_footer', 'techbit_footer_site_info', 10  );
add_action( 'techbit_footer', 'techbit_footer_end', 20 );