<?php get_header();?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
<div class="c_archive">
		<div class="c_archiveContent">
			<div class="l_inner">
				<ul class="c_blogList">
					<?php if ( have_posts() ) : ?>
					<?php while(have_posts()): the_post(); ?>
					<?php $category = get_the_category(); ?>
					<li class="c_blogList_item">
						<a href="<?php the_permalink(); ?>">
							<article>
							<div class="c_blogList_text">
								<time datetime="<?php the_time('Y-m-d'); ?>" class="c_blogList_date"><?php the_time('Y/m/d'); ?></time>
								<p class="c_blogList_title"><?php echo get_the_title(); ?></p>
							</div>
							<div class="c_blogList_image">
								<span class="c_blogList_cat"><?php single_cat_title(); ?></span>
								<?php if (has_post_thumbnail()) : ?>
								<?php the_post_thumbnail(); ?>
								<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/thumbnail_noimage.jpg" alt="NO IMAGE">
								<?php endif; ?>
							</div>
							</article>
						</a>
					</li>
					<?php endwhile; ?>
					<?php endif; ?>
				</ul>
				<div class="c_pageNavi mt3">
					<?php wp_pagenavi(); ?>
				</div>
			</div>
		</div>
		<div class="c_category">
			<div class="l_inner">
				<div class="e_heading-wrap mb2">
					<h2 class="e_heading _pink _subpage">
						<span class="e_heading_jp">カテゴリー</span>
						<span class="e_heading_en">CATEGORY</span>
					</h2>
				</div> 
				<ul class="c_categoryList flex">
					<?php
						$categories = get_categories();
						foreach ($categories as $category) {
							echo '<li class="c_categoryList_item"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>