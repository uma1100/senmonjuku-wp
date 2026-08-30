//画面サイズ取得
const setFillWindowSize = () => {
  const vh = window.innerHeight * 0.01;
  const vw = document.body.clientWidth * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
  document.documentElement.style.setProperty('--vw', `${vw}px`);
}
 // 画面のサイズ変動があった時に高さを再計算する
window.addEventListener('resize', setFillWindowSize);

// 初期化
setFillWindowSize();
//画面サイズ取得ここまで


//ドロワーメニュー
const btn = document.querySelector('.js-header-button');
btn.addEventListener('click', function () {
  const bodyElement = document.querySelector('body');
  if (btn.ariaExpanded == 'false') {
    btn.ariaExpanded = true;

    MicroModal.show('js-header-menu', {
      disableScroll: true, // ページスクロールを無効に
      awaitOpenAnimation: true, // 開閉時のアニメーションを可能に

    });
  } else {
    btn.ariaExpanded = false;

    MicroModal.close('js-header-menu', {
      awaitCloseAnimation: true,
    });
  }
});

//ヘッダードロワーメニューのアコーディオン
if (matchMedia('screen and (min-width: 1280px)').matches) {
}else{
  jQuery('.js-menu-title').on('click', function() {//タイトル要素をクリックしたら
    var findElm = jQuery(this).next(".menu");//直後のアコーディオンを行うエリアを取得し
    jQuery(findElm).slideToggle();//アコーディオンの上下動作
      
    if(jQuery(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
      jQuery(this).removeClass('close');//クラス名を除去し
    }else{//それ以外は
      jQuery(this).addClass('close');//クラス名closeを付与
    }
  });
}

//フッタードロワーメニューのアコーディオン
if (matchMedia('screen and (min-width: 1280px)').matches) {
}else{
  jQuery('ul.menu > li.menu-item > a').on('click', function() {//タイトル要素をクリックしたら
    var findElm = jQuery(this).next(".sub-menu");//直後のアコーディオンを行うエリアを取得し
    jQuery(findElm).slideToggle();//アコーディオンの上下動作
      
    if(jQuery(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
      jQuery(this).removeClass('close');//クラス名を除去し
    }else{//それ以外は
      jQuery(this).addClass('close');//クラス名closeを付与
    }
  });
}
  


