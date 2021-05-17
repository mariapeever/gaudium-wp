<?php
/*
 * Plugin Name: ed. Forms
 * Plugin URI:
 * Description: ed. Forms is a forms plugin, which extends the WordPress comments form to receive form submissions and include custom fields (any input, select or textarea field with a name attribute starting with "_field_").
 * Version: 1.0
 * Author: Mariya Peeva @etherdesign
 * Author URI: https://themeforest.net/user/etherdesign/
 * Text Domain: edforms
*/

// Prevent direct access to files
if (!defined('ABSPATH'))
{
    exit;
}

/**
 * Create a forms post type
 */
function ed_create_forms_cpt()
{
    $labels = array(
        'name' 					=> __('Forms', 'Forms', 'edforms') ,
        'singular_name' 		=> __('Form', 'Form', 'edforms') ,
        'menu_name' 			=> __('Forms', 'edforms') ,
        'name_admin_bar' 		=> __('Form', 'edforms') ,
        'archives' 				=> __('Forms Archives', 'edforms') ,
        'attributes' 			=> __('Forms Attributes', 'edforms') ,
        'parent_item_colon' 	=> __('Parent Form', 'edforms') ,
        'all_items' 			=> __('All Forms', 'edforms') ,
        'add_new_item'			=> __('Add New Form', 'edportflio') ,
        'add_new' 				=> __('Add New', 'edforms') ,
        'new_item' 				=> __('New Form', 'edforms') ,
        'edit_item' 			=> __('Edit Form', 'edforms') ,
        'update_item' 			=> __('Update Form', 'edforms') ,
        'view_item' 			=> __('View Form', 'edforms') ,
        'view_items'			=> __('View Forms', 'edforms') ,
        'search_items' 			=> __('Search Forms', 'edforms') ,
        'not_found' 			=> __('Not Found', 'edforms') ,
        'not_found_in_trash' 		=> __('Not Found in Trash', 'edforms') ,
        'featured_image' 			=> __('Featured Image', 'edforms') ,
        'set_featured_image' 		=> __('Set Featured Image', 'edforms') ,
        'remove_featured_image'		=> __('Remove Featured Image', 'edforms') ,
        'use_featured_image' 		=> __('Use as Featured Image', 'edforms') ,
        'insert_into_item' 			=> __('Insert Into Form', 'edforms') ,
        'uploaded_to_this_item' 	=> __('Uploaded to This Form', 'edforms') ,
        'items_list' 				=> __('Forms List', 'edforms') ,
        'items_list_navigation' 	=> __('Tutorials List Navigation', 'edforms') ,
        'filter_items_list' 		=> __('Filter', 'edforms') ,
    );

    $args = array(
        'label'                     => __('Form', 'edforms') ,
        'description'               => __('Forms', 'edforms') ,
        'labels'                    => $labels,
        'menu_icon'                 => 'dashicons-email-alt',
        'supports'                  => array(
            'title',
            'editor',
            'revisions',
            'author',
            'comments'
        ) ,
        'public'                    => true,
        'show_ui'                   => true,
        'show_in_menu'              => true,
        'menu_position'             => 5,
        'show_in_admin_bar'         => true,
        'show_in_nav_menus'         => true,
        'can_export'                => true,
        'has_archive'               => true,
        'hierarchical'              => false,
        'exclude_from_search'       => false,
        'show_in_rest'              => true,
        'publicly_queryable'        => true,
        'capability_type'           => 'post',
        'rewrite' => array(
            'slug' => 'form'
        ) ,
    );

    register_post_type('form', $args);
}

add_action('init', 'ed_create_forms_cpt', 0);

/** 
 * Create forms custom post type and flush rewrite rules
 */
function ed_rewrite_forms_flush()
{
    ed_create_forms_cpt();
    flush_rewrite_rules();
}

register_activation_hook(__FILE__, 'ed_rewrite_forms_flush');

/**  
 * Add moderation subject
 * @param $subject Subject
 * @param $comment_id Comment ID
 * @return $subject Moderation subject
 */
function ed_moderation_subject($subject, $comment_id)
{
    $submission = get_comment($comment_id);
    $form = get_post($submission->comment_post_ID);
    $blogname = wp_specialchars_decode(get_option('blogname') , ENT_QUOTES);

    $subject = sprintf(__('[%1$s] Submission Awaiting Approval: "%2$s"') , $blogname, $form->post_title);
    return $subject;
}

/**  
 * Add moderation message
 * @param $text Text
 * @param $comment_id Comment ID
 * @return $moderation_message Moderation text
 */
function ed_moderation_text($text, $comment_id)
{
    global $wpdb;

    $submission = get_comment($comment_id);
    $form = get_post($submission->comment_post_ID);

    $submission_author_domain = '';
    if (WP_Http::is_ip_address($submission->comment_author_IP))
    {
        $submission_author_domain = gethostbyaddr($submission->comment_author_IP);
    }

    $submissions_waiting = $wpdb->get_var("SELECT count(comment_ID) FROM $wpdb->comments WHERE comment_approved = '0'");
    switch ($submission->comment_type)
    {
        case 'trackback':
            $moderation_message = sprintf(__('A new trackback of "%s" is waiting for your approval.') , $form->post_title) . "\r\n";
            $moderation_message .= get_permalink($submission->comment_post_ID) . "\r\n\r\n";
            $moderation_message .= sprintf(__('Website: %1$s (IP address: %2$s, %3$s)') , $submission->comment_author, $submission->comment_author_IP, $submission_author_domain) . "\r\n";
        break;
        case 'pingback':
            $moderation_message = sprintf(__('A new pingback of "%s" is waiting for your approval.') , $form->post_title) . "\r\n";
            $moderation_message .= get_permalink($submission->comment_post_ID) . "\r\n\r\n";
            $moderation_message .= sprintf(__('Website: %1$s (IP address: %2$s, %3$s)') , $submission->comment_author, $submission->comment_author_IP, $submission_author_domain) . "\r\n";
        break;
        default:
            $moderation_message = sprintf(__('A new submission of "%s" is waiting for your approval.') , $form->post_title) . "\r\n";
            $moderation_message .= get_permalink($submission->comment_post_ID) . "\r\n\r\n";
            $moderation_message .= sprintf(__('Author: %1$s (IP address: %2$s, %3$s)') , $submission->comment_author, $submission->comment_author_IP, $submission_author_domain) . "\r\n";
            $moderation_message .= sprintf(__('Email: %s') , $submission->comment_author_email) . "\r\n\r\n";
        break;
    }

    $moderation_message .= sprintf(__('Approve it: %s') , admin_url("comment.php?action=approve&c={$comment_id}#wpbody-content")) . "\r\n";

    if (EMPTY_TRASH_DAYS)
    {
        $moderation_message .= sprintf(__('Trash it: %s') , admin_url("comment.php?action=trash&c={$comment_id}#wpbody-content")) . "\r\n";
    }
    else
    {
        $moderation_message .= sprintf(__('Delete it: %s') , admin_url("comment.php?action=delete&c={$comment_id}#wpbody-content")) . "\r\n";
    }
    $moderation_message .= sprintf(__('Spam it: %s') , admin_url("comment.php?action=spam&c={$comment_id}#wpbody-content")) . "\r\n";

    $moderation_message .= sprintf(_n('Currently %s submission is waiting for approval. Please visit the moderation panel:', 'Currently %s submissions are waiting for approval. Please visit the moderation panel:', $submissions_waiting) , number_format_i18n($submissions_waiting)) . "\r\n";
    $moderation_message .= admin_url('edit-comments.php?comment_status=moderated#wpbody-content') . "\r\n";
    return $moderation_message;
}

/**  
 * Add notification subject
 * @param $subject Subject
 * @param $comment_id Comment ID
 * @return $subject Notification subject
 */
function ed_notify_subject($subject, $comment_id)
{
    $submission = get_comment($comment_id);
    $form = get_post($submission->comment_post_ID);
    $blogname = wp_specialchars_decode(get_option('blogname') , ENT_QUOTES);

    $subject = sprintf(__('[%1$s] Submission: "%2$s"') , $blogname, $form->post_title);
    return $subject;
}

/**  
 * Add notification message text
 * @param $text Text
 * @param $comment_id Comment ID
 * @return $notify_message Notification text
 */
function ed_notify_text($text, $comment_id)
{
    global $wpdb;
    $submission = get_comment($comment_id);
    $form = get_post($submission->comment_post_ID);

    $submission_author_domain = '';
    if (WP_Http::is_ip_address($submission->comment_author_IP))
    {
        $submission_author_domain = gethostbyaddr($submission->comment_author_IP);
    }
    switch ($submission->comment_type)
    {
        case 'trackback':
            $notify_message = sprintf(__('A new trackback of "%s".') , $form->post_title) . "\r\n";
            $notify_message .= get_permalink($submission->comment_post_ID) . "\r\n\r\n";
            $notify_message .= sprintf(__('Website: %1$s (IP address: %2$s, %3$s)') , $submission->comment_author, $submission->comment_author_IP, $submission_author_domain) . "\r\n";
        break;
        case 'pingback':
            $notify_message = sprintf(__('A new pingback of "%s".') , $form->post_title) . "\r\n";
            $notify_message .= get_permalink($submission->comment_post_ID) . "\r\n\r\n";
            $notify_message .= sprintf(__('Website: %1$s (IP address: %2$s, %3$s)') , $submission->comment_author, $submission->comment_author_IP, $submission_author_domain) . "\r\n";
        break;
        default:
            $notify_message = sprintf(__('A new submission of "%s".') , $form->post_title) . "\r\n";
            $notify_message .= get_permalink($submission->comment_post_ID) . "\r\n\r\n";
            $notify_message .= sprintf(__('Author: %1$s (IP address: %2$s, %3$s)') , $submission->comment_author, $submission->comment_author_IP, $submission_author_domain) . "\r\n";
            $notify_message .= sprintf(__('Email: %s') , $submission->comment_author_email) . "\r\n\r\n";
        break;
    }
    $notify_message .= __('You can see all submissions of this form here:') . "\r\n";
    $notify_message .= get_permalink($submission->comment_post_ID) . "#comments\r\n\r\n";
    $notify_message .= sprintf(__('Permalink: %s') , get_comment_link($submission)) . "\r\n";

    if (user_can($form->post_author, 'edit_comment', $submission->comment_ID))
    {
        if (EMPTY_TRASH_DAYS)
        {
            $notify_message .= sprintf(__('Trash it: %s') , admin_url("comment.php?action=trash&c={$comment->comment_ID}#wpbody-content")) . "\r\n";
        }
        else
        {
            $notify_message .= sprintf(__('Delete it: %s') , admin_url("comment.php?action=delete&c={$comment->comment_ID}#wpbody-content")) . "\r\n";
        }
        $notify_message .= sprintf(__('Spam it: %s') , admin_url("comment.php?action=spam&c={$comment->comment_ID}#wpbody-content")) . "\r\n";
    }
    return $notify_message;
}

add_filter('comment_moderation_subject', 'ed_moderation_subject', 10, 2);
add_filter('comment_moderation_text', 'ed_moderation_text', 10, 2);
add_filter('comment_notify_subject', 'ed_notify_subject', 10, 2);
add_filter('comment_notify_text', 'ed_notify_text', 10, 2);

add_action('comment_post', 'ed_save_form_meta_data');

/**  
 * Save form meta data
 * @param $comment_id Comment ID
 */
function ed_save_form_meta_data($comment_id)
{
    foreach ($_POST as $k => $v)
    {
        if (preg_match('/^_field_.*$/', $k))
        {
            if ((isset($_POST[$k])) && ($_POST[$k] != ’))
            {
                $k = wp_filter_nohtml_kses($k);
                $$k = wp_filter_nohtml_kses($_POST[$k]);
                add_comment_meta($comment_id, $k, $$k);
            }
        }
    }
}

// Add an edit option to comment editing screen
add_action('add_meta_boxes_comment', 'ed_extend_form_add_meta_box');

/**  
 * Add forms meta box to comment editing screen
 */
function ed_extend_form_add_meta_box()
{
    add_meta_box('fields', __('Form Fields') , 'ed_extend_form_meta_box', 'comment', 'normal', 'high');
}

/** 
 * Extend the forms meta box
 * @param $comment Comment object.
 */
function ed_extend_form_meta_box($comment)
{
    wp_nonce_field('extend_comment_update', 'ed_extend_form_update', false);
    $comment_meta = get_comment_meta($comment->comment_ID);
    foreach ($comment_meta as $k => $v)
    {
        if (preg_match('/^_field_.*$/'))
        {
            $$k = get_comment_meta($comment->comment_ID, $k, true);
			?>
	  		<p>
			    <label for="<?php echo $k; ?>">
			    	<?php echo sprintf(__('%s') , ucwords(str_replace('_', ' ', str_replace('_field_', '', $k)))); ?>
			    </label>
			    <input type="text" name="<?php echo $k; ?>" value="<?php echo esc_attr($$k); ?>" class="widefat" />
			</p>
			<?php
        }
    }
}

// Update comment meta data from comment editing screen
add_action('edit_comment', 'ed_extend_form_edit_metafields');

/** 
 * Extend the forms meta box
 * @param $comment_id Comment ID.
 */
function ed_extend_form_edit_metafields($comment_id)
{
    if (!isset($_POST['ed_extend_form_update']) || !wp_verify_nonce($_POST['ed_extend_form_update'], 'extend_comment_update')) return;
    foreach ($_POST as $k => $v)
    {
        if (preg_match('/^_field_.*$/'))
        {
            if ((isset($_POST[$k])) && ($_POST[$k] != ’)):
                $$k = wp_filter_nohtml_kses($_POST[$k]);
                update_comment_meta($comment_id, $k, $$k);
            else:
                delete_comment_meta($comment_id, $k);
            endif;
        }
    }
}

/** 
 * Extend the forms meta box
 * @param $fields Fields array.
 * @return $fields Processed fields array.
 */
function ed_change_field_order($fields)
{
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    $url_field = $fields['url'];
    $cookies_field = $fields['cookies'];
    unset($fields['comment']);
    unset($fields['author']);
    unset($fields['email']);
    unset($fields['url']);
    unset($fields['cookies']);
    $fields['comment'] = $comment_field;
    return $fields;
}

/** 
 * Extend the forms meta box
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @param $fields Fields array.
 * @return $output Shortcode html. 
 */
function ed_form_shortcode($atts = [], $content = null, $fields)
{
    $atts = array_change_key_case((array)$atts, CASE_LOWER);
    extract(shortcode_atts(array(
        'id'            => '',
        'slug'          => '',
        'title'         => '',
        'notes_before'  => '',
        'notes_after'   => '',
        'classes'       => '',
        'hide_loggedin' => ''
    ) , $atts, 'gwp_form_shortcode'));

    if($id) 
    {
        $id_form = esc_attr($id);
    }
    else
    {
        $id_form = '';
    }
    
    if ($slug)
    {
        $form_slug = esc_attr($slug);
    }
    else
    {
        $form_slug = '';
    }

    $form_id = '';
    if ($form_slug)
    {
        $form = get_page_by_path($form_slug, ARRAY_A, 'form');
        if($form) 
        {
            $form_id = $form['ID'];
        }
        
    }

    if ($title)
    {
        $form_title = esc_attr($title);
    }
    else
    {
        $form_title = '';
    }

    if ($notes_before)
    {
        $form_notes_before = esc_attr($notes_before);
    }
    else
    {
        $form_notes_before = '';
    }

    if ($notes_after)
    {
        $form_notes_after = esc_attr($notes_after);
    }
    else
    {
        $form_notes_after = '';
    }

    if ($classes)
    {
        $form_classes = 'ed-form ' . esc_attr($classes);
    }
    else
    {
        $form_classes = 'ed-form';
    }

    if ($hide_loggedin == 'true')
    {
        $form_hide_loggedin = true;
    }
    else
    {
        $form_hide_loggedin = false;
    }

    add_filter('comment_form_fields', 'ed_change_field_order', 10, 1);

    $comments_args = array(
        'class_form'            => $form_classes,
        'title_reply'           => $form_title,
        'comment_notes_before'  => $notes_before,
        'comment_notes_after'   => $notes_after,
        'comment_field'         => edf_do_shortcode($content),
        'id_form'               => $id_form,
    );

    if ($form_hide_loggedin)
    {
        add_filter('comment_form_logged_in', '__return_empty_string');
    }

    ob_start();

    if (!is_admin())
    {
        if ($form_slug)
        {
            comment_form($comments_args, $form_id);
        }
        else
        {
            comment_form($comments_args);
        }
    }

    if ($form_hide_loggedin)
    {
        remove_filter('comment_form_logged_in', '__return_empty_string');
    }

    $output = ob_get_clean();

    return $output;
}

/** 
 * Redirect to submitted url on form submission
 * @param $atts (default: array()) Shortcode attributes array.
 * @param $content (default: null) Shortcode content.
 * @return $output Shortcode html. 
 */
function ed_redirect_submission($location, $commentdata)
{
    if (!isset($commentdata) || empty($commentdata->comment_post_ID))
    {
        return $location;
    }
    $post_id = $commentdata->comment_post_ID;
    if ('form' == get_post_type($post_id))
    {
        return wp_get_referer() . '?submitted';
    }
    return $location;
}

add_filter('comment_post_redirect', 'ed_redirect_submission', 10, 2);

/** 
 * Show success alert on submission
 */
function ed_submitted()
{
    $url = $_SERVER['REQUEST_URI'];

    if (strpos($url, 'submitted') !== false)
    {
        do_action('ed_before_submitted');
        _e('You have successfully submitted your request!', 'edforms');
        do_action('ed_after_submitted');
    }
}

add_action('wp_head', 'ed_submitted');

/** 
 * Prevent do_shortcode() from executing in admin area
 * @param $content Shortcode content
 * @return do_shortcode($content) do_shortcode() if not admin
 */
function edf_do_shortcode($content)
{
    if (!is_admin())
    {
        return do_shortcode($content);
    }
}

/** 
 * Initialise form shortcode
 * @return void
 */
function edf_shortcodes_init()
{
    add_shortcode('form', 'ed_form_shortcode');
}

add_action('init', 'edf_shortcodes_init');