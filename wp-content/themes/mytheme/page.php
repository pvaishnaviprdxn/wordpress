<?php 
    get_header();
    if (have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
        <div class="wrapper">
          <h2><?php the_title();?></h2>
          <p><?php the_content(); ?></p>
        </div>
        <?php }
    }
    else {
        echo "No posts";
    }
    //get_footer();
?>
