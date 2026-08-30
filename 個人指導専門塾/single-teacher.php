<?php get_header(); ?>
<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<div class="l_wrapper">
    <main class="p_teacher">
		<?php get_template_part( 'parts/subPageHeader' ); ?>
        <div class="l_inner _single mt3">
            <div class="p_teacher_header">
                <div class="p_teacher_text">
                    <h1 class="p_teacher_name"><?php the_title(); ?></h1>
                    <p class="p_teacher_school"><?php the_field('classroom'); ?></p>
                </div>
                <div class="p_teacher_thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/thumbnail_noimage.jpg" alt="NO IMAGE">
                    <?php endif; ?>
                </div>
                <p class="p_teacher_message"><?php the_field('message'); ?></p>
            </div>
        </div>
        <div class="p_teacher_profile">
            <div class="l_inner _single">
                <div class="e_heading-wrap mb3">
                    <h2 class="e_heading _white _subpage">
                        <span class="e_heading_jp">講師プロフィール</span>
                        <span class="e_heading_en">PROFILE</span>
                    </h2>
                </div>
                <dl class="c_dataList _white">
                    <div class="c_dataList_item">
                        <dt>名前</dt>
                        <dd><?php the_title(); ?>（<?php the_field('name_kana'); ?>）</dd>
                    </div>
                    <?php if(get_field('profile_favoriteSubject')): ?>
                    <div class="c_dataList_item">
                        <dt>得意科目</dt>
                        <dd><?php the_field('profile_favoriteSubject'); ?></dd>
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('profile_motto')): ?>
                    <div class="c_dataList_item">
                        <dt>座右の銘</dt>
                        <dd><?php the_field('profile_motto'); ?></dd>
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('profile_club')): ?>
                    <div class="c_dataList_item">
                        <dt>学生時代の<br>部活</dt>
                        <dd><?php the_field('profile_club'); ?></dd>
                    </div>
                    <?php endif; ?>
                    <?php if(get_field('profile_hobby')): ?>
                    <div class="c_dataList_item">
                        <dt>趣味</dt>
                        <dd><?php the_field('profile_hobby'); ?></dd>
                    </div>
                    <?php endif; ?>
                    <?php if(have_rows('profile_other')): ?>
                    <?php while(have_rows('profile_other')): the_row(); ?>
                    <div class="c_dataList_item">
                        <dt><?php the_sub_field('profile_other_title'); ?></dt>
                        <dd><?php the_sub_field('profile_other_item'); ?></dd>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </dl>
            </div>
        </div>
        <div class="p_teacher_interview">
            <div class="l_inner _single">
                <div class="e_heading-wrap mb3">
                    <h2 class="e_heading _pink _subpage">
                        <span class="e_heading_jp">インタビュー</span>
                        <span class="e_heading_en">INTERVIEW</span>
                    </h2>
                </div>
                <div class="c_singleContent_main">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php if(get_field('classroom_url')): ?>
        <div class="p_teacher_schoolList">
            <div class="l_inner">
                <div class="e_heading-wrap mb2">
                    <h2 class="e_heading _pink _subpage">
                        <span class="e_heading_jp"><?php the_title(); ?> 講師が<br>在籍している教室</span>
                        <span class="e_heading_en">SCHOOL</span>
                    </h2>
                </div>
                <?php $acf_post_objects = get_field('classroom_url'); if( $acf_post_objects ): ?>
                <ul class="c_schoolList">
                    <?php foreach( $acf_post_objects as $post): // ループの開始 ?>
                    <?php setup_postdata($post); // 重要！ setup_postdata でポストオブジェクトを呼び出します ?>
                    <li class="c_schoolList_item">
                        <a href="<?php the_permalink(); ?>">
                            <article>
                                <div class="c_schoolList_text">
                                    <p class="c_schoolList_title"><?php the_title(); ?></p>
                                    <p class="c_schoolList_address">〒<?php the_field('zipcode'); ?><br><?php the_field('address'); ?></p>
                                    <div class="e_button _line _lineWhite _center">
                                        <span>詳しく見る</span>
                                    </div>
                                </div>
                                <div class="c_schoolList_image">
                                    <span class="c_schoolList_cat">
                                        <?php $terms = get_the_terms($post->ID,'area');
                                        foreach( $terms as $term ) {
                                            echo $term->name ;
                                        }
                                        ?>
                                    </span>
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else: ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/common/thumbnail_sample.jpg" alt="NO IMAGE">
                                    <?php endif; ?>
                                </div>
                            </article>
                        </a>
                    </li>
                    <?php endforeach; // ループの終了 ?>
                </ul>
                <?php wp_reset_postdata(); // ページの残りの部分は正常に動作するように、ポストオブジェクトをリセットします ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
    </main>
    <?php
        $current_post_id = get_the_ID();
        $args = array(
        'post_type' => 'teacher', // 投稿タイプのスラッグを指定
        'posts_per_page' => 8, // 投稿件数の指定
        'orderby' => 'rand',
        'post__not_in' => [$current_post_id], // 除外する記事のIDを指定
        );
        $teracher_query = new WP_Query($args); if($teracher_query->have_posts()):
    ?>
    <ul class="c_teacherList">
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
</div>
<?php get_footer();?>