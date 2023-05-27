<?php get_header(); ?>

<main class="main">
  <div class="works">
    <?php breadcrumb(); ?>

    <h2 class="h2-title"><?php echo CFS()->get('client'); ?></h2>

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
                $values = CFS()->get('category');
                foreach ($values as $value) :
                ?>
                  <span class="select"><?php echo $value; ?></span>
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