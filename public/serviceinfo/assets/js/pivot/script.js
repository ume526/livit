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
