<!DOCTYPE html>
@include('layouts.meta_head')
<title>Pivot｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="食卓を賑わす、おいしい声を支えたい。野菜や精肉、鮮魚を中心にパンやお惣菜まで、品質、価格、品揃えともに充実させ、プロの厳しい目で選りすぐった食材を、毎日の食卓にお届け。 暮らしに新しい風を吹き込む、彩りとおいしさたっぷりの生鮮食品館「ピボット」です。">
<meta name="keywords" content="クオリティフードストア,宮城,仙台,仙台原ノ町,古川,福島,郡山,会津若松,駅,ショッピング,スーパー,買い物,飲食店,生鮮,食料品,日用品,弁当,惣菜,サービス,ピボット,Pivot,店舗一覧">
<meta property="og:title" content="Pivot｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="食卓を賑わす、おいしい声を支えたい。野菜や精肉、鮮魚を中心にパンやお惣菜まで、品質、価格、品揃えともに充実させ、プロの厳しい目で選りすぐった食材を、毎日の食卓にお届け。 暮らしに新しい風を吹き込む、彩りとおいしさたっぷりの生鮮食品館「ピボット」です。">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/slick.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/pivot/pivot.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body id="pivot" class="pivot">
@include('layouts.body_head')
  <div class="serviceIndex">
	<div class="tpl_wrapper">
      @include('layouts.header')
	  <main role="main" class="main">
        <div class="breadcrumbs">
          <div class="wrap">
	        <ul class="breadcrumbsList">
	          <li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li>
	          <li>Pivot</li>
	        </ul>
          </div>
        </div>
        <div class="tpl_contents">
		  <section class="mainVisual slickSlider">
			<div class="inner">
			  <div class="main">
				<ul id="slide">
				  <li class="slide01"><img src="/serviceinfo/assets/img/pivot/slide01_pc.jpg" class="pc" alt=""><img src="/serviceinfo/assets/img/pivot/slide01_sp.jpg" class="sp" alt=""></li>
				  <li class="slide02"><img src="/serviceinfo/assets/img/pivot/slide02_pc.jpg" class="pc" alt=""><img src="/serviceinfo/assets/img/pivot/slide02_sp.jpg" class="sp" alt=""></li>
				  <li class="slide03"><img src="/serviceinfo/assets/img/pivot/slide03_pc.jpg" class="pc" alt=""><img src="/serviceinfo/assets/img/pivot/slide03_sp.jpg" class="sp" alt=""></li>
				</ul>
			  </div>
			  <div class="headTtl">
				<dl>
				  <dt>食卓を賑わす、おいしい声を支えたい。</dt>
				  <dd><img src="/serviceinfo/assets/img/pivot/logo_pivot.png" alt="pivot"></dd>
				</dl>
			  </div>
			  <ul class="bg">
				<li class="box01"></li>
				<li class="box02"></li>
				<li class="box03"></li>
				<li class="box04"></li>
				<li class="box05"></li>
				<li class="box06"></li>
			  </ul>
			  <p class="lead">毎日の事だから、品数も品質も大切。「ここにくれば･･･」と、誰からも期待して欲しい。<br class="pc">
				そんな素敵な関係を作っていけるよう、野菜や精肉、鮮魚を中心にパンやお惣菜まで、品質、価格、品揃えともに充実させ、<br class="pc">
				プロの厳しい目で選りすぐった食材の数々を、毎日の食卓にお届けします。<br class="pc">
				暮らしに新しい風を吹き込む、彩りとおいしさたっぷりの生鮮食品館「ピボット」です。</p>

			  <ul class="mainItem">
				<li class="item01"></li>
				<li class="item02"></li>
				<li class="item03 sp"></li>
			  </ul>
			</div>
		  </section>
          @include('pivot.search_section')
		  <section class="shop">
			<div class="inner">
			  <h2 class="tit">SHOP | 店舗一覧</h2>
			  <ul class="shoplist">
				<li><a href="{{ route('pivot-haranomachi') }}">
				  <p class="thumb"><img src="/serviceinfo/assets/img/pivot/shop_img01.jpg"  width="100%" alt=""></p>
				  <dl class="data">
					<dt>JR陸前原ノ町駅隣接</dt>
					<dd>クオリティフードストア<br>
					  仙台原ノ町Pivot</dd>
				  </dl>
				</a>
				<li> <a href="{{ route('pivot-fukushima') }}">
				  <p class="thumb"><img src="/serviceinfo/assets/img/pivot/shop_img05.jpg"  width="100%" alt=""></p>
				  <dl class="data">
					<dt>JR福島駅直結</dt>
					<dd>福島駅西口<br>
					  パワーシティPivot</dd>
				  </dl>
				</a> </li>
				<li> <a href="{{ route('pivot-koriyama') }}">
				  <p class="thumb"><img src="/serviceinfo/assets/img/pivot/shop_img03_pc.jpg"  width="100%" class="pc" alt=""><img src="/serviceinfo/assets/img/pivot/shop_img03.jpg"  width="100%" class="sp" alt=""></p>
				  <dl class="data">
					<dt>JR郡山駅直結</dt>
					<dd>郡山駅食品館<br>
					  Pivot</dd>
				  </dl>
				</a> </li>
				<li> <a href="{{ route('pivot-aizuwakamatsu') }}">
				  <p class="thumb"><img src="/serviceinfo/assets/img/pivot/shop_img04.jpg"  width="100%" alt=""></p>
				  <dl class="data">
					<dt>JR会津若松駅隣接</dt>
					<dd>会津若松駅食品館<br>
					  Pivot</dd>
				  </dl>
				</a> </li>
			  </ul>
			  <ul class="bgItem">
				<li class="item07"></li>
				<li class="item08"></li>
				<li class="item09"></li>
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
  <script src="/serviceinfo/assets/js/common/matchheight.js"></script>
  <script src="/serviceinfo/assets/js/common/slick.js"></script>
  <script src="/serviceinfo/assets/js/pivot/script.js"></script>
  <script>
   $(function(){
	   $('#slide').slick({
           autoplay:true,
           dots: false,
           speed: 1000,
           fade: true,
           cssEase: 'linear',
	       controls:true,
		   arrows:false
       });

	   $('.shoplist dd').matchHeight();
   });
  </script>
  <!-- [end]script -->
  @include('layouts.body_close')
</body>
</html>
