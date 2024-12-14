<?php get_header(); ?>
  
  <div class="top_kv">
    <div class="top_kv-inner l_container-lg">
      <div class="top_kv_box">
        <p class="top_kv_copy js_copy">
          <span class="line1">信頼される技術を</span><br />
          <span class="line2">プロ意識を持ってご提供</span>
        </p>
        <p class="top_kv_sub-copy js_sub-copy">
          それが有限会社ドルフィンのモットー
        </p>
      </div>
      <!-- /.top_kv_box -->
      <div class="top_kv_arrow">
        <div class="m_arrow-wrapper">
          <div class="m_arrow__round">
            <div class="m_arrow m_arrow__bottom"></div>
          </div>            
        </div>        
      </div>
      <!-- /.top_kv_arrow -->
    </div>
    <!-- /.top_kv-inner -->
    <div class="top_kv-slideshow js_slideshow">
      <div class="swiper-wrapper">
        <div class="top_kv-slideshow_slide swiper-slide">
          <img
            class="top_kv-slideshow_slide_img"
            src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/top_kv_img01.jpg"); ?>"
            alt=""
          />
        </div>
        <!-- /.top_kv-slideshow_slide -->
        <div class="top_kv-slideshow_slide swiper-slide">
          <img
            class="top_kv-slideshow_slide_img"
            src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/top_kv_img02.jpg"); ?>"
            alt=""
          />
        </div>
        <!-- /.top_kv-slideshow_slide -->
        <div class="top_kv-slideshow_slide swiper-slide">
          <img
            class="top_kv-slideshow_slide_img"
            src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/top_kv_img03.jpg"); ?>"
            alt=""
          />
        </div>
        <!-- /.top_kv-slideshow_slide -->
      </div>
      <!-- /.swiper-wrapper -->
      <!-- 適切なaltタグは、画像の内容を正確に表現することが重要です。ただし、装飾用の画像（例：デザインの一部としてのアイコンや装飾）の場合は、altタグを空にすることもあります。 -->
    </div>
    <!-- /.top_kv-slideshow -->
  </div>
  <!-- /.top_kv -->

  <main class="l_main">

    <section class="top_service js_section-title_trigger">
      <div class="l_contents">
        <div class="l_container-lg">
          <div class="top_section_title js_section-title">
            <p class="top_section_title_sub">SERVICE</p>
            <h2 class="top_section_title_main">事業内容</h2>
          </div>
          <!-- /.top_section_title -->          
        </div>
        <!-- /.l_container-lg -->
        <div class="l_container js_top_service_trigger">
          <div class="top_service_contents">
            <div class="top_service_content-box js_top_service">
              <div class="top_service_content-box_img-wrapper top_service_content-box_img-wrapper__road">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/road-img.jpg"); ?>" alt="交通誘導警備の様子" class="top_service_content-box_img" width="1198" height="864">
              </div>
              <!-- /.top_service_content-box_img-wrapper -->
              <div class="top_service_content top_service_content__road">
                <h3 class="top_service_content_head">交通誘導警備</h3>
                <p class="top_service_content_txt">交通誘導警備とは、工事現場や道路工事などで、歩行者や車両の安全な通行を確保するために交通を誘導する業務です。</p>
              </div>
              <!-- /.top_service_content -->
            </div>
            <!-- /.top_service_content-box -->
            <div class="top_service_content-box js_top_service">
              <div class="top_service_content-box_img-wrapper top_service_content-box_img-wrapper__event">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/event-img.jpg"); ?>" alt="イベント警備の様子" class="top_service_content-box_img" width="1200" height="800">
              </div>
              <!-- /.top_service_content-box_img-wrapper -->
              <div class="top_service_content top_service_content__event">
                <h3 class="top_service_content_head">イベント警備</h3>
                <p class="top_service_content_txt">イベント警備とは、コンサートやスポーツ大会などのイベント会場で、来場者の安全と秩序を維持するための警備業務です。</p>
              </div>
              <!-- /.top_service_content -->
            </div>
            <!-- /.top_service_content-box -->
          </div>
          <!-- /.top_service_contents -->
          <div class="top-service_btn-wrapper">
            <a href="<?php echo esc_url(home_url("/service")); ?>" class="m_btn m_btn__right-arrow">
              <span class="btn_head">事業内容を詳しくみる</span>
              <div class="m_arrow-wrapper">
                <div class="m_arrow__round">
                  <div class="m_arrow m_arrow__right"></div>
                </div>            
              </div>
            </a>
          </div>
          <!-- /.top-service_btn-wrapper -->
        </div>
        <!-- /.l_container -->
      </div>
      <!-- /.l_contents -->
    </section>

    <section class="top_company js_section-title_trigger">
      <div class="l_contents">
        <div class="l_container-lg">
          <div class="top_section_title js_section-title">
            <p class="top_section_title_sub">COMPANY</p>
            <h2 class="top_section_title_main">会社情報</h2>
          </div>
          <!-- /.top_section_title -->          
        </div>
        <!-- /.l_container-lg -->
        <div class="l_container-sm">
          <p class="top_company_desc">私たちの基本情報や歴史、理念や取り組みをご紹介しています。気になる項目をクリックして、詳しくご覧ください。</p>
          <p class="top_company_scroll-desc u_md-dn">横にスクロールして確認することができます。</p>
          <div class="top_company_menu-wrapper">
            <ul class="top_company_menu_list">
              <li class="top_company_menu_item">
                <div class="top_company-title">
                  <p class="top_company-title_txt">会社概要</p>
                </div>
                <!-- /.top_company-title -->
                <p class="top_company_menu-desc">当社の基本的な情報と主要取引先について</p>
                <div class="top-company_btn-wrapper">
                  <a href="<?php echo esc_url(home_url("/about")); ?>" class="m_btn m_btn__right-arrow">
                    <div class="top_company_btn_head">
                      <div class="top_company_btn_icon-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/company-icon-b.svg"); ?>." alt="会社概要アイコン" class="top_company_btn_icon" width="50" height="50">
                      </div>
                      <!-- /.top_company_btn_icon-wrapper -->
                      <span class="btn_head">会社概要を見る</span>
                    </div>
                    <!-- /.top_company_btn_head -->
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow__round">
                        <div class="m_arrow m_arrow__right"></div>
                      </div>            
                    </div>
                  </a>
                </div>
                <!-- /.top-company_btn-wrapper -->
              </li>
              <li class="top_company_menu_item">
                <div class="top_company-title">
                  <p class="top_company-title_txt">沿革</p>
                </div>
                <!-- /.top_company-title -->
                <p class="top_company_menu-desc">当社の歴史や実績について</p>
                <div class="top-company_btn-wrapper">
                  <a href="<?php echo esc_url(home_url("/history")); ?>" class="m_btn m_btn__right-arrow">
                    <div class="top_company_btn_head">
                      <div class="top_company_btn_icon-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/history-b.svg"); ?>" alt="沿革アイコン" class="top_company_btn_icon" width="50" height="50">
                      </div>
                      <!-- /.top_company_btn_icon-wrapper -->
                      <span class="btn_head">沿革を見る</span>
                    </div>
                    <!-- /.top_company_btn_head -->
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow__round">
                        <div class="m_arrow m_arrow__right"></div>
                      </div>            
                    </div>
                  </a>
                </div>
                <!-- /.top-company_btn-wrapper -->
              </li>
              <li class="top_company_menu_item">
                <div class="top_company-title">
                  <p class="top_company-title_txt">研修</p>
                </div>
                <!-- /.top_company-title -->
                <p class="top_company_menu-desc">当社の研修内容について</p>
                <div class="top-company_btn-wrapper">
                  <a href="<?php echo esc_url(home_url("/training")); ?>" class="m_btn m_btn__right-arrow">
                    <div class="top_company_btn_head">
                      <div class="top_company_btn_icon-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/training-icon-b.svg"); ?>" alt="研修アイコン" class="top_company_btn_icon" width="64" height="64">
                      </div>
                      <!-- /.top_company_btn_icon-wrapper -->
                      <span class="btn_head">研修を見る</span>
                    </div>
                    <!-- /.top_company_btn_head -->
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow__round">
                        <div class="m_arrow m_arrow__right"></div>
                      </div>            
                    </div>
                  </a>
                </div>
                <!-- /.top-company_btn-wrapper -->
              </li>
              <li class="top_company_menu_item">
                <div class="top_company-title">
                  <p class="top_company-title_txt">企業理念・行動指針</p>
                </div>
                <!-- /.top_company-title -->
                <p class="top_company_menu-desc">当社の大切にしている理念・指針について</p>
                <div class="top-company_btn-wrapper">
                  <a href="<?php echo esc_url(home_url("/philosophy")); ?>" class="m_btn m_btn__right-arrow">
                    <div class="top_company_btn_head">
                      <div class="top_company_btn_icon-wrapper">
                        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/philosophy-icon-b.svg"); ?>" alt="企業理念・行動指針アイコン" class="top_company_btn_icon" width="64" height="64">
                      </div>
                      <!-- /.top_company_btn_icon-wrapper -->
                      <span class="btn_head">企業理念・行動指針を見る</span>
                    </div>
                    <!-- /.top_company_btn_head -->
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow__round">
                        <div class="m_arrow m_arrow__right"></div>
                      </div>            
                    </div>
                  </a>
                </div>
                <!-- /.top-company_btn-wrapper -->
              </li>
            </ul>
          </div>
          <!-- /.top_company_menu-wrapper -->
          <div class="top_company_scroll u_md-dn">
            <p class="top_company_scroll_txt">scroll</p>
            <p class="top_company_scroll_arrow">→</p>
          </div>
          <!-- /.top_company_scroll -->
        </div>
        <!-- /.l_container-sm -->
      </div>
      <!-- /.l_contents -->
    </section>

    <?php get_template_part("cta-recruit"); ?>

    <section class="top_access js_section-title_trigger">
      <div class="l_contents">
        <div class="l_container-lg">
          <div class="top_section_title js_section-title">
            <p class="top_section_title_sub">ACCESS</p>
            <h2 class="top_section_title_main">アクセス</h2>
          </div>
          <!-- /.top_section_title -->          
        </div>
        <!-- /.l_container-lg -->
        <div class="l_container">
          <div class="top_access-inner">
            <p class="top_access_desc">当社までのアクセス方法をご案内します。最寄り駅からの徒歩での距離と地図情報をご確認いただけます。</p>
            <div class="top_access_contents">
              <div class="top_access_content-box">
                <div class="top_access-title">
                  <p class="top_access-title_txt">有限会社ドルフィン</p>
                </div>
                <!-- /.top_access-title -->
                <div class="top_access_address">
                  <p class="top_access_address-txt">
                    〒272-0021<br
                  />千葉県市川市八幡3-27-8 2F
                  </p>
                </div>
                <!-- /.top_access_address -->
                <div class="top_access_time">
                  <p class="top_access_time-txt">
                    京成八幡駅：徒歩0分<br/>
                    都営新宿線本八幡駅：<br class="top_access_break">
                    徒歩5分<br/>
                    JR総武線本八幡駅：<br class="top_access_break">
                    徒歩10分
                  </p>
                </div>
                <!-- /.top_access_time -->
              </div>
              <!-- /.top_access_content-box -->
              <div class="top_access_google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.0771668478674!2d139.92590557662618!3d35.72432067257348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601886cfc8f4c95d%3A0x189306fb38fad906!2z77yI5pyJ77yJ44OJ44Or44OV44Kj44Oz!5e0!3m2!1sja!2sjp!4v1733666632563!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <!-- /.top_access_google-map -->
            </div>
            <!-- /.top_access_contents -->
          </div>
          <!-- /.top_access-inner -->

        </div>
        <!-- /.l_container -->
      </div>
      <!-- /.l_contents -->
    </section>

    <?php get_template_part("cta-contact"); ?>
    
    <section class="top_blog js_section-title_trigger">
      <div class="l_contents">
        <div class="l_container-lg">
          <div class="top_section_title js_section-title">
            <p class="top_section_title_sub">BLOG</p>
            <h2 class="top_section_title_main">警備ブログ</h2>
          </div>
          <!-- /.top_section_title -->
          <div class="m_article-list m_article-list__col-3">
            <article class="m_article-item">
              <a href="single-blog.html" class="m_article-item_link">
                <div class="m_article-item_thumb-wrapper">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/blog-thumbnail.jpg"); ?>"
                    alt="ブログサムネイル"
                    class="m_article-item_thumb" width="600" height="400"
                  />
                </div>
                <!-- /.m_article-item_thumb-wrapper -->
                <div class="m_article-item_txt">
                  <div class="m_article-item_meta">
                    <time class="m_article-item_meta-date">0000.00.00</time>
                    <span class="m_article-item_meta-cat">カテゴリー</span>
                  </div>
                  <!-- /.m_article-item_meta -->
                  <h3 class="m_article-item_title">
                    未経験から今すぐ始められる！交通誘導警備の魅力とは？
                  </h3>
                </div>
                <!-- /.m_article-item_txt -->
              </a>
            </article>
            <article class="m_article-item">
              <a href="single-blog.html" class="m_article-item_link">
                <div class="m_article-item_thumb-wrapper">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/blog-thumbnail.jpg"); ?>"
                    alt="ブログサムネイル"
                    class="m_article-item_thumb" width="600" height="400"
                  />
                </div>
                <!-- /.m_article-item_thumb-wrapper -->
                <div class="m_article-item_txt">
                  <div class="m_article-item_meta">
                    <time class="m_article-item_meta-date">0000.00.00</time>
                    <span class="m_article-item_meta-cat">カテゴリー</span>
                  </div>
                  <!-- /.m_article-item_meta -->
                  <h3 class="m_article-item_title">
                    未経験から今すぐ始められる！交通誘導警備の魅力とは？
                  </h3>
                </div>
                <!-- /.m_article-item_txt -->
              </a>
            </article>
            <article class="m_article-item">
              <a href="single-blog.html" class="m_article-item_link">
                <div class="m_article-item_thumb-wrapper">
                  <img
                    src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/blog-thumbnail.jpg"); ?>"
                    alt="ブログサムネイル"
                    class="m_article-item_thumb" width="600" height="400"
                  />
                </div>
                <!-- /.m_article-item_thumb-wrapper -->
                <div class="m_article-item_txt">
                  <div class="m_article-item_meta">
                    <time class="m_article-item_meta-date">0000.00.00</time>
                    <span class="m_article-item_meta-cat">カテゴリー</span>
                  </div>
                  <!-- /.m_article-item_meta -->
                  <h3 class="m_article-item_title">
                    未経験から今すぐ始められる！交通誘導警備の魅力とは？
                  </h3>
                </div>
                <!-- /.m_article-item_txt -->
              </a>
            </article>
          </div>
          <!-- /.article-list -->
          <div class="top-blog_btn-wrapper">
            <a href="<?php echo esc_url(home_url("/blog")); ?>" class="m_btn m_btn__right-arrow">
              <span class="btn_head">ブログの一覧をみる</span>
              <div class="m_arrow-wrapper">
                <div class="m_arrow__round">
                  <div class="m_arrow m_arrow__right"></div>
                </div>            
              </div>
            </a>
          </div>
        </div>
        <!-- /.l_container-lg -->
      </div>
      <!-- /.l_contents -->
    </section>

  </main>

  <?php get_footer(); ?>
