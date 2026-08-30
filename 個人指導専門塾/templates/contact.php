<?php get_header();
/*
Template Name: お問い合わせ
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
  <div class="p_contact">
    <div class="p_contactForm">
      <h1 class="p_contactForm_title"><?php the_title(); ?></h1>
      <p class="p_contactForm_message">
        ３営業日以内に担当者よりお返事差し上げます。
        <br>下記にご質問・ご相談内容を記載して
        <br>送信してください。
      </p>
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php get_footer();?>