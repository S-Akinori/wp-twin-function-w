<?php

function create_posttype(){
  register_post_type(
    'products', // 1.投稿タイプ名 
    array(   // 2.オプション 
      'label' => '商品', // 投稿タイプの名前
      'public'        => true, // 利用する場合はtrueにする 
      'has_archive'   => true, // この投稿タイプのアーカイブを有効にする
      'menu_position' => 5, // この投稿タイプが表示されるメニューの位置
      'menu_icon'     => 'dashicons-edit', // メニューで使用するアイコン
      'supports' => array( // サポートする機能
        'title',
        'editor',
        'thumbnail',
        'excerpt',
      ),
      'show_in_rest' => true,
      'taxonomies' => array('products-cat'),
    )
  );
  register_taxonomy(
    'products-cat',
    array('products'),
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'メニューカテゴリー',
      'singular_label' => 'メニューカテゴリー',
      'public' => true,
      'show_ui' => true,
      'show_in_rest' => true,
    )
  );
}
add_action('init', 'create_posttype');