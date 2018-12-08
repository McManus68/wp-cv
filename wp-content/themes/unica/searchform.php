<?php
/**
 * searchform.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 * 
 */
 ?>

	<form class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
		 <input  type="text" class="form-control" id="s" name="s" placeholder="<?php esc_attr_e('Search For', 'unica') ?>" autocomplete="off" />
		 <span class="input-group-btn">
			<button class="btn btn-default" type="submit" value="<?php esc_html_e('Search For', 'unica') ?>" id="searchsubmit"><i class="fa fa-search"></i></button>
		 </span>	 
   </form>
