jQuery(function(){
	 jQuery(window).scroll(function (){
		jQuery('.js-fade').each(function(){
			var pos =  jQuery(this).offset().top;
			var scroll =  jQuery(window).scrollTop();
			var windowHeight =  jQuery(window).height();
			if (scroll > pos - windowHeight + 50){
				 jQuery(this).addClass('scroll');
			}
		});
	});
});