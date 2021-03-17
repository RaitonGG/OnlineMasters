<?php 
$techbit_enable_team_section = get_theme_mod( 'techbit_enable_team_section', false );
$techbit_team_title  = get_theme_mod( 'techbit_team_title' );
$techbit_team_subtitle  = get_theme_mod( 'techbit_team_subtitle' );


if($techbit_enable_team_section==true ) {
    

        $techbit_teams_no        = 4;
        $techbit_teams_pages      = array();
        for( $i = 1; $i <= $techbit_teams_no; $i++ ) {
             $techbit_teams_pages[] = get_theme_mod('techbit_team_page'.$i);

        }
        $techbit_teams_args  = array(
        'post_type' => 'page',
        'post__in' => array_map( 'absint', $techbit_teams_pages ),
        'posts_per_page' => absint($techbit_teams_no),
        'orderby' => 'post__in'
        ); 
        $techbit_teams_query = new WP_Query( $techbit_teams_args );
      

?>
<!-- ======= Team Section ======= -->
    <section id="team" class="team-5 section-bg">
      <div class="container">
        <div class="section-title-5">
		 <?php if($techbit_team_title) : ?>
          <h2><?php echo esc_html($techbit_team_title); ?></h2>
         <div class="separator">
            <ul>
              <li></li>
              <li class="squre"></li>
              <li></li>
            </ul>
          </div>
		  <?php endif; ?>
          <?php if($techbit_team_subtitle) { ?>
			<p><?php echo esc_html($techbit_team_subtitle); ?></p>
		  <?php } ?>
        </div>

        <div class="row">
		  <?php
            $count = 0;
            while($techbit_teams_query->have_posts() && $count <= 4 ) :
            $techbit_teams_query->the_post();
         ?> 	
          <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="team-profile">
              <div class="profile-image">
                 <?php the_post_thumbnail(); ?>
              </div>
              <div class="profile-detail">
                <h4 class="profile-name"><?php the_title(); ?></h4>
                <div class="designation"><?php the_excerpt(); ?></div>
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
    </section><!-- End Team Section -->	

<?php } ?>