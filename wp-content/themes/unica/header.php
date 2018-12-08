<?php
/**
 * header.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.0
 * 
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>  
</head>

<body <?php body_class(); ?>>
 <div id="preloader">
   <div class="pulse bg-main"></div>
 </div>
  <div class="wrapper h-card">

    <!-- BEGIN NAV-->
	<?php if( ! ot_get_option( 'unica_logo' ) || ! ot_get_option( 'unica_logotext' ) ){ ?>
	     <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="no-logo" title="<?php bloginfo('name'); ?>"><?php esc_html_e('Unica','unica'); ?></a>
	<?php } ?>

    <div class="main-nav">
		<nav style="background-color:<?php echo ot_get_option( 'menu_color' ); ?>">
	    <div class="logo">
		   <?php if (ot_get_option( 'unica_logo' )) { ?>
			 <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php echo esc_url(ot_get_option( 'unica_logo' )); ?>" alt="<?php bloginfo('name'); ?>"></a>
		   <?php } else { ?>
			 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand" title="<?php bloginfo('name'); ?>"><?php echo esc_html(ot_get_option( 'unica_logotext' )); ?></a>
		   <?php } ?>
		</div>
			<?php 
			   wp_nav_menu(array(
			   'theme_location' => 'main-menu',
			   'container' => '',
			   'fallback_cb' => 'show_top_menu',   
			   'menu_id' => '',
			   'menu_class' => '',
			   'echo' => true,
			   'walker' => new unica_description_walker(),
			   'depth' => 0 
			)); 
			 ?>
		</nav>
      <div class="btn-icon btn-nav" style="color:<?php echo ot_get_option( 'menu_line' ); ?>">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
    </div>
    <!-- END NAV-->
