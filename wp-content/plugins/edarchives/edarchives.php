<?php
/*
 * Plugin Name: ed. Archives
 * Plugin URI:
 * Description: ed. Archives is an archives widget, which can be used instead of the default WordPress archives widget.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edarchives
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Extend WP Widget
 */
class ed_archives extends WP_Widget
{
    function __construct()
    {
        parent::__construct('ed_archives', __('ed. Archives', 'edarchives') , array(
            'description' => __('ed. Archives Widget', 'edarchives') ,
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
	    <nav class="navbar navbar-inverse">
	        <ul class="nav navbar-nav">
	        	<?php wp_get_archives(); ?>
	        </ul>
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
            $title = __('ed. Archives', 'edarchives');
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
 * Register ed. Archives widget
 * @return void
 */
function ed_load_archives()
{
    register_widget('ed_archives');
}
add_action('widgets_init', 'ed_load_archives');

