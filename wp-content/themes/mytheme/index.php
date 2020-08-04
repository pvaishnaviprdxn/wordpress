<?php 
    get_header();
    if (have_posts()) {
        while(have_posts()) {
            the_post();
            ?>
        <div class="wrapper">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2>
          <p><?php the_content(); ?></p>
        </div>
        <?php 
        }
    }
    else {
        echo "No posts";
    }
    
?>
