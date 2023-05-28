<h3>サブクエリの練習</h3>

<?php
$args = [
  'post_type' => 'works',
  'posts_per_page' => 3
];
$the_query = new WP_Query($args);
?>

<?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>

    <div>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        <?php echo get_the_date() ?>
        <?php the_excerpt() ?>
        <?php
        $terms = get_the_terms($post->ID, 'dep');
        foreach ($terms as $term) :
        ?>
          <span><?php echo $term->name ?></span>
        <?php endforeach; ?>
      </a>
    </div>

<?php endwhile;
endif ?>