<?php

// パンくずリスト
function breadcrumb()
{
  $home = '<li><a href="' . home_url() . '" >ホーム</a></li>';
  echo '<ul class="breadcrump">';
  if (is_front_page()) {
    // トップページの場合
  } else if (is_category()) {
    // カテゴリページの場合
    $cat = get_queried_object();
    // var_dump($cat);
    $cat_id = $cat->parent;
    $cat_list = array();
    while ($cat_id != 0) {
      $cat = get_category($cat_id);
      $cat_link = get_category_link($cat_id);
      array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');
      $cat_id = $cat->parent;
    }
    echo $home;
    foreach ($cat_list as $value) {
      echo $value;
    }
    the_archive_title('<li>', '</li>');
  } else if (is_archive()) {
    // 月別アーカイブ・タグページの場合
    echo $home;
    the_archive_title('<li>', '</li>');
  } else if (is_single()) {
    // 投稿ページの場合
    $cat = get_the_category();

    // var_dump($cat);

    // echo '<pre>';
    // var_dump($cat);
    // echo '</pre>';

    // echo '<pre>';
    // var_dump($cat[0]);
    // echo '</pre>';

    // echo '<br>';

    // echo $cat[0]->cat_ID . '<br>';

    if (!empty($cat)) {

      // 三項演算子使用
      if (isset($cat[0]->cat_ID)) $cat_id = $cat[0]->cat_ID;

      $cat_list = array();

      while ($cat_id != 0) {
        $cat = get_category($cat_id);
        // echo '<pre>';
        // var_dump($cat);
        // echo '</pre>';

        // 指定したカテゴリIDのリンクを取得
        $cat_link = get_category_link($cat_id);

        // 配列の先頭にliをいれる
        array_unshift($cat_list, '<li><a href="' . $cat_link . '">' . $cat->name . '</a></li>');

        $cat_id = $cat->parent;
      }

      // ここでパンくずリストを表示
      echo $home;
      foreach ($cat_list as $value) {
        echo $value;
      }
    } else {
      echo $home . '<li><a href="' . home_url() . '/works">未分類</a></li>';
    }

    the_title('<li>', '</li>');
  } else if (is_page()) {
    // 固定ページの場合
    echo $home;
    the_title('<li>', '</li>');
  } else if (is_search()) {
    // 検索ページの場合
    echo $home;
    echo '<li>「' . get_search_query() . '」の検索結果</li>';
  } else if (is_404()) {
    // 404ページの場合
    echo $home;
    echo '<li>ページが見つかりません</li>';
  }
  echo "</ul>";
}

// the_archive_title(), get_the_archive_title() から余計な文字を削除
add_filter('get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('', false);
  } elseif (is_tag()) {
    $title = single_tag_title('', false);
  } elseif (is_tax()) {
    $title = single_term_title('', false);
  } elseif (is_post_type_archive()) {
    $title = post_type_archive_title('', false);
  } elseif (is_date()) {
    $title = get_the_time('Y年n月');
  } elseif (is_search()) {
    $title = '検索結果：' . esc_html(get_search_query(false));
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  }
  return $title;
});

?>