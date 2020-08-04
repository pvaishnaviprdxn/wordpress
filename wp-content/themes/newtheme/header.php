<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container">
    <header>
      <div class="wrapper">
        <h1>
          <a href="<?php echo home_url(); ?>">
            <img class="img-logo" src="<?php the_field('logo', 'option');?>" alt="<?php bloginfo('name'); ?>">
          </a>
        </h1>
        <?php clean_custom_menus(); ?>
        <?php $args=array('theme_location' => 'social') ?>
        <?php wp_nav_menu($args); ?>
      </div>
    </header>