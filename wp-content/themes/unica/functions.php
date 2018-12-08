<?php
/**
 * functions.php
 * @package WordPress
 * @subpackage Unica
 * @since Unica 1.5
 * 
 */
 
/*************************************************
## Unica Post Formats
*************************************************/ 


if (is_admin() ){
	function unica_admin_scripts(){	
		wp_enqueue_script('unica_init', get_template_directory_uri() .'/scripts/init.js', array('jquery','media-upload','thickbox'));
        wp_enqueue_style( 'unica_klbtheme', get_template_directory_uri() . '/styles/admin/klbtheme.css', false, '1.0');    

   }
}
add_action('admin_enqueue_scripts', 'unica_admin_scripts');
 
add_theme_support( 'post-formats', array('gallery', 'audio', 'video')); 

 /*************************************************
## Post Type Support
*************************************************/

function unica_post_formats() {
 
 add_post_type_support( 'portfolio', 'post-formats' );
 
}
add_action( 'init', 'unica_post_formats');
	
/*************************************************
## Unica Fonts
*************************************************/

function unica_fonts_url() {
        $fonts_url = '';
 
		$roboto = _x( 'on', 'Roboto font: on or off', 'unica' );
		
		 
		if ( 'off' !== $roboto ) {
		$font_families = array();
		
		if ( 'off' !== $roboto ) {
		$font_families[] = 'Roboto+Mono:400,400italic,700italic,700%7CNothing+You+Could+Do';
		}		

		$query_args = array( 
		'family' => rawurldecode( implode( '|', $font_families ) ), 
		'subset' => rawurldecode( 'latin,latin-ext' ), 
		); 
		 
		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
		}
 
return esc_url_raw( $fonts_url );
}

/*************************************************
## Unica Styles and Scripts 
*************************************************/ 

function unica_scripts() {
	
     if ( is_admin_bar_showing() ) {
       wp_enqueue_style( 'klbtheme', get_template_directory_uri() . '/styles/admin/klbtheme.css', false, '1.0');    
     }
	 
     if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); 
     wp_enqueue_style( 'animate',      get_template_directory_uri() . '/styles/animate.min.css', false, '1.0');	 
     wp_enqueue_style( 'normalize',       get_template_directory_uri() . '/styles/normalize.css', false, '1.0');	 
     wp_enqueue_style( 'magnific-popup',  get_template_directory_uri() . '/scripts/magnific-popup/magnific-popup.css', false, '1.0');	 
     wp_enqueue_style( 'owlcarousel',     get_template_directory_uri() . '/scripts/owl-carousel/owl.carousel.css', false, '1.0');	 
	 wp_enqueue_style( 'font-awesome',    get_template_directory_uri() . '/styles/font-awesome.min.css', false, '1.0');	 
     wp_enqueue_style( 'unica_blog',      get_template_directory_uri() . '/styles/blog-style.css', false, '1.0');	 
     wp_enqueue_style( 'unica_main',      get_template_directory_uri() . '/styles/main.css', false, '1.0');
	 wp_enqueue_style( 'fontas',          unica_fonts_url(), array(), null );	 
     wp_enqueue_style( 'unica_style',     get_stylesheet_uri() );   
	 
     $mapkey = ot_get_option('unica_mapapi');

     wp_enqueue_script( 'instafeed',       	  get_template_directory_uri() . '/scripts/instafeed/instafeed.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'magnific-popup',  	  get_template_directory_uri() . '/scripts/magnific-popup/jquery.magnific-popup.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'jquerynav',      	  get_template_directory_uri() . '/scripts/one-page-nav/jquery.nav.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'owlcarousel',        get_template_directory_uri() . '/scripts/owl-carousel/owl.carousel.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'shuffle',        	  get_template_directory_uri() . '/scripts/shuffle/jquery.shuffle.modernizr.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'twitterfetcher', 	  get_template_directory_uri() . '/scripts/twitter-fetcher/twitterFetcher_min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'validate',       	  get_template_directory_uri() . '/scripts/jquery-validate/jquery.validate.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'wowmin',             get_template_directory_uri() . '/scripts/wowjs/wow.min.js', array('jquery'), '1.0', true);
     wp_register_script( 'googlemap',         'https://maps.googleapis.com/maps/api/js?key='. $mapkey .'', array('jquery'), '1.0', true);
     wp_register_script( 'unica_testimonial', get_template_directory_uri() . '/scripts/custom/testimonial.js', array('jquery'), '1.0', true);
     wp_register_script( 'unica_clients',     get_template_directory_uri() . '/scripts/custom/clients.js', array('jquery'), '1.0', true);
	 wp_enqueue_script( 'unica_main',          get_template_directory_uri() . '/scripts/main.js', array('jquery'), '1.0', true);
     
}

add_action( 'wp_enqueue_scripts', 'unica_scripts' );

/*************************************************
## Theme Setup
*************************************************/ 

if ( ! isset( $content_width ) ) $content_width = 960;

function unica_theme_setup() {

	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'unica_theme_setup' ); 



/*************************************************
## Includes Unica
*************************************************/ 

    require_once get_template_directory() . '/includes/metaboxes.php';  
	require_once get_template_directory() . '/includes/aq_resizer.php';
	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' );
	require_once get_template_directory() . '/includes/theme-options.php';
    require_once get_template_directory() . '/includes/style.php';
	if(function_exists('vc_set_as_theme')) {	
	 require_once get_template_directory() . '/includes/js_composer/shortcodes.php';  
	}
	
 /*************************************************
## Register Menu 
*************************************************/

function unica_register_menus() {                                            
	register_nav_menus( array( 'main-menu' => 'Primary Navigation Menu') );     
}
add_action('init', 'unica_register_menus');


/*************************************************
## Unica Menu
*************************************************/ 

class unica_description_walker extends Walker_Nav_Menu {

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output )
    {
        $id_field = $this->db_fields['id'];
        if ( is_object( $args[0] ) ) {
            $args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
        }
        return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }


      function start_el(&$output, $object, $depth = 0, $args = Array() , $current_object_id = 0) {
           
           global $wp_query;

           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $object->classes ) ? array() : (array) $object->classes;
           $icon_class = $classes[0];
		   $classes = array_slice($classes,1);

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $object ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

      
           $attributes  = ! empty( $object->attr_title ) ? ' title="'  . esc_attr( $object->attr_title ) .'"' : '';
           $attributes .= ! empty( $object->target )     ? ' target="' . esc_attr( $object->target     ) .'"' : '';
           $attributes .= ! empty( $object->xfn )        ? ' rel="'    . esc_attr( $object->xfn        ) .'"' : '';
          
           if($object->object == 'page')
           {
                $varpost = get_post($object->object_id);                
                $separate_page = get_post_meta($object->object_id, "klb_separate_page", true);
                $disable_menu = get_post_meta($object->object_id, "klb_disable_section_from_menu", true);
				$current_page_id = get_option('page_on_front');

                if ( ( $disable_menu != true ) && ( $varpost->ID != $current_page_id ) ) {

                	$output .= $indent . '<li ' . $value . $class_names .'>';

                	if ( $separate_page == true )
	                	$attributes .= ! empty( $object->url ) ? ' href="'   . esc_attr( $object->url ) .'" data-text="'.apply_filters( 'the_title', $object->title, $object->ID ).'"' : '';
	                else{
	                	if (is_front_page()) 
	                		$attributes .= ' href="#' . $varpost->post_name . '" data-nav-section="' . $varpost->post_name . '" '; 
	                	else 
	                		$attributes .= ' href="' .  ''.home_url().'/#' . $varpost->post_name . '" ';
	                }		

	                $object_output = $args->before;
		            $object_output .= '<a'. $attributes .' class="inner-link" >';
		            $object_output .= $args->link_before .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
		            $object_output .= $args->link_after;
		            $object_output .= '</a>';
		            $object_output .= $args->after;    

		             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );            	              	
                }
                                         
           } else {

           		$output .= $indent . '<li ' . $value . $class_names .'>';

                $attributes .= ! empty( $object->url ) ? ' href="' . esc_attr( $object->url ) .'"' : '';

	            $object_output = $args->before;
	            $object_output .= '<a'. $attributes .'>';
	            $object_output .= $args->link_before .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
	            $object_output .= $args->link_after;
	            $object_output .= '</a>';
	            $object_output .= $args->after;

	             $output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );
	        } 
      }
}

/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/ 

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'unica_register_required_plugins' );

function unica_register_required_plugins() {
	
	$plugins = array(

        array(
            'name'                  => esc_html__('Meta Box','unica'),
            'slug'                  => 'meta-box',
        ),

        array(
            'name'                  => esc_html__('Portfolio Post Type','unica'),
            'slug'                  => 'portfolio-post-type',
        ),

        array(
            'name'                  => esc_html__('Contact Form 7','unica'),
            'slug'                  => 'contact-form-7',
        ),
		
        array(
            'name'                  => esc_html__('Theme Options','unica'),
            'slug'                  => 'option-tree',
        ),

        array(
            'name'                  => esc_html__('Visual Composer','unica'),
            'slug'                  => 'js_composer',
            'source'                => get_template_directory() . '/plugins/js-composer.zip',
            'required'              => false,
            'version'               => '5.0.1',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),
		 array(
            'name'                  => esc_html__('Klb Shortcode','unica'),
            'slug'                  => 'klb-shortcode',
            'source'                => get_template_directory() . '/plugins/klb-shortcode.zip',
            'required'              => false,
            'version'               => '1.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Envato WordPress Toolkit','unica'),
            'slug'                  => 'wp-envato-market-master',
            'source'                => get_template_directory() . '/plugins/wp-envato-market-master.zip',
            'required'              => true,
            'version'               => '1.0',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

		array(
            'name'                  => esc_html__('Revolution Slider','unica'),
            'slug'                  => 'revslider',
            'source'                => get_template_directory() . '/plugins/rvslider.zip',
            'required'              => false,
            'version'               => '5.3.1.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Demo Installation','unica'),
            'slug'                  => 'easy_installer',
            'source'                => get_template_directory() . '/plugins/easy_installer.zip',
            'required'              => false,
            'version'               => '1.2',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
/*************************************************
## Pagination Function
*************************************************/

function unica_pagination($pages = '', $range = 4) {
	$showitems = ($range * 2)+1;
	
	global $paged;
	if(empty($paged)) $paged = 1;
	
	if($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if(!$pages) {
			$pages = 1;
		}
	}
	 if(1 != $pages){
	    echo '<nav class="pagination-wrap"><ul class="pagination"><li>'.get_previous_posts_link( esc_html__('Prev','unica') ).'</li>';
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<li class='active'><a class'button button-small' href='".get_pagenum_link(1)."'>&laquo; " . esc_html__('First', 'unica') . "</a></li>";
		if($paged > 1 && $showitems < $pages) echo "<li><a class=\"page-numbers \" href='".get_pagenum_link($paged - 1)."'>&lsaquo; </a></li>";
		
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<li class='active'><a href='".get_pagenum_link($i)."' >".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' >".$i."</a></li>";
			}
		}
	
		if ($paged < $pages && $showitems < $pages) echo "<li><a class=\"active\" href=\"".get_pagenum_link($paged + 1)."\">" . esc_html__('Next', 'unica') . " &rsaquo;</a></li>";
		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a class=\"active\" href='".get_pagenum_link($pages)."'>" . esc_html__('Last', 'unica') . " &raquo;</a></li>";
	    echo '<li>'.get_next_posts_link( esc_html__('Next','unica') ).'</li></ul></nav>';

		}
}
/*************************************************
## Widgets
*************************************************/ 

function unica_widgets_init() {
	register_sidebar( array(
	  'name' => esc_html__( 'Blog Sidebar', 'unica' ),
	  'id' => 'blog-sidebar',
	  'description'   => esc_html__( 'These are widgets for the Blog page.','unica' ),
	  'before_widget' => '<div class="blog-item">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h1>',
	  'after_title'   => '</h1>'
	) );

}
add_action( 'widgets_init', 'unica_widgets_init' );


/*************************************************
## Unica Comment
*************************************************/

if ( ! function_exists( 'unica_comment' ) ) :
 function unica_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
   case 'pingback' :
   case 'trackback' :
  ?>

   <article class="post pingback">
   <p><?php esc_html_e( 'Pingback:', 'unica' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'unica' ), ' ' ); ?></p>
  <?php
    break;
   default :
  ?>
			 <li class="comment-area">

				<div class="comment-list-comment">
					<div class="comment-list-comment-image">
						<img src="<?php echo get_avatar_url( $comment, 80 ); ?>);">
					</div>
					<div class="comment-right">
						<div class="comment-list-header">
							<h4><?php comment_author(); ?></h4>
							<span><?php comment_date(); ?> at <?php comment_time(); ?></span>
						</div>
						<div class="comment-list-comment-text">
							<div class="klb-post"><?php comment_text(); ?></div>
						</div>
					</div>
					<span class="media-reply pull-right"><?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?></span>

					<?php if ( $comment->comment_approved == '0' ) : ?>
					<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'unica' ); ?></em>
				<?php endif; ?> 
				<article class="clearfix" id="comment-<?php comment_ID(); ?>"></article>  
				</div>
			</li>
  <?php
    break;
  endswitch;
 }
endif;

/*************************************************
## Unica Comment Placeholder
*************************************************/

add_filter( 'comment_form_default_fields', 'unica_comment_placeholders' );
function unica_comment_placeholders( $fields ){
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="NAME"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input',
        '<input placeholder="EMAIL"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input',
        '<input placeholder="WEBSITE"',
        $fields['url']
    );
    return $fields;
}


add_filter( 'comment_form_defaults', 'unica_textarea_placeholder' );
 
function unica_textarea_placeholder( $fields ){
  
        $fields['comment_field'] = str_replace(
            '<textarea',
            '<textarea placeholder="MESSAGE"',
            $fields['comment_field']
        );
   
 
    return $fields;
}

/*************************************************
## Excerpt More
*************************************************/ 

function unica_excerpt_more($more) {
  global $post;
  return '<div class="read-more-x"><a href="'. esc_url(get_permalink($post->ID)) . '" >' . '' . esc_html__('READ MORE', 'unica') . '</a></div>';
  }
 add_filter('excerpt_more', 'unica_excerpt_more');
 