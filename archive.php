<?php get_header(); ?>

<div class="archive-wrap">
  <h2 class="h2-title">ブログ一覧</h2>
  <?php breadcrumb(); ?>

  <ul class="archive-wrap__items">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <li class="archive-wrap__item">
          <a href="<?php the_permalink(); ?>">
            <div class="archive-wrap__item-img">
              <?php
              if (get_the_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <img src="http://localhost/wordpress/wp-content/uploads/2023/05/no-image.jpg" alt="">
              <?php endif ?>
            </div>
            <div class="archive-wrap__item-text">
              <p><?php echo get_the_date(); ?></p>
              <h3><?php the_title(); ?></h3>
            </div>
          </a>
        </li>

    <?php endwhile;
    endif; ?>
  </ul>

</div>

<?php get_footer(); ?>