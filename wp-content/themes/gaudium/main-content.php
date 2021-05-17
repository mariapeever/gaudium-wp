<?php 
    $prefix = gwp_page_prefix();
    $defaults = 'blog';
?>
<section id="main-content" class="bg-1">
    <div class="container<?php 
        if (gwp_theme_mod($prefix, $defaults, '_container') == 'fluid') : ?>-fluid<?php 
        endif; ?>">
        <div class="row">
            <?php if (gwp_theme_mod($prefix, $defaults, '_layout') != 'mosaic' &&
                     (gwp_theme_mod($prefix, $defaults, '_layout') != 'masonry' || 
                      gwp_theme_mod($prefix, $defaults, '_sidebar') != '0')) : ?>
            <div class="col-sm-12 col-md-9">
            <?php else : ?>
            <div class="col-sm-12">
            <?php endif; ?>
                <section id="blog" data-load="<?php echo gwp_theme_mod_value($prefix, $defaults, '_load', '0'); ?>">
                    <?php if (gwp_theme_mod($prefix, $defaults, '_show_tags') == '1') : ?>
                    <div class="row">
                        <header>
                            <nav id="side-nav" class="navbar navbar-inverse">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#project-tags" aria-expanded="false">
                                        <span class="sr-only"><?php _e('Toggle navigation', 'gaudium'); ?></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>    
                                <div class="collapse navbar-collapse" id="project-tags">
                                    <ul class="nav nav-pills text-<?php echo gwp_theme_mod_value($prefix, $defaults, '_tags_position', 'center'); ?> bspace-1">
                                        <?php gwp_project_tags_filter(); ?>
                                    </ul>
                                </div>
                            </nav>
                        </header>
                    </div>
                    <?php endif; ?>
                    <div id="blog-items" class="blog-items<?php 
                        if (gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry' || 
                            gwp_theme_mod($prefix, $defaults, '_layout') == 'mosaic') : ?> masonry<?php 
                        endif; ?>">
                        <?php if (!gwp_theme_mod($prefix, $defaults, '_layout') ||
                                gwp_theme_mod($prefix, $defaults, '_layout') == 'default' ||
                                gwp_theme_mod($prefix, $defaults, '_layout') == 'landscape' ||
                                gwp_theme_mod($prefix, $defaults, '_layout') == 'portrait') : ?>
                        <div class="row row-gutter">
                        <?php endif; ?>
                        <?php if (have_posts()) : ?>
                            <?php if (gwp_theme_mod($prefix, $defaults, '_layout') == 'mosaic') : ?>
                                <?php gwp_mosaic_grid($prefix); ?>
                            <?php elseif (gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry') : ?>
                                <?php gwp_masonry_grid($prefix); ?>
                            <?php endif; ?>
                            <?php if (gwp_theme_mod($prefix, $defaults, '_layout') == 'mosaic' ||
                                    gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry') : ?>
                                <?php $count = 1; ?>
                            <?php endif; ?>
                            <?php while(have_posts()) : the_post();?>
                                <?php if (gwp_theme_mod($prefix, $defaults, '_layout') == 'mosaic') : ?>
                                    <?php gwp_mosaic_items($prefix, $count); ?>
                                <?php elseif (gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry') : ?>
                                    <?php gwp_item($prefix, $count, false); ?>
                                <?php else : ?>
                                    <?php gwp_item($prefix, false, false); ?>
                                <?php endif; ?>
                                <?php if (gwp_theme_mod($prefix, $defaults, '_layout') == 'mosaic' ||
                                          gwp_theme_mod($prefix, $defaults, '_layout') == 'masonry') : ?>
                                    <?php $count++; ?>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        <?php else : ?>
                        <div class="col-sm-12 <?php 
                            if (gwp_theme_mod($prefix, $defaults, '_gutters') == '0') : ?>col-gutter<?php endif; ?>">
                            <p><?php _e('No items.', 'gaudium'); ?></p>
                        </div>
                        <?php endif; ?>
                        <?php if (!gwp_theme_mod($prefix, $defaults, '_layout') ||
                                gwp_theme_mod($prefix, $defaults, '_layout') == 'default' ||
                                gwp_theme_mod($prefix, $defaults, '_layout') == 'landscape' ||
                                gwp_theme_mod($prefix, $defaults, '_layout') == 'portrait') : ?>
                            </div>
                        <?php endif; ?>
                        </div>
                    <?php if (have_posts()) : ?>
                    <div class="row">
                        <div class="col-sm-12 text-center mdspace-2">
                        <?php if (gwp_theme_mod($prefix, $defaults, '_pagination') == 'load-more'): ?>
                            <button class="load-more btn btn-default"><?php _e('Load more', 'gaudium'); ?></button>
                        <?php elseif (gwp_theme_mod($prefix, $defaults, '_pagination') == 'default-pager') : ?>
                            <?php gwp_pager_default(); ?>
                        <?php elseif (gwp_theme_mod($prefix, $defaults, '_pagination') == 'aligned-pager') : ?>
                            <?php gwp_pager_aligned(); ?>
                        <?php elseif (gwp_theme_mod($prefix, $defaults, '_pagination') == 'pagination-sm') : ?>
                            <?php gwp_pagination('sm'); ?>
                        <?php elseif (gwp_theme_mod($prefix, $defaults, '_pagination') == 'pagination-md') : ?>
                            <?php gwp_pagination(''); ?>
                        <?php elseif (gwp_theme_mod($prefix, $defaults, '_pagination') == 'pagination-lg') : ?>
                            <?php gwp_pagination('lg'); ?>
                        <?php endif; ?>
                        </div>
                    </div> 
                    <?php endif; ?>      
                </section>
            </div>
            <?php if (gwp_theme_mod($prefix, $defaults, '_layout') != 'mosaic' &&
                     (gwp_theme_mod($prefix, $defaults, '_layout') != 'masonry' || 
                      gwp_theme_mod($prefix, $defaults, '_sidebar') != '0')) : ?>
                <?php get_template_part('sidebar',get_post_format()); ?>
            <?php endif; ?>
        </div>
    </div>
</section>