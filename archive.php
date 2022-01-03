<?php get_header(); ?>

<?php if(have_posts()): ?>
  <div class="archives">
    <div class="card-cmp__wrapper content">
      <?php while(have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="card-cmp">
        <figure class="card__img-wrapper">
          <?php the_post_thumbnail('medium'); ?>
        </figure>
        <div class="card__body">
          <h2 class="card__title"><?php the_title(); ?></h2>
          <div class="card__text">
            <?php the_excerpt(); ?>
          </div>
          <div class="category">
            <p class="category__title">カテゴリ:</p>
            <ul class="category-list">
              <?php $categories = get_the_category(); ?>
              <?php foreach($categories as $category): ?>
              <li class="category-list-item">
                <object data="" type="">
                  <!-- <a href="<?php echo get_category_link($category); ?>" class="category-list-item-link"> -->
                    <?php echo $category->cat_name; ?>
                  <!-- </a> -->
                  
                </object>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="card__date">
            <?php echo get_the_date('Y/m/d G:i'); ?>
          </div>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>