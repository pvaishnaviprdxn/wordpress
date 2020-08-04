<?php 
    get_header();
    $img = get_field('hero_image');
    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <div class="wrapper">
            <span>Contact us</span>
            <?php the_content(); ?>
            <p><?php the_field('rating'); ?></p>
            <p><?php the_field('opinion'); ?></p>
            </div>
            <?php
        }
    } 
    else {
        echo "No posts";
    }
    get_footer();
?>