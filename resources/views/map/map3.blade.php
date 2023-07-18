<div class="kv_changeMap kv_changeMap03">
	<div class="unit bgmap"><img src="/serviceinfo/assets/img/top/map03_bg.png" alt="岩手" height="800" width="789" class="pc"><img src="/serviceinfo/assets/img/top/map03_bg_sp.png" alt="岩手" class="sp"></div>
	<div class="unit sp_ttlunit"><p><img src="/serviceinfo/assets/img/top/map03_ttl_sp.png" alt="岩手県"></p></div>
	<div class="unit ttlunit">
			<div class="kvttl"><p><img src="/serviceinfo/assets/img/top/map_ttl.png" alt="東北６県、駅・駅近のおみやげグルメサービス情報！" height="174" width="292"></p></div>
			<div class="minimap">
				<p class="ttl"><img src="/serviceinfo/assets/img/top/map03_back_ttl.png" alt="岩手県" height="47" width="87"></p>
				<p class="map"><img src="/serviceinfo/assets/img/top/map03_back_map.png" alt="岩手" height="333" width="185"></p>
				<div class="back"><p class="btn js_changeMapBackBtn">東北６県の地図に戻る</p></div>
			</div>
	</div>


	<div class="unit linkunit">
		<div class="pos">
			<div class="setbtn setbtn01"><a href="{{ route('search') }}?tag_names={{ urlencode('盛岡駅') }}" class="btn bx"><span>盛岡駅</span></a></div>
			<div class="setbtn setbtn02"><a href="{{ route('search') }}?tag_names={{ urlencode('花巻駅') }}" class="btn bx"><span>花巻駅</span></a></div>
			<div class="setbtn setbtn03"><a href="{{ route('search') }}?tag_names={{ urlencode('新花巻駅') }}" class="btn bx"><span>新花巻駅</span></a></div>
			<div class="setbtn setbtn04"><a href="{{ route('search') }}?tag_names={{ urlencode('北上駅') }}" class="btn bx"><span>北上駅</span></a></div>
			<div class="setbtn setbtn05"><a href="{{ route('search') }}?tag_names={{ urlencode('水沢江刺駅') }}" class="btn bx"><span>水沢江刺駅</span></a></div>
			<div class="setbtn setbtn06"><a href="{{ route('search') }}?tag_names={{ urlencode('水沢駅') }}" class="btn bx"><span>水沢駅</span></a></div>
			<div class="setbtn setbtn07"><a href="{{ route('search') }}?tag_names={{ urlencode('平泉駅') }}" class="btn bx"><span>平泉駅</span></a></div>
			<div class="setbtn setbtn08"><a href="{{ route('search') }}?tag_names={{ urlencode('一ノ関駅') }}" class="btn bx"><span>一ノ関駅</span></a></div>
			<div class="setbtn setbtn09"><a href="{{ route('search') }}?tag_names={{ urlencode('釜石駅') }}" class="btn bx"><span>釜石駅</span></a></div>
			<div class="setbtn setbtn10"><a href="{{ route('search') }}?tag_names={{ urlencode('宮古駅') }}" class="btn bx"><span>宮古駅</span></a></div>
			<div class="setbtn setbtn11"><div class="bx"><span>矢幅駅</span></div></div>
		</div>
	</div>


	<div class="unit slidunit">
		<div class="slidttl"><p><img src="/serviceinfo/assets/img/top/map03_ttl_pc.png" alt="岩手県" height="103" width="351"></p></div>
		<div class="slidArea">
			<div class="blk clr">
				<div id="js_slid_map03" class="slider">
                  @include('map.map_slide_elements')
				</div>
			</div>
		</div>
	</div>

	<div class="unit sp_backunit"><div class="back"><p class="btn js_changeMapBackBtn"><img src="/serviceinfo/assets/img/top/map_backbtn_sp.png" alt="東北６県の地図に戻る"></p></div></div>

</div>
