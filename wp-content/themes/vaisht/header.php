<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
    <header>
      <div class="wrapper">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        <nav class="site-menu">
        <?php 
          $menu = array('theme_location' => 'primary');
        ?>
        <?php wp_nav_menu($menu);?>
      </nav>
      </div>
    </header>