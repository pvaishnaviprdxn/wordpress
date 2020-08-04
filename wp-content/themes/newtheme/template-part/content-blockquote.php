<?php 
  $title = get_sub_field('title');
  $quoteContent = get_sub_field('quote_content');
  $image = get_sub_field('image');
?>
<section>
  <div class="wrapper">
    <h3><?php echo $title; ?></h3>
    <ul class="quote-content">
      <?php 
          for($i=0;$i<count($quoteContent);$i++) { ?>
            <li>
                <div class="block-quote">
                  <p class="quotes"><?php echo $quoteContent[$i]['quote']; ?></p>
                  <p class="author"><?php echo $quoteContent[$i]['author']; ?></p>
                </div>
                <figure>
                  <img src="<?php echo $quoteContent[$i]['image']; ?>">
                </figure>
            </li>
          <?php }
      ?>
    </ul>
  </div>
</section>