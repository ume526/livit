// スムーズスクロール

// Easingの追加
jQuery.easing.quart = function (x, t, b, c, d) {
    return -c * ((t=t/d-1)*t*t*t - 1) + b;
};
 
/*-------------------------------------
 ページ読み込み中
-------------------------------------*/
jQuery(document).ready(function(){
 
    //
    // <a href="#***">の場合、スクロール処理を追加
    //
    jQuery('a[href*=#]').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var $target = jQuery(this.hash);
            $target = $target.length && $target || jQuery('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                jQuery('html,body').animate({ scrollTop: targetOffset }, 1400, 'quart');
                return false;
            }
        }
    });
 
});


// ロールオーバー

$(function(){
 $(".button img").fadeTo(0, 1);
});
$(function(){
 $(".button img").hover(
 function(){
  $(this).fadeTo(200,0.6);
 },
 function(){
  $(this).fadeTo(300,1);
 }
 );
});


$(function () {
  // 親メニュー処理
  $('span').click(function() {
    // メニュー表示/非表示
    $(this).next('#left_column ul').slideToggle('fast');
  });

  // 子メニュー処理
  $('li').click(function(e) {
    // メニュー表示/非表示
    $(this).children('#left_column ul').slideToggle('fast');
    e.stopPropagation();
  });
});



$(function(){

	

	$("#carouselInner").css("width",960*$("#carouselInner ul.column").size()+"px");

	$("#carouselInner ul.column:last").prependTo("#carouselInner");

	$("#carouselInner").css("margin-left","-960px");

	

	$("#carouselPrev").click(function(){

		$("#carouselNext,#carouselPrev").hide();

		$("#carouselInner").animate({

			marginLeft : parseInt($("#carouselInner").css("margin-left"))+960+"px"

		},1500,"swing" , 

		function(){

			$("#carouselInner").css("margin-left","-960px")

			$("#carouselInner ul.column:last").prependTo("#carouselInner");

			$("#carouselNext,#carouselPrev").show();

		});

	});

	

	$("#carouselNext").click(function(){

		$("#carouselNext,#carouselPrev").hide();

		$("#carouselInner").animate({

			marginLeft : parseInt($("#carouselInner").css("margin-left"))-960+"px"

		},1500,"swing" , 

		function(){

			$("#carouselInner").css("margin-left","-960px");

			$("#carouselInner ul.column:first").appendTo("#carouselInner");

			$("#carouselNext,#carouselPrev").show();

		});

	});

	

	var timerID = setInterval(function(){

		$("#carouselNext").click();

	},5000);

	

	$("#carouselPrev img,#carouselNext img").click(function(){

		clearInterval(timerID);

	});

	

});

