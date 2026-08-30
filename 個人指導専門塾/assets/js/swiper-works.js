var swiper = new Swiper(".js-works-sliderThumbnail", {
	spaceBetween: 0,
	slidesPerView: 4,
	watchSlidesProgress: true,
	breakpoints: {
		1280: {
			slidesPerView: 6
		},
	},
  });
  var swiper2 = new Swiper(".js-works-sliderMain", {
	spaceBetween: 0,
	navigation: {
	  nextEl: ".swiper-button-next",
	  prevEl: ".swiper-button-prev",
	},
	thumbs: {
	  swiper: swiper,
	},
  });