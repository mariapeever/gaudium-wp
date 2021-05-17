<?php
/*
 * Plugin Name: ed. Portfolio
 * Plugin URI:
 * Description: ed. Portfolio is a portfolio plugin, which supports multiple portfolio pages, projects and project tags.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edportfolio
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Create portfolio custom post type
 * @return void
 */
function ed_create_portfolio_cpt()
{
    $labels = array(
        'name' 					=> __('Portfolio', 'Portfolio', 'edportfolio') ,
        'singular_name' 		=> __('Project', 'Project', 'edportfolio') ,
        'menu_name' 			=> __('Portfolio', 'edportfolio') ,
        'name_admin_bar' 		=> __('Project', 'edportfolio') ,
        'archives' 				=> __('Portfolio Archives', 'edportfolio') ,
        'attributes' 			=> __('Portfolio Attributes', 'edportfolio') ,
        'parent_item_colon' 	=> __('Parent Project', 'edportfolio') ,
        'all_items' 			=> __('All Projects', 'edportfolio') ,
        'add_new_item' 			=> __('Add New Project', 'edportflio') ,
        'add_new' 				=> __('Add New', 'edportfolio') ,
        'new_item' 				=> __('New Project', 'edportfolio') ,
        'edit_item' 			=> __('Edit Project', 'edportfolio') ,
        'update_item' 			=> __('Update Project', 'edportfolio') ,
        'view_item' 			=> __('View Project', 'edportfolio') ,
        'view_items' 			=> __('View Projects', 'edportfolio') ,
        'search_items' 			=> __('Search Projects', 'edportfolio') ,
        'not_found' 			=> __('Not Found', 'edportfolio') ,
        'not_found_in_trash' 		=> __('Not Found in Trash', 'edportfolio') ,
        'featured_image' 			=> __('Featured Image', 'edportfolio') ,
        'set_featured_image' 		=> __('Set Featured Image', 'edportfolio') ,
        'remove_featured_image' 	=> __('Remove Featured Image', 'edportfolio') ,
        'use_featured_image' 		=> __('Use as Featured Image', 'edportfolio') ,
        'insert_into_item' 			=> __('Insert Into Project', 'edportfolio') ,
        'uploaded_to_this_item' 	=> __('Uploaded to This Project', 'edportfolio') ,
        'items_list' 				=> __('Projects List', 'edportfolio') ,
        'items_list_navigation' 	=> __('Tutorials List Navigation', 'edportfolio') ,
        'filter_items_list' 		=> __('Filter', 'edportfolio') ,
    );

    $args = array(
        'label' 			=> __('Project', 'edportfolio') ,
        'description' 		=> __('Portfolio', 'edportfolio') ,
        'labels' 			=> $labels,
        'menu_icon' 		=> 'dashicons-schedule',
        'supports' 			=> array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            'author',
            'excerpt'
        ) ,
        'public' 			=> true,
        'show_ui' 			=> true,
        'show_in_menu' 			=> true,
        'menu_position' 		=> 5,
        'show_in_admin_bar' 	=> true,
        'show_in_nav_menus' 	=> true,
        'can_export' 			=> true,
        'has_archive' 			=> true,
        'hierarchical' 			=> false,
        'exclude_from_search' 	=> false,
        'show_in_rest' 			=> true,
        'publicly_queryable' 	=> true,
        'capability_type' 		=> 'post',
        'rewrite' 				=> array(
            'slug' => 'portfolio'
        ) ,
    );

    register_post_type('portfolio', $args);
}

add_action('init', 'ed_create_portfolio_cpt', 0);

function ed_rewrite_portfolio_flush()
{
    ed_create_portfolio_cpt();
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'ed_rewrite_portfolio_flush');

/** 
 * Add custom taxonomies Project Tags and Portfolio Pages
 * @return void
 */
function ed_portfolio_custom_taxonomies()
{

    $labels = array(
        'name' 					=> _x('Project Tags', 'taxonomy general name', 'edportfolio') ,
        'singular_name' 		=> _x('Project Tag', 'taxonomy sigular name', 'edportfolio') ,
        'search_items' 			=> _x('Search Project Tags', 'edportfolio') ,
        'all_items' 			=> _x('All Project Tags', 'edportfolio') ,
        'parent_item' 			=> null,
        'parent_item_colon' 	=> null,
        'edit_item' 			=> _x('Edit Project Tag', 'edportfolio') ,
        'update_item' 			=> _x('Update Project Tag', 'edportfolio') ,
        'add_new_item' 			=> _x('Add New Project Tag', 'edportfolio') ,
        'new_item_name' 		=> _x('New Project Tag Name', 'edportfolio') ,
        'separate_items_with_commas' 	=> _x('Separate Project Tags with Commas', 'edportfolio') ,
        'add_or_remove_items' 			=> _x('Add or Remove Project Tags', 'edportfolio') ,
        'choose_from_most_used' 		=> _x('Choose from the most used project tags', 'edportfolio') ,
        'not_found' => _x('No Project Tags Found', 'edportfolio') ,
        'menu_name' => _x('Project Tags', 'edportfolio') ,
    );

    $args = array(
        'hierarchical'          => false,
        'labels'                => $labels,
        'show_ui'               => true,
        'show_admin_column'     => true,
        'show_in_rest'          => true,
        'update_count_callback' => '_update_post_term_count',
        'query_var'             => true,
        'rewrite'               => array(
            'slug' => 'project-tag'
        ) ,
    );

    register_taxonomy('project_tag', array(
        'portfolio'
    ) , $args);

    $labels = array(
        'name'                  => _x('Portfolio Page', 'taxonomy general name', 'edportfolio') ,
        'singular_name'         => _x('Portfolio Page', 'taxonomy sigular name', 'edportfolio') ,
        'search_items'          => _x('Search Portfolio Pages', 'edportfolio') ,
        'all_items'             => _x('All Portfolio Pages', 'edportfolio') ,
        'parent_item'           => null,
        'parent_item_colon'     => null,
        'edit_item'             => _x('Edit Portfolio Page', 'edportfolio') ,
        'update_item'           => _x('Update Portfolio Page', 'edportfolio') ,
        'add_new_item'          => _x('Add New Portfolio Page', 'edportfolio') ,
        'new_item_name'                 => _x('New Portfolio Page Name', 'edportfolio') ,
        'separate_items_with_commas'    => _x('Separate Portfolio Pages with Commas', 'edportfolio') ,
        'add_or_remove_items'           => _x('Add or Remove Portfolio Pages', 'edportfolio') ,
        'choose_from_most_used'         => _x('Choose from the most used Portfolio Pages', 'edportfolio') ,
        'not_found'             => _x('No Portfolio Pages Found', 'edportfolio') ,
        'menu_name'             => _x('Portfolio Pages', 'edportfolio') ,
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

add_action('init', 'ed_portfolio_custom_taxonomies', 0);