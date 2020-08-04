<?php 
  $title = get_sub_field('title');
  $content = get_sub_field('content');
  $image = get_sub_field('descriptive_image');

?>
<section>
  <div class="wrapper">
  <div class="description">
    <h3><?php echo $title; ?></h3>
    <p><?php echo $content; ?></p>
  </div>
  <figure>
    <img src="<?php echo $image['url']; ?>">
  </figure>
</section>