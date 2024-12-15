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
          <h2 class="m_section-title_txt">お問い合わせ</h2>
        </div>
        <!-- /.m_section-title -->
        
        <?php the_content() ?>

        <!-- <form action="" class="contact_form">
          <dl class="contact_form_list">
            <dt class="contact_form_heading">
              会社名<span class="contact_form_example"
                >例.株式会社Sample</span
              >
            </dt>
            <dd class="contact_form_detail">
              <input type="text" class="contact_form_input" />
            </dd>
            <dt class="contact_form_heading">
              お名前<span class="contact_form_example">例.山田太郎</span>
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="text" id="name" class="contact_form_input" />
              <p class="contact_form_error-message" id="name_error"></p>            </dd>
            <dt class="contact_form_heading">
              お名前 (フリガナ)<span class="contact_form_example"
                >例.ヤマダタロウ</span
              >
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="text" id="name-kana" class="contact_form_input" />
              <p class="contact_form_error-message" id="name-kana_error"></p>            </dd>
            <dt class="contact_form_heading">
              電話番号<span class="contact_form_example">例.0312345678</span>
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="tel" id="tel" class="contact_form_input" />
              <p class="contact_form_error-message" id="tel_error"></p>            </dd>
            <dt class="contact_form_heading">
              メールアドレス<span class="contact_form_example"
                >例.info@sample.com</span
              >
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="email" id="mail" class="contact_form_input" />
              <p class="contact_form_error-message" id="mail_error"></p>            </dd>

            <dt class="contact_form_heading">
              お問い合わせ項目
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <ul class="contact_form_radio-list">
                <li class="contact_form_radio-item">
                  <input
                    type="radio"
                    name="content"
                    value=""
                    id="1"
                    class="contact_form_radio"
                    checked
                  /><label for="1" class="contact_form_label">警備の仕事について</label>
                </li>
                <li class="contact_form_radio-item">
                  <input
                    type="radio"
                    name="content"
                    value=""
                    id="2"
                    class="contact_form_radio"
                  /><label for="2" class="contact_form_label">採用について</label>
                </li>
                <li class="contact_form_radio-item">
                  <input
                    type="radio"
                    name="content"
                    value=""
                    id="3"
                    class="contact_form_radio"
                  /><label for="3" class="contact_form_label">その他</label>
                </li>
              </ul>
              <p class="error_message" id="radio_error" style="display: none; color: red; font-size: 12px; margin-top: 8px;">
                お問い合わせ項目を選択してください。
              </p>
            </dd>
            <dt class="contact_form_heading">
              お問い合わせ内容
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <textarea
                class="contact_form_textarea"
                placeholder="ご自由にご記入ください。"
                id="textarea"
              ></textarea>
              <p class="contact_form_error-message" id="textarea_error"></p>

          </dl>

          <div class="contact_form_privacy-wrapper">
            <input 
              type="checkbox" 
              class="contact_form_privacy"
            >
            <a 
              href="<?php echo esc_url(home_url("/privacy")); ?>" 
              class="contact_form_privacy-link"
              target="_blank"
              rel="noopener noreferrer">
            プライバシーポリシー
            <div class="privacy-link_icon-wrapper">
              <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/link-icon.svg"); ?>" alt="外部リンクアイコン" class="privacy-link_icon" width="32" height="32">
            </div>
            </a>
            に同意する
          </div>
          <p class="privacy-error-message" style="display: none; color: red; font-size: 12px; margin-top: 8px;">プライバシーポリシーに同意してください。</p>


          
          <div class="contact_btn-wrapper">
            <div class="m_btn m_btn__right-arrow">
              <input 
              type="submit"
              class="m_btn_input btn_head"
              value="この内容で送信する"
              >
            </div>
          </div>
          
        </form> -->
      </div>
      <!-- /.l_container-sm -->
    </div>
    <!-- /.l_contents -->
  </main>
<?php
endwhile;
endif;
?>
<?php get_footer(); ?>