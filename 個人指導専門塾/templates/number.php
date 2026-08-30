<?php get_header();
/*
Template Name: NUMBER
*/
?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<?php get_template_part( 'parts/subPageHeader' ); ?>
<div class="l_wrapper">
  <div class="p_number">
    <div class="l_inner">
      <div class="p_number_firstMessage">
        <h2 class="p_number_heading">IZZAC Inc.の中を<br>見える化してみた</h2>
        <p class="p_number_description">ブランディングプロ集団のIZZACがどんな会社かご紹介します。</p>
      </div>
      <div class="p_numberList">
        <div class="p_numberList_item" id="employees">
          <h3 class="p_numberList_heading" data-en="EMPLOYEES">社員数</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_employees.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number js-countUp">257</p>
              <span class="p_numberList_unit">名</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="average-age">
          <h3 class="p_numberList_heading" data-en="AVERAGE AGE">平均年齢</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_average-age.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number js-countUp">29</p>
              <span class="p_numberList_unit">歳</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="creator">
          <h3 class="p_numberList_heading" data-en="CREATORS">クリエイター数</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_creator.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number js-countUp">537</p>
              <span class="p_numberList_unit">名</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="working-hours">
          <h3 class="p_numberList_heading" data-en="AVERAGE WORKING HOURS">平均労働時間</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_working-hours.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number js-countUp">8</p>
              <span class="p_numberList_unit">時間</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item _lg_wide" id="follower">
          <h3 class="p_numberList_heading" data-en="SNS FOLLOWERS">SNS総フォロワー数</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_follower.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number _small js-countUp">350000000</p>
              <span class="p_numberList_unit _small">人</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item _lg_wide" id="video">
          <h3 class="p_numberList_heading" data-en="TOTAL VIEWS">自社制作コンテンツ再生回数</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_video.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number _small js-countUp">1000000000</p>
              <span class="p_numberList_unit _small">突破</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="salary">
          <h3 class="p_numberList_heading" data-en="AVERAGE SALARY">平均年収</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_salary.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number js-countUp">420</p>
              <span class="p_numberList_unit">万円</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="rate">
          <h3 class="p_numberList_heading" data-en="ATTENDANCE RATE">平均出社率</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_rate.svg" alt="">
            </div>
            <div class="p_numberList_text">
              <p class="p_numberList_number js-countUp">50</p>
              <span class="p_numberList_unit">%</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="occupation-numbers">
          <h3 class="p_numberList_heading" data-en="OCCUPATION NUMBERS">職種別人数</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_occupation-numbers.svg" alt="">
            </div>
            <div class="p_numberListBarGraph grid js-numberListBarGraph-bar">
              <div class="p_numberListBarGraph_item">
                <p class="p_numberListBarGraph_number js-countUp">60</p>
                <span class="p_numberListBarGraph_bar _first js-numberListBarGraph-bar" data-size="60"></span>
                <p class="p_numberListBarGraph_title">マーケター</p>
              </div>
              <div class="p_numberListBarGraph_item">
                <p class="p_numberListBarGraph_number js-countUp">20</p>
                <span class="p_numberListBarGraph_bar js-numberListBarGraph-bar" data-size="20"></span>
                <p class="p_numberListBarGraph_title">デザイナー</p>
              </div>
              <div class="p_numberListBarGraph_item">
                <p class="p_numberListBarGraph_number js-countUp">10</p>
                <span class="p_numberListBarGraph_bar js-numberListBarGraph-bar" data-size="10"></span>
                <p class="p_numberListBarGraph_title">エンジニア</p>
              </div>
              <div class="p_numberListBarGraph_item">
                <p class="p_numberListBarGraph_number js-countUp">5</p>
                <span class="p_numberListBarGraph_bar js-numberListBarGraph-bar" data-size="5"></span>
                <p class="p_numberListBarGraph_title">事務員</p>
              </div>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="academic-history">
          <h3 class="p_numberList_heading" data-en="ACADEMIC HISTORY">最終学歴</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_academic-history.svg" alt="">
            </div>
            <div class="p_numberListPieGraph">
              <div class="p_numberListPieGraph_graph">
                <canvas id="pieGraph-academic-history"></canvas>
              </div>
              <span class="p_numberListPieGraph_number js-countUp" data-name="大卒">80</span>
              <span class="p_numberListPieGraph_number js-countUp" data-name="高卒">20</span>
              <span class="p_numberListPieGraph_name" id="daisotsu">大卒</span>
              <span class="p_numberListPieGraph_name" id="kousotsu">高卒</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="born">
          <h3 class="p_numberList_heading" data-en="WHERE ARE YOU BORN AT?">出身地は関東？関西？</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_born.svg" alt="">
            </div>
            <div class="p_numberListPieGraph">
              <div class="p_numberListPieGraph_graph">
                <canvas id="pieGraph-born"></canvas>
              </div>
              <span class="p_numberListPieGraph_number js-countUp" data-name="関東">60</span>
              <span class="p_numberListPieGraph_number js-countUp" data-name="九州">20</span>
              <span class="p_numberListPieGraph_number js-countUp" data-name="関西">20</span>
              <span class="p_numberListPieGraph_name" id="kanto">関東</span>
              <span class="p_numberListPieGraph_name" id="kyushu">九州</span>
              <span class="p_numberListPieGraph_name" id="kansai">関西</span>
            </div>
          </div>
        </div>
        <div class="p_numberList_item" id="attire-at-work">
          <h3 class="p_numberList_heading" data-en="ATTIRE AT WORK">職場での服装</h3>
          <div class="p_numberList_main">
            <div class="p_numberList_icon">
              <img src="<?php echo $imgUri; ?>/number/number_list_icon_attire-at-work.svg" alt="">
            </div>
            <div class="p_numberListPieGraph">
              <div class="p_numberListPieGraph_graph">
                <canvas id="pieGraph-attire-at-work"></canvas>
              </div>
              <span class="p_numberListPieGraph_number js-countUp" data-name="スーツ">20</span>
              <span class="p_numberListPieGraph_number js-countUp" data-name="カジュアル">20</span>
              <span class="p_numberListPieGraph_number js-countUp" data-name="スマートカジュアル">60</span>
              <span class="p_numberListPieGraph_name" id="suit">スーツ</span>
              <span class="p_numberListPieGraph_name" id="casual">カジュアル</span>
              <span class="p_numberListPieGraph_name" id="smartcasual">スマート<br>カジュアル</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer();?>