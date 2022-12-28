<?php

//ファイルの読み込みに関する記述をまとめた関数
function add_files(){
  //jQuery読み込み
  wp_enqueue_script('jquery');

	// swiper読み込み
	wp_enqueue_style('slick-theme', 'https://unpkg.com/swiper@7/swiper-bundle.min.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/js/slick/slick.css');
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js');

	// gsap読み込み
	wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js');

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

// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

/*	カスタム投稿のパーマリンク設定
-----------------------------------------------------*/
//パーマリンクからタクソノミー名を削除
function my_custom_post_type_permalinks_set($termlink, $term, $taxonomy){
  return str_replace('/'.$taxonomy.'/', '/', $termlink);
}
add_filter('term_link', 'my_custom_post_type_permalinks_set',11,3);


function add_custom_rewrite_rules() {
	// 施工事例
	add_rewrite_rule('construction/([^0-9]+)/?$', 'index.php?construction_cat=$matches[1]&taxonomy=construction_cat', 'top');
	add_rewrite_rule('construction/([^0-9]+)/page/([^/]+)/?$', 'index.php?construction_cat=$matches[1]&taxonomy=construction_cat&paged=$matches[2]', 'top');

	// 取扱商品
	add_rewrite_rule('item/([^0-9]+)/?$', 'index.php?item_cat=$matches[1]&taxonomy=item_cat', 'top');
	add_rewrite_rule('item/([^0-9]+)/page/([^/]+)/?$', 'index.php?item_cat=$matches[1]&taxonomy=item_cat&paged=$matches[2]', 'top');
}
add_action('init', 'add_custom_rewrite_rules');

?>