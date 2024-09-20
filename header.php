<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(is_front_page()) : ?>
  <title>「出会えて良かった」と思われるものを-株式会社NEXUS</title>
  <meta name="title" content="「出会えて良かった」と思われるものを - 株式会社NEXUS" />
  <meta name="description" content="NEXUSでは日用雑貨販売、エステ事業を展開しております。物販やエステを通じて「こんな商品、サービス、人に出会って良かった」と思えるような活動をしています。" />
  <meta property="og:title" content="「出会えて良かった」と思われるものを-株式会社NEXUS" />
  <meta property="og:description" content="NEXUSでは日用雑貨販売、エステ事業を展開しております。物販やエステを通じて「こんな商品、サービス、人に出会って良かった」と思えるような活動をしています。" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php home_url(); ?>" />
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/logo.jpg" />
  <?php else : ?>
    <title><?php the_title(); ?></title>
    <meta name="title" content="<?php the_title(); ?>" />
    <meta name="description" content="<?= get_the_excerpt() ;?>" />
    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:description" content="<?= get_the_excerpt() ;?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
  <?php endif; ?>
  <meta property="og:site_name" content="株式会社NEXUS" />
  <meta property="og:locale" content="ja_JP"  />
  <!-- <link rel="icon" href="/favicon.ico" /> -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/styles/tw.css?v=1" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/styles/index.css?v=1">
  <?php wp_enqueue_script('jquery'); ?>
	<?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="container mx-auto">
      <div class="flex justify-between items-center">
        <div class="c-logo"><a href="<?= home_url(); ?>"><img src="<?= get_option('company0_logo'); ?>" alt="株式会社NEXUS"></a></div>
        <div class="flex items-center">
          <button class="js-menu-button c-nav-icon"></button>
        </div>
      </div>
    </div>
  </header>
  <div id="jsNav" class="l-nav-container">
    <div class="relative">
      <button class="js-menu-button c-nav-icon c-nav-icon--close ml-auto mt-8 mr-8"></button>
      <nav class="mt-24">
        <ul>
          <li class="p-4"><a class="js-menu-button" href="">About</a></li>
          <li class="p-4"><a class="js-menu-button" href="">Service</a></li>
          <li class="p-4"><a class="js-menu-button" href="">Works</a></li>
          <li class="p-4"><a class="js-menu-button" href="">News</a></li>
          <li class="p-4"><a class="js-menu-button" href="">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <main>