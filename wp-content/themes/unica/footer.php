<?php
/**
 * footer.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 * 
 */
 ?>
 
   <?php if(!is_page_template('frontpage.php')){ ?>
	<footer id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col span_6">
                   <?php  $allowed_html = array(
					'a' => array(
						'href' => array(),
						'title' => array(),
						'class' => array(),
					), );	?>
					<p><?php echo  wp_kses(ot_get_option( 'unica_copyright1' ),$allowed_html); ?></p>
					
				</div>
				<div class="col span_6">
						<?php 
						$socialslist = ot_get_option( 'unica_socialicons' );				
						 if ($socialslist) { ?>
							<ul class="social social-circle">
							   <?php foreach($socialslist as $key => $value) {
								  if ($value['unica_socialicon']) { 
								   echo '<li><a class="social-1" href="'.$value['unica_sociallink'].'" target="_blank"><i class="fa fa-'.$value['unica_socialicon'].'"></i></a></li>';
								  } else {
									}
								} ?>
							</ul>
					   <?php } ?>	
				</div>
				
			</div>

		</div>
	</footer>
   <?php } ?>
  </div>
        <style type="text/css">
        <?php echo ot_get_option( 'unica_css' ); ?>
        </style>

      
        <script type="text/javascript">
        <?php echo ot_get_option( 'unica_js' ); ?>
        </script>
<?php wp_footer(); ?> 

</body>

</html>