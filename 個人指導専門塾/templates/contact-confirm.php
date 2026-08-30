<?php get_header();
/*
Template Name: お問い合わせ(確認)
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<div class="l_wrapper">
  <div class="p_contact">
    <?php get_template_part( 'parts/subPageHeader' ); ?>
    <div class="p_contactForm">
      <h1 class="p_contactForm_title">内容確認</h1>
      <p class="p_contactForm_message">
        ご入力いただいた内容に
        <br>間違いがないかご確認ください。
      </p>
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php get_footer();?>