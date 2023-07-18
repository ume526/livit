@foreach ($contents as $content)
  <li>
	<a href="{{ route('detail', $content->content_id)  }}" class="btn">
	  <div class="resizeRatioBox"><div class="resizeRatioBoxIn"><p class="resizeRatioImg"><img src="{{ $content->image_url }}" alt=""></p></div></div>
	  <ul class="LBoxTagList">
        @foreach ($content->tags as $tag)
          <li><p class="{{ $tag['class'] }}">{{ $tag['name'] }}</p></li>
        @endforeach
      </ul>
      <p class="ttl">{{ $content->title }}</p>
      <div class="desc"><p>{!! to_plain($content->body) !!}</p></div>
	</a>
  </li>
@endforeach
