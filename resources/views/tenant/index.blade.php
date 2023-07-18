<!DOCTYPE html>
@include('layouts.meta_head')
<title>出店・商品の募集｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="駅という最高の立地でビジネスチャンスをつかみませんか？弊社は東北6県の駅を起点に事業を展開しており、JR駅内やショッピングセンター等で共に東北を盛り上げていただける営業のパートナーを募集しております。ぜひお気軽にお問い合わせください。">
<meta name="keywords" content="JR,ジェイアール,東北,宮城,仙台,岩手,盛岡,青森,秋田,山形,福島,郡山,駅,エキナカ,ショッピングセンター,テナント,出店,募集,駅,催事,臨売,エキナカ市場,短期,長期,申し込み,契約,問合せ">
<meta property="og:title" content="JR東日本交通広告｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="駅という最高の立地でビジネスチャンスをつかみませんか？弊社は東北6県の駅を起点に事業を展開しており、JR駅内やショッピングセンター等で共に東北を盛り上げていただける営業のパートナーを募集しております。ぜひお気軽にお問い合わせください。">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/tenant/tenant.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body class="tekute">
@include('layouts.body_head')
<div class="serviceIndex">
		<div class="tpl_wrapper">
          @include('layouts.header')
				<main role="main" class="main">
						<div class="breadcrumbs">
								<div class="wrap">
										<ul class="breadcrumbsList">
												<li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li>
												<li>出店・商品の募集</li>
										</ul>
								</div>
						</div>
						<div class="tpl_contents">
								<div class="mainVisual">
										<!--<h2 class="heading">広告メディア</h2>-->
										<div class="main"><img src="/serviceinfo/assets/img/tenant/main_pc.jpg" alt="出店・商品の募集" class="pc"><img src="/serviceinfo/assets/img/tenant/main_sp.jpg" class="sp" alt="出店・商品の募集"></div>
								</div>
								<section class="howto">
										<ul class="btn_anchor">
										   <li><img src="/serviceinfo/assets/img/tenant/btn_howto01.png" alt="駅に出店したい"><span class="arrow"></span></li>
										   <li><img src="/serviceinfo/assets/img/tenant/btn_howto02.png" alt="ショッピングセンターに出店したい"><span class="arrow"></span></li>
										   <li><img src="/serviceinfo/assets/img/tenant/btn_howto03.png" alt="催事に出店したい"><span class="arrow"></span></li>
										   <li><img src="/serviceinfo/assets/img/tenant/btn_howto04.png" alt="商品を紹介したい"><span class="arrow"></span></li>
										</ul>
								</section>
								<section class="contact" id="contact_top">
									<div class="inner">
										<div class="btn"><a href="mailto:info@livit.jregroup.ne.jp">お問合せはこちら</a></div>
										<p class="lead">※返信にお時間を頂く場合がございます</p>
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
<script src="/serviceinfo/assets/js/common/jquery.rwdImageMaps.min.js"></script>
<script>
$(function(){
 $('img[usemap]').rwdImageMaps();
});
</script>
<!-- [end]script -->
@include('layouts.body_close')
</body>
</html>
