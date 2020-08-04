<?php 
/*
Template Name: comm-temp
*/
    get_header();
    if (have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
        <div class="wrapper">
          <h2><?php the_title();?></h2>
          <?php the_content(); ?>
          <div class="achieve">
            <span>Our Achievements</span>
            <p>
                Vitae sapien pellentesque habitant morbi tristique senectus et netus. A diam sollicitudin tempor id eu nisl nunc mi ipsum. Tristique et egestas quis ipsum suspendisse ultrices gravida dictum fusce. 
            </p>
          </div>
        </div>

        <?php }
    }
    else {
        echo "No posts";
    }
    get_footer();
?>
