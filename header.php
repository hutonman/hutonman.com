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

<body>
  <div id="head-container">
    <header>
      <button id="btn">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div id="logo">
        <h1><a href="<?php echo site_url('/'); ?>">TiER1</a></h1>
      </div>
      <nav>
        <ul id="navi">
          <li>
            <a href="<?php echo site_url('/#blog'); ?>">BLOG</a>
          </li>
          <li>
            <a href="<?php echo site_url('/#about'); ?>">ABOUT</a>
          </li>
          <li>
            <a href="<?php echo site_url('/#skills'); ?>">SKiLLS</a>
          </li>
          <li>
            <a href="<?php echo site_url('/#works'); ?>">WORKS</a>
          </li>
          <li>
            <a href="<?php echo site_url('/#contact'); ?>">CONTACT</a>
          </li>
        </ul>
      </nav>
    </header>
  </div>