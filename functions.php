<?php

// アイキャッチ画像の有効化
add_theme_support('post-thumbnails');

// cssの読み込み
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles() {

  // google fonts
  // wp_enqueue_style('google-fonts_style', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');
  wp_enqueue_style('google-fonts_style', "https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Oswald:wght@700&display=swap");

  // reset style
  wp_register_style(
    'reset_style', // 登録する識別名
    get_template_directory_uri() . '/assets/styles/reset.css', // 登録するCSSのパス
    array(), // CSSの依存先
    '1.0' // パラメータの付与（スタイルの変更に合わせて変更することで、キャッシュを防ぐことができる）
  );

  wp_register_style(
    "swiper_style",
    "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css",
    array(),
    "1.0"
  );

  wp_enqueue_style(
    'main_style',
    get_template_directory_uri() . '/assets/styles/main.css',
    array('reset_style', "swiper_style"),
    '1.0'
  );
}

// JSの読み込み
add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
  //Swiper
  wp_register_script(
    "swiper_script",
    "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js",
    array(),
    "1.0"
  );
  //gsap
  wp_register_script(
    "gsap_script",
    "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js",
    array(),
    "1.0"
  );
  //scrollTrigger
  wp_register_script(
    "gsap-scroll-trigger_script",
    "https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js",
    array(),
    "1.0"
  );
  //index.js
  if (is_front_page()) {
    wp_enqueue_script(
      'index_script',
      get_template_directory_uri() . '/assets/js/index.js',
      array(),
      "1.0",
      true
    );
  }
  //main.js
  wp_enqueue_script(
    "main_script",
    get_template_directory_uri() . '/assets/js/main.js',
    array("swiper_script", "gsap_script", "gsap-scroll-trigger_script"),
    "1.0"
  );
}

/* main.js にdefer属性を付与 */
add_filter('script_loader_tag', 'add_defer', 10, 2);
function add_defer($tag, $handle) {
  // 識別名がmain_script以外はそのまま返却
  if ($handle !== 'main_script') {
    return $tag;
  }

  // deferを追加して返却する
  return str_replace(' src=', ' defer src=', $tag);
}

// SNSリンクを取得する関数
function get_sns_link($platform) {
  $sns_links = array(
      'instagram' => 'https://www.instagram.com/dolphin.co.ltd?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==',
      'facebook' =>  'https://www.facebook.com/DSPChiba/',
      // 必要に応じて他のSNSを追加
  );

  return isset($sns_links[$platform]) ? $sns_links[$platform] : '#';
}

// 外部リンクを返すカスタム関数
function get_external_link() {
  return 'https://www.chikeikyo.or.jp/';
}


// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

// プライバシーポリシーページのURLを取得
function get_dynamic_privacy_url() {
  return esc_url(home_url('/privacy/'));
}
add_shortcode('privacy_url', 'get_dynamic_privacy_url');

// プライバシーポリシーアイコンのURLを取得
function get_dynamic_image_url() {
  return esc_url(get_template_directory_uri() . '/assets/images/link-icon.svg');
}
add_shortcode('privacy_icon_url', 'get_dynamic_image_url');

// Contact Form 7でショートコードを有効化
add_filter('wpcf7_form_elements', function($content) {
  return do_shortcode($content);
});


function custom_breadcrumbs() {
  // ホームリンクのURLとタイトル
  $home_url = home_url('/');
  $home_name = 'トップ';

  echo '<nav class="breadcrumbs">';
  echo '<ul>';

  // ホームリンク
  echo '<li><a href="' . $home_url . '">' . $home_name . '</a></li>';

  // 投稿ページの場合
  if (is_single()) {
      // 「警備一覧ページ」リンクを追加
      $blog_page_url = get_permalink(get_page_by_path('blog')); // blog固定ページのURL取得
      echo '<li><a href="' . esc_url($blog_page_url) . '">警備一覧ページ</a></li>';

      // 現在の投稿タイトル
      echo '<li>' . get_the_title() . '</li>';
  }

  // 404ページの場合
  elseif (is_404()) {
      echo '<li>ページが見つかりません</li>';
  }

  echo '</ul>';
  echo '</nav>';
}



