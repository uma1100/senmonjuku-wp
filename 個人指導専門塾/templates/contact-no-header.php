<?php get_header();
/*
Template Name: お問い合わせ（ヘッダー画像無し）
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
      <?php the_content(); ?>
    </div>
  </div>
</div>
<?php get_footer();?>