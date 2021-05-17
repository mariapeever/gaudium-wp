<div class="row">
    <div class="col-sm-12">
        <aside class="comments">
            <h2 class="mdspace-4">Comments:</h2>

            <?php $args = array(
				'walker'            => null,
				'max_depth'         => '',
				'style'             => 'ul',
				'callback'          => null,
				'end-callback'      => null,
				'type'              => 'all',
				'reply_text'        => 'Reply',
				'page'              => '',
				'per_page'          => '',
				'avatar_size'       => 80,
				'reverse_top_level' => null,
				'reverse_children'  => '',
				'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
				'short_ping'        => false,   // @since 3.6
			    'echo'              => true     // boolean, default is true
			); ?>

			<?php 	
				wp_list_comments($args, $comments); 

				$comments_args = array(
			        'label_submit'			=>'Submit',
			        'title_reply'			=>'Write a Reply or Comment',
			        'comment_notes_after' 	=> '<button type="submit" class="btn btn-link submit-btn" aria-label="Submit">'.__('Submit','gaudium').'</button>',
			        'comment_field' 		=> '<div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="row row-gutter">
                                                            <div class="col-xs-2 col-sm-1 col-gutter">
                                                                <div class="ed-styles avatar img-cover img-rounded tspace-1" style="background-image: url('.esc_url(get_avatar_url(get_current_user_id())).');"></div>
                                                            </div>
                                                            <div class="col-xs-10 col-sm-11 col-gutter">
                                                                <textarea id="comment" name="comment" class="form-control" aria-required="true" rows="2" placeholder="Type here..."></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>',
				);		
				comment_form($comments_args);
			?>
        </aside>
    </div>
</div>
