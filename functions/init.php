<?php

// css 読み込み
function add_enqueue_styles()
{
  wp_enqueue_style('reset', get_template_directory_uri() . '/styles/reset.css');
  wp_enqueue_style('mainStyle', get_template_directory_uri() . '/styles/style.css');
  wp_enqueue_style('addStyle', get_template_directory_uri() . '/style.css');
};
add_action('wp_enqueue_scripts', 'add_enqueue_styles');

// JS 読み込み
function add_enqueue_scripts()
{
  wp_enqueue_script('mobileMenuScript', get_template_directory_uri() . '/js/index.js');
};
add_action('wp_footer', 'add_enqueue_scripts');

// サムネイルをサポート
add_theme_support('post-thumbnails');

// Global Menuの作成
function register_my_menus()
{
  register_nav_menus(array(
    'global-menu' => 'Global Menu',
    'footer-menu'  => 'Footer Menu',
  ));
}
add_action('after_setup_theme', 'register_my_menus');

//固定ページのみGtenbergを無効化
function disable_block_editor($use_block_editor, $post_type)
{
  if ($post_type === 'page') return false;
  return $use_block_editor;
}
add_filter('use_block_editor_for_post_type', 'disable_block_editor', 10, 2);