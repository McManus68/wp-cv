<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blogitems">
		<div class="blog-content">
			 <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<ul class="blog-socials">
				<li><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i><span><?php echo get_the_date(); ?></span></a></li>
				<li><?php the_tags( '<i class="fa fa-tag"></i></i>', ',', ' '); ?></li>
				<?php if ( has_category() ) { ?>
				<li><i class="fa fa-folder"></i><span><?php the_category(', '); ?></span></li>
				 <?php } ?>
			</ul>
			 <?php $images = rwmb_meta( 'klb_blogitemslides', 'type=image_advanced&size=medium' ); ?>
			 <?php if($images) { ?>	  
			   <div class="slideshow owl-carousel owl-theme">
			   <?php  foreach ( $images as $image ) {
				echo "<div class='item'><img src='{$image['full_url']}' alt='{$title}' /></div>";
			   } ?> 
			   </div>
			 <?php }	?>
			<?php the_excerpt(); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
		</div>
	
	</div>
</article>

		
