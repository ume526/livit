<div class="kv_changeMap kv_changeMap06">
	<div class="unit bgmap"><img src="/serviceinfo/assets/img/top/map06_bg.png" alt="福島" height="660" width="782" class="pc"><img src="/serviceinfo/assets/img/top/map06_bg_sp.png" alt="福島" class="sp"></div>
	<div class="unit sp_ttlunit"><p><img src="/serviceinfo/assets/img/top/map06_ttl_sp.png" alt="福島県"></p></div>
	<div class="unit ttlunit">
			<div class="kvttl"><p><img src="/serviceinfo/assets/img/top/map_ttl.png" alt="東北６県、駅・駅近のおみやげグルメサービス情報！" height="174" width="292"></p></div>
			<div class="minimap">
				<p class="ttl"><img src="/serviceinfo/assets/img/top/map06_back_ttl.png" alt="福島県" height="47" width="87"></p>
				<p class="map"><img src="/serviceinfo/assets/img/top/map06_back_map.png" alt="福島" height="333" width="185"></p>
				<div class="back"><p class="btn js_changeMapBackBtn">東北６県の地図に戻る</p></div>
			</div>
	</div>


	<div class="unit linkunit">
		<div class="pos">
			<div class="setbtn setbtn01"><a href="{{ route('search') }}?tag_names={{ urlencode('福島駅') }}" class="btn bx"><span>福島駅</span></a></div>
			<div class="setbtn setbtn02"><a href="{{ route('search') }}?tag_names={{ urlencode('郡山駅') }}" class="btn bx"><span>郡山駅</span></a></div>
			<div class="setbtn setbtn03"><a href="{{ route('search') }}?tag_names={{ urlencode('新白河駅') }}" class="btn bx"><span>新白河駅</span></a></div>
			<div class="setbtn setbtn04"><a href="{{ route('search') }}?tag_names={{ urlencode('会津若松駅') }}" class="btn bx"><span>会津若松駅</span></a></div>
			<div class="setbtn setbtn05"><a href="{{ route('search') }}?tag_names={{ urlencode('七日町駅') }}" class="btn bx"><span>七日町駅</span></a></div>
		</div>
	</div>


	<div class="unit slidunit">
		<div class="slidttl"><p><img src="/serviceinfo/assets/img/top/map06_ttl_pc.png" alt="福島県" height="103" width="351"></p></div>
		<div class="slidArea">
			<div class="blk clr">
				<div id="js_slid_map06" class="slider">
                  @include('map.map_slide_elements')
				</div>
			</div>
		</div>
	</div>

	<div class="unit sp_backunit"><div class="back"><p class="btn js_changeMapBackBtn"><img src="/serviceinfo/assets/img/top/map_backbtn_sp.png" alt="東北６県の地図に戻る"></p></div></div>

</div>
