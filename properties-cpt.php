<?php

/*
Plugin Name: Properties Custom Post Type
*/


add_action( 'init', 'create_post_type' );
//Registers the Product's post type
function create_post_type() {
    register_post_type( 'psh_properties',
                       array(
                           'labels' => array(
                               'name' => __( 'Properties' ),
                               'singular_name' => __( 'Properties' )
                           ),
                           'public' => true,
                           'has_archive' => true,
                           'rewrite' => array('slug' => 'properties'),
                       )
                      );
}
?>
