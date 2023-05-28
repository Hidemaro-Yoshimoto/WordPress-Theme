<?php get_header(); ?>

<main class="main">
  <div class="works">
    <?php breadcrumb(); ?>

    <?php
    // echo "<pre>";
    // var_dump($post);
    // echo "</pre>";
    ?>

    <h2 class="h2-title"><?php echo CFS()->get('client'); ?></h2>
    <?php the_time('Y-m-d'); ?>

    <div class="works-img">
      <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="">
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <table class="works__table">
          <tbody>
            <tr>
              <th>クライアント</th>
              <td><?php echo CFS()->get('client'); ?></td>
            </tr>
            <tr>
              <th>業種</th>
              <td>
                <?php
                // $test = $post;
                // echo "<pre>";
                // var_dump($test);
                // echo "</pre>";

                // get_the_term_list() ・・・リンク付きになるからget_the_termsを使用
                // リンク付きがいいならlist

                // $values = get_the_terms_list($post->ID, 'dep', '<span class="select">', '</span><span class="select">', '</span>');
                $values = get_the_terms($post->ID, 'dep');

                // echo "<pre>";
                // var_dump($values);
                // echo "</pre>";

                foreach($values as $value):
                  // echo "<pre>";
                  // var_dump($value);
                  // echo "</pre>";
                ?>
                <span class="select"><?php echo $value->name ?></span>
                <?php endforeach; ?>
              </td>
            </tr>
            <tr>
              <th>URL</th>
              <td><a href=""><?php echo CFS()->get('link'); ?></a></td>
            </tr>
            <tr>
              <th>サイトタイプ</th>
              <td>
                <?php
                $values = CFS()->get('type');
                foreach ($values as $value) :
                ?>
                  <span class="select"><?php echo $value; ?></span>
                <?php endforeach; ?>
              </td>
            </tr>
            <tr>
              <th>プロジェクト期間</th>
              <td><?php echo CFS()->get('period'); ?></td>
            </tr>
          </tbody>
        </table>

    <?php endwhile;
    endif; ?>
  </div>

  <?php get_template_part('/template-parts/contact', 'prompt') ?>

</main>

<?php get_footer(); ?>