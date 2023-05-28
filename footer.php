<footer class="footer">
  <div class="footer-nav">
    <div class="footer-company_info">
      <a href="/">A-株式会社</a>
      <p>TEL. 000-1111-2222</p>
      <p>〒100-0005</p>
      <p>東京都千代田区丸の内1丁目</p>
    </div>
    <ul class="footer-nav__list">
      <?php

      wp_nav_menu(array(
        'theme_location' => 'global-menu',
        'container' => '', //<div>を出力しない
        'items_wrap' => '%3$s', //<ul>を出力しない
      ));

      ?>
    </ul>
  </div>

  <p class="copiright">© 2023 Hidemaro Yoshimoto</p>
</footer>

</div><!-- global-container End -->
</div><!-- container End -->

<?php wp_footer(); ?>

</body>

</html>