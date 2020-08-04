</div>
<footer>
  <div class="wrapper">
    <ul>
      <li>
        <h4><a href="<?php echo home_url() ?>">
          <img src="<?php echo get_field('takecare', 'option'); ?>">
        </a></h4>
      </li>
      <li>
        <?php clean_custom_menus(); ?>
      </li>
      <li>
        <h5><?php the_field('followus', 'option'); ?></h5>
        <div>
          <?php $args=array('theme_location' => 'social'); ?>
          <?php wp_nav_menu($args); ?>
        </div>
      </li>
      <li>
        <h5><?php the_field('contactus', 'option'); ?></h5>
        <p><?php the_field('contactinfo', 'option'); ?></p>
        <a href="mailto:<?php the_field('contactemail', 'option'); ?>"><?php the_field('contactemail', 'option'); ?></a>
      </li>
    </ul>
    <div>
      <?php $args=array('theme_location' => 'footer') ?>
      <?php wp_nav_menu($args); ?>
      <span><?php bloginfo('name');?> &copy; <?php echo date('Y'); ?></span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>