<?php 
if ( !function_exists(core_mods) ) {
	function core_mods() {
		if ( !is_admin() ) {
			wp_register_style( 'styles', get_stylesheet_directory_uri().'/_/css/styles.css', null, filemtime( get_stylesheet_directory().'/_/css/styles.css' ) );
			//wp_register_style( 'font-awesome', "//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css", null, null );
			wp_register_script( 'slim-scroll', get_stylesheet_directory_uri() . '/_/js/jquery.slimscroll.min.js', array('jquery'), '1.0.0', true );
			//wp_register_script( 'bootstrap-tabs', get_stylesheet_directory_uri() . '/_/js/bootstrap-tabs.js', array('jquery','jquery-ui-core'), '1.0.0', true );
			wp_register_script( 'functions', get_stylesheet_directory_uri() . '/_/js/functions-min.js', array('jquery', 'jquery-ui-core', 'bootstrap-all-min', 'slim-scroll'), '1.0.1', true );
			//wp_register_script( 'img-fit', get_stylesheet_directory_uri() . '/_/js/jquery.imagefit.js', array('jquery'), '1.0.0', true );
			
			wp_enqueue_style('font-awesome');
			wp_enqueue_style('styles');
			wp_enqueue_script('slim-scroll');
			//wp_enqueue_script('bootstrap-tabs');
			wp_enqueue_script('functions');
			//wp_enqueue_script('img-fit');
		}
	}
	core_mods();
}

add_action( 'wp_print_styles', 'my_deregister_styles', 100 );

function my_deregister_styles() {
		//wp_deregister_style( 'font-awesome-four' );
		wp_deregister_style( 'theme-my-login' );
		/* wp_deregister_style( 'abc_style' ); */
		wp_deregister_style( 'cookielawinfo-style' );
		wp_deregister_style( 'wprssmi_template_styles' );
		wp_deregister_style( 'fancybox' );
       // deregister as many stylesheets as you need...
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

/* SEND NEWSLETTER TO DOTMAILER */
include (STYLESHEETPATH . '/_/functions/submit_newsletter.php');

function add_gf_cap()
{	
   $id = 2;
   $role = new WP_User( $id );
   $role->add_cap( 'gravityforms_edit_forms' );
   $role->add_cap( 'gravityforms_view_entries' );
   $role->add_cap( 'gravityforms_edit_entries' );
   $role->add_cap( 'gravityforms_export_entries' );
   $role->add_cap( 'gravityforms_view_entry_notes' );
   $role->add_cap( 'gravityforms_edit_entry_notes' );
}
 
add_action( 'admin_init', 'add_gf_cap' );

function the_title_trim($title) {
	$title = attribute_escape($title);
	$findthese = array(
		'#Protected:#',
		'#Private:#'
	);
	$replacewith = array(
		'', // What to replace "Protected:" with
		'' // What to replace "Private:" with
	);
	$title = preg_replace($findthese, $replacewith, $title);
	return $title;
}
add_filter('the_title', 'the_title_trim');

add_filter( 'the_password_form', 'custom_password_form' );
function custom_password_form() {
    global $post;
    $o = '<form class="protected-post-form" action="' . get_option('siteurl') . '/login/?action=postpass" method="post"><div class="form-group"><input name="post_password" type="password" class="form-control text-center" size="20" /></div><input type="submit" name="Submit" class="btn btn-default btn-block" value="' . esc_attr__( "Submit" ) . '" /></form>
    ';
    return $o;
}

 ?>