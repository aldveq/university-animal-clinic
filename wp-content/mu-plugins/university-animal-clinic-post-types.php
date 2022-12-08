<?php

// Services Post Type
function university_animal_clinic_services_post_type_registration() {
	$labels = array(
		'name'                  => _x( 'Services', 'Post type general name', 'university-animal-clinic' ),
		'singular_name'         => _x( 'Service', 'Post type singular name', 'university-animal-clinic' ),
		'menu_name'             => _x( 'Services', 'Admin Menu text', 'university-animal-clinic' ),
		'name_admin_bar'        => _x( 'Service', 'Add New on Toolbar', 'university-animal-clinic' ),
		'add_new'               => __( 'Add New', 'university-animal-clinic' ),
		'add_new_item'          => __( 'Add New Service', 'university-animal-clinic' ),
		'new_item'              => __( 'New Service', 'university-animal-clinic' ),
		'edit_item'             => __( 'Edit Service', 'university-animal-clinic' ),
		'view_item'             => __( 'View Service', 'university-animal-clinic' ),
		'all_items'             => __( 'All Services', 'university-animal-clinic' ),
		'search_items'          => __( 'Search Services', 'university-animal-clinic' ),
		'parent_item_colon'     => __( 'Parent Services:', 'university-animal-clinic' ),
		'not_found'             => __( 'No Services found.', 'university-animal-clinic' ),
		'not_found_in_trash'    => __( 'No Services found in Trash.', 'university-animal-clinic' ),
		'featured_image'        => _x( 'Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'archives'              => _x( 'Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'university-animal-clinic' ),
		'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'university-animal-clinic' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'university-animal-clinic' ),
		'filter_items_list'     => _x( 'Filter Services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'university-animal-clinic' ),
		'items_list_navigation' => _x( 'Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'university-animal-clinic' ),
		'items_list'            => _x( 'Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'university-animal-clinic' ),
	);
	
	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'services' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-pets',
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'map_meta_cap'       => true,
	);
	
	register_post_type( 'services', $args );
}
add_action('init', 'university_animal_clinic_services_post_type_registration');

// Doctors Post Type
function university_animal_clinic_doctors_post_type_registration() {
	$labels = array(
		'name'                  => _x( 'Doctors', 'Post type general name', 'university-animal-clinic' ),
		'singular_name'         => _x( 'Doctor', 'Post type singular name', 'university-animal-clinic' ),
		'menu_name'             => _x( 'Doctors', 'Admin Menu text', 'university-animal-clinic' ),
		'name_admin_bar'        => _x( 'Doctor', 'Add New on Toolbar', 'university-animal-clinic' ),
		'add_new'               => __( 'Add New', 'university-animal-clinic' ),
		'add_new_item'          => __( 'Add New Doctor', 'university-animal-clinic' ),
		'new_item'              => __( 'New Doctor', 'university-animal-clinic' ),
		'edit_item'             => __( 'Edit Doctor', 'university-animal-clinic' ),
		'view_item'             => __( 'View Doctor', 'university-animal-clinic' ),
		'all_items'             => __( 'All Doctors', 'university-animal-clinic' ),
		'search_items'          => __( 'Search Doctors', 'university-animal-clinic' ),
		'parent_item_colon'     => __( 'Parent Doctors:', 'university-animal-clinic' ),
		'not_found'             => __( 'No Doctors found.', 'university-animal-clinic' ),
		'not_found_in_trash'    => __( 'No Doctors found in Trash.', 'university-animal-clinic' ),
		'featured_image'        => _x( 'Doctor Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'university-animal-clinic' ),
		'archives'              => _x( 'Doctor archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'university-animal-clinic' ),
		'insert_into_item'      => _x( 'Insert into project', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'university-animal-clinic' ),
		'uploaded_to_this_item' => _x( 'Uploaded to this project', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'university-animal-clinic' ),
		'filter_items_list'     => _x( 'Filter Doctors list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'university-animal-clinic' ),
		'items_list_navigation' => _x( 'Doctors list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'university-animal-clinic' ),
		'items_list'            => _x( 'Doctors list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'university-animal-clinic' ),
	);
	
	$args = array(
		'labels'             => $labels,
		'public'             => false,
		'publicly_queryable' => false,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => false,
		'rewrite'            => array( 'slug' => 'doctors' ),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => false,
		'menu_position'      => 20,
		'menu_icon'          => 'dashicons-businessperson',
		'show_in_rest'       => true,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
		'map_meta_cap'       => true,
	);
	
	register_post_type( 'doctors', $args );
}
add_action('init', 'university_animal_clinic_doctors_post_type_registration');