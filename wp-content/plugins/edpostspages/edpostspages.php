<?php
/*
 * Plugin Name: ed. Posts Pages
 * Plugin URI:
 * Description: ed. Posts Pages adds support for post pages to ed. Post.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edpostpages
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Add custom taxonomy Post Pages to posts
 * @return void
 */
function ed_posts_pages_custom_taxonomies()
{
    $labels = array(
        'name'                  => _x('Posts Page', 'taxonomy general name', 'edpostspages') ,
        'singular_name'         => _x('Posts Page', 'taxonomy sigular name', 'edpostspages') ,
        'search_items'          => _x('Search Posts Pages', 'edpostspages') ,
        'all_items'             => _x('All Posts Pages', 'edpostspages') ,
        'parent_item'           => null,
        'parent_item_colon'     => null,
        'edit_item'             => _x('Edit Posts Page', 'edpostspages') ,
        'update_item'           => _x('Update Posts Page', 'edpostspages') ,
        'add_new_item'          => _x('Add New Posts Page', 'edpostspages') ,
        'new_item_name'                 => _x('New Posts Page Name', 'edpostspages') ,
        'separate_items_with_commas'    => _x('Separate Posts Pages with Commas', 'edpostspages') ,
        'add_or_remove_items'           => _x('Add or Remove Posts Pages', 'edpostspages') ,
        'choose_from_most_used'         => _x('Choose from the most used Posts Pages', 'edpostspages') ,
        'not_found'             => _x('No Post Pages Found', 'edpostspages') ,
        'menu_name'             => _x('Posts Pages', 'edpostspages') ,
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'show_in_rest'          => true,
        'update_count_callback'     => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array(
            'slug' => 'posts-page'
        ) ,
    );

    register_taxonomy('posts_page', array(
        'post'
    ) , $args);
}

add_action('init', 'ed_posts_pages_custom_taxonomies', 0);