<?php
/**
 * single.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 * 
 */
 ?>

<?php get_header(); ?>   

		<?php $headerbg = rwmb_meta( 'klb_blog_header_background', 'type=image_advanced&size=full' ); ?>
        <?php $headertitle = get_post_meta(get_the_ID(), "klb_blog_header_title", true); ?>
        <?php $headersub = get_post_meta(get_the_ID(), "klb_blog_header_subtitle", true); ?>

		<?php if($headerbg) { ?>
            <?php  foreach ( $headerbg as $hdbg ) { ?>	
            <?php $image = unica_resize( $hdbg['full_url'], 1200, 600, true, true, true ); ?>
					<section id="parallax-11" style="background-image: url(<?php echo esc_url($image); ?>);" >
					   <div class="container">
						 <div class="row">
							<div class="col span_12">
							   <div class="blog-head">
								 <h1 class="overh1"><?php echo esc_html($headertitle); ?></h1>
								 <h2 class="blog-head-sub"><?php echo esc_html($headersub); ?></h2>
							   </div>
							</div>
						 </div>
						</div>
					</section>
			<?php } ?>
		<?php } ?>
			  
    <!-- START SERVICES -->
	<section id="template-klb-blog" data-section="blog">
		<div class="container">
			<div class="section-heading ">
				<div class="row">
				
				
    <?php if( get_option_tree( 'layout_set' ) == 'left-sidebar') { ?>
	
					<div class="col span_3 ">
						<div class="sidebar">
							  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
																
								<?php dynamic_sidebar( 'blog-sidebar' ); ?>
																   
							  <?php } ?>
						</div>
					</div>
					
					<div class="col span_9">
					
						  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
						  
							   <?php  get_template_part( 'post-format/single', get_post_format() ); ?>
						   
						  <?php endwhile;
						  
							  else : ?>

							  <h2><?php esc_html_e('No Posts Found', 'unica') ?></h2>
						
						<?php endif; ?>
						
						<?php comments_template(); ?>
						
					</div>

					
	<?php } elseif( get_option_tree( 'layout_set' ) == 'full-width') { ?>
					<div class="col span_12">
					
						  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
						  
							   <?php  get_template_part( 'post-format/single', get_post_format() ); ?>
						   
						  <?php endwhile;
						  
							  else : ?>

							  <h2><?php esc_html_e('No Posts Found', 'unica') ?></h2>
						
						<?php endif; ?>
						
						<?php comments_template(); ?>
						
					</div>
	<?php } else { ?>
	
					<div class="col span_9">
					
						  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
						  
							   <?php  get_template_part( 'post-format/single', get_post_format() ); ?>
						   
						  <?php endwhile;
						  
							  else : ?>

							  <h2><?php esc_html_e('No Posts Found', 'unica') ?></h2>
						
						<?php endif; ?>
						
						<?php comments_template(); ?>
						
					</div>
					<div class="col span_3 ">
						<div class="sidebar">
							  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
																
								<?php dynamic_sidebar( 'blog-sidebar' ); ?>
																   
							  <?php } ?>
						</div>
					</div>
					
	<?php } ?>
				</div>
			</div>
			
		</div>
	</section>
	<!-- END SERVICES -->


<!-- BLOG END-->
<?php get_footer(); ?>   
