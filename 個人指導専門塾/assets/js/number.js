jQuery('.js-countUp').one('inview', function(event, isInView){
  if(isInView){
    //要素が見えたときに実行する処理
    jQuery(this).each(function(){
      jQuery(this).prop('Counter',0).animate({//0からカウントアップ
            Counter: jQuery(this).text()
        }, {
        // スピードやアニメーションの設定1
            duration: 1200,//数字が大きいほど変化のスピードが遅くなる。1200=2秒
            easing: 'swing',//動きの種類。他にもlinearなど設定可能
            step: function (now) {
                jQuery(this).text(Math.ceil(now));
            }
        });
    });
    jQuery(this).addClass("_visible");
  }
});

jQuery('#occupation-numbers').one('inview', function(event, isInView) {
	if (isInView) {
    jQuery(".js-numberListBarGraph-bar").addClass("_move");
	}
});

jQuery('#academic-history').one('inview', function(event, isInView) {//画面上に入ったらグラフを描画
  if (isInView) {
    var ctx=document.getElementById("pieGraph-academic-history");//グラフを描画したい場所のid
    var chart=new Chart(ctx,{
      type:'pie',//グラフのタイプ
      data:{//グラフのデータ
        datasets:[{
          backgroundColor:["#E341C4","#333333"],//グラフの背景色
          data:["80","20"],//データ
          borderWidth: 0, 
        }]
      },
      options:{//グラフのオプション
        maintainAspectRatio: false,//CSSで大きさを調整するため、自動縮小をさせない
        legend: {
          display: false,
        },
        tooltips: {
          enabled: false,
        }
      }
    });
  }
});

jQuery('#born').one('inview', function(event, isInView) {//画面上に入ったらグラフを描画
  if (isInView) {
    var ctx=document.getElementById("pieGraph-born");//グラフを描画したい場所のid
    var chart=new Chart(ctx,{
      type:'pie',//グラフのタイプ
      data:{//グラフのデータ
        datasets:[{
          backgroundColor:["#E341C4","#CCCCCC", "#333333"],//グラフの背景色
          data:["60","20","20"],//データ
          borderWidth: 0, 
        }]
      },
      options:{//グラフのオプション
        maintainAspectRatio: false,//CSSで大きさを調整するため、自動縮小をさせない
        legend: {
          display: false,
        },
        tooltips: {
          enabled: false,
        }
      }
    });
  }
});

jQuery('#attire-at-work').one('inview', function(event, isInView) {//画面上に入ったらグラフを描画
  if (isInView) {
    var ctx=document.getElementById("pieGraph-attire-at-work");//グラフを描画したい場所のid
    var chart=new Chart(ctx,{
      type:'pie',//グラフのタイプ
      data:{//グラフのデータ
        datasets:[{
          backgroundColor:["#CCCCCC","#333333","#E341C4"],//グラフの背景色
          data:["20","20","60"],//データ
          borderWidth: 0, 
        }]
      },
      options:{//グラフのオプション
        maintainAspectRatio: false,//CSSで大きさを調整するため、自動縮小をさせない
        legend: {
          display: false,
        },
        tooltips: {
          enabled: false,
        }
      }
    });
  }
});