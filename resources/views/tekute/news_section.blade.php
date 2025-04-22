@if (count($news_list))
	<section class="news">
		<div class="inner slickSlider">
			<h2 class="tit"><img src="/serviceinfo/assets/img/tekute/ttl_news.png" alt="News event ニュース・イベント"></h2>
			<div class="LinkBox3col ">
				<ul class="slider 3column-slider">
          @foreach ($news_list as $news)
						<li>
							<a href="{{ route('detail', $news->content_id) }}">
								<div class="resizeRatioBox">
									<div class="resizeRatioBoxIn">
										<div class="resizeRatioImg"> <img src="{{ $news->image_url }}" alt=""> </div>
									</div>
								</div>
								<ul class="LBoxTagList">
                  @foreach ($news->tags as $tag)
										<li class="{{ $tag['class'] }}">{{ $tag['name'] }}</li>
									@endforeach
								</ul>
								<p class="day">{{ format_date($news->publication_date_time) }}</p>
								<dl>
					    		<dt>{!! to_plain($news->title) !!}</dt>
					        <dd><p class="ellipsis">{!! to_plain($news->body) !!}</p></dd>
								</dl>
							</a>
						</li>
					@endforeach
				</ul>
			</div>	
			<div class="btn_more"><a href="{{ route('tekute-search') }}?tag_names={{ urlencode($selected_tag_name.',ニュース・イベント') }}"><img src="/serviceinfo/assets/img/tekute/btn_more.gif" alt="More"></a></div>

		</div>
	</section>
@endif
