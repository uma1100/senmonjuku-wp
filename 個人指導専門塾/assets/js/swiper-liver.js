var swiper = new Swiper(".js-liver-sliderThumbnail", {
	spaceBetween: 0,
	slidesPerView: 4,
	watchSlidesProgress: true,
	breakpoints: {
		1280: {
			slidesPerView: 6
		},
	},
  });
  var swiper2 = new Swiper(".js-liver-sliderMain", {
	spaceBetween: 0,
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
	thumbs: {
	  swiper: swiper,
	},
  });