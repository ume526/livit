<!DOCTYPE html>
<html lang="ja">
<head>
<script id="Cookiebot" src="https://consent.cookiebot.com/uc.js" data-cbid="4976fc6f-e5db-4478-8d55-e9bbdac18af4" data-blockingmode="auto" type="text/javascript"></script>
<script src="/assets/js/analytics.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width">

	<meta name="description" content="「仙臺驛政宗」発売10年を記念しあゆみを展示-LiViTギャラリー-">
	<meta name="keywords" content="">
	<title>{{ $news_article->title }}｜ニュースリリース｜JR東日本東北総合サービス株式会社【LiViT】</title>


<link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">

<link rel="icon" href="/assets/img/common/favicon.ico">
<link rel="stylesheet" href="/assets/css/common.css">
<script src="/assets/js/common.js"></script>

	<link rel="stylesheet" href="/assets/css/company/news-release.css">

	<!-- viewer -->
	<link rel="stylesheet" href="/assets/js/viewer/viewer.min.css">
	<script src="/assets/js/viewer/viewer.min.js"></script>
	<script>
		(function($) {
			$(function() {
				var options = {
					button: true,
					navbar: false,
					title: false,
					toolbar: true,
					tooltop: false,
					tooltip: false,
					movable: true,
					zoomable: true,
					rotatable: false,
					scalable: false,
					transition: true,
					fullscreen: false,
					keyboard: true,
					minZoomRatio: 0.1,
					url: "data-original",
					built: function (){},
					shown: function (){},
					viewed: function (){}
				};
				$('.image').viewer(options);
			});
		})(jQuery);
	</script>
</head>
<body>
	<div id="wrap" class="company lower">

		<header id="header">
	<div class="standard-box standard-box-large">
		<ul class="sp-only sp-flex-layout tabs">
			<li><a href="/"><span>SERVICE</span><span>サービス情報</span></a></li>
			<li><a href="/company/" class="current"><span>COMPANY</span><span>企業情報</span></a></li>
		</ul>
		<div class="box01 pc-flex-layout">
			<div class="logo"><a href="/"><img src="/assets/img/common/logo.png" width="282" height="106" alt="Livit JR東日本総合サービス株式会社"></a></div>
			<ul class="pc-only pc-flex-layout tabs">
				<li><a href="/"><span>SERVICE</span><span>サービス情報</span></a></li>
				<li><a href="/company/" class="current"><span>COMPANY</span><span>企業情報</span></a></li>
			</ul>
			<div class="pc-only contact opacity">
				<a href="/company/contact/" class="pc-flex-layout"><span>CONTACT</span><span>お問合せ</span></a>
			</div>
			<div id="search_btn" class="pc-only search pc-flex-layout">
				<gcse:searchbox-only></gcse:searchbox-only>
			</div>
			<div class="sp-only menu_btn">
				<a href="javascript:void(0)" id="sp-menu-open"><span class="bar"></span><span class="bar"></span><span class="bar"></span><span>メニュー</span></a>
			</div>
		</div>
	</div>
	<nav id="global_nav" class="global_nav company_nav standard-box-wrap">
		<ul class="list pc-flex-layout">
			<li class="sp-only sp-flex-layout box02">
				<div class="search"><gcse:searchbox-only></gcse:searchbox-only></div>
				<div class="close_btn"><a href="javascript:void(0)" id="sp-menu-close"><span>メニュー</span></a></div>
			</li>
			<li class="style01"><a href="/company/"><span>HOME</span><span>ホーム</span></a></li>
			<li class="style01"><a href="/company/idea/"><span>IDEA</span><span>企業理念</span></a></li>
			<li class="style01"><a href="/company/business/"><span>BUSINESS</span><span>事業紹介</span></a></li>
			<li class="style01"><a href="/company/csr/diversity/"><span>CSR</span><span>CSR活動</span></a></li>
			<li class="style01"><a href="/company/profile/"><span>PROFILE</span><span>会社概要</span></a></li>
			<li class="style01"><a href="/company/news-release/"><span>NEWS RELEASE</span><span>ニュースリリース</span></a></li>
			<li class="style01"><a href="/company/recruit/"><span>RECRUIT</span><span>採用情報</span></a></li>
			<li class="sp-only contact style01"><a href="/company/contact/"><span>CONTACT</span><span>お問合せ</span></a></li>
		</ul>
	</nav>
</header>


		<div id="contents">
			<div class="breadcrumbs standard-box-wrap">
				<ol class="standard-box flex-layout">
					<li><a href="/company/">HOME</a></li>
					<li><a href="/company/news-release/{{ $year }}/">ニュースリリース {{ $year }}年</a></li>
					<li>{{ $news_article->title }}</li>
				</ol>
			</div>
			<div id="conts">
				<div class="standard-box">
					<h1 class="headline01"><span>
						<span class="eng">NEWS RELEASE</span>
						<span class="jpn">ニュースリリース</span>
					</span></h1>
					<main class="articleOuter">
						<article class="articleBox">
							<div class="info">
								<time datetime="{{ format_date_s($news_article->publication_date_time_start) }}">{{ format_date_s($news_article->publication_date_time_start) }}</time>
								@if ( $news_article->tag_names )
									<ul class="tag">
									@foreach (explode(",",$news_article->tag_names) as $tag)<li>{{ $tag }}</li>@endforeach
									</ul>
								@endif
							</div>
							<section class="articleConts">
                                <h2>{!! $news_article->title !!}</h2><br>
								{!! $news_article->article_body !!}
							</section>
						</article>
						<p class="back">
							<a href="/company/news-release/{{ $year }}/">ニュースリリース一覧に戻る &raquo;</a>
						</p>
					</main>
					<aside id="sideBar">
						<section class="backNumber">
							<h2>バックナンバー</h2>
							<ul class="yearlyList">
								@foreach($archive_list as $archive)
									<li><a href="/company/news-release/{{ $archive->year }}/">{{ $archive->year }}年</a></li>
								@endforeach
							</ul>
						</section>
					</aside>

				</div>
			</div>
		</div>
		
		<footer class="standard-box-wrap">
	<div id="footer-inner" class="box01 standard-box">
		<div id="pagetop-btn" class="pagetop-btn opacity"><a href="#wrap"><img src="/assets/img/common/page_top.png" width="15" height="14" alt=""></a></div>
		<!-- <ul class="sns flex-layout opacity">
			<li class="twitter"><a href="#"><img src="/assets/img/common/icon_twitter.png" width="57" height="48" alt="Twitter"></a></li>
			<li class="facebook"><a href="#"><img src="/assets/img/common/icon_facebook.png" width="26" height="48" alt="Facebook"></a></li>
			<li class="instagram"><a href="#"><img src="/assets/img/common/icon_instagram.png" width="48" height="47" alt="Instagram"></a></li>
		</ul> -->
		<nav class="link_list">
			<ul class="pc-flex-layout">

				<li><a href="/company/contact/">お問合せ</a></li>
				<li><a href="/company/privacy-policy/">個人情報保護方針</a></li>
				<li><a href="/company/site-policy/">ウェブサイトご利用にあたって</a></li>
				<li><a href="/company/social-policy/">ソーシャルメディアポリシー</a></li>
				<li><a href="/company/sitemap/">サイトマップ</a></li>

			</ul>
		</nav>
		<div class="copy">
			<small>Copyright&copy; TOHOKU SOUGOU SERVICE. All Rights Reserved.</small>
		</div>
	</div>
</footer>

<div id="loading_animation" class="loading_animation"><i class="loading_animation_line"></i></div>

<script type="text/javascript" src="https://www.google.com/cse/brand?form=cse-search-box&lang=ja"></script>
<script>
  (function() {
    var cx = '018186300925055370683:szx4_pcrwsc';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

	</div>
</body>
</html>
