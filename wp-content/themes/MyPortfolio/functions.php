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

function get_category_post_count($category_slug){
  $term = get_term_by('slug',$category_slug,'category');
  if($term){
    return $term->count;
  }
  return 0;
}

//管理者メールアドレスを承認メールを送らないで変更する
remove_action( 'add_option_new_admin_email', 'update_option_new_admin_email' );
remove_action( 'update_option_new_admin_email', 'update_option_new_admin_email' );
function wpdocs_update_option_new_admin_email( $old_value, $value ) {
update_option( 'admin_email', $value );
}
add_action( 'add_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );
add_action( 'update_option_new_admin_email', 'wpdocs_update_option_new_admin_email', 10, 2 );

?>