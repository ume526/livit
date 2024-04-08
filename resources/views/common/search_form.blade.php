<form action="{{ route('search') }}#search-section" method="get" name="topSearch" id="topSearch">
  <div class="unit unit01 arrow">
    <dl class="row">
  	<dt>
  	  <p>どこで？</p>
  	</dt>
  	<dd>
  	  <div class="firstBox">
  		<ul class="fList">
            @php $p_idx = 1 @endphp
            @foreach ($prefecture_tags as $tag_id => $prefecture)
  			<li><input id="s{{ $p_idx  }}" name="pt[]" type="checkbox" value="{{ $tag_id  }}" @if(in_array($tag_id, $selected_tag_ids)) checked @endif ><label for="s{{ $p_idx }}" class="btn sa{{ $p_idx }}">{{ $prefecture['name'] }}</label></li>
                         @php $p_idx++ @endphp
            @endforeach
  		</ul>
  	  </div>
  	  <div class="secondBox">
          @php
          $p_idx = 1;
          $s_idx = 1;
          @endphp
          @foreach ($prefecture_tags as $tag_id => $prefecture)
  		  <div class="sub sub{{ $p_idx }}">
  			<ul class="secList sec{{ $p_idx }}">
                @foreach ($prefecture['stations'] as $tag_id => $station)
                  <li><input id="s{{ $p_idx }}_{{ $s_idx }}" name="pt[]" type="checkbox" value="{{ $tag_id }}" class="station_btn" data-station="{{ $station['name']  }}" @if(in_array($tag_id, $selected_tag_ids)) checked @endif><label for="s{{ $p_idx }}_{{ $s_idx }}" class="btn {{ config('livit.tag_class_on_search_box')[$station['name']] ?? '' }}">{{ $station['name'] }}</label></li>
                  @php $s_idx++ @endphp
                @endforeach
                @php $p_idx++ @endphp
  			</ul>
  		  </div>
          @endforeach
  	  </div>
  	</dd>
    </dl>
  </div>

  <div class="unit unit02 arrow">
    <dl class="row">
  	<dt>
      <p>何を探す？</p>
  	</dt>
  	<dd>
  	  <div class="acBox cateBox">
        <ul class="caterow" id="objectTags">
  			<li class="cate01">
              <div class="cateitem">
                <div class="catettl"><p>お店を探す</p></div>
                <div class="catew">
                  <ul class="acList">
                    @foreach($shop_tags as $tag)
                      <li>
                        <input id="ac{{ $tag->id }}" name="ot[]" type="checkbox" value="{{ $tag->id }}" @if(in_array($tag->id, $selected_tag_ids)) checked @endif ><label for="ac{{ $tag->id }}" class="btn {{ config('livit.tag_class_on_search_box')[$tag->name] ?? '' }}">{{ $tag->name }}</label>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </li>
  			<li class="cate02">
              <div class="cateitem">
                <div class="catettl"><p>商品を探す</p></div>
                <div class="catew">
                  <ul class="acList">
                    @foreach($product_tags as $tag)
                      <li>
                        <input id="ac{{ $tag->id }}" name="ot[]" type="checkbox" value="{{ $tag->id }}" @if(in_array($tag->id, $selected_tag_ids)) checked @endif ><label for="ac{{ $tag->id }}" class="btn {{ config('livit.tag_class_on_search_box')[$tag->name] ?? '' }}">{{ $tag->name }}</label>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </li>
  			<li class="cate03">
              <div class="cateitem">
                <div class="catettl"><p>情報を探す</p></div>
                <div class="catew">
                  <ul class="acList">
                    @foreach($information_tags as $tag)
                      <li class="{{ config('livit.item_class_on_search_box')[$tag->name] ?? '' }}">
                        <input id="ac{{ $tag->id }}" name="ot[]" type="checkbox" value="{{ $tag->id }}" @if(in_array($tag->id, $selected_tag_ids)) checked @endif ><label for="ac{{ $tag->id }}" class="btn {{ config('livit.tag_class_on_search_box')[$tag->name] ?? '' }}">{{ $tag->name }}</label>
                      </li>
                    @endforeach
                  </ul>
                </div>
              </div>
            </li>
        </ul>
  	  </div>
  	</dd>
    </dl>
  </div>

  <div id="detail" class="unit unit03 arrow">
    <dl class="row">
  	<dt>
  	  <p>さらに詳しく</p>
  	</dt>
  	<dd>
  	  <div class="acBox">
        <ul class="acList" id="detailTags">
          @foreach($detail_tags as $tag)
  			<li><input id="ac{{ $tag->id }}" name="dt[]" type="checkbox" value="{{ $tag->id }}" @if(in_array($tag->id, $selected_tag_ids)) checked @endif ><label for="ac{{ $tag->id }}" class="btn {{ config('livit.tag_class_on_search_box')[$tag->name] ?? '' }}">{{ $tag->name }}</label></li>
          @endforeach
        </ul>
  	  </div>
  	</dd>
    </dl>
  </div>

  <!-- <div class="unit unit04">
    <dl class="row">
  	<dt><p>キーワード</p></dt>
  	<dd>
  	  <div class="keyBox">
	    <input class="keyword" name="keywords" type="text" value="{{ $keywords }}" placeholder="キーワードを入力してください。">
        <p class="keycaption">{!! keycaption() !!}</p>
  	  </div>
  	</dd>
    </dl>
  </div> -->

  <div class="unit unit05">
    <div class="btnBox">
  	<ul class="btnList">
  	  <li><div class="rst" id="js_allclear"><p class="btn">検索条件のクリア</p></div></li>
  	  <li><button class="smt" type='submit'><p class="btn">この条件で検索する</p></button></li>
  	</ul>
    </div>
  </div>

</form>
