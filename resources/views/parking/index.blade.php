<!DOCTYPE html>
@include('layouts.meta_head')
<title>月極駐車場を探す（青森・岩手・秋田・宮城・山形・福島）｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="東北6県にある駅チカの月極駐車場を簡単に探すことができます。お近くの好立地な駐車場をすばやくにチェックできるので、契約のタイミングを逃しません。お気に入りの駐車場が見つかりましたら、お気軽にお問合せください。">
<meta name="keywords" content="東北,宮城,仙台,古川,岩手,青森,八戸,秋田,山形,福島,郡山,新白河,会津若松,駐車場,月極駐車場,月極,パーキング,申し込み,契約,問合せ">
<meta property="og:title" content="月極駐車場を探す（青森・岩手・秋田・宮城・山形・福島）｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="東北6県にある駅チカの月極駐車場を簡単に探すことができます。お近くの好立地な駐車場をすばやくにチェックできるので、契約のタイミングを逃しません。お気に入りの駐車場が見つかりましたら、お気軽にお問合せください。">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/parking/parking.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body>
@include('layouts.body_head')
<div class="serviceIndex">
<div class="tpl_wrapper">
@include('layouts.header')
<main role="main" class="main">
	<div class="breadcrumbs"><div class="wrap"><ul class="breadcrumbsList"><li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li><li>月極駐車場を探す</li></ul></div></div>

	<div class="tpl_contents">

		<div class="headingTtl">
			<h1><p>月極駐車場を探す</p></h1>
		</div>
		<section class="map">
			<div class="inner">

				<div class="titlebox">
					<p>駐車場をお探しの県を<br class="sp" /><span class="pc">クリック</span><span class="sp">タップ</span>してください。</p>
				</div>
				<div class="tabbox">
					<ul>
						<li class="aomori">
							<div class="parent">
								<label>青森県</label>
							</div>
							<div class="child count2">
								<label my_val="1">青森地区</label>
								<label my_val="2">八戸地区</label>
							</div>
						</li>
						<li class="iwate">
							<div class="parent">
								<label>岩手県</label>
							</div>
							<div class="child count5">
								<label my_val="3">一関地区</label>
								<label my_val="4">北上・花巻地区</label>
								<label my_val="5">盛岡地区</label>
								<label my_val="6">沿岸地区</label>
								<label my_val="7">県北地区</label>
							</div>
						</li>
						<li class="akita">
							<div class="parent">
								<label>秋田県</label>
							</div>
							<div class="child count2">
								<label my_val="8">秋田地区</label>
								<label my_val="9">県北地区</label>
							</div>
						</li>
						<li class="miyagi">
							<div class="parent">
								<label>宮城県</label>
							</div>
							<div class="child count2">
								<label my_val="10">仙台地区</label>
								<label my_val="11">古川地区</label>
							</div>
						</li>
						<li class="yamagata">
							<div class="parent">
								<label>山形県</label>
							</div>
							<div class="child count1">
								<label my_val="12">山形地区</label>
							</div>
						</li>
						<li class="fukushima">
							<div class="parent">
								<label>福島県</label>
							</div>
							<div class="child count4">
								<label my_val="13">福島地区</label>
								<label my_val="14">会津若松地区</label>
								<label my_val="15">郡山地区</label>
								<label my_val="16">新白河地区</label>
							</div>
						</li>
					</ul>
				</div>
				<div class="gmapbox">
					<div class="gmap" id="gmap1">
					</div>
					<div class="overlay">
						<div class="inbox">
							<div class="eachwrap">
							</div>
							<label class="close"><img src="/serviceinfo/assets/img/parking/btn_close.png" alt="x" /></label>
						</div>
					</div>
					<span class="tip" my_pnum=""></span>
				</div>

			</div>
		</section>
		<section class="contact">
			<div class="inner">

				<div class="eachwrap">
				</div>

			</div>
		</section>
		<section class="reserve">
			<div class="inner">

				<div class="eachwrap">

					<div class="each" my_pnum="1">
						<div class="inbox">
							<a href="//btimes.jp/aomori/?utm_source=livit&utm_medium=referral" target="_blank">
								<i><img src="/serviceinfo/assets/img/parking/logo_btimes.jpg" alt="B-Times" /></i>
								<p><span>青森県</span>の
									<br />予約できる駐車場</p>
							</a>
						</div>
					</div>

					<div class="each" my_pnum="2">
						<div class="inbox">
							<a href="//btimes.jp/iwate/?utm_source=livit&utm_medium=referral" target="_blank">
								<i><img src="/serviceinfo/assets/img/parking/logo_btimes.jpg" alt="B-Times" /></i>
								<p><span>岩手県</span>の
									<br />予約できる駐車場</p>
							</a>
						</div>
					</div>

					<div class="each" my_pnum="3">
						<div class="inbox">
							<a href="//btimes.jp/akita/?utm_source=livit&utm_medium=referral" target="_blank">
								<i><img src="/serviceinfo/assets/img/parking/logo_btimes.jpg" alt="B-Times" /></i>
								<p><span>秋田県</span>の
									<br />予約できる駐車場</p>
							</a>
						</div>
					</div>

					<div class="each" my_pnum="4">
						<div class="inbox">
							<a href="//btimes.jp/miyagi/?utm_source=livit&utm_medium=referral" target="_blank">
								<i><img src="/serviceinfo/assets/img/parking/logo_btimes.jpg" alt="B-Times" /></i>
								<p><span>宮城県</span>の
									<br />予約できる駐車場</p>
							</a>
						</div>
					</div>

					<div class="each" my_pnum="5">
						<div class="inbox">
							<a href="//btimes.jp/yamagata/?utm_source=livit&utm_medium=referral" target="_blank">
								<i><img src="/serviceinfo/assets/img/parking/logo_btimes.jpg" alt="B-Times" /></i>
								<p><span>山形県</span>の
									<br />予約できる駐車場</p>
							</a>
						</div>
					</div>

					<div class="each" my_pnum="6">
						<div class="inbox">
							<a href="//btimes.jp/fukushima/?utm_source=livit&utm_medium=referral" target="_blank">
								<i><img src="/serviceinfo/assets/img/parking/logo_btimes.jpg" alt="B-Times" /></i>
								<p><span>福島県</span>の
									<br />予約できる駐車場</p>
							</a>
						</div>
					</div>

				</div>
			</div>

		</section>

	<!-- /.tpl_contents --></div>
</main>
@include('layouts.banner')
@include('layouts.footer')

<!-- /.tpl_wrapper --></div>
<!-- /.serviceIndex --></div>

<!-- [start]script -->
<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyDStzLTp5V_QtwRG5i3MUm4UdBOxS9G-3A"></script>
<script src="/serviceinfo/assets/js/common/jquery.js"></script>
<script src="/serviceinfo/assets/js/common/base.js"></script>
<script src="/serviceinfo/assets/js/common/common.js"></script>
<script src="/serviceinfo/assets/js/parking/parking.js"></script>
<!-- [end]script -->
@include('layouts.body_close')
</body>
</html>
