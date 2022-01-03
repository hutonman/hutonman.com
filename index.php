<?php get_header(); ?>

<?php if(have_posts()): ?>
  <div class="card-cmp__wrapper content">
    <?php while(have_posts()) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="card-cmp">
      <figure class="card__img-wrapper">
        <?php the_post_thumbnail('medium'); ?>
      </figure>
      <div class="card__body">
        <h3 class="card__title"><?php the_title(); ?></h3>
        <div class="card__text">
          <?php the_excerpt(); ?>
        </div>
      </div>
    </a>
    <?php endwhile; ?>
  </div>
<?php endif; ?>

<?php get_footer(); ?>