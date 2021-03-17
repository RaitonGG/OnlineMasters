<?php 
$techbit_enable_service_section = get_theme_mod( 'techbit_enable_service_section', false );
$techbit_service_title = get_theme_mod( 'techbit_service_title');
$techbit_service_subtitle = get_theme_mod( 'techbit_service_subtitle' );
if($techbit_enable_service_section==true ) {


        $techbit_services_no        = 6;
        $techbit_services_pages      = array();
        for( $i = 1; $i <= $techbit_services_no; $i++ ) {
             $techbit_services_pages[] = get_theme_mod('techbit_service_page '.$i); 
             $techbit_service_icon[]= get_theme_mod('techbit_service_icon '.$i,'fa fa-user');
        }
        $techbit_services_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techbit_services_pages ),
        'posts_per_page' => absint($techbit_services_no),
        'orderby' => 'post__in'
        ); 
        $techbit_services_query = new WP_Query( $techbit_services_args );
      

?>
 
	
<!-- ======= Services Section ======= -->
    <section id="services" class="services-5">
      <div class="container">
        <div class="section-title-5">
		<?php if($techbit_service_title) : ?>
			  <h2><?php echo esc_html( $techbit_service_title ); ?></h2>
			   <div class="separator">
				<ul>
				  <li></li>
				  <li class="squre"></li>
				  <li></li>
				</ul>
			  </div>
		  <?php endif; ?>
          <p><?php echo esc_html($techbit_service_subtitle); ?></p>
        </div>
        <div class="row">
			<?php
			$count = 0;
			while($techbit_services_query->have_posts() && $count <= 8 ) :
			$techbit_services_query->the_post();
			?> 
			  <div class="col-lg-4 col-md-6 col-sm-12">
				<div class="icon-box">
				  <i class="<?php echo esc_attr($techbit_service_icon[$count]); ?>"></i>
				  <h4><?php the_title(); ?></h4>
				  <?php the_content(); ?>
				</div>
			  </div>
			<?php
				$count = $count + 1;
				endwhile;
				wp_reset_postdata();
			  ?> 
        </div>

      </div>
    </section><!-- End Services Section -->	
	
	
<?php } ?>