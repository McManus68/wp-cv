<?php

if ( ! class_exists( 'OT_Loader' )){
	function ot_get_option() {
		return false;
	}

	function get_option_tree() {
		return false;
	}
}

/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => 'General Config'
      ),
	 array(
        'id'          => 'menu_option',
        'title'       => 'Menu Option'
      ),
	 array(
        'id'          => 'color_option',
        'title'       => 'Color Option'
      ),	  
      array(
        'id'          => 'blog_settings',
        'title'       => 'Blog Settings'
      ),  	  
      array(
        'id'          => 'google_fonts',
        'title'       => 'Google Fonts'
      ),

      array(
        'id'          => 'typography',
        'title'       => 'Typography'
      ),
	  
	  array(
        'id'          => 'social',
        'title'       => 'Social'
      ),
	  array(
        'id'          => 'map_settings',
        'title'       => 'Map Settings'
      ),	 
      array(
        'id'          => 'copyright',
        'title'       => 'Footer / Copyright'
      )
 
    ),
    'settings'        => array(
	  array(
        'id'          => 'menu_color',
        'label'       => 'Select Menu Background Color',
        'desc'        => 'Color Option',
        'std'         => '#23373C',
        'type'        => 'colorpicker',
        'section'     => 'menu_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'menu_line',
        'label'       => 'Select Menu Color',
        'desc'        => 'Color Option',
        'std'         => '#23373C',
        'type'        => 'colorpicker',
        'section'     => 'menu_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'id'          => 'unica_color',
        'label'       => 'Select Main Color',
        'desc'        => 'Color Option',
        'std'         => '#23373C',
        'type'        => 'colorpicker',
        'section'     => 'color_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	

	  array(
        'id'          => 'unica_linkcolor',
        'label'       => 'Select Link Color(a)',
        'desc'        => 'Color Option',
        'std'         => '#23373C',
        'type'        => 'colorpicker',
        'section'     => 'color_option',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	  
	 array(
		'label'       => esc_html__( 'Logo', 'unica' ),
		'id'          => 'tab_logo',
		'type'        => 'tab',
		'section'     => 'general'
	  ),
	  
	array(
        'id'          => 'unica_logo',
        'label'       => 'Logo Image',
        'desc'        => 'Upload your own logo.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	array(
        'id'          => 'unica_logotext',
        'label'       => 'Logo Text',
        'desc'        => 'Add Logo Text',
        'std'         => 'Unica',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
      array(
        'label'       => esc_html__( 'Css', 'unica' ),
        'id'          => 'tab_css',
        'type'        => 'tab',
        'section'     => 'general'
      ),
      array(
        'id'          => 'unica_css',
        'label'       => 'Additional CSS',
        'desc'        => 'Additional css here (optional)',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Js', 'unica' ),
        'id'          => 'tab_js',
        'type'        => 'tab',
        'section'     => 'general'
      ),
       array(
        'id'          => 'unica_js',
        'label'       => 'Additional JS',
        'desc'        => 'Additional js here (optional)',
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

      array(
        'label'       => esc_html__( 'Header', 'unica' ),
        'id'          => 'tab_blogheader',
        'type'        => 'tab',
        'section'     => 'blog_settings'
      ),
	  
	array(
        'id'          => 'blog_header',
        'label'       => 'Blog Header Image',
        'desc'        => 'Upload your header img.',
        'std'         => '',
        'type'        => 'upload',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	array(
        'id'          => 'header_title',
        'label'       => 'Blog Header Title',
        'desc'        => 'Write a title for blog.',
        'std'         => 'MY BLOG',
        'type'        => 'text',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),

	array(
        'id'          => 'header_subtitle',
        'label'       => 'Blog Header SubTitle',
        'desc'        => 'Write a subtitle for blog.',
        'std'         => 'subtitle',
        'type'        => 'text',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),	
	  
      array(
        'label'       => esc_html__( 'Layouts', 'unica' ),
        'id'          => 'tab_bloglayouts',
        'type'        => 'tab',
        'section'     => 'blog_settings'
      ),
      array(
        'id'          => 'layout_set',
        'label'       => esc_html__( 'Blog Layout', 'unica' ),
        'desc'        => esc_html__( ' Left Sidebar - Right Sidebar - Full Width', 'unica' ),
        'std'         => 'right-sidebar',
        'type'        => 'radio-image',
        'section'     => 'blog_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),	  
	  
	 array(
	    'id'          => 'body_google_fonts',
	    'label'       => 'Google Fonts',
	    'desc'        => 'Add Google Font and after the save settings follow these steps Dashboard > Appearance > Theme Options > Typography',
	    'std'         => '',
	    'type'        => 'google-fonts',
	    'section'     => 'google_fonts',
	    'rows'        => '',
	    'post_type'   => '',
	    'taxonomy'    => '',
	    'min_max_step'=> '',
	    'class'       => '',
	    'condition'   => '',
	    'operator'    => 'and'
	),


      array(
        'label'       => esc_html__( 'General', 'unica' ),
        'id'          => 'tab_general',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'tipigrof',
        'label'       => esc_html__( 'Body Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H1 Title', 'unica' ),
        'id'          => 'tab_h1title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h1_tipigrof',
        'label'       => esc_html__( 'H1 Title Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H2 Title', 'unica' ),
        'id'          => 'tab_h2title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h2_tipigrof',
        'label'       => esc_html__( 'H2 Title Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H3 Title', 'unica' ),
        'id'          => 'tab_h3title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h3_tipigrof',
        'label'       => esc_html__( 'H3 Title Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H4 Title', 'unica' ),
        'id'          => 'tab_h4title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h4_tipigrof',
        'label'       => esc_html__( 'H4 Title Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H5 Title', 'unica' ),
        'id'          => 'tab_h5title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'h5_tipigrof',
        'label'       => esc_html__( 'H5 Title Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'H6 Title', 'unica' ),
        'id'          => 'tab_h6title',
        'type'        => 'tab',
        'section'     => 'typography'
      ),


      array(
        'id'          => 'h6_tipigrof',
        'label'       => esc_html__( 'H6 Title Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),

      array(
        'label'       => esc_html__( 'P(Content)', 'unica' ),
        'id'          => 'tab_pcontent',
        'type'        => 'tab',
        'section'     => 'typography'
      ),

      array(
        'id'          => 'p_tipigrof',
        'label'       => esc_html__( 'P(Content) Typography', 'unica' ),
        'desc'        => 'The Typography option type is for adding typography styles to your site.',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'typography',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ), 
	  
      array(
        'id'          => 'unica_socialicons',
        'label'       => 'Set Footer Social Icon',
        'desc'        => 'Create Social Icons',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'social',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'settings'    => array( 

          array(
            'id'          => 'unica_sociallink',
            'label'       => 'Link',
            'desc'        => 'Add Your Link',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),

          array(
            'id'          => 'unica_socialicon',
            'label'       => 'Icon Name',
            'desc'        => 'Add Your Icon : facebook',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )

        )
      ),
      array(
        'id'          => 'unica_mapapi',
        'label'       => 'Google Map Api Key',
        'desc'        => 'add your google map api key',
        'std'         => '',
        'type'        => 'text',
        'section'     => 'map_settings',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
      array(
        'id'          => 'unica_copyright1',
        'label'       => 'Footer Copyright',
        'desc'        => 'Footer Copyright',
        'std'         => 'Copyright 2016.KlbTheme . All rights reserved',
        'type'        => 'text',
        'section'     => 'copyright',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
 
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}