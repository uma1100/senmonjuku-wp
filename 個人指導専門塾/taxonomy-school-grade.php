<?php get_header(); ?>
<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
	<div class="c_archive">
	<div class="l_inner">
			<div class="c_archive_search mb2">
			<?php
				$taxonomy_slug = 'school-grade'; // タクソノミーのスラッグを指定
				$terms = get_terms($taxonomy_slug); // タームの取得
				$current_term = single_term_title("", false);
				if( $terms && !is_wp_error($terms) ){ // タームがあれば表示
					echo '<select name="select" onChange="location.href=value;">'; // option の value 値を URL とする
					echo '<option>'.$current_term.'</option>'; // 必要がなければこの行は削除
					echo '<option value="'.esc_url( home_url( '/voice' ) ).'">すべて</option>';
					foreach ( $terms as $value ) { // 配列の繰り返し
						echo '<option value="'.get_term_link($value->slug,$taxonomy_slug).'">'.esc_html($value->name).'</option>'; // タームのURLとタイトルを表示
					}
					echo '</select>';
				}
			?>
			</div>
			<?php
				$paged = get_query_var('paged') ? get_query_var('paged') : 1;
				$page_object = get_queried_object();
				$args = array(
					'post_type' => 'voice',
					'tax_query' => array(
						array(
							'taxonomy' => 'school-grade',
							'field' => 'slug',
							'terms' => $page_object->slug,
						),
					),
					'posts_per_page' => 12, // 表示する数
					'paged' => $paged,
				);
				$voice_query = new WP_Query($args); if($voice_query->have_posts()):
			?>
			<div class="c_voiceList">
                <?php while ($voice_query->have_posts()): $voice_query->the_post(); ?>
                <div class="c_voiceList_item">
                  <div class="c_voiceList_header flex">
                    <div class="c_voiceList_icon">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                      <img src="<?php echo $imgUri; ?>/common/voice_icon_noimage.png" alt="">
                    <?php endif; ?>
                    </div>
                    <p class="c_voiceList_name"><?php the_field('student_name'); ?></p>
                    <p class="c_voiceList_title"><?php the_title(); ?></p>
                  </div>
                  <div class="c_voiceList_text">
                    <?php the_content(); ?>
                  </div>
                  <?php if(get_field('message_image')): ?>
                  <div class="c_voiceList_image">
                    <img src="<?php the_field('message_image'); ?>" alt="">
                  </div>
                  <?php endif; ?>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                </div>
            </div>
			<?php else: ?>
			<p>まだ投稿がありません。</p>
			<?php endif; ?>
			<?php
				$count_posts = wp_count_posts('voice');
				$published_posts = $count_posts->publish;
				if ($published_posts >= 12):
			?>
			<div class="c_pageNavi mt3">
				<?php wp_pagenavi(); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>