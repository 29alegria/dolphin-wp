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

  <main class="l_main">
    <section class="philosophy_section">
        <div class="l_container-sm">
          <div class="m_section-title">
            <h2 class="m_section-title_txt">企業理念</h2>
          </div>
          <!-- /.m_section-title -->
          <div class="philosophy_img-wrapper">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/top_kv_img01.jpg"); ?>" alt="企業理念を表す警備姿勢" class="philosophy_img" width="1198" height="864">
          </div>
          <!-- /.service_img-wrapper -->
          <p class="philosophy_txt">
            ​私たちは常に『<span class="philosophy_txt__emphasis">プロ意識</span>』
            <br class="u_md-dn">を持ち、<br>
            『<span class="philosophy_txt__emphasis">信頼</span>』される確かな『<span class="philosophy_txt__emphasis">技術</span>』で安全を提供します。
          </p>
        </div>
        <!-- /.l_container-sm -->
    </section>
    <section class="guide_section">
        <div class="l_container-sm">
          <div class="m_section-title">
            <h2 class="m_section-title_txt">行動指針</h2>
          </div>
          <!-- /.m_section-title -->
          <ol class="guide_list">
            <li class="guide_item">
              ​訓練を積み重ね技術・技法を追求する。
            </li>
            <li class="guide_item">
              技術に裏打ちされた誘導及び対応でお客様の信頼を得る。
            </li>
            <li class="guide_item">
              あたえられた職務をあらゆる事態を想定し専門職としての責任をもって完遂する。
            </li>
          </ol>
        </div>
        <!-- /.l_container-sm -->
    </section>

<?php get_template_part("cta-contact"); ?>
    
  </main>

<?php get_footer(); ?>