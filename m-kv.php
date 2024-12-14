<div class="m_kv">
    <div class="m_kv-inner l_container-lg">
      <div class="m_kv-box">
        <?php if((is_404())): ?>
        <h1 class="m_kv-title">404</h1>
        <?php elseif((is_single())): ?>
        <h1 class="m_kv-title">警備ブログ・記事</h1>
        <?php elseif((is_page("blog"))): ?>
        <h1 class="m_kv-title">警備ブログ・一覧</h1>
        <?php else: ?>
        <h1 class="m_kv-title">
          <?php the_title(); ?>
        </h1>
        <?php endif; ?>

        <?php if(is_page( "service" )): ?>
        <p class="m_kv-title_sub">SERVICE</p>
        <?php elseif(is_page( "about" )): ?>
        <p class="m_kv-title_sub">ABOUT US</p>
        <?php elseif(is_page( "history" )): ?>
        <p class="m_kv-title_sub">HISTORY</p>
        <?php elseif(is_page( "training" )): ?>
        <p class="m_kv-title_sub">TRAINING</p>
        <?php elseif(is_page( "philosophy" )): ?>
        <p class="m_kv-title_sub">PHILOSOPHY</p>
        <?php elseif((is_page( "blog" )) || is_single()) : ?>
        <p class="m_kv-title_sub">BLOG</p>
        <?php elseif(is_page( "recruit" )): ?>
        <p class="m_kv-title_sub">RECRUIT</p>
        <?php elseif(is_page( "contact" )): ?>
        <p class="m_kv-title_sub">CONTACT</p>
        <?php elseif(is_page( "entry" )): ?>
        <p class="m_kv-title_sub">ENTRY</p>
        <?php elseif(is_page( "privacy" )): ?>
        <p class="m_kv-title_sub">PRIVACY POLICY</p>
        <?php elseif((is_404())): ?>
        <p class="m_kv-title_sub">404 NOT FOUND</p>
        <?php endif; ?>
      </div>
      <!-- /.m_kv-box -->
    </div>
    <!-- /.m_kv-inner -->
  </div>
  <!-- /.m_kv -->