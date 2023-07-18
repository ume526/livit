<div class="kv_changeMap kv_changeMap04">
	<div class="unit bgmap"><img src="/serviceinfo/assets/img/top/map04_bg.png" alt="宮城" height="820" width="862" class="pc"><img src="/serviceinfo/assets/img/top/map04_bg_sp.png" alt="宮城" class="sp"></div>
	<div class="unit sp_ttlunit"><p><img src="/serviceinfo/assets/img/top/map04_ttl_sp.png" alt="宮城県"></p></div>
	<div class="unit ttlunit">
			<div class="kvttl"><p><img src="/serviceinfo/assets/img/top/map_ttl.png" alt="東北６県、駅・駅近のおみやげグルメサービス情報！" height="174" width="292"></p></div>
			<div class="minimap">
				<p class="ttl"><img src="/serviceinfo/assets/img/top/map04_back_ttl.png" alt="宮城県" height="47" width="87"></p>
				<p class="map"><img src="/serviceinfo/assets/img/top/map04_back_map.png" alt="宮城" height="333" width="185"></p>
				<div class="back"><p class="btn js_changeMapBackBtn">東北６県の地図に戻る</p></div>
			</div>
	</div>


	<div class="unit linkunit">
		<div class="pos">
			<div class="setbtn setbtn01"><a href="{{ route('search') }}?tag_names={{ urlencode('仙台駅') }}" class="btn bx"><span>仙台駅</span></a></div>
			<div class="setbtn setbtn02"><a href="{{ route('search') }}?tag_names={{ urlencode('くりこま高原駅') }}" class="btn bx"><span>くりこま高原駅</span></a></div>
			<div class="setbtn setbtn03"><a href="{{ route('search') }}?tag_names={{ urlencode('古川駅') }}" class="btn bx"><span>古川駅</span></a></div>
			<div class="setbtn setbtn04"><a href="{{ route('search') }}?tag_names={{ urlencode('石巻駅') }}" class="btn bx"><span>石巻駅</span></a></div>
			<div class="setbtn setbtn05"><a href="{{ route('search') }}?tag_names={{ urlencode('松島海岸駅') }}" class="btn bx"><span>松島海岸駅</span></a></div>
			<div class="setbtn setbtn06"><a href="{{ route('search') }}?tag_names={{ urlencode('多賀城駅') }}" class="btn bx"><span>多賀城駅</span></a></div>
			<div class="setbtn setbtn07"><a href="{{ route('search') }}?tag_names={{ urlencode('陸前原ノ町駅') }}" class="btn bx"><span>陸前原ノ町駅</span></a></div>
			<div class="setbtn setbtn08"><a href="{{ route('search') }}?tag_names={{ urlencode('北仙台駅') }}" class="btn bx"><span>北仙台駅</span></a></div>
			<div class="setbtn setbtn09"><a href="{{ route('search') }}?tag_names={{ urlencode('長町駅') }}" class="btn bx"><span>長町駅</span></a></div>
			<div class="setbtn setbtn10"><a href="{{ route('search') }}?tag_names={{ urlencode('白石蔵王駅') }}" class="btn bx"><span>白石蔵王駅</span></a></div>
			<div class="setbtn setbtn11"><a href="{{ route('search') }}?tag_names={{ urlencode('本塩釜駅') }}" class="btn bx"><span>本塩釜駅</span></a></div>
			<div class="setbtn setbtn12"><a href="{{ route('search') }}?tag_names={{ urlencode('南仙台駅') }}" class="btn bx"><span>南仙台駅</span></a></div>
			<div class="setbtn setbtn13"><a href="{{ route('search') }}?tag_names={{ urlencode('岩沼駅') }}" class="btn bx"><span>岩沼駅</span></a></div>
			<div class="setbtn setbtn14"><div class="bx"><span>東仙台駅</span></div></div>
			<div class="setbtn setbtn15"><div class="bx"><span>岩切駅</span></div></div>
		</div>
	</div>


	<div class="unit slidunit">
		<div class="slidttl"><p><img src="/serviceinfo/assets/img/top/map04_ttl_pc.png" alt="宮城県" height="103" width="351"></p></div>
		<div class="slidArea">
			<div class="blk clr">
				<div id="js_slid_map04" class="slider">
                  @include('map.map_slide_elements')
				</div>
			</div>
		</div>
	</div>

	<div class="unit sp_backunit"><div class="back"><p class="btn js_changeMapBackBtn"><img src="/serviceinfo/assets/img/top/map_backbtn_sp.png" alt="東北６県の地図に戻る"></p></div></div>

</div>
