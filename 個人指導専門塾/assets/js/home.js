jQuery(window).on('load', function(){
    jQuery('.js-mv-visible').addClass('_visible');
});

var bannerSwiper = new Swiper(".js-bannerSlider", {
  slidesPerView: "1.2",
  centeredSlides: true,
  loop: true,
	initialSlide: 0,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".p_bannerSlider .swiper-button-next",
    prevEl: ".p_bannerSlider .swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
	breakpoints: {
        1024: {
          slidesPerView: 2,
        },
      },
});

var voiceSwiper = new Swiper(".js-voiceSlider", {
  slidesPerView: "auto",
  centeredSlides: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".p_voiceSlider .swiper-button-next",
    prevEl: ".p_voiceSlider .swiper-button-prev",
  },
});

const mediaSwiperLeft = new Swiper(".js-mediaSliderLeft", {
  loop: true, // ループ有効
  slidesPerView: "auto",
  speed: 3000, // ループの時間
  allowTouchMove: false, // スワイプ無効
  autoplay: {
    delay: 0, // 途切れなくループ
    disableOnInteraction: false,
  },
});

//コース紹介のタブ切り替え
jQuery(function() {
  jQuery('.js-tabButton').on('click', function() {
    jQuery('.js-tabButton').removeClass('_active');
    jQuery('.js-tabContent').removeClass('_show');
    jQuery(this).addClass('_active');
    var index = jQuery('.js-tabButton').index(this);
    jQuery('.js-tabContent').eq(index).addClass('_show');
    jQuery('.js-bgChange').removeClass('_bgBlue');
    if( jQuery('._school').hasClass('_active') ) {
        jQuery('.js-bgChange').removeClass('_bgBlue');
    } else {
        jQuery('.js-bgChange').addClass('_bgBlue');
    }
  });
});

  