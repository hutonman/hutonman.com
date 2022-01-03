<?php get_header(); ?>

<?php
global $wp;
$current_url = add_query_arg( $wp->query_string, '', home_url( $wp->request ) );
$current_url = strtok( $current_url, '?' );
$cat_name =  str_replace(home_url() . '/archives/category/', '', $current_url);

  $args = array(
    'posts_per_page' => 9,
    'post_type' => 'blog',
    'orderby' => 'date',
    'order' => 'DESC',
    'category_name' => $cat_name,
  );
  $blog_query = new WP_Query($args);
?>

<!-- <h1>カテゴリ: <?php the_category(); ?></h1> -->

<?php if($blog_query->have_posts()): ?>
  <div class="archives">
    <div class="card-cmp__wrapper content">
      <?php while($blog_query->have_posts()) : $blog_query->the_post(); ?>
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