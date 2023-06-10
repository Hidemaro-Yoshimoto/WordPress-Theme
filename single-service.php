<?php get_header(); ?>
<?php breadcrumb(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="service">
      <div class="service__img">
        <?php
        $img = get_field('service_img');
        $img = $img['url'];
        ?>
        <img src="<?php echo $img ?>" alt="">
      </div>
      <div class="service__text">
        <h1><?php the_field('service_title'); ?></h1>
        <p><?php the_field('service_content'); ?></p>
      </div>
    </div>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>