<?php
/** 
 * Theme setup. Register Nav Menus.
 * @return void
 */

function gwp_theme_setup()
{
    add_theme_support('post-thumbnails');

    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'gaudium') ,
        'sidebar' => __('Sidebar Menu', 'gaudium')
    ));

}

add_action('after_setup_theme', 'gwp_theme_setup');


/**
 * Register and Enqueue styles.
 */
function gwp_register_scripts() {

    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('gwp-styles', get_stylesheet_uri(), array(), $theme_version);
    wp_enqueue_script('gwp-main', get_theme_file_uri('/js/main.js'), array( 'jquery' ), '20200220', true);

}

add_action('wp_enqueue_scripts', 'gwp_register_scripts');


/**
 * Register the required plugins.
 *
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme Gaudium for publication on ThemeForest
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_theme_file_path('/class-tgm-plugin-activation.php');

add_action( 'tgmpa_register', 'gwp__register_required_plugins' );

/**
 * Register the required plugins for this theme.
 */
function gwp__register_required_plugins() {

    $plugins = array(

        array(
            'name'               => 'ed. Portfolio',
            'slug'               => 'edportfolio',
            'source'             => 'edportfolio.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Portfolio Pages',
            'slug'               => 'edportfoliopages',
            'source'             => 'edportfoliopages.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Posts Pages',
            'slug'               => 'edpostspages',
            'source'             => 'edpostspages.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Forms',
            'slug'               => 'edforms',
            'source'             => 'edforms.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Archives',
            'slug'               => 'edarchives',
            'source'             => 'edarchives.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Meta',
            'slug'               => 'edmeta',
            'source'             => 'edmeta.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Recent Posts',
            'slug'               => 'edrecentposts',
            'source'             => 'edrecentposts.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Shortcodes',
            'slug'               => 'edshortcodes',
            'source'             => 'edshortcodes.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Sidebar Navbar',
            'slug'               => 'edsidebarnavbar',
            'source'             => 'edsidebarnavbar.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

        array(
            'name'               => 'ed. Tags',
            'slug'               => 'edtags',
            'source'             => 'edtags.zip',
            'required'           => false,
            'version'            => '1.0',
            'force_activation'   => false,
            'force_deactivation' => false,
            'external_url'       => '',
            'is_callable'        => '',
        ),

    );

    /*
     * Configuration settings
     */
    $config = array(
        'id'           => 'gaudium',               
        'default_path' => get_theme_file_path('/lib/plugins/'),
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'dismiss_msg'  => '',
        'is_automatic' => false,
        'message'      => '',
    );

    tgmpa( $plugins, $config );
}

/**
 * Require customizer
 */
require get_theme_file_path('/inc/customizer.php');

/** 
 * Require WP Bootstrap Navwalker
 */
require_once get_theme_file_path('/wp-bootstrap-navwalker.php');

/** 
 * Adjust excerpt length
 * @param $length Excerpt length.
 * @return 20 Adjusted excerpt length.
 */
function gwp_set_excerpt_length($length)
{
    return 20;
}

add_filter('excerpt_length', 'gwp_set_excerpt_length', 999);

/** 
 * Register widget positions
 * @param $id ID.
 * @return void
 */
function gwp_init_widgets($id)
{

    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Blog Page Title',
        'id' => 'blog-page-title',
        'before_widget' => '<div class="navbar-form no-padding">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Blocks Top',
        'id' => 'blocks-top',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Blocks Bottom',
        'id' => 'blocks-bottom',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar Navbar Top',
        'id' => 'sidebar_navbar_top',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Sidebar Navbar Bottom',
        'id' => 'sidebar_navbar_bottom',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Main Navbar Left',
        'id' => 'main_navbar_left',
        'before_widget' => '<div class="widget pull-left">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));

    register_sidebar(array(
        'name' => 'Main Navbar Right',
        'id' => 'main_navbar_right',
        'before_widget' => '<div class="widget pull-right hspace-l-1">',
        'after_widget' => '</div>',
        'before_title' => '',
        'after_title' => '',
    ));
}

add_action('widgets_init', 'gwp_init_widgets');

/** 
 * Add featured image meta box to post and portfolio editing screens
 * @param $post_type Post type.
 * @return void
 */
function gwp_add_image_meta_box($post_type)
{
    // Limit meta box to certain post types.
    $post_types = array(
        'post',
        'portfolio'
    );

    if (in_array($post_type, $post_types))
    {
        add_meta_box('gwp_featured_image_settings', __('Featured Image Settings', 'gaudium') , 'gwp_image_meta_box_html', $post_type, 'side', 'high');
    }
}

add_action('add_meta_boxes', 'gwp_add_image_meta_box');

/** 
 * Featured image meta box html with options for layout, size and background colour
 * @param $post Post.
 * @return void
 */
function gwp_image_meta_box_html($post)
{
    wp_nonce_field(basename(__FILE__) , 'featured-image-meta-box-nonce');
    $layout_options = array(
        array(
            'value' => 'landscape',
            'name'  => 'Landscape'
        ) ,
        array(
            'value' => 'default',
            'name'  => 'Default'
        ) ,
        array(
            'value' => 'portrait',
            'name'  => 'Portrait'
        )
    );
    $bg_size_options = array(
        array(
            'value' => 'centered',
            'name'  => 'Centered'
        ) ,
        array(
            'value' => 'bottom',
            'name'  => 'Bottom'
        ) ,
        array(
            'value' => 'cover',
            'name'  => 'Cover'
        ) ,
        array(
            'value' => 'contain',
            'name'  => 'Contain'
        )
    );
    $bg_color_options = array(
        array(
            'value' => 'select',
            'name'  => 'Select'
        ) ,
        array(
            'value' => '#dcf4fe',
            'name'  => 'Light Blue'
        ) ,
        array(
            'value' => '#f36d58',
            'name'  => 'Blush'
        ) ,
        array(
            'value' => '#eee778',
            'name'  => 'Yellow'
        ) ,
        array(
            'value' => '#fff6eb',
            'name'  => 'Cream'
        ) ,
        array(
            'value' => '#97d8d6',
            'name'  => 'Light Sapphire'
        ) ,
        array(
            'value' => '#5c9993',
            'name'  => 'Dark Sapphire'
        ) ,
        array(
            'value' => '#f9f8f6',
            'name'  => 'Light Tan'
        ) ,
        array(
            'value' => '#daf1f0',
            'name'  => 'Light Teal'
        )
    );
    gwp_meta_select_field($post, 'featured_image_layout', 'Layout', $layout_options, false);
    gwp_meta_select_field($post, 'featured_image_bg_size', 'Image Size', $bg_size_options, false);
    gwp_meta_select_field($post, 'featured_image_bg_color', 'Background Color', $bg_color_options, false);
}

/** 
 * Update post meta with featured image options
 * @param $post_id Post ID.
 * @return $post_id Post ID.
 * @return void
 */
function gwp_save_image_postdata($post_id)
{
    if (!isset($_POST['featured-image-meta-box-nonce']) || !wp_verify_nonce($_POST['featured-image-meta-box-nonce'], basename(__FILE__)))
    {
        return $post_id;
    }
    if (!current_user_can('edit_post', $post_id))
    {
        return $post_id;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
    {
        return $post_id;
    }

    $fields = array(
        array(
            'key' => '_featured_image_layout_key',
            'field' => 'featured_image_layout_field'
        ) ,
        array(
            'key' => '_featured_image_bg_size_key',
            'field' => 'featured_image_bg_size_field'
        ) ,
        array(
            'key' => '_featured_image_bg_color_key',
            'field' => 'featured_image_bg_color_field'
        )
    );
    foreach ($fields as $field)
    {
        if (array_key_exists($field['field'], $_POST))
        {
            update_post_meta($post_id, $field['key'], $_POST[$field['field']]);
        }
    }
}
add_action('save_post', 'gwp_save_image_postdata');

/**
 * Select field html
 * @param $post Post object.
 * @param $field_id Field ID.
 * @param $label Label.
 * @param $options Select options.
 * @param $multiple Multiple select True/False.
 * @return void
 */
function gwp_meta_select_field($post, $field_id, $label, $options, $multiple)
{
    $value = get_post_meta($post->ID, '_' . $field_id . '_key', true);

    ?>
    <label for="<?php echo $field_id . '_field'; ?>"><?php _e($label, 'gaudium'); ?></label>
    <select <?php 
        if ($multiple): ?> multiple <?php
        endif; ?> name="<?php echo $field_id . '_field'; ?>" id="<?php echo $field_id . '_field'; ?>" style="width: calc(100% - 38px);">
        <?php foreach ($options as $option): ?>
        <option value="<?php echo $option['value']; ?>" <?php selected($value, $option['value']); ?>><?php echo __($option['name'], 'gaudium'); ?></option>
        <?php endforeach; ?>
    </select>
    <?php
}

/**
 * Walk post categories
 * @param $post_id Post ID.
 * @param $args (default: array()) Arguments array.
 * @return $output List of categories
 */
function walk_post_categories($post_id, $args = array())
{
    $args = wp_parse_args($args, array(
        'taxonomy' => 'category'
    ));

    $args['walker'] = new WP_Bootstrap_Catwalker($post_id, $args['taxonomy']);

    $output = wp_list_categories($args);
    if ($output)
    {
        return $output;
    }
}

/**
 * Add category name to permalink
 * @return void
 */
function gwp_permalink()
{
    $permalink = the_permalink();
    if (!is_tag() && !is_search())
    {
        $term = get_queried_object();
        $slug = $term->slug;
        if ($slug)
        {
            $permalink .= '?cat=' . $slug;
        }
    }
    echo $permalink;
}

/**
 * Add the category that the user came from to breadcrumb
 * @return void
 */
function gwp_breadcrumb()
{
    $output = '<ol class="breadcrumb">';
    $output .= '<li><a href="' . home_url() . '">' . __('Home', 'gaudium') . '</a></li>';
    if (is_singular('portfolio') || 
            is_post_type_archive('portfolio') || 
            is_tax('portfolio_page') ||
            is_tax('project_tag'))
    {

        $output .= '<li';
        if(is_singular('portfolio') || 
           is_post_type_archive('portfolio') ||
           is_tax('portfolio_page')) {
            $output .= ' class="active"';
        }
        $output .= '>';
        if(is_tax('project_tag') ||
           is_singular('portfolio'))
        {
            $output .= '<a href="' . get_post_type_archive_link('portfolio') . '">';
        }
        
        $output .= get_theme_mod('portfolio_title', 'Portfolio');
        if(is_tax('project_tag') ||
           is_singular('portfolio'))
        {
            $output .= '</a>';
        }
        $output .= '</li>';
    }
    elseif (is_home() || 
        is_tax('posts_page') || 
        is_author() || 
        is_category() ||  
        is_tag() ||
        is_singular('post') ||
        is_archive())
    {
        $output .= '<li';
        if (is_home() || is_tax('posts_page')) 
        {  
            $output .= ' class="active"';
        } 
        $output .= '>';
        if (is_author() || 
            is_category() ||  
            is_tag() ||
            is_singular('post') ||
            is_archive())
        {
            $output .= '<a href="' . get_the_permalink(get_option('page_for_posts')) . '">';
        }
        $output .= get_the_title(get_option('page_for_posts', true));
        if(is_author() || 
            is_category() ||  
            is_tag() ||
            is_singular('post') ||
            is_archive())
        {
            $output .= '</a>';
        }
        $output .= '</li>';
        
        if (is_author())
        {
            $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
            $output .= '<li class="active">' . __($curauth->nickname, 'gaudium') . '</li>';
        }
        elseif (is_archive() && !is_category() && !is_tax('posts_page'))
        {
            $output .= '<li class="active">' . get_the_archive_title() . '</li>';
        }
    }
    elseif (is_search())
    {
        $output .= '<li class="active">' . __('Search: ', 'gaudium') . get_search_query() . '</li>';
    }
    else {
        $output .= '<li class="active">' . get_the_title() . '</li>';
    }

    if (is_category() || is_tax('project_tag'))
    {
        $object = get_queried_object();
    }
    
    if (is_tax('project_tag'))
    {
        $proj_tag = $object->name;
        $output .= '<li class="active">' . $proj_tag . '</li>';
    }
    elseif (is_singular('post') || is_category())
    {
        if (is_singular('post'))
        {
            $resource = $_SERVER['REQUEST_URI'];
            $params = explode("?", $resource);
            $cat_index = array_values(preg_grep("/^cat=.*/", $params));
            if ($cat_index)
            {
                $cat_slug = str_replace("cat=", "", $cat_index[0]);
                $cat_slug = explode("&", $cat_slug);
                $cat_slug = $cat_slug[0];
                if (get_category_by_slug($cat_slug))
                {
                    $category = get_category_by_slug($cat_slug);
                    $id = $category->term_id;
                }
            }
            else
            {
                $category = get_the_category();
                $cat_name = $category[0]->name;
                $id = $category[0]->term_id;
            }
        }
        elseif(is_category()) {
            $id = $object->term_id;
        }
        $cat_parents = get_category_parents($id, true, '|');
        $parents = explode("|", $cat_parents);
        array_pop($parents);
        for ($i = 0;$i < sizeof($parents);$i++)
        {
            if ($i == sizeof($parents) - 1)
            {
                $output .= '<li class="active">';
            }
            else
            {
                $output .= '<li>';
            }
            $output .= __($parents[$i], 'gaudium') . '</li>';
        }
    }
    $output .= '</ol>';
    echo $output;
}

/**
 * Project tags filter
 * @return void
 */
function gwp_project_tags_filter()
{
    $project_tags = get_terms('project_tag');
    $output = '<li role="presentation" class="active"><a data-rel="all" class="item-cat">All</a></li>';
    if (!empty($project_tags) && !is_wp_error($project_tags))
    {
        foreach ($project_tags as $project_tag)
        {
            $output .= '<li role="presentation"><a data-rel="' . $project_tag->slug . '" class="item-cat">' . $project_tag->name . '</a></li>';
        }
    }
    echo $output;
}

/**
 * List tag links to tag pages
 * @return void
 */
function gwp_get_tags()
{
    $output = '';
    $tags = get_the_tags(get_the_ID());
    if (!empty($tags) && !is_wp_error($tags))
    {
        foreach ($tags as $tag)
        {
            $output .= '<a href="' . get_tag_link($tag->term_id) . '" class="meta"><span>' . $tag->slug . '</span></a>';
        }
    }
    echo $output;
}

/**
 * List project tag links to project tag pages
 * @return void
 */
function gwp_get_project_tags()
{
    $project_id = get_the_ID();
    $output = '';
    $project_tags = get_the_terms($project_id, 'project_tag');
    if (!empty($project_tags) && !is_wp_error($project_tags))
    {
        foreach ($project_tags as $project_tag)
        {
            $output .= '<a href="' . get_tag_link($project_tag->term_id) . '" class="meta"><span>' . $project_tag->slug . '</span></a>';
        }
    }
    echo $output;
}

/**
 * List project tags
 * @return void
 */
function gwp_project_tags()
{
    $project_id = get_the_ID();
    $output = '';
    $project_tags = get_the_terms($project_id, 'project_tag');
    if (!empty($project_tags) && !is_wp_error($project_tags))
    {
        foreach ($project_tags as $project_tag)
        {
            $output .= $project_tag->slug . ' ';
        }
    }
    echo $output;
}

/**
 * Echo author username
 * @return void
 */
function gwp_author_username()
{
    $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
    echo $curauth->nickname;
}

/**
 * Get taxonomies
 * @return $taxonomies Taxonomies.
 */
function gwp_get_taxonomies() 
{
    $taxonomies = get_taxonomies(array(
        'public'            => true,
        'show_in_nav_menus' => true
    ));
    return $taxonomies;
}

/**
 * Get post types
 * @return $post_types Post types.
 */
function gwp_get_post_types() 
{
    $post_types = get_post_types(array(
        'public' => true, 
        'show_in_nav_menus' => true
    ));
    return $post_types;
}

/**
 * Get page types, including post types and taxonomies
 * @return $page_types Page types.
 */
function gwp_get_page_types() 
{
    $page_types = [];
    $post_types = gwp_get_post_types();
    
    foreach ($post_types as $key => $value) 
    {
        $page_types = array_merge($page_types, array($value => ucfirst($value)));
    }
    $page_types = array_replace($page_types, array(array_search('portfolio', $post_types) => 'Project'));

    $taxonomies = gwp_get_taxonomies();

    foreach($taxonomies as $key => $value) 
    {
        $tax_name = str_replace('_', ' ', $value);
        $page_types = array_merge($page_types, array($value => ucfirst($tax_name)));
    }
    
    return $page_types;
}

/**
 * Get a select list of page types, including post types and taxonomies
 * @param $page_types Page types
 * @return $page_type_select Page types select.
 */
function gwp_get_page_type_select($page_types) 
{

    $page_type_select = array_merge(array('0' => 'Select'), $page_types);

    return $page_type_select;
}

/**
 * Generate theme mod
 * @param $prefix Post specific prefix.
 * @param $defaults Post type/taxonomy specific prefix.
 * @param $field Field name.
 * @param $output Theme mod.
 */
function gwp_theme_mod($prefix, $defaults, $field) 
{
    if (get_theme_mod($prefix . $field) &&
        get_theme_mod($prefix . $field) == '-0')
    {
        $output = '0';
    }
    elseif (get_theme_mod($prefix . $field) && 
            (get_theme_mod($prefix . $field) != '0' ||
            get_theme_mod($prefix . $field) != '')) {  
        $output = get_theme_mod($prefix . $field);
    }
    elseif (get_theme_mod($defaults . $field) &&
            get_theme_mod($defaults . $field) == '-0') {  
        $output = '0';
    }
    else
    {
        $output = get_theme_mod($defaults . $field);
    }
    return $output;
}

/**
 * Get max theme mod value of defaults vs page-specific settings
 * @param $prefix Post specific prefix.
 * @param $defaults Post type/taxonomy specific prefix.
 * @param $field Field name.
 * @param $output Max theme mod value.
 */
function gwp_theme_mod_max($prefix, $defaults, $field) 
{
    if (get_theme_mod($prefix . $field) &&
        get_theme_mod($prefix . $field) == '-0')
    {
        $output = '0';
    }
    elseif (get_theme_mod($prefix . $field) && 
            (intval(get_theme_mod($prefix . $field)) > intval(get_theme_mod($defaults . $field)))) {  
        $output = get_theme_mod($prefix . $field);
    }
    elseif (get_theme_mod($defaults . $field) &&
            get_theme_mod($defaults . $field) == '-0') {  
        $output = '0';
    }
    else
    {
        $output = get_theme_mod($defaults . $field);
    }
    return $output;
}

/**
 * Generate theme mod with value
 * @param $prefix Post specific prefix.
 * @param $defaults Post type/taxonomy specific prefix.
 * @param $field Field name.
 * @param $output Theme mod with value.
 */
function gwp_theme_mod_value($prefix, $defaults, $field, $value) 
{
    if (get_theme_mod($prefix . $field) &&
        get_theme_mod($prefix . $field) == '-0')
    {
        $output = '0';
    }
    elseif (get_theme_mod($prefix . $field) && 
            (get_theme_mod($prefix . $field) != '0' ||
            get_theme_mod($prefix . $field) != '')) {  
        $output = get_theme_mod($prefix . $field, $value);
    }
    elseif (get_theme_mod($defaults . $field) &&
            get_theme_mod($defaults . $field) == '-0') {  
        $output = '0';
    }
    else
    {
        $output = get_theme_mod($defaults . $field, $value);
    }
    return $output;
}

/**
 * Generate theme mod defaults
 * @return $defaults Theme mod defaults.
 */
function gwp_page_defaults() 
{
    if(is_category() || is_tag() || is_tax())
    {
        $obj = get_queried_object();
        $defaults = $obj->taxonomy;
    }
    elseif(is_page() || is_single())
    {
        $defaults = get_queried_object()->post_type;
    }
    elseif (is_home() || 
            is_archive() ||
            is_author() ||
            is_search())
    {
        $defaults = '';
    }
    else 
    {
        return false;
    }
    return $defaults;
}

/**
 * Generate theme mod prefix
 * @return $prefix Theme mod prefix.
 */
function gwp_page_prefix() 
{
    if (is_post_type_archive()) 
    {
        $prefix = get_queried_object()->name;
    }
    elseif(is_category() || is_tag() || is_tax())
    {
        $obj = get_queried_object();
        $id = $obj->term_id;
        if(is_tax('portfolio_page')) 
        {
            $prefix = $id . '_portfolio';
        }
        elseif(is_tax('posts_page'))
        {
            $prefix = $id . '_blog';
        }
        else
        {
            $prefix = 'term_' . $id;
        }
    }
    elseif(is_page() || is_single()) 
    {
        $prefix = get_queried_object_id();
    }
    elseif (is_home() || 
            is_archive() ||
            is_author() ||
            is_search())
    {        
        $prefix = 'blog';
    }
    else 
    {
        return false;
    }
    return $prefix;
}

function gwp_image_media_settings($prefix, $defaults, $field, $size) {
    if(gwp_theme_mod($prefix, $defaults, $field . '_' . $size . '_url') != '' ||
        gwp_theme_mod($prefix, $defaults, $field . '_box_' . $size . '_width') != '0' ||
        gwp_theme_mod($prefix, $defaults, $field . '_box_' . $size . '_height') != '0' ||
        gwp_theme_mod($prefix, $defaults, $field . '_box_' . $size . '_x') != '0' ||
        gwp_theme_mod($prefix, $defaults, $field . '_box_' . $size . '_y') != '0' ||
        gwp_theme_mod($prefix, $defaults, $field . '_' . $size . '_width') != '0' ||
        gwp_theme_mod($prefix, $defaults, $field . '_' . $size . '_height') != '0' ||
        gwp_theme_mod($prefix, $defaults, $field . '_' . $size . '_x') != '0' ||
        gwp_theme_mod($prefix, $defaults, $field . '_' . $size . '_y') != '0') {
        return true;
    }
    return false;
}

/**
 * Include images from the customizer
 * @param $prefix Prefix based on image location.
 * @return $output Images html.
 */
function gwp_include_images($prefix, $defaults, $field)
{

    $output = '';
    for ($j = 0;$j < intval(gwp_theme_mod($prefix, $defaults, $field . '_number_images'));$j++)
    {
        $output .= '<div class="layer';
        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_layout') != '0')
        {
            $output .= ' autothumb ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_layout', '0');
        } 
        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_top_xs_space') != '0')
        {
            $output .= ' tspace-xs-' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_top_xs_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bottom_xs_space') != '0')
        {
            $output .= ' bspace-xs-' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_bottom_xs_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_speed') != '0')
        {
            $output .= ' speed speed-' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_speed', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_sm_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_md_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_lg_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bg') != '0')
        {
            $output .= ' ed-styles';
        }
        $output .= '"';
        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_sm_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_md_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_lg_url') != '' || 
            gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bg') != '0')
        {
            $output .= ' style="';
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_width') != '0')
            {
                $output .= 'width: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_width', '0') . ';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_height') != '0')
            {
                $output .= 'height: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_height', '0') .';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_x') != '0')
            {
                $output .= 'left: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_x', '0') . ';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_y') != '0')
            {
                $output .= 'top: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_y', '0') . ';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_styles') != '0')
            {
                $output .=  gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_styles', '0');
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_url') != '')
            {
                $output .= 'background-image: url(' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_url', '') . ');';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bg') != '0')
            {
                $output .= 'background-color: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_bg', '0') . ';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_width') != '0' || 
                gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_height') != '0' || 
                gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bg_size') != '0')
            {
                $output .= 'background-size: ';
                if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_width') != '0' || 
                    gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_height') != '0')
                {
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_width') != '0')
                    {
                        $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_width', '0');
                    }
                    else
                    {
                        $output .= 'auto';
                    }
                    $output .= ' ';
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_height') != '0')
                    {
                        $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_height', '0');
                    }
                    else
                    {
                        $output .= 'auto';
                    }
                }
                elseif (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bg_size') != '0')
                {
                    $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_bg_size', '0');
                }
                $output .= ';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_x') != '0' || 
                gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_y') != '0')
            {
                if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_x') != '0')
                {
                    $output .= 'background-position-x: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_x', '0') . ';';
                }
                if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_y') != '0')
                {
                    $output .= 'background-position-y: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_y', '0') . '!important;';
                }
            }
            elseif (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bg_position') != '0')
            {
                $output .= 'background-position: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_bg_position', '0') . ';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_repeat') != '0')
            {
                $output .= 'background-repeat: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_repeat', 'no-repeat') . ';';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_bg') != '0')
            {
                $output .= 'background-color: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_bg', '0') . ';';
            }
            $output .= '"';
            if (gwp_image_media_settings($prefix, $defaults, $field . '_image_' . $j, 'xs') || 
                gwp_image_media_settings($prefix, $defaults, $field . '_image_' . $j, 'sm') || 
                gwp_image_media_settings($prefix, $defaults, $field . '_image_' . $j, 'md') || 
                gwp_image_media_settings($prefix, $defaults, $field . '_image_' . $j, 'lg'))
            {
                $output .= ' data-media="';
                if (gwp_image_media_settings($prefix, $defaults, $field . '_image_' . $j, 'xs'))
                {
                    $output .= '@media (max-width: 47.9375rem) { ';
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_url') != '0')
                    {
                        $output .= 'background-image: url(' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_xs_url', '') . ');';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_xs_width') != '0')
                    {
                        $output .= 'width: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_xs_width', '0') . ';';
                    }
                     if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_xs_height') != '0')
                    {
                        $output .= 'height: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_xs_height', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_xs_x') != '0')
                    {
                        $output .= 'left: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_xs_x', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_xs_y') != '0')
                    {
                        $output .= 'top: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_xs_y', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_styles_xs') != '0')
                    {
                        $output .=  gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_styles_xs', '0');
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_width') != '0' || 
                        gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_height') != '0')
                    {
                        $output .= 'background-size: ';
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_width') != '0')
                        {
                            $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_xs_width', '0');
                        }
                        else
                        {
                            $output .= 'auto';
                        }
                        $output .= ' ';
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_height') != '0')
                        {
                            $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_xs_height', '0');
                        }
                        else
                        {
                            $output .= 'auto';
                        }
                        $output .= ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_x') != '0' || 
                        gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_y') != '0')
                    {
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_x') != '0')
                        {
                            $output .= 'background-position-x: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_xs_x', '0') . ';';
                        }
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_xs_y') != '0')
                        {
                            $output .= 'background-position-y: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_xs_y', '0') . '!important;';
                        }
                    }
                    $output .= ' } }, ';
                }
                if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_sm_url') != '')
                {
                    $output .= '@media (min-width: 48rem) { background-image: url(' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_sm_url', '') . ');';
        
                    $output .= ' } }, ';
                }
                if (gwp_image_media_settings($prefix, $defaults, $field . '_image_' . $j, 'md'))
                {
                    $output .= '@media (min-width: 62rem) { ';
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_md_url') != '0')
                    {
                        $output .= 'background-image: url(' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_md_url', '') . ');';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_md_width') != '0')
                    {
                        $output .= 'width: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_md_width', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_md_height') != '0')
                    {
                        $output .= 'height: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_md_height', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_md_x') != '0')
                    {
                        $output .= 'left: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_md_x', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_md_y') != '0')
                    {
                        $output .= 'top: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_md_y', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_styles_md') != '0')
                    {
                        $output .=  gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_styles_md', '0');
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_md_width') != '0' || 
                        gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_md_height') != '0')
                    {
                        $output .= 'background-size: ';
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_md_width') != '0')
                        {
                            $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_md_width', '0');
                        }
                        else
                        {
                            $output .= 'auto';
                        }
                        $output .= ' ';
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_md_height') != '0')
                        {
                            $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_md_height', '0');
                        }
                        else
                        {
                            $output .= 'auto';
                        }
                        $output .= ';';
                    }
                    $output .= ' } }, ';
                }
                if (gwp_image_media_settings($prefix, $defaults, $field . '_image_' . $j, 'lg'))
                {
                    $output .= '@media (min-width: 75rem) { ';
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_lg_url') != '0')
                    {
                        $output .= 'background-image: url(' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_lg_url', '') . ');';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_lg_width') != '0')
                    {
                        $output .= 'width: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_lg_width', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_lg_height') != '0')
                    {
                        $output .= 'height: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_lg_height', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_lg_x') != '0')
                    {
                        $output .= 'left: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_lg_x', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_box_lg_y') != '0')
                    {
                        $output .= 'top: ' . gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_box_lg_y', '0') . ';';
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_styles_lg') != '0')
                    {
                        $output .=  gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_styles_lg', '0');
                    }
                    if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_lg_width') != '0' || 
                        gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_lg_height') != '0')
                    {
                        $output .= 'background-size: ';
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_lg_width') != '0')
                        {
                            $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_lg_width', '0');
                        }
                        else
                        {
                            $output .= 'auto';
                        }
                        $output .= ' ';
                        if (gwp_theme_mod($prefix, $defaults, $field . '_image_' . $j . '_lg_height') != '0')
                        {
                            $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_image_' . $j . '_lg_height', '0');
                        }
                        else
                        {
                            $output .= 'auto';
                        }
                        $output .= ';';
                    }
                    $output .= ' } }, ';
                }
                $output .= '"';
            }
        }
        $output .= '></div>';
    }
    return $output;
}

/**
 * Include content blocks from the customizer
 * @param $prefix Prefix based on content block location.
 * @return $output Content block html.
 */
function gwp_include_content($prefix, $defaults, $field)
{
    $output = '';
    
    for ($j = 0;$j < intval(gwp_theme_mod($prefix, $defaults, $field . '_content_number'));$j++)
    {
        $output .= '<div class="content';

        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_cols') != '0')
        {
            $output .= ' col-sm-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_cols', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_cols_push') != '0')
        {
            $output .= ' col-sm-push-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_cols_push', '0');
        }
        elseif (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_cols_pull') != '0')
        {
            $output .= ' col-sm-pull-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_cols_pull', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_top_xs_space') != '0')
        {
            $output .= ' tspace-xs-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_top_xs_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_top_sm_space') != '0')
        {
            $output .= ' tspace-sm-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_top_sm_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_top_md_space') != '0')
        {
            $output .= ' tspace-md-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_top_md_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_top_lg_space') != '0')
        {
            $output .= ' tspace-lg-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_top_lg_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_bottom_xs_space') != '0')
        {
            $output .= ' bspace-xs-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_bottom_xs_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_bottom_sm_space') != '0')
        {
            $output .= ' bspace-sm-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_bottom_sm_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_bottom_md_space') != '0')
        {
            $output .= ' bspace-md-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_bottom_md_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_bottom_lg_space') != '0')
        {
            $output .= ' bspace-lg-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_bottom_lg_space', '0');
        }
        if (gwp_theme_mod($prefix, $defaults, $field . '_content_' . $j . '_speed') != '0')
        {
            $output .= ' speed speed-' . gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j . '_speed', '0');
        }
        $output .= '">';
        $output .= gwp_include_images($prefix, $defaults, $field . '_content_' . $j);
        $output .= gwp_do_shortcode(gwp_theme_mod_value($prefix, $defaults, $field . '_content_' . $j, ''));
        $output .= '</div>';
    }
    return $output;
}

/**
 * Get posts of specified post type
 * @param $post_type Post type.
 * @param $number_posts Number of posts.
 * @return $post_ids Array of post ids.
 */
function gwp_get_posts($post_type, $number_posts)
{
    $args = array(
        'fields' => 'ids',
        'numberposts' => intval($number_posts),
        'post_type' => $post_type
    );
    $post_ids = get_posts($args);
    return $post_ids;
}

/**
 * Include portfolio from the customizer
 * @param $prefix Prefix based on portfolio location.
 * @return $output Portfolio html.
 */
function gwp_include_portfolio($prefix, $defaults, $field)
{
    $output = '';
    if (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_show_tags') != '0')
    {
        $output .= '<header>
                        <nav id="' . $prefix . '_portfolio_tags" class="navbar navbar-inverse">
                            <div class="navbar-header">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tags-' . $prefix . '" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                            </div>    
                        <div class="collapse navbar-collapse" id="tags-' . $prefix . '">
                            <ul class="nav nav-pills text-' . gwp_theme_mod_value($prefix, $defaults, $field . '_portfolio_tags_position', '0') . ' bspace-1">';
        $all_project_tags = get_terms('project_tag');
        $output .= '<li role="presentation" class="active"><a data-rel="all" class="item-cat">All</a></li>';
        if (!empty($all_project_tags) && !is_wp_error($all_project_tags))
        {
            foreach ($all_project_tags as $project_tag)
            {
                $output .= '<li role="presentation"><a data-rel="' . $project_tag->slug . '" class="item-cat">' . $project_tag->name . '</a></li>';
            }
        }

        $output .= '</ul>
                </div>
              </nav>
            </header>
          </div>';
    }
    if (gwp_theme_mod($prefix, $defaults, $field . '_number_posts') != '0')
    {
        $post_ids = gwp_get_posts('portfolio', gwp_theme_mod_value($prefix, $defaults, $field . '_number_posts', '0'));
        $output .= '<div id="' . $prefix . '-portfolio-items" class="portfolio-items';
        if (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_layout') == 'masonry' || 
            gwp_theme_mod($prefix, $defaults, $field . '_portfolio_layout') == 'mosaic')
        {
            $output .= ' masonry';
        }
        $output .= '">';
        $output .= '<div class="row';
        if (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_gutters') == '0')
        {
            $output .= ' row-gutters';
        }
        else
        {
            $output .= ' no-gutters';
        }
        $output .= '">';
        if (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_layout') == 'mosaic')
        {
            $output .= gwp_mosaic_grid($prefix, gwp_calc_mosaic_mod(sizeof($post_ids)));
        }
        foreach ($post_ids as $post_id)
        {
            $output .= '<div class="col-sm-';
            if (gwp_theme_mod($prefix, $defaults, $field . '_layout') != '0')
            {
                $output .= gwp_theme_mod_value($prefix, $defaults, $field . '_layout', '0');
            }
            else
            {
                $output .= '3';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_gutters') == '0')
            {
                $output .= ' col-gutter';
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_load') != '0')
            {
                $output .= ' to-load';
            }
            $output .= '">';
            $output .= '<article class="item';
            $project_tags = get_the_terms($post_id, 'project_tag');
            $output .= ' all';
            if (!empty($project_tags) && !is_wp_error($project_tags))
            {
                foreach ($project_tags as $project_tag)
                {
                    $output .= ' ' . $project_tag->slug;
                }
            }
            if (has_post_thumbnail($post_id) || 
                get_post_meta($post_id, '_featured_image_bg_color_key', true) != 'select')
            {
                $output .= ' ed-styles autothumb';
                if (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_layout') == 'default')
                {
                    $output .= '';
                }
                elseif (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_layout') == 'landscape')
                {
                    $output .= ' landscape';
                }
                elseif (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_layout') == 'portrait')
                {
                    $output .= ' portrait';
                }
                elseif (get_post_meta($post_id, '_featured_image_layout_key', true))
                {
                    $output .= ' ' . get_post_meta($post_id, '_featured_image_layout_key', true);
                }
                if (gwp_theme_mod($prefix, $defaults, $field . '_portfolio_gutters') == '0')
                {
                    $output .= ' bspace-1';
                }
                if (get_post_meta($post_id, '_featured_image_bg_size_key', true))
                {
                    $output .= ' img-' . get_post_meta($post_id, '_featured_image_bg_size_key', true);
                }
                $output .= '" style="background-image: url(' . get_the_post_thumbnail_url($post_id) . ');';
                if (get_post_meta($post_id, '_featured_image_bg_color_key', true) != 'select')
                {
                    $output .= ' background-color: ' . get_post_meta($post_id, '_featured_image_bg_color_key', true) . ';';
                }
            }
            $output .= '">';

            $output .= '<div class="item-desc">
                            <header>
                              <h3 class="item-title">' . get_the_title($post_id) . '</h3>
                            </header>
                            <p class="item-info">' . get_the_excerpt($post_id) . ' <a href="' . get_the_permalink($post_id) . '"><span class="ion-android-add xs"></span></a></p>
                        </div>
                    </article>
                </div>';

        }
        $output .= '</div>';
        if (gwp_theme_mod($prefix, $defaults, $field . '_load') != '0' && 
            gwp_theme_mod($prefix, $defaults, $field . '_load_more') != '0')
        {
            $output .= '<div class="row">
                            <div class="col-sm-12 text-center mdspace-2">
                                <button class="load-more btn btn-default">' . __('Load more', 'gaudium') . '</button>
                            </div>
                        </div>';
        }
    }
    return $output;
}

/**
 * Shorten title to 60 characters
 * @param $str Title.
 * @return $str Shortened title.
 */
function gwp_shorten_title($str)
{
    $length = 60;
    if (strlen($str) > $length)
    {
        $str = substr($str, 0, $length);
        $str = substr($str, 0, strrpos($str, ' '));
        if(!preg_match('/^.*[A-Za-z0-9]$/', $str))
        {
            $str = substr($str, 0, -1);
        }
        $str .= '...';
        
    }
    return $str;
}

/**
 * Include blog from the customizer
 * @param $prefix Prefix based on blog location.
 * @return $output Blog html.
 */
function gwp_include_blog($prefix, $defaults, $field)
{
    $output = '';
    if (gwp_theme_mod($prefix, $defaults, $field . '_number_posts') != '0')
    {
        $post_ids = gwp_get_posts('post', gwp_theme_mod_value($prefix, $defaults, $field . '_number_posts', '0'));
        foreach ($post_ids as $post_id)
        {
            $output .= '<div class="blog-post';
            if (gwp_theme_mod($prefix, $defaults, $field . '_layout') != '0')
            {
                $output .= ' col-md-' . gwp_theme_mod_value($prefix, $defaults, $field . '_layout', '0');
            }
            if (gwp_theme_mod($prefix, $defaults, $field . '_load') != '0')
            {
                $output .= ' to-load';
            }
            $output .= ' bspace-1">';
            $output .= '<article>';
            if (has_post_thumbnail($post_id))
            {
                $output .= '<div class="ed-styles autothumb landscape';
                if (get_post_meta($post_id, '_featured_image_bg_size_key', true))
                {
                    $output .= ' img-' . get_post_meta($post_id, '_featured_image_bg_size_key', true);
                }
                $output .= '" style="background-image: url(' . get_the_post_thumbnail_url($post_id) . ');';
                if (get_post_meta($post_id, '_featured_image_bg_color_key', true) != 'select')
                {
                    $output .= ' background-color: ' . get_post_meta($post_id, '_featured_image_bg_color_key', true) . ';';
                }
                $output .= '"></div>';
            }
            $output .= '<div class="article-body">
                            <header>
                            <h3><a href="' . get_the_permalink($post_id) . '" class="dark">' . gwp_shorten_title(get_the_title($post_id)) . '</a></h3>
                            </header>
                            <footer>
                                <p><span class="meta">' . get_the_date('D M j', $post_id) . '</span>
                                </p>
                            </footer>
                        </div>
                    </article>
                </div>';
        }
        $output .= '<div class="row">
                        <div class="col-sm-12 text-center mdspace-2">
                            <button class="load-more btn btn-default">' . __('Load more', 'gaudium') . '</button>
                        </div>
                    </div>';
    }
    return $output;
}

/**
 * Include a stage slider from the customizer
 * @return void
 */
function gwp_stage()
{
    $id = get_queried_object_id();
    $prefix = $id . '_';
    if (is_tax())
    {
        $id = 'term_' . $id;
    }

    
    $defaults = gwp_defaults();

    if(!$defaults) {
        $defaults = $prefix;
    }

    $slides = intval(gwp_theme_mod_max($prefix, $defaults, 'stage_number_slides'));
    if ($slides > 0)
    {
        $output = '<section id="stage">
                        <div id="stage-carousel" class="stage carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">';
        for ($i = 0;$i < $slides;$i++)
        {
            $output .= '<li data-target="#stage-carousel" data-slide-to="' . $i . '"';
            if ($i == 0)
            {
                $output .= ' class="active"';
            }
            $output .= '></li>';
        }
        $output .= '</ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">';
        for ($i = 0;$i < $slides;$i++)
        {
            $output .= '<div class="item';
            if ($i == 0)
            {
                $output .= ' active';
            }
            if (gwp_theme_mod($prefix, $defaults, 'stage_slide_' . $i . '_bg') != '0')
            {
                $output .= ' ed-styles';
            }
            $output .= '"';
            if (gwp_theme_mod($prefix, $defaults, 'stage_slide_' . $i . '_bg') != '0')
            {
                $output .= ' style="background-color: ' . gwp_theme_mod($prefix, $defaults, 'stage_slide_' . $i . '_bg', '0') . ';"';
            }
            $output .= '>';
            $output .= gwp_include_images($prefix, $defaults, 'stage_slide_' . $i);
            $output .= '<div class="carousel-caption">
                            <div class="container">
                                <div class="row';
            if (gwp_theme_mod($prefix, $defaults, 'stage_slide_' . $i . '_gutters') != '0')
            {
                $output .= ' no-gutters';
            }
            $output .= '">';
            $output .= gwp_include_content($prefix, $defaults, 'stage_slide_' . $i);
            $output .= '</div>
                    </div>
                </div>
            </div>';
        }
        $output .= '</div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#stage-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">' . __('Previous', 'gaudium') . '</span>
                    </a>
                    <a class="right carousel-control" href="#stage-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">' . __('Next', 'gaudium') . '</span>
                    </a>
                </div>
            </section>';
        echo $output;
    }
}

/**
 * Generate default field name prefix
 * @return $defaults Field name prefix.
 */
function gwp_defaults() {

    $defaults = '';

    $obj = get_queried_object(); 

    if(is_tax()) {
        $taxonomies = gwp_get_taxonomies();
        $curr_tax = $obj->taxonomy;
        foreach($taxonomies as $taxonomy) {
            if($curr_tax == $taxonomy) {
                $defaults = $taxonomy.'_';
            }
        }
    }
    elseif(!is_post_type_archive())
    {
        if($obj) {
            $post_types = gwp_get_post_types();
            $curr_post_type = $obj->post_type;
            foreach($post_types as $post_type) {
                if($curr_post_type == $post_type) {
                    $defaults = $post_type.'_';
                }
            }
        }
    }
    else
    {
        return false;
    }

    return $defaults;
}

/**
 * Include blocks from the customizer at a specified position
 * @param $position Block position.
 * @return void
 */
function gwp_blocks($position)
{
    $id = get_queried_object_id();

    if (is_tax())
    {
        $id = 'term_' . $id;
    }

    if (!preg_match('/^common-.*$/', $position))
    {   
        $prefix = $id . '_';
        $defaults = gwp_defaults();
        if(!$defaults) {
            $defaults = $prefix;
        }
    }
    else
    {
        $defaults = '';
        $prefix = '';
    }

    $output = '';
    
    for ($i = 0;$i < intval(gwp_theme_mod_max($prefix, $defaults, 'blocks_number'));$i++)
    {   

        if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_position') == $position)
        {
            $output .= '<section id="' . $prefix . 'block-' . $i . '" class="block';
            if (preg_match('/^.*header$/', $position))
            {
                $output .= ' block-header';
            }
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_divider') != '0')
            {
                $output .= ' divider';
                if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_divider') == 'divider-no-padding')
                {
                    $output .= ' bpspace-0';
                }
            }
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_divider') != '0')
            {
                $output .= ' divider';
                if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_divider') == 'divider-no-padding')
                {
                    $output .= ' bpspace-0';
                }
            }
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_bg') != '0')
            {
                $output .= ' bg-' . gwp_theme_mod_value($prefix, $defaults, 'block_' . $i . '_bg', '0');
            }
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_height') != '0')
            {
                $output .= ' ed-styles';
            }
            $output .= '"';
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_height') != '0')
            {
                $output .= ' style="height: ' . gwp_theme_mod_value($prefix, $defaults, 'block_' . $i . '_height', '0') . ';"';
            }
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_load') != '0')
            {
                $output .= ' data-load="' . gwp_theme_mod_value($prefix, $defaults, 'block_' . $i . '_load', '0') . '"';
            }
            $output .= '>';
            $output .= gwp_include_images($prefix, $defaults, 'block_' . $i);

            $output .= '<div class="container';
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_container') == 'fluid')
            {
                $output .= '-fluid';
            }
            $output .= '">';

            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_title') != '')
            {
                $output .= '<div class="row';
                if(gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_title_bottom_space') != '0') {
                    if(gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_title_bottom_space' == '-')) {
                        $output .= ' bspace-0';
                    }
                    else 
                    {
                        $output .= ' bspace-'.gwp_theme_mod_value($prefix, $defaults, 'block_' . $i . '_title_bottom_space', '0');
                    }
                } else {
                    $output .= ' bspace-2';
                }
                $output .= '">
                                <div class="col-sm-12">
                                    <header';
                if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_title_position') != '0')
                {

                    $output .= ' class="text-' . gwp_theme_mod_value($prefix, $defaults, 'block_' . $i . '_title_position', '0');
                    if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_title_position') == 'center')
                    {
                        $output .= ' col-sm-10 col-sm-push-1';
                    }
                    $output .= '"';
                }
                $output .= '><h2>' . gwp_theme_mod_value($prefix, $defaults, 'block_' . $i . '_title', '') . '</h2>';
                $output .= '</header>
                        </div>
                    </div>';
            }
            $output .= '<div class="row';

            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_gutters') != '0')
            {
                $output .= ' no-gutters';
            }
            $output .= '">';
            
            if (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_type') == 'custom')
            {   
                $output .= gwp_include_content($prefix, $defaults, 'block_' . $i);
            }
            elseif (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_type') == 'blog')
            {
                $output .= gwp_include_blog($prefix, $defaults, 'block_' . $i);
            }
            elseif (gwp_theme_mod($prefix, $defaults, 'block_' . $i . '_type') == 'portfolio')
            {
                $output .= gwp_include_portfolio($prefix, $defaults, 'block_' . $i);
            }
            $output .= '</div>
                    </div>
                </section>';
        }
    }
    echo $output;
}

/**
 * Get the number of posts to load/show
 * @param $prefix Prefix based on posts location.
 * @return $load Number of posts to load.
 */
function gwp_get_load($prefix)
{
    if (get_theme_mod($prefix . '_pagination') == 'load-more')
    {
        $load = - 1;
    }
    else
    {
        if (get_theme_mod($prefix . '_load') != '0')
        {
            $load = get_theme_mod($prefix . '_load', '0');
        }
        else
        {
            $load = get_option('posts_per_page');
        }
    }
    return $load;
}

/**
 * Calculate mosaic grid project order
 * @param $order Order relative to 10 projects grid.
 * @param $mod Modulus.
 * @return $output New project order.
 */
function gwp_calc_mosaic_order($order, $mod)
{
    $output = $order + 10 * ($mod);
    return $output;
}

/**
 * Calculate mosaic grid project order modulus
 * @param $count_posts Posts number.
 * @return $output Modulus.
 */
function gwp_calc_mosaic_mod($count_posts)
{
    $output = floor(($count_posts - 1) / 10) + 1;
    return $output;
}

/**
 * Calculate mosaic grid single project order
 * @param $order Order relative to 10 projects grid.
 * @param $count Project number.
 * @return $output Single project order.
 */
function gwp_calc_mosaic_item_order($order, $count)
{
    $output = $order + (10 * floor(($count - 1) / 10));
    return $output;
}

/**
 * Get number of posts to load
 * @param $prefix Prefix based on post location.
 * @return $load Number of posts to load.
 */
function gwp_load($prefix)
{
    if (get_theme_mod($prefix . '_load') != '0')
    {
        $load = get_theme_mod($prefix . '_load', '0');
    }
    else
    {
        $load = get_option('posts_per_page');
    }
    echo $load;
}

/**
 * Output projects html in a masonry grid layout
 * @param $prefix Prefix based on portfolio location.
 * @return void
 */
function gwp_masonry_grid($prefix)
{
    if (preg_match('/^.*portfolio.*$/', $prefix)) 
    {
        $defaults = 'portfolio';
    }
    elseif (preg_match('/^.*blog.*$/', $prefix)) 
    {
        $defaults = 'blog';
    }
    else
    {
        $defaults = $prefix;
    }
    ?>
    <div class="row<?php
    if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
        preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
    endif; ?>">
        <?php $count = 1; ?>
        <?php while ($count <= gwp_theme_mod($prefix, $defaults, '_cols')): ?>
            <div class="col-sm-<?php
                if (gwp_theme_mod($prefix, $defaults, '_cols') == '4'): ?>3<?php
                elseif (gwp_theme_mod($prefix, $defaults, '_cols') == '3'): ?>4<?php
                elseif (gwp_theme_mod($prefix, $defaults, '_cols') == '2'): ?>6<?php
                else: ?>12<?php
                endif; ?><?php
                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                endif; ?>">
                <div data-col="<?php echo $count; ?>" class="row<?php
                    if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                        preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                    else: ?> no-gutters<?php
                    endif; ?>">
              </div>
            </div>
            <?php $count++; ?>
        <?php endwhile; ?>
    </div>
    <?php
}

/**
 * Output projects html in a mosaic grid layout
 * @param $prefix Prefix based on portfolio location.
 * @return void
 */
function gwp_mosaic_grid($prefix)
{
    if (preg_match('/^.*portfolio.*$/', $prefix)) {
        $defaults = 'portfolio';
    }
    elseif (preg_match('/^.*blog.*$/', $prefix)) {
        $defaults = 'blog';
    }
    else
    {
        $defaults = $prefix;
    }
    $count_posts = wp_count_posts('portfolio')->publish;
    $mod = gwp_calc_mosaic_mod($count_posts) - 1;
    $places = 10;
    $remainder = floor(($count_posts / $places - floor($count_posts / $places)) * $places);
    $counter = 0;
    ?>
    <?php while ($counter <= $mod): ?>
        <?php if (($remainder >= 1 && $counter == $mod) || $counter < $mod): ?>
        <div class="row<?php
            if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
            endif; ?>">
            <div class="col-sm-6<?php
                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                endif; ?>">
                <div class="row<?php
                    if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                        preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                    else: ?> no-gutters<?php
                    endif; ?>">
                    <div data-order="<?php echo gwp_calc_mosaic_order(1, $counter); ?>" class="col-sm-12<?php
                        if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                            preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                        endif; ?><?php
                        if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                        endif; ?>">
                    </div> 
                </div>
                <?php if (($remainder >= 5 && $counter == $mod) || $counter < $mod): ?>
                <div class="row<?php
                    if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                        preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                    else: ?> no-gutters<?php
                    endif; ?>">
                    <?php if (($remainder >= 5 && $counter == $mod) || $counter < $mod): ?>
                    <div class="col-sm-6<?php
                        if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                            preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                        endif; ?>">
                        <div class="row<?php
                            if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                            endif; ?>">
                            <div data-order="<?php echo gwp_calc_mosaic_order(5, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">
                            </div>
                            <?php if (($remainder >= 8 && $counter == $mod) || $counter < $mod): ?>
                            <div data-order="<?php echo gwp_calc_mosaic_order(8, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if (($remainder >= 6 && $counter == $mod) || $counter < $mod): ?>
                    <div class="col-sm-6<?php
                        if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                            preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                        endif; ?>">
                        <div class="row<?php
                            if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                            endif; ?>">
                            <div data-order="<?php echo gwp_calc_mosaic_order(6, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">
                            </div>
                            <?php if (($remainder >= 10 && $counter == $mod) || $counter < $mod): ?>
                            <div data-order="<?php echo gwp_calc_mosaic_order(10, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php if (($remainder >= 2 && $counter == $mod) || $counter < $mod): ?>
            <div class="col-sm-6<?php
                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                endif; ?>">
                <div class="row<?php
                    if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                        preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                    else: ?> no-gutters<?php
                    endif; ?>">
                    <div class="col-sm-6<?php
                        if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                            preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                        endif; ?>">
                        <div class="row<?php
                            if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                            endif; ?>">
                            <div data-order="<?php echo gwp_calc_mosaic_order(2, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">
                            </div>
                            <?php if (($remainder >= 4 && $counter == $mod) || $counter < $mod): ?>
                            <div data-order="<?php echo gwp_calc_mosaic_order(4, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if (($remainder >= 3 && $counter == $mod) || $counter < $mod): ?>
                    <div class="col-sm-6<?php
                        if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                            preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                        endif; ?>">
                        <div class="row<?php
                            if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                            endif; ?>">
                            <div data-order="<?php echo gwp_calc_mosaic_order(3, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">
                            </div>
                            <?php if (($remainder >= 7 && $counter == $mod) || $counter < $mod): ?>
                            <div data-order="<?php echo gwp_calc_mosaic_order(7, $counter); ?>" class="col-sm-12<?php
                                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                                    preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                                endif; ?><?php
                                if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                                endif; ?>">                   
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if (($remainder >= 9 && $counter == $mod) || $counter < $mod): ?>
                <div class="row<?php
                    if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                        preg_match('/^.*blog.*$/', $prefix)) : ?> row-gutter<?php
                    else: ?> no-gutters<?php
                    endif; ?>">
                    <div data-order="<?php echo gwp_calc_mosaic_order(9, $counter); ?>" class="col-sm-12<?php
                        if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0' ||
                            preg_match('/^.*blog.*$/', $prefix)) : ?> col-gutter<?php
                        endif; ?><?php
                        if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
                        endif; ?>"> 
                    </div>
                </div> 
                <?php
                endif; ?>    
            </div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php $counter++; ?>
    <?php endwhile; ?>
    <?php
}

/**
 * Output project html
 * @param $prefix Prefix based on portfolio location.
 * @param $order Project order.
 * @param $layout Thumbnail layout.
 * @return void
 */
function gwp_item($prefix, $order, $layout)
{
    if (preg_match('/^.*portfolio.*$/', $prefix)) {
        $defaults = 'portfolio';
    }
    elseif (preg_match('/^.*blog.*$/', $prefix)) {
        $defaults = 'blog';
    }
    else
    {
        $defaults = $prefix;
    }
    ?>
    <?php if (gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry'): ?>
    <div data-match="<?php if ($order): ?><?php echo $order ?><?php endif; ?>">
    <?php endif; ?>
    <?php if (gwp_theme_mod($prefix, $defaults, '_layout') != 'mosaic'): ?>
    <div<?php 
        if ($order): ?> data-order="<?php echo $order; ?>"<?php
        endif; ?> class="col-sm-<?php
        if (preg_match('/^.*blog.*$/', $prefix) ||
            gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry'): ?>12<?php
        elseif (gwp_theme_mod($prefix, $defaults, '_cols') == '1'): ?>12<?php
        elseif (gwp_theme_mod($prefix, $defaults, '_cols') == '2'): ?>6<?php
        elseif (gwp_theme_mod($prefix, $defaults, '_cols') == '3'): ?>4<?php
        else: ?>3<?php
        endif; ?><?php
        if (preg_match('/^.*blog.*$/', $prefix) ||
            gwp_theme_mod($prefix, $defaults, '_gutters') == '0'): ?> col-gutter<?php
        endif; ?><?php
        if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?> to-load<?php
        endif; ?>">
    <?php else: ?>
    <div data-match="<?php 
        if ($order): ?><?php echo $order ?><?php 
        endif; ?>">
    <?php endif; ?>
        <article<?php 
            if (preg_match('/^.*blog.*$/', $prefix)) : ?> class="bspace-1">

            <div <?php 
            endif; ?> class="<?php 
            if (preg_match('/^.*portfolio.*$/', $prefix)) : ?>item<?php 
            endif; ?><?php
            if (has_post_thumbnail() || 
                (get_post_meta(get_the_ID() , '_featured_image_bg_color_key', true) && 
                 get_post_meta(get_the_ID() , '_featured_image_bg_color_key', true) != 'select')): ?> autothumb ed-styles<?php
                if ($layout): ?> <?php echo $layout; ?><?php
                elseif (gwp_theme_mod($prefix, $defaults, '_layout') == 'landscape' || 
                        gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry' && 
                        get_post_meta(get_the_ID() , '_featured_image_layout_key', true) == 'landscape'): ?> landscape<?php
                elseif (gwp_theme_mod($prefix, $defaults, '_layout') == 'portrait' || 
                        gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry' && 
                        get_post_meta(get_the_ID() , '_featured_image_layout_key', true) == 'portrait'): ?> portrait<?php
                endif; ?><?php
                if (get_post_meta(get_the_ID() , '_featured_image_bg_size_key', true)): ?> img-<?php echo get_post_meta(get_the_ID() , '_featured_image_bg_size_key', true); ?><?php
                endif; ?><?php 
            endif; ?><?php 
            if (preg_match('/^.*portfolio.*$/', $prefix)) : ?> all <?php gwp_project_tags(); ?><?php
                if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0'): ?> bspace-1<?php
                endif; ?><?php 
            endif; ?>"<?php
            if (has_post_thumbnail() || 
                get_post_meta(get_the_ID() , '_featured_image_bg_color_key', true) != 'select'): ?><?php 
                if (has_post_thumbnail()): ?>style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);<?php
                endif; ?><?php
                if (get_post_meta(get_the_ID() , '_featured_image_bg_color_key', true) != 'select'): ?> background-color: <?php echo get_post_meta(get_the_ID() , '_featured_image_bg_color_key', true); ?><?php
                endif; ?>;"<?php 
            endif; ?>><?php 
            if (preg_match('/^.*blog.*$/', $prefix)) : ?></div><?php 
            endif; ?>
            <?php if (preg_match('/^.*portfolio.*$/', $prefix)) : ?>
            <div class="item-desc">
            <?php else : ?>
            <div class="article-body">
            <?php endif; ?>
                <header>
                    <h3<?php 
                        if ($defaults == 'portfolio') : ?> class="item-title" <?php 
                        endif; ?>><?php 
                        if ($defaults == 'blog') : ?><a href="<?php if(!is_tax('posts_page')) : ?><?php gwp_permalink(); ?><?php else: ?> <?php the_permalink(); ?><?php endif; ?>" class="dark"><?php 
                        endif; ?><?php the_title(); ?><?php 
                        if ($defaults == 'blog') : ?></a><?php 
                        endif; ?>
                    </h3>
                </header>
                
                <?php if (preg_match('/^.*portfolio.*$/', $prefix)) : ?>
                <p class="item-info"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>"><span class="ion-android-add xs"></span></a></p>
                <?php elseif (preg_match('/^.*blog.*$/', $prefix)) : ?>
                <footer>
                    <p class="item-info"><span class="meta"><?php the_time('j M Y'); ?></span> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="meta"><span><?php the_author(); ?></span></a><?php if (gwp_theme_mod($prefix, $defaults, '_layout') != 'mosaic' && 
                              (intval(gwp_theme_mod($prefix, $defaults, '_cols'))) < 2 ) : ?> <?php gwp_get_tags(); ?><?php 
                          endif; ?>
                    </p>
                </footer>
                <?php endif; ?>
            </div>
        </article>
    </div>
    <?php if (gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry'): ?>
    </div>
    <?php endif; ?>
    <?php
}

/**
 * Output project html based on project order
 * @param $prefix Prefix based on portfolio location.
 * @param $count Project number.
 * @return void
 */
function gwp_mosaic_items($prefix, $count)
{
?>
    <?php if ($count % 10 == 0): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(10, $count) , 'landscape'); ?>
    <?php
    elseif ($count % 10 == 1): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(1, $count) , 'landscape'); ?>
    <?php
    elseif ($count % 10 == 2): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(2, $count) , 'landscape'); ?>
    <?php
    elseif ($count % 10 == 3): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(3, $count) , 'portrait'); ?>
    <?php
    elseif ($count % 10 == 4): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(4, $count) , 'portrait'); ?>
    <?php
    elseif ($count % 10 == 5): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(5, $count) , 'landscape'); ?>
    <?php
    elseif ($count % 10 == 6): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(6, $count) , 'portrait'); ?>
    <?php
    elseif ($count % 10 == 7): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(7, $count) , 'landscape'); ?>
    <?php
    elseif ($count % 10 == 8): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(8, $count) , 'portrait'); ?>
    <?php
    elseif ($count % 10 == 9): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(9, $count) , 'landscape'); ?>
    <?php
    elseif ($count % 10 == 0): ?>
        <?php gwp_item($prefix, gwp_calc_mosaic_item_order(10, $count) , 'landscape'); ?>
    <?php
    endif; ?>
    <?php
}
/**
 * Posts archive display settings
 * @param $query Query.
 * @return void
 */
function gwp_posts_archive_display($query)
{
    $load = gwp_get_load('blog');
    if (is_archive('posts') || is_home() || is_search())
    {
        $query->set('posts_per_page', $load);
        $query->set('orderby', 'date');
        $query->set('order', 'DESC');
        return;
    }
}

add_action('pre_get_posts', 'gwp_posts_archive_display');

/**
 * Portfolio archive display settings
 * @param $query Query.
 * @return void
 */
function gwp_portfolio_archive_display($query)
{
    $id = get_queried_object_id();
    if (is_post_type_archive('portfolio'))
    {
        $load = gwp_get_load('portfolio');
    }
    elseif (is_tax('portfolio_page'))
    {
        $load = gwp_get_load($id . '_portfolio');
    }

    if (is_post_type_archive('portfolio') || is_tax('portfolio_page'))
    {
        $query->set('posts_per_page', $load);
        $query->set('orderby', 'date');
        $query->set('order', 'DESC');
        return;
    }

}

add_action('pre_get_posts', 'gwp_portfolio_archive_display');

/**
 * Include default pager
 * @return void
 */
function gwp_pager_default()
{
    global $wp_query;

    if ($wp_query->max_num_pages > 1)
    {
    ?>
        <nav aria-label="Pager"> 
            <ul class="pager"> 
                <li><?php previous_posts_link('<span aria-hidden="true">←</span> Older'); ?></li> 
                <li><?php next_posts_link('Newer <span aria-hidden="true">→</span>'); ?></li> 
            </ul> 
        </nav>
    <?php
    }
}

/**
 * Include aligned pager
 * @return void
 */
function gwp_pager_aligned()
{
    global $wp_query;

    if ($wp_query->max_num_pages > 1)
    {
    ?>
    <nav aria-label="Pager"> 
        <ul class="pager"> 
            <li class="previous">
                <?php previous_posts_link('<span aria-hidden="true">←</span> Older'); ?>
            </li> 
            <li class="next">
                <?php next_posts_link('Newer <span aria-hidden="true">→</span>'); ?>
            </li> 
        </ul> 
    </nav>
    <?php
    }
}

/**
 * Include pagination
 * @return void
 */
function gwp_pagination($size)
{
    global $wp_query;

    $total_pages = $wp_query->max_num_pages;

    if ($total_pages > 1)
    {
        $current_page = max(1, get_query_var('paged'));
    ?>
      
    <?php
        $links = paginate_links(array(
            'base'      => get_pagenum_link(1) . '%_%',
            'format'    => 'page/%#%',
            'current'   => $current_page,
            'total'     => $total_pages,
            'type'      => 'array',
            'before_page_number'    => '',
            'after_page_number'     => '',
            'prev_text'             => '←',
            'next_text'             => '→'
        ));
    ?>

    <nav aria-label="Page navigation">
        <ul class="pagination<?php if ($size == 'lg'): ?> pagination-lg <?php
            elseif ($size == 'sm'): ?> pagination-sm<?php
            endif; ?>">
            <?php foreach ($links as $link): ?>
                <?php echo '<li>' . $link . '</li>'; ?>
            <?php endforeach; ?>
        </ul>
    </nav>
    <?php
    }
}

/** 
 * Custom do_shortcode()
 * @param $content (default: null) Shortcode content.
 * @return $output Do shortcode. 
 */
function gwp_do_shortcode($content)
{
    if (!is_admin())
    {
        $output = do_shortcode($content);
        return $output;
    }
}

/** 
 * Login
 * @return void
 */
function gwp_login()
{
    if (isset($_POST["user_username"]) && isset($_POST["user_password"]))
    {
        $user_login = esc_attr($_POST["user_username"]);
        $user_password = esc_attr($_POST["user_password"]);

        $creds = array(
            'user_login'    => $user_login,
            'user_password' => $user_password,
            'remember'      => true
        );

        $user = wp_signon($creds, false);
        if (is_wp_error($user))
        {
            echo '<div class="container"><div class="row"><div class="col-sm-12"><div class="alert alert-danger alert-dismissible alert-pos" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><span class="ion-alert" aria-hidden="true"></span> <span class="sr-only">Error:</span><strong>Oops!</strong> ' . $user->get_error_message() . '</div></div></div></div>';
        }
        else
        {
            $redirect_to = $_SERVER['REQUEST_URI'];
            wp_safe_redirect($redirect_to);
            exit;
        }
    }
}

add_action('after_setup_theme', 'gwp_login');

/** 
 * Comment form fields 
 * @param $fields Fields array.
 * @return $fields Processed fields array. 
 */
function gwp_comment_form_fields($fields)
{

    $comment_field = $fields['comment'];
    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['cookies']);

    $commenter = wp_get_current_commenter();
    $req = get_option('require_name_email');
    $aria_req = ($req ? ' aria-required="true"' : ’);

    $fields['author'] = '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" placeholder="' . __('Name...', 'gaudium') . '" tabindex="1"' . $aria_req . '>';

    $fields['email'] = '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr($commenter['comment_author_email']) . '" placeholder="' . __('Email...', 'gaudium') . '" tabindex="2"' . $aria_req . '>';

    $fields['url'] = '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr($commenter['comment_author_url']) . '" placeholder="' . __('URL...', 'gaudium') . '" tabindex="3">';

    $fields['cookies'] = '<div class="checkbox"><label><input id="cookies" name="wp-comment-cookies-consent" type="checkbox" value="yes"><small>' . __('Save my name, email and website in this browser for the next time I comment.', 'gaudium') . '</small></label></div>';

    $fields['comment'] = $comment_field;

    return $fields;
}

add_filter('comment_form_fields', 'gwp_comment_form_fields');

/** 
 * Include alert success html
 * @return void 
 */
function gwp_before_submitted()
{
    ?>
    <div class="container"><div class="row"><div class="col-sm-12"><div class="alert alert-success alert-dismissible alert-pos" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button><span class="ion-alert" aria-hidden="true"></span> <span class="sr-only">Success:</span>
    <?php
}

add_action('ed_before_submitted', 'gwp_before_submitted');

/** 
 * Include alert success html 
 * @return void 
 */
function gwp_after_submitted()
{
    ?>
    </div></div></div></div>
    <?php
}

add_action('ed_after_submitted', 'gwp_after_submitted');