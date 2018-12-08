<?php

/**
 * page.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 */
?>

<?php get_header(); ?>
		  
	<section id="template-klb-blog" data-section="blog">
		<div class="container">
			<div class="row">
			   <div class="col span_12">
			      <div class="blogitems">
				    <div class="blog-content">
						 <?php while(have_posts()) : the_post(); ?>
							  <div class="klb-post">
							    <h2><?php the_title(); ?></h2>
								<?php the_content (); ?>
								<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
							  </div>

						 <?php endwhile; ?>
				     </div>
				   </div>
				   <?php comments_template(); ?>    
			   </div>
            </div>
        </div>
    </section>		
<?php get_footer(); ?>
