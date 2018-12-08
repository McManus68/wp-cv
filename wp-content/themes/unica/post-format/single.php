  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blogitems">
		<div class="blog-content">
			<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
			<ul class="blog-socials">
				<li><a href="<?php the_permalink(); ?>"><i class="fa fa-calendar"></i><span><?php echo get_the_date(); ?></span></a></li>
				<li><?php the_tags( '<i class="fa fa-tag"></i></i>&nbsp;', ',', ' '); ?></li>
				<li><i class="fa fa-folder"></i><span><?php the_category(","); ?></span></li>
			</ul>
			<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>  
				<?php  
				$att=get_post_thumbnail_id();
				$image_src = wp_get_attachment_image_src( $att, 'full' );
				$image_src = $image_src[0]; 
				$imagem = unica_resize( $image_src, 1200, 810, true, true, true );
				?> 

				<div class="blog-img">
			       <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($imagem); ?>" alt="<?php the_title(); ?>"></a>
				</div>
			 <?php } ?>
			<div class="klb-post">
				<?php the_content(); ?> 
				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
            </div>
	     </div>
	</div>
  </article>
