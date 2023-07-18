<!DOCTYPE html>
@include('layouts.meta_head')
<title>郡山駅食品館ピボット フロアMAP｜JR東日本東北総合サービス株式会社</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:url" content="">
@include('layouts.meta_bottom')
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/leaflet.css">
<style>
.leaflet-container{
	height:800px;
}
</style>
<!-- [end]css -->
</head>
<body>

<div id="map"></div>
<script src="/serviceinfo/assets/js/common/jquery.js"></script>
<script src="/serviceinfo/assets/js/common/leaflet.js"></script>
<script>
  var map = L.map('map', {
      maxZoom: 0,
      minZoom: -3,
      crs: L.CRS.Simple
  }).setView([3220,0], -2);
  map.setMaxBounds(new L.LatLngBounds([0,2098], [3220,0]));
  var imageUrl = '/serviceinfo/assets/img/pivot/koriyama_map.jpg';
  var imageBounds = [[3220,0], [0,2098]];
  L.imageOverlay(imageUrl, imageBounds, {attribution:''}).addTo(map);
</script>
</body>
</html>
