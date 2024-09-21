<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="thumbnail" content="<?= get_template_directory_uri(); ?>/assets/images/thumbnail.jpg">
  <meta property="og:title" content="<?php bloginfo('name'); ?>" />
  <meta property="og:description" content="<?php bloginfo('description'); ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/images/thumbnail.jpg" />
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
  <meta property="og:locale" content="ja_JP" />
  <link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.ico" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css">
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="c-logo"><a href="<?= home_url(); ?>"><img src="<?= get_option('company0_logo'); ?>" alt="<?= get_option('company0_name'); ?>" width="100" height="100" /></a></div>
    <nav class="header__nav">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
      ));
      ?>
    </nav>
    <span class="material-symbols-outlined md:hidden js-menu-toggler icon">
      menu
    </span>
  </header>
  <div class="sp-menu-container">
    <div class="text-right">
      <span class="material-symbols-outlined js-menu-toggler icon">
        close
      </span>
    </div>
    <nav>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'header',
      ));
      ?>
    </nav>
  </div>
  <main>