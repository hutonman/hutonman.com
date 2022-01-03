 <?php get_header(); ?>

  <main class="container">
    <div id="top">
      <div id="wrap">
      </div>
    </div>

    <div class="contents">
      <section id="blog">
        <?php
          $args = array(
            'posts_per_page' => 9,
            'post_type' => 'blog',
            'orderby' => 'date',
            'order' => 'DESC',
          );
          $blog_query = new WP_Query($args);
        ?>
        <h2 class="section__title">BLOG<a href="<?php echo home_url('archives/blog'); ?>" class="section__title-sub">記事一覧</a></h2>
        <?php if($blog_query->have_posts()): ?>
          <div class="card-cmp__wrapper section__content">
            <?php while($blog_query->have_posts()) : $blog_query->the_post(); ?>
              <a href="<?php the_permalink(); ?>" class="card-cmp">
                <figure class="card__img-wrapper">
                  <?php the_post_thumbnail('medium'); ?>
                </figure>
                <div class="card__body">
                  <h3 class="card__title"><?php the_title(); ?></h3>
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
        <?php endif; ?>
      </section>
      <section id="about">
        <div class="section__title">ABOUT</div>
        <div class="section__content">
          <dl>
            <dt>名前:</dt>
            <dd>坂本健(Sakamoto Takeshi)</dd>
            <dt>生年月日:</dt>
            <dd>1996/5/11</dd>
            <dt>Like:</dt>
            <dd>
              <?php
                $args = array(
                  'posts_per_page' => 10,
                  'post_type' => 'like',
                  'orderby' => 'date',
                  'order' => 'ASC',
                );
                $like_query = new WP_Query($args);
              ?>
              <?php if($like_query->have_posts()): ?>
                  <ul class="like-list">
                    <?php while($like_query->have_posts()) : $like_query->the_post(); ?>
                    
                    <li class="like-list-item"><span class="col-2">
                      <div class="img-container"><?php the_post_thumbnail('thumbnail'); ?></div>
                      <?php the_title(); ?>
                    </span></li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
            </dd>
          </dl>
        </div>
      </section>
      <section id="skills">
        <h2 class="section__title">SKiLLS</h2>
        <div class="section__content">
              <?php
                $args = array(
                  'posts_per_page' => 10,
                  'post_type' => 'skill',
                  'orderby' => 'date',
                  'order' => 'ASC',
                );
                $skill_query = new WP_Query($args);
              ?>
              <?php if($skill_query->have_posts()): ?>
                  <ul class="skill-list">
                    <?php while($skill_query->have_posts()) : $skill_query->the_post(); ?>
                    <li class="skill-list-item"><span class="col-3">
                      <div class="img-container"><?php the_post_thumbnail('thumbnail'); ?></div>
                      <?php the_title(); ?>
                    </span></li>
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
        </div>
      </section>
      <section id="works">
        <h2 class="section__title">WORKS</h2>
        <div class="section__content">
          <h3>模写サイト</h3>
          <div class="swiper-container">
          <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <!-- <div class="swiper-slide"><a href="https://hutonman.com/wp-content/themes/ImitationSite/Airbnb/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/Airbnb.png" alt=""></a></div> -->
              <div class="swiper-slide"><a href="https://hutonman.com/wp-content/themes/ImitationSite/JinDemo/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/Jindemo.png" alt=""></a></div>
              <div class="swiper-slide"><a href="https://hutonman.com/wp-content/themes/ImitationSite/Xeory/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/Xeory.png" alt=""></a></div>
              <div class="swiper-slide"><a href="https://hutonman.com/wp-content/themes/ImitationSite/isara/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/isara.png" alt=""></a></div>
              <div class="swiper-slide"><a href="https://hutonman.com/wp-content/themes/ImitationSite/TechCamp/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/TechCamp.png" alt=""></a></div>
              <div class="swiper-slide"><a href="https://hutonman.com/wp-content/themes/ImitationSite/stork/index.html"><img src="<?php echo get_template_directory_uri(); ?>/img/stork.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </section>
      <section id="web-service">
        <h2 class="section__title">WEB SERVICE</h2>
        <div class="section__content">
          <div class="service-wrapper">
            <div class="content-list">
              <h3>ゲーム攻略サイト</h3>
              <a href="https://hutonmangame.com"><img src="<?php echo get_template_directory_uri(); ?>/img/visage.png" alt="publidiary" width="70%"></a>
            </div>
            <div class="content-list">
              <h3>公開日記</h3>
              <a href="https://publidiary.com"><img src="<?php echo get_template_directory_uri(); ?>/img/publidiary.png" alt="publidiary" width="70%"></a>
            </div>
            <div class="content-list">
              <h3>切り絵ショップ</h3>
              <a href="https://hutonman.thebase.in"><img src="<?php echo get_template_directory_uri(); ?>/img/shop.png" alt="publidiary" width="70%"></a>
            </div>
          </div>
        </div>
      </section>
      <section id="contact">
        <h2 class="section__title">CONTACT</h2>
        <div class="section__content">
          <div class="form">
            <h2>
               お問い合わせ
               </h2>
            <?php echo do_shortcode('[contact-form-7 id="13" title="Contact Form"]'); ?>
          </div>
        </div>

      </section>
    </div>
  </main>

<?php get_footer(); ?>
</body>

</html>