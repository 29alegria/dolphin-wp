<?php get_header(); ?>

<?php get_template_part("m-kv"); ?>

<?php if (function_exists('custom_breadcrumbs')) custom_breadcrumbs(); ?>


  <div class="l_wrapper single_article_wrapper">
    <div class="l_contents">
      <div class="l_contents-wrap l_container-lg">
        <main class="l_main">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="single_article">
                        <div class="single_article_thumb-wrapper">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>" class="single_article_thumb" />
                            <?php endif; ?>
                        </div>

                        <div class="single_article_meta">
                            <div class="m_post_meta">
                                <time class="m_post_meta-date"><?php echo get_the_date('Y.m.d'); ?></time>
                                <span class="m_post_meta-cat">
                                    <?php
                                    $categories = get_the_category();
                                    echo !empty($categories) ? esc_html($categories[0]->name) : 'カテゴリーなし';
                                    ?>
                                </span>
                            </div>
                        </div>

                        <div class="single_main_content">
                            <h1><?php the_title(); ?></h1>
                            <?php the_content(); ?>
                        </div>
                    </article>

                    <div class="single_article_btn-wrapper">
                        <a href="<?php echo esc_url(home_url('/blog')); ?>" class="m_btn m_btn__right-arrow">
                            <span class="btn_head">ブログの一覧に戻る</span>
                            <div class="m_arrow-wrapper">
                                <div class="m_arrow__round">
                                    <div class="m_arrow m_arrow__right"></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; endif; ?>
        </main>
        <?php get_sidebar(); ?>
      </div>
      <!-- /.l_contents-wrap l_container-lg -->
    </div>
    <!-- /.l_contents -->
  </div>
  <!-- /.l_wrapper -->

  <?php get_template_part("cta-recruit"); ?>

  <?php get_footer(); ?>