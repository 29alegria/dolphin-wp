<footer class="l_footer">
    <div class="l_container-lg">
      <div class="l_footer_info">
        <div class="l_footer_info_contents">
          <p class="l_footer-logo">
            <a href="<?php echo esc_url(home_url()); ?>" class="l_footer-logo_link">
              <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/dolphin-icon.svg"); ?>" alt="会社ロゴ" class="l_footer-logo_icon" width="403" height="403">
              <span class="l_footer-logo_txt">有限会社ドルフィン</span>
            </a>
          </p>
          <p class="l_footer_address">
            〒272-0021<br
            />千葉県市川市八幡3-27-8 2F
          </p>
          <div class="l_footer_sns-info">
            <div class="l_footer_sns-wrapper">
              <a 
                href="<?php echo esc_url(get_sns_link('instagram')); ?>" 
                class="l_footer_sns-link"
                target="_blank"
                rel="noopener noreferrer"
              >
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/instagram-icon.svg"); ?>" alt="" class="l_footer_sns" width="96" height="96">
              </a>
            </div>
            <!-- /.l_footer_sns-wrapper -->
            <div class="l_footer_sns-wrapper">
              <a 
                href="<?php echo esc_url(get_sns_link('facebook')); ?>" 
                class="l_footer_sns-link"
                target="_blank"
                rel="noopener noreferrer"
              >
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/facebook-icon.svg"); ?>" alt="" class="l_footer_sns" width="96" height="96">
              </a>
            </div>
            <!-- /.l_footer_sns-wrapper -->
          </div>
          <!-- /.l_footer_sns-info -->
        </div>
        <!-- /.l_footer_info_contents -->
        <div class="l_footer-cta">
          <nav class="l_footer-cta_menu">
            <ul class="l_footer-cta_list">
              <li class="l_footer-cta_item">
                <a href="<?php echo esc_url(home_url("/recruit")); ?>" class="l_footer-cta_link">
                  <span class="l_footer-cta_txt">採用情報</span>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow__round">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow__round -->
                  </div>
                  <!-- /.m_arrow-wrapper -->
                </a>
              </li>
              <li class="l_footer-cta_item">
                <a href="<?php echo esc_url(home_url("/contact")); ?>" class="l_footer-cta_link">
                  <span class="l_footer-cta_txt">お問い合わせ</span>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow__round">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow__round -->
                  </div>
                  <!-- /.m_arrow-wrapper -->
                </a>
              </li>
              <li class="l_footer-cta_item">
                <a href="<?php echo esc_url(home_url("/privacy")); ?>" class="l_footer-cta_link">
                  <span class="l_footer-cta_txt">個人情報保護方針</span>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow__round">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow__round" -->
                  </div>
                  <!-- /.m_arrow-wrapper -->
                </a>
              </li>
              <li class="l_footer-cta_item">
                <a href="<?php echo esc_url(home_url('/wp-content/uploads/2025/01/dolphin_license.pdf')); ?>" class="l_footer-cta_link" target="_blank" rel="noopener noreferrer">
                  <span class="l_footer-cta_txt">認定標識はこちら</span>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow__round">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow__round -->
                  </div>
                  <!-- /.m_arrow-wrapper -->
                </a>
              </li>

            </ul>
          </nav>
        </div>
        <!-- /.l_footer-cta -->
      </div>
      <!-- /.l_footer_info -->
    </div>
    <!-- /.l_container-lg -->
    <div class="l_footer-menu">
      <div class="l_container-lg">
        <div class="l_footer-menu_cta">
          <ul class="l_footer-menu_cta-list">
            <li class="l_footer-menu_cta-item">
              <a href="<?php echo esc_url(home_url("/recruit")); ?>" class="l_footer-menu_cta-link">
                <span class="l_footer-menu_cta-head l_footer-menu_cta-head__recruit">採用情報</span>
                <!-- <span class="l_footer-menu_cta-sub">Recruit</span> -->
                <div class="m_arrow-wrapper">
                  <div class="m_arrow__round">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                  <!-- /.m_arrow__round -->
                </div>
                <!-- /.m_arrow-wrapper -->
              </a>
            </li>
            <li class="l_footer-menu_cta-item">
              <a href="<?php echo esc_url(home_url("/contact")); ?>" class="l_footer-menu_cta-link">
                <span class="l_footer-menu_cta-head l_footer-menu_cta-head__contact">お問い合わせ</span>
                <!-- <span class="l_footer-menu_cta-sub">Contact</span> -->
                <div class="m_arrow-wrapper">
                  <div class="m_arrow__round">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                  <!-- /.m_arrow__round -->
                </div>
                <!-- /.m_arrow-wrapper -->
              </a>
            </li>
            <li class="l_footer-menu_cta-item">
              <a href="<?php echo esc_url(home_url("/privacy")); ?>" class="l_footer-menu_cta-link">
                <span class="l_footer-menu_cta-head l_footer-menu_cta-head__privacy">個人情報保護方針</span>
                <!-- <span class="l_footer-menu_cta-sub">Privacy Policy</span> -->
                <div class="m_arrow-wrapper">
                  <div class="m_arrow__round">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                  <!-- /.m_arrow__round -->
                </div>
                <!-- /.m_arrow-wrapper -->
              </a>
            </li>
            <li class="l_footer-menu_cta-item">
            <a href="<?php echo esc_url(home_url('/wp-content/uploads/2025/01/dolphin_license.pdf')); ?>" class="l_footer-menu_cta-link" target="_blank" rel="noopener noreferrer">
              <span class="l_footer-menu_cta-head l_footer-menu_cta-head__certification">認定標識はこちら</span>
                <!-- <span class="l_footer-menu_cta-sub">Privacy Policy</span> -->
                <div class="m_arrow-wrapper">
                  <div class="m_arrow__round">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                  <!-- /.m_arrow__round -->
                </div>
                <!-- /.m_arrow-wrapper -->
              </a>
            </li>
          </ul>
        </div>
        <!-- /.l_footer-menu_cta -->
        <div class="l_footer-menu_lowlayer-page">
          <ul class="l_footer-menu_lowlayer-page-list">
            <li class="l_footer-menu_lowlayer-page-item">
              <a href="<?php echo esc_url(home_url("/service")); ?>" class="l_footer-menu_lowlayer-page-link">
                <span class="l_footer-menu_lowlayer-page-head l_footer-menu_lowlayer-page-head__service">事業内容</span>
                <!-- <span class="l_footer-menu_lowlayer-page-sub">Service</span> -->
                <div class="m_arrow-wrapper">
                  <div class="m_arrow__round">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                  <!-- /.m_arrow__round -->
                </div>
                <!-- /.m_arrow-wrapper -->
              </a>
            </li>
            <li class="l_footer-menu_lowlayer-page-item">
              <div class="l_footer-menu_lowlayer-page-link">
                <span class="l_footer-menu_lowlayer-page-head l_footer-menu_lowlayer-page-head__company">会社情報</span>
                <!-- <span class="l_footer-menu_lowlayer-page-sub">Company</span> -->
              </div>
              <!-- /.l_footer-menu_lowlayer-page-link -->
              <ul class="l_footer-menu_lowlayer-page-submenu-list">
                <li class="l_footer-menu_lowlayer-page-submenu-item">
                  <a href="<?php echo esc_url(home_url("/about")); ?>" class="l_footer-menu_lowlayer-page-submenu-link">
                    <span class="l_footer-menu_lowlayer-page-submenu-head">会社概要</span>
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow-wrapper -->
                  </a>
                </li>
                <li class="l_footer-menu_lowlayer-page-submenu-item">
                  <a href="<?php echo esc_url(home_url("/history")); ?>" class="l_footer-menu_lowlayer-page-submenu-link">
                    <span class="l_footer-menu_lowlayer-page-submenu-head">沿革</span>
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow-wrapper -->
                  </a>
                </li>
                <li class="l_footer-menu_lowlayer-page-submenu-item">
                  <a href="<?php echo esc_url(home_url("/training")); ?>" class="l_footer-menu_lowlayer-page-submenu-link">
                    <span class="l_footer-menu_lowlayer-page-submenu-head">研修</span>
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow-wrapper -->
                  </a>
                </li>
                <li class="l_footer-menu_lowlayer-page-submenu-item">
                  <a href="<?php echo esc_url(home_url("/philosophy")); ?>" class="l_footer-menu_lowlayer-page-submenu-link">
                    <span class="l_footer-menu_lowlayer-page-submenu-head">企業理念・行動指針</span>
                    <div class="m_arrow-wrapper">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>
                    <!-- /.m_arrow-wrapper -->
                  </a>
                </li>
              </ul>
            </li>
            <li class="l_footer-menu_lowlayer-page-item">
              <a href="<?php echo esc_url(home_url("/blog")); ?>" class="l_footer-menu_lowlayer-page-link">
                <span class="l_footer-menu_lowlayer-page-head l_footer-menu_lowlayer-page-head__blog">警備ブログ</span>
                <!-- <span class="l_footer-menu_lowlayer-page-sub">Blog</span> -->
                <div class="m_arrow-wrapper">
                  <div class="m_arrow__round">
                    <div class="m_arrow m_arrow__right"></div>
                  </div>
                  <!-- /.m_arrow__round -->
                </div>
                <!-- /.m_arrow-wrapper -->
              </a>
            </li>
          </ul>
        </div>
        <!-- /.l_footer-menu_lowlayer-page -->
      </div>
      <!-- /.l_container-lg -->
    </div>
    <!-- /.l_footer-menu -->
    <p class="l_footer-copyright">
      <small class="l_footer-copyright_txt">&copy;2024 有限会社ドルフィン.All rights reserved.</small>
    </p>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>