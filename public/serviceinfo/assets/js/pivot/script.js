$(function(){
	  $(window).on('load',function(){
				$('.mainItem li').addClass('fadeImg');
			});
			
  $(window).on('load scroll',function(){
    $('.bgItem').each(function(){
      var imgPos=$(this).offset().top;
      var winTop=$(window).scrollTop();
      var winHeight=$(window).height();
      if(winTop>imgPos-winHeight+100){
        $(this).find('li').addClass('fadeImg')
      }
    });
  });
});

const target = document.querySelector('.zoom-map');
const panzoom = Panzoom(target, {
    maxScale: 3,
    minScale: 1,
    step: 0.3
});

document.querySelector('.zoom-in').addEventListener('click', () => {
  panzoom.zoomIn({animate: true})
});
document.querySelector('.zoom-out').addEventListener('click', () => {
  panzoom.zoomOut({animate: true})
});