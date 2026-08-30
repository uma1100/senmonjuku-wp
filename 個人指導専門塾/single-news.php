<?php get_header(); ?>
<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<div class="l_wrapper">
    <div class="c_single">
        <?php get_template_part( 'parts/subPageHeader' ); ?>
        <div class="c_singleContent">
            <div class="l_inner _single">
                <div class="c_singleContent_header grid">
                    <h1 class="c_singleContent_title"><?php the_title(); ?></h1>
                    <time datetime="<?php the_time('Y-m-d'); ?>" class="c_singleContent_date"><?php the_time('Y/m/d'); ?></time>
                </div>
                <main class="c_singleContent_main">
                    <?php the_content(); ?>
                </main>
            </div>
        </div>
        <div class="p_news">
            <div class="l_inner">
                <div class="e_heading-wrap mb2">
                    <h2 class="e_heading _pink _subpage">
                        <span class="e_heading_jp">新着情報</span>
                        <span class="e_heading_en">NEWS</span>
                    </h2>
                </div>
                <?php
                    $current_post_id = get_the_ID();
                    $args = array(
                    'post_type' => 'news', // 投稿タイプのスラッグを指定
                    'posts_per_page' => 5, // 投稿件数の指定
                    "post__not_in" => [$current_post_id] // 除外する記事のIDを指定
                    );
                    $news_query = new WP_Query($args); if($news_query->have_posts()):
                ?>
                <ul class="c_newsList">
                    <?php while ($news_query->have_posts()): $news_query->the_post(); ?>
                    <li class="c_newsList_item">
                    <a href="<?php the_permalink(); ?>">
                    <article>
                        <time datetime="<?php the_time('Y-m-d'); ?>" class="c_newsList_date"><?php the_time('Y.m.d'); ?></time>
                        <p class="c_newsList_title"><?php echo get_the_title(); ?></p>
                    </article>
                    </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php else: ?>
                <p>まだ投稿がありません。</p>
                <?php endif; ?>
            </div>
        </div><!-- /p_news -->
    </div>
</div>
<?php get_footer();?>