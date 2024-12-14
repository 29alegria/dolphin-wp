<?php get_header(); ?>

<?php get_template_part("m-kv"); ?>

  <nav class="m_breadcrumb l_container-lg">
    <ul>
      <li>
        <a href="/">トップ</a>
        <span>/</span>
      </li>
      <li>
        <a href="/category">カテゴリ名</a>
        <span>/</span>
      </li>
      <li>現在のページ</li>
    </ul>
  </nav>
  <?php if (function_exists('bcn_display')) {
    echo '<nav class="breadcrumb">';
    bcn_display();
    echo '</nav>';
} ?>

  
  <main class="l_main">
    <section class="about_section">
      <div class="l_contents-sm">
        <div class="l_container">
          <div class="m_section-title">
            <h2 class="m_section-title_txt">会社概要</h2>
          </div>
          <!-- /.m_section-title -->
          <table class="about-info">
            <tr>
              <th>会社名</th>
              <td>有限会社ドルフィン</td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>〒272-0021<br>千葉県市川市八幡3-27-8 2F</td>
            </tr>
            <tr>
              <th>TEL</th>
              <td>047-329-4455</td>
            </tr>
            <tr>
              <th>FAX</th>
              <td>047-324-5453</td>
            </tr>
            <tr>
              <th>設立</th>
              <td>平成14年4月</td>
            </tr>
            <tr>
              <th>代表者</th>
              <td>代表取締役 中村征司</td>
            </tr>
            <tr>
              <th>資本金</th>
              <td>300万円</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>警備事業</td>
            </tr>
            <tr>
              <th>従業員数</th>
              <td>60名（2024年現在）</td>
            </tr>
            <tr>
              <th>主要取引銀行</th>
              <td>
                三菱東京UFJ銀行<br>
                千葉興業銀行<br>
                京葉銀行<br>
                三井住友銀行
              </td>
            </tr>
            <tr>
              <th>加入団体</th>
              <td>
                <a href="<?php echo esc_url(get_external_link()); ?>" target="_blank" rel="noopener noreferrer">
                  千葉県警備業協会
                  <div class="about-info-link_icon-wrapper">
                    <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/link-icon.svg"); ?>" alt="外部リンクアイコン" class="about-info-link_icon" width="32" height="32">
                  </div>
                  <!-- /.about-info-link_icon-wrapper -->
                </a>
              </td>
            </tr>
          </table>
          
        </div>
        <!-- /.l_container -->
      </div>
      <!-- /.l_contents -->

    </section>

    <section class="partner_section">
      <div class="l_contents-sm">
        <div class="l_container">
          <div class="m_section-title">
            <h2 class="m_section-title_txt">主要取引先<span class="partner_section-title_sub">（順不同・敬称略）</span></h2>
          </div>
          <!-- /.m_section-title -->
          <ul class="partner_list">
            <li class="partner_item">株式会社エフビーエスミヤマ</li>
            <li class="partner_item">アサカ建設有限会社</li>
            <li class="partner_item">株式会社堀江商店</li>
            <li class="partner_item">株式会社池田屋水道</li>
            <li class="partner_item">株式会社大城組</li>
            <li class="partner_item">前田道路株式会社</li>
            <li class="partner_item">株式会社中川塗装工業</li>
            <li class="partner_item">有限会社大門堂</li>
            <li class="partner_item">株式会社クリシマ</li>
            <li class="partner_item">カブト建設株式会社</li>
            <li class="partner_item">エスジイクリエイティブ株式会社</li>
            <li class="partner_item">大誠建設株式会社</li>
            <li class="partner_item">大市産業株式会社</li>
            <li class="partner_item">株式会社シカマ体育施設</li>
            <li class="partner_item">有限会社高橋土木</li>
            <li class="partner_item">株式会社ウキガヤ</li>
            <li class="partner_item">市川建設株式会社</li>
            <li class="partner_item">有限会社木村設備工業</li>
            <li class="partner_item">株式会社佐藤組</li>
            <li class="partner_item">有限会社栄晃仮設</li>
            <li class="partner_item">英真建設株式会社</li>
            <li class="partner_item">株式会社幸和道路</li>
            <li class="partner_item">株式会社安井工業</li>
            <li class="partner_item">株式会社ディグアース</li>
            <li class="partner_item">株式会社エスジーホーム</li>
            <li class="partner_item">株式会社多摩川機工</li>
            <li class="partner_item">飯塚建設株式会社</li>
            <li class="partner_item">株式会社壱琉建設</li>
            <li class="partner_item">株式会社クープ</li>
            <li class="partner_item">株式会社クボタ建設</li>
            <li class="partner_item">株式会社藤井建設</li>
            <li class="partner_item">株式会社エクエコ</li>
          </ul>
        </div>
        <!-- /.l_container -->
      </div>
      <!-- /.l_contents -->
    </section>

<?php get_template_part("cta-contact"); ?>
  </main>
  
<?php get_footer(); ?>