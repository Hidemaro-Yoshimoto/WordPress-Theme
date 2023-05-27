<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="global-container">

    <?php get_template_part('template-parts/sp', 'nav'); ?>

    <div class="container" id="js-container">
      <div class="cover"></div>

      <header class="header">
        <a href="<?php echo home_url(); ?>" class="logo">A-株式会社</a>
        <ul>
          <?php

          // あまり使わない？？
          // wp_nav_menu([
          //   'menu' => 'グローバルメニュー'
          // ]);

          wp_nav_menu(array(
            'theme_location' => 'global-menu',
            'container' => '', //<div>を出力しない
            'items_wrap' => '%3$s', //<ul>を出力しない
          ));

          ?>
          <li id="js-nav-trigger">
            <span></span>
            <span></span>
            <span></span>
          </li>
        </ul>
      </header>