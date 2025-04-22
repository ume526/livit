'use strict';
$(function(){

	(function searchBoxFrom(){
		$('.searchBoxFrom .firstBox input[type=checkbox]').change(function(){
			if($('.searchBoxFrom .firstBox #s1').prop('checked')){
				$('.searchBoxFrom .secondBox .sub1').slideDown();
			}else{
				$('.searchBoxFrom .secondBox .sub1').slideUp();
			}
			if($('.searchBoxFrom .firstBox #s2').prop('checked')){
				$('.searchBoxFrom .secondBox .sub2').slideDown();
			}else{
				$('.searchBoxFrom .secondBox .sub2').slideUp();
			}
			if($('.searchBoxFrom .firstBox #s3').prop('checked')){
				$('.searchBoxFrom .secondBox .sub3').slideDown();
			}else{
				$('.searchBoxFrom .secondBox .sub3').slideUp();
			}
			if($('.searchBoxFrom .firstBox #s4').prop('checked')){
				$('.searchBoxFrom .secondBox .sub4').slideDown();
			}else{
				$('.searchBoxFrom .secondBox .sub4').slideUp();
			}
			if($('.searchBoxFrom .firstBox #s5').prop('checked')){
				$('.searchBoxFrom .secondBox .sub5').slideDown();
			}else{
				$('.searchBoxFrom .secondBox .sub5').slideUp();
			}
			if($('.searchBoxFrom .firstBox #s6').prop('checked')){
				$('.searchBoxFrom .secondBox .sub6').slideDown();
			}else{
				$('.searchBoxFrom .secondBox .sub6').slideUp();
			}
		});
		$('.searchBoxFrom #js_allclear').on('click',function(){
			$('.searchBoxFrom input[type=checkbox]').prop('checked', false);
			$('.searchBoxFrom .secondBox .sub').slideUp();
			$('.searchBoxFrom .keyBox .keyword').val("")
		});
	})();

	$('.searchArea .acdn .js_acdntrigger').click(function(){
		var $this=$(this);
		$this.toggleClass('acdnOn').parents('.acdnBlk').next('.acdnPanel').not(':animated').fadeToggle();

	});

	if($('.slickSlider').length){
		$('.3column-slider').slick({
			autoplay:true,
			dots: true,
			speed: 1000,
			slidesToShow: 3,
			slidesToScroll: 1,
			cssEase: 'linear',
			controls:true,
				responsive: [{
				 breakpoint: 769,
						settings:{
							fade:true,
							slidesToShow: 1,
							slidesToScroll: 1,
				}
			}]
		});
	};
	$('.slider dd >p').addClass('ellipsis');
	
	
		if (navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)) {
		$('.telLink').each(function() {
			var str = $(this).html();
			$(this).html($('<a>').attr('href', 'tel:' + $(this).text().replace(/-/g, '')).append(str + '</a>'));
		});
	}


//スムーズスクロール
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
	anchor.addEventListener("click", function (e) {
	  e.preventDefault();
	  const targetId = this.getAttribute("href").substring(1);
	  const targetElement = document.getElementById(targetId);
  
	  if (targetElement) {
		const headerHeight = document.querySelector("header").offsetHeight;
		const targetPosition = targetElement.getBoundingClientRect().top + window.scrollY - headerHeight;
  
		window.scrollTo({
		  top: targetPosition,
		  behavior: "smooth"
		});
	  }
	});
  });
//   $('a[href^="#"]').click(function(){
//     var speed = 500;
//     var href= $(this).attr("href");
//     var target = $(href == "#" || href == "" ? 'html' : href);
//     var position = target.offset().top;
//     $("html, body").animate({scrollTop:position}, speed, "swing");
//     return false;
//   });
});