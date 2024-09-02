<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/base.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/header.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/footer.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/works.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/contact.css')); ?>" type="text/css">
  <script src="<?php echo esc_url(get_theme_file_uri('/js/main.js'));?>"></script>
  <title>
    <?php 
    wp_title('|',true,  'right');
    bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>
<body>
  <?php wp_body_open(); ?>
    <header class="header">
      <div class="headerInner">
      <a class="headerTitle" href="<?php echo esc_url(home_url('/')) ?>">T.Yamaguchi</a>
      <nav class="headerNav">
        <ul class="headerNav__list">
          <li class="headerNav__listItem">
            <a class="headerNav__listItem__link" href="<?php echo esc_url(home_url('/#works'));?>">Works</a>
          </li>
          <li class="headerNav__listItem">
            <a class="headerNav__listItem__link" href="<?php echo esc_url(home_url('/#profile'));?>">Profile</a>
          </li>
          <li class="headerNav__listItem">
            <a class="headerNav__listItem__link" href="<?php echo esc_url(home_url('/#skills'));?>">Skills</a>
          </li>
          <li class="headerNav__listItem">
            <a class="headerNav__listItem__link" href="<?php echo esc_url(home_url('/contact-page'));?>">Contact</a>
          </li>
        </ul>
      </nav>
      <!-- ハンバーガーメニュー -->
      <button class="hamburgerBtn" id="js-hamburger">
        <span class="hamburgerLine -first" id="js-hamburgerLine-first"></span>
        <span class="hamburgerLine -second" id="js-hamburgerLine-second"></span>
        <span class="hamburgerLine -third" id="js-hamburgerLine-third"></span>
      </button>

      <nav class="hamburgerNav" id="js-hamburger-nav">
        <ul class="hamburgerNav__list">
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/#works'));?>">Works</a>
          </li>
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/#profile'));?>">Profile</a>
          </li>
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/#skills'));?>">Skills</a>
          </li>
          <li class="hamburgerNav__listItem">
            <a class="hamburgerNav__listItem__link" href="<?php echo esc_url(home_url('/contact-page')); ?>">Contact</a>
          </li>
        </ul>
      </nav>

      </div>
    </header>