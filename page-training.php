<?php get_header(); ?>

<?php 
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>
  
<?php get_template_part("m-kv"); ?>

  <main class="l_main">
    <div class="l_contents-sm">
      <div class="l_container-sm">
        <div class="m_section-title">
          <h2 class="m_section-title_txt">研修</h2>
        </div>
        <!-- /.m_section-title -->
        <p class="training_desc">私たちはより良いサービスをご提供できるよう、しっかりと研修をし、技術の向上を図っております。</p>
        <div class="training_info-box">
          <div class="training_info_img-wrapper">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/training01.jpg"); ?>" alt="新任研修の様子" class="training_info_img" width="800" height="600">
          </div>
          <!-- /.training_info_img-wrapper -->
          <div class="training_info_content">
            <h3 class="training_info-title">新任研修</h3>
            <p class="training_info-txt">
              新たに警備員になろうとする者に対して、警備業者が教育をするもの。警備員として仕事をする為の基本的知識及び業務の専門的技術を習得する為の教育(警備業法で定められている教育)
            </p>
            <p class="training_info-txt">教育方式：実技・座学講習</p>
          </div>
          <!-- /.training_info_content -->
        </div>
        <!-- /.training_info-box -->
        <div class="training_info-box">
          <div class="training_info_img-wrapper">
            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/training02.jpg"); ?>" alt="現任研修の様子" class="training_info_img" width="800" height="600">
          </div>
          <!-- /.training_info_img-wrapper -->
          <div class="training_info_content">
            <h3 class="training_info-title">現任研修</h3>
            <p class="training_info-txt">
              既に警備員として業務に就いている者に対して、技術と知識をより高め確かなものにする為の教育（半年に一度）(警備業法で定められている教育)
            </p>
            <p class="training_info-txt">教育方式：実技・座学講習</p>
          </div>
          <!-- /.training_info_content -->
        </div>
        <!-- /.training_info-box -->
      </div>
      <!-- /.l_container-sm -->
    </div>
    <!-- /.l_contents -->

<?php get_template_part("cta-contact"); ?>

  </main>

  <?php
endwhile;
endif;
?>

<?php get_footer(); ?>