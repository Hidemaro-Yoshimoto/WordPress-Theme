<?php

// ショートコード追加
function hukidashi($attr, $content)
{
  $html = '<div class="box2">' . $content . '</div>';
  return $html;
}
add_shortcode('hukidashi', 'hukidashi');

function point_commentary($attr, $content)
{
  $input_ttl = '<div class="box3_ttl">Point</div>';
  $input_content = '<div class="box3">' . $content . '</div>';

  $html = $input_ttl . $input_content;
  return $html;
}
add_shortcode('point_commentary', 'point_commentary');

function comment_box($atts)
{
  $atts = shortcode_atts(
    array(
      'ttl' => 'タイトル',
      'content' => 'ここにテキストを入力してください。'
    ),
    $atts,
  );

  $input_ttl = '<div class="box3_ttl">' . $atts['ttl'] . '</div>';
  $input_content = '<div class="box3">' . $atts['content'] . '</div>';

  return $input_ttl . $input_content;
}
add_shortcode('comment_box', 'comment_box');
