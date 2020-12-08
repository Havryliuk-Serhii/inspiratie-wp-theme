<?php
function inspiratie_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support('custom-logo',
			array(
				'width'       => 202,
				'height'      => 91,				
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'main_menu' => esc_html__( 'Primary', 'inspiratie' ),
		) );
		
}	

add_action( 'after_setup_theme', 'inspiratie_setup' );

/**
 * Enqueue scripts and styles.
 */
function inspiratie_scripts() {
	// add styles
	wp_enqueue_style( 'inspiratie-style', get_stylesheet_uri() );
	wp_enqueue_style( 'inspiratie-bootstrap-style', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',array(), '4.5.3');
	wp_enqueue_style( 'inspiratie-fancy-style', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css',array(), '3.5.7');	
	wp_enqueue_style( 'inspiratie-main-style', get_template_directory_uri() . '/css/main.css');
	// add scripts
	wp_enqueue_script( 'inspiratie-jquery-slim',   'https://code.jquery.com/jquery-3.5.1.min.js', array(),'3.5.1', true);
	wp_enqueue_script( 'inspiratie-bootstrap-script', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), '4.5.3', true );
	wp_enqueue_script( 'inspiratie-fancy-script',   'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(),'3.5.7', true);
	wp_enqueue_script( 'inspiratie-slider-script', get_template_directory_uri() . '/js/slick.min.js', array(),'3.5.1', true);
	wp_enqueue_script( 'inspiratie-main-script', get_template_directory_uri() . '/js/main.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'inspiratie_scripts' );

/**
 * Functions by hooking into WordPress.
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Custom post type
 **/
function cptui_register_my_cpts() {

	/**
	 * Post Type: Photo.
	 */

	$labels = [
		"name" => __( "Photo", "inspiratie" ),
		"singular_name" => __( "Photo", "inspiratie" ),
		"menu_name" => __( "Gallery", "inspiratie" ),
		"all_items" => __( "All Photo", "inspiratie" ),
		"add_new" => __( "Add new", "inspiratie" ),
		"add_new_item" => __( "Add new photo", "inspiratie" ),
		"edit_item" => __( "Edit photo", "inspiratie" ),
		"new_item" => __( "New photo", "inspiratie" ),
		"view_item" => __( "View photo", "inspiratie" ),
		"view_items" => __( "View photos", "inspiratie" ),
		"search_items" => __( "Search photo", "inspiratie" ),
		"not_found" => __( "Photo not found", "inspiratie" ),
		"not_found_in_trash" => __( "Photo not found in trash", "inspiratie" ),
	];

	$args = [
		"label" => __( "Photo", "inspiratie" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "photo", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 8,
		"menu_icon" => "dashicons-format-gallery",
		"supports" => [ "title", "custom-fields"],

	];

	register_post_type( "photo", $args );

	/**
	 * Post Type: Slider.
	 */

	$labels = [
		"name" => __( "Slider", "inspiratie" ),
		"singular_name" => __( "Slider", "inspiratie" ),
		"menu_name" => __( "Slider", "inspiratie" ),
		"all_items" => __( "All Slides", "inspiratie" ),
		"add_new" => __( "Add new", "inspiratie" ),
		"add_new_item" => __( "Add new slide", "inspiratie" ),
		"edit_item" => __( "Edit slide", "inspiratie" ),
		"new_item" => __( "New slide", "inspiratie" ),
		"view_item" => __( "View slide", "inspiratie" ),
		"view_items" => __( "View slides", "inspiratie" ),
		"search_items" => __( "Search slide", "inspiratie" ),
		"not_found" => __( "Slide not found", "inspiratie" ),
		"not_found_in_trash" => __( "Slide not found in trash", "inspiratie" ),
	];

	$args = [
		"label" => __( "Slider", "inspiratie" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "slider", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 7,
		"menu_icon" => "dashicons-slides",
		"supports" => [ "title", "thumbnail" ],
	];

	register_post_type( "slider", $args );

	/**
	 * Post Type: Post.
	 */

	$labels = [
		"name" => __( "Post", "inspiratie" ),
		"singular_name" => __( "Post", "inspiratie" ),
		"menu_name" => __( "Post About Us", "inspiratie" ),
		"all_items" => __( "All posts", "inspiratie" ),
		"add_new" => __( "Add new", "inspiratie" ),
		"add_new_item" => __( "Add new post", "inspiratie" ),
		"edit_item" => __( "Edit post", "inspiratie" ),
		"new_item" => __( "New post", "inspiratie" ),
		"view_item" => __( "View post", "inspiratie" ),
		"view_items" => __( "View posts", "inspiratie" ),
		"search_items" => __( "Search post", "inspiratie" ),
		"not_found" => __( "Post not found", "inspiratie" ),
		"not_found_in_trash" => __( "Post not found in trash", "inspiratie" ),
	];

	$args = [
		"label" => __( "Post", "inspiratie" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "about", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 5,
		"menu_icon" => "dashicons-buddicons-buddypress-logo",
		"supports" => [ "title", "editor", "thumbnail", "custom-fields", "post-formats" ],
	];

	register_post_type( "about", $args );

	/**
	 * Post Type: Post.
	 */

	$labels = [
		"name" => __( "Post", "inspiratie" ),
		"singular_name" => __( "Post", "inspiratie" ),
		"menu_name" => __( "Price table", "inspiratie" ),
		"all_items" => __( "All posts", "inspiratie" ),
		"add_new" => __( "Add new", "inspiratie" ),
		"add_new_item" => __( "Add new post", "inspiratie" ),
		"edit_item" => __( "Edit post", "inspiratie" ),
		"new_item" => __( "New post", "inspiratie" ),
		"view_item" => __( "View post", "inspiratie" ),
		"view_items" => __( "View posts", "inspiratie" ),
		"search_items" => __( "Search post", "inspiratie" ),
		"not_found" => __( "Post not found", "inspiratie" ),
		"not_found_in_trash" => __( "Post not found in trash", "inspiratie" ),
	];

	$args = [
		"label" => __( "Post", "inspiratie" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "price", "with_front" => true ],
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-editor-table",
		"supports" => [ "title", "editor", "custom-fields", "post-formats" ],
	];

	register_post_type( "price", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
