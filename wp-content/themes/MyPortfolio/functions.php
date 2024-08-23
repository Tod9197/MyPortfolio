<?php  


remove_filter('the_content', 'wpautop');//the_contentのpタグを無効にする

// カスタム投稿タイプの追加
// works(制作実績)
function custom_post_type(){
  register_post_type('works',
    array(
      'labels' => array(
        'name' => __('制作実績'),
        'singular_name' => __('制作実績')
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'works'),
      'supports' => array('title','editor','thumbnail','excerpt'),
      'taxonomies' => array('category','post_tag'),// カテゴリーとタグを追加
    )
    );
}

add_theme_support('post-thumbnails');// サムネイルを有効に
add_action('init','custom_post_type');


// タグの表示並び替え
// function custom_order_tags($tags){
//   usort($tags,function($a,$b){
//     $order_a = get_terms_meta($a->term_id,'custom_order'.true);
//     $order_b = get_terms_meta($b->term_id,'custom_order'.true);
//     return $order_a - $order_b;
//   });
//   return $tags;
// }



?>