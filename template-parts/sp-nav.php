<nav class="sp-nav">

  <?php

  // あまり使わない？？
  // wp_nav_menu([
  //   'menu' => 'グローバルメニュー'
  // ]);

  wp_nav_menu(array(
    'theme_location' => 'global-menu',
    'container' => '', //<div>を出力しない
  ));

  ?>

</nav>