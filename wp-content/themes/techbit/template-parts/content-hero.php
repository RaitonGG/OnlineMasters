<?php
/**
 * Template part for displaying section of banner content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage techbit
 * @since 1.0 
 */
$techbit_enable_banner_section = get_theme_mod( 'techbit_enable_banner_section', true );
$techbit_banner_title = get_theme_mod( 'techbit_banner_title','Create Easy Grow Your Website');
$techbit_banner_content = get_theme_mod( 'techbit_banner_content','');
$techbit_banner_button_label1 = get_theme_mod( 'techbit_banner_button_label1','Know More');
$techbit_banner_button_link1 = get_theme_mod( 'techbit_banner_button_link1','#');
      
if($techbit_enable_banner_section==true ) {
?>  
<!-- ======= Hero Section ======= -->
 <section class="home6-hero-sec">
    <div class="section-title-wraper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center caption">
            <div class="text-slider-animate">
              <p><?php echo esc_html($techbit_banner_title); ?></p>
            </div>
            <p class="desc"><?php echo esc_html($techbit_banner_content); ?></p>
            <a href="<?php echo esc_url($techbit_banner_button_link1); ?>" class="btn-2"><?php echo esc_html($techbit_banner_button_label1); ?></a>
          </div>
          <a class="btn btn-mouse-wrapper" href="#services">
              <div class="btn btn-mouse">
                <div class="btn btn-wheel"></div>
              </div>
            </a>
        </div>
      </div>
    </div>
</section> 
 
<?php
}
?>