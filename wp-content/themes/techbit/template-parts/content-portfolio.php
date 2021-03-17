<?php 
$techbit_enable_portfolio_section = get_theme_mod( 'techbit_enable_portfolio_section', false );
$techbit_portfolio_title = get_theme_mod( 'techbit_portfolio_title');
$techbit_portfolio_subtitle = get_theme_mod( 'techbit_portfolio_subtitle' );

if($techbit_enable_portfolio_section==true ) {
	$techbit_portfolio_no        = 6;
	$techbit_portfolio_page      = array();
	for( $k = 1; $k <= $techbit_portfolio_no; $k++ ) {
		 $techbit_portfolio_page[] = get_theme_mod('techbit_portfolio_page'.$k); 

	}
	$techbit_portfolio_args  = array(
	'post_type' => 'page',
	'post__in' => array_map( 'absint', $techbit_portfolio_page ),
	'posts_per_page' => absint($techbit_portfolio_no),
	'orderby' => 'post__in'
	); 
	$techbit_portfolio_query = new WP_Query( $techbit_portfolio_args );
?>
 

<!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio-5">
      <div class="container">

        <div class="section-title-5">
          <?php if($techbit_portfolio_title) : ?>
			  <h2><?php echo esc_html($techbit_portfolio_title); ?></h2>
			  <div class="separator">
				<ul>
				  <li></li>
				  <li class="squre"></li>
				  <li></li>
				</ul>
			  </div>
			<?php endif; ?>  
          <p><?php echo esc_html($techbit_portfolio_subtitle); ?></p>
        </div>

        <div class="row portfolio-container">
			<?php
				$count = 0;
				while($techbit_portfolio_query->have_posts() && $count <= 5 ) :
				$techbit_portfolio_query->the_post();
			  ?> 
				  <div class="col-lg-4 col-md-6 portfolio-item">
 
					<div class="portfolio-wrap">
					  <?php the_post_thumbnail(); ?>
					  <div class="portfolio-info">
						<h4><?php echo the_title(); ?></h4>
						 
						<div class="portfolio-links">
						  <a href="<?php the_permalink(); ?>" title="More Details"><i class="fa fa-link"></i></a>
						</div>
					  </div>
					</div>
					
				  </div>
				<?php
					$count = $count + 1;
					endwhile;
					wp_reset_postdata();
				  ?> 
        </div>
      </div>
    </section><!-- End Portfolio Section -->
<?php } ?>