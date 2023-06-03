<?php get_header(); ?>

<div style="padding: 3rem 2rem;">
  <?php breadcrumb(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post() ?>

      <?php the_title(); ?>
      <?php the_content(); ?>

  <?php endwhile;
  endif; ?>
</div>

<?php get_footer(); ?>