<?php
	
	// Add RSS links to <head> section
	add_theme_support( 'automatic-feed-links' );
	
	// Load jQuery Google CDN
	add_action('init', 'myhook'); 
	function myhook() { 
	
	if ( !is_admin() ) {

	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');

	// Loading slider script 
	   wp_register_script('jquery.flexslider', get_bloginfo('template_directory').'/js/libs/jquery.flexslider-min.js', array('jquery'));
	   wp_enqueue_script('jquery.flexslider');
	   
	   wp_register_script('jquery.masonry', get_bloginfo('template_directory').'/js/libs/jquery.masonry.min.js', array('jquery'));
	   wp_enqueue_script('jquery.masonry');
	   
	   wp_register_script('jquery.infinitescroll', get_bloginfo('template_directory').'/js/libs/jquery.infinitescroll.min.js', array('jquery'));
	   wp_enqueue_script('jquery.infinitescroll');	   
	   

	   
	}
	
	} 

	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }


/**

 * @package	   TGM-Plugin-Activation
 * @version	   2.2.0
 * @author	   Thomas Griffin <thomas@thomasgriffinmedia.com>
 * @author	   Gary Jones <gamajo@gamajo.com>
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license	   http://opensource.org/licenses/gpl-3.0.php GPL v3
 * @link       https://github.com/thomasgriffin/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(


		array(
			'name'     				=> 'Thematic Options Framwork', // The plugin name
			'slug'     				=> 'options-framework', // The plugin slug (typically the folder name)
			'source'   				=> get_stylesheet_directory() . '/inc/plugins/options-framework.zip', // The plugin source
			'required' 				=> true, // If false, the plugin is only 'recommended' instead of required
			'version' 				=> '', // E.g. 1.0.0. If set, the active plugin must be this version or higher, otherwise a notice is presented
			'force_activation' 		=> true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch
			'force_deactivation' 	=> true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins
			'external_url' 			=> '', // If set, overrides default API URL and points to an external URL
		),



		

			
		
	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = '';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',         				    // Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> true,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ) // %1$s = dashboard link
		)
	);

	tgmpa( $plugins, $config );

}
//adding options backup
if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {
 
    $optionsframework_settings = get_option('optionsframework');
 
    // Gets the unique option id
    $option_name = $optionsframework_settings['id'];
 
    if ( get_option($option_name) ) {
        $options = get_option($option_name);
    }
 
    if ( isset($options[$name]) ) {
        return $options[$name];
    } else {
        return $default;
    }
}
}


//adding custom post formats aside gallery image

add_theme_support(
'post-formats',
array('aside', 'gallery', 'image')
);

//adding custom post type for features section

	add_action('init', 'create_portfolio');
	function create_portfolio() {
    	$portfolio_args = array(
        	'label' => __('Portfolio'),
        	'singular_label' => __('Portfolio'),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => true,
        	'supports' => array('title', 'editor', 'thumbnail')
        );
    	register_post_type('portfolio',$portfolio_args);
	}


//adding admin actions 


	add_action("admin_init", "add_portfolio");
	add_action('save_post', 'update_website_url');
	function add_portfolio(){
		add_meta_box("portfolio_details", "portfolio", "normal", "low");
	}
	function portfolio_options(){
		global $post;
		$custom = get_post_custom($post->ID);

?>
	
<?php
	}
	function update_website_url(){
		global $post;
		update_post_meta($post->ID, "website_url", $_POST["website_url"]);
	}


add_filter("manage_edit-portfolio_columns", "portfolio_edit_columns");
add_action("manage_posts_custom_column",  "portfolio_columns_display");
 
function portfolio_edit_columns($portfolio_columns){
	$portfolio_columns = array(
		"cb" => "<input type=\"checkbox\" />",
		"title" => "Project Title",
		"description" => "Description",
	);
	return $portfolio_columns;
}
 
function portfolio_columns_display($portfolio_columns){
	switch ($portfolio_columns)
	{
		case "description":
			the_excerpt();
			break;				
	}
}






//adding support for post thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200, true ); // Normal post thumbnails
add_image_size( 'single-post-thumbnail', 400, 9999 ); // Permalink thumbnail size



//adding ajax for about us page


function add_myscript(){
    	wp_register_script('my-ajax', get_bloginfo('template_directory').'/js/libs/my-ajax.js', array('jquery'));
	    wp_enqueue_script('my-ajax'); 
}
		add_action( 'init', 'add_myscript' );



function myAjax(){

    //get data from our ajax() call
    $greeting = $_GET['greeting'];

    $results = "<span class='about-content'>".$greeting."</span>";

    // Return String
    die($results);
}

// create custom Ajax call for WordPress
add_action( 'wp_ajax_nopriv_myAjax', 'myAjax' );
add_action( 'wp_ajax_myAjax', 'myAjax' );

//adding theme Read more support for excerpt
function new_excerpt_more($more) {
       global $post;
	return '<span id="read-more"><a href="'. get_permalink($post->ID) . '">Read More  &raquo;</a></span>';
}
add_filter('excerpt_more', 'new_excerpt_more');