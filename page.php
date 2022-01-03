<?php get_header(); ?>

<div class="page__img">
  <?php the_post_thumbnail('large'); ?>
</div>

<?php while(have_posts()) : the_post();?>
<div class="blog-container">
  <div class="blog-post">
    <a href="<?php the_permalink(); ?>">
      <h2 class="blog-title"><?php the_title(); ?></h2>
    </a>
      <p class="blog-content"><?php the_excerpt(); ?></p>
  </div>
</div>

<?php endwhile; ?>  
<?php get_footer(); ?>