<?php
/*
 * Plugin Name: ed. Portfolio Pages
 * Plugin URI:
 * Description: ed. Portfolio Pages adds support for portfolio pages to ed. Portfolio.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edportfoliopages
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Add custom taxonomy Portfolio Pages to projects ('portfolio' posts)
 * @return void
 */
function ed_portfolio_pages_custom_taxonomies()
{
    $labels = array(
        'name'                  => _x('Portfolio Page', 'taxonomy general name', 'edportfoliopages') ,
        'singular_name'         => _x('Portfolio Page', 'taxonomy sigular name', 'edportfoliopages') ,
        'search_items'          => _x('Search Portfolio Pages', 'edportfoliopages') ,
        'all_items'             => _x('All Portfolio Pages', 'edportfoliopages') ,
        'parent_item'           => null,
        'parent_item_colon'     => null,
        'edit_item'             => _x('Edit Portfolio Page', 'edportfoliopages') ,
        'update_item'           => _x('Update Portfolio Page', 'edportfoliopages') ,
        'add_new_item'          => _x('Add New Portfolio Page', 'edportfoliopages') ,
        'new_item_name'                 => _x('New Portfolio Page Name', 'edportfoliopages') ,
        'separate_items_with_commas'    => _x('Separate Portfolio Pages with Commas', 'edportfoliopages') ,
        'add_or_remove_items'           => _x('Add or Remove Portfolio Pages', 'edportfoliopages') ,
        'choose_from_most_used'         => _x('Choose from the most used Portfolio Pages', 'edportfoliopages') ,
        'not_found'             => _x('No Portfolio Pages Found', 'edportfoliopages') ,
        'menu_name'             => _x('Portfolio Pages', 'edportfoliopages') ,
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
            'slug' => 'portfolio-page'
        ) ,
    );

    register_taxonomy('portfolio_page', array(
        'portfolio'
    ) , $args);
}

add_action('init', 'ed_portfolio_pages_custom_taxonomies', 0);