<?php get_header();
/*
Template Name: お問い合わせ(2026 Preview)
*/
// 【確認用ドラフト】お問い合わせフォーム簡易化の確認用テンプレート。
// フォーム項目は MW WP Form(フォームID 354)の管理画面設定を変更するまでの間、
// 見た目確認用の静的HTMLで仮表示している(送信機能は無い)。
// お客様承認後、MW WP Form側の項目を絞り込んでから[mwform_formkey key="354"]に差し替え、
// このファイルは削除して templates/contact.php をそのまま使う。
?>
<?php if ( post_password_required() ) : ?>
  <div class="l_wrapper">
    <div class="l_inner" style="padding: 8rem 0;">
      <?php echo get_the_password_form(); ?>
    </div>
  </div>
  <?php get_footer(); ?>
<?php return; endif; ?>
<?php
  $imgUri = get_theme_file_uri() . "/assets/image/";
?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
  <div class="p_contact _renewal">
    <div class="p_contactForm">
      <h1 class="p_contactForm_title"><?php the_title(); ?></h1>
      <p class="p_contactForm_message">
        ３営業日以内に担当者よりお返事差し上げます。
        <br>下記にご質問・ご相談内容を記載して
        <br>送信してください。
      </p>
      <div class="mw_wp_form mw_wp_form_input">
        <form method="post" action="">
          <div class="p_contactForm_content _simple">
            <div class="p_contactForm_item">
              <p class="p_contactForm_name">お名前<span class="_required">必須</span></p>
              <div class="p_contactForm_input">
                <input type="text" name="お名前" value="" placeholder="例）山田 太郎" disabled>
              </div>
            </div>
            <div class="p_contactForm_item">
              <p class="p_contactForm_name">ふりがな<span class="_required">必須</span></p>
              <div class="p_contactForm_input">
                <input type="text" name="ふりがな" value="" placeholder="例）やまだ たろう" disabled>
              </div>
            </div>
            <div class="p_contactForm_item">
              <p class="p_contactForm_name">メールアドレス<span class="_required">必須</span></p>
              <div class="p_contactForm_input">
                <input type="email" name="メールアドレス" value="" placeholder="例）example@example.com" disabled>
              </div>
            </div>
            <div class="p_contactForm_item">
              <p class="p_contactForm_name">電話番号<span class="_required">必須</span></p>
              <div class="p_contactForm_input _tel">
                <input type="text" name="電話番号" value="" placeholder="例）090-1234-5678" disabled>
              </div>
            </div>
            <div class="p_contactForm_item">
              <p class="p_contactForm_name">ご希望の教室（エリア）<span class="_required">必須</span></p>
              <div class="p_contactForm_input _select">
                <select disabled>
                  <option value="" selected>選択してください</option>
                  <option value="田代教室">田代教室</option>
                  <option value="自由ヶ丘教室">自由ヶ丘教室</option>
                  <option value="檀渓通教室">檀渓通教室</option>
                  <option value="大森教室">大森教室</option>
                  <option value="上志段味教室">上志段味教室</option>
                  <option value="桜坂（旧下志段味）教室">桜坂（旧下志段味）教室</option>
                  <option value="旭前教室">旭前教室</option>
                  <option value="七宝教室">七宝教室</option>
                  <option value="赤池教室">赤池教室</option>
                  <option value="稲熊教室">稲熊教室</option>
                  <option value="羽根教室">羽根教室</option>
                  <option value="幸田教室">幸田教室</option>
                  <option value="矢作北教室">矢作北教室</option>
                  <option value="大垣南頬教室">大垣南頬教室</option>
                </select>
              </div>
            </div>
            <div class="p_contactForm_item">
              <p class="p_contactForm_name">学年<span class="_required">必須</span></p>
              <div class="p_contactForm_input _select">
                <select disabled>
                  <option value="" selected>選択してください</option>
                  <option value="小1">小1</option>
                  <option value="小2">小2</option>
                  <option value="小3">小3</option>
                  <option value="小4">小4</option>
                  <option value="小5">小5</option>
                  <option value="小6">小6</option>
                  <option value="中1">中1</option>
                  <option value="中2">中2</option>
                  <option value="中3">中3</option>
                  <option value="高1">高1</option>
                  <option value="高2">高2</option>
                  <option value="高3">高3</option>
                </select>
              </div>
            </div>
            <div class="p_contactForm_item _full">
              <p class="p_contactForm_name">ご相談内容<span class="_required">必須</span></p>
              <div class="p_contactForm_input _checkbox">
                <label><input type="checkbox" disabled>無料体験を希望</label>
                <label><input type="checkbox" disabled>料金について知りたい</label>
                <label><input type="checkbox" disabled>学習相談をしたい</label>
                <label><input type="checkbox" disabled>その他</label>
              </div>
            </div>
            <div class="p_contactForm_item _full">
              <p class="p_contactForm_name">自由記述（ご質問・ご要望など）<span class="_optional">任意</span></p>
              <div class="p_contactForm_input _textarea">
                <textarea rows="5" placeholder="ご質問やご相談などをご自由にご入力ください" disabled></textarea>
              </div>
            </div>
            <div class="p_contactForm_item _full">
              <div class="p_contactForm_input _submit">
                <input type="submit" value="確認画面へ" disabled>
              </div>
            </div>
          </div>
        </form>
      </div>
      <p style="margin-top: 2.4rem; text-align: center; color: #999; font-size: 1.2rem;">
        ※このページはデザイン確認用の仮表示です。入力・送信はできません。
      </p>
    </div>
  </div>
</div>
<?php get_footer();?>
