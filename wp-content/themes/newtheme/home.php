<?php 
    get_header();
    if(have_posts()) {
        while(have_posts()) {
            the_post(); ?>
            <div class="wrapper">
            <h2 class="a"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
            
          </div>
        <?php }
    }
    get_footer();
?>