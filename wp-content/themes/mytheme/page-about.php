<?php 
    get_header();
    if (have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
        <div class="wrapper">
          <?php the_content(); ?>
        </div>
        <?php }
    }
    else {
        echo "No posts";
    }
    get_footer();
?>
