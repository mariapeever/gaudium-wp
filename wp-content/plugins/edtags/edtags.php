<?php
/*
 * Plugin Name: ed. Tags
 * Plugin URI:
 * Description: ed. Tags is a tags widget, which can be used instead of the default WordPress tags widget.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edtags
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Extend WP Widget
 */
class ed_tags extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

        'ed_tags',

        __('ed. Tags', 'gaudium') ,

        array(
            'description' => __('ed. Tags Widget', 'gaudium') ,
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

        $tags = get_tags();
		?>
		<?php foreach ($tags as $tag): ?>
		<a href="<?php echo get_term_link($tag); ?>" class="btn btn-primary btn-tag btn-xs hspace-r-xs"><?php echo $tag->name; ?></a>
		<?php endforeach; ?>
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
            $title = __('ed. Tags', 'gaudium');
        }
		?>
	    <p>
	        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
	        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
	    </p>
	    <?php
    }

    // Updatined.widget replacined.old instances with new
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        return $instance;
    }
}

/** 
 * Register ed. Tags widget
 * @return void
 */
function ed_load_tags()
{
    register_widget('ed_tags');
}
add_action('widgets_init', 'ed_load_tags');