<aside class="m_sidebar">
          <div class="m_sidebar-box">
            <div class="m_sidebar-box_head">
              <h2 class="m_sidebar-box_head-txt">新着記事</h2>
            </div>
            <!-- /.m_sidebar-box_head -->
            <div class="m_sidebar-box_contents">

            <?php
      $args = array(
        'post_type' => 'post', //カスタム投稿タイプを指定
        'posts_per_page' => 4, //表示する記事数
      );

      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();

          $cat = get_the_category();
          $cat_name = $cat[0]->name;
      ?>
          <article class="m_sidebar-post">
            <a href="<?php the_permalink(); ?>" class="m_sidebar-post_link">
              <div class="m_sidebar-post_thumb-wrapper">
                <?php the_post_thumbnail(null, array('class' => 'm_sidebar-post_thumb')); ?>
              </div>
              <!-- /.m_post_thumb-wrapper -->
              <div class="m_sidebar-post_content">
                <div class="m_sidebar-post_meta">
                  <time class="m_sidebar-post_meta-date"><?php the_time('Y.m.d'); ?></time>
                  <span class="m_sidebar-post_meta-cat"><?php echo esc_html($cat_name); ?></span>
                </div>
                <!-- ./m_post_meta -->
                <h2 class="m_sidebar-post_title">
                  <?php the_title(); ?>
                </h2>
              </div>
              <!-- /.m_post_content -->
            </a>
          </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

            </div>
            <!-- /.m_sidebar-box_head -->
          </div>
          <!-- /.m_sidebar-box -->
          <div class="m_cta__recruit m_cta__recruit__sidebar">
            <div class="l_container-lg">
              <div class="top_section_title">
                <p class="top_section_title_sub">RECRUIT</p>
                <h2 class="top_section_title_main">採用情報</h2>
              </div>
              <!-- /.top_section_title --> 
              <p class="m_cta__recruit-txt">
                業務拡大に伴い、新たに警備スタッフを募集いたします！未経験の方も安心して始められる環境を整えています。<br 
                />警備の仕事にご興味のある方は、ぜひお気軽にご応募ください。
              </p>
              <div class="m_recruit_btn-wrapper">
                <a href="<?php echo esc_url(home_url("/recruit")); ?>" class="m_btn m_recruit_btn m_btn__right-arrow">
                  <span class="btn_head">採用情報を見る</span>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow__round">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>            
                    <!-- /.m_arrow__round -->
                  </div>
                  <!-- /.m_arrow-wrapper -->
                </a>
              </div>
              <!-- /.m_recruit_btn-wrapper -->
            </div>
            <!-- /.l_container-lg -->
          </div>
          <!-- /.m_cta__recruit -->
        </aside>