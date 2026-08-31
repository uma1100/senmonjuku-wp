<?php get_header();
/*
Template Name: お問い合わせ(2026 Preview)
*/
// 【確認用ドラフト】お問い合わせフォーム簡易化の確認用テンプレート。
// 項目を絞り込んだ新規フォーム(MW WP Form, フォームID 18917)を実際に埋め込んで確認する。
// 既存の本番フォーム(ID 354)には一切手を加えていない。
// お客様承認後、templates/contact.php 側のショートコードを [mwform_formkey key="18917"] に差し替え、
// このファイルは削除する。
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
      <?php echo do_shortcode('[mwform_formkey key="18917"]'); ?>
    </div>
  </div>
</div>
<?php get_footer();?>
