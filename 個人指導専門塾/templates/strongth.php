<?php get_header();
/*
Template Name: STRONGTH
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
  <div class="p_strongth">
    <div class="p_strongthTabList flex">
      <a href="#infulencer" class="p_strongthTabList_item infulencer js-strongthTab-button _active" data-en="INFULENCER MARKETING">インフルエンサーマーケティング</a>
      <a href="#movie" class="p_strongthTabList_item movie js-strongthTab-button" data-en="MOVIE MAKING">映像制作</a>
      <a href="#sns" class="p_strongthTabList_item sns js-strongthTab-button" data-en="SNS MARKETING">SNSマーケティング</a>
      <a href="#live" class="p_strongthTabList_item live js-strongthTab-button" data-en="LIVE STREAMING">LIVE配信</a>
    </div>
    <div class="l_inner p_strongth_inner">
      <div class="p_strongth_content js-strongth-content _show" id="infulencer">
        <section class="p_strongth_section">
          <h2 class="e_heading _medium" data-en="INFULENCER MARKETING">取引先企業一覧</h2>
          <p class="p_strongth_text">主にSNSで大きな影響力をもつ「インフルエンサー」にブランドの製品やサービスを紹介してもらい、消費者の態度変容や行動変容を促すコミュニケーション型マーケティング手法です。人気のユーチューバーやインスタグラマーに自社製品やサービスの紹介してもらうことで、認知拡大や購買、ファン（ロイヤルカスタマー）化につなげる手法として大きく注目されています。</p>
        </section>
        <section class="p_strongth_section _support">
          <h2 class="e_heading _medium _line _line_sm_none" data-en="SUPPORT">IZZACのマネージメントサポート</h2>
          <h3 class="p_strongth_heading">クリエイターの充実した<br>マネジメントサポート</h3>
          <div class="p_strongth_image">
            <picture>
              <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_infulencer_support.webp" type="image/webp">
              <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_infulencer_support.jpg">
              <source srcset="<?php echo $imgUri; ?>/strongth/sm_strongth_infulencer_support.webp" type="image/webp">
              <img src="<?php echo $imgUri; ?>/strongth/sm_strongth_infulencer_support.jpg">
            </picture>
          </div>
          <p class="p_strongth_text">パパラピーズ、なえなの、竹内唯人といった専属契約を結ぶトップクリエイターを始め、総勢150名を超えるクリエイターをマネジメントしております。クリエイター自身のブランディングから作品のプロデュース、撮影の協力など彼らの創作活動を全面的にサポートし、充実したネットワークを構築しています。</p>
        </section>
        <section class="p_strongth_section _follower">
          <h2 class="e_heading _medium _white" data-en="FOLLOWERS">総合計フォロワー数</h2>
          <div class="p_strongth_image">
            <img src="<?php echo $imgUri; ?>/strongth/strongth_infulencer_sns.svg" alt="">
          </div>
          <p class="p_strongth_text _right">※提携クリエイター含む</p>
        </section>
        <section class="p_strongth_section _creator">
          <h2 class="e_heading _medium" data-en="CREATORS">IZZACに所属するクリエイター</h2>
          <div class="c_creatorList _large">
            <div class="c_creatorList_item">
              <div class="c_creatorList_text">
                <h3 class="c_creatorList_name">ハルク君</h3>
                <p class="c_creatorList_detaile">筋トレ系Tiktoker</p>
              </div>
              <div class="c_creatorList_image">
                <img src="<?php echo $imgUri; ?>/common/creator_01.jpg" alt="">
              </div>
            </div>
            <div class="c_creatorList_item">
              <div class="c_creatorList_text">
                <h3 class="c_creatorList_name">ハルク君</h3>
                <p class="c_creatorList_detaile">筋トレ系Tiktoker</p>
              </div>
              <div class="c_creatorList_image">
                <img src="<?php echo $imgUri; ?>/common/creator_02.jpg" alt="">
              </div>
            </div>
            <div class="c_creatorList_item">
              <div class="c_creatorList_text">
                <h3 class="c_creatorList_name">ハルク君</h3>
                <p class="c_creatorList_detaile">筋トレ系Tiktoker</p>
              </div>
              <div class="c_creatorList_image">
                <img src="<?php echo $imgUri; ?>/common/creator_03.jpg" alt="">
              </div>
            </div>
          </div>
          <a href="/izzac/creator/" class="e_button">その他のクリエイターを見る</a>
        </section>
      </div>
      <div class="p_strongth_content js-strongth-content" id="movie">
        <p class="p_strongth_catchCopy"><typewritten-text>デジタル化が進んでいる<span>からこそ</span><span>できる映像での</span><span>伝えかた</span></typewritten-text></p>
        <section class="p_strongth_section">
          <h2 class="e_heading _medium" data-en="ADVANTAGE OF MOVIE">映像を活用する意義</h2>
          <p class="p_strongth_text">1分間の映像がどれだけの情報量を持っているか、ご存じでしょうか？映像を1分間で180万語、Webページに置き換えると、Webページ約3,600枚分に匹敵します。映像はマーケティングにおいて最強の武器です。</p>
        </section>
        <section class="p_strongth_section _works">
          <h2 class="e_heading _medium _line" data-en="WORKS">制作実績</h2>
          <div class="c_worksSlider">
            <div class="swiper c_worksSlider_main js-works-sliderMain">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="c_worksSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="c_worksSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_01.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_01.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="c_worksSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="c_worksSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_02.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_02.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="c_worksSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="c_worksSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_03.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_03.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="c_worksSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="c_worksSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_04.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_04.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="c_worksSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="c_worksSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_05.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_05.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="c_worksSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="c_worksSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_06.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_06.jpg">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
            <div thumbsSlider="" class="swiper c_worksSlider_thumbnail js-works-sliderThumbnail">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_01.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_01.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_02.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_02.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_03.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_03.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_04.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_04.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_05.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_05.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_06.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_06.jpg">
                  </picture>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </section>  
      </div>
      <div class="p_strongth_content js-strongth-content" id="sns">
        <p class="p_strongth_catchCopy _medium"><typewritten-text>最強インフルエンサー<span>集団と</span><span>IZZACのSNS</span><span>マーケティングの</span><span>ノウハウで圧倒的な</span><span>集客を行いませんか？</span></typewritten-text></p>
        <section class="p_strongth_section">
          <h2 class="e_heading _medium" data-en="WHY SNS MARKETING?">なぜSNSマーケティング？</h2>
          <p class="p_strongth_text">SNSマーケティングとはSNSを構築、運用を行い、購買や、採用までのプロセスを確立するものです。そこには、御社の潜在的ニーズに合わせたファンが集まる場所となっております。そういった、オウンドメディアを持つことで、それらは御社の資産となります。</p>
        </section>
        <section class="p_strongth_section _plan">
          <h2 class="e_heading _medium _line" data-en="PLAN">料金プラン一覧</h2>
          <div class="p_strongthPlan">
            <h3 class="p_strongthPlan_heading">TikTok</h3>
            <div class="swiper js-strongthPlanSlider-tiktok">
              <div class="swiper-wrapper _col4">
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">STARTUP PLAN</h4>
                  <ul class="p_strongthPlanList">
                    <li class="p_strongthPlanList_item">アカウント作成</li>
                    <li class="p_strongthPlanList_item">映像撮影方法動画共有</li>
                    <li class="p_strongthPlanList_item">流行りの動画共有</li>
                    <li class="p_strongthPlanList_item">アドバイス</li>
                    <li class="p_strongthPlanList_item">月１本の動画編集</li>
                    <li class="p_strongthPlanList_item">月々98,000 円（税別）</li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">STANDART PLAN</h4>
                  <ul class="p_strongthPlanList">
                    <li class="p_strongthPlanList_item">アカウント作成</li>
                    <li class="p_strongthPlanList_item">月４本の制作</li>
                    <li class="p_strongthPlanList_item">コンセプトプランニング</li>
                    <li class="p_strongthPlanList_item">クリエイティブ企画/制作/編集×４</li>
                    <li class="p_strongthPlanList_item">ハッシュタグ設定</li>
                    <li class="p_strongthPlanList_item">トレンド共有</li>
                    <li class="p_strongthPlanList_item">定例ミーティング（月1回）</li>
                    <li class="p_strongthPlanList_item">月々188,000 円（税別）</li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">PREMIUM PLAN</h4>
                  <ul class="p_strongthPlanList _reccomend">
                    <li class="p_strongthPlanList_item">アカウント作成</li>
                    <li class="p_strongthPlanList_item">月6〜８本の制作</li>
                    <li class="p_strongthPlanList_item">コンセプトプランニング</li>
                    <li class="p_strongthPlanList_item">クリエイティブ企画/制作/編集×６〜８</li>
                    <li class="p_strongthPlanList_item">ハッシュタグ設定</li>
                    <li class="p_strongthPlanList_item">トレンド共有</li>
                    <li class="p_strongthPlanList_item">定例ミーティング（月1回）</li>
                    <li class="p_strongthPlanList_item">投稿代行６〜８回/月</li>
                    <li class="p_strongthPlanList_item">レポート</li>
                    <li class="p_strongthPlanList_item">撮影1回</li>
                    <li class="p_strongthPlanList_item">キャスティング</li>
                    <li class="p_strongthPlanList_item">月々288,000 円（税別）</li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">PROFESSONAL PLAN</h4>
                  <ul class="p_strongthPlanList">
                    <li class="p_strongthPlanList_item">アカウント作成</li>
                    <li class="p_strongthPlanList_item">月8〜12本の制作</li>
                    <li class="p_strongthPlanList_item">コンセプトプランニング</li>
                    <li class="p_strongthPlanList_item">クリエイティブ企画/制作/編集×8〜12</li>
                    <li class="p_strongthPlanList_item">ハッシュタグ設定</li>
                    <li class="p_strongthPlanList_item">トレンド共有</li>
                    <li class="p_strongthPlanList_item">定例ミーティング（月2回）</li>
                    <li class="p_strongthPlanList_item">投稿代行8〜12回/月</li>
                    <li class="p_strongthPlanList_item">レポート</li>
                    <li class="p_strongthPlanList_item">撮影2回</li>
                    <li class="p_strongthPlanList_item">キャスティング</li>
                    <li class="p_strongthPlanList_item">月々448,000 円（税別）</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="p_strongthPlan">
            <h3 class="p_strongthPlan_heading">Instagram</h3>
            <div class="swiper js-strongthPlanSlider-instagram">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">STARTUP PLAN</h4>
                  <ul class="p_strongthPlanList">
                    <li class="p_strongthPlanList_item">投稿代行×投稿デザイン制作（月8回投稿の週2回作成）</li>
                    <li class="p_strongthPlanList_item">アカウント分析レポート</li>
                    <li class="p_strongthPlanList_item">担当SNSプランナーへの相談</li>
                    <li class="p_strongthPlanList_item">月々179,800円(税別)</li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">STANDART PLAN</h4>
                  <ul class="p_strongthPlanList _reccomend">
                    <li class="p_strongthPlanList_item">投稿代行×投稿デザイン制作（月8回投稿の週2回作成）</li>
                    <li class="p_strongthPlanList_item">アカウント分析レポート</li>
                    <li class="p_strongthPlanList_item">担当SNSプランナーへの相談</li>
                    <li class="p_strongthPlanList_item">自動アクション（いいね・フォロー・コメント）/制作/編集×４</li>
                    <li class="p_strongthPlanList_item">コンテンツ制作＋15投稿</li>
                    <li class="p_strongthPlanList_item">トレンドリサーチ・企画戦略</li>
                    <li class="p_strongthPlanList_item">月々248,000 円（税別）</li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">PREMIUM PLAN</h4>
                  <ul class="p_strongthPlanList">
                    <li class="p_strongthPlanList_item">投稿代行×投稿デザイン制作（月8回投稿の週2回作成）</li>
                    <li class="p_strongthPlanList_item">アカウント分析レポート</li>
                    <li class="p_strongthPlanList_item">担当SNSプランナーへの相談</li>
                    <li class="p_strongthPlanList_item">クリエイティブ企画/制作/編集×６〜８</li>
                    <li class="p_strongthPlanList_item">自動アクション（いいね・フォロー・コメント）</li>
                    <li class="p_strongthPlanList_item">コンテンツ制作＋15投稿</li>
                    <li class="p_strongthPlanList_item">トレンドリサーチ・企画戦略</li>
                    <li class="p_strongthPlanList_item">マーケティング設計・企画立案</li>
                    <li class="p_strongthPlanList_item">レポート</li>
                    <li class="p_strongthPlanList_item">採用コンサルティング</li>
                    <li class="p_strongthPlanList_item">月々429,800 円（税別）</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
          <div class="p_strongthPlan _line">
            <h3 class="p_strongthPlan_heading">LINE</h3>
            <ul class="p_strongthPlanList _reccomend">
              <li class="p_strongthPlanList_item">シナリオ配信</li>
              <li class="p_strongthPlanList_item">回答フォーム</li>
              <li class="p_strongthPlanList_item">リッチメニュー</li>
              <li class="p_strongthPlanList_item">セグメント配信</li>
              <li class="p_strongthPlanList_item">自動配信</li>
              <li class="p_strongthPlanList_item">予約管理機能</li>
              <li class="p_strongthPlanList_item">オペレータ機能</li>
              <li class="p_strongthPlanList_item">月々300,000円(税込み)</li>
            </ul>
          </div>
          <div class="p_strongthPlan">
            <h3 class="p_strongthPlan_heading">Youtube</h3>
            <div class="swiper js-strongthPlanSlider-youtube">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">STANDARD PLAN</h4>
                  <ul class="p_strongthPlanList">
                    <li class="p_strongthPlanList_item">アカウント制作</li>
                    <li class="p_strongthPlanList_item">月2〜3本の制作</li>
                    <li class="p_strongthPlanList_item">コンセプトプランニング</li>
                    <li class="p_strongthPlanList_item">クリエイティブ企画/制作/編集×3本</li>
                    <li class="p_strongthPlanList_item">ハッシュタグ設定</li>
                    <li class="p_strongthPlanList_item">トレンド共有</li>
                    <li class="p_strongthPlanList_item">サムネイル制作</li>
                    <li class="p_strongthPlanList_item">タイトル制作</li>
                    <li class="p_strongthPlanList_item">投稿代行</li>
                    <li class="p_strongthPlanList_item">定例ミーティング(月1回)</li>
                    <li class="p_strongthPlanList_item">撮影1回</li>
                    <li class="p_strongthPlanList_item">月々228,000 円（税別）</li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">STANDART PLAN</h4>
                  <ul class="p_strongthPlanList _reccomend">
                    <li class="p_strongthPlanList_item">アカウント制作</li>
                    <li class="p_strongthPlanList_item">月4〜5本の制作</li>
                    <li class="p_strongthPlanList_item">コンセプトプランニング</li>
                    <li class="p_strongthPlanList_item">クリエイティブ企画/制作/編集×４本〜５本</li>
                    <li class="p_strongthPlanList_item">ハッシュタグ設定</li>
                    <li class="p_strongthPlanList_item">トレンド共有</li>
                    <li class="p_strongthPlanList_item">サムネイル制作</li>
                    <li class="p_strongthPlanList_item">タイトル制作</li>
                    <li class="p_strongthPlanList_item">投稿代行</li>
                    <li class="p_strongthPlanList_item">定例ミーティング(月1回)</li>
                    <li class="p_strongthPlanList_item">撮影2回</li>
                    <li class="p_strongthPlanList_item">月々328,000 円（税別）</li>
                  </ul>
                </div>
                <div class="swiper-slide">
                  <h4 class="p_strongthPlan_planName">PREMIUM PLAN</h4>
                  <ul class="p_strongthPlanList">
                    <li class="p_strongthPlanList_item">アカウント制作</li>
                    <li class="p_strongthPlanList_item">月６〜８本の制作</li>
                    <li class="p_strongthPlanList_item">コンセプトプランニング</li>
                    <li class="p_strongthPlanList_item">クリエイティブ企画/制作/編集×６本〜８本</li>
                    <li class="p_strongthPlanList_item">ハッシュタグ設定</li>
                    <li class="p_strongthPlanList_item">トレンド共有</li>
                    <li class="p_strongthPlanList_item">サムネイル制作</li>
                    <li class="p_strongthPlanList_item">タイトル制作</li>
                    <li class="p_strongthPlanList_item">投稿代行</li>
                    <li class="p_strongthPlanList_item">定例ミーティング(月2回)</li>
                    <li class="p_strongthPlanList_item">撮影３〜４回</li>
                    <li class="p_strongthPlanList_item">月々468,000 円（税別）</li>
                  </ul>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </section>
      </div>
      <div class="p_strongth_content js-strongth-content" id="live">
        <section class="p_strongth_section">
          <h2 class="e_heading _medium" data-en="ABOUT LIVE STREAMING">LIVE配信とは？</h2>
          <p class="p_strongth_text">1分間の映像がどれだけの情報量を持っているか、ご存じでしょうか？映像を1分間で180万語、Webページに置き換えると、Webページ約3,600枚分に匹敵します。映像はマーケティングにおいて最強の武器です。</p>
        </section>
        <section class="p_strongth_section _partner">
          <h2 class="e_heading _medium" data-en="PARTNER">提携先企業</h2>
          <div class="p_strongthPartnerList flex">
            <div class="p_strongthPartnerList_item">
              <picture>
                <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_live_logo_micolive.webp" type="image/webp">
                <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_live_logo_micolive.png">
                <source srcset="<?php echo $imgUri; ?>strongth/sm_strongth_live_logo_micolive.webp" type="image/webp">
                <img src="<?php echo $imgUri; ?>strongth/sm_strongth_live_logo_micolive.png">
              </picture>
            </div>
            <div class="p_strongthPartnerList_item">
              <picture>
                <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_live_logo_bigolive.webp" type="image/webp">
                <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_live_logo_bigolive.png">
                <source srcset="<?php echo $imgUri; ?>strongth/sm_strongth_live_logo_bigolive.webp" type="image/webp">
                <img src="<?php echo $imgUri; ?>strongth/sm_strongth_live_logo_bigolive.png">
              </picture>
            </div>
            <div class="p_strongthPartnerList_item">
              <picture>
                <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_live_logo_mixchannel.webp" type="image/webp">
                <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>strongth/lg_strongth_live_logo_mixchannel.png">
                <source srcset="<?php echo $imgUri; ?>strongth/sm_strongth_live_logo_mixchannel.webp" type="image/webp">
                <img src="<?php echo $imgUri; ?>strongth/sm_strongth_live_logo_mixchannel.png">
              </picture>
            </div>
          </div>
        </section>
        <section class="p_strongth_section">
          <h2 class="e_heading _medium _line" data-en="LIVER">出演者</h2>
          <div class="p_liverSlider">
            <div class="swiper p_liverSlider_main js-liver-sliderMain">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="p_liverSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="p_liverSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_01.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_01.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="p_liverSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="p_liverSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_02.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_02.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="p_liverSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="p_liverSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_03.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_03.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="p_liverSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="p_liverSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_04.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_04.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="p_liverSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="p_liverSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_05.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_05.jpg">
                    </picture>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="p_liverSlider_text">
                    <h3>ガリレオ</h3>
                    <p>『ガリレオ』は、東野圭吾の連作推理小説ガリレオシリーズを原作としてフジテレビが製作した日本の映像化作品シリーズ。主演は福山雅治。</p>
                  </div>
                  <div class="p_liverSlider_image">
                    <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.webp" type="image/webp">
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.jpg">
                      <source srcset="<?php echo $imgUri; ?>/common/sm_works_06.webp" type="image/webp">
                      <img src="<?php echo $imgUri; ?>/common/sm_works_06.jpg">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
            <div thumbsSlider="" class="swiper p_liverSlider_thumbnail js-liver-sliderThumbnail">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_01.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_01.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_01.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                      <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_02.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_02.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_02.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_03.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_03.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_03.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_04.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_04.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_04.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_05.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_05.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_05.jpg">
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture>
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.webp" type="image/webp">
                    <source media="(min-width: 1024px)" srcset="<?php echo $imgUri; ?>common/lg_works_06.jpg">
                    <source srcset="<?php echo $imgUri; ?>/common/sm_works_06.webp" type="image/webp">
                    <img src="<?php echo $imgUri; ?>/common/sm_works_06.jpg">
                  </picture>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </section>  
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>