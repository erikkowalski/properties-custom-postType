<?php
//Registers the Properties custom post type
function create_properties_post_type() {
	$labels = array(
		'name'               => 'Properties',
		'singular_name'      => 'Property',
		'menu_name'          => 'Properties',
		'name_admin_bar'     => 'Property',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New Property',
		'new_item'           => 'New Property',
		'edit_item'          => 'Edit Property',
		'view_item'          => 'View Property',
		'all_items'          => 'All Properties',
		'search_items'       => 'Search Properties',
		'parent_item_colon'  => 'Parent Properties:',
		'not_found'          => 'No Properties found.',
		'not_found_in_trash' => 'No Properties found in Trash.',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-admin-site',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'properties' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'taxonomies'         => array( 'category', 'post_tag' )
	);

	register_post_type( 'psh_properties', $args );
}


add_action( 'init', 'create_properties_post_type' );

?>
