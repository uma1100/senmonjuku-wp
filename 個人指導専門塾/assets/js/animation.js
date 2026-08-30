jQuery('.js-visible').one('inview', function(event, isInView) {
	if (isInView) {
		jQuery(this).addClass("_visible");
	}
});
//HOME画面SERVICEのアイコン用
jQuery('.js-service-list').one('inview', function(event, isInView) {
	if (isInView) {
	  	jQuery(function(){
		  	jQuery('.js-service-list li').each(function(i){
			  	jQuery(this).delay(i * 200).queue(function(){
				  	jQuery(this).addClass('_visible');
			  	});
		  	});
	  	});
	}
});