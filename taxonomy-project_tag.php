<?php get_header(); ?>
<?php 
    $prefix = 'portfolio';
?>
<section id="main-content">
    <div class="container<?php 
    if (get_theme_mod($prefix . '_container') == 'fluid') : ?>-fluid<?php 
    endif; ?>">
        <div class="row">
            <div class="col-sm-12">
                <section id="portfolio" data-load="<?php echo get_theme_mod($prefix . '_load', '0'); ?>">
                    <div id="portfolio-items" class="portfolio-items <?php 
                        if (get_theme_mod($prefix . '_layout') == 'masonry' || 
                            get_theme_mod($prefix . '_layout') == 'mosaic') : ?>masonry<?php 
                        endif; ?>">
                        <?php if (!get_theme_mod($prefix . '_layout') ||
                                   get_theme_mod($prefix . '_layout') == 'default' ||
                                   get_theme_mod($prefix . '_layout') == 'landscape' ||
                                   get_theme_mod($prefix . '_layout') == 'portrait') : ?>
                        <div class="row <?php 
                            if (get_theme_mod($prefix . '_gutters') == '0') : ?>row-gutter<?php else: ?>no-gutters<?php 
                            endif; ?>">
                        <?php endif; ?>
                        <?php if (have_posts()) : ?>
                            <?php if (get_theme_mod($prefix . '_layout') == 'mosaic') : ?>
                                <?php gwp_mosaic_grid($prefix); ?>
                            <?php elseif (get_theme_mod($prefix . '_layout') == 'masonry') : ?>
                                <?php gwp_masonry_grid($prefix); ?>
                            <?php endif; ?>
                            <?php if (get_theme_mod($prefix . '_layout') == 'mosaic' ||
                                    get_theme_mod($prefix . '_layout') == 'masonry') : ?>
                                <?php $count = 1; ?>
                            <?php endif; ?>
                            <?php while(have_posts()) : the_post();?>
                                <?php if (get_theme_mod($prefix . '_layout') == 'mosaic') : ?>
                                    <?php gwp_mosaic_items($prefix, $count); ?>
                                <?php elseif (get_theme_mod($prefix . '_layout') == 'masonry') : ?>
                                    <?php gwp_item($prefix, $count, false); ?>
                                <?php else : ?>
                                    <?php gwp_item($prefix, false, false); ?>
                                <?php endif; ?>
                                <?php if (get_theme_mod($prefix . '_layout') == 'mosaic' ||
                                          get_theme_mod($prefix . '_layout') == 'masonry') : ?>
                                    <?php $count++; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                        <div class="col-sm-12 <?php 
                        if (get_theme_mod($prefix . '_gutters') == '0') : ?>col-gutter<?php endif; ?>">
                            <p><?php __('No projects.', 'gaudium'); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (!get_theme_mod($prefix . '_layout') ||
                                   get_theme_mod($prefix . '_layout') == 'default' ||
                                   get_theme_mod($prefix . '_layout') == 'landscape' ||
                                   get_theme_mod($prefix . '_layout') == 'portrait') : ?>
                            </div>
                        <?php endif; ?>
                        </div>
                    <?php if (have_posts()) : ?>
                    <div class="row">
                        <div class="col-sm-12 text-center mdspace-2">
                        <?php if (get_theme_mod($prefix . '_pagination') == 'load-more'): ?>
                            <button class="load-more btn btn-default"><?php _e('Load more','gaudium'); ?></button>
                        <?php elseif (get_theme_mod($prefix . '_pagination') == 'default-pager') : ?>
                            <?php gwp_pager_default(); ?>
                        <?php elseif (get_theme_mod($prefix . '_pagination') == 'aligned-pager') : ?>
                            <?php gwp_pager_aligned(); ?>
                        <?php endif; ?>
                        </div>
                    </div> 
                    <?php endif; ?>
                </section>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
