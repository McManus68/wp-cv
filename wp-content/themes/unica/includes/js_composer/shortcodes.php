<?php

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Filter
/*-----------------------------------------------------------------------------------*/

vc_remove_element( "vc_gmaps");
vc_remove_element( "vc_wp_search");
vc_remove_element(  "vc_wp_meta" );
vc_remove_element(  "vc_wp_recentcomments" );
vc_remove_element(  "vc_wp_calendar" );
vc_remove_element(  "vc_wp_pages" );
vc_remove_element(  "vc_wp_tagcloud" );
vc_remove_element(  "vc_wp_custommenu" );
vc_remove_element(  "vc_wp_text" );
vc_remove_element(  "vc_wp_posts" );
vc_remove_element(  "vc_wp_categories" );
vc_remove_element(  "vc_wp_archives" );
vc_remove_element(  "vc_wp_rss" );
vc_remove_element(  "vc_progress_bar" );
vc_remove_element(  "vc_message" );
vc_set_as_theme( $disable_updater = false ); 
vc_is_updater_disabled();

function unica_vc_remove_woocommerce() {
    if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
        vc_remove_element( 'woocommerce_cart' );
        vc_remove_element( 'woocommerce_checkout' );
        vc_remove_element( 'woocommerce_order_tracking' );
        vc_remove_element( 'woocommerce_my_account' );
        vc_remove_element( 'recent_products' );
        vc_remove_element( 'featured_products' );
        vc_remove_element( 'product' );
        vc_remove_element( 'products' );
        vc_remove_element( 'add_to_cart' );
        vc_remove_element( 'add_to_cart_url' );
        vc_remove_element( 'product_page' );
        vc_remove_element( 'product_category' );
        vc_remove_element( 'product_categories' );
        vc_remove_element( 'sale_products' );
        vc_remove_element( 'best_selling_products' );
        vc_remove_element( 'top_rated_products' );
        vc_remove_element( 'product_attribute' );
        vc_remove_element( 'related_products' );
    }
}
// Hook for admin editor.
add_action( 'vc_build_admin_page', 'unica_vc_remove_woocommerce', 11 );
// Hook for frontend editor.
add_action( 'vc_load_shortcode', 'unica_vc_remove_woocommerce', 11 );


/*-----------------------------------------------------------------------------------*/
/*  Row Overlay Color Settings
/*-----------------------------------------------------------------------------------*/

$attributes = array(
		   array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Overlay Color', 'unica' ),
				'param_name' => 'overlaycolor',
				'description' => esc_html__( 'Set parallax overlay color', 'unica' ),
				'group' => 'Overlay Color',
				'dependency' => array(
					'element' => 'parallax',
					'value' => array(
                                     'content-moving',
                                     'content-moving-fade'
                               )
				),
			),
	
);
vc_add_params( 'vc_row', $attributes );

/*-----------------------------------------------------------------------------------*/
/* Unica Button
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'unica_button_integrateWithVC' );
function unica_button_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Buttons", "unica" ), 
      "base" => "button_unica",
	  "category" => "Unica", 	  
      "params" => array(
			 array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'unica' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Add a url for your icon', 'unica' ),
			'group' => 'Button',
			),
			array(
			 'type' => 'dropdown',
			 'heading' => esc_html__( 'Button Type', 'unica' ),
			 'param_name' => 'btn_type',
			 'group' => 'Button',
			 'value' => array(
			  esc_html__( 'Default button', 'unica' ) => '1',
			  esc_html__( 'Default small button', 'unica' ) => '2',
			  esc_html__( 'Default large button', 'unica' ) => '3',     
			  esc_html__( 'Secondary button', 'unica' ) => '4',     
			  esc_html__( 'Secondary small button', 'unica' ) => '5',     
			  esc_html__( 'Secondary large button', 'unica' ) => '6',     
			 ),
			 'description' => esc_html__( 'Select predefined list design ', 'unica' ),   
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Button Alignment', 'unica' ),
				'param_name' => 'btnalignment',
				'value' => array(
					esc_html__( 'Select', 'unica' ) => 'select-type',
					esc_html__( 'Left', 'unica' ) => 'left',
					esc_html__( 'Center', 'unica' ) => 'center',
					esc_html__( 'Right', 'unica' ) => 'right',						
				),		
				'description' => esc_html__( 'Select button alignment.', 'unica' ),
				'group' => 'Alignment',
			),			
			array(
			    'type' => 'checkbox',
			    'param_name' => 'icons',
			    'heading' => esc_html__( 'Do you want to use icon in button ?', 'unica' ),
			    'description' => esc_html__( 'If you want a icon you can check it.', 'unica' ),
			    'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			    'group' => 'Icons',
			),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon', 'unica' ),
				'param_name' => 'icon_fontawesome',
				'value' => '',
				'group' => 'Icons',
				'dependency' => array(
						'element' => 'icons',
						'value' => 'yes',
					   ),
				'settings' => array(
					'emptyIcon' => false, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 50, // default 100, how many icons per/page to display
					
				),
				'description' => esc_html__( 'Select icon from library.', 'unica' ),				
			),
		   array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Button Hover Color', 'unica' ),
				'param_name' => 'hovercolor',
				'description' => esc_html__( 'Set your button hover color.', 'unica' ),
				'group' => 'Colors',
			),
		   array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Button Background Color', 'unica' ),
				'param_name' => 'backgroundcolor',
				'description' => esc_html__( 'Set your button background color.', 'unica' ),
				'group' => 'Colors',
			),			
		   array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Button Color', 'unica' ),
				'param_name' => 'buttoncolor',
				'description' => esc_html__( 'Set your button color.', 'unica' ),
				'group' => 'Colors',
			),
		   array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Button Border Color', 'unica' ),
				'param_name' => 'bordercolor',
				'description' => esc_html__( 'Set your button border color.', 'unica' ),
				'group' => 'Colors',
			),			
        ),
  ) );
}
/*-----------------------------------------------------------------------------------*/
/* Unica Portfolio
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'unica_portfolio_integrateWithVC' );
function unica_portfolio_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Portfolio", "unica" ), 
      "base" => "portfolio",
	  "category" => "Unica", 	  
      "params" => array(
       array(
		   'type' => 'textfield',
		   'heading' => esc_html__( 'Post count per page', 'unica' ),
		   'param_name' => 'posts',
		   'description' => esc_html__( 'Default 5 .', 'unica' ),
		   'admin_label' => true ,
		   ),
		   array(
		   'type' => 'textfield',
		   'heading' => esc_html__( 'Categories', 'unica' ),
		   'param_name' => 'categories',
		   'description' => esc_html__( 'Choose categories.Only show chosen categories.Default "all"', 'unica' ),
		   'admin_label' => true ,
		   ),
		   array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Filter Color', 'unica' ),
				'param_name' => 'filtercolor',
				'description' => esc_html__( 'Set your filter color.', 'unica' ),
				'group' => 'Colors',
		   ),	
		   array(
			'type' => 'checkbox',
			'param_name' => 'gallery',
			'heading' => esc_html__( 'Use portfolio as a gallery ?', 'unica' ),
			'description' => esc_html__( 'You want to use gallery ?', 'unica' ),
			'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
		   ),
		   array(
		   'type' => 'textfield',
		   'heading' => esc_html__( 'Thumbnail width', 'unica' ),
		   'param_name' => 'width',
		   'description' => esc_html__( 'Default 750', 'unica' ),
		   'group' => 'With&Height',
		   ),
		   array(
		   'type' => 'textfield',
		   'heading' => esc_html__( 'Thumbnail height', 'unica' ),
		   'param_name' => 'height',
		   'description' => esc_html__( 'Default 500', 'unica' ),
		   'group' => 'With&Height',
		   ),			   
        ),
  ) );
}


/*-----------------------------------------------------------------------------------*/
/*	Unica Section Title
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'title_integrateWithVC' );
function title_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Title", "unica" ), 
      "base" => "title_unica", 
	  "category" => "Unica", 	 	  
      "params" => array( 

			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'unica' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Add your section title.', 'unica' ),
				'admin_label' => true ,
				'group' => 'Titles',
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Title Color', 'unica' ),
				'param_name' => 'bgcolor',
				'description' => esc_html__( 'Set your title color.', 'unica' ),
				'group' => 'Colors',
			),
			array(
			   'type' => 'checkbox',
			   'param_name' => 'sepon',
			   'heading' => esc_html__( 'Add a seperator ?', 'unica' ),
			   'description' => esc_html__( 'You want to use seperator after title ?', 'unica' ),
			   'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			   'group' => 'Titles',
			  ),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Seperator Color', 'unica' ),
				'param_name' => 'sepcolor',
				'description' => esc_html__( 'Set your seperator color.', 'unica' ),
				'group' => 'Colors',
			),
		
      ),
   ) );
}
class WPBakeryShortCode_title extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	Unica Intro Header Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'intro_integrateWithVC' );
function intro_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Intro", "unica" ), 
      "base" => "header_unica", 
	  "category" => "Unica", 	 
      "params" => array( 
			array(
			'type' => 'checkbox',
			'param_name' => 'icon',
			'heading' => esc_html__( 'Do you want to use icon ?', 'unica' ),
			'description' => esc_html__( 'Icon', 'unica' ),
			'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			'group' =>'Icon',
			 ),
			array(
				'type' => 'iconpicker',
				'heading' => esc_html__( 'Icon', 'unica' ),
				'param_name' => 'icon_fontawesome',
				'value' => 'fa fa-info-circle',
				'group' =>'Icon',
				'settings' => array(
					'emptyIcon' => false, // default true, display an "EMPTY" icon?
					'iconsPerPage' => 200, // default 100, how many icons per/page to display
					
				),
				'description' => esc_html__( 'Select icon from library.', 'unica' ),
				'dependency' => array(
						'element' => 'icon',
						'value' => 'yes',
					),					
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Icon Color', 'unica' ),
				'param_name' => 'bgcolor',
				'description' => esc_html__( 'Set your Icons color.', 'unica' ),
				'group' =>'Icon',
				'dependency' => array(
						'element' => 'icon',
						'value' => 'yes',
					),
			),
			array(
			'type' => 'checkbox',
			'param_name' => 'logo',
			'heading' => esc_html__( 'Do you want to use logo ?', 'unica' ),
			'description' => esc_html__( 'Logo', 'unica' ),
			'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			'group' =>'Logo',
			 ),
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Logo', 'unica' ),
				'param_name' => 'image_urlt',
				'description' => esc_html__( 'Add your logo ', 'unica' ),
				'group' =>'Logo',
				'dependency' => array(
						'element' => 'logo',
						'value' => 'yes',
					),
			),	
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'unica' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Add your title.', 'unica' ),
				'admin_label' => true ,
				'group' => 'Titles',
			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'First SubTitle', 'unica' ),
				'param_name' => 'firstsubtitle',
				'description' => esc_html__( 'Add your first subtitle.', 'unica' ),
				'admin_label' => true ,
				'group' => 'Titles',
			),
			array(
			'type' => 'checkbox',
			'param_name' => 'sepon',
			'heading' => esc_html__( 'Do you want to use seperator after subtitle ?', 'unica' ),
			'description' => esc_html__( 'Seperator', 'unica' ),
			'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			'group' =>'Titles',
			 ),			

			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Subtitles', 'unica' ),
				'param_name' => 'values',
				'value' => urlencode( json_encode( array(
					array(
						'name' => esc_html__( 'Joe', 'unica' )	
					),
				) ) ),
				'group' => 'Titles',
				'params' => array(
				
					 array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Sub Title', 'unica' ),
					'param_name' => 'subtitle',
					'description' => esc_html__( 'Add your sub title.', 'unica' ),
					'admin_label' => true ,
					 ),	
					array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Subtitle Color', 'unica' ),
						'param_name' => 'subtitlecolor',
						'description' => esc_html__( 'Set your subtitle color.', 'unica' ),
					),						 

				)

			),
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'After Subtitle', 'unica' ),
				'param_name' => 'aftersubtitle',
				'description' => esc_html__( 'After Subtitle.', 'unica' ),
				'admin_label' => true ,
				'group' => 'Titles',
			),
			array(
				'type' => 'dropdown',
				'heading' => esc_html__( 'Content Alignment', 'unica' ),
				'param_name' => 'contentalignment',
				'value' => array(
					esc_html__( 'Select', 'unica' ) => 'select-type',
					esc_html__( 'Left', 'unica' ) => 'left',
					esc_html__( 'Center', 'unica' ) => 'center',
					esc_html__( 'Right', 'unica' ) => 'right',						
				),		
				'description' => esc_html__( 'Select content alignment.', 'unica' ),
				'group' => 'Content Alignment',
			),				
			 array(
			'type' => 'vc_link',
			'heading' => esc_html__( 'URL (Link)', 'unica' ),
			'param_name' => 'link',
			'description' => esc_html__( 'Add a url for your icon', 'unica' ),
			'group' => 'Button',
			),
			array(
			'type' => 'textfield',
			'heading' => esc_html__( 'Button Radius', 'unica' ),
			'param_name' => 'buttonradius',
			'description' => esc_html__( 'Set button radius.', 'unica' ),
			'admin_label' => true ,
			'group' => 'Button',
			),
			array(
			'type' => 'checkbox',
			'param_name' => 'social',
			'heading' => esc_html__( 'Do you want to use social icon ?', 'unica' ),
			'description' => esc_html__( 'Social Icons', 'unica' ),
			'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			'group' =>'Social',
			 ),	
			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Social Icons', 'unica' ),
				'param_name' => 'value',
				'value' => urlencode( json_encode( array(
					array(
						'name' => esc_html__( 'Joe', 'unica' )	
					),
				) ) ),
				'group' => 'Social',
				'dependency' => array(
					'element' => 'social',
					'value' => 'yes',
				 ),
				'params' => array(
				
					 array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Social Url', 'unica' ),
					'param_name' => 'socialurl',
					'description' => esc_html__( 'Add your social url.', 'unica' ),
					'admin_label' => true ,
					 ),	
					array(
						'type' => 'iconpicker',
						'heading' => esc_html__( 'Icon', 'unica' ),
						'param_name' => 'icon_fontawesome',
						'value' => 'fa fa-info-circle',
						'settings' => array(
							'emptyIcon' => false, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 50, // default 100, how many icons per/page to display
							
						),
						'description' => esc_html__( 'Select icon from library.', 'unica' ),					
					),
					array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Social Icon Color', 'unica' ),
						'param_name' => 'socialcolor',
						'description' => esc_html__( 'Set your social icon color.', 'unica' ),
					),	 

				)

			),	
			array(
			'type' => 'checkbox',
			'param_name' => 'particles',
			'heading' => esc_html__( 'Do you want to use particles ?', 'unica' ),
			'description' => esc_html__( 'Use particles bottom of section.', 'unica' ),
			'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			'group' =>'Icon',
			 ),			
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Title Color', 'unica' ),
				'param_name' => 'titlecolor',
				'description' => esc_html__( 'Set your title color.', 'unica' ),
				'group' => 'Colors',
			),	
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'First Subtitle Color', 'unica' ),
				'param_name' => 'fsubtitlecolor',
				'description' => esc_html__( 'Set your first subtitle color.', 'unica' ),
				'group' => 'Colors',
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'After Subtitle Color', 'unica' ),
				'param_name' => 'aftersubcolor',
				'description' => esc_html__( 'Set your after subtitle text color.', 'unica' ),
				'group' => 'Colors',
			),				
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Button Text Color', 'unica' ),
				'param_name' => 'butoncolor',
				'description' => esc_html__( 'Set your buton text color.', 'unica' ),
				'group' => 'Colors',
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Button Border Color', 'unica' ),
				'param_name' => 'buttonbordercolor',
				'description' => esc_html__( 'Set your buton border color.', 'unica' ),
				'group' => 'Colors',
			),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Seperator Color', 'unica' ),
				'param_name' => 'sepcolor',
				'description' => esc_html__( 'Set your seperator color.', 'unica' ),
				'group' => 'Colors',
			),			
      ),
   ) );
}
class WPBakeryShortCode_intro extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Unica About Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'about_integrateWithVC' );
function about_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica About", "unica" ), 
      "base" => "about_unica",
	  "category" => "Unica",	  
      "params" => array( 

			//Image
			array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Side Image', 'unica' ),
				'param_name' => 'image_url',
				'description' => esc_html__( 'Add a  image', 'unica' ),
			),
			//Image
			array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Signature Image', 'unica' ),
			'param_name' => 'image_urlt',
			'description' => esc_html__( 'Add  image for signature', 'unica' ),
			),			
			array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'unica' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Add your title.', 'unica' ),
				'admin_label' => true ,
				'group' => 'Titles and Content',
			),
			array(
				'type' => 'textarea_html',
				'heading' => esc_html__( 'Content', 'unica' ),
				'param_name' => 'content',
				'description' => esc_html__( 'Add your section content.', 'unica' ),
				'group' => 'Titles and Content',
			),
			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Social Icons', 'unica' ),
				'param_name' => 'values',
				'value' => urlencode( json_encode( array(
						array(
							'name' => esc_html__( 'Joe', 'unica' )
						),
					) ) ),
					'group' => 'Add Social',
					'params' => array(
					
						array(
							'type' => 'iconpicker',
							'heading' => esc_html__( 'Icon', 'unica' ),
							'param_name' => 'icon_fontawesome',
							'value' => 'fa fa-info-circle',
							'settings' => array(
								'emptyIcon' => false, // default true, display an "EMPTY" icon?
								'iconsPerPage' => 200, // default 100, how many icons per/page to display
								
							),
							'description' => esc_html__( 'Select icon from library.', 'unica' ),
							'admin_label' => true					
						),
						 array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Social Url', 'unica' ),
						'param_name' => 'icon_link',
						'description' => esc_html__( 'Add your social url.', 'unica' ),
						 ),	

						)

				),

		
      ),
   ) );
}
class WPBakeryShortCode_about extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Unica Experiences Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'exper_integrateWithVC' );
function exper_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Experiences", "unica" ), 
      "base" => "exper_unica",
	  "category" => "Unica",
      "params" => array( 

				array(
					'type' => 'param_group',
					'heading' => esc_html__( 'Subtitles', 'unica' ),
					'param_name' => 'values',
					'value' => urlencode( json_encode( array(
						array(
							'name' => esc_html__( 'Joe', 'unica' )	
						),
					) ) ),
					'params' => array(
						array(
						'type' => 'iconpicker',
						'heading' => esc_html__( 'Icon', 'unica' ),
						'param_name' => 'icon_fontawesome',
						'value' => 'fa fa-info-circle',
						'settings' => array(
							'emptyIcon' => false, // default true, display an "EMPTY" icon?
							'iconsPerPage' => 200, // default 100, how many icons per/page to display
							
						),
						'description' => esc_html__( 'Select icon from library.', 'unica' ),
						'admin_label' => true					
						),
						array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Icon Background Color', 'unica' ),
						'param_name' => 'bgcolor',
						'description' => esc_html__( 'Set your Icons color.', 'unica' ),
						),
						 array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Date', 'unica' ),
						'param_name' => 'years',
						'description' => esc_html__( 'Add years.', 'unica' ),
						'admin_label' => true ,
						 ),
						 array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Title', 'unica' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Add your title.', 'unica' ),
						'admin_label' => true ,
						 ),	
						 array(
						'type' => 'textarea',
						'heading' => esc_html__( 'Content', 'unica' ),
						'param_name' => 'content',
						'description' => esc_html__( 'Add your content.', 'unica' ),
						 ),							 

					)

				),


			
			
      ),
   ) );
}
class WPBakeryShortCode_exper extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Unica Services Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'services_integrateWithVC' );
function services_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Services", "unica" ), 
      "base" => "services_unica",
	  "category" => "Unica",
      "params" => array( 

				 array(
				'type' => 'checkbox',
				'param_name' => 'justbig',
				'heading' => esc_html__( 'Use big icon without borders ?', 'unica' ),
				'description' => esc_html__( 'You want to use big icons ?', 'unica' ),
				'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
				),	
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'Icon', 'unica' ),
					'param_name' => 'icon_fontawesome',
					'value' => 'fa fa-info-circle',
					'settings' => array(
						'emptyIcon' => false, // default true, display an "EMPTY" icon?
						'iconsPerPage' => 200, // default 100, how many icons per/page to display
						
					),
					'description' => esc_html__( 'Select icon from library.', 'unica' ),				
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Icon Color', 'unica' ),
					'param_name' => 'bgcolor',
					'description' => esc_html__( 'Set your Icons color.', 'unica' ),
					'group' => 'Colors',
				),
				array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Box Background Color', 'unica' ),
				'param_name' => 'iconbg',
				'description' => esc_html__( 'Set your box background color.', 'unica' ),
				'group' => 'Colors',
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Box Border Color', 'unica' ),
					'param_name' => 'boxcolor',
					'description' => esc_html__( 'Set Box Border color.', 'unica' ),
					'group' => 'Colors',
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'TitleColor', 'unica' ),
					'param_name' => 'titlecolor',
					'description' => esc_html__( 'Set your title color.', 'unica' ),
					'group' => 'Colors',
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Content Color', 'unica' ),
					'param_name' => 'contentcolor',
					'description' => esc_html__( 'Set your content color.', 'unica' ),
					'group' => 'Colors',
				),
				 array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'unica' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Add your title.', 'unica' ),
				'admin_label' => true ,
				 ),
				 array(
				'type' => 'textarea',
				'heading' => esc_html__( 'Content', 'unica' ),
				'param_name' => 'content',
				'description' => esc_html__( 'Add your content.', 'unica' ),		
				 ),							 
	
      ),
   ) );
}
class WPBakeryShortCode_services extends WPBakeryShortCode {
}


/*-----------------------------------------------------------------------------------*/
/*	Unica Skills Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'skill_integrateWithVC' );
function skill_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Skills", "unica" ), 
      "base" => "skill_unica", 
	  "category" => "Unica",
      "params" => array( 

				array(
					'type' => 'param_group',
					'heading' => esc_html__( 'Subtitles', 'unica' ),
					'param_name' => 'values',
					'value' => urlencode( json_encode( array(
						array(
							'name' => esc_html__( 'Joe', 'unica' )	
						),
					) ) ),
					'params' => array(
						 array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Your Skill', 'unica' ),
						'param_name' => 'yourskill',
						'description' => esc_html__( 'Add skill.', 'unica' ),
						'admin_label' => true , 
						 ),

						array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Skill Color', 'unica' ),
						'param_name' => 'skillcolor',
						'description' => esc_html__( 'Set your Skill color.', 'unica' ),
						),
						 array(
						'type' => 'textfield',
						'heading' => esc_html__( '%', 'unica' ),
						'param_name' => 'numbers',
						'description' => esc_html__( 'Add percent.', 'unica' ),
						'admin_label' => true ,
						 ),
						array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Progressbar Color', 'unica' ),
						'param_name' => 'barcolor',
						'description' => esc_html__( 'Set your Progressbar color.', 'unica' ),	
						),						 

					)

				),
		
      ),
   ) );
}
class WPBakeryShortCode_skill extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Unica Textbox Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'textbox_integrateWithVC' );
function textbox_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Textbox", "unica" ), 
      "base" => "textbox_unica",
	  "category" => "Unica",
      "params" => array( 

						 array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Title', 'unica' ),
						'param_name' => 'title',
						'description' => esc_html__( 'Add your title.', 'unica' ),
						'admin_label' => true ,
						'group' => 'Title&Content',
						 ),

						array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Title Color', 'unica' ),
						'param_name' => 'titlecolor',
						'description' => esc_html__( 'Set your title color.', 'unica' ),
						'group' => 'Colors',
						),
						 array(
					   'type' => 'checkbox',
					   'param_name' => 'sepon',
					   'heading' => esc_html__( 'Add a seperator ?', 'unica' ),
					   'description' => esc_html__( 'You want to use seperator after title ?', 'unica' ),
					   'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
					   'group' => 'Title&Content',
						  ),
						array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Seperator Color', 'unica' ),
						'param_name' => 'bgcolor',
						'description' => esc_html__( 'Set your seperator color.', 'unica' ),
						'group' => 'Colors',
						),
						 array(
						'type' => 'textarea_html',
						'heading' => esc_html__( 'Content', 'unica' ),
						'param_name' => 'content',
						'description' => esc_html__( 'Add your content.', 'unica' ),
						'group' => 'Title&Content',
						 ),	
						 array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Content Color', 'unica' ),
						'param_name' => 'contentcolor',
						'description' => esc_html__( 'Set your content color.', 'unica' ),
						'group' => 'Colors',
						),

			
			
      ),
   ) );
}
class WPBakeryShortCode_textbox extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Unica Testimonials Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'testimonials_integrateWithVC' );
function testimonials_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Testimonials", "unica" ), 
      "base" => "testimonials_unica", 
	  "category" => "Unica",
      "params" => array( 



			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Testimonials', 'unica' ),
				'param_name' => 'values',
				'value' => urlencode( json_encode( array(
						array(
							'name' => esc_html__( 'Joe', 'unica' )
						),
					) ) ),			
					'params' => array(
					
						//Image
						array(
						'type' => 'attach_image',
						'heading' => esc_html__( 'Testimonials Image', 'unica' ),
						'param_name' => 'image_url',
						'description' => esc_html__( 'Add a image', 'unica' ),
						),	
						array(
						'type' => 'textarea',
						'heading' => esc_html__( 'Content', 'unica' ),
						'param_name' => 'content',
						'description' => esc_html__( 'Add your content.', 'unica' ),
						'group' => 'Titles and Content',
						),
						 array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Content Color', 'unica' ),
						'param_name' => 'contentcolor',
						'description' => esc_html__( 'Set your content color.', 'unica' ),
						'group' => 'Colors',
						),
						array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Client Name', 'unica' ),
						'param_name' => 'client',
						'description' => esc_html__( 'Add your client.', 'unica' ),
						'admin_label' => true ,
						'group' => 'Titles and Content',
						),
						 array(
						'type' => 'colorpicker',
						'heading' => esc_html__( 'Client Color', 'unica' ),
						'param_name' => 'clientcolor',
						'description' => esc_html__( 'Set your client color.', 'unica' ),
						'group' => 'Colors',
						),
						)

				),
				 array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Dot Color', 'unica' ),
					'param_name' => 'dotcolors',
					'description' => esc_html__( 'Set carousel dot color.', 'unica' ),
					'group' => 'Colors',
				),

				 array(
					'type' => 'textfield',
					'heading' => esc_html__( 'AutoPlay Time', 'unica' ),
					'param_name' => 'time',
					'description' => esc_html__( 'Change to any integrer for example 5000 to play every 5 seconds. If you set as empty default speed will be 5 seconds.', 'unica' ),
					'group' => 'AutoPlay',
				),
		
      ),
   ) );
}
class WPBakeryShortCode_testimonials extends WPBakeryShortCode {
}

/*-----------------------------------------------------------------------------------*/
/*	Unica Clients Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'clients_integrateWithVC' );
function clients_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Clients", "unica" ), 
      "base" => "clients_unica",
	  "category" => "Unica",	  
      "params" => array( 



			array(
				'type' => 'param_group',
				'heading' => esc_html__( 'Clients', 'unica' ),
				'param_name' => 'values',
				'value' => urlencode( json_encode( array(
						array(
							'name' => esc_html__( 'Joe', 'unica' )
						),
					) ) ),			
					'params' => array(
					
						//Image
						array(
						'type' => 'attach_image',
						'heading' => esc_html__( 'Clients Image', 'unica' ),
						'param_name' => 'image_url',
						'description' => esc_html__( 'Add  image', 'unica' ),
						),
						array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Logo Width', 'unica' ),
						'param_name' => 'setwidth',
						'description' => esc_html__( 'Set client pic width.', 'unica' ),
						'admin_label' => true ,		
						),
						array(
						'type' => 'textfield',
						'heading' => esc_html__( 'Logo Height', 'unica' ),
						'param_name' => 'setheight',
						'description' => esc_html__( 'Set client pic height.', 'unica' ),
						'admin_label' => true ,				
						),
						)

				),

		 array(
			'type' => 'textfield',
			'heading' => esc_html__( 'AutoPlay Time', 'unica' ),
			'param_name' => 'time',
			'description' => esc_html__( 'Change to any integrer for example 5000 to play every 5 seconds. If you set as empty default speed will be 5 seconds.', 'unica' ),
			'group' => 'AutoPlay',
		),
		
      ),
   ) );
}
class WPBakeryShortCode_clients extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	Unica Contact Address Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'contact_integrateWithVC' );
function contact_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Contact Address", "unica" ), 
      "base" => "contact_unica",
	  "category" => "Unica",
      "params" => array( 


				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'Icon', 'unica' ),
					'param_name' => 'icon_fontawesome',
					'value' => 'fa fa-info-circle',
					'settings' => array(
						'emptyIcon' => false, // default true, display an "EMPTY" icon?
						'iconsPerPage' => 200, // default 100, how many icons per/page to display
						
					),
					'description' => esc_html__( 'Select icon from library.', 'unica' ),
					'admin_label' => true					
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Icon Color', 'unica' ),
					'param_name' => 'iconcolor',
					'description' => esc_html__( 'Set your Icons color.', 'unica' ),
					'group' => 'Colors',
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Box Border Color.', 'unica' ),
					'param_name' => 'bordercolor',
					'description' => esc_html__( 'Set box or border color.', 'unica' ),
					'group' => 'Colors',
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Content Color', 'unica' ),
					'param_name' => 'contentcolor',
					'description' => esc_html__( 'Set your content color.', 'unica' ),
					'group' => 'Colors',
				),
				array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Box Background Color', 'unica' ),
					'param_name' => 'bgcolor',
					'description' => esc_html__( 'Set your box background color.', 'unica' ),
					'group' => 'Colors',
				),				
				 array(
				'type' => 'textarea_html',
				'heading' => esc_html__( 'Content', 'unica' ),
				'param_name' => 'content',
				'description' => esc_html__( 'Add your content.', 'unica' ),
				 ),							 
	
      ),
   ) );
}
class WPBakeryShortCode_contact extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	Unica Our Team Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'ourteam_integrateWithVC' );
function ourteam_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Clients", "unica" ), 
      "base" => "ourteam_unica",
	  "category" => "Unica",	  
      "params" => array( 

				array(
				'type' => 'attach_image',
				'heading' => esc_html__( 'Team Member Image', 'unica' ),
				'param_name' => 'image_url',
				'description' => esc_html__( 'Add image', 'unica' ),
				),
				array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Add Title', 'unica' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Add your title', 'unica' ),
				'admin_label' => true ,		
				),				
				array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Subtitle', 'unica' ),
				'param_name' => 'subtitle',
				'description' => esc_html__( 'Add your subtitle.', 'unica' ),		
				),
				array(
				'type' => 'textarea_html',
				'heading' => esc_html__( 'Content', 'unica' ),
				'param_name' => 'content',
				'description' => esc_html__( 'Add your content.', 'unica' ),		
				),				
				array(
					'type' => 'param_group',
					'heading' => esc_html__( 'Clients', 'unica' ),
					'param_name' => 'values',
					'group' => 'Socials',
					'value' => urlencode( json_encode( array(
							array(
								'name' => esc_html__( 'Joe', 'unica' )
							),
						) ) ),			
						'params' => array(
							
							array(
							'type' => 'textfield',
							'heading' => esc_html__( 'Social Url', 'unica' ),
							'param_name' => 'socialurl',
							'description' => esc_html__( 'Set team member social url.', 'unica' ),
							'admin_label' => true ,		
							),
							array(
								'type' => 'iconpicker',
								'heading' => esc_html__( 'Icon', 'unica' ),
								'param_name' => 'icon_fontawesome',
								'value' => 'fa fa-info-circle',
								'settings' => array(
									'emptyIcon' => false, // default true, display an "EMPTY" icon?
									'iconsPerPage' => 200, // default 100, how many icons per/page to display
									
								),
								'description' => esc_html__( 'Select icon from library.', 'unica' ),
				
							),
							)

					),

		
      ),
   ) );
}
class WPBakeryShortCode_ourteam extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	Unica Pricing Section
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'pricing_integrateWithVC' );
function pricing_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Pricing", "unica" ), 
      "base" => "pricing_unica", 
	  "category" => "Unica",
      "params" => array( 
				 array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Title', 'unica' ),
				'param_name' => 'title',
				'description' => esc_html__( 'Add title.', 'unica' ),
				'admin_label' => true , 
				'group' => 'Pricing Box',
				 ),
				 array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Currency', 'unica' ),
				'param_name' => 'currency',
				'description' => esc_html__( 'Add currency.', 'unica' ),
				'group' => 'Pricing Box',
				 ),
				 array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Amount', 'unica' ),
				'param_name' => 'amount',
				'description' => esc_html__( 'Add amount.', 'unica' ),
				'group' => 'Pricing Box',
				 ),					 
				 array(
				'type' => 'textfield',
				'heading' => esc_html__( 'Period', 'unica' ),
				'param_name' => 'period',
				'description' => esc_html__( 'Add pediod.', 'unica' ),
				'group' => 'Pricing Box',
				 ),	
				 array(
				'type' => 'checkbox',
				'param_name' => 'bestvalue',
				'heading' => esc_html__( 'Set this box as a best value', 'unica' ),
				'description' => esc_html__( 'If you want to set a best value you can check it.', 'unica' ),
				'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
				'group' => 'Pricing Box',
				),
				array(
					'type' => 'param_group',
					'heading' => esc_html__( 'List Item', 'unica' ),
					'param_name' => 'values',
					'group' => 'Pricing Box',				
					'value' => urlencode( json_encode( array(
						array(
							'name' => esc_html__( 'Joe', 'unica' )	
						),
					) ) ),
					'params' => array(

							 array(
							'type' => 'textfield',
							'heading' => esc_html__( 'List Item', 'unica' ),
							'param_name' => 'listitem',
							'description' => esc_html__( 'Add list item.', 'unica' ),
							'admin_label' => true ,	
							 ),	
					
					
					)

				),
			   array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Title Color', 'unica' ),
					'param_name' => 'titlecolor',
					'description' => esc_html__( 'Set your title color.', 'unica' ),
					'group' => 'Box Colors',
				),
			   array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Content Color', 'unica' ),
					'param_name' => 'contentcolor',
					'description' => esc_html__( 'Set your content color.', 'unica' ),
					'group' => 'Box Colors',
				),
			   array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Box Background Color', 'unica' ),
					'param_name' => 'bgcolor',
					'description' => esc_html__( 'Set your box background color.', 'unica' ),
					'group' => 'Box Colors',
				),				
				 array(
				'type' => 'vc_link',
				'heading' => esc_html__( 'URL (Link)', 'unica' ),
				'param_name' => 'link',
				'description' => esc_html__( 'Add a url for your icon', 'unica' ),
				'group' => 'Button',
				),
				array(
				 'type' => 'dropdown',
				 'heading' => esc_html__( 'Button Type', 'unica' ),
				 'param_name' => 'btn_type',
				 'group' => 'Button',
				 'value' => array(
				  esc_html__( 'Default button', 'unica' ) => '1',
				  esc_html__( 'Default small button', 'unica' ) => '2',
				  esc_html__( 'Default large button', 'unica' ) => '3',     
				  esc_html__( 'Secondary button', 'unica' ) => '4',     
				  esc_html__( 'Secondary small button', 'unica' ) => '5',     
				  esc_html__( 'Secondary large button', 'unica' ) => '6',     
				 ),
				 'description' => esc_html__( 'Select predefined list design ', 'unica' ),   
				),
				array(
					'type' => 'dropdown',
					'heading' => esc_html__( 'Button Alignment', 'unica' ),
					'param_name' => 'btnalignment',
					'value' => array(
						esc_html__( 'Select', 'unica' ) => 'select-type',
						esc_html__( 'Left', 'unica' ) => 'left',
						esc_html__( 'Center', 'unica' ) => 'center',
						esc_html__( 'Right', 'unica' ) => 'right',						
					),		
					'description' => esc_html__( 'Select button alignment.', 'unica' ),
					'group' => 'Button Alignment',
				),			
				array(
					'type' => 'checkbox',
					'param_name' => 'icons',
					'heading' => esc_html__( 'Do you want to use icon in button ?', 'unica' ),
					'description' => esc_html__( 'If you want a icon you can check it.', 'unica' ),
					'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
					'group' => 'Button Icon',
				),
				array(
					'type' => 'iconpicker',
					'heading' => esc_html__( 'Icon', 'unica' ),
					'param_name' => 'icon_fontawesome',
					'value' => '',
					'group' => 'Button Icon',
					'dependency' => array(
							'element' => 'icons',
							'value' => 'yes',
						   ),
					'settings' => array(
						'emptyIcon' => false, // default true, display an "EMPTY" icon?
						'iconsPerPage' => 50, // default 100, how many icons per/page to display
						
					),
					'description' => esc_html__( 'Select icon from library.', 'unica' ),				
				),
			   array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Button Hover Color', 'unica' ),
					'param_name' => 'hovercolor',
					'description' => esc_html__( 'Set your button hover color.', 'unica' ),
					'group' => 'Button Colors',
				),
			   array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Button Background Color', 'unica' ),
					'param_name' => 'backgroundcolor',
					'description' => esc_html__( 'Set your button background color.', 'unica' ),
					'group' => 'Button Colors',
				),			
			   array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Button Color', 'unica' ),
					'param_name' => 'buttoncolor',
					'description' => esc_html__( 'Set your button color.', 'unica' ),
					'group' => 'Button Colors',
				),
			   array(
					'type' => 'colorpicker',
					'heading' => esc_html__( 'Button Border Color', 'unica' ),
					'param_name' => 'bordercolor',
					'description' => esc_html__( 'Set your button border color.', 'unica' ),
					'group' => 'Button Colors',
				),					
		
      ),
   ) );
}
class WPBakeryShortCode_pricing extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	Unica Socials
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'socials_integrateWithVC' );
function socials_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Social", "unica" ), 
      "base" => "socials_unica",
	  "category" => "Unica",	  
      "params" => array( 

				array(
					'type' => 'param_group',
					'heading' => esc_html__( 'Social', 'unica' ),
					'param_name' => 'values',
					'group' => 'Socials',
					'value' => urlencode( json_encode( array(
							array(
								'name' => esc_html__( 'Joe', 'unica' )
							),
						) ) ),			
						'params' => array(
							
							array(
								'type' => 'textfield',
								'heading' => esc_html__( 'Social Url', 'unica' ),
								'param_name' => 'socialurl',
								'description' => esc_html__( 'Set team member social url.', 'unica' ),
								'admin_label' => true ,		
							),
							array(
								'type' => 'iconpicker',
								'heading' => esc_html__( 'Icon', 'unica' ),
								'param_name' => 'icon_fontawesome',
								'value' => 'fa fa-info-circle',
								'settings' => array(
									'emptyIcon' => false, // default true, display an "EMPTY" icon?
									'iconsPerPage' => 200, // default 100, how many icons per/page to display
									
								),
								'description' => esc_html__( 'Select icon from library.', 'unica' ),
				
							),
							array(
								'type' => 'colorpicker',
								'heading' => esc_html__( 'Icon Color', 'unica' ),
								'param_name' => 'iconcolor',
								'description' => esc_html__( 'Set your icon color.', 'unica' ),
							),
							array(
								'type' => 'colorpicker',
								'heading' => esc_html__( 'Icon Hover Color', 'unica' ),
								'param_name' => 'hovercolor',
								'description' => esc_html__( 'Set your icon hover color.', 'unica' ),
							),							
							)

				),
				array(
			    'type' => 'checkbox',
			    'param_name' => 'addsep',
			    'heading' => esc_html__( 'Do you want to use seperator after social ?', 'unica' ),
			    'description' => esc_html__( 'If you want a seperator you can check it.', 'unica' ),
			    'value' => array( esc_html__( 'Yes', 'unica' ) => 'yes' ),
			    'group' => 'Seperator',
				),
			array(
				'type' => 'colorpicker',
				'heading' => esc_html__( 'Seperator Color', 'unica' ),
				'param_name' => 'sepcolor',
				'description' => esc_html__( 'Set your seperator color.', 'unica' ),
				'group' => 'Seperator',
			),
		
      ),
   ) );
}
class WPBakeryShortCode_socials extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/*	UnicaGoogle Map
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'unica_map_integrateWithVC' );
function unica_map_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Google Map", "unica" ),
      "base" => "map_container",
	  "category" => "Unica", 
      "params" => array(


        array(
            "type" => "textfield",
            "heading" => esc_html__("Latitude", "unica"),
            "param_name" => "latitude",
            "description" => esc_html__("Add latitude for google map", "unica")
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Longitude', 'unica' ),
            'param_name' => 'longitude',
            "description" => esc_html__("Add longitude for google map", "unica"),
        ),

        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Zoom', 'unica' ),
            'param_name' => 'zoom',
            "description" => esc_html__("Adjust zoom for google map", "unica"),
        ),
		array(
			'type' => 'attach_image',
			'heading' => esc_html__( 'Marker Image', 'unica' ),
			'param_name' => 'image_url',
			'description' => esc_html__( 'Add your marker', 'unica' ),
		),	
        array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Height', 'unica' ),
            'param_name' => 'height',
            "description" => esc_html__("Adjust height for google map", "unica"),
        ),
		array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Title', 'unica' ),
            'param_name' => 'marktitle',
			'group' => 'Description',
            "description" => esc_html__("Add title", "unica"),
        ),
		array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Description', 'unica' ),
            'param_name' => 'markdesc',
			'group' => 'Description',
            "description" => esc_html__("Add description", "unica"),
        ),
		array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Phone', 'unica' ),
            'param_name' => 'markphone',
			'group' => 'Description',
            "description" => esc_html__("Add phone", "unica"),
        ),
		array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Email', 'unica' ),
            'param_name' => 'markemail',
			'group' => 'Description',
            "description" => esc_html__("Add email", "unica"),
        ),
		array(
            'type' => 'textfield',
            'heading' => esc_html__( 'Website', 'unica' ),
            'param_name' => 'markwebsite',
			'group' => 'Description',
            "description" => esc_html__("Add website", "unica"),
        ),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Water Color', 'unica' ),
			'param_name' => 'watercolor',
			'description' => esc_html__( 'Water color', 'unica' ),
			'group' => 'Colors',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Road Color', 'unica' ),
			'param_name' => 'roadcolor',
			'description' => esc_html__( 'Road color', 'unica' ),
			'group' => 'Colors',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Land Color', 'unica' ),
			'param_name' => 'landcolor',			
			'description' => esc_html__( 'Land color', 'unica' ),
			'group' => 'Colors',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Arterial Road Color', 'unica' ),
			'param_name' => 'arterialcolor',			
			'description' => esc_html__( 'Arterial Road color', 'unica' ),
			'group' => 'Colors',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Local Road Color', 'unica' ),
			'param_name' => 'localroadcolor',			
			'description' => esc_html__( 'Local Road color', 'unica' ),
			'group' => 'Colors',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Park Color', 'unica' ),
			'param_name' => 'parkcolor',			
			'description' => esc_html__( 'Park color', 'unica' ),
			'group' => 'Colors',
		),
		array(
			'type' => 'colorpicker',
			'heading' => esc_html__( 'Description Link Color', 'unica' ),
			'param_name' => 'acolor',			
			'description' => esc_html__( 'Url Color', 'unica' ),
			'group' => 'Colors',
		),	
		array(
            'type' => 'css_editor',
            'heading' => esc_html__( 'Css', 'unica' ),
            'param_name' => 'css',
            'group' => esc_html__( 'Design options', 'unica' ),
        ),
      ),
   ) );
}
class WPBakeryShortCode_Map extends WPBakeryShortCode {
}
/*-----------------------------------------------------------------------------------*/
/* Unica Lastest Blog
/*-----------------------------------------------------------------------------------*/

add_action( 'vc_before_init', 'bizpro_blog_latest_integrateWithVC' );
function bizpro_blog_latest_integrateWithVC() {
   vc_map( array(
      "name" => esc_html__( "Unica Latest Post", "unica" ), 
      "base" => "blog_latest", 
	  "category" => "Unica", 
      "params" => array( 

				 array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Post', 'unica' ),
					'param_name' => 'posts',
					'description' => esc_html__( 'Show post.', 'unica' ),
					'group' => 'Portfolio List',
					'admin_label' => true ,
				 ),	
				 array(
					'type' => 'textfield',
					'heading' => esc_html__( 'Categories', 'unica' ),
					'param_name' => 'categories',
					'description' => esc_html__( 'Default all categories shown, you can add categories name.', 'unica' ),
					'group' => 'Portfolio List',
					'admin_label' => true ,
				 ),				 
      ),
   ) );
}
class WPBakeryShortCode_blog_latest extends WPBakeryShortCode {
}