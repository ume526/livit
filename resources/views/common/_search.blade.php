<!DOCTYPE html>
@include('layouts.meta_head')
@php
if (!$meta_description) {
    $meta_description = 'JR東日本グループ「JR東日本東北総合サービス株式会社」の公式サイトです。東北６県の駅を起点に展開するエキナカ店舗やショッピングセンター、月極駐車場などのサービス情報をご覧いただけます。目的の県や駅からショップ情報が検索できます。';
}
@endphp
<title>検索結果｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="{{ $meta_description }}">
<meta name="keywords" content="{{ $meta_keywords ?? '' }}">
<meta property="og:title" content="検索結果｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="{{ $meta_description }}">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/slick.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/search/index/index.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body>
  <div class="searchIndex">
    <div class="tpl_wrapper">
      @include('layouts.header')
      <main role="main">
        <div class="breadcrumbs"><div class="wrap"><ul class="breadcrumbsList"><li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li>{!! $breadcrumb !!}<li>検索結果</li></ul></div></div>
        <div class="tpl_contents">
          <article>
            @if ($template)
	          <section class="introduction">
		        <div class="keyvisual">
			      <div class="wrap">
                    <div class="slidArea">
                      <div class="blk clr">
                        <div id="js_kvSlider" class="slider">
                          @for ($i = 1; $i <= config('livit.template1_num_images'); $i++)
                            @php
                            $image_pc_url = "image_pc${i}_url";
                            $image_sp_url = "image_sp${i}_url";
                            @endphp
                            @if ($template->$image_pc_url || $template->$image_sp_url)
                            <div class="sl">
      	                      <h1>
                                @if ($template->$image_pc_url)
                                  <img src="{{ $template->$image_pc_url }}" height="500" width="1400" class="imgpc">
                                @else
                                  <img src="{{ $template->$image_sp_url }}" class="imgpc">
                                @endif
                                @if ($template->$image_sp_url)
                                  <img src="{{ $template->$image_sp_url }}" class="imgsp">
                                @else
                                  <img src="{{ $template->$image_pc_url }}" class="imgsp">
                                @endif
                              </h1>
                            </div>
                            @endif
                          @endfor
                        </div>
                      </div>
                    </div>
		          </div>
                </div>
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
	        <section id="search-section" class="search">
		      <div class="bgHead"></div>
		      <div class="bgMian">
			    <div class="wrap">
				  <div class="pos">

					<div class="setObj setObj01"><p class="obj"><img src="/serviceinfo/assets/img/search/index/obj_search_01.png" alt="" height="164" width="122"></p></div>
					<div class="setObj setObj02"><p class="obj"><img src="/serviceinfo/assets/img/search/index/obj_search_02.png" alt="" height="174" width="147"></p></div>
					<div class="setObj setObj03"><p class="obj"><img src="/serviceinfo/assets/img/search/index/obj_search_03.png" alt="" height="183" width="63"></p></div>
					<div class="setObj setObj04"><p class="obj"><img src="/serviceinfo/assets/img/search/index/obj_search_04.png" alt="" height="162" width="147"></p></div>

                    <div class="searchArea">
                      <div class="acdn bginner">
	                    <div class="acdnBlk">
	                      <div class="ttlsub"><p><img src="/serviceinfo/assets/img/search/index/ttl_sub_search.png" alt="What are you looking for?" height="13" width="183"></p></div>
	                      <dl class="bar js_acdntrigger">
		                    <dt><p class="ico"><span></span><span></span></p></dt>
		                    <dd><p class="ttl fontM">何をお探しですか？</p></dd>
	                      </dl>
	                      <div class="lead"><p>条件で絞り込むことができます。</p></div>
	                    </div>
	                    <div class="acdnPanel">
	                      <div class="panelInner">

		                    <div class="searchBoxFrom">

                              @include($search_form)

		                    </div>

	                      </div>
	                    </div>
                      </div>
                    </div>
				  </div>
			    </div>
		      </div>
		      <div class="bgBottom"></div>
	        </section>

	        <section class="result">
		      <div class="bg_repeat">
			    <div class="wrap">

				  <div class="resultBtnArea">
					<div class="ttl"><p>検索結果</p></div>
                    @if($selected_tags || $keywords)
					  <dl class="row">
					    <dt><p>検索条件：</p></dt>
					    <dd>
						  <ul class="tagList">
						    <li class="sp"><p class="tl">検索条件：</p></li>
                            @foreach ($selected_tags as $tag)
                              @php
                              if ($tag->name == ($parent_tag_name ?? null))  {
                                $button_class = 'remove_parent_button';
                              } else {
                                $button_class = 'remove_button';
                              }
                              @endphp
							  <li class="{{ $button_class }}" data-tag-id="{{ $tag->id }}"><p class="tag {{ $tag->class }}">{{ format_pivot_shop($tag->name) }}</p></li>
                            @endforeach
                            @if ($keywords)
							  <li class="remove_button" data-keywords="{{ $keywords }}"><p class="tag ac1">{{ $keywords }}</p></li>
                            @endif
						  </ul>
					    </dd>
					  </dl>
					  <div class="rst"><p class="btn">検索条件のクリア</p></div>
                    @endif
				  </div>


				  <div class="resultLinkArea">
					<div class="LinkBox3col">
					  <ul id="search_results" class="linkList">
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
