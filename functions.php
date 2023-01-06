<?php

/**
 * ファイルの読み込みに関する記述をまとめた関数
 */
function add_files(){
  //jQuery読み込み
  wp_enqueue_script('jquery');

	// swiper読み込み
	wp_enqueue_style('slick-theme', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/js/slick/slick.css');
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js');

	// gsap読み込み
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js');

	// font awesome読み込み
	wp_enqueue_style('fa-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css');

	//カスタム
	wp_enqueue_style('uezou', get_template_directory_uri() . '/assets/css/style.css', '', '1.0.0');
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_files');

/**
* 投稿画面にタグ一覧を表示しチェックボックス選択式にする
 */
// function re_register_post_tag_taxonomy() {
//   $tag_slug_args = get_taxonomy('post_tag');
//   $tag_slug_args->hierarchical = true;
//   $tag_slug_args->meta_box_cb = 'post_categories_meta_box';
//   register_taxonomy('post_tag', 'post', (array) $tag_slug_args);
// }
// add_action( 'init', 're_register_post_tag_taxonomy', 1 );

/**
 * アイキャッチ画像を利用できるようにする
 */
add_theme_support('post-thumbnails');


/**
 * パーマリンクからタクソノミー名を削除
 */
function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy){
  return str_replace('/'.$taxonomy.'/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set',11,3);

/**
 * カスタム投稿のパーマリンク変更
 */
function add_custom_rewrite_rules() {
	// 施工事例
	add_rewrite_rule('construction/([^0-9]+)/?$', 'index.php?construction_cat=$matches[1]&taxonomy=construction_cat', 'top');
	add_rewrite_rule('construction/([^0-9]+)/page/([^/]+)/?$', 'index.php?construction_cat=$matches[1]&taxonomy=construction_cat&paged=$matches[2]', 'top');

	// 取扱商品
	add_rewrite_rule('item/([^0-9]+)/?$', 'index.php?item_cat=$matches[1]&taxonomy=item_cat', 'top');
	add_rewrite_rule('item/([^0-9]+)/page/([^/]+)/?$', 'index.php?item_cat=$matches[1]&taxonomy=item_cat&paged=$matches[2]', 'top');
}
add_action('init', 'add_custom_rewrite_rules');

/**
 * contact form 7
 */
// 取扱商品名セット
function my_form_tag_filter($tag){
  if ( ! is_array( $tag ) ){
    return $tag;
  }

  if(isset($_GET['item_id'])){
		$post_info = get_post( $_GET['item_id'] );

    $name = $tag['name'];
    if($name == 'item-name'){
      $tag['values'] = (array) $post_info->post_title;
    }
  }

  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter', 11);

// お届け先チェック
add_filter( 'wpcf7_validate', 'kaiza_wpcf7_validate', 11, 2 );
function kaiza_wpcf7_validate( $result, $tags ) {
  foreach ( $tags as $tag ) {
    $name = $tag['name'];
    if ( $name == 'item-addressee' ) {
      $item_addressee = (string) $_POST[ $name ];
      if ( 1 != preg_match('/.*山形県米沢市.*/', $item_addressee) ) {
        $result->invalidate( $name, '山形県米沢市からご入力ください。' );
      } elseif ( 1 == preg_match('/^山形県米沢市$/', $item_addressee) ) {
				$result->invalidate( $name, '山形県米沢市以降もご入力ください。' );
			}
    }
  }

  return $result;
}
?>