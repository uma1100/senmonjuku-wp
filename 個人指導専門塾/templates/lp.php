<?php get_header();
/*
Template Name: LP(ヘッダー画像なし)
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
    <div class="c_single">
        <div class="c_singleContent">
            <div class="l_inner _single">
                <main class="c_singleContent_main">
                    <?php the_content(); ?>
                </main>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>