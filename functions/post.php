<?php

// 投稿のアーカイブページ作成
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog';
    $args['label'] = 'ブログ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// カスタム投稿タイプを追加 
function cpt_register_works()
{
  $labels = [
    'singular_name' => 'works',
    'edit_item' => 'works'
  ];

  $args = [
    'label' => '制作実績',
    'labels' => $labels,
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'menu_position' => 5,
    'supports' => [
      'title',
      // 'editor',
      'thumbnail',
      'revisions',
    ],
  ];
  register_post_type('works', $args);
}
add_action('init', 'cpt_register_works');

// カテゴリー追加
function cpt_register_dep()
{
  $labels = ['singular_name' => 'dep'];

  $args = [
    'label' => 'カテゴリー',
    'lanels' => $labels,
    'publicly_queryable' => true,
    'hierarchical' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'rewrite' => ['slug' => 'dep', 'with_front' => true],
    'show_admin_column' => false,
    'rest_base' => true,
    'rest_controller_class' => 'WP_REST_Terms_Controller',
    'show_in_quick_edit' => false
  ];
  register_taxonomy('dep', ['works'], $args);
}
add_action('init', 'cpt_register_dep');

?>