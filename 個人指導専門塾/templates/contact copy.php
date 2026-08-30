<?php get_header();
/*
Template Name: お問い合わせ
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<div class="l_wrapper">
  <div class="p_contact">
    <?php get_template_part( 'parts/subPageHeader' ); ?>
    <div class="p_contactForm">
      <h1 class="p_contactForm_title"><?php the_title(); ?></h1>
      <p class="p_contactForm_message">
        ３日以内に担当者よりお返事差し上げます。
        <br>下記にご質問・ご相談内容を記載して
        <br>送信してください。
      </p>
      <form method="post" action="" enctype="multipart/form-data">
        <div class="p_contactForm_content">
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">ご希望の教室名</p>
            <div class="p_contactForm_input">
            [mwform_select name="ご希望の教室名" children=":選択してください,東名校,上志段味校,下志段味校,檀渓通校,東山校,徳重校,自由ヶ丘校,田代校,大森校,伏屋校,蟹江校,瀬戸校,七宝校,津島南本町校,津島神守校,赤池校,旭前校,三好丘校,羽根校,岡崎百々西校,蒲郡校,幸田校,稲熊校,大垣南頬校,オンライン" ]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">お子様のお名前<span class="_required">必須</span></p>
            <div class="p_contactForm_input">
            [mwform_text name="お子様のお名前" placeholder="個別 太郎" size="0"]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">お子様のお名前フリガナ<span class="_required">必須</span></p>
            <div class="p_contactForm_input">
            [mwform_text name="furigana" placeholder="コベツ　タロウ" size="0"]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">お子様の学年<span class="_required">必須</span></p>
            <div class="p_contactForm_input _select">
            [mwform_select name="お子様の学年" children="小1,小2,小3,小4,小5,小6,中1,中2,中3,高1,高2,高3"]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">お子様の性別<span class="_required">必須</span></p>
            <div class="p_contactForm_input _radio">
            [mwform_select name="お子様の性別" children="男,女"]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">メールアドレス<span class="_required">必須</span></p>
            <div class="p_contactForm_input">
            [mwform_email name="メールアドレス" size="0"]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">電話番号<span class="_required">必須</span></p>
            <div class="p_contactForm_input">
            [mwform_text name="電話番号" placeholder="0120187703" size="0"]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name">メッセージ</p>
            <div class="p_contactForm_input">
            [mwform_textarea name="メッセージ" cols="40" rows="5"]
            </div>
          </div>
          <div class="p_contactForm_item">
            <p class="p_contactForm_name _center">
              入力内容をご確認いただき、
              <br>個人情報の取り扱いについて同意の上
              <br>送信してください。
            </p>
            <div class="p_contactForm_input _submit">
            [mwform_backButton value="戻る"]
            [mwform_submitButton name="mwform_submitButton-475" confirm_value="確認画面へ" submit_value="送信する"]
            </div>
          </div>
        </div> 
        <input type="hidden" id="mw_wp_form_token" name="mw_wp_form_token" value="8dc3d3ac62"><input type="hidden" name="_wp_http_referer" value="/senmonjuku/contact-test"><input type="hidden" name="mw-wp-form-form-id" value="13487">
        <input type="hidden" name="mw-wp-form-form-verify-token" value="0a3b82027785ec96471cbd97b12ca57ae326ee77">
      </form>
    </div>
  </div>
</div>
<?php get_footer();?><?php the_content(); ?>