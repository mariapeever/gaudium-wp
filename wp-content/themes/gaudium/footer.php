        <?php if(is_archive() || is_home()) : ?>
        </main>
        <?php endif; ?>
        <?php gwp_blocks('common-middle-bottom'); ?>
        <?php gwp_blocks('bottom'); ?>
        <?php gwp_blocks('common-bottom'); ?>
        <?php if(is_front_page() || is_page() || is_single()) : ?>
        </main>
        <?php endif; ?>
        <footer id="footer" class="footer block bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <?php if (get_theme_mod('activate_social') != '0') : ?>
                        <ul class="list-inline center">
                            <?php if (get_theme_mod('facebook_link') != null) : ?>
                            <li><a href="<?php echo get_theme_mod('facebook_link','0'); ?>" class="meta"><span class="ion-social-facebook sm"></span></a></li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('twitter_link') != null) : ?>
                            <li><a href="<?php echo get_theme_mod('twitter_link',''); ?>" class="meta"><span class="ion-social-twitter sm"></span></a></li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('instagram_link') != null) : ?>
                            <li><a href="<?php echo get_theme_mod('instagram_link',''); ?>" class="meta"><span class="ion-social-instagram sm"></span></a></li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('linkedin_link') != null) : ?>
                            <li><a href="<?php echo get_theme_mod('linkedin_link',''); ?>" class="meta"><span class="ion-social-linkedin sm"></span></a></li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('pinterest_link') != null) : ?>
                            <li><a href="<?php echo get_theme_mod('pinterest_link',''); ?>" class="meta"><span class="ion-social-pinterest sm"></span></a></li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('googleplus_link') != null) : ?>
                            <li><a href="<?php echo get_theme_mod('googleplus_link',''); ?>" class="meta"><span class="ion-social-googleplus sm"></span></a></li>
                            <?php endif; ?>
                            <?php if (get_theme_mod('dribbble_link') != null) : ?>
                            <li><a href="<?php echo get_theme_mod('dribbble_link',''); ?>" class="meta"><span class="ion-social-dribbble sm"></span></a></li>
                            <?php endif; ?>
                        </ul>
                        <?php endif; ?>
                        <p class="text-center mdspace-1"><small>&copy; <?php echo Date('Y');?> <?php bloginfo('name'); ?>. All rights reserved.</small></p>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <!-- <script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script> -->
        <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
        <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
        <script>
        (function($){


            $("[name=\"_field_contact_number\"]").each(function() 
            {
                console.log('cookie');;
                if($(this).getAttribute('required') == 'required') {
                    $.cookie($(this).getAttribute('name'), $(this).getAttribute("required"));
                    alert(
                     'The value of myCookie is now "'
                    + $.cookie($(this).getAttribute('name'))
                    + '". Now, reload the page, PHP should read it correctly.'
                    );
                }
            });
        });
    </script>
    </body>
</html>