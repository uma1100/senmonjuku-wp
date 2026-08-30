<?php get_header();
/*
Template Name: お問い合わせ(サンクス)
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<div class="l_wrapper">
  <div class="p_contact">
    <?php get_template_part( 'parts/subPageHeader' ); ?>
    <div class="p_contactForm">
      <h1 class="p_contactForm_title">送信完了</h1>
      <div class="p_contactForm_message mb3">
        <?php the_content(); ?>
      </div>
      <div class="e_button _pink _center">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOPへ戻る</a>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>