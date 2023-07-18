'use strict';
$(function(){

	var $SetElm = $('#js_kvSlider');
	var $SlideList = $SetElm.find('.sl');
	var SlideCont = $SlideList.length;
	if(SlideCont>1){
		$('#js_kvSlider').slick({
			autoplay: true,
			autoplaySpeed: 5000,
			dots: true,
			arrows: false,
			draggable: true,
			touchThreshold: 40,
			touchMove: true,
			slidesToShow: 1,
			slidesToScroll: 1,
		});
	}

});
