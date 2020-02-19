<?php


/*
   ================
   Include scripts
   ===============
*/

function summerschool_script_enqueue() {

    //css
    wp_enqueue_style('foundation', get_stylesheet_directory_uri() . '/css/app.css', array(), '6.6.1', 'all');
    wp_enqueue_style('foundation-icons', get_stylesheet_directory_uri() . '/css/foundation-icons/foundation-icons.css', array(), '6.6.1', 'all');
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri() . '/css/summerschool.css', array(), '1.0.0', 'all');
    
    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('foundation-js', get_template_directory_uri() . '/js/app.js', array( 'jquery' ), '6.6.1', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/summerschool.js', array(), '1.0.0', true);
    
}
add_action('wp_enqueue_scripts', 'summerschool_script_enqueue');

/*
SHOW ADMIN BAR 
*/

function admin_bar(){

  if(is_user_logged_in()){
    add_filter( 'show_admin_bar', '__return_true' , 1000 );
  }
}
add_action('init', 'admin_bar' );

/*
   ===================
    Add Theme Support
   ===================
*/

/* template tag shit */ require_once get_theme_file_path( '/inc/template-tags.php' );

add_theme_support( 'wp-block-styles' );
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('custom-footer'); 
add_theme_support('post-thumbnail');
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );
add_theme_support( 'custom-background', apply_filters( 'summerschool_custom_background_args', array(
	'default-color' => 'ffffff',
	'default-image' => '',
) ) );
add_theme_support( 'customize-selective-refresh-widgets' );

add_theme_support('post-formats', array( 'aside', 'gallery', 'image', 'video', 'audio' )); /* more options available - see https://codex.wordpress.org/Post_Formats */

add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
/*
   ================
   Activate menus
   ================
*/


function summerschool_theme_setup() {
    add_theme_support('menus');
    
    register_nav_menu('primary', 'Primary Header Nav Menu');
    register_nav_menu('footer', 'Footer Nav Menu');
}
add_action('init', 'summerschool_theme_setup'); /* watch out for 'init' or 'after_theme_setup' string */

// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/walker.php';
//require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';


/*
   ===================
    Sidebar Functions
   ===================
*/

function summerschool_widget_setup() {
    
    register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'This is the front-page thumbnail sidebar',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init','summerschool_widget_setup');
?>