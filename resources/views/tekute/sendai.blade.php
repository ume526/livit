<!DOCTYPE html>
@include('layouts.meta_head')
<title>tekuteせんだい｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="JR仙台駅内に位置し、惣菜、スイーツなどを取扱う専門店と、お買い物中休憩やお食事ができる飲食店が揃っており便利です。毎日のお買い物はもちろん、休日のちょっとしたお出かけにもお使いいただけます。">
<meta name="keywords" content="仙台,ショッピング,買い物,飲食店,食料品,生鮮,雑貨,手土産,プレゼント,弁当,惣菜,スイーツ,てくて,テクテ,tekute,ＡＴＭ,店舗情報">
<meta property="og:title" content="tekuteせんだい｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="JR仙台駅内に位置し、惣菜、スイーツなどを取扱う専門店と、お買い物中休憩やお食事ができる飲食店が揃っており便利です。毎日のお買い物はもちろん、休日のちょっとしたお出かけにもお使いいただけます。">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/slick.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/tekute/tekute.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body id="area01" class="tekute sendai">
@include('layouts.body_head')
<div class="serviceIndex">
		<div class="tpl_wrapper">
          @include('layouts.header')
				<main role="main" class="main">
				<div class="breadcrumbs">
								<div class="wrap">
										<ul class="breadcrumbsList">
												<li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li>
												<li><a href="/tekute/">tekute</a></li>
												<li>tekuteせんだい</li>
										</ul>
								</div>
						</div>
						<div class="tpl_contents">
								<div class="headingTtl">
										<p class="logo"><img src="/serviceinfo/assets/img/tekute/ttl_sendai.png" class="tekute_sendai" alt="tekuteせんだい"><img src="/serviceinfo/assets/img/tekute/tekute_dining_logo.png" class="tekute_dining" alt="tekuteせんだい"></p>
						<div class="js-fixed-nav">
						<button class="js-fixed-close">
						<svg xmlns="http://www.w3.org/2000/svg" width="8.707" height="8.707" viewBox="0 0 8.707 8.707">
						  <g id="" data-name="" transform="translate(0.268 0.268)">
							<line id="" data-name="" x2="8" y2="8" transform="translate(0.086 0.086)" fill="none" stroke="#fff" stroke-width="1"></line>
							<line id="" data-name="" x1="8" y2="8" transform="translate(0.086 0.086)" fill="none" stroke="#fff" stroke-width="1"></line>
						  </g>
						</svg>    
					  </button>
					  <ul class="sns">
						<li class="insta"><a href="https://www.instagram.com/sendai_ekinaka/" target="_blank"><img src="/serviceinfo/assets/img/common/btn_insta.png" width="100%" alt=""><span class="text">tekute<br class="sp">公式インスタグラム<br>お得な情報配信中！</span></a></li>
						<li class="line"><a href="https://page.line.me/shb5649n" target="_blank"><img src="/serviceinfo/assets/img/common/btn_line.png" width="100%" alt=""><span class="text">tekute<br class="sp">公式LINE<br>お得な情報配信中！</span></a></li>
					  </ul>
					  </div>
								</div>
								<section class="mainVisual">
								   <!-- <img src="/serviceinfo/assets/img/tekute/sendai_main.jpg"> -->
									<div class="video">
										<div id="player"></div>
									</div>
									<!-- <div class="movie pc"><iframe width="980" height="550" src=https://www.youtube.com/embed/ocpz0f7SUYU?autoplay=1&mute=1&loop=1" frameborder="0" allowfullscreen></iframe></div> -->
									<!-- <ul id="slide" class="main-slider">
	                                                			<li><img src="/serviceinfo/assets/img/tekute/sendai_slide01_pc.jpg" alt="" class="pc"><img src="/serviceinfo/assets/img/tekute/sendai_slide01_sp.jpg" alt="" class="sp"></li>
									</ul>-->
								</section>
								<ul class="anchor">
									<li><a href="https://www.livit.jregroup.ne.jp/tekute/search?pt%5B%5D=91&ot%5B%5D=82&keywords=">ショップ一覧</a></li>
									<li><a href="#floormap">フロアマップ</a></li>
								</ul>
                                @include('tekute.search_section', ['selected_tag' => $selected_tag_name])
                                @include('tekute.news_section')
								<div class="insta-bnr"><a href="https://www.instagram.com/sendai_ekinaka/" target="_blank"><img src="/serviceinfo/assets/img/tekute/bnr_tekute_pc.png" class="pc" alt=""><img src="/serviceinfo/assets/img/tekute/bnr_tekute_sp.png" class="sp" alt=""></a></div>

								<section class="floormap" id="floormap">
										<div class="inner tab">
												<h2 class="tit"><img src="/serviceinfo/assets/img/tekute/ttl_floormap.png" alt="Flore map フロアマップ"></h2>
												<ul class="tab-list">
													<li class="selected"><a href="javascript:void(0)" data-tabid="1">tekuteせんだい</a></li>
													<li><a href="javascript:void(0)" data-tabid="2">みちのくうまいもん通り<br>tekute dining</a></li>
												</ul>

												<div class="tab-panel">
												<div class="map" data-contentid="1">
														<iframe src="{{ route('tekute-sendai-map') }}" width="100%" height="460" scrolling="no"></iframe>
												</div>
												<div class="map hidden" data-contentid="2">
														<iframe src="{{ route('tekute-sendai2-map') }}" width="100%" height="460" scrolling="no"></iframe>
												</div>
									</div>
<div class="street"><iframe src="
https://www.google.com/maps/embed?pb=
!4v1718095775854!6m8!1m7!1sCAoSLEFGMVFpcE84RGJiaHNNTENfdjBYZGN2VmJzdzlsbnpRX21feGVsZUhHX0pv!2m2!1d38.262025562302!2d140.88194149356!3f106.89559339053264!4f-3.764626275889981!5f0.7820865974627469" width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
										</div>



								</section>
								

								<div class="jrebnr">
										<div class="logo sp"><img src="/serviceinfo/assets/img/tekute/jrepoint.gif" alt="JRE POINT"></div>
										<dl>
												<dt>｢tekute せんだい｣での<br class="sp">お買いものがJRE POINTカードで<br class="sp">もっとおトク！</dt>
												<dd>
														<div class="logo pc"><img src="/serviceinfo/assets/img/tekute/jrepoint.gif" alt="JRE POINT"></div>
														<ul class="point">
																<li class="col">原則100円(税抜)ごとに<br>
																		1ポイントが貯まります。</li>
																<li>1ポイント1円として<br>
																		お支払いの際に<br>
																		ご利用いただけます。</li>
																<li>ポイントは｢tekuteせんだい｣<br>
																		及びJR東日本グループの<br class="sp">
																		駅ビル等でご利用いただけます。</li>
														</ul>
														<p class="kome">※ポイント付与・利用については一部ご利用いただけない店舗もございます。</p>
														<div class="btn_detail"><a href="https://www.jrepoint.jp/" target="_blank">詳しくはこちら</a></div>
												</dd>
										</dl>
								</div>
								<div class="shopinfo">
								<ul class="sns">
						<li class="insta"><a href="https://www.instagram.com/sendai_ekinaka/" target="_blank"><img src="/serviceinfo/assets/img/common/btn_insta.png" width="35" alt=""></a></li>
						<li class="line"><a href="https://page.line.me/shb5649n" target="_blank"><img src="/serviceinfo/assets/img/common/btn_line.png" width="35" alt=""></a></li>
					  </ul>
								</div>
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
<script src="/serviceinfo/assets/js/common/matchheight.js"></script>
<script src="/serviceinfo/assets/js/common/slick.js"></script>
<script src="/serviceinfo/assets/js/tekute/script.js"></script>
<script src="/serviceinfo/assets/js/tekute/movie_sendai.js"></script>
<script src="/serviceinfo/assets/js/common/ofi.min.js"></script>
<script>
$(function(){
	 $('.slider dd').matchHeight();

  $('.responsive-iframe-container iframe h1').css('display','none');
});
</script>
<!-- [end]script -->
@include('layouts.body_close')
</body>
</html>
