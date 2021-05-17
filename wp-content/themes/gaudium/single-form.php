<?php get_header(); ?>
<?php 
    the_post();
    
    $author_id = get_the_author_meta('ID');
    $curauth = get_user_by('ID', $author_id);
    
    $user_nicename    = $curauth->user_nicename;
    $display_name     = $curauth->display_name;
    
    rewind_posts();
?>
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