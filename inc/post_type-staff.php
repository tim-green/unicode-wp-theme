<?php
    /**
	 * Custom Post Type of Staff listiings
	 *
	 * @since v1.0
	 */

add_action( 'init', 'unicode_staff_pt' );
function unicode_staff_pt() {
	$args = [
		'label'  => esc_html__( 'Staffs', 'text-domain' ),
		'labels' => [
			'menu_name'          => esc_html__( 'Staff', 'unicode' ),
			'name_admin_bar'     => esc_html__( 'Staff', 'unicode' ),
			'add_new'            => esc_html__( 'Add Staff', 'unicode' ),
			'add_new_item'       => esc_html__( 'Add new Staff', 'unicode' ),
			'new_item'           => esc_html__( 'New Staff', 'unicode' ),
			'edit_item'          => esc_html__( 'Edit Staff', 'unicode' ),
			'view_item'          => esc_html__( 'View Staff', 'unicode' ),
			'update_item'        => esc_html__( 'View Staff', 'unicode' ),
			'all_items'          => esc_html__( 'All Staffs', 'unicode' ),
			'search_items'       => esc_html__( 'Search Staffs', 'unicode' ),
			'parent_item_colon'  => esc_html__( 'Parent Staff', 'unicode' ),
			'not_found'          => esc_html__( 'No Staffs found', 'unicode' ),
			'not_found_in_trash' => esc_html__( 'No Staffs found in Trash', 'unicode' ),
			'name'               => esc_html__( 'Staffs', 'unicode' ),
			'singular_name'      => esc_html__( 'Staff', 'unicode' ),
		],
		'public'              => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'capability_type'     => 'post',
		'hierarchical'        => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite_no_front'    => false,
		'show_in_menu'        => true,
		'menu_icon'           => 'dashicons-businessman',
		'supports' => [
			'title',
			'editor',
			'author',
			'thumbnail',
		],
		'taxonomies' => [
			'category',
		],
		'rewrite' => true
	];

	register_post_type( 'staff', $args );
}