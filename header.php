<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tier1.com</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css?<?php echo date('Ymd-His'); ?>">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Source+Serif+Pro:wght@200&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <?php wp_head() ?>
</head>

<body class="body-style">
  <div class="head-container" id="head-container">
    <header class="header">
      <button class="header__btn" id="btn">
        <span class="btn-line"></span>
        <span class="btn-line"></span>
        <span class="btn-line"></span>
      </button>
      <div class="header__logo" id="logo">
        <h1><a href="<?php echo site_url('/'); ?>">TiER1</a></h1>
      </div>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-list-item">
            <a href="<?php echo site_url('/#blog'); ?>" class="header__nav-link">BLOG</a>
          </li>
          <li class="header__nav-list-item">
            <a href="<?php echo site_url('/#about'); ?>" class="header__nav-link">ABOUT</a>
          </li>
          <li class="header__nav-list-item">
            <a href="<?php echo site_url('/#skills'); ?>" class="header__nav-link">SKiLLS</a>
          </li>
          <li class="header__nav-list-item">
            <a href="<?php echo site_url('/#works'); ?>" class="header__nav-link">WORKS</a>
          </li>
          <li class="header__nav-list-item">
            <a href="<?php echo site_url('/#contact'); ?>" class="header__nav-link">CONTACT</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>