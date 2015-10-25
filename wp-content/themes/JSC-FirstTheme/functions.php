<?php 

$args = array(
	'flex-width'    => true,
	'width'         => 302,
	'flex-height'   => true,
	'height'        => 350,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
	'uploads'		=> true,
);
add_theme_support( 'custom-header', $args );
add_theme_support( 'menus' );

//socail icons
function my_register_menus() {
	register_nav_menu( 'social-media', _x( 'Social Media', 'nav menu location', 'example-textdomain' ) );
}
add_action( 'init', 'my_register_menus' );

function register_theme_menus() {

register_nav_menus (
	array(
		'primary-menu' => __( 'Primary Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

function jsc_theme_styles() {

	wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'googlefont_css', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300italic,400,600' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'jsc_theme_styles' );

function jsc_theme_js() {
		wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.min.js', '', '', true );	
		wp_enqueue_script( 'jquery_scrolly', get_template_directory_uri() . '/js/jquery.scrolly.min.js', '', '', true );	
		wp_enqueue_script( 'jquery_scrollzer', get_template_directory_uri() . '/js/jquery.scrollzer.min.js', '', '', true );	
		wp_enqueue_script( 'jquery_skel', get_template_directory_uri() . '/js/skel.min.js', '', '', true );	
		wp_enqueue_script( 'jquery_util', get_template_directory_uri() . '/js/util.js', '', '', true );	
		wp_enqueue_script( 'jquery_main', get_template_directory_uri() . '/js/main.js', '', '', true );	

}
add_action( 'wp_enqueue_scripts', 'jsc_theme_js' );



function sButton($atts, $content = null) {
   extract(shortcode_atts(array('link' => '#'), $atts));
   return '<footer><a class="button" target="_blank" href="'.$link.'"><span>' . do_shortcode($content) . '</span></a></footer>';
}
add_shortcode('button', 'sButton');
