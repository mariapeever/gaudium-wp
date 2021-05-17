<?php
/*
 * Plugin Name: ed. Recent Posts
 * Plugin URI:
 * Description: ed. Recent Posts is a recent posts widget, which can be used instead of the default WordPress recent posts widget.
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edrecentposts
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/** 
 * Extend WP Widget
 */
class ed_recent_posts extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

        'ed_recent_posts',

        __('ed. Recent Posts', 'edrecentposts') ,

        array(
            'description' => __('ed. Recent Posts Widget', 'edrecentposts') ,
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
        $args = array(
            'numberposts' => 5
        );
        $posts = wp_get_recent_posts($args);
        ?>


        <ul class="list-unstyled">
            <?php foreach ($posts as $post): ?>
            <li class="bspace-half row"><?php 
                if(has_post_thumbnail($post['ID']) || 
                    get_post_meta($post['ID'], '_featured_image_bg_color_key', true) != 'select') : 
                    ?><div class="post-thumbnail col-sm-4"><div class="autothumb styles" style="<?php 
                    if(has_post_thumbnail($post['ID'])) : ?>background-image: url(<?php echo get_the_post_thumbnail_url($post['ID']); ?>);<?php endif; ?><?php 
                    if(get_post_meta($post['ID'], '_featured_image_bg_color_key', true) != 'select') : ?>background-color: <?php echo get_post_meta($post_id, '_featured_image_bg_color_key', true); ?>;<?php 
                    endif; ?>"></div></div>
                <div class="post-info col-sm-8">
                <?php else: ?>
                <div class="post-info col-sm-12">
                <?php endif; ?>
                <a href="<?php echo get_the_permalink($post['ID']); ?>" class="dark post-title"><?php echo $post['post_title']; ?></a> <span class="meta"><small><?php echo get_the_date('M j', $post['ID']); ?></small></span><span class="meta hspace-l-sm"><a href="<?php echo get_author_posts_url($post['post_author']); ?>"><?php echo get_the_author_meta('nickname', $post['post_author']); ?></a></span></div></li>
            <?php endforeach; ?>
        </ul>
        <?php
        
    }

    public function form($instance)
    {
        if (isset($instance['title']))
        {
            $title = $instance['title'];
        }
        else
        {
            $title = __('ed. Recent Posts', 'edrecentposts');
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
 * Register ed. Recent Posts widget
 * @return void
 */
function ed_load_recent_posts()
{
    register_widget('ed_recent_posts');
}
add_action('widgets_init', 'ed_load_recent_posts');

