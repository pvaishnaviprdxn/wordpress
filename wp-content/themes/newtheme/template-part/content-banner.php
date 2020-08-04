<?php
  $bannerName = get_field('banner_heading'); 
?>
  <section class="banner">
    <div class="wrapper">
      <?php the_post_thumbnail('medium'); ?>
      <h2><?php echo $bannerName; ?></h2>
    </div>
  </section>



