<?php 
  $title = get_sub_field('title');
  $tabList = get_sub_field('list');
  $content = get_sub_field('content');
?>

<section class="process">
  <div class="wrapper">
    <h4><?php echo $title; ?></h4>
    <?php echo $tabList; ?>
    <ul class="tab-content">
    <?php for($i=0;$i<count($content);$i++) { ?>
      <li>
        <?php echo $content[$i]['sub_content']; ?>
      </li>
    <?php } ?>
    </ul>
  </div>
</section>
