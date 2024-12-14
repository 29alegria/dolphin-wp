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
    // カスタムクエリを作成
    $query = new WP_Query(array(
        'post_type' => 'post', // 投稿タイプを指定
        'posts_per_page' => 10, // 表示する投稿数
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // ページ番号
    ));

    // 投稿がある場合
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
        ?>
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

        // ページネーション
        the_posts_pagination(array(
            'mid_size' => 2,
            'prev_text' => __('« 前へ'),
            'next_text' => __('次へ »'),
        ));
    else :
        ?>
        <p>投稿データはありません。</p>
        <?php
    endif;

    // クエリをリセット
    wp_reset_postdata();
    ?>
          </div>
          <!-- /.m_posts -->
          <div class="m_pagination">
            <span class="m_pagination_numbers m_pagination_numbers__current"
              >1</span
            >
            <a href="" class="m_pagination_numbers">2</a>
            <span class="m_pagination_numbers m_pagination_numbers__between"
              >…</span
            >
            <a href="" class="m_pagination_numbers">10</a>
            <a href="" class="m_pagination_numbers m_pagination_numbers__next"></a>
          </div>
          <!-- /.pagination -->
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