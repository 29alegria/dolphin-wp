<?php get_header(); ?>

<?php get_template_part("m-kv"); ?>

  <main class="l_main">
    <div class="l_contents">
      <div class="l_container-lg">
        <div class="notfound-content">
          <p class="notfound_txt">
            お探しのページはすでに削除されたか、ほかの場所へ移動されたため、表示することが出来ませんでした。<br/>
            大変お手数ですがホーム画面へお戻りのうえ、改めてご希望のページをお探しください。
          </p>
          <div class="notfound_btn-wrapper">
            <a href="<?php echo esc_url(home_url()); ?>" class="m_btn m_btn__right-arrow">
              <span class="m_btn_head">トップへ戻る</span>
              <div class="m_arrow-wrapper">
                <div class="m_arrow__round">
                  <div class="m_arrow m_arrow__right"></div>
                </div>            
              </div>
            </a>
          </div>
        </div>
        <!-- /.notfound-content -->
      </div>
      <!-- /.l_container-lg -->
    </div>
    <!-- /.l_contents -->
    
    <?php get_template_part("cta-contact"); ?>
  </main>

<?php get_footer(); ?>