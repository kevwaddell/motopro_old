<?php 
if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_register_style( 'styles', get_stylesheet_uri(), null, filemtime( get_stylesheet_directory().'/style.css' ) );
			wp_register_script( 'slim-scroll', get_stylesheet_directory_uri() . '/_/js/jquery.slimscroll.min.js', array('jquery'), '1.0.0', true );
			wp_register_script( 'bootstrap-tabs', get_stylesheet_directory_uri() . '/_/js/bootstrap-tabs.js', array('jquery','jquery-ui-core'), '1.0.0', true );
			wp_register_script( 'functions', get_stylesheet_directory_uri() . '/_/js/functions.js', array('jquery', 'jquery-ui-core', 'bootstrap-all-min', 'slim-scroll', 'bootstrap-tabs'), '1.0.1', true );
			//wp_register_script( 'img-fit', get_stylesheet_directory_uri() . '/_/js/jquery.imagefit.js', array('jquery'), '1.0.0', true );
			
			wp_enqueue_style('styles');
			wp_enqueue_script('slim-scroll');
			wp_enqueue_script('bootstrap-tabs');
			wp_enqueue_script('functions');
			//wp_enqueue_script('img-fit');
		}
	}
	core_mods();
}

add_theme_support('html5', array('search-form'));

if ( function_exists( 'register_nav_menus' ) ) {
		register_nav_menus(
			array(
			  'package_links_menu' => 'Packages Menu',
			  'social_links_menu' => 'Footer Social Links',
			)
		);
}

if ( function_exists( 'register_sidebar' ) ) {
	
	$login_sb_args = array(
	'name'          => "User actions",
	'id'            => "user-actions",
	'description'   => 'Area for logged in user widget',
	'class'         => 'user-links',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '',
	'after_title'   => '' 
	);

	register_sidebar( $login_sb_args );
}


add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
 
/*  PACKAGE OPTIONS CPT */
include (STYLESHEETPATH . '/_/functions/package-options-cpt.php');

/*  FAQ CPT */
include (STYLESHEETPATH . '/_/functions/faq-cpt.php');

/* AFC SAVE POST FUNCTION */
include (STYLESHEETPATH . '/_/functions/afc_save_post.php');

 ?>