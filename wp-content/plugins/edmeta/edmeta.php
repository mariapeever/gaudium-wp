<?php
/*
 * Plugin Name: ed. Meta
 * Plugin URI:
 * Description: ed. Meta is a meta widget, which can be used instead of the default WordPress meta widget.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edmeta
*/

// security to prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Extend WP Widget
 */
class ed_meta extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

        'ed_meta',

        __('ed. Meta', 'edmeta') ,

        array(
            'description' => __('ed. Meta Widget', 'edmeta') ,
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
	          <li><?php wp_register(); ?></li>
	          <li><?php wp_loginout(); ?></li>
	          <li><a href="//meta.wikimedia.org/wiki/Wikimedia_Blog/Guidelines" title="General contribution guidelines for the Wikimedia blog"><?php _e('Blog guidelines', 'edmeta'); ?></a></li>
	          <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php echo esc_attr(__('Syndicate this site using RSS 2.0', 'edmeta')); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>', 'edmeta'); ?></a></li>
	          <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php echo esc_attr(__('The latest comments to all posts in RSS')); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
	          <li><a href="http://wordpress.org/" title="<?php echo esc_attr(__('Powered by WordPress, state-of-the-art semantic personal publishing platform.')); ?>"><?php _e('WordPress.org', 'edmeta'); ?></a></li>
	          <?php wp_meta(); ?>
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
            $title = __('ed. Meta', 'edmeta');
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
 * Register ed. Meta widget
 * @return void
 */
function ed_load_meta()
{
    register_widget('ed_meta');
}
add_action('widgets_init', 'ed_load_meta');