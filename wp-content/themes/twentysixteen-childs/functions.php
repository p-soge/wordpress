<?php

add_action( 'init', 'cptui_register_my_cpts_testimonials' );
function cptui_register_my_cpts_testimonials() {
	$labels = array(
		"name" => __( 'Testimonials', '' ),
		"singular_name" => __( 'Testimonial', '' ),
		"menu_name" => __( 'My Testimonials', '' ),
		"all_items" => __( 'All Testimonials', '' ),
		"add_new" => __( 'Add New Testimonial', '' ),
		"add_new_item" => __( 'Add New', '' ),
		"edit_item" => __( 'Edit Testimonial', '' ),
		"new_item" => __( 'New Testimonial', '' ),
		"view_item" => __( 'View Testimonial', '' ),
		"search_items" => __( 'Search Testimonial', '' ),
		"not_found" => __( 'No Testimonial Found', '' ),
		"not_found_in_trash" => __( 'No Testimonial Found In Trash', '' ),
		"parent_item_colon" => __( 'Parent Testimonial', '' ),
		"featured_image" => __( 'Featured Image  for this Testimonial', '' ),
		"set_featured_image" => __( 'Set featured image  for this Testimonial', '' ),
		"remove_featured_image" => __( 'Remove featured image  for this Testimonial', '' ),
		"use_featured_image" => __( 'Use as featured image  for this Testimonial', '' ),
		"archives" => __( 'Testimonial  archives', '' ),
		"insert_into_item" => __( 'Insert into post testimonial', '' ),
		"uploaded_to_this_item" => __( 'Uploaded to this testimonial', '' ),
		"filter_items_list" => __( 'filter  testimonial list', '' ),
		"items_list_navigation" => __( 'testimonial list navigation', '' ),
		"items_list" => __( 'testimonials  list', '' ),
		"parent_item_colon" => __( 'Parent Testimonial', '' ),
		);

	$args = array(
		"label" => __( 'Testimonials', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
				"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "testimonials", "with_front" => true ),
		"query_var" => true,
		
		"supports" => array( "title", "editor", "thumbnail", "excerpt", "author" ),					);
	register_post_type( "testimonials", $args );

// End of cptui_register_my_cpts_testimonials()
}
/**
*Adding custom logo to custom theme start
*/

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 400,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

function child_theme_custom_logo() {
	
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}

}

/**
*Adding custom logo to custom theme end
*/

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
  // wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    

}

/*
*************************************************************
Removing extra load from content using advanced custom field.
*************************************************************
*/
add_option('option_name', 'option_value', '', 'no');

add_theme_support( 'post-thumbnails' ); 


add_action( 'widgets_init', 'twentysixteen_widgets_init_yo' );

function twentysixteen_widgets_init_yo()
{


register_sidebar( array(
		'name'          => __( 'call sidebar', 'twentysixteen' ),
		'id'            => 'top-1',
		'description'   => __( 'Add widgets here to appear in your header.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'banner bar ', 'twentysixteen' ),
		'id'            => 'banner-1',
		'description'   => __( 'Add widgets here to appear in your banner.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'about bar ', 'twentysixteen' ),
		'id'            => 'about-1',
		'description'   => __( 'Add widgets here to appear in your banner.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'vital bar ', 'twentysixteen' ),
		'id'            => 'vital-1',
		'description'   => __( 'Add widgets here to appear in your banner.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'process for men ', 'twentysixteen' ),
		'id'            => 'men-1',
		'description'   => __( 'Add widgets here to appear in your banner.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'process for women ', 'twentysixteen' ),
		'id'            => 'women-1',
		'description'   => __( 'Add widgets here to appear in your banner.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'Follow Us  ', 'twentysixteen' ),
		'id'            => 'follow-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'Footer section  ', 'twentysixteen' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
register_sidebar( array(
		'name'          => __( 'Footer menu  ', 'twentysixteen' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'category bar  ', 'twentysixteen' ),
		'id'            => 'cat-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'popular post   ', 'twentysixteen' ),
		'id'            => 'popular-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'top banner   ', 'twentysixteen' ),
		'id'            => 'topbanner-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
		'name'          => __( 'contact information   ', 'twentysixteen' ),
		'id'            => 'contacts',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );



register_sidebar( array(
		'name'          => __( 'Get social	   ', 'twentysixteen' ),
		'id'            => 'social-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'twentysixteen' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );


/* 
=============================
Hide Contact form  7 errors  
=============================
*/
//add_filter( 'wpcf7_validate_configuration', '__return_false' );


// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(  
  'primary' => __( 'Primary Navigation', 'twentysixteen' ),  
  'secondary' => __('Secondary Navigation', 'twentysixteen')  


) );










} 

// add_action( 'wpcf7_mail_sent', 'my_custom_function' );
// function my_custom_function(){
// 	$my_dynamic_url = home_url('thankyou');
//     wp_redirect( $my_dynamic_url );
//     exit;
// }



add_action( 'admin_bar_menu', 'wp_admin_bar_my_custom_account_menu', 11 );

function wp_admin_bar_my_custom_account_menu( $wp_admin_bar ) {
$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$profile_url = get_edit_profile_url( $user_id );

if ( 0 != $user_id ) {
/* Add the "My Account" menu */
$avatar = get_avatar( $user_id, 28 );
$howdy = sprintf( __('Welcome, %1$s'), $current_user->display_name );
$class = empty( $avatar ) ? '' : 'with-avatar';

$wp_admin_bar->add_menu( array(
'id' => 'my-account',
'parent' => 'top-secondary',
'title' => $howdy . $avatar,
'href' => $profile_url,
'meta' => array(
'class' => $class,
),
) );

}
}



remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);


add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

/*Woocomerce Theme support*/

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



