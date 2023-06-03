<?php
/*==================================
ショートコード追加
==================================*/
function hukidashi($attr, $content)
{
  $html = '<div class="box2">' . $content . '</div>';
  return $html;
}
add_shortcode('hukidashi', 'hukidashi');

// ポイントのボックス
function point_commentary($attr, $content)
{
  $input_ttl = '<div class="box3_ttl">Point</div>';
  $input_content = '<div class="box3">' . $content . '</div>';

  $html = $input_ttl . $input_content;
  return $html;
}
add_shortcode('point_commentary', 'point_commentary');

// コメントボックス（カスタマイズ）
function comment_box($attr)
{
  $attr = shortcode_atts(
    array(
      'ttl' => 'タイトル',
      'content' => 'ここにテキストを入力してください。'
    ),
    $attr,
  );

  $input_ttl = '<div class="box3_ttl">' . $attr['ttl'] . '</div>';
  $input_content = '<div class="box3">' . $attr['content'] . '</div>';

  return $input_ttl . $input_content;
}
add_shortcode('comment_box', 'comment_box');

// 背景塗りつぶし
function nuritsubushi($attr)
{
  $attr = shortcode_atts([
    'bgc' => '#cde4ff',
    'color' => '#000',
    'content' => 'ここにテキストを入力してください'
  ], $attr);

  $bgc = $attr['bgc'];
  $content = $attr['content'];
  $color = $attr['color'];

  return '<div class="box4" style="background-color:' . $bgc . '"><p style="; color: ' . $color . '">' . $content . '</p></div>';
};
add_shortcode('nuritsubushi', 'nuritsubushi');

// 付箋風
function husen($attr)
{
  $attr = shortcode_atts([
    'border' => '#ffc06e',
    'bgc' => '#fff8e8',
    'color' => '#000',
    'content' => 'ここにテキストを入力してください'
  ], $attr);
  $border = $attr['border'];
  $bgc = $attr['bgc'];
  $content = $attr['content'];
  $color = $attr['color'];

  $style = 'background-color: ' . $bgc . '; border-left: solid 10px ' . $border . ';';

  return '<div class="box5" style="' . $style . '"><p style="color: ' . $color . ';">' . $content . '</p></div>';
};
add_shortcode('husen', 'husen');

