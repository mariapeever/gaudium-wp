<?php if (is_singular('form') || is_singular('portfolio')) : ?>
    <div class="col-sm-12">
<?php elseif (is_single()) : ?>
    <div class="col-sm-12 col-md-9 col-gutter">
<?php else : ?>
    <div class="col-sm-12 col-gutter bspace-2 to-load">
<?php endif; ?>
    <article>
        <?php if (has_post_thumbnail()) : ?>
            <div class="ed-styles<?php 
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
        
        <div class="article-body">
            <?php if (is_single()): ?>
                <?php the_content(); ?>
                <?php if (!is_singular('form') && !is_page()): ?>
                    <?php comments_template(); ?>
                <?php endif; ?>
            <?php else : ?>
                <header>
                    <h3><a href="<?php gwp_permalink(); ?>" class="dark"><?php the_title(); ?></a></h3>
                </header>
                <?php if (get_post_type() == 'post') : ?>
                <footer>
                    <p class="item-info"><span class="meta"><?php the_time('j M Y'); ?></span> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="meta"><span><?php the_author(); ?></span></a><?php gwp_get_tags(); ?></p>
                </footer>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </article>
</div>