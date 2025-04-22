'use strict';
$(function(){
	var GnavStsSp = false;
	var ScrollNavSp;
	var ResponsiveWidth = 768;

	var ua = {};
	ua.name = window.navigator.userAgent.toLowerCase();
	ua.isIE = (ua.name.indexOf('msie') >= 0 || ua.name.indexOf('trident') >= 0);
	ua.isiPhone = ua.name.indexOf('iphone') >= 0;
	ua.isiPad = ua.name.indexOf('ipad') >= 0;
	ua.isAndroid = ua.name.indexOf('android') >= 0;
	ua.isMobile = (ua.isiPhone || ua.isiPad || ua.isAndroid);
	if(ua.isIE){
		$('html').addClass('uaie');
	}
	if(ua.isMobile){
		$('html').addClass('uamobile');
	}


	$(window).on('scroll', function(){
		var PageTop = $('#tpl_pageTop');
		var PageTopHt = PageTop.height();
		var ScrollHt = $(window).scrollTop() + $(window).height();
		var FooterOffset = $('#tpl_footer').offset().top + PageTopHt;
		if ($(window).scrollTop() > $(window).height()/2){
			PageTop.fadeIn(700);
		}else{
			PageTop.fadeOut(700);
		}
		if (ScrollHt > FooterOffset){
			PageTop.addClass('tpl_pageTopFoot');
		}else{
			PageTop.removeClass('tpl_pageTopFoot');
		}
	});


	$('#tpl_footer .tpl_acdn .js_tpl_trigger').click(function(){
		var WindowWidth = $(window).innerWidth();
		if(WindowWidth <= ResponsiveWidth){
			if(!$(this).next('.tpl_acdnPanel').is(':animated')){
				if(!$(this).hasClass('tpl_acdnOn')){
					$(this).addClass('tpl_acdnOn');
					$(this).next('.tpl_acdnPanel').slideDown();
				}else{
					$(this).removeClass('tpl_acdnOn');
					$(this).next('.tpl_acdnPanel').slideUp();
				}
			}
		}
	});


	$('.tpl_header .tpl_gNav .gn2,.tpl_header .tpl_gNav .gn3,.tpl_header .tpl_gNav .gn5').on('touchstart',function(){
			$('.tpl_header .tpl_gNav .tpl_dropdown').removeClass('tpl_gOn');
			$('.tpl_header .tpl_gNav .tpl_dropdown').addClass('tpl_gOff');
			$(this).addClass('tpl_gOn');
			$(this).removeClass('tpl_gOff');
	});


	$('#tpl_gNav_sp .tpl_gMenu_sp .tpl_acdn .js_tpl_trigger').click(function(){
		if(!$(this).parent('.tpl_acdnBlk').next('.tpl_acdnPanel').is(':animated')){
			$(this).parent('.tpl_acdnBlk').next('.tpl_acdnPanel').slideToggle();
			$(this).toggleClass('acdnOn');
		}
	});


	$('#tpl_pageTop').click(function(){
		var PagetopSpeed = 200;
		$('html, body').animate({scrollTop:0}, PagetopSpeed, 'swing');
		return false;
	});


	if($('#serviceHome').length){
		$('#tpl_header .tpl_gNav .gn1 .tpl_navBtn, #tpl_footer .tpl_fat_footer .tpl_linkArea .tpl_fatList .js_tpl_ac').click(function(){
			var AnchorSpeed = 200;
			var Target = $('#giftgourmet');
			var Position = Target.offset().top;
			$('html,body').animate({scrollTop: Position}, AnchorSpeed, 'swing');
			return false;
		});
	}


	(function gNavSpBtn(){
		$('#tpl_gBtn_sp').click(function(){
			if(GnavStsSp){
				return false;
			}
			if($(this).hasClass('tpl_gBtnOn')){
				GnavHideSp();
			}else{
				GnavShowSp();
			}
			$('#tpl_gNav_sp').click(function(e){
				if(!$(e.target).closest('#tpl_gNav_sp .tpl_gNav').length){
					GnavHideSp();
				}
			});
			if($('#serviceHome').length){
				$('#tpl_gNav_sp .tpl_gMenuList_sp .tpl_unit01 a.tpl_btn').click(function(){
					GnavHideSp();
				});
			}
		});

		function GnavShowSp(){
			GnavStsSp = true;
			ScrollNavSp = $(window).scrollTop();
			$('body').addClass('tpl_htmlFixed').css({'top': - ScrollNavSp});
			$('#tpl_gBtn_sp').addClass('tpl_gBtnOn');
			$('#tpl_gNav_sp').addClass('tpl_gNav_sp_On');
			setTimeout(function(){
				GnavStsSp = false;
			},500);
		}

		function GnavHideSp(){
			GnavStsSp = true;
			$('body').removeClass('tpl_htmlFixed').css({'top':''});
			window.scrollTo(0,ScrollNavSp);
			$('#tpl_gBtn_sp').removeClass('tpl_gBtnOn');
			$('#tpl_gNav_sp').removeClass('tpl_gNav_sp_On');
			setTimeout(function(){
				GnavStsSp = false;
			},500);
		}
	})();


	(function FootSlideLoop(){
		var $SetElm = $('#tpl_slide');
		var $FindWrap = $SetElm.find('.tpl_slideWrap');
		var $FindScroll = $FindWrap.find('.tpl_slideScroll');
		var $FindUl = $FindScroll.find('.tpl_objList');
		var UlWidth = $FindUl.width();
		$FindUl.css({width:UlWidth});
		$FindScroll.css({width:UlWidth*3});
		$FindUl.clone().appendTo($FindScroll);
		$FindUl.clone().appendTo($FindScroll);

		var ResizeTimer = false;

		var MoveLeft = 0;
		var MLeft = 110;
		var Dly = 10000;
		var MLeftS = 0;
		var DlyS = 6500;

		var Obj01 = 450;
		var Obj02 = 900;
		var Obj03 = 1350;
		var Obj04 = 1800;
		var Obj05 = 2250;
		var Obj06 = 2700;
		var Obj07 = 3150;
		var Obj08 = 3600;
		var Obj09 = 4050;
		var Obj10 = 4500;
		var Obj11 = 4950;
		var Obj12 = 5400;
		var Obj13 = 5850;
		var Obj14 = 6300;
		var Obj15 = 6750;
		var Obj16 = 7200;
		var Obj17 = 7650;
		var Obj18 = 8100;
		var Obj19 = 8550;
		var Obj20 = 8990;

		var MoveL01 = Obj01-MLeft;
		var MoveL02 = Obj02-MLeft;
		var MoveL03 = Obj03-MLeft;
		var MoveL04 = Obj04-MLeft;
		var MoveL05 = Obj05-MLeft;
		var MoveL06 = Obj06-MLeft;
		var MoveL07 = Obj07-MLeft;
		var MoveL08 = Obj08-MLeft;
		var MoveL09 = Obj09-MLeft;
		var MoveL10 = Obj10-MLeft;
		var MoveL11 = Obj11-MLeft;
		var MoveL12 = Obj12-MLeft;
		var MoveL13 = Obj13-MLeft;
		var MoveL14 = Obj14-MLeft;
		var MoveL15 = Obj15-MLeft;
		var MoveL16 = Obj16-MLeft;
		var MoveL17 = Obj17-MLeft;
		var MoveL18 = Obj18-MLeft;
		var MoveL19 = Obj19-MLeft;
		var MoveL20 = Obj20-MLeft;

		var WdWidth;
		var WdWidth2;

		var MoveLS01;
		var MoveLS02;
		var MoveLS03;
		var MoveLS04;
		var MoveLS05;
		var MoveLS06;
		var MoveLS07;
		var MoveLS08;
		var MoveLS09;
		var MoveLS10;
		var MoveLS11;
		var MoveLS12;
		var MoveLS13;
		var MoveLS14;
		var MoveLS15;
		var MoveLS16;
		var MoveLS17;
		var MoveLS18;
		var MoveLS19;
		var MoveLS20;

		SetSize();

		function SetSize(){
			WdWidth = $(window).width();
			WdWidth2 = WdWidth/2;
			MoveLS01 = Math.floor(Obj01-WdWidth2-MLeftS);
			MoveLS02 = Math.floor(Obj02-WdWidth2-MLeftS);
			MoveLS03 = Math.floor(Obj03-WdWidth2-MLeftS);
			MoveLS04 = Math.floor(Obj04-WdWidth2-MLeftS);
			MoveLS05 = Math.floor(Obj05-WdWidth2-MLeftS);
			MoveLS06 = Math.floor(Obj06-WdWidth2-MLeftS);
			MoveLS07 = Math.floor(Obj07-WdWidth2-MLeftS);
			MoveLS08 = Math.floor(Obj08-WdWidth2-MLeftS);
			MoveLS09 = Math.floor(Obj09-WdWidth2-MLeftS);
			MoveLS10 = Math.floor(Obj10-WdWidth2-MLeftS);
			MoveLS11 = Math.floor(Obj11-WdWidth2-MLeftS);
			MoveLS12 = Math.floor(Obj12-WdWidth2-MLeftS);
			MoveLS13 = Math.floor(Obj13-WdWidth2-MLeftS);
			MoveLS14 = Math.floor(Obj14-WdWidth2-MLeftS);
			MoveLS15 = Math.floor(Obj15-WdWidth2-MLeftS);
			MoveLS16 = Math.floor(Obj16-WdWidth2-MLeftS);
			MoveLS17 = Math.floor(Obj17-WdWidth2-MLeftS);
			MoveLS18 = Math.floor(Obj18-WdWidth2-MLeftS);
			MoveLS19 = Math.floor(Obj19-WdWidth2-MLeftS);
			MoveLS20 = Math.floor(Obj20-WdWidth2-MLeftS);
		}

		(function MLoop(){
			MoveLeft = MoveLeft + 1;

			if(MoveLeft > 9000){
				MoveLeft = 4500;
			}

			$(window).resize(function(){
				clearTimeout(ResizeTimer);
				ResizeTimer = setTimeout(function(){
						SetSize();
				}, 200);
			});

			if(WdWidth <= ResponsiveWidth){
				if(MoveLeft == MoveLS01){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon02').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS02){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon03').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS03){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon04').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS04){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon05').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS05){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon06').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS06){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon07').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS07){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon08').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS08){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon09').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS09){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon10').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS10){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon01').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS11){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon02').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS12){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon03').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS13){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon04').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS14){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon05').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS15){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon06').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS16){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon07').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS17){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon08').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS18){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon09').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS19){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon10').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
				if(MoveLeft == MoveLS20){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon01').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},DlyS);
				}
			}else{
				if(MoveLeft == MoveL01){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon03').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL02){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon04').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL03){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon05').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL04){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon06').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL05){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon07').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL06){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon08').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL07){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon09').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL08){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon10').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL09){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon01').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL10){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon02').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL11){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon03').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL12){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon04').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL13){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon05').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL14){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon06').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL15){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon07').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL16){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon08').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL17){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon09').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL18){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon10').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL19){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon01').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
				if(MoveLeft == MoveL20){
					$('.tpl_footer .tpl_balloonjList .tpl_setBalloon02').addClass('tpl_setBalloonOn');
					setTimeout(function(){
							$('.tpl_footer .tpl_balloonjList .tpl_setObj').removeClass('tpl_setBalloonOn');
					},Dly);
				}
			}

			$FindScroll.css({transform:'translateX('+MoveLeft+'px)'});
			setTimeout(MLoop, 45);
		})();
	})();

    const $navContents = $('.js-fixed-nav');
    const $closeButton = $('.js-fixed-close');
    const $closeButtonSmall = $('.js-fixed-close--small');

    function handleScroll() {
        const windowHeight = window.innerHeight;
        const documentHeight = $(document).height();
        const scrollTop = $(window).scrollTop();

        if(scrollTop > windowHeight * 0.5) {
            $navContents.addClass('is-fixed is-show');
            // if(scrollTop > documentHeight - windowHeight - 10) {
            //     $navContents.removeClass('is-fixed');
            // }
        } else {
            $navContents.removeClass('is-fixed is-show');
        }
    }

    function handleInisitalDisplay() {
        if($(window).scrollTop() > window.innerHeight) {
            $navContents.addClass('is-show');
        } else {
            $navContents.removeClass('is-show');
        }
    }

    function closeNav() {
        $navContents.toggleClass('is-move');
        $closeButtonSmall.toggleClass('is-show')
    }

    function resetNavPosition() {
        $navContents.removeClass('is-move');
    }

    $navContents.removeClass('is-hide');

    $(window).on('scroll', handleScroll)
    $(window).on('load scroll', handleInisitalDisplay);
    $closeButton.on('click', closeNav);
    $closeButtonSmall.on('click', resetNavPosition);


});