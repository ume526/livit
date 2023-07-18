<div class="kv_changeMap kv_changeMap05">
	<div class="unit bgmap"><img src="/serviceinfo/assets/img/top/map05_bg.png" alt="山形" height="820" width="865" class="pc"><img src="/serviceinfo/assets/img/top/map05_bg_sp.png" alt="山形" class="sp"></div>
	<div class="unit sp_ttlunit"><p><img src="/serviceinfo/assets/img/top/map05_ttl_sp.png" alt="山形県"></p></div>
	<div class="unit ttlunit">
			<div class="kvttl"><p><img src="/serviceinfo/assets/img/top/map_ttl.png" alt="東北６県、駅・駅近のおみやげグルメサービス情報！" height="174" width="292"></p></div>
			<div class="minimap">
				<p class="ttl"><img src="/serviceinfo/assets/img/top/map05_back_ttl.png" alt="山形県" height="47" width="87"></p>
				<p class="map"><img src="/serviceinfo/assets/img/top/map05_back_map.png" alt="山形" height="333" width="185"></p>
				<div class="back"><p class="btn js_changeMapBackBtn">東北６県の地図に戻る</p></div>
			</div>
	</div>


	<div class="unit linkunit">
		<div class="pos">
			<div class="setbtn setbtn01"><a href="{{ route('search') }}?tag_names={{ urlencode('山形駅') }}" class="btn bx"><span>山形駅</span></a></div>
			<div class="setbtn setbtn02"><a href="{{ route('search') }}?tag_names={{ urlencode('新庄駅') }}" class="btn bx"><span>新庄駅</span></a></div>
			<div class="setbtn setbtn03"><a href="{{ route('search') }}?tag_names={{ urlencode('さくらんぼ東根駅') }}" class="btn bx"><span>さくらんぼ東根駅</span></a></div>
			<div class="setbtn setbtn04"><a href="{{ route('search') }}?tag_names={{ urlencode('天童駅') }}" class="btn bx"><span>天童駅</span></a></div>
			<div class="setbtn setbtn05"><a href="{{ route('search') }}?tag_names={{ urlencode('米沢駅') }}" class="btn bx"><span>米沢駅</span></a></div>
		</div>
	</div>


	<div class="unit slidunit">
		<div class="slidttl"><p><img src="/serviceinfo/assets/img/top/map05_ttl_pc.png" alt="山形県" height="103" width="351"></p></div>
		<div class="slidArea">
			<div class="blk clr">
				<div id="js_slid_map05" class="slider">
                  @include('map.map_slide_elements')
				</div>
			</div>
		</div>
	</div>

	<div class="unit sp_backunit"><div class="back"><p class="btn js_changeMapBackBtn"><img src="/serviceinfo/assets/img/top/map_backbtn_sp.png" alt="東北６県の地図に戻る"></p></div></div>

</div>
