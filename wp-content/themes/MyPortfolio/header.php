<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/base.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/style.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/header.css')); ?>" type="text/css">
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/works.css')); ?>" type="text/css">
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
      <a class="headerTitle" href="<?php echo esc_url(home_url('/')) ?>">Tadashi<br>Yamaguchi</a>
      <nav class="headerNav">
        <ul class="headerNav__list">
          <li class="headerNav__listItem">
            <a href="<?php echo esc_url(get_post_type_archive_link('works')); ?>">Works</a>
          </li>
          <li class="headerNav__listItem">
            <a href="">Profile</a>
          </li>
          <li class="headerNav__listItem">
            <a href="">Skills</a>
          </li>
          <li class="headerNav__listItem">
            <a href="">Contact</a>
          </li>
        </ul>
      </nav>
      </div>
    </header>