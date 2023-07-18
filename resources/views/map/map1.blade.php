<div class="kv_changeMap kv_changeMap01">
	<div class="unit bgmap"><img src="/serviceinfo/assets/img/top/map01_bg.png" alt="青森" height="800" width="782" class="pc"><img src="/serviceinfo/assets/img/top/map01_bg_sp.png" alt="青森" class="sp"></div>
	<div class="unit sp_ttlunit"><p><img src="/serviceinfo/assets/img/top/map01_ttl_sp.png" alt="青森県"></p></div>
	<div class="unit ttlunit">
			<div class="kvttl"><p><img src="/serviceinfo/assets/img/top/map_ttl.png" alt="東北６県、駅・駅近のおみやげグルメサービス情報！" height="174" width="292"></p></div>
			<div class="minimap">
				<p class="ttl"><img src="/serviceinfo/assets/img/top/map01_back_ttl.png" alt="青森県" height="47" width="87"></p>
				<p class="map"><img src="/serviceinfo/assets/img/top/map01_back_map.png" alt="青森" height="333" width="185"></p>
				<div class="back"><p class="btn js_changeMapBackBtn">東北６県の地図に戻る</p></div>
			</div>
	</div>


	<div class="unit linkunit">
		<div class="pos">
			<div class="setbtn setbtn01"><a href="{{ route('search') }}?tag_names={{ urlencode('青森駅') }}" class="btn bx"><span>青森駅</span></a></div>
			<div class="setbtn setbtn02"><a href="{{ route('search') }}?tag_names={{ urlencode('新青森駅') }}" class="btn bx"><span>新青森駅</span></a></div>
			<div class="setbtn setbtn03"><a href="{{ route('search') }}?tag_names={{ urlencode('八戸駅') }}" class="btn bx"><span>八戸駅</span></a></div>
			<div class="setbtn setbtn04"><a href="{{ route('search') }}?tag_names={{ urlencode('本八戸駅') }}" class="btn bx"><span>本八戸駅</span></a></div>
		</div>
	</div>


	<div class="unit slidunit">
		<div class="slidttl"><p><img src="/serviceinfo/assets/img/top/map01_ttl_pc.png" alt="青森県" height="103" width="351"></p></div>
		<div class="slidArea">
			<div class="blk clr">
			  <div id="js_slid_map01" class="slider">
                @include('map.map_slide_elements')
			  </div>
			</div>
		</div>
	</div>

	<div class="unit sp_backunit"><div class="back"><p class="btn js_changeMapBackBtn"><img src="/serviceinfo/assets/img/top/map_backbtn_sp.png" alt="東北６県の地図に戻る"></p></div></div>

</div>
