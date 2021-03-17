<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_theme_mod('construction_firm_slider_arrows') != ''){ ?>  
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php
          for ( $i = 1; $i <= 4; $i++ ) {
            $mod =  get_theme_mod( 'construction_firm_post_setting' . $i );
            if ( 'page-none-selected' != $mod ) {
              $construction_firm_slide_post[] = $mod;
            }
          }
           if( !empty($construction_firm_slide_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $construction_firm_slide_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <img src="<?php esc_url(the_post_thumbnail_url('full')); ?>"/>
            <div class="carousel-caption">
              <h2 class="text-center text-lg-left text-md-left"><?php the_title();?></h2>
              <p class="mb-0 text-left"><?php $excerpt = get_the_excerpt(); echo esc_html( construction_firm_string_limit_words( $excerpt, 40 )); ?></p>
              <div class="home-btn text-center text-lg-left text-md-left my-4">
                <a class="py-3 px-4" href="<?php the_permalink(); ?>"><?php echo esc_html('READ MORE','construction-firm'); ?></a>
              </div>
            </div>
          </div>
          <?php $i++; endwhile;
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon px-3 py-2" aria-hidden="true"><?php esc_html_e('PREV','construction-firm'); ?></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon px-3 py-2" aria-hidden="true"><?php esc_html_e('NEXT','construction-firm'); ?></span>
          </a>
      </div>
      <div class="clearfix"></div>
    </section>
  <?php }?>
  <section id="middle-sec">
    <div class="container">
      <div class="row">
        <?php
          for ( $s = 1; $s <= 4; $s++ ) {
            $mod =  get_theme_mod( 'construction_firm_middle_sec_settigs' . $s );
            if ( 'page-none-selected' != $mod ) {
              $construction_firm_post[] = $mod;
            }
          }
           if( !empty($construction_firm_post) ) :
          $args = array(
            'post_type' =>array('post','page'),
            'post__in' => $construction_firm_post
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $s = 1;
        ?>
        <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div class="col-lg-3 col-md-6">
            <div class="inner-box mb-3 p-3 text-center">
              <h4><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
              <hr>
              <p class="mb-0"><?php $excerpt = get_the_excerpt(); echo esc_html( construction_firm_string_limit_words( $excerpt, 8 )); ?></p>
            </div>
          </div>
        <?php $s++; endwhile;
        wp_reset_postdata();?>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
      </div>
    </div>
  </section>
  <section id="projects-box" class="py-5">
    <div class="container">
      <h3 class="text-center mb-5"><?php echo esc_html( get_theme_mod( 'construction_firm_project_section_title','') ); ?></h3>
      <div class="row">
        <?php
          $project_category=  get_theme_mod('construction_firm_category_setting');if($project_category){
          $page_query = new WP_Query(array( 'category_name' => esc_html($project_category ,'construction-firm')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>  
              <div class="col-lg-6 col-md-12">
                <div class="box mb-5 text-center text-lg-left text-md-left">
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="img-box">
                        <?php the_post_thumbnail(); ?>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <div class="my-md-5 my-lg-0">
                        <h6><?php the_category(); ?></h6>
                        <a href="<?php the_permalink(); ?>"><h4><?php the_title();?></h4></a>
                        <p><?php echo esc_html(wp_trim_words(get_the_content(),'15') );?></p>
                        <div class="box-button">
                          <a class="py-2 px-3" href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','construction-firm');?></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
          wp_reset_postdata();
        }?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>