<?php get_header(); ?>
<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
	<div class="c_archive">
		<div class="c_archiveContent">
			<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$args = array(
				'post_type' => 'teacher', // 投稿タイプのスラッグを指定
				'posts_per_page' => 12, // 投稿件数の指定
				'paged' => $paged,
				);
				$teracher_query = new WP_Query($args); if($teracher_query->have_posts()):			
			?>
			<ul class="c_teacherList mb3">
				<?php while ($teracher_query->have_posts()): $teracher_query->the_post(); ?>
				<li class="c_teacherList_item">
					<a href="<?php the_permalink(); ?>">
						<article>
							<div class="c_teacherList_text">
								<p class="c_teacherList_name"><?php echo get_the_title(); ?></p>
								<p class="c_teacherList_school"><?php the_field('classroom'); ?></p>
							</div>
							<div class="c_teacherList_image">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail(); ?>
								<?php else: ?>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/thumbnail_sample.jpg" alt="NO IMAGE">
								<?php endif; ?>
							</div>
						</article>
					</a>
				</li>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			</ul>
			<?php else: ?>
			<p>まだ投稿がありません。</p>
			<?php endif; ?>
			<div class="c_pageNavi">
				<?php wp_pagenavi(); ?>
			</div>
		</div>
		<div class="c_blog mb5">
            <div class="l_inner">
                <div class="e_heading-wrap mb2">
                    <h2 class="e_heading _pink _subpage">
                        <span class="e_heading_jp">新着ブログ</span>
                        <span class="e_heading_en">BLOG</span>
                    </h2>
                </div> 
                <?php
                    $current_post_id = get_the_ID();
                    $args = array(
                    'post_type' => 'post', // 投稿タイプのスラッグを指定
                    'posts_per_page' => 3, // 投稿件数の指定
                    'post__not_in' => [$current_post_id] // 除外する記事のIDを指定
                    );
                    $post_query = new WP_Query($args); if($post_query->have_posts()):
                ?>
                <ul class="c_blogList">
                    <?php while ($post_query->have_posts()): $post_query->the_post(); ?>
                    <?php $category = get_the_category(); ?>
                    <li class="c_blogList_item">
                        <a href="<?php the_permalink(); ?>">
                            <article>
                            <div class="c_blogList_text">
                                <time datetime="<?php the_time('Y-m-d'); ?>" class="c_blogList_date"><?php the_time('Y/m/d'); ?></time>
                                <p class="c_blogList_title"><?php echo get_the_title(); ?></p>
                            </div>
                            <div class="c_blogList_image">
                                <span class="c_blogList_cat"><?php echo $category[0]->cat_name; ?></span>
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
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php else: ?>
                <?php endif; ?>
            </div>
        </div><!-- /c_blog -->
        <div class="c_pickup">
            <div class="l_inner">
                <div class="e_heading-wrap mb2">
                    <h2 class="e_heading _pink _subpage">
                        <span class="e_heading_jp">人気記事</span>
                        <span class="e_heading_en">PICK UP</span>
                    </h2>
                </div> 
                <ul class="c_blogList">
                    <?php if ( get_option('pickup_post_url1') ) : ?>
                    <?php
                        $pickup_post_url1 = get_option('pickup_post_url1') ;
                        $keys = parse_url($pickup_post_url1); //パース処理
                        $path = explode("/", $keys['path']); //分割処理
                        $last = end($path); //最後の要素を取得
                        $data = get_page_by_path($last, OBJECT, 'post');
                        $post_id = $data->ID;
                        $date = get_the_date('Y/m/d', $post_id);
                        $title = get_the_title($post_id);
                        $category = get_the_category($post_id);
                    ?>
                    <li class="c_blogList_item">
                        <a href="<?php echo $pickup_post_url1 ?>">
                            <article>
                                <div class="c_blogList_text">
                                    <time class="c_blogList_date"><?php echo $date ?></time>
                                    <p class="c_blogList_title"><?php echo $title ?></p>
                                </div>
                                <div class="c_blogList_image">
                                    <span class="c_blogList_cat"><?php echo $category[0]->cat_name; ?></span>
                                    <?php if (has_post_thumbnail($post_id)) : ?>
                                        <?php echo get_the_post_thumbnail($post_id); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/thumbnail_noimage.jpg" alt="NO IMAGE">
                                    <?php endif; ?>
                                </div>
                            </article>
                        </a>
                    </li>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php if ( get_option('pickup_post_url2') ) : ?>
                    <?php
                        $pickup_post_url2 = get_option('pickup_post_url2') ;
                        $keys = parse_url($pickup_post_url2); //パース処理
                        $path = explode("/", $keys['path']); //分割処理
                        $last = end($path); //最後の要素を取得
                        $data = get_page_by_path($last, OBJECT, 'post');
                        $post_id = $data->ID;
                        $date = get_the_date('Y/m/d', $post_id);
                        $title = get_the_title($post_id);
                        $category = get_the_category($post_id);
                    ?>
                    <li class="c_blogList_item">
                        <a href="<?php echo $pickup_post_url2 ?>">
                            <article>
                                <div class="c_blogList_text">
                                    <time class="c_blogList_date"><?php echo $date ?></time>
                                    <p class="c_blogList_title"><?php echo $title ?></p>
                                </div>
                                <div class="c_blogList_image">
                                    <span class="c_blogList_cat"><?php echo $category[0]->cat_name; ?></span>
                                    <?php if (has_post_thumbnail($post_id)) : ?>
                                        <?php echo get_the_post_thumbnail($post_id); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/thumbnail_noimage.jpg" alt="NO IMAGE">
                                    <?php endif; ?>
                                </div>
                            </article>
                        </a>
                    </li>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php if ( get_option('pickup_post_url3') ) : ?>
                    <?php
                        $pickup_post_url3 = get_option('pickup_post_url3') ;
                        $keys = parse_url($pickup_post_url3); //パース処理
                        $path = explode("/", $keys['path']); //分割処理
                        $last = end($path); //最後の要素を取得
                        $data = get_page_by_path($last, OBJECT, 'post');
                        $post_id = $data->ID;
                        $date = get_the_date('Y/m/d', $post_id);
                        $title = get_the_title($post_id);
                        $category = get_the_category($post_id);
                    ?>
                    <li class="c_blogList_item">
                        <a href="<?php echo $pickup_post_url3 ?>">
                            <article>
                                <div class="c_blogList_text">
                                    <time class="c_blogList_date"><?php echo $date ?></time>
                                    <p class="c_blogList_title"><?php echo $title ?></p>
                                </div>
                                <div class="c_blogList_image">
                                    <span class="c_blogList_cat"><?php echo $category[0]->cat_name; ?></span>
                                    <?php if (has_post_thumbnail($post_id)) : ?>
                                        <?php echo get_the_post_thumbnail($post_id); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/thumbnail_noimage.jpg" alt="NO IMAGE">
                                    <?php endif; ?>
                                </div>
                            </article>
                        </a>
                    </li>
                    <?php else: ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div><!-- /c_pickup -->
	</div>
</div>
<?php get_footer(); ?>