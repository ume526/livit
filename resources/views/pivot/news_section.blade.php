@if (count($news_list))
  <section class="news">
	<div class="inner slickSlider">
	  <h2 class="tit">NEWS・EVENT | ニュース・イベント</h2>
      <div class="LinkBox3col">
	    <ul class="slider 3column-slider">
          @foreach ($news_list as $news)
		    <li>
              <div class="thumb resizeRatioBox">
                <div class="resizeRatioBoxIn">
                  <p class="resizeRatioImg">
                    <a href="{{ route('detail', $news->content_id) }}">
                      <img src="{{ $news->image_url }}"  width="100%" alt="">
                    </a>
                  </p>
                </div>
              </div>
			  <p class="day">{{ format_date($news->publication_date_time) }}</p>
			  <dl>
			    <dt>{!! to_plain($news->title) !!}</dt>
			    <dd><p>{!! to_plain($news->body) !!}</p></dd>
			  </dl>
			  <ul class="LBoxTagList">
                @foreach ($news->tags as $tag)
                  <li class="{{ $tag['class'] }}">{{ $tag['name'] }}</li>
                @endforeach
			  </ul>
		    </li>
          @endforeach
	  </ul>
      </div>
	  <div class="btn_more"><a href="{{ route('pivot-search') }}?tag_names={{ urlencode($selected_tag_name.',ニュース・イベント') }}"><img src="/serviceinfo/assets/img/pivot/btn_more.png" alt="More"></a></div>
	  <ul class="bgItem">
		<li class="item08"></li>
		<li class="item09"></li>
		<li class="item10 sp"></li>
	  </ul>
	</div>
  </section>
@endif
