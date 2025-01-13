<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php 
  if (is_front_page()) : ?>
  <title>有限会社ドルフィン | 千葉県市川市の交通誘導警備・イベント警備</title>
  <meta
    name="description"
    content="千葉県市川市を中心に、交通誘導警備やイベント警備を提供する警備会社。信頼と安全を届ける警備のプロフェッショナルです。"
  />
  <?php elseif (is_page("service")) : ?>
  <title>事業内容 | 有限会社ドルフィン - 千葉県市川市の交通誘導警備・イベント警備</title>
  <meta
    name="description"
    content="有限会社ドルフィンの事業内容をご紹介します。交通誘導警備やイベント警備を中心に、安全と信頼を提供する警備サービスを展開しています。"
  />
  <?php elseif (is_page("about")) : ?>
  <title>会社情報 | 有限会社ドルフィン - 基本情報と主要取引先</title>
  <meta
    name="description"
    content="有限会社ドルフィンの会社情報ページ。会社概要、所在地、連絡先、主要取引先など、当社の基本情報をご覧いただけます。"
  />
  <?php elseif (is_page("history")) : ?>
  <title>沿革 | 有限会社ドルフィン - 会社の歴史と成長の歩み・実績</title>
  <meta
    name="description"
    content="有限会社ドルフィンの沿革ページ。創業から現在までの歴史や成長の歩み・実績を詳しくご紹介します。"
  />
  <?php elseif (is_page("training")) : ?>
  <title>研修 | 有限会社ドルフィン - 安全と信頼を育む教育プログラム</title>
  <meta
    name="description"
    content="有限会社ドルフィンの研修ページ。交通誘導警備やイベント警備の現場で必要な知識や技術を育む充実した教育プログラムについてご紹介します。"
  />
  <?php elseif (is_page("philosophy")) : ?>
  <title>企業理念・行動指針 | 有限会社ドルフィン - 信頼と安全を追求する企業姿勢</title>
  <meta
    name="description"
    content="有限会社ドルフィンの企業理念・行動指針ページ。信頼と安全を基本とした企業姿勢や、社会に貢献するための行動基準をご紹介します。"
  />
  <?php elseif (is_page("blog")) : ?>
  <title>ブログ一覧 | 有限会社ドルフィン - 警備に関するお役立ち情報や先輩隊員の声</title>
  <meta
    name="description"
    content="有限会社ドルフィンのブログ一覧ページ。交通誘導警備やイベント警備のお役立ち情報に加え、現場で活躍する先輩隊員の声をご紹介します。"
  />
  <?php elseif (is_page("recruit")) : ?>
  <title>採用情報 | 有限会社ドルフィン - 交通誘導警備・イベント警備スタッフ募集</title>
  <meta
    name="description"
    content="有限会社ドルフィンの採用情報ページ。交通誘導警備やイベント警備スタッフの募集要項、仕事内容、応募方法などをご紹介します。"
  />
  <?php elseif (is_page("contact")) : ?>
  <title>お問い合わせ | 有限会社ドルフィン - ご依頼やお見積り、採用等に関するお問い合わせはこちら</title>
  <meta
    name="description"
    content="有限会社ドルフィンのお問い合わせページ。交通誘導警備やイベント警備に関するご質問、採用のご相談などお気軽にお問い合わせください。"
  />
  <?php elseif (is_page("entry")) : ?>
  <title>採用エントリーフォーム | 有限会社ドルフィン - 交通誘導・イベント警備の応募はこちら</title>
  <meta
    name="description"
    content="有限会社ドルフィンの採用エントリーフォームページ。交通誘導警備やイベント警備スタッフの応募はこちらから。簡単なフォーム入力でエントリーできます。"
  />
  <?php elseif (is_page("privacy")) : ?>
  <title>プライバシーポリシー | 有限会社ドルフィン - 個人情報の取り扱いについて</title>
  <meta
    name="description"
    content="有限会社ドルフィンのプライバシーポリシーページ。個人情報の利用目的、保護方針、管理体制についての詳細をご説明します。"
  />
  <?php elseif (is_404()) : ?>
  <title>ページが見つかりません | 有限会社ドルフィン</title>
  <meta
  name="description"
  content="お探しのページが見つかりません。有限会社ドルフィンのサイトマップやトップページから目的のページをお探しください。"
  />
  <?php endif; ?>
  <meta name="format-detection" content="telephone=no" />
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . "/assets/images/favicon.ico"); ?>" type="image/x-icon" />
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . "/assets/images/favicon-32x32.png"); ?>" type="image/png" />
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . "/assets/images/favicon-192x192.png"); ?>" type="image/png" />
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . "/assets/images/favicon.svg"); ?>" type="image/svg+xml" />
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_template_directory_uri() . "/assets/images/apple-touch-icon.png"); ?>" />
  <meta property="og:site_name" content="有限会社ドルフィン" />
  <meta
    property="og:url"
    content="<?php echo esc_url(get_permalink()); ?>"
  />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="有限会社ドルフィン | 千葉県市川市の交通誘導警備・イベント警備" />
  <meta
    property="og:description"
    content="千葉県市川市を中心に、交通誘導警備やイベント警備を提供する警備会社。信頼と安全を届ける警備のプロフェッショナルです。"
  />
  <meta
    property="og:image"
    content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large') ?: 'https://dolphin-security.com/wp-content/uploads/2025/01/top_kv_img01.jpg'); ?>"
  />

  <meta property="og:locale" content="ja_JP" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta
    name="twitter:description"
    content="千葉県市川市を中心に、交通誘導警備やイベント警備を提供する警備会社。信頼と安全を届ける警備のプロフェッショナルです。"
  />
  <meta
    name="twitter:image:src"
    content=""
  />
  <?php wp_head(); ?>
</head>
<body class="js_body">
<?php if(is_front_page()) : ?>
  <div class="m_opening js_opening">
    <div class="m_opening_content">
      <div class="m_opening_logo-wrapper js_opening-logo">
        <img
          src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/dolphin-icon.svg"); ?>"
          alt="会社ロゴ"
          class="m_opening_logo"
        />        
      </div>
      <!-- /.m_opening_logo-wrapper -->

      <div class="m_opening_txt js_opening-txt">
        <p class="m_opening_heading">dolphin security</p>
        <!-- <p class="m_opening_heading">有限会社ドルフィン</p> -->
        <!-- <p class="m_opening_desc">
          安全と信頼を提供する警備サービス
        </p> -->
      </div>
    </div>
  </div>
<?php endif; ?>
  <header class="l_header">
    <?php 
    if (is_front_page()) :
    ?>
    <h1 class="l_header-logo">
      <a href="<?php echo esc_url(home_url()); ?>" class="l_header-logo_link">
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/dolphin-icon.svg"); ?>" alt="会社ロゴ" class="l_header-logo_icon" width="403" height="403">
        <span class="l_header-logo_txt">有限会社ドルフィン</span>
      </a>
    </h1>
    <?php else : ?>
    <p class="l_header-logo">
      <a href="<?php echo esc_url(home_url()); ?>" class="l_header-logo_link">
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/dolphin-icon.svg"); ?>" alt="会社ロゴ" class="l_header-logo_icon" width="403" height="403">
        <span class="l_header-logo_txt">有限会社ドルフィン</span>
      </a>
    </p>
    <?php endif; ?>
    <div class="l_header-menu js_navigation">
      <nav class="l_header-nav">
        <ul class="l_header-nav_list">
          <li class="l_header-nav_item">
            <a href="<?php echo esc_url(home_url()); ?>" class="l_header-nav_link">
              <span class="l_header-nav_head">トップ</span>
              <div class="m_arrow-wrapper">
                <div class="m_arrow__round">
                  <div class="m_arrow m_arrow__right"></div>
                </div>            
              </div>
            </a>
          </li>
          <li class="l_header-nav_item">
            <a href="<?php echo esc_url(home_url("/service")); ?>" class="l_header-nav_link">
              <span class="l_header-nav_head">事業内容</span>
              <div class="m_arrow-wrapper">
                <div class="m_arrow__round">
                  <div class="m_arrow m_arrow__right"></div>
                </div>
              </div>
            </a>
          </li>
          <li class="l_header-nav_item">
            <div class="l_header-nav_link">
              <span class="l_header-nav_head">会社情報</span>
              <div class="m_arrow-wrapper">
                <div class="m_arrow__round">
                  <div class="m_arrow m_arrow__bottom"></div>
                </div>
              </div>
            </div>
            <ul class="l_header-subnav_list">
              <li class="l_header-subnav_item">
                <a href="<?php echo esc_url(home_url("/about")); ?>" class="l_header-subnav_link">
                  <div class="l_header-submenu_head">
                    <div class="l_header-subnav_img-wrapper">
                      <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/company-icon-b.svg"); ?>" alt="会社概要アイコン" class="l_header-subnav_img" width="50" height="50">
                    </div>
                    <!-- /.l_header-subnav_img-wrapper -->
                    <span class="l_header-subnav_txt">会社概要</span>                    
                  </div>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                </a>
              </li>
              <li class="l_header-subnav_item">
                <a href="<?php echo esc_url(home_url("/history")); ?>" class="l_header-subnav_link">
                  <div class="l_header-submenu_head">
                    <div class="l_header-subnav_img-wrapper">
                      <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/history-b.svg"); ?>" alt="沿革アイコン" class="l_header-subnav_img" width="50" height="50">
                    </div>
                    <!-- /.l_header-subnav_img-wrapper -->                    
                    <span class="l_header-subnav_txt">沿革</span>
                  </div>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                </a>
              </li>
              <li class="l_header-subnav_item">
                <a href="<?php echo esc_url(home_url("/training")); ?>" class="l_header-subnav_link">
                  <div class="l_header-submenu_head">
                    <div class="l_header-subnav_img-wrapper">
                      <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/training-icon-b.svg"); ?>" alt="研修アイコン" class="l_header-subnav_img" width="64" height="64">
                    </div>
                    <!-- /.l_header-subnav_img-wrapper -->
                    <span class="l_header-subnav_txt">研修</span>                    
                  </div>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                </a>
              </li>
              <li class="l_header-subnav_item">
                <a href="<?php echo esc_url(home_url("/philosophy")); ?>" class="l_header-subnav_link">
                  <div class="l_header-submenu_head">
                    <div class="l_header-subnav_img-wrapper">
                      <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/philosophy-icon-b.svg"); ?>" alt="企業理念・行動指針アイコン" class="l_header-subnav_img" width="64" height="64">
                    </div>
                    <!-- /.l_header-subnav_img-wrapper -->
                    <span class="l_header-subnav_txt">企業理念・行動指針</span>                    
                  </div>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                </a>
              </li>

            </ul>
          </li>
          <li class="l_header-nav_item">
            <a href="<?php echo esc_url(home_url("/blog")); ?>" class="l_header-nav_link">
              <span class="l_header-nav_head">警備ブログ</span>
              <div class="m_arrow-wrapper">
                <div class="m_arrow__round">
                  <div class="m_arrow m_arrow__right"></div>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </nav>
      <div class="l_header-menu_ctas">
        <div class="l_header-menu_cta l_header-menu_cta__recruit">
          <a href="<?php echo esc_url(home_url("/recruit")); ?>" class="l_header-menu_cta__link">
            <div class="l_header-menu_cta_inner">
              <div class="l_header-menu_cta_img-wrapper">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/recruit-icon.svg"); ?>" alt="採用アイコン" class="l_header-menu_cta_img" width="64" height="64">
              </div>
              <!-- /.l_header-menu_cta_img-wrapper -->
              <p class="l_header-menu_cta_head">採用情報</p>              
            </div>
            <!-- /.l_header-menu_cta_inner -->
          </a>
        </div>
        <!-- /.l_header-menu_cta -->
        <div class="l_header-menu_cta l_header-menu_cta__contact">
          <a href="<?php echo esc_url(home_url("/contact")); ?>" class="l_header-menu_cta__link">
            <div class="l_header-menu_cta_inner">
              <div class="l_header-menu_cta_img-wrapper">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/mail-icon-w.svg"); ?>" alt="メールアイコン" class="l_header-menu_cta_img" width="64" height="64">
              </div>
              <!-- /.l_header-menu_cta_img-wrapper -->
              <p class="l_header-menu_cta_head">お問い合わせ</p>               
            </div>
          </a>
        </div>
        <!-- /.l_header-menu_cta -->
      </div>
      <!-- /.l_header-menu_ctas -->
    </div>
    <!-- /.l_header-menu -->

    <button class="m_hamburger js_hamburger">
      <span class="m_hamburger-bar"></span>
      <span class="m_hamburger-bar"></span>
      <span class="m_hamburger-bar"></span>
    </button>
  </header>

  <button class="m_page-top js_page-top">
    <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/up-icon.svg"); ?>" alt="ページ上部に移動する" class="m_page-top_img" />
  </button>
  <!-- /.m_page-top -->