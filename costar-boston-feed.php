<?php
//Registers the Product's post type
function create_costar_boston_post_type() {
	$labels = array(
		'name'               => 'News',
		'singular_name'      => 'News Story',
		'menu_name'          => 'News',
		'name_admin_bar'     => 'News Story',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New News Story',
		'new_item'           => 'New News Story',
		'edit_item'          => 'Edit News Story',
		'view_item'          => 'View News Story',
		'all_items'          => 'All News',
		'search_items'       => 'Search News',
		'parent_item_colon'  => 'Parent News:',
		'not_found'          => 'No News found.',
		'not_found_in_trash' => 'No News found in Trash.',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-rss',
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'news' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
		'taxonomies'         => array( 'category', 'post_tag' )
	);

	register_post_type( 'costar_boston', $args );
}

add_action( 'init', 'create_costar_boston_post_type' );

?>
