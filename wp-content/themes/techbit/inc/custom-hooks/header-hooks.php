<?php
/**
 * Managed the custom functions and hooks for header section of the theme.
 *
 * @subpackage techbit
 * @since 1.0.0
 */

/*-----------------------------------------------------------------------------------------------------------------------*/
if( ! function_exists( 'techbit_header_start' ) ):
    
    function techbit_header_start(){ ?>
<header>
        <div class="header-two affix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="menu-two">
<?php }
endif;  

/*-----------------------------------------------------------------------------------------------------------------------*/
if( ! function_exists( 'techbit_header_site_branding' ) ):
   
    function techbit_header_site_branding(){ ?>
        
            <div class="logo-wrap">
                <div class="logo">
                <?php the_custom_logo();   
                 if (display_header_text()==true){ ?>
                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                 <h1 class="site-title">
                 <?php bloginfo( 'title' ); ?>
                 </h1>
                   <p class="site-description">
                 <?php bloginfo( 'description' ); ?>
                 </p>
                 </a>
                 <?php } ?>
            </div>
        </div>
    

    <?php
    }
endif;  

/*-----------------------------------------------------------------------------------------------------------------------*/

if( ! function_exists( 'techbit_header_nav_menu' ) ):
    
    function techbit_header_nav_menu(){ ?>
        
            <nav class="main-navigation navbar navbar-expand-lg" id="site-navigation">
                 <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars"></i></button>
                 <?php
                    wp_nav_menu(array(
						'theme_location'      => 'primary',
						'container'           => 'div',
						'container_class'     => 'main-menu',
						'menu_class'          => 'navbar-nav mr-auto',
						'menu_id'             => 'nav-content',
					)) ;
                    ?>
            </nav>
        </div>
        
<?php }
endif;  
if( ! function_exists( 'techbit_header_end' ) ):
      function techbit_header_end(){ ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

<?php }


endif;  


add_action( 'techbit_header', 'techbit_header_start', 5  );
add_action( 'techbit_header', 'techbit_header_site_branding', 10  );
add_action( 'techbit_header', 'techbit_header_nav_menu', 15  );
add_action( 'techbit_header', 'techbit_header_end', 25  );