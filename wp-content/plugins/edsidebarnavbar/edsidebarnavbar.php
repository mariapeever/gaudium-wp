<?php
/*
 * Plugin Name: ed. Sidebar Navbar
 * Plugin URI:
 * Description: ed. Sidebar Navbar is a sidebar navbar widget, which can be used to include a sidebar menu as a widget, eg. to include WordPress categories.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edsidebarnavbar
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Extend WP Widget
 */
class ed_sidebar_navbar extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

        'ed_sidebar_navbar',

        __('ed. Sidebar Navbar', 'edsidebarnavbar') ,

        array(
            'description' => __('ed. Sidebar Navbar Widget', 'edsidebarnavbar') ,
        ));
    }

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);

        echo $args['before_widget'];
        if (!empty($title))
        {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        ?>
        <nav id="sidebar-nav" class="navbar ed-navbar navbar-inverse">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-menu" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <?php if (is_active_sidebar('sidebar_navbar_top')): ?>
                <?php dynamic_sidebar('sidebar_navbar_top'); ?>
            <?php endif; ?>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'sidebar',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'sidebar-menu',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker() ,
            ));
            ?>
            <?php if (is_active_sidebar('sidebar_navbar_bottom')): ?>
                <?php dynamic_sidebar('sidebar_navbar_bottom'); ?>
            <?php endif; ?>
        </nav>
        <?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        if (isset($instance['title']))
        {
            $title = $instance['title'];
        }
        else
        {
            $title = __('ed. Sidebar Navbar', 'edsidebarnavbar');
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <?php
    }

    // Updating widget replacing old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

/** 
 * Register ed. Sidebar Navbar widget
 * @return void
 */
function ed_load_sidebar_navbar()
{
    register_widget('ed_sidebar_navbar');
}
add_action('widgets_init', 'ed_load_sidebar_navbar');