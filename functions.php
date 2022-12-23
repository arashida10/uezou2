<?php

//ファイルの読み込みに関する記述をまとめた関数
function add_files(){
  //jQuery読み込み
  wp_enqueue_script('jquery');

	// slick読み込み
	wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/js/slick/slick-theme.css');
	wp_enqueue_style('slick', get_template_directory_uri() . '/assets/js/slick/slick.css');
	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick/slick.min.js');

	// BgSwitcher読み込み
	wp_enqueue_script('bgSwitcher', get_template_directory_uri() . '/assets/js/jquery.bgswitcher.js');

	//カスタム
	wp_enqueue_style('uezou', get_template_directory_uri() . '/assets/css/style.css', '', '1.0.0');
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', '1.0.0');
}
add_action('wp_enqueue_scripts', 'add_files');

?>