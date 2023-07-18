<!DOCTYPE html>
@include('layouts.meta_head')
<title>tekuteながまち｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="JR長町駅の改札を出て直ぐ目の前、宮城のおみやげ品やスイーツ、生鮮食品などを扱う専門店が揃っており便利です。お買い物中の休憩やお食事ができる飲食店もございます。毎日のお買い物はもちろん、休日のちょっとしたお出かけにもお使いいただけます。">
<meta name="keywords" content="仙台,長町,ショッピング,買い物,飲食店,食料品,生鮮,雑貨,手土産,プレゼント,弁当,惣菜,スイーツ,カフェ,てくて,テクテ,tekute,ＡＴＭ,郵便局,歯科,店舗一覧">
<meta property="og:title" content="tekuteながまち｜JR東日本東北総合サービス株式会社【LiViT】">
<meta property="og:description" content="JR長町駅の改札を出て直ぐ目の前、宮城のおみやげ品やスイーツ、生鮮食品などを扱う専門店が揃っており便利です。お買い物中の休憩やお食事ができる飲食店もございます。毎日のお買い物はもちろん、休日のちょっとしたお出かけにもお使いいただけます。">
<meta property="og:url" content="{{ url()->full() }}">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/slick.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/tekute/tekute.css">
<!-- [end]css -->
@include('layouts.head_close')
</head>
<body id="area02" class="tekute nagamachi">
@include('layouts.body_head')
<div class="serviceIndex">
		<div class="tpl_wrapper">
          @include('layouts.header')
				<main role="main" class="main">
					<div class="breadcrumbs">
								<div class="wrap">
										<ul class="breadcrumbsList">
												<li><a href="/"><img src="/serviceinfo/assets/img/common/ico_breadcrumbs_home.png" alt="home" height="10" width="12"></a></li>
												<li><a href="/tekute/">tekute</a></li>
												<li>tekuteながまち</li>
										</ul>
								</div>
						</div>
						<div class="tpl_contents">
								<div class="headingTtl">
										<p class="logo"><img src="/serviceinfo/assets/img/tekute/ttl.png" alt="tekuteながまち"></p>
										<ul class="sns">
										　　<li class="insta"><a href="https://www.instagram.com/tekutenagamachi/" target="_blank"><img src="/serviceinfo/assets/img/common/btn_insta.png" width="100%" alt=""></a></li>
                                            <li class="line"><a href="https://page.line.me/tekutenagamachi" target="_blank"><img src="/serviceinfo/assets/img/common/btn_line.png" width="100%" alt=""></a></li>
                                        </ul>
								</div>
								<section class="mainVisual"><img src="/serviceinfo/assets/img/tekute/keyvisual.jpg">
									<!-- <div class="video">
										<div id="player"></div>
									</div> -->
									<!-- <ul id="slide" class="main-slider">
										<li><img src="/serviceinfo/assets/img/tekute/keyvisual.jpg" width="100%" alt="" class=""></li>
									</ul> -->
								</section>
                                @include('tekute.search_section', ['selected_tag' => $selected_tag_name])
                                @include('tekute.news_section')

								<section class="event">
										<div class="inner">
												<h2 class="tit"><img src="/serviceinfo/assets/img/tekute/ttl_event.png" alt="Event calender イベント・カレンダー"></h2>
												<div class="calender">
														<div class="responsive-iframe-container">
																<iframe src="https://calendar.google.com/calendar/embed?src=tekutenagamachi%40gmail.com&ctz=Asia%2FTokyo&showTitle=0&showTabs=0" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
														</div>
												</div>
										</div>
								</section>

								@if (count($yomu_tekute_list))
                	<section class="reading">
                  	<div class="inner slickSlider">
											<h2 class="tit"><img src="/serviceinfo/assets/img/tekute/ttl_reading.png" alt="てくてNEWS"></h2>
											<p class="lead">旬の季節限定商品や館内イベントなどをご紹介します！</p>
                        <ul class="slider 3column-slider">
                                                  @foreach ($yomu_tekute_list as $yomu_tekute)
                            <li><a href="{{ route('detail', $yomu_tekute->content_id) }}">
                                <p class="thumb">

                                                                  <img src="{{ $yomu_tekute->image_url }}"  width="100%" alt="">

                                                                </p>
                                <ul class="LBoxTagList">
                                                                  @foreach ($yomu_tekute->tags as $tag)
                                    <li class="{{ $tag['class'] }}">{{ $tag['name'] }}</li>
                                                                  @endforeach
                                </ul>
                                <dl>
                                    <dt>{!! to_plain($yomu_tekute->title) !!}</dt>
                                    <dd><p class="ellipsis">{!! to_plain($yomu_tekute->body) !!}</p></dd>
                                </dl>
                                                          </a>
                            </li>
                                                  @endforeach
                        </ul>
                        <div class="btn_more"><a href="{{ route('tekute-search') }}?tag_names={{urlencode(config('livit.static_tag_names.yomu_tekute')) }},{{urlencode(config('livit.static_tag_names.tekute_nagamachi')) }}"><img src="/serviceinfo/assets/img/tekute-nagamachi/btn_more.gif" alt="More"></a></div>
                  	</div>
                	</section>
								@endif

								<section class="floormap">
										<div class="inner tab">
												<h2 class="tit"><img src="/serviceinfo/assets/img/tekute/ttl_floormap.png" alt="Flore map フロアマップ"></h2>
												<ul class="tab-list">
													<li class="selected "><a href="javascript:void(0)" data-tabid="1">本館</a></li>
													<li class="dropdown"><span class="dropdown-btn">tekute2</span>
														<div class="dropdown-menu"><ul class="dropdown-list">
														<li><a href="javascript:void(0)" data-tabid="2">1F</a></li>
														<li><a href="javascript:void(0)" data-tabid="3">2F</a></li>
													</ul></div></li>
												</ul>
											  <div class="tab-panel">
												<div class="map" data-contentid="1">
														<iframe src="{{ route('tekute-nagamachi-map') }}" width="100%" height="460" scrolling="no"></iframe>
												</div>
												<div class="map hidden" data-contentid="2">
													<iframe src="{{ route('tekute-nagamachi-tekute1-map') }}" width="100%" height="460" scrolling="no"></iframe>
											    </div>
												<div class="map hidden" data-contentid="3">
													<iframe src="{{ route('tekute-nagamachi-tekute2-map') }}" width="100%" height="460" scrolling="no"></iframe>
											    </div>
											   </div>
										</div>
								</section>
								<section class="storeinfo tab">
									<h2 class="tit"><img src="/serviceinfo/assets/img/tekute/ttl_storeinfo.png" alt="Store information 施設情報"></h2>
									<ul class="tab-list">
										<li class="selected"><a href="javascript:void(0)" data-tabid="1">本館</a></li>
										<li><a href="javascript:void(0)" data-tabid="2">tekute2</a></li>
									</ul>
									<div class="tab-panel">
										<div class="shopinfo" data-contentid="1">
											<div class="storedata">
												<div class="photo"><img src="/serviceinfo/assets/img/tekute/store_img.jpg" width="100%" alt=""></div>
												<table>
													<tr class="time">
														<th>本館<br>営業時間</th>
														<td>10:00～20:00　<br>※一部店舗は営業時間が異なります。<br>
																TULLY'S COFFEE 平日7:30～21:00 ・土日祝9:00～21:00<br>
																牛たん炭焼 利久 11:00～22:00<br>
																HACHI'S Cafe&Dining 11:00～21:30<br>
																サンエトワール 7:00～20:00<br>だし廊-Retro- 11:00～21:00</td>
													</tr>
													<tr>
														<th>休館日</th>
														<td>１月１日、9月第二水曜日</td>
													</tr>
													<tr>
														<th>電話番号</th>
														<td class="telLink">022-796-8240</td>
													</tr>
													<tr>															<th>住所</th>
														<td>〒982-0011 宮城県仙台市太白区長町五丁目1番30号
															<div class="btn_map"><a href="https://goo.gl/maps/AY9sDMnuY8T2" target="_blank">MAP</a></div></td>
													</tr>
													<tr>
														<th>アクセス</th>
														<td>JR長町駅（東北本線・仙台空港アクセス線）直結<br>
																仙台市地下鉄長町駅（南北線）より徒歩2分</td>
													</tr>
												</table>
											</div>
											<div class="storebox">
												<div class="box" id="box01">
													<h3 class="tit">ご利用いただける<br>
														電子マネー・クレジットカード</h3>
													<dl>
														<dt>電子マネー</dt>
														<dd><p class="money"><img src="/serviceinfo/assets/img/common/ico_emoney@2x.png" alt="交通系電子マネー"></p>
														</dd>
														<dt>クレジットカード</dt>
														<dd><p class="credit"><img src="/serviceinfo/assets/img/common/ico_credit@2x.png" alt="クレジットカード"></p>
														</dd>
														<dt>QRコード</dt>
														<dd><p class="qrcode"><img src="/serviceinfo/assets/img/common/ico_qrcode@2x.png" alt="QRコード"></p></dd>
														<dt>商品券</dt>
														<dd>びゅう商品券・VJA商品券・Nicos商品券・<br class="pc">JCB商品券・UC商品券</dd>					
													</dl>
												</div>
												<div class="box" id="box02">
													<h3 class="tit">施設サービス</h3>
													<table>
														<tr>
															<th>多機能トイレ</th>
															<td>あり</td>
														</tr>
														<tr>
															<th>授乳・おむつ替え<br>スペース</th>
															<td>あり</td>
														</tr>
														<tr>
															<th>補助犬</th>
															<td>入館可</td>
														</tr>
														<tr>
															<th>その他</th>
															<td>ATM（七十七銀行）</td>
														</tr>
														<tr>
															<th>ポイントカード</th>
															<td class="double-text">JRE POINTカード<br class="pc">（原則税抜100円で1ポイント）</td>
														</tr>
														<tr>
															<th>駐車場</th>
															<td class="double-text">有料駐車場あり<br class="pc">（店舗利用で無料サービスあり）</td>
														</tr>
													</table>
												</div>
											</div>
										</div>

										<div class="shopinfo hidden" data-contentid="2">
											<div class="storedata">
												<div class="photo"><img src="/serviceinfo/assets/img/tekute/store_img_02.jpg" width="100%" alt=""></div>
												<table>
																	<tr class="time">
																			<th>tekute2<br>営業時間</th>
																			<td>
																				<table class="shoptbl" style="margin-top: 0;">
																				    <tr style="border-top: none;">
																						<th style="padding-top: 0;">tekukteながまち<br class="sp">郵便局</th>
																						<td style="padding-top: 0;">郵便 平日 9:00～17:00、土日祝 9:00～17:00<br>貯金・保険 平日 9:00 ～16:00、土日祝 取扱いなし<br>ATM 平日土 8:00～21:00、日祝 9:00～20:00</td>
																					</tr>
																					<tr>
																						<th>串カツ田中</th>
																						<td>平日 12:00～23:00(L.O.22:15)<br>土日祝11:00～23:00(L.O.22:15)</td>
																					</tr>
																					<tr>
																						<th>フラットホワイト<br class="pc">コーヒーファクトリー</th>
																						<td>7:30～21 :00</td>
																					</tr>
																					<tr>
																						<th>ローソン仙台長町駅東口店</th>
																						<td>24時間営業</td>
																					</tr>
																					<tr>
																						<th>個別教室の<br class="sp">アップル</th>
																						<td>電話受付 <br>平日 10:00～21:30<br>土日 10:00～17:00<br>教室開校時間<br>平日 12:30～21:30<br>土日 10:00～18:30<br>定休日 祝日</td>
																					</tr>
																					<tr>
																						<th>長町駅前あい皮ふ科</th>
																						<td>月火木金 9:00～12:00、13:30～17:00<br>土 9:00～13:30<br>休診日 水日祝</td>
																					</tr>
																					<tr>
																						<th>ほけんの窓口<br >tekuteながまち店</th>
																						<td>平日 10:00～19:00<br>土日祝 10:00～18:00<br>定休日 第一水曜日</td>
																					</tr>
																					<tr>
																						<th>ヘアメイク <br class="sp">ビーハイブ</th>
																						<td>10:00~19:30<br>定休日 不定休</td>
																					</tr>
																					<tr>
																						<th>福はら</th>
																						<td>11:00～21:00 (L.O.20:30)</td>
																					</tr>
																					<tr>
																						<th>てくて長町歯科</th>
																						<td>月～土 8:00～13:00、14:30～19:00<br>日 8:00～13:30<br>休診日 祝日</td>
																					</tr>
																				</table>
																			
																			</td>
																	</tr>
																	<tr>
																			<th>休館日</th>
																			<td>１月１日、9月第二水曜日</td>
																	</tr>
																	<tr>
																			<th>電話番号</th>
																			<td class="telLink">022-796-8240</td>
																	</tr>
																	<tr>
																			<th>住所</th>
																			<td>〒982-0007 宮城県仙台市太白区あすと長町１丁目５−４
																					<div class="btn_map"><a href="https://goo.gl/maps/AY9sDMnuY8T2" target="_blank">MAP</a></div></td>
																	</tr>
																	<tr>
																			<th>アクセス</th>
																			<td>JR長町駅（東北本線・仙台空港アクセス線）東口徒歩1分<br>
																					仙台市地下鉄長町駅（南北線）より徒歩2分</td>
																	</tr>
															</table>
											</div>
											<div class="storebox storedata-tekute2">
												<div class="box" id="box01">
													<h3 class="tit">ご利用いただける<br>
														電子マネー・クレジットカード</h3>
														<dl>
														<dt>電子マネー</dt>
														<dd><p class="money"><img src="/serviceinfo/assets/img/common/ico_emoney@2x.png" alt="交通系電子マネー"></p>
														</dd>
														<dt>クレジットカード</dt>
														<dd><p class="credit"><img src="/serviceinfo/assets/img/common/ico_credit@2x.png" alt="クレジットカード"></p>
														</dd>
														<dt>QRコード</dt>
														<dd><p class="qrcode"><img src="/serviceinfo/assets/img/common/ico_qrcode@2x.png" alt="QRコード"></p></dd>
														<dt>商品券</dt>
														<dd>びゅう商品券・VJA商品券・Nicos商品券・<br class="pc">JCB商品券・UC商品券</dd>
													</dl>
												</div>
												<div class="box" id="box02">
													<h3 class="tit">施設サービス</h3>
													<table>
														<tr>
															<th>多機能トイレ</th>
															<td>あり</td>
														</tr>
														<tr>
															<th>おむつ替え<br>スペース</th>
															<td>あり</td>
														</tr>
														<tr>
															<th>補助犬</th>
															<td>入館可</td>
														</tr>
														<tr>
															<th>その他</th>
															<td>ATM（tekuteながまち郵便局内ゆうちょ銀行）</td>
														</tr>
														<tr>
															<th>ポイントカード</th>
															<td class="double-text">JRE POINTカード<br class="pc">（原則税抜100円で1ポイント）</td>
														</tr>
														<tr>
															<th>駐車場</th>
															<td class="double-text">有料駐車場あり<br class="pc">	（店舗利用で無料サービスあり）</td>
														</tr>
													</table>
												</div>
											</div>
										</div>
									</div>
								</section>
								<div class="jrebnr jrebnr-band">
										<div class="logo sp"><img src="/serviceinfo/assets/img/tekute/jrepoint.gif" alt="JRE POINT"></div>
										<dl class="desc">
												<dt>｢tekuteながまち｣での<br class="sp">お買いものがJRE POINTカードで<br class="sp">もっとおトク！</dt>
												<dd>
														<div class="logo pc"><img src="/serviceinfo/assets/img/tekute/jrepoint.gif" alt="JRE POINT"></div>
														<ul class="point">
																<li class="col">原則100円(税抜)ごとに<br>
																		1ポイントが貯まります。</li>
																<li>1ポイント1円として<br>
																		お支払いの際に<br>
																		ご利用いただけます。</li>
																<li>ポイントは｢tekuteながまち｣<br>
																		及びJR東日本グループの<br class="sp">
																		駅ビル等でご利用いただけます。</li>
														</ul>
														<p class="kome">※ポイント付与・利用については一部ご利用いただけない店舗もございます。</p>
														<div class="btn_detail"><a href="https://www.jrepoint.jp/" target="_blank">詳しくはこちら</a></div>
												</dd>
										</dl>
										<div class="band"><p class="text">入会費・年会費 無料！<br class="sp">即日発行！<br class="sp">「本館」生鮮レジにて<br class="sp">入会受付しております。</p><p class="image"><img src="/serviceinfo/assets/img/tekute/jrebnr_img.png" alt=""></p></div>
								</div>
								<section class="park">
										<h2 class="tit">Parking & Bicycle parking 駐車場・駐輪場</h2>
										<ul>
												<li><img src="/serviceinfo/assets/img/tekute/park_pc.gif" class="pc" alt="お客様駐車場・駐輪場料金のご案内"><img src="/serviceinfo/assets/img/tekute/park_sp.gif" class="sp" width="100%" alt=""></li>
												<li><img src="/serviceinfo/assets/img/tekute/access_pc.gif" class="pc" alt="アクセス"><img src="/serviceinfo/assets/img/tekute/access_sp.gif" class="sp" width="100%" alt=""></li>
										</ul>
								</section>
						</div>
				</main>
				@include('layouts.banner')
 				@include('layouts.footer')
				<!-- /.tpl_wrapper --></div>
		<!-- /.serviceIndex -->
</div>
<!-- [start]script -->
<script src="/serviceinfo/assets/js/common/jquery.js"></script>
<script src="/serviceinfo/assets/js/common/base.js"></script>
<script src="/serviceinfo/assets/js/common/common.js"></script>
<script src="/serviceinfo/assets/js/common/matchheight.js"></script>
<script src="/serviceinfo/assets/js/common/slick.js"></script>
<script src="/serviceinfo/assets/js/tekute/script.js"></script>
<script src="/serviceinfo/assets/js/tekute/movie.js"></script>
<!-- [end]script -->
@include('layouts.body_close')
</body>
</html>
