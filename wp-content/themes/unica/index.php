<?php
/**
 * index.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 * 
 */
 ?>

<?php get_header(); ?>  
 	
	<?php $headerbg = ot_get_option( 'blog_header' ); ?>
	<?php $headertitle = ot_get_option( 'header_title' ); ?>
	<?php $headersub = ot_get_option( 'header_subtitle' ); ?>

	<?php if ($headerbg) { ?>
	    <?php $image = unica_resize( $headerbg, 1200, 600, true, true, true ); ?>
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
	
	<section id="template-klb-blog" data-section="blog">
		<div class="container">
				<div class="section-heading">
				    <div class="row">
    <?php if( get_option_tree( 'layout_set' ) == 'left-sidebar') { ?>
				
					<div class="col span_3">
						
					  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
						<div class="sidebar">								
						  <?php dynamic_sidebar( 'blog-sidebar' ); ?>
						</div>							   
					  <?php } ?>
						
					</div>
					<div class="col span_9">
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					  
                           <?php  get_template_part( 'post-format/content', get_post_format() ); ?>
                       
	                  <?php endwhile;
					  
	                      get_template_part( 'post-format/pagination' ); 
	
	                      else : ?>

                          <h2><?php esc_html_e('No Posts Found', 'unica') ?></h2>
                    
                    <?php endif; ?>

					</div>

	<?php } elseif( get_option_tree( 'layout_set' ) == 'full-width') { ?>
					<div class="col span_12">
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					  
                           <?php  get_template_part( 'post-format/content', get_post_format() ); ?>
                       
	                  <?php endwhile;
					  
	                      get_template_part( 'post-format/pagination' ); 
	
	                      else : ?>

                          <h2><?php esc_html_e('No Posts Found', 'unica') ?></h2>
                    
                    <?php endif; ?>

					</div>

	
	<?php } else { ?>
					<div class="col span_9">
                      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
					  
                           <?php  get_template_part( 'post-format/content', get_post_format() ); ?>
                       
	                  <?php endwhile;
					  
	                      get_template_part( 'post-format/pagination' ); 
	
	                      else : ?>

                          <h2><?php esc_html_e('No Posts Found', 'unica') ?></h2>
                    
                    <?php endif; ?>

					</div>
					<div class="col span_3">
						
					  <?php if ( is_active_sidebar( 'blog-sidebar' ) ) { ?>
						<div class="sidebar">								
						  <?php dynamic_sidebar( 'blog-sidebar' ); ?>
						</div>							   
					  <?php } ?>
						
					</div>
	<?php } ?>
				</div>
			</div>
			
		</div>
	</section>

<?php get_footer(); ?>   
