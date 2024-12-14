<?php get_header(); ?>

  <div class="m_kv" id="top">
    <div class="m_kv-inner l_container-lg">
      <div class="m_kv-box">
        <h1 class="m_kv-title">エントリーフォーム</h1>
        <p class="m_kv-title_sub">ENTRY</p>
      </div>
      <!-- /.m_kv-box -->
    </div>
    <!-- /.m_kv-inner -->
  </div>
  <!-- /.m_kv -->

  <main class="l_main">
    <div class="l_contents">
      <div class="l_container-sm">
        <div class="m_section-title">
          <h2 class="m_section-title_txt">エントリーフォーム</h2>
        </div>
        <!-- /.m_section-title -->
        <form action="" class="contact_form">
          <dl class="contact_form_list">
            <dt class="contact_form_heading">
              お名前<span class="contact_form_example">例.山田太郎</span>
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="text" id="name" class="contact_form_input" />
              <p class="contact_form_error-message" id="name_error"></p>
            </dd>
            <dt class="contact_form_heading">
              お名前 (フリガナ)<span class="contact_form_example"
                >例.ヤマダタロウ</span
              >
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="text" id="name-kana" class="contact_form_input" />
              <p class="contact_form_error-message" id="name-kana_error"></p>
            </dd>
            <dt class="contact_form_heading">
              電話番号<span class="contact_form_example">例.0312345678</span>
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="tel" id="tel" class="contact_form_input" />
              <p class="contact_form_error-message" id="tel_error"></p>
            </dd>
            <dt class="contact_form_heading">
              メールアドレス<span class="contact_form_example"
                >例.info@sample.com</span
              >
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <input type="email" id="mail" class="contact_form_input" />
              <p class="contact_form_error-message" id="mail_error"></p>
            </dd>
            

            <!-- 住所 -->
            <dt class="contact_form_heading">
              ご住所
              <!-- <span class="contact_form_required">必須</span> -->
            </dt>
            <dd class="entry_form_detail">
              <!-- 郵便番号 -->
              <div class="entry_form_group">
                <label for="postal-code" class="entry_form_label">郵便番号</label>
                <input type="text" id="postal-code" class="entry_form_input" placeholder="例: 1234567" maxlength="7">
                <button type="button" class="entry_form_button">自動入力する</button>
              </div>

              <!-- 都道府県 -->
              <div class="entry_form_group">
                <label for="prefecture" class="entry_form_label">都道府県</label>
                <select id="prefecture" class="entry_form_input">
                  <option value="">お選びください</option>
                  <option value="北海道">北海道</option>
                  <option value="青森県">青森県</option>
                  <option value="岩手県">岩手県</option>
                  <option value="宮城県">宮城県</option>
                  <option value="秋田県">秋田県</option>
                  <option value="山形県">山形県</option>
                  <option value="福島県">福島県</option>
                  <option value="茨城県">茨城県</option>
                  <option value="栃木県">栃木県</option>
                  <option value="群馬県">群馬県</option>
                  <option value="埼玉県">埼玉県</option>
                  <option value="千葉県">千葉県</option>
                  <option value="東京都">東京都</option>
                  <option value="神奈川県">神奈川県</option>
                  <option value="新潟県">新潟県</option>
                  <option value="富山県">富山県</option>
                  <option value="石川県">石川県</option>
                  <option value="福井県">福井県</option>
                  <option value="山梨県">山梨県</option>
                  <option value="長野県">長野県</option>
                  <option value="岐阜県">岐阜県</option>
                  <option value="静岡県">静岡県</option>
                  <option value="愛知県">愛知県</option>
                  <option value="三重県">三重県</option>
                  <option value="滋賀県">滋賀県</option>
                  <option value="京都府">京都府</option>
                  <option value="大阪府">大阪府</option>
                  <option value="兵庫県">兵庫県</option>
                  <option value="奈良県">奈良県</option>
                  <option value="和歌山県">和歌山県</option>
                  <option value="鳥取県">鳥取県</option>
                  <option value="島根県">島根県</option>
                  <option value="岡山県">岡山県</option>
                  <option value="広島県">広島県</option>
                  <option value="山口県">山口県</option>
                  <option value="徳島県">徳島県</option>
                  <option value="香川県">香川県</option>
                  <option value="愛媛県">愛媛県</option>
                  <option value="高知県">高知県</option>
                  <option value="福岡県">福岡県</option>
                  <option value="佐賀県">佐賀県</option>
                  <option value="長崎県">長崎県</option>
                  <option value="熊本県">熊本県</option>
                  <option value="大分県">大分県</option>
                  <option value="宮崎県">宮崎県</option>
                  <option value="鹿児島県">鹿児島県</option>
                  <option value="沖縄県">沖縄県</option>
                </select>
              </div>

              <!-- 市区町村・番地 -->
              <div class="entry_form_group">
                <label for="city" class="entry_form_label">市区町村・番地</label>
                <input type="text" id="city" class="entry_form_input" placeholder="例: 千代田区丸の内1-1-1">
              </div>

              <!-- 建物名 -->
              <div class="entry_form_group">
                <label for="building" class="entry_form_label">建物名</label>
                <input type="text" id="building" class="entry_form_input" placeholder="例: サンプルビル101号室">
              </div>

            </dd>

            <dt class="contact_form_heading">
              自由項目（応募動機・自己PRなど）
              <span class="contact_form_required">必須</span>
            </dt>
            <dd class="contact_form_detail">
              <textarea
                class="contact_form_textarea"
                placeholder="ご自由にご記入ください。"
                id="textarea"
              ></textarea>
              <p class="contact_form_error-message" id="textarea_error"></p>
            </dd>

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
            <!-- /.privacy-link_icon-wrapper -->
            </a>
            に同意する
          </div>
          <!-- /.contact_form_privacy-wrapper -->
          <p class="privacy-error-message" style="display: none; color: red; font-size: 12px; margin-top: 8px;">プライバシーポリシーに同意してください。</p>

          
          <div class="contact_btn-wrapper">
            <div href="" class="m_btn m_btn__right-arrow">
              <input 
              type="submit"
              class="m_btn_input btn_head"
              value="この内容で送信する"
              >
            </div>
          </div>
          <!-- /.contact_btn-wrapper -->
        </form>
      </div>
      <!-- /.l_container-sm -->
    </div>
    <!-- /.l_contents -->
  </main>

<?php get_footer(); ?>