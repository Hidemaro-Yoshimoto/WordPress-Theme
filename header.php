<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    <?php
    global $page, $paged;
    if (is_front_page()) : //トップページ
      echo 'タイトルをここに入れる｜';
      bloginfo('name');
    elseif (is_home()) : //ブログページ（ブログサイトの場合はトップページ）
      wp_title('｜', true, 'right');
      bloginfo('name');
    elseif (is_page()) : //固定ページ
      wp_title('｜', true, 'right');
      bloginfo('name');
    elseif (is_single()) : //投稿ページ
      wp_title('｜', true, 'right');
      bloginfo('name');
    elseif (is_category()) : //カテゴリーページ
      single_term_title();
      echo '｜Categories';
    elseif (is_tag()) : //タグページ
      single_term_title();
      echo '｜Tags';
    elseif (is_archive()) : //アーカイブページ
      wp_title('');
      echo '｜Archive';
    elseif (is_search()) : //検索結果ページ
      wp_title('');
      echo '｜省略タイトル';
    elseif (is_404()) : //404ページ
      echo '404｜';
      bloginfo('name');
    endif;
    if ($paged >= 2 || $page >= 2) : //２ページ目以降の場合
      echo '｜' . sprintf(
        '%sページ',
        max($paged, $page)
      );
    endif;
    ?>
  </title>
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