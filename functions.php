<?php

// cssの読み込み
add_action('wp_enqueue_scripts', 'add_styles');
function add_styles() {

  // google fonts
  wp_enqueue_style('google-fonts_style', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap');

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

