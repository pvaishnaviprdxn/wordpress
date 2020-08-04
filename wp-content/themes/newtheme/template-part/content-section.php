<?php 
  $content = get_sub_field('brief_content');
  $links = get_sub_field('link');  
?>
  <section>
    <div class="wrapper">
      <div class="application-brief">
        <?php echo $content; ?>
      </div>
      <div class="application-link">
        <?php echo $links; ?>
      </div>
    </div>
  </section>
