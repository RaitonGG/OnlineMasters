<?php
/**
 * Template part for displaying section of blog content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @subpackage techbit
 * @since 1.0
 */

$techbit_enable_blog_section = get_theme_mod( 'techbit_enable_blog_section', true );
$techbit_blog_cat 		= get_theme_mod( 'techbit_blog_cat', 'uncategorized' );
if($techbit_enable_blog_section == true) {
$techbit_blog_title 	= get_theme_mod( 'techbit_blog_title', __( 'Latest News', 'techbit' ) );
$techbit_blog_subtitle 	= get_theme_mod( 'techbit_blog_subtitle' );
$techbit_rm_button_label 	= get_theme_mod( 'techbit_rm_button_label', __( 'Read More', 'techbit' ) );
$techbit_blog_count 	 = apply_filters( 'techbit_blog_count', 3 );

?>
<!-- blog start-->
<section class="blog-5">
	<div class="container">
	  <div class="section-title-5">
	  <?php if($techbit_blog_title) : ?>
		<h2><?php echo esc_html( $techbit_blog_title ); ?></h2>
		<div class="separator">
		<ul>
		  <li></li>
		  <li class="squre"></li>
		  <li></li>
		</ul>
	  </div>
		<?php endif; ?>
		<p><?php echo esc_html( $techbit_blog_subtitle ); ?></p>
	</div>
		<div class="row">
			<?php 
			if( !empty( $techbit_blog_cat ) ) 
				{
				$blog_args = array(
					'post_type' 	 => 'post',
					'category_name'	 => esc_attr( $techbit_blog_cat ),
					'posts_per_page' => absint( $techbit_blog_count ),
				);

				$blog_query = new WP_Query( $blog_args );
				if( $blog_query->have_posts() ) {
					while( $blog_query->have_posts() ) {
						$blog_query->the_post();
			?>
			  <div class="col-lg-4">
				<article class="blog-item blog-1">
					<div class="post-img">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="post-content pt-4 text-left">
						<h5>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h5>
						<p><?php the_excerpt(); ?></p>
						<?php if($techbit_rm_button_label) : ?>
							<div class="btn-wraper">
							  <a href="<?php the_permalink(); ?>" class="read-more-btn"><?php echo esc_html($techbit_rm_button_label); ?></a>
							</div>
						<?php endif; ?>	
					</div>
				</article>
			  </div>
		  <?php
				}
			}
			wp_reset_postdata();
		}
		 ?>
		</div>
	</div>
</section>
<!-- blog end-->
<?php } ?>