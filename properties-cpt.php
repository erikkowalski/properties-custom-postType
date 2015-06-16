<?php

/**
 * Plugin Name: PSH Custom Post Types
 * Plugin URI: http://edkstudio.com
 * Description: A simple plugin that properties post types and taxonomies
 * Version: 0.1
 * Author: erikkowalski
 * Author URI: http://edkstudio.com
 * License: GPL2
 */

/*  Copyright 2015  ERIK_KOWALSKI  (email : erikkowalski@mac.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



//Registers the Product's post type
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

//Registers the Product's post type
function create_news_post_type() {
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

    register_post_type( 'psh_news', $args );
}

add_action( 'init', 'create_news_post_type' );

// Flush rewrite rules to add "review" as a permalink slug
function my_rewrite_flush() {
    create_properties_post_type();
    create_news_post_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
?>
