<?php get_header(); ?>

<?php 
if (have_posts()) :
  while (have_posts()) :
    the_post();
?>

<?php get_template_part("m-kv"); ?>

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
              <td>18歳以上。</td>
            </tr>
            <tr>
              <th>資格</th>
              <td>
                資格・経験不問。<br>
                資格をお持ちの方は大歓迎。経験者の方大歓迎。中高年大歓迎。
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
            <tr>
              <th>事務所最寄駅</th>
              <td>
              京成八幡駅：徒歩0分<br>
              都営新宿線本八幡駅：徒歩5分<br>
              JR総武線本八幡駅：徒歩10分
              </td>
            </tr>
            <tr>
              <th>勤務時間</th>
              <td>
              （日勤）8：00～ 17：00<br>
              （夜勤）21：00～翌6：00
              </td>
            </tr>
            <tr>
              <th>給与</th>
              <td>
              日給：12,000円〜16,000円（手当含む）<br>
              給与内訳：<br>
              ・日給9,000円<br>
              ・生活応援金3,000円（1ヶ月間）<br>
              ・夜勤手当：+2,500円<br>
              ・資格手当：+500円<br>
              ・指定配置路線手当：+1,000円<br>
              最大合計：16,000円 / 日<br>

              交通費：別途全額支給
              </td>
            </tr>
            <tr>
              <th>休日休暇</th>
              <td>
                シフト制。有給休暇あり。
              </td>
            </tr>
            <tr>
              <th>福利厚生</th>
              <td>
                社会保険完備、労働保険、労災保険。
              </td>
            </tr>
            <tr>
              <th>待遇</th>
              <td>
              寮完備。寮費1ヶ月無料規定有。<br>
              電化製品要相談。寝具無料。<br>
              スマートフォン貸与あり。<br>
              制服、道具類貸与あり。<br>
              日払い、週払い対応可。<br>
              受動喫煙対策あり（事務所内禁煙）。<br>
              入社祝い金：￥150,000支給（当社規定あり）。<br>
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

  <?php
endwhile;
endif;
?>

<?php get_footer(); ?>