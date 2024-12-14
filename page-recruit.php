<?php get_header(); ?>

  <div class="m_kv" id="top">
    <div class="m_kv-inner l_container-lg">
      <div class="m_kv-box">
        <h1 class="m_kv-title">採用情報</h1>
        <p class="m_kv-title_sub">RECRUIT</p>
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
    <div class="l_contents-sm">
      <div class="l_container">
        <div class="m_section-title">
          <h2 class="m_section-title_txt">採用情報</h2>
        </div>
        <!-- /.m_section-title -->
        <p class="recruit_desc">業務拡大に伴い警備スタッフを増員致します。未経験の方も大歓迎です！警備の仕事にご興味のある方のご応募お待ちしております。</p>
        <p class="recruit_desc">先輩隊員さんの声や警備の仕事に関しての情報を発信しているブログは下記のボタンからご覧ください。</p>
        <div class="recruit_btn-wrapper">
          <a href="<?php echo esc_url(home_url("/blog")); ?>" class="m_btn m_btn__right-arrow">
            <span class="btn_head">ブログの一覧をみる</span>
            <div class="m_arrow-wrapper">
              <div class="m_arrow__round">
                <div class="m_arrow m_arrow__right"></div>
              </div>            
            </div>
          </a>
        </div>
        <!-- /.recruit_btn-wrapper -->

        <div class="recruit_requirement_box">
          <h3 class="recruit_requirement_head">募集要項【警備スタッフ】</h3>
          <table class="recruit-info">
            <tr>
              <th>仕事内容</th>
              <td>
                【交通誘導警備】<br />
                建築現場及び土木工事現場における事故防止のため歩行者及び車両の安全確保を目的とした警備業務。<br />
                【イベント警備】<br />
                花火大会、マラソン大会、お祭り、バザー、運動会等の警備業務を担います。主に混雑による雑踏事故防止のための業務。
              </td>
            </tr>
            <tr>
              <th>採用条件</th>
              <td>18歳以上</td>
            </tr>
            <tr>
              <th>資格</th>
              <td>
                資格・経験不問<br>
                資格をお持ちの方は大歓迎<br>
                経験者の方大歓迎<br>
                中高年大歓迎
              </td>
            </tr>
            <tr>
              <th>勤務地</th>
              <td>
                市川市を中心に近隣各エリア、都内の現場も多数。<br>
                直行直帰OK。<br>
                事務所住所：千葉県市川市八幡3-27-8 2F
              </td>
            </tr>
          </table>
        </div>
        <!-- /.recruit_requirement_box -->
        
        <div class="recruit_requirement_box">
          <h3 class="recruit_requirement_head">ご応募の方法</h3>
          <div class="recruit_entry_boxes">
            <div class="recruit_entry_box">
              <div class="recruit_entry_head">
                <span class="recruit_entry_head-number recruit_entry_head-number__first">方法</span>
                <p class="recruit_entry_head_txt">履歴書送付</p>
              </div>
              <!-- /.recruit_entry_head -->
              <p class="recruit_entry_desc">履歴書（写真貼付）を下記住所までお送りください。</p>
              <p class="recruit_entry_desc">
                〒272-0021<br>
                千葉県市川市八幡3-27-8<br>
                有限会社ドルフィン 採用担当宛
              </p>
            </div>
            <!-- /.recruit_entry_box -->
            <div class="recruit_entry_box">
              <div class="recruit_entry_head">
                <span class="recruit_entry_head-number recruit_entry_head-number__second">方法</span>
                <p class="recruit_entry_head_txt">お電話</p>
              </div>
              <!-- /.recruit_entry_head -->
              <p class="recruit_entry_desc">電話でのご応募もお待ちしております。</p>
              <div class="recruit_entry_tel">
                <div class="recruit_entry_tel-icon-wrapper">
                  <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/phone-icon.svg"); ?>" alt="電話アイコン" class="recruit_entry_tel-icon" width="50" height="50">
                </div>
                <!-- /.recruit_entry_tel-icon-wrapper -->
                <p class="recruit_entry_tel-txt">047-329-4455</p>
              </div>
              <!-- /.recruit_entry_tel -->

            </div>
            <!-- /.recruit_entry_box -->
            <div class="recruit_entry_box">
              <div class="recruit_entry_head">
                <span class="recruit_entry_head-number recruit_entry_head-number__third">方法</span>
                <p class="recruit_entry_head_txt">エントリーフォーム</p>
              </div>
              <!-- /.recruit_entry_head -->
              <p class="recruit_entry_desc">この下にある「エントリーする」のボタンをクリックしてエントリーフォームから必要事項を記載してください。</p>
              <div class="recruit_entry_btn-wrapper">
                <a href="<?php echo esc_url(home_url("/entry")); ?>" class="m_btn m_btn__right-arrow">
                  <span class="btn_head">エントリーする</span>
                  <div class="m_arrow-wrapper">
                    <div class="m_arrow__round">
                      <div class="m_arrow m_arrow__right"></div>
                    </div>            
                  </div>
                </a>
              </div>
              <!-- /.top-service_btn-wrapper -->
            </div>
            <!-- /.recruit_entry_box -->
          </div>
          <!-- /.recruit_requirement_box -->
        </div>
        <!-- /.recruit_entry_boxes -->   
        
        
        <div class="recruit_requirement_box">
          <h3 class="recruit_requirement_head">採用に関するお問い合わせ</h3>
          <div class="recruit_contact_box">
            <p class="recruit_contact_txt">お電話、もしくはお問い合わせページからご連絡をお願いいたします。</p>
            <div class="recruit_contact_info_box">
              <div class="recruit_contact_info__tel">
                <div class="recruit_contact_info__tel_img-wrapper">
                  <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/phone-icon.svg"); ?>" alt="電話アイコン" class="recruit_contact_info__tel_img" width="50" height="50">
                </div>
                <!-- /.recruit_contact_info__tel_img-wrapper -->
                <p class="recruit_contact_info__tel-txt">047-329-4455</p>
              </div>
              <!-- /.recruit_contact_info__tel -->
              <div class="m_form_btn-wrapper">
                <a href="<?php echo esc_url(home_url("/contact")); ?>" class="m_btn m_form_btn">
                  お問い合わせフォームへ
                </a>
              </div>
              <!-- /.top_service_btn-wrapper -->  
            </div>
            <!-- /.recruit_contact_info_box -->
          </div>
          <!-- /.recruit_contact_box -->
        </div>
        <!-- /.recruit_requirement_box -->
      </div>
      <!-- /.l_container -->
    </div>
    <!-- /.l_contents -->
  </main>

<?php get_footer(); ?>