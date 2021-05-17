<?php get_header(); ?>
<section id="main-content" class="page">
    <div class="container">
        <div class="row row-gutter"> 
            <?php get_template_part('content', get_post_format()); ?>
            <?php get_template_part('sidebar',get_post_format()); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>