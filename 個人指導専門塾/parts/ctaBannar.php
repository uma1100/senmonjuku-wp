<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<div class="e_ctaBannar">
  <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
    <picture>
      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/xl_muryoutaiken.webp" type="image/webp">
      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/xl_muryoutaiken.jpg">
      <source srcset="<?php echo $imgUri; ?>/common/sm_muryoutaiken.webp" type="image/webp">
      <img src="<?php echo $imgUri; ?>/common/sm_muryoutaiken.jpg">
    </picture>
  </a>
</div>