<?php 
$techbit_enable_testimonial_section = get_theme_mod( 'techbit_enable_testimonial_section', false );
$techbit_testimonial_title= get_theme_mod( 'techbit_testimonial_title','What People Say');

if($techbit_enable_testimonial_section == true ) {
	$techbit_testimonials_no        = 6;
	$techbit_testimonials_pages      = array();
	for( $i = 1; $i <= $techbit_testimonials_no; $i++ ) {
		 $techbit_testimonials_pages[] = get_theme_mod('techbit_testimonial_page'.$i);
	}
	$techbit_testimonials_args  = array(
	'post_type' => 'page',
	'post__in' => array_map( 'absint', $techbit_testimonials_pages ),
	'posts_per_page' => absint($techbit_testimonials_no),
	'orderby' => 'post__in'
	); 
	$techbit_testimonials_query = new WP_Query( $techbit_testimonials_args );
?>
  <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials-5">
      <div class="container">
        <div class="section-title-5">
		<?php if($techbit_testimonial_title) : ?>
          <h2 class="title"><?php echo esc_html($techbit_testimonial_title); ?></h2>
         <div class="separator">
            <ul>
              <li></li>
              <li class="squre"></li>
              <li></li>
            </ul>
          </div>
		   <?php endif; ?>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-xl-10">
             <div class="testimonials-content owl-carousel text-center">
              <?php
				$count = 0;
				while($techbit_testimonials_query->have_posts() && $count <= 5 ) :
				$techbit_testimonials_query->the_post();
			 ?>
			 
			  <div class="testimonial">
				<i class="fa fa-quote-right icon"></i>
				 <p class="testimonial-desc"><?php echo esc_html(get_the_excerpt()); ?></p>
				<div class="testimonial-pic">
					<img src="<?php echo  esc_url(get_the_post_thumbnail_url()) ;?>" alt="<?php echo esc_html(get_post_thumbnail_id()); ?>">
				</div>
				<div class="testimonial-profile">
					<span class="name"><?php the_title(); ?></span>
				</div>
			</div>
               <?php
					$count = $count + 1;
					endwhile;
					wp_reset_postdata();
				?> 
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
<?php } ?>