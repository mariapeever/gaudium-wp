<?php get_header(); ?>
<?php if(!gwp_theme_mod(get_the_ID(), 'portfolio_', 'blocks_number') ||
	      gwp_theme_mod(get_the_ID(), 'portfolio_', 'blocks_number') == '0') : ?>
	<section id="featured-image" class="block">
		<div class="container">
			<div class="row">
				<div class="content col-sm-3 tspace-sm-9 tspace-md-13 tspace-lg-16 bspace-xs-2"> 
					<header>
						<h2><?php echo wp_get_attachment_caption(get_post_thumbnail_id()); ?></h2>	
					</header>
					<?php $attachment = get_post(get_post_thumbnail_id()); echo gwp_do_shortcode($attachment->post_content); ?>
				</div>
				<div class="content col-sm-8 col-sm-push-1 tspace-sm-11 bspace-sm-16 bspace-md-24 bspace-lg-35">
					<?php if (has_post_thumbnail()) : ?>
			            <div class="layer speed speed-0.4 ed-styles<?php 
			                if (is_single()) : ?> bspace-1<?php 
			                endif; ?> autothumb <?php 
			                if (get_post_meta(get_the_ID(), '_featured_image_layout_key', true) != 'default') : ?><?php echo get_post_meta(get_the_ID(), '_featured_image_layout_key', true); ?><?php 
			                endif; ?> img-<?php echo get_post_meta(get_the_ID(), '_featured_image_bg_size_key', true); ?>" <?php 
			                if (has_post_thumbnail() || get_post_meta(get_the_ID(), '_featured_image_bg_color_key', true) != 'select') : ?>style="<?php 
			                    if (has_post_thumbnail()) : ?>background-image: url(<?php the_post_thumbnail_url(); ?>);<?php 
			                    endif; ?> <?php 
			                    if (get_post_meta(get_the_ID(), '_featured_image_bg_color_key', true) != 'select') : ?>background-color: <?php echo get_post_meta(get_the_ID(), '_featured_image_bg_color_key', true); ?>;<?php 
			                    endif; ?>"<?php 
			                endif; ?>></div>
			        <?php endif; ?>
				</div>
			</div>
	    </div>
	</section>
<?php endif; ?>
<?php if (!empty(get_the_content())) : ?>
<section id="main-content" class="page">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>