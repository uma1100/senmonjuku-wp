document.addEventListener('DOMContentLoaded', function(){
  // タブに対してクリックイベントを適用
  const tabs = document.getElementsByClassName('js-strongthTab-button');
  for(let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  // タブをクリックすると実行する関数
  function tabSwitch(){
    // タブのclassの値を変更
    document.getElementsByClassName('_active')[0].classList.remove('_active');
    this.classList.add('_active');
    // コンテンツのclassの値を変更
    document.getElementsByClassName('_show')[0].classList.remove('_show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('js-strongth-content')[index].classList.add('_show');
  };
}, false);

//外部リンクから入ってきた時のタブ表示
// URLのアンカー（#以降の部分）を取得
var urlHash = location.hash;
// URLにアンカーが存在する場合
if(urlHash){
  // アンカーが#osakaかどうかを判断する
  if (urlHash == '#infulencer') {
    jQuery('._active').removeClass("_active");
    jQuery('._show').removeClass("_show");
    jQuery('.js-strongthTab-button.infulencer').addClass("_active");
    jQuery('#infulencer').addClass("_show");
  } else if (urlHash == '#movie') {
    jQuery('._active').removeClass("_active");
    jQuery('._show').removeClass("_show");
    jQuery('.js-strongthTab-button.movie').addClass("_active");
    jQuery('#movie').addClass("_show");
  } else if (urlHash == '#sns') {
    jQuery('._active').removeClass("_active");
    jQuery('._show').removeClass("_show");
    jQuery('.js-strongthTab-button.sns').addClass("_active");
    jQuery('#sns').addClass("_show");
  } else if (urlHash == '#live') {
    jQuery('._active').removeClass("_active");
    jQuery('._show').removeClass("_show");
    jQuery('.js-strongthTab-button.live').addClass("_active");
    jQuery('#live').addClass("_show");
  } else{

  }
}

//Swiperの表示非表示を切り替える
const breakPoint = 1024;
let mySwiper ;
let mySwiperBool ;

window.addEventListener('load',()=>{
  if( breakPoint < window.innerWidth){
    mySwiperBool = false;
  }else{
    createSwipter();
    mySwiperBool = true;
  }
},false);

window.addEventListener('resize',()=>{
  if( breakPoint < window.innerWidth && mySwiperBool){
    mySwiper.destroy(false,true);
    mySwiperBool = false;
  }else if( breakPoint >= window.innerWidth && !(mySwiperBool)){
    createSwipter();
    mySwiperBool = true;
  }
},false);

const createSwipter = () =>{
  swiper = new Swiper('.js-strongthPlanSlider-tiktok', {
    initialSlide: 2,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  swiper = new Swiper('.js-strongthPlanSlider-instagram', {
    initialSlide: 1,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
  swiper = new Swiper('.js-strongthPlanSlider-youtube', {
    initialSlide: 1,
    centeredSlides: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
}