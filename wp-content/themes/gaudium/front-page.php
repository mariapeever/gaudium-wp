<?php get_header(); ?>
<?php if (is_active_sidebar('blocks-top')): ?>
    <?php dynamic_sidebar('blocks-top'); ?>
<?php endif; ?>
<?php if (have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
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
<?php endwhile; ?>
<?php endif; ?>
<?php if (is_active_sidebar('blocks-bottom')): ?>
    <?php dynamic_sidebar('blocks-bottom'); ?>
<?php endif; ?>   
<?php get_footer(); ?>