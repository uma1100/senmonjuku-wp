<?php get_header();
/*
Template Name: コース紹介（個人指導専門塾プレミアム）
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<div class="l_wrapper" style="--mainColor: #ECECEC">
  <div class="p_course">  
    <div class="p_premium">
      <div class="p_mv">
        <ul class="c_breadcrumbsList flex">
          <?php 
            if(function_exists('bcn_display')){
              bcn_display();
            }
          ?>
        </ul>
        <div class="p_mv_text">
        <p class="p_mv_supplement">短期間で生徒の学力を最大限に。</p>
          <h1><span>個人指導専門塾</span><span>プレミアム</span></h1>
          <p>専任トレーナーが目標到達に向けて<br>化学的な学習法で学力を伸ばします。</p>
        </div>
        <div class="p_cta">
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせはこちら</a>
        </div>
        <div class="p_mv_bg">
          <picture>
            <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>/course/sm_course_mv_premium.jpg">
            <img src="<?php echo $imgUri; ?>/course/sm_course_mv_premium.jpg">
          </picture>
        </div>
      </div>
      <div class="p_question" >
        <h2>いろんな塾を見たけど<br>どこが良いのか悩んでいる<br>保護者様へ</h2>
        <p>こんなお悩みありませんか？</p>
        <ul class="p_questionList">
          <li class="p_questionList_item">学習管理は全て任せたい</li>
          <li class="p_questionList_item">自宅での勉強もサポートしてほしい</li>
          <li class="p_questionList_item">高学歴の先生に教えてもらいたい</li>
          <li class="p_questionList_item">受験まで日数がないから<br>短期間で成果を出してほしい</li>
          <li class="p_questionList_item">家で勉強する習慣がない子供が心配</li>
        </ul>
      </div>
      <div class="p_recommend">
        <h2>一つでも当てはまったら<br>当塾の無料体験授業を<br>おすすめします！</h2>
        <p>個人指導専門塾プレミアムは、
          <br>ただの「個別指導塾」ではありません。
          <br>生徒一人ひとりに
          <br>専任のトレーナーがついて、
          <br>目標到達に向けて
          <br>学力を伸ばしていくために、
          <br>科学的な学習法を取り入れています。
          <br><br>専任のトレーナーはより効果的で
          <br>無駄のない学習メニューを設定し、
          <br>自己学習のサポート、目標到達に向けて
          <br>集中して学力を引き上げる指導を行います。
        </p>
        <div class="p_cta _white">
          <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせはこちら</a>
        </div>
      </div>
      <div class="p_message">
        <p>短期間で受験を突破するための
          <br>学力を身につけるには
        </p>
        <p class="bg"><span>基礎学習を徹底する</span></p>
        <p class="bg"><span>集中して苦手分野を<br>克服するための指導</span></p>
        <p>この2つのことが大切です</p>
        <p>個人指導専門塾プレミアムでは
          <br>受験勉強に関して、専門のスキルを
          <br>持ち合わせた専任のトレーナーが
          <br>生徒ひとりひとりのレベルに合わせて
          <br>勉強をサポートしていきます。
        </p>
      </div>
      <div class="p_feature-wrap">
        <div class="p_feature">
          <div class="p_feature_heading">
            <h2>個人指導専門塾<br>プレミアムの<br><span><span class="_big">3</span>つの特徴</span></h2>
          </div>
          <div class="p_featureList">
            <div class="p_featureList_item">
              <div class="p_featureList_heading">
                <h3><span>パーソナルトレーナー制</span>を<br>導入した学習塾</h3>
                <p>FEATURE1</p>
              </div>
              <div class="p_featureList_main">
                <img src="<?php echo $imgUri; ?>/course/premium_feature_image_01.jpg" alt="">
                <p>当塾は生徒一人に対して一人のパーソナルトレーナーが付きます。
                  <br>どうせなら短期間で効率的に
                  <br><span class="color">“成績を伸ばしたい！”</span>
                  <br><span class="color">“志望校に合格したい！”</span>
                  <br>という方は、科学的な手法を導入した個人指導専門塾プレミアムで学んでいただきたいです。
                </p>
              </div>
            </div>
            <div class="p_featureList_item">
              <div class="p_featureList_heading">
                <h3><span>現役名大生を含む受験のプロ</span>が<br>学習計画を立案</h3>
                <p>FEATURE2</p>
              </div>
              <div class="p_featureList_main">
                <img src="<?php echo $imgUri; ?>/course/premium_feature_image_02.jpg" alt="">
                <p>これまでに難関校を突破してきた現役名大生を含む受験のプロが専任トレーナーとして学習計画を立案します。志望校に合格するために自宅学習のサポートも担います。</p>
                <ul>
                  <li>週に1回授業以外でのオンライン通話で学習状況の確認</li>
                  <li>自宅学習用の課題プリントをご用意</li>
                  <li>何曜日に何をどれくらい勉強するのかがわかるようにスケジュール表を作成</li>
                  <li>月間の計画</li>
                  <li>習慣の計画・毎日の計画</li>
                </ul>
              </div>
            </div>
            <div class="p_featureList_item">
              <div class="p_featureList_heading">
                <h3><span>行動科学メソッド</span>を導入した<br>トレーニング</h3>
                <p>FEATURE2</p>
              </div>
              <div class="p_featureList_main">
                <img src="<?php echo $imgUri; ?>/course/premium_feature_image_03.jpg" alt="">
                <p>名大生をはじめとする、すでに結果が証明されている効率的な勉強法を分析し、生徒一人ひとりに合う勉強法をトレーナーが指導します。
                  <br>個人指導専門塾プレミアムは行動科学マネジメント研究所が監修している日本で唯一無二の学習塾です。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="p_bottom">
        <div class="l_inner">
          <div class="p_cta">
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">お問い合わせはこちら</a>
          </div>
          <div class="p_bottom_movie">
            <p>子どもの成績があがる秘密を<br>動画でも説明しています</p>
            <iframe width="16" height="9" src="https://www.youtube.com/embed/fv7c_lPUC_E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
          <div class="e_ctaBannar">
              <a href="">
                <picture>
                  <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/xl_無料体験バナー.webp" type="image/webp">
                  <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/xl_無料体験バナー.jpg">
                  <source srcset="<?php echo $imgUri; ?>/common/無料体験バナー.webp" type="image/webp">
                  <img src="<?php echo $imgUri; ?>/common/無料体験バナー.jpg">
                </picture>
              </a>
            </div>
        </div>
      </div>
    </div>
  </div>
  <style>
    @media screen and (min-width: 1280px){
      .p_course::before{
        opacity: 0.8;
      }
    }
    .p_premium{
      color: #453E3E;
      font-family: fot-tsukuaoldmin-pr6n, sans-serif;
      font-weight: 300;
      font-style: normal;
      letter-spacing: 0.1em;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_mv{
        text-align: center;
      }
    }
    .p_premium .p_mv .c_breadcrumbsList{
      background-color: transparent;
    }
    .p_premium .p_mv .c_breadcrumbsList_item{
      font-family: 'Noto Sans JP', sans-serif;
    }
    .p_premium .p_mv .c_breadcrumbsList_item  span{
      color: #453E3E;
    }
    .p_premium .p_mv .c_breadcrumbsList_item:after {
      color: #453E3E;
    }
    .p_premium .p_mv_text .p_mv_supplement{
      margin-bottom: 0.8rem;
      color: #453E3E;
      font-size: 1.8rem;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_mv_text .p_mv_supplement{
        margin-bottom: 1.6rem;
        font-size: 4rem;
      }
    }
    .p_premium .p_mv_text h1{
      font-weight: 300;
      letter-spacing: 0.15em;
    }
    .p_premium .p_mv_text h1 span{
      display: inline-block;
      margin-bottom: 1rem;
      padding: 0.3rem 0.5rem 0.3rem 0.7rem;
      background-color: #453E3E;
    }
    .p_premium .p_mv_text h1 span:last-of-type{
      margin-bottom: 0;
    }
    .p_premium .p_mv_text p{
      color: #453E3E;
    }
    .p_premium .p_mv_bg:before {
      display: none;
    }
    .p_premium .p_question{
      width: calc(var(--vw, 1vw) * 84);
      margin: 0 auto;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_question{
        width: 100%;
        padding: 6rem 8rem;
        background-color: #FFF;
      }
    }
    .p_premium .p_question h2 {
      margin-bottom: 3.8rem;
      font-size: 2.2rem;
      line-height: 2em;
      text-align: left;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_question h2 {
        margin-bottom: 7.6rem;
        font-size: 4.4rem;
        text-align: center;
      }
    }
    .p_premium .p_question p {
      margin-bottom: 1.6rem;
      font-size: 1.6rem;
      line-height: 1;
      text-align: center;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_question p {
        margin-bottom: 3.2rem;
        font-size: 3.2rem;
      }
    }
    .p_premium .p_questionList {
      display: flex;
      flex-direction: column;
      row-gap: 1.6rem;
      height: auto;
      padding: 2.4rem;
      background-color: var(--mainColor);
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_questionList {
        row-gap: 3.2rem;
        padding: 4.8rem;
      }
    }
    .p_premium .p_questionList_item{
      position: relative;
      display: block;
      padding-left: calc(1.6rem + 0.6rem);
      font-size: 1.4rem;
      white-space: nowrap;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_questionList_item{
        padding-left: calc(3.2rem + 1.2rem);
        font-size: 2.8rem;
      }
    }
    .p_premium .p_questionList_item::before{
      content: "";
      display: inline-block;
      position: absolute;
      z-index: 1;
      top: 0.8rem;
      left: 0.4rem;
      width: 0.9rem;
      height: 0.6rem;
      background-image: url(<?php echo $imgUri; ?>/common/check_icon.svg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: contain;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_questionList_item::before{
        top: 1.6rem;
        left: 0.8rem;
        width: 1.8rem;
        height: 1.2rem;
      }
    }
    .p_premium .p_questionList_item::after{
      content: "";
      position: absolute;
      top: 0.3rem;
      left: 0;
      display: inline-block;
      width: 1.6rem;
      height: 1.6rem;
      border-radius: 50%;
      background-color: #453E3E;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_questionList_item::after{
        top: 0.6rem;
        width: 3.2rem;
        height: 3.2rem;
      }
    }
    .p_premium .p_questionList_item:nth-of-type(1),
    .p_premium .p_questionList_item:nth-of-type(2),
    .p_premium .p_questionList_item:nth-of-type(3),
    .p_premium .p_questionList_item:nth-of-type(4),
    .p_premium .p_questionList_item:nth-of-type(5){
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
    }
    .p_premium .p_questionList_item:nth-of-type(5){
      transform: translateX(0);
    }
    .p_premium .p_recommend h2{
      color: #453E3E;
    }
    .p_premium .p_recommend p{
      width: calc(var(--vw, 1vw) * 84);
      margin: 0 auto;
      color: #453E3E;
      font-size: 1.4rem;
      font-family: 'Noto Sans JP', sans-serif;
      font-weight: 500;
      text-align: left;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_recommend p{
        width: calc(100% - 16rem);
        font-size: 2.8rem;
      }
    }
    .p_premium .p_message{
      width: calc(var(--vw, 1vw) * 84);
      margin: 0 auto;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_message{
        width: 100%;
        padding: 15rem 8rem 8rem;
      }
    }
    .p_premium .p_message p{
      font-family: 'Noto Sans JP', sans-serif;
      font-weight: 500;
      text-align: left;
      line-height: 2em;
    }
    .p_premium .p_message p.bg span{
      color: #453E3E;
      font-family: fot-tsukuaoldmin-pr6n, sans-serif;
    }
    .p_premium .p_feature_heading{
      border-radius: 0;
      background-color: var(--mainColor);
    }
    .p_feature_heading:before {
      border-radius: 0;
    }
    .p_premium .p_feature_heading h2{
      color: #453E3E;
      font-weight: 300;
    }
    .p_premium .p_featureList_heading p {
      position: relative;
      z-index: 1;
      margin-bottom: 1.2rem;
      padding-bottom: 5.4rem;
      color: #453E3E;
      font-size: 3.2rem;
      font-family: fot-tsukuaoldmin-pr6n, sans-serif;
      letter-spacing: .05em;
      line-height: 1;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_featureList_heading p {
        margin-bottom: 2.4rem;
        padding-bottom: 10.8rem;
        font-size: 6.4rem;
      }
    }
      
    .p_premium .p_featureList_main p,
    .p_premium .p_featureList_main a,
    .p_premium .p_featureList_main ul li,
    .p_premium .p_featureList_main ol li{
      font-family: 'Noto Sans JP', sans-serif;
      font-weight: 500;
    }
    .p_premium .p_featureList_main p{
      line-height: 2.4em;
    }
    .p_premium .p_featureList_main p.color,
    .p_premium .p_featureList_main p span.color{
      color: #d5546a;
    }
    .p_premium .p_featureList_main h4{
      display: inline-block;
      margin-top: 1.2rem;
      margin-bottom: 0.6rem;
      padding: 0.3rem 0.2rem 0.4rem 0.8rem;
      background-color: var(--mainColor);
      font-size: 1.4rem;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_featureList_main h4{
        margin-top: 2.4rem;
        margin-bottom: 1.2rem;
        padding: 0.6rem 0.4rem 0.8rem 1.6rem;
        font-size: 2.8rem;
      }
    }
    .p_premium .p_featureList_main ul li:after,
    .p_premium .p_featureList_main ol li:after {
      background-color: #453E3E;
    }
    .p_premium .p_featureList_main a{
      color: #d5546a;
      text-decoration: underline;
    }
    .p_premium .p_featureList_main a._right{
      display: block;
      text-align: right;
    }
    .p_premium .p_cta a {
      max-width: calc((var(--vw, 1vw) * 100) - 6rem);
      border-radius: 0;
      background-color: #453E3E;
      font-family: 'Noto Sans JP', sans-serif;
      font-weight: 700;
    }
    .p_premium .p_cta a::before {
      border-radius: 0;
    }
    .p_premium .p_cta._white a{
      background-color: #FFFFFF;
      color: #453E3E;
      
    }
    .p_premium .p_cta._white a::before {
      border: solid 0.3rem #453E3E;
    }
    @media screen and (min-width: 1280px){
      .p_premium .p_cta._white a::before {
        border: solid 0.6rem #453E3E;
      }
    }

    
    

  </style>
</div>
<?php get_footer();?>