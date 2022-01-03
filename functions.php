<?php
//サムネ追加
add_theme_support('post-thumbnails');

// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
  
  register_post_type(
    'blog', // 投稿タイプ名の定義
    array(
      'labels' => array(
        'name' => __( 'blog' ), // 表示する投稿タイプ名
        'singular_name' => __( 'blog' )
      ),
      'public' => true,
      'hierarchical' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-welcome-learn-more',
      'show_in_rest' => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'show_in_rest',
      ),
    ),
  );

  register_post_type(
    'like', // 投稿タイプ名の定義
    array(
      'labels' => array(
        'name' => __( 'like' ), // 表示する投稿タイプ名
        'singular_name' => __( 'like' )
      ),
      'public' => true,
      'hierarchical' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-heart',
      'show_in_rest' => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'show_in_rest',
      ),
    ),
  );
  
  register_post_type(
    'skill', // 投稿タイプ名の定義
    array(
      'labels' => array(
        'name' => __( 'skill' ), // 表示する投稿タイプ名
        'singular_name' => __( 'skill' )
      ),
      'public' => true,
      'hierarchical' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-welcome-learn-more',
      'show_in_rest' => true,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'show_in_rest',
      ),
    ),
  );
	
	register_taxonomy_for_object_type('category', 'blog');
	register_taxonomy_for_object_type('post_tag', 'blog');
	
}
?>