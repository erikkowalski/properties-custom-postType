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




include 'properties.php';
include	'costar-feed.php';



// Flush rewrite rules to add tbe "$post-type-name" as a permalink slug
function my_rewrite_flush() {
    create_properties_post_type();
    create_costar_news_post_type();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );
?>
