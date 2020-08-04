<?php 
    get_header();
    $img = get_field('hero_image');
    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <div class="wrapper">
            <?php the_title(); ?>
            <?php the_content(); ?>
            </div>
            <?php
        }
    } 
    else {
        echo "No posts";
    }
    get_footer();
?>