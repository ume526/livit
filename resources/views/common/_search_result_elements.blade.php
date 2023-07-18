@foreach ($contents as $content)
  <li>
	<a href="{{ route('detail', $content->content_id)  }}" class="btn">
	  <div class="resizeRatioBox"><div class="resizeRatioBoxIn"><p class="resizeRatioImg"><img src="{{ $content->image_url }}" alt=""></p></div></div>
	  <ul class="LBoxTagList">
        @foreach ($content->tags as $tag)
          <li><p class="{{ $tag['class'] }}">{{ $tag['name'] }}</p></li>
        @endforeach
      </ul>
      <p class="ttl">{!! ellipsis($content->title, 20, 2, false) !!}</p>
      <div class="desc">{!! ellipsis($content->body, 20, 4, true) !!}</div>
	</a>
  </li>
@endforeach
