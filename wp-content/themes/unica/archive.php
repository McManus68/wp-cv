<?php

/**
 * archive.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 * 
 */

?>

<?php get_header(); ?>  
 
	   <div class="blog-head">
		  <h2 class="archive"><?php the_archive_title(); ?></h2>
	   </div>
	
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