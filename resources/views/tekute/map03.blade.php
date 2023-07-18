<!DOCTYPE html>
@include('layouts.meta_head')
<title>tekuteながまちMAP｜JR東日本東北総合サービス株式会社【LiViT】</title>
<meta name="description" content="">
<meta name="keywords" content="">
<meta property="og:title" content="">
<meta property="og:description" content="">
<meta property="og:url" content="">
<!--#include virtual="/serviceinfo/assets/inc/meta_bottom.html" -->
<!-- [start]css -->
<link rel="stylesheet" href="/serviceinfo/assets/css/common/reset.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/base.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/common.css">
<link rel="stylesheet" href="/serviceinfo/assets/css/common/leaflet.css">
<!-- [end]css -->
</head>
<body class="gyutanSushi">

<div id="map"></div>
<script src="/serviceinfo/assets/js/common/jquery.js"></script>
<script src="/serviceinfo/assets/js/common/leaflet.js"></script>
<script>
  var map = L.map('map', {
      maxZoom: 0,
      minZoom: -3,
      crs: L.CRS.Simple
  }).setView([1828,0], -2);
  map.setMaxBounds(new L.LatLngBounds([0,3900], [1828,0]));
  var imageUrl = '/serviceinfo/assets/img/tekute/map02.jpg';
  var imageBounds = [[1828,0], [0,3900]];
  L.imageOverlay(imageUrl, imageBounds, {attribution:''}).addTo(map);
</script>
</body>
</html>
