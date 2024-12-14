<?php get_header(); ?>

  <div class="m_kv" id="top">
    <div class="m_kv-inner l_container-lg">
      <div class="m_kv-box">
        <h1 class="m_kv-title">事業内容</h1>
        <p class="m_kv-title_sub">SERVICE</p>
      </div>
      <!-- /.m_kv-box -->
    </div>
    <!-- /.m_kv-inner -->
  </div>
  <!-- /.m_kv -->

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
    <div class="service_content">
      <div class="service_img-wrapper service_img-wrapper__road">
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/road-img.jpg"); ?>" alt="交通誘導警備の様子" class="service_img service_img__road" width="1198" height="864">
      </div>
      <!-- /.service_img-wrapper -->
      <h2 class="service_content_head">交通誘導警備</h2>
      <p class="service_content_lead">交通誘導警備は、歩行者や車両の安全を確保し、交通を円滑にするための警備業務です。</p>
      <p class="service_content_desc">
        当社は、現場ごとの特性を正確に把握し、安全かつ迅速な誘導を通じて、ご契約先と地域社会の安全に貢献しています。<br/>
        主な対象現場は、道路工事現場や建設現場、物流拠点、商業施設周辺、イベント会場など多岐にわたります。交通量や歩行者の動線に応じた柔軟な対応力で、現場全体の効率性を高めることを目指しています。
      </p>
      <div class="service_strong-point_box">
        <h3 class="service_strong-point_head">私たちの強み</h3>
        <ul class="service_strong-point_list">
          <li class="service_strong-point_item">
            各現場の条件に合わせた計画を策定し、的確な誘導を実施します。急な変更や状況の変化にも柔軟に対応可能です。
          </li>
          <li class="service_strong-point_item">
            研修をしっかり受けた警備員が、安全第一でプロフェッショナルな対応を心がけています。
          </li>
          <li class="service_strong-point_item">
            地域の安全に貢献しながら、快適な交通環境づくりをサポートします。
          </li>
        </ul>
      </div>
      <!-- /.service_strong-point_box -->
    </div>
    <!-- /.service_content -->
      
    <div class="service_content">
      <div class="service_img-wrapper service_img-wrapper__event">
        <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/event-img.jpg"); ?>" alt="イベント警備の様子" class="service_img service_img__road" width="1200" height="800">
      </div>
      <!-- /.service_img-wrapper -->
      <h2 class="service_content_head">イベント警備</h2>
      <p class="service_content_lead">イベント警備は、地域の行事や催し物などで、来場者の安全を守るための警備業務です。</p>
      <p class="service_content_desc">
        当社は小規模なイベントや地域密着型の行事の警備を多く手掛けています。<br/>
        イベントごとの特性を踏まえた警備計画を立て、来場者の動線を管理。事故や混乱を防ぎ、参加者が安心して楽しめる環境を整えます。
      </p>
      <div class="service_strong-point_box">
        <h3 class="service_strong-point_head">私たちの強み</h3>
        <ul class="service_strong-point_list">
          <li class="service_strong-point_item">
            規模や内容に応じて最適な警備を提供し、スムーズな運営をサポートします。
          </li>
          <li class="service_strong-point_item">
            事前に研修を受けた警備員が、細やかな気配りで安全確保を徹底します。
          </li>
          <li class="service_strong-point_item">
            来場者に安心感を与えられるよう、丁寧でホスピタリティを意識した対応を行います。
          </li>
        </ul>
      </div>
      <!-- /.service_strong-point_box -->
    </div>
    <!-- /.service_content-->

<?php get_template_part("cta-contact"); ?>

  </main>

<?php get_footer(); ?>