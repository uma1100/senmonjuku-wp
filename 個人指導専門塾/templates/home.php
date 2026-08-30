<?php get_header();
/*
Template Name: HOME
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<div class="l_wrapper js-wrapper">
<?php /*
  <div class="p_mv">
    <div class="p_mv_text">
      <h1 class="p_mv_catchCopy">
        <span class="js-mv-visible">勉強の</span><br>
        <span class="js-mv-visible">やり方が変われば</span><br>
        <span class="js-mv-visible">結果が変わる</span>
      </h1>
    </div>
    <?php if ( get_option('important_notices_url') ) : ?>
      <?php
        $important_notices_url = get_option('important_notices_url') ;
        $keys = parse_url($important_notices_url); //パース処理
        $path = explode("/", $keys['path']); //分割処理
        $last = end($path); //最後の要素を取得
        $data = get_page_by_path($last, OBJECT, 'news');
        $post_id = $data->ID;
        $date = get_the_date('Y/m/d', $post_id);
      ?>
	  
      <div class="c_newsList_item _note">
        <a href="<?php echo $important_notices_url ?>">
          <article>
            <p class="c_newsList_date"><?php echo $date ?></p>
            <p class="c_newsList_title"><?php echo get_the_title(url_to_postid($important_notices_url)) ?></p>
          </article>
          </a>
      </div>
	  
      <?php else: ?>
    <?php endif; ?>
    <div class="p_mv_bg">
      <picture>
          <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>home/xl_mainvisual_bg.webp" type="image/webp">
          <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>home/xl_mainvisual_bg.jpg">
          <source srcset="<?php echo $imgUri; ?>home/sm_mainvisual_bg.webp" type="image/webp">
          <img src="<?php echo $imgUri; ?>home/sm_mainvisual_bg.jpg">
        </picture>
    </div>
  </div>
  */ ?>
  <?php if(have_rows('banner_slider')): ?>
  <div class="p_bannerSlider">
    <div class="swiper js-bannerSlider">
      <div class="swiper-wrapper">
        <?php while(have_rows('banner_slider')): the_row(); ?>
        <div class="swiper-slide">
          <a href="<?php the_sub_field('url'); ?>">
            <img src="<?php the_sub_field('image'); ?>" alt="">
          </a>
        </div>
        <?php endwhile; ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div><!-- /p_bannerSlider -->
  <?php /* 
  <div class="p_bannerSlider">
    <div class="l_inner p_bannerSlider_inner">
      <?php while(have_rows('banner_slider')): the_row(); ?>
      <div class="swiper-slide">
        <a href="<?php the_sub_field('url'); ?>">
          <img src="<?php the_sub_field('image'); ?>" alt="">
        </a>
      </div>
      <?php endwhile; ?>
    </div>
  </div><!-- /p_bannerSlider -->
  */ ?>
  <?php endif; ?>
  <br />
  <div class="p_message">
    <div class="l_inner">
      <div class="e_heading-wrap mb2">
        <h2 class="e_heading _large _white">
          <span class="e_heading_en">MESSAGE</span>
          <span class="e_heading_jp">指導方針</span>
        </h2>
      </div>
      <h3 class="p_message_catchCopy">学校でも教えてくれない<br><span>正しい勉強のやり方</span>を<br>指導する塾です。</h3>
      <p class="p_message_text">お子さんの勉強ができないのは、<br>お子さんの能力が低いとか、<br>性格の問題ではありません！<br>成績が上がらない理由は<br>勉強のやり方と続け方を知らないだけ！！</p>
      <div class="e_button _line _lineWhite">
        <a href="<?php echo esc_url( home_url( '/policy' ) ); ?>">詳しく見る</a>
      </div>
    </div>
  </div><!-- /p_message -->  
    <div class="p_news">
    <div class="l_inner">
      <div class="e_heading-wrap mb3">
        <h2 class="e_heading _large _pink">
          <span class="e_heading_en">NEWS</span>
          <span class="e_heading_jp">新着情報</span>
        </h2>
      </div>
      <?php
        $args = array(
          'post_type' => 'news', // 投稿タイプのスラッグを指定
          'posts_per_page' => 3 // 投稿件数の指定
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
      <div class="e_button _line _linePink _center">
        <a href="<?php echo esc_url( home_url( '/news' ) ); ?>">他のお知らせを見る</a>
      </div>
      <?php else: ?>
      <p>まだ投稿がありません。</p>
      <?php endif; ?>
    </div>
  </div><!-- /p_news -->
  
  <div class="p_course" id="course">
    <div class="p_course_top js-bgChange">
      <div class="l_inner">
        <div class="e_heading-wrap mb2">
          <h2 class="e_heading _large">
            <span class="e_heading_en">COURSE</span>
            <span class="e_heading_jp">コース紹介</span>
          </h2>
        </div>
        <h3 class="e_heading_message">学年に合わせて<br>楽しく学べるカリキュラムを<br>ご用意しています。</h3>
        <div class="p_courseTab">
          <div class="p_courseTabButton flex">
            <button class="p_courseTabButton_item _school _active js-tabButton">中学生コース</button>
            <button class="p_courseTabButton_item _schoolchild js-tabButton">小学生コース</button>
          </div>
          <div class="p_courseTabContent-wrap">
            <div class="p_courseTabContent js-tabContent _show _pink">
              <div class="p_courseTabContent_image">
                <picture>
                  <source srcset="<?php echo $imgUri; ?>/home/course_school.webp" type="image/webp">
                  <img src="<?php echo $imgUri; ?>/home/course_school.jpg">
                </picture>
              </div>
              <div class="p_courseTabContent_text">
                <h4>中学生コース</h4>
                <p>個人指導専門塾ではお子さま一人一人に合わせた個別カリキュラムで正しい勉強のやり方を指導し、子どもたちを変え、勉強好きに導きます。</p>
              </div>
              <div class="e_button _line _lineBlack _center">
                <a href="<?php echo esc_url( home_url( '/course/school' ) ); ?>">詳しく見る</a>
              </div>
            </div>
            <div class="p_courseTabContent js-tabContent _blue">
              <div class="p_courseTabContent_image">
                <picture>
                  <source srcset="<?php echo $imgUri; ?>/home/course_schoolchild.webp" type="image/webp">
                  <img src="<?php echo $imgUri; ?>/home/course_schoolchild.jpg">
                </picture>
              </div>
              <div class="p_courseTabContent_text">
                <h4>小学生コース</h4>
                <p>小学生の勉強には「勉強のやり方を知ること」「学習習慣を身につけること」これらが大切です。間違った自己流を身につけてしまう前に、正しい勉強のやり方を身につけてあげませんか？</p>
              </div>
              <div class="e_button _line _lineBlack _center">
                <a href="<?php echo esc_url( home_url( '/course/schoolchild' ) ); ?>">詳しく見る</a>
              </div>
            </div>
          </div>
        </div>
      <?php// get_template_part( 'parts/ctaBannar' ); ?>
      </div>
    </div>
  <?php
  $args = array(
    'post_type' => 'voice', // 投稿タイプのスラッグを指定
    'meta_key' => 'toppage_check', //カスタムフィールドのキー(フィールド名部分)
    'meta_value' => 'true', //カスタムフィールドの値（「red : 赤」の「red」部分）
    'meta_compare' => 'LIKE'
  );
  $voice_query = new WP_Query($args); if($voice_query->have_posts()):
  ?>
  <div class="p_voice">
    <div class="l_xlCol2">
      <div class="l_xlCol2_left">
        <div class="e_heading-wrap mb2">
          <h2 class="e_heading _large _pink">
            <span class="e_heading_en">VOICE</span>
            <span class="e_heading_jp">生徒・保護者からの喜びの声</span>
          </h2>
        </div>
        <h3 class="e_heading_message _pink">これまでに<br>たくさんの生徒・保護者の方から<br>喜びの声をいただいています</h3>
      </div>
      <div class="l_xlCol2_right">
        <div class="p_voiceSlider">
          <div class="swiper js-voiceSlider">
            <div class="swiper-wrapper">
              <?php while ($voice_query->have_posts()): $voice_query->the_post(); ?>
              <div class="swiper-slide">
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
                  <?php the_field('excerpt'); ?>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="p_voiceSlider_navigation">
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div><!-- /p_voiceSlider -->
        <div class="e_button _pink _center">
          <a href="<?php echo esc_url( home_url( '/voice' ) ); ?>">もっと見る</a>
        </div>
      </div>
    </div>
    <?php else: ?>
    <?php endif; ?>
  </div><!-- /p_voice -->
      <div class="p_course_bottom" id="p_course_other">
      <div class="l_inner">
        <h3 class="e_heading_message _medium mb3">他にも特別なコースを<br>ご用意しております。</h3>
        <?php if(have_rows('course_otherSmall')): ?>
        <ul class="p_courseOtherSmallList grid">
          <?php while(have_rows('course_otherSmall')): the_row(); ?>
          <li class="p_courseOtherSmallList_item" style="background-image: url(<?php the_sub_field('image'); ?>)">
            <a href="<?php the_sub_field('url'); ?>" target="_blank">
              <p><?php the_sub_field('name'); ?></p>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
        <?php if(have_rows('course_otherBig')): ?>
        <ul class="p_courseOtherBigList grid">
          <?php while(have_rows('course_otherBig')): the_row(); ?>
          <li class="p_courseOtherBigList_item">
            <a href="<?php the_sub_field('url'); ?>" target="_blank">
              <img src="<?php the_sub_field('image'); ?>" alt="">
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </div><!-- /p_course -->
  <div class="p_movie">
    <div class="l_inner">
      <div class="e_heading-wrap mb3">
        <h2 class="e_heading _large _pink">
          <span class="e_heading_en">MOVIE</span>
          <span class="e_heading_jp">個人指導専門塾</span>
        </h2>
      </div>
      <video controls src="<?php echo $imgUri; ?>home/movie.mp4" poster="https://senmonjuku.com/wp-content/uploads/2024/05/video_poster-scaled.jpg"></video>
    </div>
  </div>
  <div class="p_school">
    <div class="p_school_top">
      <picture>
        <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>home/xl_school_image.webp" type="image/webp">
        <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>home/xl_school_image.jpg">
        <source srcset="<?php echo $imgUri; ?>/home/sm_school_image.webp" type="image/webp">
        <img src="<?php echo $imgUri; ?>/home/sm_school_image.jpg">
      </picture>
    </div>
    <div class="l_inner">
      <div class="e_heading-wrap mb2">
        <h2 class="e_heading _large _white">
          <span class="e_heading_en">SCHOOL</span>
          <span class="e_heading_jp">教室紹介</span>
        </h2>
      </div>
      <h3 class="e_heading_message _white mb3">勉強のやり方が身につく学習塾を愛知・岐阜に展開</h3>
      <ul class="c_schoolBannerList mb3">
      <?php
        $args = array(
          'orderby' => 'count',
          'order' => 'desc',
			'number' => 4
        );
        $terms = get_terms('area', $args);
        foreach ( $terms as $term ):
          $term_id = $term->term_id;
          $term_image = get_field('category_image','category'.'_'.$term_id);
      ?>
        <li class="c_schoolBannerList_item" style="background-image: url(<?php echo $term_image; ?>);">
          <a href="./area/<?php echo $term->slug; ?>/">
            <p class="c_schoolBannerList_text"><?php echo $term->name; ?>でお探しの方</p>
            <span class="c_schoolBannerList_number"><?php echo $term->count; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
      </ul>
      <div class="e_button _line _lineWhite _center">
        <a href="<?php echo esc_url( home_url( '/school' ) ); ?>">校舎一覧を見る</a>
      </div>
    </div>
  </div><!-- /p_school -->
  <div class="p_blog">
    <div class="l_inner">
      <div class="e_heading-wrap mb3">
        <h2 class="e_heading _pink _large">
          <span class="e_heading_en">BLOG</span>
          <span class="e_heading_jp">新着ブログ</span>
        </h2>
      </div> 
      <?php
        $args = array(
          'post_type' => 'post', // 投稿タイプのスラッグを指定
          'posts_per_page' => 3 // 投稿件数の指定
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
		<div class="e_button _line _linePink _center mt3">
      <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">他のブログを見る</a>
    </div>
    </div>
  </div><!-- /p_blog -->
	<?php /*
  <div class="p_pickup">
    <div class="l_inner">
      <div class="e_heading-wrap mb3">
        <h2 class="e_heading _pink _large">
          <span class="e_heading_en">PICK UP</span>
          <span class="e_heading_jp">人気記事</span>
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
		  div class="e_button _line _linePink _center mt3">
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">他のブログを見る</a>
      </div>
    </div>
  </div><!-- /p_pickup -->
  */ ?>
  <div class="p_media">
    <div class="l_inner">
      <div class="e_heading-wrap mb2">
        <h2 class="e_heading _pink _large">
          <span class="e_heading_en">MEDIA</span>
          <span class="e_heading_jp">メディア掲載実績</span>
        </h2>
      </div>
      <h3 class="e_heading_message _pink mb3">TVや雑誌など<br>複数のメディアで<br>ご紹介いただきました</h3>
    </div>
    <div class="p_mediaSlider">
      <div class="swiper js-mediaSliderLeft">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_01.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_01.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_02.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_02.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_03.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_03.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_04.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_04.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_05.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_05.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_06.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_06.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_07.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_07.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_08.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_08.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_09.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_09.jpg">
            </picture>
          </div>
          <div class="swiper-slide">
            <picture>
              <source srcset="<?php echo $imgUri; ?>home/media_10.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>home/media_10.jpg">
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /p_media -->
	<?php /*
  <div class="p_contact">
    <div class="l_inner">
      <div class="e_heading-wrap mb3">
        <h2 class="e_heading _large">
          <span class="e_heading_en">CONTACT</span>
          <span class="e_heading_jp">各種お問い合わせ</span>
        </h2>
      </div>
      <ul class="c_contactList flex">
        <li class="c_contactList_item _line">
          <a href="https://line.me/R/ti/p/%40203ijfkj">
            <picture>
              <source srcset="<?php echo $imgUri; ?>common/contact_banner_line.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>common/contact_banner_line.png">
            </picture>
          </a>
        </li>
        <li class="c_contactList_item _form">
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
          <div class="c_contactList_icon">
            <img src="<?php echo $imgUri; ?>common/contact_icon_mail_black.svg" alt="メールのアイコン">
          </div>
          <p class="c_contactList_text">フォームでのお問い合わせはこちら</p>
          </a>
        </li>
        <li class="c_contactList_item _tel">
          <a href="tel:0120-187-703">
            <div class="c_contactList_icon">
              <img src="<?php echo $imgUri; ?>common/contact_icon_phone_black.svg" alt="メールのアイコン">
              <p>0120-187-703</p>
            </div>
            <p class="c_contactList_text">お電話でのお問い合わせはこちらをタップ！</p>
          </a>
        </li>
      </ul>
      <?php // get_template_part( 'parts/ctaBannar' ); ?>
    </div>
  </div><!-- /p_contact -->
  */ ?>
</div>
<?php get_footer();?>