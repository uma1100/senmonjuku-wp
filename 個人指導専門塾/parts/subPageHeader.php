<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<?php if ( is_single() || is_page_template(array("templates/contact-compleat.php","templates/contact-confirm.php","templates/contact-no-header.php","templates/lp.php" )) ) : ?>
  <ul class="c_breadcrumbsList flex">
    <?php 
      if(function_exists('bcn_display')){
        bcn_display();
      }
    ?>
  </ul>
  <?php elseif ( is_post_type_archive('teacher') ) : ?>
  <div class="c_subPageHeader _mb-none">
    <div class="c_subPageHeader_bg">
      <picture>
        <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>/subpage/xl_subPageHeader_bg_teacher.jpg">
        <img src="<?php echo $imgUri; ?>/subpage/sm_subPageHeader_bg_teacher.jpg" alt="">
      </picture>
    </div>
    <h1 class="e_heading _subpage _white">
      <span class="e_heading_jp">講師紹介</span>
      <span class="e_heading_en">TEACHER</span>
    </h1>
  </div>
<?php else : ?> 
<div class="c_subPageHeader">
  <ul class="c_breadcrumbsList flex">
    <?php 
      if(function_exists('bcn_display')){
        bcn_display();
      }
    ?>
  </ul>
  <?php if ( is_post_type_archive('news') ) : ?>
    <div class="c_subPageHeader_bg">
      <picture>
        <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>/subpage/xl_subPageHeader_bg_news.jpg">
        <img src="<?php echo $imgUri; ?>/subpage/sm_subPageHeader_bg_news.jpg" alt="">
      </picture>
    </div>
    <h1 class="e_heading _subpage _white">
      <span class="e_heading_jp">お知らせ</span>
      <span class="e_heading_en">NEWS</span>
    </h1>
  <?php elseif ( is_post_type_archive('voice') || is_tax('school-grade')) : ?>
    <div class="c_subPageHeader_bg">
      <picture>
        <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>/subpage/xl_subPageHeader_bg_voice.jpg">
        <img src="<?php echo $imgUri; ?>/subpage/sm_subPageHeader_bg_voice.jpg" alt="">
      </picture>
    </div>
    <h1 class="e_heading _subpage _white">
      <span class="e_heading_jp">喜びの声</span>
      <span class="e_heading_en">VOICE</span>
    </h1>
  <?php elseif ( is_post_type_archive('school') || is_tax('area')) : ?> 
    <div class="c_subPageHeader_bg">
      <picture>
        <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>/subpage/xl_subPageHeader_bg_school.jpg">
        <img src="<?php echo $imgUri; ?>/subpage/sm_subPageHeader_bg_school.jpg" alt="">
      </picture>
    </div>
    <h1 class="e_heading _subpage _white">
      <span class="e_heading_jp">教室紹介</span>
      <span class="e_heading_en">SCHOOL</span>
    </h1>
  <?php elseif ( is_archive() || is_tax() || is_category() ) : ?>
    <div class="c_subPageHeader_bg">
      <picture>
        <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>/subpage/xl_subPageHeader_bg_blog.jpg">
        <img src="<?php echo $imgUri; ?>/subpage/sm_subPageHeader_bg_blog.jpg" alt="">
      </picture>
    </div>
    <h1 class="e_heading _subpage _white">
      <span class="e_heading_jp">ブログ</span>
      <span class="e_heading_en">BLOG</span>
    </h1>  
  <?php elseif ( is_page() ) : ?>
    <?php $subPageHeader = get_field('subPageHeader'); ?>
    <div class="c_subPageHeader_bg">
      <picture>
        <source media="(min-width: 1024px)" srcset="<?php echo $subPageHeader['subPageHeader_image_pc']; ?>">
        <img src="<?php echo $subPageHeader['subPageHeader_image_sp']; ?>" alt="">
      </picture>
    </div>
    <h1 class="e_heading _subpage _white">
      <span class="e_heading_jp"><?php the_title(); ?></span>
      <span class="e_heading_en"><?php the_field('title_en'); ?></span>
    </h1> 
  <?php endif; ?>
</div>
<?php endif; ?> 