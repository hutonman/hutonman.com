<?php get_header(); ?>

<div class="page__img">
  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
  <!-- <?php the_post_thumbnail('large'); ?> -->
</div>
<?php while(have_posts()) : the_post();?>
<div class="blog">
  <div class="blog__container">
    <div class="blog__post">
      <?php $categories = get_the_category(); ?>
      <h1 class="blog__title"><?php the_title(); ?></h1>
      <div class="category">
        <p class="category__title">カテゴリ:</p> 
        <ul class="category-list">
          <?php foreach($categories as $category): ?>
            <li class="category-list-item">
              <a href="<?php echo get_category_link($category); ?>">
                <?php echo $category->cat_name; ?>
              </a> 
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="blog__content"><?php the_content(); ?></div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>