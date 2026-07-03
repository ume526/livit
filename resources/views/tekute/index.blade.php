<!DOCTYPE html>
@include('layouts.meta_head')
<title>tekute ｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="てくてく歩く先に、人が集い、笑顔が行き交い、そして街が、地域が元気で満たされていくーそんな、ワクワクの起点となる場所をつくりたくてtekuteは誕生しました。晴れの日も、くもりの日も、雨の日も、tekuteはいつも、暮らしのとなりにいます。おいしいもの、すてきなものがいっぱいのtekuteに気軽にてくてく、足を運んでみませんか。">
<meta name="keywords" content="宮城,仙台,長町,多賀城,塩竈,本塩釜,駅,ショッピング,買い物,飲食店,生鮮,食料品,雑貨,手土産,プレゼント,弁当,惣菜,スイーツ,カフェ,てくて,テクテ,tekute,店舗一覧">
<meta property="og:title" content="tekute｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="てくてく歩く先に、人が集い、笑顔が行き交い、そして街が、地域が元気で満たされていくーそんな、ワクワクの起点となる場所をつくりたくてtekuteは誕生しました。晴れの日も、くもりの日も、雨の日も、tekuteはいつも、暮らしのとなりにいます。おいしいもの、すてきなものがいっぱいのtekuteに気軽にてくてく、足を運んでみませんか。">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/swiper.min.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/tekute/tekute.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body id = "tekute" class="tekute tekute_top">
@include('layouts.body_head')
  <div class="serviceIndex">
    <div class="tpl_wrapper">
				@include('layouts.header')
				<main role="main" class="main">
						<div class="breadcrumbs">
								<div class="wrap">
										<ul class="breadcrumbsList">
												<li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li>
												<li>tekute</li>
										</ul>
								</div>
						</div>
						<div class="tpl_contents">
								<section class="mainVisual">
									<div class="message">
									   <h2><img src="/serviceinfo/assets/img/tekute/tekute.png" alt="tekute"></h2>
									   <p class="txt"><img src="/serviceinfo/assets/img/tekute/message.png" alt="てくてく歩く先に、人が集い、笑顔が行き交い、そして街が、地域が、元気で満たされていく"></p>
									   <div class="swiper-container slider-thumbnail">
										<div class="swiper-wrapper">
											<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_thumb01.jpg" alt=""></div>
											<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_thumb02.jpg" alt=""></div>
											<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_thumb03.jpg" alt=""></div>
											<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_thumb04.jpg" alt=""></div>
											<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_thumb05.jpg" alt=""></div>
										</div>
									</div> 
									</div>  
									<div class="swiper-container slider" id="slide">
										<div class="swiper-wrapper">
												<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_slide01_pc.jpg" alt="" class="pc"><img src="/serviceinfo/assets/img/tekute/top_slide01_sp.jpg" alt="" class="sp"></div>
												<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_slide02_pc.jpg" alt="" class="pc"><img src="/serviceinfo/assets/img/tekute/top_slide02_sp.jpg" alt="" class="sp"></div>
												<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_slide03_pc.jpg" alt="" class="pc"><img src="/serviceinfo/assets/img/tekute/top_slide03_sp.jpg" alt="" class="sp"></div>
												<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_slide04_pc.jpg" alt="" class="pc"><img src="/serviceinfo/assets/img/tekute/top_slide04_sp.jpg" alt="" class="sp"></div>
												<div class="swiper-slide"><img src="/serviceinfo/assets/img/tekute/top_slide05_pc.jpg" alt="" class="pc"><img src="/serviceinfo/assets/img/tekute/top_slide05_sp.jpg" alt="" class="sp"></div>
										</div>
									</div>					
								</section>

<section class="shop">
									<div class="inner">
										<h2 class="tit"><img src="/serviceinfo/assets/img/tekute/ttl_shop.png" alt="Shop 店舗一覧"></h2>
										<ul class="shoplist">
											<li><a href="{{ route('tekute-sendai') }}"><p class="thumb"><img src="/serviceinfo/assets/img/tekute/shop_img01.jpg" alt="tekuteせんだい"></p>
											<dl class="data">
												<dt>JR仙台駅1F</dt>
												<dd>tekuteせんだい</dd>
											</dl></a></li>
											<li><a href="{{ route('tekute-nagamachi') }}"><p class="thumb"><img src="/serviceinfo/assets/img/tekute/shop_img02.jpg" alt="tekuteながまち"></p>
											<dl class="data">
												<dt>JR長町駅直結</dt>
												<dd>tekuteながまち</dd>
											</dl></a></li>
											<li><a href="{{ route('tekute-search') }}?tag_names={{ urlencode(config('livit.static_tag_names.tekute_tagajo')) }}"><p class="thumb"><img src="/serviceinfo/assets/img/tekute/shop_img03.jpg" alt="tekuteたがじょう"></p>
											<dl class="data">
												<dt>JR多賀城駅直結</dt>
												<dd>tekuteたがじょう</dd>
											</dl></a></li>
											<li><a href="{{ route('tekute-search') }}?tag_names={{ urlencode(config('livit.static_tag_names.tekute_honshiogama')) }}"><p class="thumb"><img src="/serviceinfo/assets/img/tekute/shop_img04.jpg" alt="tekuteほんしおがま"></p>
											<dl class="data">
												<dt>JR本塩釜駅1F</dt>
												<dd>tekuteほんしおがま</dd>
											</dl></a></li>
										</ul>
									</div>
								</section>

        </div>
	  </main>
      @include('layouts.banner')
      @include('layouts.footer')
	  <!-- /.tpl_wrapper --></div>
	<!-- /.serviceIndex -->
  </div>
  <!-- [start]script -->
	<script src="/serviceinfo/assets/js/common/jquery.js"></script>
	<script src="/serviceinfo/assets/js/common/base.js"></script>
	<script src="/serviceinfo/assets/js/common/common.js"></script>
	<script src="/serviceinfo/assets/js/common/swiper.min.js"></script>
	<script src="/serviceinfo/assets/js/common/ofi.min.js"></script>  
  <script>
		let sliderThumbnail = new Swiper('.slider-thumbnail', {
			slidesPerView: 4,
			spaceBetween: 20,
			freeMode: true,
			watchSlidesVisibility: true,
			watchSlidesProgress: true
		});

		let slider = new Swiper('.slider', {
			loop: true,
			speed: 1000,
			slideToClickedSlide: true,
			effect: 'fade',
			autoplay: {
				delay: 2000
			},
			thumbs: {
				swiper: sliderThumbnail
			}
		})

		$(function(){
	    objectFitImages();
		});
  </script>
  <!-- [end]script -->
  @include('layouts.body_close')
</body>
</html>
