"use strict";

$(function() {
  //[common func]
  var isPc = function() {
    if ($(window).width() > 768) {
      return true;
    }
    return false;
  }
  // [ userAgent ]
   var checkUA = function(name){
     var ua = navigator.userAgent.toLowerCase();
     console.log(ua);
     if(ua.indexOf(name.toLowerCase()) !== -1){
         return true;
     }
     return false;
 };

 if(checkUA("trident")){
     $("html").addClass("ie11Mode");
 }else if(checkUA("msie")){
     $("html").addClass("msieMode");
 }else if(checkUA("iphone")){
     $("html").addClass("iphoneMode");
 }else if(checkUA("android")){
     $("html").addClass("androidMode");
 }else if(checkUA("Mac")){
     $("html").addClass("macMode");
 }

$( 'img[usemap]' ).rwdImageMaps();

  //[pagetop]
  var topBtn = $('#pagetop');
  $(window).scroll(function(){
    var scrollHeight = $(document).height();
    var scrollPos = $(window).height() + $(window).scrollTop();
    var footerHeight = $('footer').innerHeight();
    if(isPc()){
      var diff = 50
    }else{
      var diff = 20
    }
    if(scrollHeight - scrollPos <= footerHeight){
      $('#pagetop').css({
        'position':'absolute',
        'bottom':footerHeight + diff
      });
    }else{
      $('#pagetop').css({
        'position':'fixed',
        'bottom':'50px'
      });
    }
    if($(this).scrollTop() >100){
      topBtn.stop().fadeIn();
    }else{
      topBtn.stop().fadeOut();
    }
  });
  topBtn.on('click', function() {
    var speed = 500;
    $('html,body').animate({
      scrollTop: 0
    }, speed, 'swing');
    return false;
  });

  //[ inner scroll]
  function anchorScroll() {
    $('a').click(function() {
      var href = $(this).attr('href');
      if (href.indexOf('#') !== -1) {
        var $target = $(href);
        var position = 0;
        if ($target.length) {
          position = $target.offset().top;
        }
        $('html,body').animate({
          scrollTop: position
        }, 500, 'swing');
      }
    });
  }
anchorScroll();

  //[ fade in ]
  $(window).on('load scroll resize', function() {
    $('.fadein').each(function() {
      var $this = $(this);
      var areaTop = $this.offset().top;
      if ($(window).scrollTop() >= (areaTop + 150) - $(window).height()) {
        $this.addClass('appear');
      }
    });

    if($(window).scrollTop() > 80){
      $('.header').addClass('fixed');
    }else{
      $('.header').removeClass('fixed');
    }
  });

  //[ image loaded ]
  $('.tpl_contents').imagesLoaded({
    background: true
  }, function() {
    pageOpen();
  })
  var winHeight = $(window).height();
  $('#loading-bg').height(winHeight).css('display', 'block');

  function pageOpen() {
    $('#loading-bg').delay(600).fadeOut(1200);
  }

  //[ menu ]

  if (!isPc()) {
    //----sp
    var menubtn = $(".header_menu-button");
    var menubar = $('.header_menu-button-bar-1,.header_menu-button-bar-3');
    menubtn.on("click", function() {
      if (!$(this).hasClass("active")) {
        menubtn.addClass("active").next().fadeIn();
        menubar.addClass('expand');
        $('body').addClass('htmlFixed');
      } else {
        $('body').removeClass('htmlFixed');
        menubtn.removeClass("active").next().fadeOut();
        menubar.removeClass('expand');
        // setTimeout(function(){
        //   window.scrollTo(0, scrollnavTop);
        // }, 500)
      }
    });
    $('.nav_list').on("click", "a", function() {
      $('body').removeClass('htmlFixed');
      anchorScroll();
      menubtn.removeClass("active");
      setTimeout(function() {
        $('.header_menu').fadeOut();
      }, 500);
    });
  }

}); // end of wrap func
