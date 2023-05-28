<?php

// クイックタグ追加
function add_my_quicktag()
{
?>
  <script type="text/javascript">
    // QTags.addButton('ID', 'エディタのボタンに表示する名前', '開始タグ', '終了タグ');
    QTags.addButton('h2', 'h2', '<h2>', '</h2>' + '\n');
    QTags.addButton('memo', 'メモ風', '<div class="box1">ここに文章を入れる', '</div>');
    QTags.addButton('div_class', 'div_class', '<div class="">', '</div>');
  </script>
<?php
}

add_action('admin_print_footer_scripts',  'add_my_quicktag', 100);

?>