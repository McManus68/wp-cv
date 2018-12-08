<?php
/**
 * 404.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 */
?>

<?php get_header(); ?>
      <div class="container">
          <div class="row">
			   <div class="col span_12">
				 <div class="box-content">
					<center><img src="<?php echo get_template_directory_uri(); ?>/images/404.png" /></center>
					<center> <?php esc_html_e('404 Not Found','unica'); ?></center>
				 </div>
			   </div>
           </div>
      </div>  

<?php get_footer(); ?>