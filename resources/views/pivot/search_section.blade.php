<section class="search">
  <div class="searchArea">
	<div class="acdn bginner">
	  <div class="acdnBlk">
		<dl class="bar js_acdntrigger">
		  <dt>
			<p class="ico"><span></span><span></span></p>
		  </dt>
		  <dd>
			<p class="ttl">What are you looking for? 何をお探しですか？条件で絞り込むことができます。</p>
		  </dd>
		</dl>
	  </div>
	  <div class="acdnPanel">
		<div class="panelInner">
		  <div class="searchBoxFrom">
			<form action="{{ route('pivot-search') }}" method="get" name="topSearch" id="topSearch">
			  <div class="unit unit01 arrow">
				<dl class="row">
				  <dt>
					<p>どこで？</p>
				  </dt>
				  <dd>
					<ul class="fList">
                      @php $idx=1; @endphp
                      @foreach ($place_tags as $tag)
						<li><input id="s{{ $idx }}" name="pt[]" type="checkbox" value="{{ $tag->id }}" @if (isset($selected_tag) && $tag->name == $selected_tag) checked @endif><label for="s{{ $idx }}" class="{{ $tag->class }}">{{ format_pivot_shop($tag->name) }}</label></li>
                        @php $idx++; @endphp
                      @endforeach
					</ul>
				  </dd>
				</dl>
			  </div>
			  <div class="unit unit02 arrow">
				<dl class="row">
				  <dt>
					<p>何を探す？</p>
				  </dt>
				  <dd>
					<ul class="fList">
                      @foreach ($object_tags as $tag)
						<li><input id="s{{ $idx }}" name="ot[]" type="checkbox" value="{{ $tag->id }}"><label for="s{{ $idx }}" class="area0{{ $idx }}">{{ $tag->name }}</label></li>
                        @php $idx++; @endphp
                      @endforeach
					</ul>
				  </dd>
				</dl>
			  </div>
			  <!-- <dl class="row keyword">
				<dt>
				  <p>キーワード</p>
				</dt>
				<dd>
				  <div class="keyBox">
                    <input type="text" placeholder="キーワードを入力してください。" name="keywords">
                    <p class="kome">※{!! keycaption() !!}</p>
                  </div>
				</dd>
			  </dl> -->
			  <ul class="btnList">
				<li>
				  <div class="rst" id="js_allclear">
					<p class="btn">検索条件のクリア</p>
				  </div>
				</li>
				<li>
				  <button class="smt" type='submit'>
					<p class="btn">この条件で検索する</p>
				  </button>
				</li>
			  </ul>
			</form>
		  </div>
		</div>
	  </div>
	</div>
	<ul class="bgItem">
	  <li class="item03 pc"></li>
	  <li class="item04 sp"></li>
	  <li class="item05 pc"></li>
	  <li class="item06 pc"></li>
	  <li class="item07 sp"></li>
	  <li class="item08 sp"></li>
	</ul>
  </div>
</section>
