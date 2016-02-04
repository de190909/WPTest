<?php
/**
 * FlatBook functions and definitions.
 *
 * @package FlatBook
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function flatbook_setup() {
	
	/*
	 * Set the content width in pixels, based on the theme's design and stylesheet.
	 */	
    global $content_width;

    if ( !isset($content_width) ) { $content_width = 640; }	

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on FlatBook, use a find and replace
	 * to change 'flatbook' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'flatbook', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

    add_image_size( 'thumbnail-basic',  750, 400, true ); // For blog pages with sidebar

    add_image_size( 'thumbnail-large',  1140, 570, true ); // For blog pages without sidebar	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array( 'primary' => esc_html__( 'Primary Menu', 'flatbook' ) ) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery' ) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array( 'image', 'video', 'quote', 'link', 'gallery' ) );

	/**
	 * Custom template tags for theme
	 */
	require get_template_directory() . '/inc/template-tags.php';

	/**
	 * Custom functions that act independently of the theme templates.
	 */
	require get_template_directory() . '/inc/extras.php';

	/**
	 * If Kirki is not already installed, use the included version
	 */
	if ( ! class_exists( 'Kirki' ) ) {

		require get_template_directory() . '/inc/customizer/kirki/kirki.php';

		require get_template_directory() . '/inc/customizer/customizer.php';

	}

	/**
	 * Tgm plugin activation class
	 */
	require get_template_directory() . '/inc/classes/class-tgm-plugin-activation.php';

	/**
	 * Bootstrap navwalker class
	 */
	require get_template_directory() . '/inc/classes/class-wp-bootstrap-navwalker.php';

	/**
	 * Extended recent posts widget class
	 */
	require get_template_directory() . '/inc/classes/class-extend-recent-posts-widget.php';

	/**
	 * Extended archives widget class
	 */
	require get_template_directory() . '/inc/classes/class-extend-archives-widget.php';	

	/**
	 * Extended categories widget class
	 */
	require get_template_directory() . '/inc/classes/class-extend-categories-widget.php';

	/**
	 * Extended recent comments widget class
	 */
	require get_template_directory() . '/inc/classes/class-extend-recent-comments-widget.php';		

	/**
	 * Acf class
	 */
	require get_template_directory() . '/inc/admin/acf-init.php';

}

add_action( 'after_setup_theme', 'flatbook_setup' );

/**
 * Register widgetized area and update sidebar with default widgets.
 */
function flatbook_widgets_init() {

	register_sidebar( array(

		'name'          => __( 'Blog Sidebar', 'flatbook' ),

		'id'            => 'blog-sidebar',

		'description'   => __( 'Drag widgets here to show up in the default sidebar of the blog page.', 'flatbook' ),

		'before_widget' => '<aside id="%1$s" class="widget %2$s">',

		'after_widget'  => '</aside>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );

	register_sidebar( array(

		'name'          => __( 'Footer Widgets', 'flatbook' ),

		'id'            => 'footer-widgets',

		'description'   => __( 'Add widgets to show up in footer widgets bar at the bottom of pages.', 'flatbook' ),

		'before_widget' => '<div id="%1$s" class="widget footer-widget %2$s">',

		'after_widget'  => '</div>',

		'before_title'  => '<h3 class="widget-title">',

		'after_title'   => '</h3>',

	) );

}

add_action( 'widgets_init', 'flatbook_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function flatbook_scripts() {

	/* Main Stylesheet */

	wp_enqueue_style( 'flatbook_main_style', get_stylesheet_uri(), array(), null, 'all' );

	/* Custom Stylesheet */	

	wp_enqueue_style( 'flatbook_custom_style', get_template_directory_uri() . '/assets/css/custom-styles.css' );

	$custom_css_rules = Kirki::get_option('fb','custom_css_code'); $custom_css = "$custom_css_rules";
        
    wp_add_inline_style( 'flatbook_custom_style', $custom_css );

	/* jQuery */
	
	wp_enqueue_script('jquery');

	/* Bootstrap Script */

	wp_enqueue_script('flatbook_bootstrap_script', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), null, true);

	/* Waypoints Script */

	wp_enqueue_script('flatbook_waypoints_script',  get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquery'), null, true);

	/* Wow Script */	

	wp_enqueue_script('flatbook_wow_script', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);

	/* Parallax Script */	

	wp_enqueue_script('flatbook_parallax_script', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), null, true);	

	/* Tinyscroll Script */	

	wp_register_script('flatbook_tinyscroll_script', get_template_directory_uri() . '/assets/js/tinyscroll.min.js', array('jquery'), null, true);

	/* Countdown Script */	

	wp_register_script('flatbook_countdown_script', get_template_directory_uri() . '/assets/js/countdown.min.js', array('jquery'), null, true); 

	/* Counterup Script */	

	wp_register_script('flatbook_counterup_script', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), null, true);

	/* Owlcarousel Script */	

	wp_register_script('flatbook_owlcarousel_script', get_template_directory_uri() . '/assets/js/owlcarousel.min.js', array('jquery'), null, true);

	/* Google Map Script */	

	wp_register_script('flatbook_googlemap_script', 'https://maps.googleapis.com/maps/api/js', array('jquery'), null, true);	

	/* Retina Script */	

	wp_enqueue_script('flatbook_retina_script', get_template_directory_uri() . '/assets/js/retina.min.js', array('jquery'), null, true);	

	/* Theme Script */	

	wp_enqueue_script('flatbook_flatbook_script', get_template_directory_uri() . '/assets/js/flatbook.js', array('jquery'), null, true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {

		wp_enqueue_script( 'comment-reply' );

	}

	add_editor_style('/assets/css/editor-styles.css');

}

add_action( 'wp_enqueue_scripts', 'flatbook_scripts' );

/**
 * Tgm Plugin Activation
 */
function flatbook_register_required_plugins() {

    $plugins = array(

        array(

            'name' => 'Contact Form 7',

            'slug' => 'contact-form-7',

            'force_activation' => true,

            'force_deactivation' => false,

            'required' => true

        ),   

        array(

            'name' => 'Customizer Export/Import',

            'slug' => 'customizer-export-import',

            'force_activation' => true,

            'force_deactivation' => false,

            'required' => true
        ),   

        array(

            'name' => 'WordPress Importer',

            'slug' => 'wordpress-importer',

            'force_activation' => true,

            'force_deactivation' => false,

            'required' => true
        ), 

        array(

            'name' => 'Widget Importer & Exporter',

            'slug' => 'widget-importer-exporter',

            'force_activation' => false,

            'force_deactivation' => false,

            'required' => false
        ),

	    array(
	        'name' => 'Envato WordPress Toolkit',

	        'slug' => 'envato-wordpress-toolkit',

	        'source' => get_template_directory() . '/inc/plugins/envato-wordpress-toolkit.zip',

	        'required' => false,

	        'version' => '1.7.3',

	        'force_activation' => false,

	        'force_deactivation' => false,

	        'external_url' => '',
	    ),                  

    );

	$config = array(

	    'default_path' => '',

	    'menu' => 'flatbook-plugin-installer',

		'parent_slug' => 'themes.php',

	    'has_notices' => true,

	    'message' => '',	    

	    'is_automatic' => true,

		'dismissable' => false,

        'dismiss_msg' => '',

	    'strings' => array(

	        'page_title' => __( 'FlatBook Plugin Installer', 'flatbook' ),

	        'menu_title' => __( 'Install Plugins', 'flatbook' ),

	        'installing' => __( 'Installing Plugin: %s', 'flatbook' ),

	        'oops' => __( 'Something went wrong with the plugin API.', 'flatbook' ),

	        'notice_can_install_required' => _n_noop( 'FlatBook theme requires the following plugin: %1$s.', 'FlatBook theme requires the following plugins: %1$s.', 'flatbook' ),

	        'notice_can_install_recommended' => _n_noop( 'FlatBook theme recommends the following plugin: %1$s.', 'FlatBook theme recommends the following plugins: %1$s.', 'flatbook' ),
	        
	        'notice_cannot_install' => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'flatbook' ),

	        'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'flatbook' ),

	        'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'flatbook' ),

	        'notice_cannot_activate' => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'flatbook' ),

	        'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'flatbook' ),

	        'notice_cannot_update' => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'flatbook' ),

	        'install_link' => _n_noop( 'Begin Install Plugins', 'Begin Install Plugins', 'flatbook' ),

	        'activate_link' => _n_noop( 'Activate Installed Plugins', 'Activate Installed Plugins', 'flatbook' ),

	        'return' => __( 'Return to FlatBook Plugins Installer', 'flatbook' ),

	        'plugin_activated' => __( 'Plugin activated successfully.', 'flatbook' ),

	        'complete' => __( 'All plugins installed and activated successfully. %s', 'flatbook' ),

	        'nag_type' => 'updated'
	    )

	);
 
    tgmpa( $plugins, $config );

}

add_action( 'tgmpa_register', 'flatbook_register_required_plugins' );






/**
 * Enqueue customizer styles css
 */
function flatbook_customizer_custom_css() {

    wp_register_style('flatbook_customizer_styles', get_template_directory_uri() . '/assets/css/customizer-styles.css');

    wp_enqueue_style('flatbook_customizer_styles');

}

add_action( 'customize_controls_print_styles', 'flatbook_customizer_custom_css' );

/**
 * Enqueue custom inline css styles in head
 */
/*function flatbook_custom_css_styles() {

    wp_enqueue_style( 'flatbook_custom_css', get_template_directory_uri() . '/assets/css/custom-styles.css' );

    $custom_css = Kirki::get_option('fb','frontend_custom_css');

    wp_add_inline_style( 'flatbook_custom_css', $custom_css );

}

add_action( 'wp_enqueue_scripts', 'flatbook_custom_css_styles' );*/

/**
 * Custom admin logo
 */
function flatbook_custom_admin_logo() {

	$admin_logo = Kirki::get_option('fb','admin_logo');

	if( $admin_logo != '' ) { $admin_logo; }

	$dimensions = @getimagesize( $admin_logo );

	echo '<style>' . "\n" . 'body.login #login h1 a { background: url("' . $admin_logo . '") no-repeat scroll center top transparent; height: ' . $dimensions[1] . 'px; 
	background-size: auto !important; width: auto; }' . "\n.login #nav {text-align: center} .login #backtoblog { display:none }" . '</style>' . "\n";
	
}

add_filter( 'login_head', 'flatbook_custom_admin_logo' );

/**
 * Retina images
 */
function flatbook_retina_support_attachment_meta( $metadata, $attachment_id ) {

    foreach ( $metadata as $key => $value ) {

        if ( is_array( $value ) ) {

            foreach ( $value as $image => $attr ) {

                if ( is_array( $attr ) ) 

                flatbook_retina_support_create_images( get_attached_file( $attachment_id ), $attr['width'], $attr['height'], true );

            }

        }

    }
 
    return $metadata;

}

add_filter( 'wp_generate_attachment_metadata', 'flatbook_retina_support_attachment_meta', 10, 2 );

/**
 * Create retina-ready images
 */
function flatbook_retina_support_create_images( $file, $width, $height, $crop = false ) {

    if ( $width || $height ) {

        $resized_file = wp_get_image_editor( $file );

        if ( ! is_wp_error( $resized_file ) ) {

            $filename = $resized_file->generate_filename( $width . 'x' . $height . '@2x' );
 
            $resized_file->resize( $width * 2, $height * 2, $crop );

            $resized_file->save( $filename );
 
            $info = $resized_file->get_size();
 
            return array(

                'file' => wp_basename( $filename ),

                'width' => $info['width'],

                'height' => $info['height'],

            );

        }

    }

    return false;

}

/**
 * Delete retina-ready images
 */
function flatbook_delete_retina_support_images( $attachment_id ) {

    $meta = wp_get_attachment_metadata( $attachment_id );

    $upload_dir = wp_upload_dir();

    $path = pathinfo( $meta['file'] );

    foreach ( $meta as $key => $value ) {

        if ( 'sizes' === $key ) {

            foreach ( $value as $sizes => $size ) {

                $original_filename = $upload_dir['basedir'] . '/' . $path['dirname'] . '/' . $size['file'];

                $retina_filename = substr_replace( $original_filename, '@2x.', strrpos( $original_filename, '.' ), strlen( '.' ) );

                if ( file_exists( $retina_filename ) ) unlink( $retina_filename );

            }

        }

    }

}

add_filter( 'delete_attachment', 'flatbook_delete_retina_support_images' );



















/**
 * Customize the default wordpress admin bar
 */
function flatbook_admin_bar_render() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('updates');
}
add_action( 'wp_before_admin_bar_render', 'flatbook_admin_bar_render' );








function flatbook_section_header( $classname ) {

	$title	  = get_sub_field('section_title');
	$lead 	  = get_sub_field('section_lead');
	$icon 	  = get_sub_field('section_icon');
	$bgcolor  = get_sub_field('section_bgcolor');
	$bgimage  = get_sub_field('section_bgimage');
	$before   = get_sub_field('section_before');
	$class 	  = get_sub_field('section_class');
	$id	  	  = get_sub_field('section_id');

	echo '<section id="'.$id.'" class="'.$classname.' '.$class.'" ';
	if( $bgimage ) { echo 'data-image-src="'.$bgimage.'" data-parallax="scroll">'; }
	else { echo 'style="background-color: '.$bgcolor.'">'; }

	echo '<div class="container">';

	    // Section Header
		if( $title || $lead || $icon ) : 
			echo '<div class="section-header">';
				if( $title ) { echo '<h1>'.$title.'</h1>'; }
				if( $lead ) { echo '<p class="section-lead">'.$lead.'</p>'; }
				echo '<div class="divider">';
				if( $icon ) { echo '<i class="fa '.$icon. ' primary-color" style="background: '.$bgcolor.';"></i>'; }
		      	echo '</div>';
	    	echo '</div>';
	    endif;

		// Section Before
		if( $before ) { echo '<div class="section-before">'.$before.'</div>'; }

		// Section Content 
		echo '<div class="section-content">';
		
}

function flatbook_section_footer() {

	$after = get_sub_field('section_after');

			// Section Content 
			echo '</div>';

		    // Section After
		    if( $after ) { echo '<div class="section-after">'.$after.'</div>'; }

	    // Container
	    echo '</div>';
	    
	echo '</section>';
	
}
