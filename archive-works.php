<?php get_header(); ?>

<div class="archive-works">
  <?php breadcrumb(); ?>

  <h2 class="h2-title">中小・中堅のBtoB企業を中心に着実に実績を増やしています。</h2>
  <p class="archive-works-text">Web制作はもちろん、展示会パネルやパンフレットなどBtoB企業に必要なクリエイティブ全般の制作を承っております。</p>

  <ul class="archive-works__items">
    <?php if (have_posts()) : while (have_posts()) : the_post() ?>
        <li class="archive-works__item">

          <a href="<?php the_permalink(); ?>" class="archive-works__item-link">

            <div class="archive-works__item-img">
              <img src="<?php echo CFS()->get('thumbnail'); ?>" alt="">
            </div>
            <div class="archive-works__item-categories">
              <?php
              $values = CFS()->get('category');
              foreach ($values as $value) :
              ?>
                <span class="archive-works__item-category">
                  <?php echo $value; ?>
                </span>
              <?php endforeach; ?>
            </div>
            <h3 class="archive-works__item-client"><?php echo CFS()->get('client'); ?></h3>

          </a>
        </li>
    <?php endwhile;
    endif; ?>

  </ul>
</div>

<?php get_footer(); ?>