@foreach ($contents as $content)
  <div class="sl">
	<a href="{{ route('detail', $content->content_id) }}" class="btn">
	  <p class="img"><img src="{{ $content->image_url }}" alt="{{ $content->title }}" height=260" width="275"></p>
	  <p class="ttl">{!! ellipsis($content->title, 11, 2, false) !!}</p>
	  <p class="desc">{!! ellipsis($content->body, 16, 7, true) !!}</p>
	  <div class="btm"><p>詳しくはこちら！</p></div>
	</a>
  </div>
@endforeach
