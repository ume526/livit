<!DOCTYPE html>
@include('layouts.meta_head')
@php
if (!$meta_description) {
    $meta_description = 'JR東日本グループ「JR東日本東北総合サービス株式会社」の公式サイトです。東北６県の駅を起点に展開するエキナカ店舗やショッピングセンター、月極駐車場などのサービス情報をご覧いただけます。目的の県や駅からショップ情報が検索できます。';
}
@endphp
<title>ショップ一覧｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords ?? '' }}">
<meta property="og:title" content="ショップ一覧｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="{{ $meta_description }}">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/slick.css">
<link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/serviceinfo/assets/css/shop/index/index.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body>
@include('layouts.body_head')
  <div class="searchIndex">
    <div class="tpl_wrapper">
      @include('layouts.header')
      <main role="main">
        <div class="breadcrumbs"><div class="wrap"><ul class="breadcrumbsList"><li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li>{!! $breadcrumb !!}<li>ショップ一覧</li></ul></div></div>
        <div class="tpl_contents">
          <article>
             @if ($template)
	          <section class="introduction">
		        <div class="summary">
			      <div class="wrap">
				    <div class="title">
					    <dl class="row">
					      <dt>
                            <div class="sns">
                              <ul class="snslist">
                                @foreach ($template->sns_list as $sns)
                                  <li><a href="{{ $sns->link }}" target="_blank"><img src="{{ $sns->url }}" alt="" height="45" width="45"></a></li>
                                @endforeach
                              </ul>
                            </div>
                          </dt>
					      <dd><div class="ttl fontM"><h2>{!! $template->title !!}</h2></div></dd>
					    </dl>
				    </div>
				    <div class="lead fontM">
					  {!! $template->body  !!}
				    </div>
			      </div>
		        </div> 
                @if ($template->blog_title)
                  <div class="summary"><div class="title"><div class="ttl fontM">
                    {!! $template->blog_title !!}
                  </div></div></div>
                @endif
                @if ($template->blog_body)
                  {!! $template->blog_body !!}
                @endif
	          </section>
            @endif 

	        <section class="shop">
		      <div class="bg_repeat">
			    <div class="wrap">

				  <div class="shopBtnArea">
            
					<div class="ttl">{{ format_pivot_shop(format_tekute_shop($selected_tags->first()->name ?? '')) }}<p>ショップ一覧</p></div>

				  </div>


				  <div class="shopLinkArea">
					<div class="LinkBox4col">
					  <ul id="search_shops" class="linkList">
                        @include('common/search_result_elements')
					  </ul>
					</div>

                    @if(count($contents) == config('livit.search_count'))
					  <div id="more_button" class="btnMoreLink"><a href="/" class="btn arrowbtm">More</a></div>
                    @endif
				  </div>


			    </div>
		      </div>
	        </section>


          </article>
          <ul class="illust_bg">
            <li><img src="/serviceinfo/assets/img/shop/bg01_pc.svg" alt=""></li>
            <li><img src="/serviceinfo/assets/img/shop/bg02_pc.svg" alt=""></li>
            <li><img src="/serviceinfo/assets/img/shop/bg03_pc.svg" alt=""></li>
            <li><img src="/serviceinfo/assets/img/shop/bg04_pc.svg" alt=""></li>
           </ul>
          <!-- /.tpl_contents --></div>
        <input type="hidden" id="current_page" value="1" />
        <input type="hidden" id="api_search_result_url" value="{{ $search_api_action }}" />
        <input type="hidden" id="search_url" value="{{ route('search') }}" />
      </main>
      @include('layouts.banner')
      @include('layouts.footer')
    </div><!-- /.tpl_wrapper -->
  </div><!-- /. -->
  <!-- [start]script -->
  <script src="/serviceinfo/assets/js/common/jquery.js"></script>
  <script src="/serviceinfo/assets/js/common/base.js"></script>
  <script src="/serviceinfo/assets/js/common/common.js"></script>
  <script src="/serviceinfo/assets/js/common/slick.js"></script>
  <script src="/serviceinfo/assets/js/search/index/index.js"></script>
  <script src="/js/searchbox.js"></script>
  <script src="/js/search_result.js"></script>
  <!-- [end]script -->
  @include('layouts.body_close')
</body>
</html>
