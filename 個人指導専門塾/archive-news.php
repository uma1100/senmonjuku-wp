<?php get_header(); ?>
<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
	<div class="c_archive">
		<div class="l_inner">
			<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$args = array(
				'post_type' => 'news', // 投稿タイプのスラッグを指定
				'posts_per_page' => 12, // 投稿件数の指定
				'paged' => $paged,
				);
				$news_query = new WP_Query($args); if($news_query->have_posts()):
			?>
			<ul class="c_newsList mb3">
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
			<?php
				$count_posts = wp_count_posts('news');
				$published_posts = $count_posts->publish;
				if ($published_posts >= 7):
			?>
			<div class="c_pageNavi">
				<?php wp_pagenavi(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>