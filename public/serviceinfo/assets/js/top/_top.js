'use strict';
$(function(){

	(function randomLoop(){
		var RandomLi = [1, -1];
		$('.keyvisual .randomList').html(
			$('.keyvisual .randomList >li').sort(function(a, b) {
				return RandomLi[Math.floor(Math.random() * RandomLi.length)];
			})
		);
	})();

	$.ajax({
		url:'/service/index/map1.html',
		type:'get',
		dataType:'html',
		cache: false,
		error:function(){
			console.log(err_data_map1);
		},
		success:function(data_map1){
			$('#map_changeMap1').append(data_map1);
			$('#js_slid_map01').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				dots: true,
				arrows: true,
				draggable: true,
				touchThreshold: 40,
				touchMove: true,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}
	});

	$.ajax({
		url:'/service/index/map2.html',
		type:'get',
		dataType:'html',
		cache: false,
		error:function(){
			console.log(err_data_map2);
		},
		success:function(data_map2){
			$('#map_changeMap2').append(data_map2);
			$('#js_slid_map02').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				dots: true,
				arrows: true,
				draggable: true,
				touchThreshold: 40,
				touchMove: true,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}
	});

	$.ajax({
		url:'/service/index/map3.html',
		type:'get',
		dataType:'html',
		cache: false,
		error:function(){
			console.log(err_data_map3);
		},
		success:function(data_map3){
			$('#map_changeMap3').append(data_map3);
			$('#js_slid_map03').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				dots: true,
				arrows: true,
				draggable: true,
				touchThreshold: 40,
				touchMove: true,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}
	});

	$.ajax({
		url:'/service/index/map4.html',
		type:'get',
		dataType:'html',
		cache: false,
		error:function(){
			console.log(err_data_map4);
		},
		success:function(data_map4){
			$('#map_changeMap4').append(data_map4);
			$('#js_slid_map04').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				dots: true,
				arrows: true,
				draggable: true,
				touchThreshold: 40,
				touchMove: true,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}
	});

	$.ajax({
		url:'/service/index/map5.html',
		type:'get',
		dataType:'html',
		cache: false,
		error:function(){
			console.log(err_data_map5);
		},
		success:function(data_map5){
			$('#map_changeMap5').append(data_map5);
			$('#js_slid_map05').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				dots: true,
				arrows: true,
				draggable: true,
				touchThreshold: 40,
				touchMove: true,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}
	});

	$.ajax({
		url:'/service/index/map6.html',
		type:'get',
		dataType:'html',
		cache: false,
		error:function(){
			console.log(err_data_map6);
		},
		success:function(data_map6){
			$('#map_changeMap6').append(data_map6);
			$('#js_slid_map06').slick({
				autoplay: true,
				autoplaySpeed: 5000,
				dots: true,
				arrows: true,
				draggable: true,
				touchThreshold: 40,
				touchMove: true,
				slidesToShow: 1,
				slidesToScroll: 1,
			});
		}
	});

	$('#js_slider').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		dots: true,
		arrows: true,
		draggable: true,
		touchThreshold: 40,
		touchMove: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		responsive: [{
			 breakpoint: 769,
					settings:{
						slidesToShow: 1,
						slidesToScroll: 1,
			 }
		}]
	});
	$('.news .slidArea .desc >p').addClass('ellipsis');


	$(window).on('load scroll', function(){
		var ST = $(window).scrollTop();
		var WH = $(window).height();
		var STWH = ST + WH;
		$('.scrollIn').each(function(){
			var ElmOffset = $(this).offset().top + (window.innerHeight/3);
			if(STWH > ElmOffset){
				$(this).addClass('scOn');
			}
		});
	});



	$('#svg_map path.svg_area').on('mousedown',function(){
		var mapNnm = $(this).attr("data-name");
		$('.changeBox .map_changeMap').removeClass('appear');
		if(mapNnm === 'map1'){
			$('.changeBox .map_changeMap1').addClass('appear');
		}
		if(mapNnm === 'map2'){
			$('.changeBox .map_changeMap2').addClass('appear');
		}
		if(mapNnm === 'map3'){
			$('.changeBox .map_changeMap3').addClass('appear');
		}
		if(mapNnm === 'map4'){
			$('.changeBox .map_changeMap4').addClass('appear');
		}
		if(mapNnm === 'map5'){
			$('.changeBox .map_changeMap5').addClass('appear');
		}
		if(mapNnm === 'map6'){
			$('.changeBox .map_changeMap6').addClass('appear');
		}
	});

});

$(document).ajaxComplete(function(){
	$('.js_changeMapBackBtn').click(function(){
		$('.changeBox .map_changeMap').removeClass('appear');
		$('.changeBox .map_changeMain').addClass('appear');
	});
});
