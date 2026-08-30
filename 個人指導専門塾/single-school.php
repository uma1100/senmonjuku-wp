<?php get_header(); ?>
<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<div class="l_wrapper">
    <div class="c_single">
        <?php get_template_part( 'parts/subPageHeader' ); ?>
        <div class="p_school">
            <div class="p_school_header">
                <div class="p_school_thumbnail">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/image/school/school_no-image.png" alt="NO IMAGE">
                    <?php endif; ?>
                </div>
                <span class="p_school_cat">
                    <?php $terms = get_the_terms($post->ID,'area');
                    foreach( $terms as $term ) {
                        echo $term->name ;
                    }
                    ?>
                </span>        
            </div>
            <main class="p_school_main">
                <div class="l_inner _single">
                    <h1 class="p_school_title"><span><?php the_field('area'); ?></span><?php the_title(); ?></h1>
                    <div class="l_xlCol2 mb5 flex">
                        <div class="l_xlCol2_left">
                            <div class="p_school_map">
                                <iframe src="<?php the_field('googlemap_iframe'); ?>" width="16" height="9" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <p class="p_school_address">〒<?php the_field('zipcode'); ?><br><?php the_field('address'); ?></p>
                            <div class="p_school_mapButton">
                                <a href="<?php the_field('googlemap_link'); ?>" target="_blank">GoogleMapで開く</a>
                            </div>
                        </div>
                        <div class="l_xlCol2_right">
                            <dl class="c_dataList">
                                <div class="c_dataList_item">
                                    <dt>電話番号</dt>
                                    <dd>
                                        <?php if(get_field('tel')): ?>
                                            <a href="tel:<?php the_field('tel'); ?>"><?php the_field('tel'); ?></a>
                                        <?php else : ?>
                                            <a href="tel:0120-187-703">0120-187-703</a>
                                        <?php endif; ?>
                                    </dd>
                                </div>
                                <div class="c_dataList_item">
                                    <dt>通塾学区<br>（小学校）</dt>
                                    <dd><?php the_field('schoolArea_schoolchild'); ?></dd>
                                </div>
                                <div class="c_dataList_item">
                                    <dt>通塾学区<br>（中学校）</dt>
                                    <dd><?php the_field('schoolArea_school'); ?></dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                    <?php if(have_rows('access')): ?>
                    <div class="p_school_accsess mb5">
                        <div class="e_heading-wrap mb2">
                            <h2 class="e_heading _pink _subpage">
                                <span class="e_heading_jp">アクセス</span>
                                <span class="e_heading_en">ACCESS</span>
                            </h2>
                        </div>
                        <dl class="c_dataList _column">
                            <?php while(have_rows('access')): the_row(); ?>
                            <div class="c_dataList_item">
                                <dt><?php the_sub_field('access_title'); ?></dt>
                                <dd><?php the_sub_field('access_item'); ?></dd>
                            </div>
                            <?php endwhile; ?>
                        </dl>
                    </div>
                    <?php endif; ?>
                    <div class="mb5">
                        <?php get_template_part( 'parts/ctaBannar' ); ?>
                    </div>
                </div>
            </main>
            <div class="p_school_other">
                <div class="l_inner">
                    <div class="e_heading-wrap mb2">
                        <h2 class="e_heading _pink _subpage">
                            <span class="e_heading_jp"><?php echo $term->name ; ?>の他の教室</span>
                            <span class="e_heading_en">OTHER SCHOOL</span>
                        </h2>
                    </div>
                    <?php
                        $current_post_id = get_the_ID();
                        $args = array(
                        'post_type' => 'school', // 投稿タイプのスラッグを指定
                        'posts_per_page' => 3, // 投稿件数の指定
                        'orderby' => 'rand',
                        'post__not_in' => [$current_post_id], // 除外する記事のIDを指定
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'area',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                        );
                        $school_query = new WP_Query($args); if($school_query->have_posts()):
                    ?>
                    <ul class="c_schoolList">
                        <?php while ($school_query->have_posts()): $school_query->the_post(); ?>
                        <li class="c_schoolList_item">
                            <a href="<?php the_permalink(); ?>">
                                <article>
                                    <div class="c_schoolList_text">
                                        <p class="c_schoolList_title"><?php echo get_the_title(); ?></p>
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
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/school/school_no-image.png" alt="NO IMAGE">
                                        <?php endif; ?>
                                    </div>
                                </article>
                            </a>
                        </li>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </ul>
                    <?php else: ?>
                    <p>他の校舎はまだありません。</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>