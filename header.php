<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            <?php is_front_page() ? bloginfo('name') : wp_title('|', true, 'right').bloginfo('name'); ?>
        </title>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <?php wp_head(); ?>
        
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <?php 
        $prefix = gwp_page_prefix();
        $defaults = gwp_page_defaults();
        ?>
        <!-- main navbar -->
        <nav id="main-nav" class="navbar navbar-top navbar-inverse navbar-fixed-top mega-menu mdspace-1">
            <div class="container<?php
                if (gwp_theme_mod($prefix, $defaults, '_container') == 'fluid'): ?>-fluid<?php
                endif; ?>">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header mdspace-1">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="<?php get_home_url(); ?>" class="navbar-brand logo<?php 
                        if (get_theme_mod('logo_type') == 'image') : ?> logo-image ed-styles<?php 
                        endif; ?>" <?php 
                        if (get_theme_mod('logo_type') == 'image') : ?>style="background-image: url(<?php echo get_theme_mod('logo_url'); ?>); text-indent: -9999px;"<?php 
                        endif; ?>><?php echo get_theme_mod('logo_text', 'Gaudium.'); ?></a>
                </div>
                <div id="main-navbar" class="collapse navbar-collapse">
                    <?php if (is_active_sidebar('main_navbar_left')): ?>
                        <?php dynamic_sidebar('main_navbar_left'); ?>
                    <?php endif; ?>
                    <?php if (is_active_sidebar('main_navbar_right')): ?>
                        <?php dynamic_sidebar('main_navbar_right'); ?>
                    <?php endif; ?>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'menu_class'        => 'nav navbar-nav navbar-right mdspace-1',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>
            </div>
        </nav>
        <?php 
        $prefix = get_queried_object_id();
        ?>
        <?php gwp_stage(); ?>
        <?php gwp_blocks('common-header'); ?>
        <?php gwp_blocks('header'); ?>
        <?php if (!is_front_page()) : ?>
        <header id="page-title" class="page-title<?php if (gwp_theme_mod_value($prefix, $defaults, '_page_title_bg', '0') == 'light') : ?> <?php gwp_theme_mod_value($prefix, $defaults, '_page_title_bg', '0') ?>bg-2<?php elseif (gwp_theme_mod_value($prefix, $defaults, '_page_title_bg', '0') == 'image') : ?> ed-styles<?php else : ?> bg-1<?php endif; ?>"<?php if (gwp_theme_mod_value($prefix, $defaults, '_page_title_bg', '0') == 'image') : ?> style="background-image: url(<?php echo gwp_theme_mod_value($prefix, $defaults, '_page_title_bg_img', '0'); ?>); background-size: cover;"<?php endif; ?>>
            <?php echo gwp_include_images($prefix, $defaults, '_page_title'); ?>
            <?php 
            $prefix = gwp_page_prefix();
            ?>
            
            <div class="container<?php
                if (gwp_theme_mod($prefix, $defaults, '_container') == 'fluid'): ?>-fluid<?php
                endif; ?>">
                <?php 
                $prefix = get_queried_object_id();
                ?>
                <div class="row">
                    <div class="col-sm-12">
                    <?php 
                    $prefix = get_queried_object_id();
                    if(is_tax('portfolio_page') || is_tax('project_tag') )  
                    {
                        $defaults = 'portfolio';
                    }
                    elseif(is_tax('posts_page') || is_tag() || is_category())  
                    {
                        $defaults = 'blog';
                    }
                    ?>
                        <div class="tspace-<?php 
                            if (is_post_type_archive('portfolio') || is_tax('portfolio_page') || is_tax('project_tag')) : ?>2 text-<?php echo gwp_theme_mod_value($prefix, $defaults, '_title_position', 'center'); ?><?php else: ?>3<?php endif; ?>">
                            <?php if (is_singular('post') || is_singular('portfolio')) : ?>
                                <?php gwp_breadcrumb(); ?>
                            <?php endif; ?>
                            <?php if (is_404()) : ?>
                            <div class="mdspace-4 tspace-2 text-center">
                            <?php endif; ?>
                            <?php if (is_post_type_archive()) : ?>
                                <?php $obj = get_queried_object(); ?>
                                <h1><?php echo gwp_theme_mod_value($prefix, $defaults, '_title', $obj->label); ?></h1>
                            <?php elseif (is_tax('portfolio_page')) : ?>
                                <?php $obj = get_queried_object(); ?>
                                <h1><?php echo gwp_theme_mod_value($prefix, $defaults, '_title', $obj->name); ?></h1>
                            <?php elseif (is_singular('portfolio')) : ?>
                                <h1><?php the_title(); ?><?php if(has_excerpt()) : ?>: <?php echo get_the_excerpt(); ?><?php endif; ?></h1>
                            <?php elseif (is_page() || is_single()) : ?>
                                <h1><?php the_title(); ?></h1>
                            <?php elseif (is_404()) : ?>
                                <h1><?php _e('Oops! This page doesn\'t exit!', 'gaudium'); ?></h1>
                            <?php endif; ?>
                            
                            <?php if (is_404()) : ?>
                                <p class="lead"><?php _e('404: Not Found', 'gaudium'); ?></p>
                            </div>
                            <?php endif; ?>
                            <?php if (is_singular('post') || is_singular('portfolio')) : ?>
                                <?php 
                                    the_post();
    
                                    $author_id = get_the_author_meta('ID');
                                    $curauth = get_user_by('ID', $author_id);
                                    
                                    $user_nicename    = $curauth->user_nicename;
                                    $display_name     = $curauth->display_name;
                                    
                                    rewind_posts();
                                ?>
                                <p>
                                    <span class="meta">
                                        <?php the_time('j M Y'); ?>
                                    </span> 
                                    <?php 
                                        if (!is_singular('portfolio')) : ?><a href="<?php echo get_author_posts_url($author_id, $user_nicename); ?>" class="meta"><span><?php echo $display_name; ?></span></a><?php gwp_get_tags(); ?><?php 
                                        else: ?><?php gwp_get_project_tags(); ?><?php endif; ?>
                                </p>
                            <?php elseif (!is_404()) : ?>
                                <?php if(is_tax('posts_page') || 
                                        is_tag() || 
                                        is_category() ||
                                        is_home()) : ?>
                                <div class="row">
                                    <div class="col-sm-9">
                                <?php endif; ?>
                                <?php gwp_breadcrumb(); ?>
                                <?php if(is_tax('posts_page') || 
                                        is_tag() || 
                                        is_category() ||
                                        is_home()) : ?>
                                    </div>
                                    <?php if (is_active_sidebar('blog-page-title')): ?>
                                        <div class="page-title-widget col-sm-3">
                                            <?php dynamic_sidebar('blog-page-title'); ?>
                                        </div> 
                                    <?php endif; ?> 
                                </div>
                                <?php endif; ?>
                                
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <?php endif; ?>
        <?php if(is_front_page() || is_page() || is_single()) : ?>
        <main id="page">
        <?php endif; ?>
        <?php gwp_blocks('common-top'); ?>
        <?php gwp_blocks('top'); ?>
        <?php gwp_blocks('common-middle-top'); ?>
        <?php if(is_home() || is_archive() || is_search()) : ?>
        <main id="page" class="page">
        <?php endif; ?>