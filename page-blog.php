<?php get_header(); ?>

  <div class="m_kv" id="top">
    <div class="m_kv-inner l_container-lg">
      <div class="m_kv-box">
        <h1 class="m_kv-title">警備ブログ・一覧</h1>
        <p class="m_kv-title_sub">BLOG</p>
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

  <div class="l_wrapper">
    <div class="l_contents">
      <div class="l_contents-wrap l_container-lg">
        <main class="l_main">
          <div class="m_posts">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $the_query = new WP_Query( array(
              'post_status' => 'publish',
              'paged' => $paged,
              'posts_per_page' => 6, // 表示件数
              'orderby'     => 'date',
              'order' => 'DESC'
          ) );
  
  
          if ($the_query->have_posts()) :?><?php
            while ($the_query->have_posts()) : $the_query->the_post();?>
<article class="m_post">
  <a href="<?php the_permalink(); ?>" class="m_post_link">
      <div class="m_post_thumb-wrapper">
          <?php if (has_post_thumbnail()) : ?>
              <img
                  width="600"
                  height="400"
                  src="<?php the_post_thumbnail_url('medium'); ?>"
                  alt="<?php the_title_attribute(); ?>"
                  class="m_post_thumb"
              />
          <?php else : ?>
              <img
                  width="600"
                  height="400"
                  src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog-thumbnail.jpg'); ?>"
                  alt="ブログサムネイル"
                  class="m_post_thumb"
              />
          <?php endif; ?>
      </div>
      <div class="m_post_content">
          <div class="m_post_meta">
              <time class="m_post_meta-date"><?php echo get_the_date('Y.m.d'); ?></time>
              <span class="m_post_meta-cat">
                  <?php
                  $categories = get_the_category();
                  echo !empty($categories) ? esc_html($categories[0]->name) : 'カテゴリーなし';
                  ?>
              </span>
          </div>
          <h2 class="m_post_title"><?php the_title(); ?></h2>
      </div>
  </a>
</article>
      <?php
        endwhile;
      else :
      ?>
      <p>投稿データはありません。</p>
      <?php
      endif;?>
<!-- pagenation -->
<div class="m_pagination">
    <?php 
    if ($the_query->max_num_pages > 1) {
        $pagination_links = paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%/',
            'current' => max(1, get_query_var('paged')),
            'mid_size' => 1,
            'total' => $the_query->max_num_pages,
            'type' => 'array', // 配列形式で取得
            'prev_text' => '<span class="m_pagination_numbers__prev"></span>',
            'next_text' => '<span class="m_pagination_numbers__next"></span>',
        ));

        if (!empty($pagination_links)) {
            foreach ($pagination_links as $link) {
                // 現在のページリンクかどうかを判定
                if (strpos($link, 'current') !== false) {
                    echo str_replace(
                        'page-numbers current',
                        'm_pagination_numbers m_pagination_numbers__current',
                        $link
                    );
                } elseif (strpos($link, 'dots') !== false) {
                    echo str_replace(
                        'page-numbers dots',
                        'm_pagination_numbers m_pagination_numbers__between',
                        $link
                    );
                } else {
                    echo str_replace(
                        'page-numbers',
                        'm_pagination_numbers',
                        $link
                    );
                }
            }
        }
    }
    wp_reset_postdata();
    ?>
</div><!-- /pagination -->
          </div>
          <!-- /.m_posts -->
        </main>
        <?php get_sidebar(); ?>
      </div>
      <!-- /.l_container-lg -->
    </div>
    <!-- /.l_contents -->    
  </div>
  <!-- /.l_wrapper -->

<?php get_template_part("cta-recruit"); ?>

<?php get_footer(); ?>