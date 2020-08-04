<?php 
  $videocontent = get_sub_field('video_content');
  $videoimage = get_sub_field('video_feature_image');
  $image = $videoimage['url'];
  $videolink = get_sub_field('video');
?>
  <section>
    <div class="wrapper">
      <div class="video-content">
        <?php echo $videocontent; ?>
      </div>
      <div class="video-image">
        <?php echo $videolink; ?>
      </div>
    </div>
  </section>