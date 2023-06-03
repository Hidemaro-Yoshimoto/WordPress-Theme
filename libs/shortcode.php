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

// 会話の吹き出し（右から左に）
function kaiwa_right_to_left($attr, $content)
{

  $text_wrap = '<div class="text_wrap"><p>' . $content . '</p></div>';
  $icon_wrap = '<div class="icons_wrap"><div><img src="' . get_template_directory_uri() . '/img/adword.png' . '"></div><p>編集者</p></div>';
  $html = '<div class="kaiwa_right_to_left">' . $text_wrap . $icon_wrap . '</div>';
  return $html;
}
add_shortcode('kaiwa_right_to_left', 'kaiwa_right_to_left');

// 会話の吹き出し（左から右に）
function kaiwa_left_to_right($attr, $content)
{
  $text_wrap = '<div class="text_wrap"><p>' . $content . '</p></div>';
  $icon_wrap = '<div class="icons_wrap"><div><img src="' . get_template_directory_uri() . '/img/adword.png' . '"></div><p>編集者</p></div>';
  $html = '<div class="kaiwa_left_to_right">' . $text_wrap . $icon_wrap . '</div>';
  return $html;
}
add_shortcode('kaiwa_left_to_right', 'kaiwa_left_to_right');

// リスト ボックスシャドウ
function list_boxshadow($attr)
{
  $attr = shortcode_atts([
    'wrap' => 'ul',
    'list1' => 'リストアイテム1',
    'list2' => 'リストアイテム2',
    'list3' => '',
    'list4' => '',
    'list5' => '',
  ], $attr);

  $wrap = $attr['wrap'];
  $list1 = "<li>" . $attr['list1'] . "</li>";
  $list2 = "<li>" . $attr['list2'] . "</li>";
  $list3 = "<li>" . $attr['list3'] . "</li>";
  $list4 = "<li>" . $attr['list4'] . "</li>";
  $list5 = "<li>" . $attr['list5'] . "</li>";
  $list_items = '';

  if (empty($attr['list3'])) {
    $list_items .= $list1 . $list2;
  } elseif (empty($attr['list4'])) {
    $list_items .= $list1 . $list2 . $list3;
  } elseif (empty($attr['list5'])) {
    $list_items .= $list1 . $list2 . $list3 . $list4;
  } else {
    $list_items .= $list1 . $list2 . $list3 . $list4 . $list5;
  }

  return "<$wrap class='list_boxshadow'>$list_items</$wrap>";
}
add_shortcode('list_boxshadow', 'list_boxshadow');

// リスト 鉛筆マーク付き
function list_pencil_icon($attr)
{
  $attr = shortcode_atts([
    'list1' => 'リストアイテム1',
    'list2' => 'リストアイテム2',
    'list3' => '',
    'list4' => '',
    'list5' => '',
  ], $attr);

  $li_start = "<li><span><img src=" . get_template_directory_uri() . "/img/pencil.png" . "></span>";
  $li_end = "</li>";
  $list_array = [];

  for ($i = 1; $i < count($attr) + 1; $i++) {
    $item = $li_start . $attr["list$i"] . $li_end;
    array_push($list_array, $item);
  }
  // var_dump($list_array);

  foreach($list_array as $key => $val) {
    if(empty(strip_tags($val))) {
      unset($list_array[$key]);
    }
  }
  // var_dump($list_array);
  
  $list_items = '';
  foreach($list_array as $list) {
    $list_items .= $list;
  }

  return "<ul class='list_pencil_icon'>$list_items</ul>";
}
add_shortcode('list_pencil_icon', 'list_pencil_icon');
