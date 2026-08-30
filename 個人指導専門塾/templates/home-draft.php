<?php get_header();
/*
Template Name: HOME(2026 Preview)
*/
// 【確認用ドラフト】docs/top-page-renewal-spec.md の内容を反映した非公開プレビュー用テンプレート。
// お客様承認後、この内容を templates/home.php に反映し、本ファイルは削除する。
?>
<?php if ( post_password_required() ) : ?>
  <div class="l_wrapper">
    <div class="l_inner" style="padding: 8rem 0;">
      <?php echo get_the_password_form(); ?>
    </div>
  </div>
  <?php get_footer(); ?>
<?php return; endif; ?>
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
  <div class="p_message _renewal">
    <div class="l_inner">
      <div class="p_message_layout">
        <div class="p_message_left">
          <div class="e_heading-wrap mb2">
            <h2 class="e_heading _large _white">
              <span class="e_heading_en">MESSAGE</span>
              <span class="e_heading_jp">指導方針</span>
            </h2>
          </div>
          <h3 class="p_message_catchCopy">頑張っているのに、<br>なぜ成績が上がらないのか。</h3>
          <p class="p_message_text">そんな悩みを抱える保護者の方へ。<br>それは、お子さんの能力や性格の問題ではありません。</p>
          <p class="p_message_lead">成績が上がらない理由は、</p>
          <p class="p_message_highlight"><span>正しい勉強のやり方を知らないだけ</span></p>
          <p class="p_message_text">だから私たちは、一人ひとりに合った学び方から指導します。</p>
          <div class="e_button _line _lineWhite">
            <a href="<?php echo esc_url( home_url( '/policy' ) ); ?>">詳しく見る</a>
          </div>
        </div>
        <div class="p_message_right">
          <ul class="p_message_stats">
            <li class="p_message_stats_item">
              <span class="p_message_stats_icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"/><path d="M22 10v6"/><path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"/></svg>
              </span>
              <p class="p_message_stats_label">指導実績</p>
              <p class="p_message_stats_number"><span>25</span>年</p>
              <p class="p_message_stats_note">地域で積み重ねた実績</p>
            </li>
            <li class="p_message_stats_item">
              <span class="p_message_stats_icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="m15.477 12.89 1.515 8.526a.5.5 0 0 1-.81.47l-3.58-2.687a1 1 0 0 0-1.197 0l-3.586 2.686a.5.5 0 0 1-.81-.469l1.514-8.526"/><circle cx="12" cy="8" r="6"/></svg>
              </span>
              <p class="p_message_stats_label">卒業生</p>
              <p class="p_message_stats_number"><span>2,350</span>名</p>
              <p class="p_message_stats_note">多くの生徒が志望校へ</p>
            </li>
            <li class="p_message_stats_item">
              <span class="p_message_stats_icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><polyline points="22 7 13.5 15.5 8.5 10.5 2 17"/><polyline points="16 7 22 7 22 13"/></svg>
              </span>
              <p class="p_message_stats_label">成績アップ率</p>
              <p class="p_message_stats_number"><span>92</span>%</p>
              <p class="p_message_stats_note">成績向上を実現！</p>
            </li>
          </ul>
          <div class="p_message_media">
            <p class="p_message_media_title">メディア掲載実績</p>
            <p class="p_message_media_note">TVや雑誌など複数のメディアでご紹介いただきました</p>
            <ul class="p_message_mediaGrid _cover">
              <?php for ($i = 1; $i <= 10; $i++): $num = str_pad($i, 2, '0', STR_PAD_LEFT); ?>
              <li class="p_message_mediaGrid_item _image">
                <picture>
                  <source srcset="<?php echo $imgUri; ?>home/media_<?php echo $num; ?>.webp" type="image/webp">
                  <img src="<?php echo $imgUri; ?>home/media_<?php echo $num; ?>.jpg" alt="">
                </picture>
              </li>
              <?php endfor; ?>
            </ul>
          </div>
          <!-- メディア掲載実績のスライダー(下部の既存p_mediaセクション)も削除せずそのまま維持しています -->
        </div>
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
  
  <div class="p_course _renewal" id="course">
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
                <dl class="p_courseTabContent_list">
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>対象者</dt>
                    <dd>定期テストで伸び悩む中学生<br>勉強のやり方が分からない生徒</dd>
                  </div>
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M2 3h20"/><path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"/><path d="m7 21 5-5 5 5"/></svg></span>指導形態</dt>
                    <dd>1対1・1対2の個別指導<br>対面中心・オンライン対応可</dd>
                  </div>
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg></span>料金の目安</dt>
                    <dd>月謝は学年・回数に応じてご案内<br>まずは無料体験でご相談ください</dd>
                  </div>
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></span>特徴・メリット</dt>
                    <dd>一人ひとりに合わせた個別カリキュラムで、正しい勉強法・テスト対策・学習習慣づくりをサポート。内申対策や受験準備にも対応。</dd>
                  </div>
                </dl>
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
                <dl class="p_courseTabContent_list">
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></span>対象者</dt>
                    <dd>勉強習慣をつけたい小学生<br>基礎学力や理解力を伸ばしたいご家庭</dd>
                  </div>
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M2 3h20"/><path d="M21 3v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3"/><path d="m7 21 5-5 5 5"/></svg></span>指導形態</dt>
                    <dd>1対1・1対2の個別指導<br>対面中心・オンライン対応可</dd>
                  </div>
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><circle cx="12" cy="12" r="10"/><path d="M16 8h-6a2 2 0 1 0 0 4h4a2 2 0 1 1 0 4H8"/><path d="M12 18V6"/></svg></span>料金の目安</dt>
                    <dd>月謝は学年・回数に応じてご相談ください</dd>
                  </div>
                  <div class="p_courseTabContent_list_item">
                    <dt><span class="p_courseTabContent_list_icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"/></svg></span>特徴・メリット</dt>
                    <dd>勉強のやり方を知ることで学習習慣づくりを重視。つまずきやすい単元を丁寧に指導し、自発的に正しい学び方を身につけます。</dd>
                  </div>
                </dl>
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