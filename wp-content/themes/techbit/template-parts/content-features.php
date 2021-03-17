<?php 
$techbit_enable_features_section = get_theme_mod( 'techbit_enable_features_section', false );
if($techbit_enable_features_section==true ) {


        $techbit_features_no        = 4;
        $techbit_features_pages      = array();
        for( $i = 1; $i <= $techbit_features_no; $i++ ) {
             $techbit_features_pages[] = get_theme_mod('techbit_features_page '.$i); 
             $techbit_features_icon[]= get_theme_mod('techbit_features_icon '.$i,'fa fa-user');
        }
        $techbit_features_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techbit_features_pages ),
        'posts_per_page' => absint($techbit_features_no),
        'orderby' => 'post__in'
        ); 
        $techbit_features_query = new WP_Query( $techbit_features_args );
?>
<!-- ======= Features Section ======= -->
 

 <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
		<?php
			$count = 0;
			while($techbit_features_query->have_posts() && $count <= 4 ) :
			$techbit_features_query->the_post();
		  ?> 
          <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
            <div class="about-box text-center">
              <i class="<?php echo esc_html($techbit_features_icon[$count]); ?>"></i>
              <h3 class="about-box-title"><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </div>
          </div>
          <?php
			$count = $count + 1;
			endwhile;
			wp_reset_postdata();
		  ?>
        </div>
      </div>
    </section><!-- End About Section -->

<?php } ?>